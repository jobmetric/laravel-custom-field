<?php

namespace JobMetric\CustomField\Fields;

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
