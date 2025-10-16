<?php

namespace Feature;

use JobMetric\CustomField\Exceptions\OptionEmptyLabelException;
use JobMetric\CustomField\Option\OptionBuilder;
use JobMetric\CustomField\Tests\TestCase;

class OptionBuilderTest extends TestCase
{
    public function test_builds_option_successfully(): void
    {
        $builder = new OptionBuilder();
        $builder
            ->mode('pro')
            ->type('radio')
            ->name('plan')
            ->label('Enterprise')
            ->discription('Best for large teams')
            ->metaInfo('per month')
            ->extraContent('$99')
            ->tag('Popular')
            ->value('enterprise')
            ->selected();

        $option = $builder->build();

        $this->assertSame('pro', $option->mode);
        $this->assertSame('radio', $option->type);
        $this->assertSame('plan', $option->name);
        $this->assertSame('Enterprise', $option->label);
        $this->assertTrue($option->selected);

        $array = $option->toArray();
        $this->assertArrayHasKey('description', $array);
        $this->assertSame('Best for large teams', $array['description']);
        $this->assertSame('Popular', $array['tag']);
        $this->assertSame('$99', $array['extraContent']);
    }

    public function test_empty_label_throws_exception(): void
    {
        $this->expectException(OptionEmptyLabelException::class);

        $builder = new OptionBuilder();
        // No label provided
        $builder->value('v')->build();
    }
}

