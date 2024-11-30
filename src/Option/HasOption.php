<?php

namespace JobMetric\CustomField\Option;

use Closure;
use Throwable;

trait HasOption
{
    /**
     * The options for the select field
     *
     * @var array $options
     */
    protected array $options = [];

    /**
     * Set the options for the select field
     *
     * @param Closure|array $callable
     *
     * @return static
     * @throws Throwable
     */
    public function options(Closure|array $callable): static
    {
        if ($callable instanceof Closure) {
            $callable($builder = new OptionBuilder);

            $this->options[] = $builder->build();
        } else {
            foreach ($callable as $option) {
                $builder = new OptionBuilder;

                $builder->label($option['label']);
                $builder->value($option['value'] ?? '');

                if ($option['selected'] ?? false) {
                    $builder->selected();
                }

                $this->options[] = $builder->build();
            }
        }

        return $this;
    }
}
