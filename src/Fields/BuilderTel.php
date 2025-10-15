<?php

namespace JobMetric\CustomField\Fields;

trait BuilderTel
{
    /**
     * Tel field
     *
     * @return tel
     */
    public static function tel(): tel
    {
        self::$fieldContract = new Tel;

        return self::$fieldContract;
    }
}

