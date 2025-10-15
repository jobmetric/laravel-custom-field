<?php

namespace JobMetric\CustomField\FieldBuilder;

use JobMetric\CustomField\Fields\Email;

trait BuilderEmail
{
    /**
     * Email field
     *
     * @return Email
     */
    public static function email(): Email
    {
        self::$fieldContract = new Email;

        return self::$fieldContract;
    }
}

