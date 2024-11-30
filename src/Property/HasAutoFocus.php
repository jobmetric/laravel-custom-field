<?php

namespace JobMetric\CustomField\Property;

/**
 * @property array $properties
 * @property array $params
 */
trait HasAutoFocus
{
    /**
     * Set the autofocus property for the field
     *
     * @return static
     */
    public function autofocus(): static
    {
        $this->properties[] = 'autofocus';

        $this->params['autofocus'] = true;

        return $this;
    }
}
