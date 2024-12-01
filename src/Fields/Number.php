<?php

namespace JobMetric\CustomField\Fields;

use JobMetric\CustomField\Attribute\HasPlaceholder;
use Throwable;

class Number implements FieldContract
{
    use BaseField,
        HasPlaceholder;

    /**
     * get the type of the field
     *
     * @return string
     */
    private function type(): string
    {
        return 'number';
    }

    /**
     * render the field as HTML
     *
     * @return string
     * @throws Throwable
     */
    public function render(): string
    {
        return view('custom-field::number', [
            'field' => $this,
        ])->render();
    }
}
