<?php

namespace JobMetric\CustomField;

use Illuminate\Support\Facades\Blade;
use JobMetric\CustomField\View\Components\Checkbox;
use JobMetric\CustomField\View\Components\Date;
use JobMetric\CustomField\View\Components\Datetime;
use JobMetric\CustomField\View\Components\ErrorForm;
use JobMetric\CustomField\View\Components\ErrorJs;
use JobMetric\CustomField\View\Components\Number;
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
        Blade::component(Number::class, 'number-field');
        Blade::component(Date::class, 'date-field');
        Blade::component(Datetime::class, 'datetime-field');
        Blade::component('custom-field::components.checkbox_radio_parent_inline', 'checkbox-radio-parent-inline');
        Blade::component(Checkbox::class, 'checkbox-field');
        Blade::component(ErrorJs::class, 'error-js');
        Blade::component(ErrorForm::class, 'error-form');
    }
}
