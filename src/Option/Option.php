<?php

namespace JobMetric\CustomField\Option;

use BadMethodCallException;
use JobMetric\CustomField\Attribute\Data\HasData;
use Throwable;

/**
 * Class Option
 *
 * @package JobMetric\CustomField\Option
 *
 * @method getClass()
 * @method getLabel()
 * @method getValue()
 */
class Option
{
    use HasData;

    public string $label;
    public string|int|bool $value;
    public bool $selected = false;

    public function __construct(string $label, string|int|bool $value, bool $selected = false)
    {
        $this->label = $label;
        $this->value = $value;
        $this->selected = $selected;
    }

    /**
     * Render the option as HTML.
     *
     * @return string
     * @throws Throwable
     */
    public function render(): string
    {
        return view('custom-field::option', [
            'field' => $this,
        ])->render();
    }

    /**
     * get the property of the field
     *
     * @param string $name
     * @param array  $arguments
     *
     * @return mixed
     * @throws Throwable
     */
    public function __call(string $name, array $arguments): mixed
    {
        if (str_starts_with($name, 'get')) {
            return $this->get(lcfirst(substr($name, 3)));
        } else {
            throw new BadMethodCallException("Method '$name' does not exist");
        }
    }

    /**
     * get the property of the field
     *
     * @param string $property
     *
     * @return mixed
     * @throws Throwable
     */
    public function get(string $property): mixed
    {
        if (!property_exists($this, $property)) {
            throw new BadMethodCallException("Property '$property' does not exist");
        }

        return $this->$property;
    }
}
