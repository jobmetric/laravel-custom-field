<?php

namespace JobMetric\CustomField\Fields;

interface FieldContract
{
    /**
     * render the field as HTML
     *
     * @param array $replaces
     *
     * @return string
     */
    public function render(array $replaces = []): string;
}
