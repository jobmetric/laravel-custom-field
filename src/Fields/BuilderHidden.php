<?php

namespace JobMetric\CustomField\Fields;

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
