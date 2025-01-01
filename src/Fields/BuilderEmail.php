<?php

namespace JobMetric\CustomField\Fields;

trait BuilderEmail
{
    /**
     * Email field
     *
     * @return email
     */
    public static function email(): email
    {
        self::$fieldContract = new Email;

        return self::$fieldContract;
    }
}

