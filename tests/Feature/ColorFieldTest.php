<?php

namespace JobMetric\CustomField\Tests\Feature;

use JobMetric\CustomField\CustomFieldBuilder;
use JobMetric\CustomField\Tests\TestCase;
use Throwable;

class ColorFieldTest extends TestCase
{
    /**
     * @throws Throwable
     */
    public function test_color_field_renders_basic_attributes(): void
    {
        $field = CustomFieldBuilder::color()
            ->name('favcolor')
            ->label('Favorite Color')
            ->info('Pick a color')
            ->required();

        $htmlArray = $field->build()->toHtml();
        $this->assertIsArray($htmlArray);
        $html = $htmlArray['body'];

        $this->assertStringContainsString('<input type="color"', $html);
        $this->assertStringContainsString('name="favcolor"', $html);
        $this->assertStringContainsString('class="required"', $html);
    }
}
