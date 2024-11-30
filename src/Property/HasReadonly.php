<?php

namespace JobMetric\CustomField\Property;

/**
 * @property array $properties
 * @property array $params
 */
trait HasReadonly
{
    /**
     * Set the readonly property for the field
     *
     * @return static
     */
    public function readonly(): static
    {
        $this->properties[] = 'readonly';

        $this->params['readonly'] = true;

        return $this;
    }
}
