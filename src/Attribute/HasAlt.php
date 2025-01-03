<?php

namespace JobMetric\CustomField\Attribute;

/**
 * @property array $attributes
 */
trait HasAlt
{
    /**
     * the alt attribute of the field
     *
     * @var string|null $alt
     */
    protected string|null $alt = null;

    /**
     * set the alt attribute of the field
     *
     * @param string|null $alt
     *
     * @return static
     */
    public function alt(string|null $alt = null): static
    {
        $this->alt = $alt;

        $this->attributes['alt'] = $alt;

        return $this;
    }
}
