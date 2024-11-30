<?php

namespace JobMetric\CustomField\Property;

/**
 * @property array $params
 * @property array $properties
 */
trait HasMultiple
{
    /**
     * Set the multiple property for the field
     *
     * @return static
     */
    public function multiple(): static
    {
        $this->properties[] = 'multiple';

        $this->params['multiple'] = true;

        return $this;
    }
}
