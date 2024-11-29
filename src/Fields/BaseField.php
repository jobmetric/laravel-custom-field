<?php

namespace JobMetric\CustomField\Fields;

use BadMethodCallException;
use JobMetric\CustomField\Builder\CustomField;
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
    /**
     * the name of the field
     *
     * @var string $name
     */
    protected string $name;

    /**
     * the id of the field
     *
     * @var string|null $id
     */
    protected string|null $id = null;

    /**
     * the class of the field
     *
     * @var string|null $class
     */
    protected string|null $class = null;

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
     * @var array|string|null $validation
     */
    protected array|string|null $validation = null;

    /**
     * the value of the field
     *
     * @var array|string|int|bool|null $value
     */
    protected array|string|int|bool|null $value = null;

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
     * set the name of the field
     *
     * @param string $name
     *
     * @return static
     */
    public function name(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * set the id of the field
     *
     * @param string $id
     *
     * @return static
     */
    public function id(string $id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * set the class of the field
     *
     * @param string $class
     *
     * @return static
     */
    public function class(string $class): static
    {
        $this->class = $class;

        return $this;
    }

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
     * set the value of the field
     *
     * @param array|string|int|bool $value
     *
     * @return static
     */
    public function value(array|string|int|bool $value): static
    {
        $this->value = $value;

        return $this;
    }

    /**
     * set the disabled of the field
     *
     * @return static
     */
    public function disabled(): static
    {
        $this->params['disabled'] = true;

        return $this;
    }

    /**
     * set the readonly of the field
     *
     * @return static
     */
    public function readonly(): static
    {
        $this->params['readonly'] = true;

        return $this;
    }

    /**
     * set the required of the field
     *
     * @return static
     */
    public function required(): static
    {
        $this->params['required'] = true;

        return $this;
    }

    /**
     * set the autofocus of the field
     *
     * @return static
     */
    public function autofocus(): static
    {
        $this->params['autofocus'] = true;

        return $this;
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

    /**
     * set the params of the field
     *
     * @return CustomField
     */
    public function build(): CustomField
    {
        return new CustomField(
            $this->type(),
            $this->name,
            $this->id,
            $this->class,
            $this->label,
            $this->info,
            $this->placeholder,
            $this->validation,
            $this->value,
            $this->params,
            $this->options
        );
    }
}
