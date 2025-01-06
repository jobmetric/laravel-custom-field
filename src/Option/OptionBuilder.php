<?php

namespace JobMetric\CustomField\Option;

use Illuminate\Support\Traits\Macroable;
use JobMetric\CustomField\Exceptions\OptionEmptyLabelException;
use Throwable;

class OptionBuilder
{
    use Macroable;

    /**
     * The Option instances
     *
     * @var array $option
     */
    protected array $options;

    /**
     * mode of the option
     *
     * @var string $mode
     */
    protected string $mode = 'normal';

    /**
     * type of the option
     *
     * @var string $type
     */
    protected string $type = 'selectBox';

    /**
     * name of the option
     *
     * @var string $name
     */
    protected string $name = '';

    /**
     * Label of the option
     *
     * @var string $label
     */
    protected string $label = '';

    /**
     * discription of the option
     *
     * @var string $discription
     */
    protected string $discription = '';

    /**
     * metaInfo of the option
     *
     * @var string $metaInfo
     */
    protected string $metaInfo = '';

    /**
     * extraContent of the option
     *
     * @var string $extraContent
     */
    protected string $extraContent = '';

    /**
     * tag of the option
     *
     * @var string $tag
     */
    protected string $tag = '';

    /**
     * Value of the option
     *
     * @var string|int|bool $value
     */
    protected string|int|bool $value = '';

    /**
     * Selected status of the option
     *
     * @var bool $selected
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
     * @throws Throwable
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
