<?php

namespace JobMetric\CustomField\CustomFields\Image;

use JobMetric\CustomField\Attribute\HasAlt;
use JobMetric\CustomField\Attribute\HasHeight;
use JobMetric\CustomField\Attribute\HasSrc;
use JobMetric\CustomField\Attribute\HasWidth;
use JobMetric\CustomField\Contracts\FieldContract;
use JobMetric\CustomField\Core\BaseCustomField;

class Image extends BaseCustomField implements FieldContract
{
    use HasSrc, HasAlt, HasWidth, HasHeight;

    /**
     * Get the type of the field.
     *
     * @return string
     */
    public static function type(): string
    {
        return 'image';
    }
}

