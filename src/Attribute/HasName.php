<?php

namespace JobMetric\CustomField\Attribute;

use JobMetric\CustomField\Attribute\Data\DataBuilder;
use Throwable;

/**
 * @property array $attributes
 */
trait HasName
{
    /**
     * The replacement for the name attribute
     *
     * @var array $replacement
     */
    protected array $replacement = [];

    /**
     * Set the name attribute for the field
     *
     * @param string|null $name
     * @param string|null $uniqName
     *
     * @return static
     * @throws Throwable
     */
    public function name(string|null $name, string|null $uniqName = null): static
    {
        $this->params['name'] = $name;
        $this->params['uniqName'] = $uniqName;

        $this->data(function (DataBuilder $builder) {
            $builder->name('name')->value($this->getNameDot());
        });

        return $this;
    }

    /**
     * Get the name attribute for the field
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        // Retrieve the name attribute
        $name = $this->params['name'] ?? null;

        // If name is set, replace parts of it based on the replacement array
        if ($name !== null) {
            foreach ($this->replacement as $search => $replace) {
                $name = str_replace('{' . $search . '}', $replace, $name);
            }
        }

        return $name;
    }

    /**
     * Get the name dot attribute for the field
     *
     * @return string|null
     */
    public function getNameDot(): ?string
    {
        $name = $this->getName();

        if ($name !== null) {
            $name = str_replace(['[', ']'], ['.', ''], $name);
        }

        return $name;
    }
}
