<?php

namespace JobMetric\CustomField\FieldBuilder;

use JobMetric\CustomField\Fields\Image;

trait BuilderImage
{
    /**
     * Image field
     *
     * @return Image
     */
    public static function image(): Image
    {
        self::$fieldContract = new Image;

        return self::$fieldContract;
    }
}

