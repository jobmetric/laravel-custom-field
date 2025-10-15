<?php

namespace JobMetric\CustomField;

use Illuminate\Support\Traits\Macroable;
use JobMetric\CustomField\Fields\BuilderColor;
use JobMetric\CustomField\Fields\BuilderDate;
use JobMetric\CustomField\Fields\BuilderDateTimeLocal;
use JobMetric\CustomField\Fields\BuilderEmail;
use JobMetric\CustomField\Fields\BuilderHidden;
use JobMetric\CustomField\Fields\BuilderImage;
use JobMetric\CustomField\Fields\BuilderMonth;
use JobMetric\CustomField\Fields\BuilderNumber;
use JobMetric\CustomField\Fields\BuilderPassword;
use JobMetric\CustomField\Fields\BuilderRadio;
use JobMetric\CustomField\Fields\BuilderRange;
use JobMetric\CustomField\Fields\BuilderSelect;
use JobMetric\CustomField\Fields\BuilderTel;
use JobMetric\CustomField\Fields\BuilderText;
use JobMetric\CustomField\Fields\BuilderTime;
use JobMetric\CustomField\Fields\BuilderWeek;
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
