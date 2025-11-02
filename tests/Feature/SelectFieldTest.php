<?php

namespace JobMetric\CustomField\Tests\Feature;

use JobMetric\CustomField\CustomFieldBuilder;
use JobMetric\CustomField\Tests\TestCase;
use Throwable;

class SelectFieldTest extends TestCase
{
    /**
     * @throws Throwable
     */
    public function test_select_field_renders_with_options_and_required(): void
    {
        $field = CustomFieldBuilder::select()
            ->name('country')
            ->label('Country')
            ->info('Choose your country')
            ->required()
            ->options(function ($builder) {
                $builder->label('Iran')->value('IR')->selected()->build();
                $builder->label('Germany')->value('DE')->build();
            });

        $customField = $field->build();
        $htmlArray = $customField->toHtml();
        $this->assertIsArray($htmlArray);
        $this->assertArrayHasKey('body', $htmlArray);
        $html = $htmlArray['body'];

        $this->assertStringContainsString('<select name="country"', $html);
        $this->assertStringContainsString('<option value="IR" selected>', $html);
        $this->assertStringContainsString('<option value="DE"', $html);
        $this->assertStringContainsString('class="required"', $html, 'Required label indicator expected');
    }

    /**
     * @throws Throwable
     */
    public function test_select_field_accepts_bulk_options_in_one_closure(): void
    {
        $field = CustomFieldBuilder::select()
            ->name('country')
            ->label('Country')
            ->info('Choose your country')
            ->options(function ($builder) {
                $builder->label('Iran')->value('IR')->selected()->build();
                $builder->label('Germany')->value('DE')->build();
            });

        $customField = $field->build();
        $htmlArray = $customField->toHtml();
        $this->assertIsArray($htmlArray);
        $this->assertArrayHasKey('body', $htmlArray);
        $html = $htmlArray['body'];

        $this->assertStringContainsString('<option value="IR" selected>', $html);
        $this->assertStringContainsString('<option value="DE">', $html);
    }
}
