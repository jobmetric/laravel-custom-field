<?php

namespace JobMetric\CustomField\Fields;

trait BuilderImage
{
    /**
     * Image field
     *
     * @return image
     */
    public static function image(): image
    {
        self::$fieldContract = new Image;

        return self::$fieldContract;
    }
}

