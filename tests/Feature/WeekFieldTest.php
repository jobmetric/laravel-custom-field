<?php

namespace JobMetric\CustomField\Tests\Feature;

use JobMetric\CustomField\CustomFieldBuilder;
use JobMetric\CustomField\Tests\TestCase;
use Throwable;

class WeekFieldTest extends TestCase
{
    /**
     * @throws Throwable
     */
    public function test_week_field_renders_input(): void
    {
        $field = CustomFieldBuilder::week()
            ->name('week_of_year')
            ->label('Week');

        $html = $field->build()->toHtml();

        $this->assertStringContainsString('<input type="week"', $html);
        $this->assertStringContainsString('name="week_of_year"', $html);
    }
}

