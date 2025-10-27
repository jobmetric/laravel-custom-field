<?php

namespace JobMetric\CustomField\Contracts;

interface FieldContract
{
    /**
     * Get the alias of the field.
     *
     * @return string
     */
    public static function alias(): string;

    /**
     * Render HTML.
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
    ): string;

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
