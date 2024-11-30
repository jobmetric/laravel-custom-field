<?php

namespace JobMetric\CustomField\Attribute\Data;

use Illuminate\Support\Str;
use Throwable;

/**
 * Class Data
 *
 * @package JobMetric\CustomField\Attribute\Data
 */
class Data
{
    /**
     * Name of the data
     *
     * @var string $name
     */
    public string $name;

    /**
     * Value of the data
     *
     * @var string|int|bool|null $value
     */
    public string|int|bool|null $value;

    /**
     * Data constructor.
     *
     * @param string $name
     * @param string|int|bool|null $value
     */
    public function __construct(string $name, string|int|bool|null $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * Render the data as HTML.
     *
     * @return string
     * @throws Throwable
     */
    public function render(): string
    {
        return ' data-' . Str::kebab($this->name) . '="' . $this->value . '"';
    }
}
