<?php

namespace JobMetric\CustomField\Fields;

use Throwable;

interface FieldContract
{
    /**
     * render the field as HTML
     *
     * @param array|string|int|bool|null $value
     * @param array $replaces
     * @param bool $showInfo
     * @param string $class
     * @param string|null $classParent
     * @param bool $hasErrorTagForm
     * @param bool $hasErrorTagJs
     * @param string|null $errorTagClass
     * @param string|null $prefixId
     *
     * @return string
     * @throws Throwable
     */
    public function render(
        array|string|int|bool|null $value = null,
        array                      $replaces = [],
        bool                       $showInfo = true,
        string                     $class = '',
        string                     $classParent = null,
        bool                       $hasErrorTagForm = true,
        bool                       $hasErrorTagJs = true,
        string|null                $errorTagClass = null,
        string|null                $prefixId = null
    ): string;

    /**
     * export the field as structured array
     *
     * @param array|string|int|bool|null $value
     * @param array $replaces
     * @param bool $showInfo
     * @param string $class
     * @param string|null $classParent
     * @param bool $hasErrorTagForm
     * @param bool $hasErrorTagJs
     * @param string|null $errorTagClass
     * @param string|null $prefixId
     *
     * @return array
     * @throws Throwable
     */
    public function toArray(
        array|string|int|bool|null $value = null,
        array                      $replaces = [],
        bool                       $showInfo = true,
        string                     $class = '',
        string                     $classParent = null,
        bool                       $hasErrorTagForm = true,
        bool                       $hasErrorTagJs = true,
        string|null                $errorTagClass = null,
        string|null                $prefixId = null
    ): array;
}
