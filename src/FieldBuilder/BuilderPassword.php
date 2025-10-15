<?php

namespace JobMetric\CustomField\FieldBuilder;

use JobMetric\CustomField\Fields\Password;

trait BuilderPassword
{
    /**
     * Password field
     *
     * @return Password
     */
    public static function password(): Password
    {
        self::$fieldContract = new Password;

        return self::$fieldContract;
    }
}
