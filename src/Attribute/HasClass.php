<?php

namespace JobMetric\CustomField\Attribute;

trait HasClass
{
    /**
     * The class attribute for the field
     *
     * @var string|null $class
     */
    protected string|null $class = null;

    /**
     * Set the class attribute for the field
     *
     * @param string|null $class
     *
     * @return static
     */
    public function class(string|null $class): static
    {
        $this->class = $class;

        $this->attributes['class'] = $class;

        return $this;
    }
}
