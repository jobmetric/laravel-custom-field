<?php

namespace JobMetric\CustomField\Attribute;

/**
 * @property array $attributes
 */
trait HasPlaceholder
{
    /**
     * The placeholder for the field
     *
     * @var string $placeholder
     */
    protected string $placeholder = '';

    /**
     * Set the placeholder for the field
     *
     * @param string $placeholder
     *
     * @return static
     */
    public function placeholder(string $placeholder): static
    {
        $this->attributes['placeholder'] = $placeholder;

        return $this;
    }
}
