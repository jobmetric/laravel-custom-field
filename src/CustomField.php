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
     * @var array|string|null $validation
     */
    public array|string|null $validation = null;

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

    /**
     * Field images
     *
     * @var array $images
     */
    public array $images = [];

    public function __construct(
        string       $type,
        string|null  $label,
        string|null  $info,
        array|string $validation = null,
        array        $attributes = [],
        array        $properties = [],
        array        $data = [],
        array        $params = [],
        array        $options = [],
        array        $images = [],
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
        $this->images = $images;
    }

    /**
     * Render the field as HTML
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
     * @return string
     * @throws Throwable
     */
    public function render(
        array|string|int|bool|null $value = 'undefined',
        array                      $replaces = [],
        bool                       $showInfo = true,
        string                     $class = 'undefined',
        string                     $classParent = null,
        bool                       $hasErrorTagForm = false,
        bool                       $hasErrorTagJs = false,
        string|null                $errorTagClass = null,
        string|null                $prefixId = 'undefined'
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
            $this->images
        );

        return $fieldInstance->render($value, $replaces, $showInfo, $class, $classParent, $hasErrorTagForm, $hasErrorTagJs, $errorTagClass, $prefixId);
    }

    /**
     * Export the field as structured array
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
    public function toArray(
        array|string|int|bool|null $value = 'undefined',
        array                      $replaces = [],
        bool                       $showInfo = true,
        string                     $class = 'undefined',
        string                     $classParent = null,
        bool                       $hasErrorTagForm = false,
        bool                       $hasErrorTagJs = false,
        string|null                $errorTagClass = null,
        string|null                $prefixId = 'undefined'
    ): array
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
            $this->images
        );

        return $fieldInstance->toArray($value, $replaces, $showInfo, $class, $classParent, $hasErrorTagForm, $hasErrorTagJs, $errorTagClass, $prefixId);
    }
}
