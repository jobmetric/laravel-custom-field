<?php

namespace JobMetric\CustomField\Attribute;

/**
 * @property array $attributes
 */
trait HasSrc
{
    /**
     * the src attribute of the field
     *
     * @var string|null $src
     */
    protected string|null $src = null;

    /**
     * set the src attribute of the field
     *
     * @param string|null $src
     *
     * @return static
     */
    public function src(string|null $src = null): static
    {
        $this->src = $src;

        $this->attributes['src'] = $src;

        return $this;
    }
}
