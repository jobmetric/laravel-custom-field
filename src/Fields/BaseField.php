<?php

namespace JobMetric\CustomField\Fields;

use BadMethodCallException;
use JobMetric\CustomField\Attribute\Data\HasData;
use JobMetric\CustomField\Attribute\HasClass;
use JobMetric\CustomField\Attribute\HasId;
use JobMetric\CustomField\Attribute\HasName;
use JobMetric\CustomField\Attribute\HasValue;
use JobMetric\CustomField\Builder\CustomField;
use JobMetric\CustomField\Property\HasAutoFocus;
use JobMetric\CustomField\Property\HasDisable;
use JobMetric\CustomField\Property\HasReadonly;
use JobMetric\CustomField\Property\HasRequired;
use Throwable;

/**
 * Trait BaseField
 *
 * @package JobMetric\CustomField\Fields
 *
 * @method getName()
 * @method getId()
 * @method getClass()
 * @method getLabel()
 * @method getInfo()
 * @method getValidation()
 * @method getValue()
 * @method getParams()
 * @method getOptions()
 */
trait BaseField
{
    use HasName,
        HasId,
        HasClass,
        HasValue,
        HasData,
        HasDisable,
        HasAutoFocus,
        HasReadonly,
        HasRequired;

    /**
     * the label of the field
     *
     * @var string $label
     */
    protected string $label = '';

    /**
     * the info of the field
     *
     * @var string $info
     */
    protected string $info = '';

    /**
     * the validation of the field
     *
     * @var array|string $validation
     */
    protected array|string $validation = '';

    /**
     * the attributes of the field
     *
     * @var array $attributes
     */
    protected array $attributes = [];

    /**
     * the properties of the field
     *
     * @var array $properties
     */
    protected array $properties = [];

    /**
     * the params of the field
     *
     * @var array $params
     */
    protected array $params = [];

    /**
     * the options of the field
     *
     * @var array $options
     */
    protected array $options = [];

    /**
     * set the label of the field
     *
     * @param string $label
     *
     * @return static
     */
    public function label(string $label): static
    {
        $this->label = $label;

        return $this;
    }

    /**
     * set the info of the field
     *
     * @param string $info
     *
     * @return static
     */
    public function info(string $info): static
    {
        $this->info = $info;

        return $this;
    }

    /**
     * set the validation of the field
     *
     * @param array|string $validation
     *
     * @return static
     */
    public function validation(array|string $validation): static
    {
        $this->validation = $validation;

        return $this;
    }

    /**
     * get the property of the field
     *
     * @param string $name
     * @param array $arguments
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

    /**
     * set the params of the field
     *
     * @return CustomField
     */
    public function build(): CustomField
    {
        return new CustomField(
            $this->type(),
            $this->label,
            $this->info,
            $this->validation,
            $this->attributes,
            $this->properties,
            $this->data,
            $this->params,
            $this->options
        );
    }
}
