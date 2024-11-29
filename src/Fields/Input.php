<?php

namespace JobMetric\CustomField\Fields;

use Throwable;

class Input implements FieldContract
{
    use BaseField;

    /**
     * the placeholder of the input field
     *
     * @var string $placeholder
     */
    protected string $placeholder;

    /**
     * get the type of the field
     *
     * @return string
     */
    private function type(): string
    {
        return 'input';
    }

    /**
     * render the field as HTML
     *
     * @return string
     * @throws Throwable
     */
    public function render(): string
    {
        return view('custom-field::input', [
            'field' => $this,
        ])->render();
    }

    /**
     * Set the placeholder for the input field
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
}
