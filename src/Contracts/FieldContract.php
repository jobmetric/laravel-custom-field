<?php

namespace JobMetric\CustomField\Contracts;

interface FieldContract
{
    /**
     * Get the type of the field.
     *
     * @return string
     */
    public static function type(): string;

    /**
     * Export as HTML.
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
     */
    public function toHtml(
        array|string|int|bool|null $value = null,
        array                      $replaces = [],
        bool                       $showInfo = true,
        string                     $class = '',
        ?string                    $classParent = null,
        bool                       $hasErrorTagForm = true,
        bool                       $hasErrorTagJs = true,
        ?string                    $errorTagClass = null,
        ?string                    $prefixId = null
    ): array;

    /**
     * Export as array.
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
     */
    public function toArray(
        array|string|int|bool|null $value = null,
        array                      $replaces = [],
        bool                       $showInfo = true,
        string                     $class = '',
        ?string                    $classParent = null,
        bool                       $hasErrorTagForm = true,
        bool                       $hasErrorTagJs = true,
        ?string                    $errorTagClass = null,
        ?string                    $prefixId = null
    ): array;
}
