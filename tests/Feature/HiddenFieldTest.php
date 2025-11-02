<?php

namespace JobMetric\CustomField\Tests\Feature;

use JobMetric\CustomField\CustomFieldBuilder;
use JobMetric\CustomField\Tests\TestCase;
use Throwable;

class HiddenFieldTest extends TestCase
{
    /**
     * @throws Throwable
     */
    public function test_hidden_field_renders_with_value(): void
    {
        $field = CustomFieldBuilder::hidden()
            ->name('token')
            ->value('abc123');

        $htmlArray = $field->build()->toHtml();
        $this->assertIsArray($htmlArray);
        $html = $htmlArray['body'];

        $this->assertStringContainsString('<input type="hidden"', $html);
        $this->assertStringContainsString('name="token"', $html);
        $this->assertStringContainsString('value="abc123"', $html);
    }
}
