<?php

namespace JobMetric\CustomField\Core;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use JobMetric\CustomField\Contracts\FieldContract;
use JobMetric\CustomField\CustomFieldBuilder;
use JobMetric\CustomField\Fields\BaseField;

abstract class BaseCustomField
{
    use BaseField;

    /**
     * The actual blade template resolved for this instance
     * (e.g. 'default', 'bootstrap', 'tailwind').
     * If null, it will be lazily resolved.
     *
     * @var string|null
     */
    protected ?string $resolvedTemplate = null;

    /**
     * The scripts to be included for the custom field.
     *
     * @var array
     */
    public array $scripts = [];

    /**
     * The styles to be included for the custom field.
     *
     * @var array
     */
    public array $styles = [];

    /**
     * Boot the custom field by registering its macro.
     *
     * @param FieldContract $customField
     *
     * @return void
     */
    public function init(FieldContract $customField): void
    {
        CustomFieldBuilder::macro(Str::camel($customField::type()), function () use ($customField) {
            // Provide a fresh instance for each builder chain to avoid shared state
            $instance = clone $customField;
            CustomFieldBuilder::$fieldContract = $instance;

            return $instance;
        });

        $this->boot($customField);
    }

    /**
     * Boot logic for the custom field.
     *
     * @param FieldContract $customField
     *
     * @return void
     */
    public function boot(FieldContract $customField)
    {
        // Implement any after boot logic if needed
    }

    /**
     * Get the scripts for the custom field.
     *
     * @return array
     */
    public function getScripts(): array
    {
        $this->ensureTemplateResolved();

        $scripts = [];
        $list = $this->scripts[$this->resolvedTemplate] ?? [];
        foreach ($list as $script) {
            if ($this->getAssetPath($script)) {
                $scripts[] = $this->getAssetPath($script);
            }
        }

        return $scripts;
    }

    /**
     * Get the styles for the custom field.
     *
     * @return array
     */
    public function getStyles(): array
    {
        $this->ensureTemplateResolved();

        $styles = [];
        $list = $this->styles[$this->resolvedTemplate] ?? [];
        foreach ($list as $style) {
            if ($this->getAssetPath($style)) {
                $styles[] = $this->getAssetPath($style);
            }
        }

        return $styles;
    }

    /**
     * Get the asset path for a given file.
     *
     * @param string $file
     *
     * @return string
     */
    protected function getAssetPath(string $file): string
    {
        return 'assets/vendor/custom-fields/' . Str::kebab(static::type()) . '/' . $file;
    }

    /**
     * Ensure the template is resolved and cached on this instance.
     *
     * @return void
     */
    private function ensureTemplateResolved(): void
    {
        if ($this->resolvedTemplate === null) {
            $configured = config('custom-field.template', 'default');
            $ns = 'custom-field-' . Str::kebab(static::type());

            $this->resolvedTemplate = View::exists("{$ns}::{$configured}") ? $configured : 'default';
        }
    }
}
