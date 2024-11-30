<?php

namespace JobMetric\CustomField\Option;

use JobMetric\CustomField\Exceptions\OptionEmptyLabelException;
use Throwable;

class OptionBuilder
{
    /**
     * The Option instances
     *
     * @var array $option
     */
    protected array $options;

    /**
     * Value of the option
     *
     * @var string|int|bool $value
     */
    protected string|int|bool $value = '';

    /**
     * Label of the option
     *
     * @var string $label
     */
    protected string $label = '';

    /**
     * Selected status of the option
     *
     * @var bool $selected
     */
    protected bool $selected = false;

    /**
     * Set the label for the option.
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
     * Set the value for the option.
     *
     * @param string|int|bool $value
     *
     * @return static
     */
    public function value(string|int|bool $value): static
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Set the option as selected.
     *
     * @return static
     */
    public function selected(): static
    {
        $this->selected = true;

        return $this;
    }

    /**
     * Build the option.
     *
     * @return Option
     * @throws Throwable
     */
    public function build(): Option
    {
        if ($this->label === '') {
            throw new OptionEmptyLabelException();
        }

        $option = new Option($this->label, $this->value, $this->selected);

        $this->options[] = $option;

        return $option;
    }

    /**
     * Execute the callback to build the options.
     *
     * @return array
     */
    public function get(): array
    {
        return $this->options;
    }
}
