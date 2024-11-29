<?php

namespace JobMetric\CustomField\Fields;

interface FieldContract
{
    /**
     * render the field as HTML
     *
     * @return string
     */
    public function render(): string;
}
