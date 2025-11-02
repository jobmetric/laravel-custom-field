<?php

namespace JobMetric\CustomField\Tests\Feature;

use InvalidArgumentException;
use JobMetric\CustomField\Contracts\FieldContract;
use JobMetric\CustomField\CustomFields\Text\Text;
use JobMetric\CustomField\Support\CustomFieldRegistry;
use JobMetric\CustomField\Tests\TestCase;

class CustomFieldRegistryTest extends TestCase
{
    public function test_get_returns_registered_instance(): void
    {
        /** @var CustomFieldRegistry $registry */
        $registry = app('CustomFieldRegistry');

        $instance = $registry->get('text');
        $this->assertInstanceOf(Text::class, $instance);
        $this->assertInstanceOf(FieldContract::class, $instance);
    }

    public function test_register_duplicate_type_throws_exception(): void
    {
        /** @var CustomFieldRegistry $registry */
        $registry = app('CustomFieldRegistry');

        $this->expectException(InvalidArgumentException::class);
        $registry->register(new Text());
    }

    public function test_all_returns_map_with_known_key(): void
    {
        /** @var CustomFieldRegistry $registry */
        $registry = app('CustomFieldRegistry');

        $all = $registry->all();
        $this->assertIsArray($all);
        $this->assertArrayHasKey('text', $all);
        $this->assertInstanceOf(FieldContract::class, $all['text']);
    }

    public function test_get_unknown_type_throws_exception(): void
    {
        /** @var CustomFieldRegistry $registry */
        $registry = app('CustomFieldRegistry');

        $this->expectException(InvalidArgumentException::class);
        $registry->get('unknown-type');
    }
}

