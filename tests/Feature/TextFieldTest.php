<?php

namespace JobMetric\CustomField\Tests\Feature;

use JobMetric\CustomField\CustomFieldBuilder;
use JobMetric\CustomField\Tests\TestCase;
use Throwable;

class TextFieldTest extends TestCase
{
    /**
     * @throws Throwable
     */
    public function test_text_field_to_array_and_html(): void
    {
        $field = CustomFieldBuilder::text()
            ->name('user[name]', 'u1')
            ->label('Name')
            ->info('Enter your full name')
            ->required()
            ->placeholder('Enter name');

        $customField = $field->build();

        $array = $customField->toArray(
            value: 'John',
            replaces: ['id' => '42'],
            class: 'extra-class',
            classParent: 'mb-2',
            hasErrorTagForm: false,
            hasErrorTagJs: false,
            errorTagClass: null,
            prefixId: 'input'
        );

        $this->assertSame('text', $array['type']);
        $this->assertSame('user[name]', $array['name']);
        $this->assertSame('user.name', $array['nameDot']);
        $this->assertArrayHasKey('attributes', $array);
        $this->assertArrayHasKey('properties', $array);
        $this->assertArrayHasKey('data', $array);
        $this->assertSame('John', $array['value']);
        $this->assertStringContainsString('form-control', $array['attributes']['class'] ?? '');

        $html = $customField->toHtml(
            value: 'John',
            replaces: ['id' => '42'],
            class: 'extra-class',
            classParent: 'mb-2',
            hasErrorTagForm: false,
            hasErrorTagJs: false,
            errorTagClass: null,
            prefixId: 'input'
        );

        $this->assertStringContainsString('<input type="text"', $html);
        $this->assertStringContainsString('name="user[name]"', $html);
        $this->assertStringContainsString('value="John"', $html);
    }
}

