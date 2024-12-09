<?php

namespace JobMetric\CustomField\Attribute;

trait HasClass
{
    /**
     * The class attribute for the field
     *
     * @var string|null $class
     */
    protected string|null $class = 'form-control';

    /**
     * Set the class attribute for the field
     *
     * @param string|null $class
     *
     * @return static
     */
    public function class(string|null $class): static
    {
        $this->class .= ' ' . $class;

        if (isset($this->attributes['class'])) {
            $this->attributes['class'] .= ' ' . $class;
        } else {
            $this->attributes['class'] = 'form-control ' . $class;
        }

        return $this;
    }
}
