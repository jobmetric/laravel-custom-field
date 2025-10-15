<?php

namespace JobMetric\CustomField\FieldBuilder;

use JobMetric\CustomField\Fields\Tel;

trait BuilderTel
{
    /**
     * Tel field
     *
     * @return Tel
     */
    public static function tel(): Tel
    {
        self::$fieldContract = new Tel;

        return self::$fieldContract;
    }
}

