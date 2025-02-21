<?php

namespace JobMetric\CustomField\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use JobMetric\Language\Enums\CalendarTypeEnum;
use JobMetric\Language\Models\Language;
use Throwable;

class Datetime extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string|null $id = null,
        public string|null $class = null,
        public bool        $required = false,
        public bool        $future = false,
        public string|null $name = null,
        public string|null $placeholder = null,
        public string|null $dataName = null,
        public string|null $value = null,
        public string|null $title = null,
        public string|null $info = null,
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
        DomiPlugins('datepicker');

        $locale = app()->getLocale();

        /**
         * @var Language $language
         */
        $language = Language::query()
            ->where('locale', $locale)
            ->firstOrFail();

        if ($language->calendar == CalendarTypeEnum::JALALI()) {
            DomiPlugins('datepicker.jalali');
        }

        return view('custom-field::components.datetime_field');
    }
}
