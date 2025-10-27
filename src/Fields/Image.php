<?php

namespace JobMetric\CustomField\Fields;

use JobMetric\CustomField\Attribute\HasAlt;
use JobMetric\CustomField\Attribute\HasHeight;
use JobMetric\CustomField\Attribute\HasSrc;
use JobMetric\CustomField\Attribute\HasWidth;
use JobMetric\CustomField\Contracts\FieldContract;

class Image implements FieldContract
{
    use BaseField,
        HasSrc,
        HasAlt,
        HasWidth,
        HasHeight;

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
