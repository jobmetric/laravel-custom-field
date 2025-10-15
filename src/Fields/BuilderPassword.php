<?php

namespace JobMetric\CustomField\Fields;

trait BuilderPassword
{
    /**
     * Password field
     *
     * @return password
     */
    public static function password(): password
    {
        self::$fieldContract = new Password;

        return self::$fieldContract;
    }
}
