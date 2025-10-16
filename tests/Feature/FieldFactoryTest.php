<?php

namespace JobMetric\CustomField\Tests\Feature;

use Exception;
use JobMetric\CustomField\FieldFactory;
use JobMetric\CustomField\Fields\Color;
use JobMetric\CustomField\Fields\Date;
use JobMetric\CustomField\Fields\DateTimeLocal;
use JobMetric\CustomField\Fields\Email;
use JobMetric\CustomField\Fields\Hidden;
use JobMetric\CustomField\Fields\Image;
use JobMetric\CustomField\Fields\Month;
use JobMetric\CustomField\Fields\Number;
use JobMetric\CustomField\Fields\Password;
use JobMetric\CustomField\Fields\Radio;
use JobMetric\CustomField\Fields\Range;
use JobMetric\CustomField\Fields\Select;
use JobMetric\CustomField\Fields\Tel;
use JobMetric\CustomField\Fields\Text;
use JobMetric\CustomField\Fields\Time;
use JobMetric\CustomField\Fields\Week;
use JobMetric\CustomField\Tests\TestCase;

class FieldFactoryTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function test_creates_correct_instances(): void
    {
        $cases = [
            'number' => Number::class,
            'text' => Text::class,
            'select' => Select::class,
            'hidden' => Hidden::class,
            'date' => Date::class,
            'datetime-local' => DateTimeLocal::class,
            'color' => Color::class,
            'month' => Month::class,
            'range' => Range::class,
            'week' => Week::class,
            'time' => Time::class,
            'password' => Password::class,
            'email' => Email::class,
            'tel' => Tel::class,
            'radioAndCheckbox' => Radio::class,
            'image' => Image::class,
        ];

        foreach ($cases as $type => $expectedClass) {
            $instance = FieldFactory::create($type);
            $this->assertInstanceOf($expectedClass, $instance, "Type '$type' should resolve to $expectedClass");
        }
    }

    public function test_unsupported_type_throws_exception(): void
    {
        $this->expectException(Exception::class);
        FieldFactory::create('unsupported-type');
    }
}

