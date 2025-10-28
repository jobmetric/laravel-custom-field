<?php

namespace JobMetric\CustomField\Tests\Feature;

use JobMetric\CustomField\CustomFieldBuilder;
use JobMetric\CustomField\Tests\TestCase;
use Throwable;

class AttributesPropertiesTest extends TestCase
{
    /**
     * @throws Throwable
     */
    public function test_id_prefix_and_uniqname_merge(): void
    {
        $field = CustomFieldBuilder::text()
            ->name('user[name]', 'u1');

        $customField = $field->build();
        $html = $customField->toHtml(prefixId: 'input');

        $this->assertStringContainsString('id="input_u1"', $html);
    }

    /**
     * @throws Throwable
     */
    public function test_placeholder_is_translated_and_class_appended(): void
    {
        $field = CustomFieldBuilder::text()
            ->name('email')
            ->placeholder('email');

        $customField = $field->build();
        $html = $customField->toHtml(class: 'extra');

        $this->assertStringContainsString('placeholder="' . trans('email') .  '"', $html);
        $this->assertStringContainsString('class="form-control extra"', $html);
    }
}

