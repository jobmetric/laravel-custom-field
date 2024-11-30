<?php

namespace JobMetric\CustomField\Property;

/**
 * @property array $properties
 * @property array $params
 */
trait HasDisable
{
    /**
     * Set the disabled property for the field
     *
     * @return static
     */
    public function disabled(): static
    {
        $this->properties[] = 'disabled';

        $this->params['disabled'] = true;

        return $this;
    }
}
