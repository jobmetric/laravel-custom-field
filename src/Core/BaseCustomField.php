<?php

namespace JobMetric\CustomField\Core;

use Illuminate\Support\Str;
use JobMetric\CustomField\Contracts\FieldContract;
use JobMetric\CustomField\CustomFieldBuilder;
use JobMetric\CustomField\Fields\BaseField;

abstract class BaseCustomField
{
    use BaseField;

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
    public function boot(FieldContract $customField): void
    {
        CustomFieldBuilder::macro(Str::camel($customField::alias()), function () use ($customField) {
            CustomFieldBuilder::$fieldContract = $customField;

            return $this;
        });

        $this->afterBoot($customField);
    }

    /**
     * After boot logic for the custom field.
     *
     * @param FieldContract $customField
     *
     * @return void
     */
    public function afterBoot(FieldContract $customField)
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
        $scripts = [];
        foreach ($this->scripts as $script) {
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
        $styles = [];
        foreach ($this->styles as $style) {
            if($this->getAssetPath($style)) {
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
     * @return string|null
     */
    protected function getAssetPath(string $file): ?string
    {
        $path = 'assets/vendor/custom-field/' . static::alias() . '/' . $file;

        if (! file_exists($path)) {
            return null;
        }

        return $path;
    }
}
