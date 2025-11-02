<?php

namespace JobMetric\CustomField\Tests\Feature;

use JobMetric\CustomField\CustomFieldBuilder;
use JobMetric\CustomField\Tests\TestCase;
use Throwable;

class RangeFieldTest extends TestCase
{
    /**
     * @throws Throwable
     */
    public function test_range_field_renders_with_min_max_and_class(): void
    {
        $field = CustomFieldBuilder::range()
            ->name('volume')
            ->label('Volume')
            ->min(0)
            ->max(10);

        $htmlArray = $field->build()->toHtml();
        $this->assertIsArray($htmlArray);
        $html = $htmlArray['body'];

        $this->assertStringContainsString('<input type="range"', $html);
        $this->assertStringContainsString('name="volume"', $html);
        $this->assertStringContainsString('min="0"', $html);
        $this->assertStringContainsString('max="10"', $html);
        $this->assertStringContainsString('form-range', $html);
    }
}
