<?php

namespace JobMetric\CustomField\Tests\Feature;

use JobMetric\CustomField\CustomFieldBuilder;
use JobMetric\CustomField\Tests\TestCase;
use Throwable;

class ImageFieldTest extends TestCase
{
    /**
     * @throws Throwable
     */
    public function test_image_field_renders_with_src_alt_and_dimensions(): void
    {
        $field = CustomFieldBuilder::image()
            ->name('submitImage')
            ->src('/img/submit.png')
            ->alt('Submit')
            ->width(120)
            ->height(80);

        $customField = $field->build();
        $html = $customField->toHtml();

        $this->assertStringContainsString('type="image"', $html);
        $this->assertStringContainsString('name="submitImage"', $html);
        $this->assertStringContainsString('src="/img/submit.png"', $html);
        $this->assertStringContainsString('alt="Submit"', $html);
        $this->assertStringContainsString('style="width: 120px; height: 80px; "', $html);
    }
}

