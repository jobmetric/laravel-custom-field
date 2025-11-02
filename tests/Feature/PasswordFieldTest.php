<?php

namespace JobMetric\CustomField\Tests\Feature;

use JobMetric\CustomField\CustomFieldBuilder;
use JobMetric\CustomField\Tests\TestCase;
use Throwable;

class PasswordFieldTest extends TestCase
{
    /**
     * @throws Throwable
     */
    public function test_password_field_renders_password_input(): void
    {
        $field = CustomFieldBuilder::password()
            ->name('password')
            ->label('Password');

        $htmlArray = $field->build()->toHtml();
        $this->assertIsArray($htmlArray);
        $html = $htmlArray['body'];

        $this->assertStringContainsString('type="password"', $html);
    }
}
