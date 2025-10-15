<?php

namespace JobMetric\CustomField\Attribute;

/**
 * @property array $attributes
 */
trait HasHeight
{
    /**
     * the height attribute of the field
     *
     * @var string|int|null $height
     */
    protected string|int|null $height = null;

    /**
     * set the height attribute of the field
     *
     * @param string|int|null $height
     *
     * @return static
     */
    public function height(string|int|null $height = null): static
    {
        $this->height = $height;

        $this->attributes['height'] = $height;

        return $this;
    }
}
