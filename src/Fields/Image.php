<?php

namespace JobMetric\CustomField\Fields;

use JobMetric\CustomField\Attribute\HasAlt;
use JobMetric\CustomField\Attribute\HasClass;
use JobMetric\CustomField\Attribute\HasHeight;
use JobMetric\CustomField\Attribute\HasId;
use JobMetric\CustomField\Attribute\HasName;
use JobMetric\CustomField\Attribute\HasSrc;
use JobMetric\CustomField\Attribute\HasWidth;

class Image implements FieldContract
{
    use BaseField,
        HasName,
        HasSrc,
        HasAlt,
        HasWidth,
        HasHeight,
        HasClass,
        HasId;

    /**
     * get the type of the field
     *
     * @return string
     */
    private function type(): string
    {
        return 'image';
    }
}
