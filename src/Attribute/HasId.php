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
        $uniqName = $this->params['uniqName'] ?? null;

        if (is_null($uniqName)) {
            $this->attributes['id'] = $this->id = $id;
        } else {
            $this->attributes['id'] = $this->id = $id . '_' . $uniqName;
        }

        return $this;
    }
}
