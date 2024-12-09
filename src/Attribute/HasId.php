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
        $uniqName = $this->params['uniqName'] ?? '';

        $this->id = $id . '_' . $uniqName;

        $this->attributes['id'] = $id . '_' . $uniqName;

        return $this;
    }
}
