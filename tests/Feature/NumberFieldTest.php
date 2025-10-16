<?php

namespace JobMetric\CustomField\Tests\Feature;

use JobMetric\CustomField\CustomFieldBuilder;
use JobMetric\CustomField\Tests\TestCase;
use Throwable;

class NumberFieldTest extends TestCase
{
    /**
     * @throws Throwable
     */
    public function test_number_field_renders_input(): void
    {
        $field = CustomFieldBuilder::number()
            ->name('age')
            ->label('Age')
            ->info('Enter your age');

        $html = $field->build()->toHtml();

        $this->assertStringContainsString('<input type="number"', $html);
        $this->assertStringContainsString('name="age"', $html);
    }
}

