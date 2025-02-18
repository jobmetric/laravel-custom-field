<?php

namespace JobMetric\CustomField\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Throwable;

class ErrorForm extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string|null $message = null,
    )
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @throws Throwable
     */
    public function render(): View|Closure|string
    {
        return view('custom-field::components.error_form');
    }
}
