<?php

namespace JobMetric\CustomField\Tests\Feature;

use JobMetric\CustomField\CustomFieldBuilder;
use JobMetric\CustomField\Tests\TestCase;
use Throwable;

class EmailFieldTest extends TestCase
{
    /**
     * @throws Throwable
     */
    public function test_email_field_renders_input_group(): void
    {
        $field = CustomFieldBuilder::email()
            ->name('email')
            ->label('Email');

        $htmlArray = $field->build()->toHtml();
        $this->assertIsArray($htmlArray);
        $html = $htmlArray['body'];

        // Theme uses an input-group example markup with domain suffix
        $this->assertStringContainsString('input-group', $html);
        $this->assertStringContainsString('@example.com', $html);
    }
}
