<?php

namespace JobMetric\CustomField\Attribute;

/**
 * @property array $attributes
 */
trait HasValue
{
    /**
     * the value attribute of the field
     *
     * @var array|string|int|bool|null $value
     */
    protected array|string|int|bool|null $value = null;

    /**
     * set the value attribute of the field
     *
     * @param array|string|int|bool|null $value
     *
     * @return static
     */
    public function value(array|string|int|bool|null $value): static
    {
        $this->attributes['value'] = $value;

        return $this;
    }
}
