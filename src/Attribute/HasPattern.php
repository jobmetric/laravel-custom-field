<?php

namespace JobMetric\CustomField\Attribute;

/**
 * @property array $attributes
 */
trait HasPattern
{
    /**
     * the pattern attribute of the field
     *
     * @var string|null $pattern
     */
    protected string|null $pattern = null;

    /**
     * set the pattern attribute of the field
     *
     * @param string|null $pattern
     *
     * @return static
     */
    public function pattern(string|null $pattern = null): static
    {
        $this->pattern = $pattern;

        $this->attributes['pattern'] = $pattern;

        return $this;
    }
}
