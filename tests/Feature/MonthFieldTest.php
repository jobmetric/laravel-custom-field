<?php

namespace JobMetric\CustomField\Tests\Feature;

use JobMetric\CustomField\CustomFieldBuilder;
use JobMetric\CustomField\Tests\TestCase;
use Throwable;

class MonthFieldTest extends TestCase
{
    /**
     * @throws Throwable
     */
    public function test_month_field_renders_input(): void
    {
        $field = CustomFieldBuilder::month()
            ->name('salary_month')
            ->label('Salary Month');

        $html = $field->build()->toHtml();

        $this->assertStringContainsString('<input type="month"', $html);
        $this->assertStringContainsString('name="salary_month"', $html);
    }
}

