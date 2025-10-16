<?php

namespace JobMetric\CustomField\Property;

/**
 * @property array $properties
 * @property array $params
 */
trait HasRequired
{
    /**
     * Set required.
     *
     * @return static
     */
    public function required(): static
    {
        $this->properties[] = 'required';

        $this->params['required'] = true;

        return $this;
    }

    /**
     * Check required.
     *
     * @return bool
     */
    public function hasRequired(): bool
    {
        if (in_array('required', $this->properties)) {
            return true;
        }

        return false;
    }
}
