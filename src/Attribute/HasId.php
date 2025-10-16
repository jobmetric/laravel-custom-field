<?php

namespace JobMetric\CustomField\Attribute;

/**
 * @property array $attributes
 */
trait HasId
{
    /**
     * Field id.
     *
     * @var string|null
     */
    protected string|null $id = null;

    /**
     * Set id.
     *
     * @param string|null $id
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
