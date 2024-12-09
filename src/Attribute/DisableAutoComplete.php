<?php

namespace JobMetric\CustomField\Attribute;

/**
 * @property array $attributes
 */
trait DisableAutoComplete
{
    /**
     * Set the disable autocomplete attribute for the field
     *
     * @return static
     */
    public function disableAutoComplete(): static
    {
        $this->attributes['autocomplete'] = 'off';

        return $this;
    }
}
