﻿<?php

namespace JobMetric\CustomField;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use JobMetric\CustomField\Contracts\FieldContract;
use JobMetric\CustomField\Exceptions\BladeNamespaceRegistrationException;
use JobMetric\CustomField\Exceptions\BladeViewNotFoundException;
use JobMetric\CustomField\Support\CustomFieldRegistry;
use JobMetric\PackageCore\Enums\RegisterClassTypeEnum;
use JobMetric\PackageCore\Exceptions\RegisterClassTypeNotFoundException;
use JobMetric\PackageCore\PackageCore;
use JobMetric\PackageCore\PackageCoreServiceProvider;
use ReflectionException;

class CustomFieldServiceProvider extends PackageCoreServiceProvider
{
    /**
     * @param PackageCore $package
     *
     * @return void
     * @throws RegisterClassTypeNotFoundException
     */
    public function configuration(PackageCore $package): void
    {
        $package
            ->name('laravel-custom-field')
            ->hasConfig()
            ->hasTranslation()
            ->registerClass('CustomFieldRegistry', CustomFieldRegistry::class, RegisterClassTypeEnum::SINGLETON());
    }

    /**
     * after register package
     *
     * @return void
     * @throws BindingResolutionException
     */
    public function afterRegisterPackage(): void
    {
        $registry = $this->app->make('CustomFieldRegistry');

        $registry->register(new \JobMetric\CustomField\CustomFields\Color\Color);
        $registry->register(new \JobMetric\CustomField\CustomFields\Date\Date);
        $registry->register(new \JobMetric\CustomField\CustomFields\DateTimeLocal\DateTimeLocal);
        $registry->register(new \JobMetric\CustomField\CustomFields\Email\Email);
        $registry->register(new \JobMetric\CustomField\CustomFields\Hidden\Hidden);
        $registry->register(new \JobMetric\CustomField\CustomFields\Image\Image);
        $registry->register(new \JobMetric\CustomField\CustomFields\Month\Month);
        $registry->register(new \JobMetric\CustomField\CustomFields\Number\Number);
        $registry->register(new \JobMetric\CustomField\CustomFields\Password\Password);
        $registry->register(new \JobMetric\CustomField\CustomFields\Radio\Radio);
        $registry->register(new \JobMetric\CustomField\CustomFields\Range\Range);
        $registry->register(new \JobMetric\CustomField\CustomFields\Select\Select);
        $registry->register(new \JobMetric\CustomField\CustomFields\Text\Text);
    }

    /**
     * after boot package
     *
     * @return void
     * @throws BindingResolutionException
     * @throws ReflectionException
     * @throws BladeNamespaceRegistrationException
     * @throws BladeViewNotFoundException
     */
    public function afterBootPackage(): void
    {
        /** @var CustomFieldRegistry $registry */
        $registry = $this->app->make('CustomFieldRegistry');

        foreach ($registry->all() as $customField) {
            $fqcn = get_class($customField);
            $dirPath = class_directory_path($fqcn);

            if (! $dirPath) {
                // If class path cannot be resolved, skip silently or throw a dedicated exception if you prefer.
                continue;
            }

            // Expect a "views" directory containing "default.blade.php".
            $viewsPath = $dirPath . DIRECTORY_SEPARATOR . 'views';
            $defaultTemplate = $viewsPath . DIRECTORY_SEPARATOR . 'default.blade.php';

            if (! is_dir($viewsPath)) {
                throw new BladeViewNotFoundException('N/A (namespace not bound yet)', $viewsPath . ' (directory missing)');
            }

            if (! file_exists($defaultTemplate)) {
                throw new BladeViewNotFoundException('N/A (namespace not bound yet)', $defaultTemplate);
            }

            if (! $customField instanceof FieldContract) {
                // Contract violation; you may throw here too if you want strictness.
                continue;
            }

            $type = $customField::type();
            $ns = 'custom-field-' . Str::kebab($type);

            View::addNamespace($ns, $viewsPath);

            // Validate namespace hint registration
            if (! array_key_exists($ns, View::getFinder()->getHints())) {
                throw new BladeNamespaceRegistrationException($ns, $viewsPath);
            }

            // Validate entry view resolution
            if (! View::exists("{$ns}::view")) {
                throw new BladeViewNotFoundException("{$ns}::view", $defaultTemplate);
            }

            // Publish assets if present
            $assetsPath = $dirPath . DIRECTORY_SEPARATOR . 'assets';
            if (is_dir($assetsPath)) {
                $target = public_path('assets/vendor/custom-fields/' . Str::kebab($type));

                // Map directory-to-directory; Laravel will copy recursively.
                $this->publishes([$assetsPath => $target], [
                    'custom-field-assets',
                    'custom-field-assets:' . $type,
                ]);
            }

            $customField->init($customField);
        }
    }
}
