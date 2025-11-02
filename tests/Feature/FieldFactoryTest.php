<?php

namespace JobMetric\CustomField\Tests\Feature;

use Exception;
use JobMetric\CustomField\FieldFactory;
use JobMetric\CustomField\CustomFields\Checkbox\Checkbox;
use JobMetric\CustomField\CustomFields\Color\Color;
use JobMetric\CustomField\CustomFields\Date\Date;
use JobMetric\CustomField\CustomFields\DateTimeLocal\DateTimeLocal;
use JobMetric\CustomField\CustomFields\Email\Email;
use JobMetric\CustomField\CustomFields\Hidden\Hidden;
use JobMetric\CustomField\CustomFields\Image\Image;
use JobMetric\CustomField\CustomFields\Month\Month;
use JobMetric\CustomField\CustomFields\Number\Number;
use JobMetric\CustomField\CustomFields\Password\Password;
use JobMetric\CustomField\CustomFields\Radio\Radio;
use JobMetric\CustomField\CustomFields\Range\Range;
use JobMetric\CustomField\CustomFields\Select\Select;
use JobMetric\CustomField\CustomFields\Tel\Tel;
use JobMetric\CustomField\CustomFields\Text\Text;
use JobMetric\CustomField\CustomFields\Time\Time;
use JobMetric\CustomField\CustomFields\Week\Week;
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
            'dateTimeLocal' => DateTimeLocal::class,
            'color' => Color::class,
            'month' => Month::class,
            'range' => Range::class,
            'week' => Week::class,
            'time' => Time::class,
            'password' => Password::class,
            'email' => Email::class,
            'tel' => Tel::class,
            'radio' => Radio::class,
            'checkbox' => Checkbox::class,
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
