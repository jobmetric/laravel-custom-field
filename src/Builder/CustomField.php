<?php

namespace JobMetric\CustomField\Builder;

class CustomField
{
    /**
     * Field type
     *
     * @var string $type
     */
    public string $type;

    /**
     * Field name
     *
     * @var string $name
     */
    public string $name;

    /**
     * Field id
     *
     * @var string $id
     */
    public string $id;

    /**
     * Field class
     *
     * @var string $class
     */
    public string $class;

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
     * Field placeholder
     *
     * @var string $placeholder
     */
    public string $placeholder;

    /**
     * Field validation
     *
     * @var string $validation
     */
    public string $validation;

    /**
     * Field value
     *
     * @var array|string|int|bool $value
     */
    public array|string|int|bool $value;

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
        string                $type,
        string                $name,
        string                $id,
        string                $class,
        string                $label,
        string                $info,
        string                $placeholder,
        string                $validation,
        array|string|int|bool $value,
        array                 $params = [],
        array                 $options = [],
    )
    {
        $this->type = $type;
        $this->name = $name;
        $this->id = $id;
        $this->class = $class;
        $this->label = $label;
        $this->info = $info;
        $this->placeholder = $placeholder;
        $this->validation = $validation;
        $this->value = $value;
        $this->params = $params;
        $this->options = $options;
    }
}
