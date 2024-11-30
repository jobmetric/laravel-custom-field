<?php

namespace JobMetric\CustomField\Attribute;

/**
 * @property array $attributes
 */
trait HasName
{
    /**
     * The name attribute for the field
     *
     * @var string|null $name
     */
    protected string|null $name = null;

    /**
     * Set the name attribute for the field
     *
     * @param string|null $name
     *
     * @return static
     */
    public function name(string|null $name): static
    {
        $this->attributes['name'] = $name;

        return $this;
    }
}
