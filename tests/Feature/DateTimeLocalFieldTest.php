<?php

namespace JobMetric\CustomField\Tests\Feature;

use JobMetric\CustomField\CustomFieldBuilder;
use JobMetric\CustomField\Tests\TestCase;
use Throwable;

class DateTimeLocalFieldTest extends TestCase
{
    /**
     * @throws Throwable
     */
    public function test_datetime_local_field_renders_input(): void
    {
        $field = CustomFieldBuilder::dateTimeLocal()
            ->name('appointment')
            ->label('Appointment');

        $html = $field->build()->toHtml();

        $this->assertStringContainsString('<input type="datetime-local"', $html);
        $this->assertStringContainsString('name="appointment"', $html);
    }
}

