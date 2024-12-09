<?php

namespace JobMetric\CustomField;

use Throwable;

class CustomField
{
    /**
     * Field type
     *
     * @var string $type
     */
    public string $type;

    /**
     * Field attributes
     *
     * @var array $attributes
     */
    public array $attributes = [];

    /**
     * Field properties
     *
     * @var array $properties
     */
    public array $properties = [];

    /**
     * Field data
     *
     * @var array $data
     */
    public array $data = [];

    /**
     * Field label
     *
     * @var string $label
     */
    public string $label;

    /**
     * Field info
     *
     * @var string $info
     */
    public string $info;

    /**
     * Field validation
     *
     * @var array|string $validation
     */
    public array|string $validation;

    /**
     * Field params
     *
     * @var array $params
     */
    public array $params = [];

    /**
     * Field options
     *
     * @var array $options
     */
    public array $options = [];

    public function __construct(
        string       $type,
        string|null  $label,
        string|null  $info,
        array|string $validation,
        array        $attributes = [],
        array        $properties = [],
        array        $data = [],
        array        $params = [],
        array        $options = [],
    )
    {
        $this->type = $type;
        $this->label = $label;
        $this->info = $info;
        $this->validation = $validation;
        $this->attributes = $attributes;
        $this->properties = $properties;
        $this->data = $data;
        $this->params = $params;
        $this->options = $options;
    }

    /**
     * Render the field as HTML
     *
     * @param array|string|int|bool|null $value
     * @param array $replaces
     * @param bool $showInfo
     * @param string $class
     * @param string|null $classParent
     * @param bool $hasErrorTag
     * @param string|null $errorTagClass
     * @param string|null $prefixId
     *
     * @return string
     * @throws Throwable
     */
    public function render(
        array|string|int|bool|null $value = null,
        array $replaces = [],
        bool $showInfo = true,
        string $class = '',
        string $classParent = null,
        bool $hasErrorTag = true,
        string|null $errorTagClass = null,
        string|null $prefixId = null
    ): string
    {
        $fieldInstance = FieldFactory::create($this->type);

        $fieldInstance->instantiate(
            $this->label,
            $this->info,
            $this->validation,
            $this->attributes,
            $this->properties,
            $this->data,
            $this->params,
            $this->options,
        );

        return $fieldInstance->render($value, $replaces, $showInfo, $class, $classParent, $hasErrorTag, $errorTagClass, $prefixId);
    }
}
