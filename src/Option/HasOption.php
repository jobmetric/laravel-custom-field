<?php

namespace JobMetric\CustomField\Option;

use Closure;
use Illuminate\Support\Collection;
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

            // Finalize to ensure any pending option is built
            if (method_exists($builder, 'finalize')) {
                $builder->finalize();
            } else {
                // Fallback for safety in case finalize is missing
                try {
                    $builder->build();
                } catch (Throwable) {
                    // ignore if build cannot proceed (e.g., empty label)
                }
            }

            foreach ($builder->get() as $option) {
                $this->options[] = $option;
            }
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

    /**
     * Get the options collection
     *
     * @return Collection
     */
    public function getOptions(): Collection
    {
        return collect($this->options);
    }

    /**
     * Get options HTML.
     *
     * @return string
     */
    public function getThemeOptions(): string
    {
        return $this->getOptions()->map(function (Option $option) {
            return $option->toHtml();
        })->implode('');
    }
}
