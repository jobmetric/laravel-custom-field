<?php

namespace JobMetric\CustomField\Attribute\Data;

use Illuminate\Support\Str;

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
     * @param string               $name
     * @param string|int|bool|null $value
     */
    public function __construct(string $name, string|int|bool|null $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * Get data HTML.
     *
     * @param array $replacement
     *
     * @return string
     */
    public function toHtml(array $replacement = []): string
    {
        // If name is set, replace parts of it based on the replacement array
        $value = $this->value;
        if ($this->value !== null) {
            foreach ($replacement as $search => $replace) {
                $value = str_replace('{' . $search . '}', $replace, (string)$value);
            }
        }

        return ' data-' . Str::kebab($this->name) . '="' . $value . '"';
    }

    /**
     * Export as array.
     *
     * @param array $replacement
     *
     * @return array
     */
    public function toArray(array $replacement = []): array
    {
        $value = $this->value;
        if ($value !== null) {
            foreach ($replacement as $search => $replace) {
                $value = str_replace('{' . $search . '}', $replace, (string)$value);
            }
        }

        return [
            'name' => $this->name,
            'value' => $value,
        ];
    }
}
