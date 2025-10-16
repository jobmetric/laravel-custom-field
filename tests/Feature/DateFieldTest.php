<?php

namespace JobMetric\CustomField\Tests\Feature;

use JobMetric\CustomField\CustomFieldBuilder;
use JobMetric\CustomField\Tests\TestCase;
use Throwable;

class DateFieldTest extends TestCase
{
    /**
     * @throws Throwable
     */
    public function test_date_field_renders_picker_markup(): void
    {
        $field = CustomFieldBuilder::date()
            ->name('birthdate')
            ->label('Birthdate')
            ->info('Select your birth date');

        $html = $field->build()->toHtml();

        // Uses custom input-group date picker markup in the theme
        $this->assertStringContainsString('id="kt_td_picker_date_only"', $html);
        $this->assertStringContainsString('data-td-toggle="datetimepicker"', $html);
    }
}

