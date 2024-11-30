<?php

namespace JobMetric\CustomField\Attribute\Data;

use Illuminate\Support\Traits\Macroable;
use JobMetric\CustomField\Exceptions\OptionEmptyLabelException;
use Throwable;

class DataBuilder
{
    use Macroable;

    /**
     * The Data instances
     *
     * @var array $data
     */
    protected array $data;

    /**
     * Name of the data
     *
     * @var string $name
     */
    protected string $name = '';

    /**
     * Value of the data
     *
     * @var string|int|bool $value
     */
    protected string|int|bool|null $value = '';

    /**
     * Set the name for the data.
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
     * Set the value for the data.
     *
     * @param string|int|bool|null $value
     *
     * @return static
     */
    public function value(string|int|bool|null $value): static
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Build the data.
     *
     * @return Data
     * @throws Throwable
     */
    public function build(): Data
    {
        if ($this->name === '') {
            throw new OptionEmptyLabelException();
        }

        $data = new Data($this->name, $this->value);

        $this->data[] = $data;

        return $data;
    }

    /**
     * Execute the callback to build the data.
     *
     * @return array
     */
    public function get(): array
    {
        return $this->data;
    }
}
