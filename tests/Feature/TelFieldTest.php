<?php

namespace JobMetric\CustomField\Tests\Feature;

use JobMetric\CustomField\CustomFieldBuilder;
use JobMetric\CustomField\Tests\TestCase;
use Throwable;

class TelFieldTest extends TestCase
{
    /**
     * @throws Throwable
     */
    public function test_tel_field_renders_input(): void
    {
        $field = CustomFieldBuilder::tel()
            ->name('phone')
            ->label('Phone');

        $htmlArray = $field->build()->toHtml();
        $this->assertIsArray($htmlArray);
        $html = $htmlArray['body'];

        $this->assertStringContainsString('<input type="tel"', $html);
        $this->assertStringContainsString('name="phone"', $html);
    }
}
