<?php

namespace JobMetric\CustomField\Tests\Feature;

use JobMetric\CustomField\CustomFieldBuilder;
use JobMetric\CustomField\Tests\TestCase;
use Throwable;

class RadioFieldTest extends TestCase
{
    /**
     * @throws Throwable
     */
    public function test_radio_field_renders_pro_mode_options(): void
    {
        $field = CustomFieldBuilder::radio()
            ->name('plan')
            ->options(function ($builder) {
                $builder->mode('pro')->type('radio')->name('plan')->label('Basic')->value('basic');
                $builder->mode('pro')->type('radio')->name('plan')->label('Enterprise')->value('enterprise')->selected();
            });

        $customField = $field->build();
        $htmlArray = $customField->toHtml();
        $this->assertIsArray($htmlArray);
        $html = $htmlArray['body'];

        $this->assertStringContainsString('type="radio"', $html);
        $this->assertStringContainsString('name="plan"', $html);
        $this->assertStringContainsString('value="basic"', $html);
        $this->assertStringContainsString('value="enterprise"', $html);
        $this->assertStringContainsString('checked', $html);
    }
}
