<?php

namespace JobMetric\CustomField;

use Illuminate\Support\Facades\Blade;
use JobMetric\CustomField\View\Components\ErrorJs;
use JobMetric\CustomField\View\Components\Text;
use JobMetric\PackageCore\Exceptions\ViewFolderNotFoundException;
use JobMetric\PackageCore\PackageCore;
use JobMetric\PackageCore\PackageCoreServiceProvider;

class CustomFieldServiceProvider extends PackageCoreServiceProvider
{
    /**
     * @param PackageCore $package
     *
     * @return void
     * @throws ViewFolderNotFoundException
     */
    public function configuration(PackageCore $package): void
    {
        $package->name('laravel-custom-field')
            ->hasTranslation()
            ->hasView();
    }

    /**
     * After Boot Package
     *
     * @return void
     */
    public function afterBootPackage(): void
    {
        // add alias for components
        Blade::component(Text::class, 'text-field');
        Blade::component(ErrorJs::class, 'error-js');
    }
}
