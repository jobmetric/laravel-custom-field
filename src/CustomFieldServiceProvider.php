<?php

namespace JobMetric\CustomField;

use JobMetric\PackageCore\PackageCore;
use JobMetric\PackageCore\PackageCoreServiceProvider;

class CustomFieldServiceProvider extends PackageCoreServiceProvider
{
    /**
     * @param PackageCore $package
     *
     * @return void
     */
    public function configuration(PackageCore $package): void
    {
        $package->name('laravel-custom-field')
            ->hasTranslation();
    }
}
