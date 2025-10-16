<?php

namespace JobMetric\CustomField\Attribute;

trait HasClass
{
    /**
     * CSS classes.
     *
     * @var string|null
     */
    protected string|null $class = 'form-control';

    /**
     * Append classes.
     *
     * @param string|null $class
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
