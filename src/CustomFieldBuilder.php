<?php

namespace JobMetric\CustomField;

use Illuminate\Support\Traits\Macroable;
use JobMetric\CustomField\FieldBuilder\BuilderColor;
use JobMetric\CustomField\FieldBuilder\BuilderDate;
use JobMetric\CustomField\FieldBuilder\BuilderDateTimeLocal;
use JobMetric\CustomField\FieldBuilder\BuilderEmail;
use JobMetric\CustomField\FieldBuilder\BuilderHidden;
use JobMetric\CustomField\FieldBuilder\BuilderImage;
use JobMetric\CustomField\FieldBuilder\BuilderMonth;
use JobMetric\CustomField\FieldBuilder\BuilderNumber;
use JobMetric\CustomField\FieldBuilder\BuilderPassword;
use JobMetric\CustomField\FieldBuilder\BuilderRadio;
use JobMetric\CustomField\FieldBuilder\BuilderRange;
use JobMetric\CustomField\FieldBuilder\BuilderSelect;
use JobMetric\CustomField\FieldBuilder\BuilderTel;
use JobMetric\CustomField\FieldBuilder\BuilderText;
use JobMetric\CustomField\FieldBuilder\BuilderTime;
use JobMetric\CustomField\FieldBuilder\BuilderWeek;
use JobMetric\CustomField\Fields\FieldContract;

class CustomFieldBuilder
{
    use Macroable,
        BuilderText,
        BuilderNumber,
        BuilderSelect,
        BuilderHidden,
        BuilderDate,
        BuilderDateTimeLocal,
        BuilderEmail,
        BuilderMonth,
        BuilderTime,
        BuilderPassword,
        BuilderRange,
        BuilderWeek,
        BuilderTel,
        BuilderImage,
        BuilderRadio,
        BuilderColor;

    public static FieldContract $fieldContract;

    /**
     * Build the custom field.
     *
     * @return CustomField
     */
    public function build(): CustomField
    {
        return self::$fieldContract->build();
    }
}
