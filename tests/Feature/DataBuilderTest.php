<?php

namespace Feature;

use JobMetric\CustomField\Attribute\Data\DataBuilder;
use JobMetric\CustomField\Tests\TestCase;

class DataBuilderTest extends TestCase
{
    public function test_builds_data_and_renders_html_with_replacements(): void
    {
        $builder = new DataBuilder();
        $builder->name('target')->value('user-{id}');
        $data = $builder->build();

        $html = $data->toHtml(['id' => 42]);
        $this->assertStringContainsString('data-target="user-42"', $html);

        $array = $data->toArray(['id' => 42]);
        $this->assertSame('target', $array['name']);
        $this->assertSame('user-42', $array['value']);
    }
}

