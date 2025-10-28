<?php

namespace JobMetric\CustomField\Fields;

use BadMethodCallException;
use JobMetric\CustomField\Attribute\Data\HasData;
use JobMetric\CustomField\Attribute\DisableAutoComplete;
use JobMetric\CustomField\Attribute\HasClass;
use JobMetric\CustomField\Attribute\HasId;
use JobMetric\CustomField\Attribute\HasName;
use JobMetric\CustomField\Attribute\HasValue;
use JobMetric\CustomField\CustomField;
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
        HasRequired,
        DisableAutoComplete;

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
     * the images of the field
     *
     * @var array $images
     */
    protected array $images = [];

    /**
     * Instantiate the field
     *
     * @param string|null $label
     * @param string|null $info
     * @param array|string|null $validation
     * @param array $attributes
     * @param array $properties
     * @param array $data
     * @param array $params
     * @param array $options
     * @param array $images
     *
     * @return void
     */
    public function instantiate(string|null $label, string|null $info, array|string|null $validation, array $attributes, array $properties, array $data, array $params, array $options, array $images): void
    {
        $this->label = $label;
        $this->info = $info;
        $this->validation = $validation;
        $this->attributes = $attributes;
        $this->properties = $properties;
        $this->data = $data;
        $this->params = $params;
        $this->options = $options;
        $this->images = $images;
    }


    /**
     * Render HTML.
     *
     * @param array|string|int|bool|null $value
     * @param array $replaces
     * @param bool $showInfo
     * @param string $class
     * @param string|null $classParent
     * @param bool $hasErrorTagForm
     * @param bool $hasErrorTagJs
     * @param string|null $errorTagClass
     * @param string|null $prefixId
     *
     * @return array
     * @throws Throwable
     */
    public function toHtml(
        array|string|int|bool|null $value = 'undefined',
        array                      $replaces = [],
        bool                       $showInfo = true,
        string                     $class = 'undefined',
        ?string                    $classParent = null,
        bool                       $hasErrorTagForm = true,
        bool                       $hasErrorTagJs = true,
        ?string                    $errorTagClass = null,
        ?string                    $prefixId = 'undefined'
    ): array
    {
        $this->replacement = $replaces;

        if ($value != 'undefined') {
            $this->value($value);
        }

        if ($class != 'undefined') {
            $this->class($class);
        }

        if ($prefixId != 'undefined') {
            $this->id($prefixId);
        }

        return [
            'body' => view('custom-field::' . $this->type(), [
                'field' => $this,
                'showInfo' => $showInfo,
                'classParent' => $classParent,
                'hasErrorTagForm' => $hasErrorTagForm,
                'hasErrorTagJs' => $hasErrorTagJs,
                'errorTagClass' => $errorTagClass,
            ])->render(),
            'scripts' => $this->getScripts(),
            'styles' => $this->getStyles(),
        ];
    }

    /**
     * Export as array.
     *
     * @param array|string|int|bool|null $value
     * @param array $replaces
     * @param bool $showInfo
     * @param string $class
     * @param string|null $classParent
     * @param bool $hasErrorTagForm
     * @param bool $hasErrorTagJs
     * @param string|null $errorTagClass
     * @param string|null $prefixId
     *
     * @return array
     */
    public function toArray(
        array|string|int|bool|null $value = 'undefined',
        array                      $replaces = [],
        bool                       $showInfo = true,
        string                     $class = 'undefined',
        ?string                    $classParent = null,
        bool                       $hasErrorTagForm = true,
        bool                       $hasErrorTagJs = true,
        ?string                    $errorTagClass = null,
        ?string                    $prefixId = 'undefined'
    ): array
    {
        $this->replacement = $replaces;

        if ($value != 'undefined') {
            $this->value($value);
        }

        if ($class != 'undefined') {
            $this->class($class);
        }

        if ($prefixId != 'undefined') {
            $this->id($prefixId);
        }

        // normalize data entries
        $dataItems = $this->getData()->map(function ($data) {
            if (method_exists($data, 'toArray')) {
                return $data->toArray($this->replacement);
            }
            return null;
        })->filter()->values()->all();

        // normalize options
        $options = collect($this->options)->map(function ($option) {
            if (method_exists($option, 'toArray')) {
                return $option->toArray();
            }
            return null;
        })->filter()->values()->all();

        // normalize images
        $images = collect($this->images)->map(function ($image) {
            if (method_exists($image, 'toArray')) {
                return $image->toArray();
            }
            return null;
        })->filter()->values()->all();

        return [
            'type' => $this->type(),
            'label' => $this->label,
            'info' => $this->info,
            'validation' => $this->validation,
            'name' => $this->getName(),
            'nameDot' => $this->getNameDot(),
            'attributes' => $this->attributes,
            'properties' => $this->properties,
            'data' => $dataItems,
            'params' => $this->params,
            'options' => $options,
            'images' => $images,
            'value' => $this->value,
            'scripts' => $this->getScripts(),
            'styles' => $this->getStyles(),
        ];
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
     * Get the attribute theme
     *
     * @return string
     */
    public function getAttributeTheme(): string
    {
        $attributes = '';
        if (!array_key_exists('class', $this->attributes)) {
            $this->attributes['class'] = 'form-control';
        }

        foreach ($this->attributes as $key => $value) {
            if ($key === 'placeholder') {
                $value = trans($value);
            }

            $attributes .= " $key=\"$value\"";
        }

        return $attributes;
    }

    /**
     * Get the value of a specific attribute
     *
     * @param string|null $key
     *
     * @return mixed
     */
    public function getAttribute(string|null $key = null): mixed
    {
        if (is_null($key)) {
            return $this->attributes;
        }

        if (!array_key_exists($key, $this->attributes)) {
            throw new BadMethodCallException("attributes '$key' does not exist");
        }

        return $this->attributes[$key];
    }

    /**
     * get the property of the field
     *
     * @param string $name
     * @param array $arguments
     *
     * @return mixed
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
        $this->beforeBuild();

        return new CustomField(
            $this->type(),
            $this->label,
            $this->info,
            $this->validation,
            $this->attributes,
            $this->properties,
            $this->data,
            $this->params,
            $this->options,
            $this->images
        );
    }

    public function beforeBuild(): void
    {
    }
}
