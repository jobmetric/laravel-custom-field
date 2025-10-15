<?php

namespace JobMetric\CustomField\Attribute;

/**
 * @property array $attributes
 */
trait HasMax
{
    /**
     * the max attribute of the field
     *
     * @var int|null $max
     */
    protected int|null $max = null;

    /**
     * set the max attribute of the field
     *
     * @param int|null $max
     *
     * @return static
     */
    public function max(int|null $max = null): static
    {
        $this->max = $max;

        $this->attributes['max'] = $max;

        return $this;
    }
}
