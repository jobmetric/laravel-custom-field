<?php

namespace JobMetric\CustomField\Attribute;

/**
 * @property array $attributes
 */
trait HasMin
{
    /**
     * the min attribute of the field
     *
     * @var int|null $min
     */
    protected int|null $min = null;

    /**
     * set the min attribute of the field
     *
     * @param int|null $min
     *
     * @return static
     */
    public function min(int|null $min = null): static
    {
        $this->min = $min;

        $this->attributes['min'] = $min;

        return $this;
    }
}
