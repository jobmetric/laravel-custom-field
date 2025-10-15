<?php

namespace JobMetric\CustomField\FieldBuilder;

use JobMetric\CustomField\Fields\Hidden;

trait BuilderHidden
{
    /**
     * Hidden field
     *
     * @return Hidden
     */
    public static function hidden(): Hidden
    {
        self::$fieldContract = new Hidden;

        return self::$fieldContract;
    }
}
