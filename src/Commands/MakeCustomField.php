<?php

namespace JobMetric\CustomField\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;
use JobMetric\PackageCore\Commands\ConsoleTools;

class MakeCustomField extends Command
{
    use ConsoleTools;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'custom-field:make
                {name : Field name (e.g., Text)}
                {--t|--template=default : Blade template name or comma-separated list}
                {--f|--force : Overwrite if exists}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new custom field class and view template';

    /**
     * Execute the console command.
     *
     * @param Filesystem $files
     *
     * @return int
     */
    public function handle(Filesystem $files): int
    {
        $appNamespace = trim(appNamespace(), "\\");

        $name = (string) $this->argument('name');
        $templateOption = (string) $this->option('template') ?: 'default';
        // Support comma-separated templates; always include 'default'
        $templates = collect(array_filter(array_map('trim', explode(',', $templateOption))))
            ->map(fn ($t) => $t ?: 'default')
            ->unique()
            ->values();
        if (! $templates->contains('default')) {
            $templates->prepend('default');
        }
        $force = (bool) $this->option('force');

        if (empty($name) || ! preg_match('/^[A-Za-z][A-Za-z0-9_-]*$/', $name)) {
            $this->message('Invalid field name. Use only letters, numbers, and underscores, starting with a letter.', 'error');

            return self::FAILURE;
        }

        $studly = Str::studly($name);
        $slug = Str::kebab($name);
        $ns = $appNamespace . '\\CustomFields\\' . $studly;

        $targetDir = app_path('CustomFields' . DIRECTORY_SEPARATOR . $studly);
        $classTarget = $targetDir . DIRECTORY_SEPARATOR . $studly . '.php';
        $viewsDir = $targetDir . DIRECTORY_SEPARATOR . 'views';

        // stub contents
        $classContent = $this->getStub(__DIR__ . "/stub/FieldClass", [
            'namespace' => $ns,
            'class'     => $studly,
            'type'      => $slug,
        ]);
        $viewContent = $this->getStub(__DIR__ . "/stub/view");

        // create custom field directory
        if (! $this->isDir($targetDir)) {
            $this->makeDir($targetDir);
        }

        if ($this->isFile($classTarget) && ! $force) {
            $this->message("Custom Field class already exists: <options=bold>[$ns]</>, Use --force to overwrite.", 'error');

            return self::FAILURE;
        }
        $this->putFile($classTarget, $classContent);

        // create views directory
        if (! $this->isDir($viewsDir)) {
            $this->makeDir($viewsDir);
        }

        foreach ($templates as $tpl) {
            $bladeTarget = $viewsDir . DIRECTORY_SEPARATOR . $tpl . '.blade.php';
            if ($this->isFile($bladeTarget) && ! $force) {
                $this->message("View already exists: <options=bold>[$bladeTarget]</>. Skipped (use --force to overwrite).", 'warning');
                continue;
            }
            $this->putFile($bladeTarget, $viewContent);
        }

        $this->message("Custom Field <options=bold>[$ns]</> created successfully.", "success");

        // tips for registration
        $this->line('');
        $this->info('Next steps:');
        $this->line('- Register your new field in a service provider using CustomFieldRegistry.');
        $this->line("  Example: app('CustomFieldRegistry')->register(new \\$ns\\$studly);");

        return self::SUCCESS;
    }
}
