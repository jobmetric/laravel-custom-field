<?php

namespace JobMetric\CustomField\Attribute;

/**
 * @property array $attributes
 */
trait HasWidth
{
    /**
     * the width attribute of the field
     *
     * @var string|int|null $width
     */
    protected string|int|null $width = null;

    /**
     * set the width attribute of the field
     *
     * @param string|int|null $width
     *
     * @return static
     */
    public function width(string|int|null $width = null): static
    {
        $this->width = $width;

        $this->attributes['width'] = $width;

        return $this;
    }
}
