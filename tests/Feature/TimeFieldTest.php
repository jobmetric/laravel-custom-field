<?php

namespace JobMetric\CustomField\Tests\Feature;

use JobMetric\CustomField\CustomFieldBuilder;
use JobMetric\CustomField\Tests\TestCase;
use Throwable;

class TimeFieldTest extends TestCase
{
    /**
     * @throws Throwable
     */
    public function test_time_field_renders_picker_markup(): void
    {
        $field = CustomFieldBuilder::time()
            ->name('meeting_time')
            ->label('Meeting Time');

        $html = $field->build()->toHtml();

        // Uses custom input-group time picker markup in the theme
        $this->assertStringContainsString('id="kt_td_picker_time_only"', $html);
        $this->assertStringContainsString('data-td-toggle="datetimepicker"', $html);
    }
}

