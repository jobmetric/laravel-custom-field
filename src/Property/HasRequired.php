<?php

namespace JobMetric\CustomField\Property;

/**
 * @property array $properties
 * @property array $params
 */
trait HasRequired
{
    /**
     * Set the required property for the field
     *
     * @return static
     */
    public function required(): static
    {
        $this->properties[] = 'required';

        $this->params['required'] = true;

        return $this;
    }
}
