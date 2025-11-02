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

        $htmlArray = $field->build()->toHtml();
        $this->assertIsArray($htmlArray);
        $html = $htmlArray['body'];

        $this->assertStringContainsString('<input type="month"', $html);
        $this->assertStringContainsString('name="salary_month"', $html);
    }
}
