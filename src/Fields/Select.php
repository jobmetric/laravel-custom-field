<?php

namespace JobMetric\CustomField\Fields;

use Closure;
use JobMetric\CustomField\Option\Builder;
use Throwable;

class Select implements FieldContract
{
    use BaseField;

    /**
     * The placeholder for the select field
     *
     * @var string $placeholder
     */
    protected string $placeholder;

    /**
     * The options for the select field
     *
     * @var array $options
     */
    protected array $options = [];

    /**
     * get the type of the field
     *
     * @return string
     */
    private function type(): string
    {
        return 'select';
    }

    /**
     * render the field as HTML
     *
     * @return string
     * @throws Throwable
     */
    public function render(): string
    {
        return view('custom-field::select', [
            'field' => $this,
        ])->render();
    }

    /**
     * Set the placeholder for the select field
     *
     * @param string $placeholder
     *
     * @return static
     */
    public function placeholder(string $placeholder): static
    {
        $this->placeholder = $placeholder;

        return $this;
    }

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
            $callable($builder = new Builder);

            $this->options[] = $builder->build();
        } else {
            foreach ($callable as $option) {
                $builder = new Builder;

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
     * Set the multiple attribute for the select field
     *
     * @return static
     */
    public function multiple(): static
    {
        $this->params['multiple'] = true;

        return $this;
    }
}
