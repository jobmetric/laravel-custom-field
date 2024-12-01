<?php

namespace JobMetric\CustomField;

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
}
