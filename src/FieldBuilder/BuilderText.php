<?php

namespace JobMetric\CustomField\FieldBuilder;

use JobMetric\CustomField\Fields\Text;

trait BuilderText
{
    /**
     * Text field
     *
     * @return Text
     */
    public static function text(): Text
    {
        self::$fieldContract = new Text;

        return self::$fieldContract;
    }
}
