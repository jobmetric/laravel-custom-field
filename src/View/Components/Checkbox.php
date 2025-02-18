<?php

namespace JobMetric\CustomField\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Throwable;

class Checkbox extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string|null $id = null,
        public string|null $class = null,
        public string|null $name = null,
        public string|null $value = null,
        public string|null $title = null,
        public bool        $checked = false,
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
        return view('custom-field::components.checkbox_field');
    }
}
