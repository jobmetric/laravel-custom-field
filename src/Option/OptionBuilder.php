<?php

namespace JobMetric\CustomField\Option;

use Illuminate\Support\Traits\Macroable;
use JobMetric\CustomField\Exceptions\OptionEmptyLabelException;
 

class OptionBuilder
{
    use Macroable;

    /**
     * Built Option instances.
     *
     * @var array<Option> $options
     */
    protected array $options = [];

    /**
     * Mode of the option (e.g., normal/pro).
     *
     * @var string
     */
    protected string $mode = 'normal';

    /**
     * Type of the option (selectBox/radio/checkbox).
     *
     * @var string
     */
    protected string $type = 'selectBox';

    /**
     * Name of the option input.
     *
     * @var string
     */
    protected string $name = '';

    /**
     * Label of the option.
     *
     * @var string
     */
    protected string $label = '';

    /**
     * Description of the option.
     *
     * @var string
     */
    protected string $discription = '';

    /**
     * Meta information for the option.
     *
     * @var string
     */
    protected string $metaInfo = '';

    /**
     * Extra content associated with the option.
     *
     * @var string
     */
    protected string $extraContent = '';

    /**
     * Tag of the option.
     *
     * @var string
     */
    protected string $tag = '';

    /**
     * Value of the option.
     *
     * @var string|int|bool
     */
    protected string|int|bool $value = '';

    /**
     * Selected status of the option.
     *
     * @var bool
     */
    protected bool $selected = false;

    /**
     * Set the mode for the option.
     *
     * @param string $mode
     *
     * @return static
     */
    public function mode(string $mode): static
    {
        if ($this->label !== '') {
            $this->build();
        }
        $this->mode = $mode;

        return $this;
    } 
    
    /**
     * Set the type for the option.
     *
     * @param string $type
     *
     * @return static
     */
    public function type(string $type): static
    {
        if ($this->label !== '') {
            $this->build();
        }
        $this->type = $type;

        return $this;
    }


    /**
     * Set the name for the option.
     *
     * @param string $name
     *
     * @return static
     */
    public function name(string $name): static
    {
        if ($this->label !== '') {
            $this->build();
        }
        $this->name = $name;

        return $this;
    }

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
     * Set the discription for the option.
     *
     * @param string $discription
     *
     * @return static
     */
    public function discription(string $discription): static
    {
        $this->discription = $discription;

        return $this;
    }

    /**
     * Set the metaInfo for the option.
     *
     * @param string $metaInfo
     *
     * @return static
     */
    public function metaInfo(string $metaInfo): static
    {
        $this->metaInfo = $metaInfo;

        return $this;
    }

    /**
     * Set the extraContent for the option.
     *
     * @param string $extraContent
     *
     * @return static
     */
    public function extraContent(string $extraContent): static
    {
        $this->extraContent = $extraContent;

        return $this;
    }

    /**
     * Set the tag for the option.
     *
     * @param string $tag
     *
     * @return static
     */
    public function tag(string $tag): static
    {
        $this->tag = $tag;

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
     */
    public function build(): Option
    {
        if ($this->label === '') {
            throw new OptionEmptyLabelException();
        }

        $option = new Option(
            $this->mode,
            $this->type,
            $this->name,
            $this->label,
            $this->discription,
            $this->metaInfo,
            $this->extraContent,
            $this->tag, 
            $this->value, 
            $this->selected
        );

        $this->options[] = $option;

        // Reset current builder state so subsequent builds don't inherit flags
        $this->resetCurrentState();

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

    /**
     * Reset the current in-progress option state to defaults.
     *
     * @return void
     */
    protected function resetCurrentState(): void
    {
        $this->mode = 'normal';
        $this->type = 'selectBox';
        $this->name = '';
        $this->label = '';
        $this->discription = '';
        $this->metaInfo = '';
        $this->extraContent = '';
        $this->tag = '';
        $this->value = '';
        $this->selected = false;
    }

    /**
     * Finalize builder by building any pending option definition.
     */
    public function finalize(): void
    {
        if ($this->label !== '') {
            $this->build();
        }
    }
}
