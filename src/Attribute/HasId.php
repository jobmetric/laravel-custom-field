<?php

namespace JobMetric\CustomField\Attribute;

/**
 * @property array $attributes
 */
trait HasId
{
    /**
     * The id attribute for the field
     *
     * @var string|null $id
     */
    protected string|null $id = null;

    /**
     * Set the id attribute for the field
     *
     * @param string|null $id
     *
     * @return static
     */
    public function id(string|null $id): static
    {
        $this->id = $id;

        $this->attributes['id'] = $id;

        return $this;
    }
}
