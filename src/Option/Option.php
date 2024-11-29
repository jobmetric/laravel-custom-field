<?php

namespace JobMetric\CustomField\Option;

class Option
{
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
     */
    public function render(): string
    {
        return <<<'HTML'
<option value="{$this->value}" {$this->selected ? 'selected' : ''}>{$this->label}</option>
HTML;
    }
}
