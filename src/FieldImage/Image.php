<?php

namespace JobMetric\CustomField\FieldImage;

use BadMethodCallException;
use JobMetric\CustomField\Attribute\Data\HasData;
use Throwable;

/**
 * Class Image
 *
 * @package JobMetric\CustomField\FieldImage
 *
 * @method getClass()
 */
class Image
{
    use HasData;

    public string $src;
    public string $alt;
    public string|int $width;
    public string|int $height;

    public function __construct(string $src, string $alt, string|int $width, string|int $height)
    {
        $this->src = $src;
        $this->alt = $alt;
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * Render HTML.
     *
     * @return string
     * @throws Throwable
     */
    public function toHtml(): string
    {
        return view('custom-field::imageTag', [
            'field' => $this,
        ])->render();
    }

    /**
     * Export as array.
     *
     * @return array
     */
    public function toArray(): array
    {
        $dataItems = $this->getData()->map(function ($data) {
            if (method_exists($data, 'toArray')) {
                return $data->toArray();
            }
            return null;
        })->filter()->values()->all();

        return [
            'src' => $this->src,
            'alt' => $this->alt,
            'width' => $this->width,
            'height' => $this->height,
            'data' => $dataItems,
        ];
    }

    /**
     * get the property of the field
     *
     * @param string $name
     * @param array $arguments
     *
     * @return mixed
     */
    public function __call(string $name, array $arguments): mixed
    {
        if (str_starts_with($name, 'get')) {
            return $this->get(lcfirst(substr($name, 3)));
        } else {
            throw new BadMethodCallException("Method '$name' does not exist");
        }
    }

    /**
     * get the property of the field
     *
     * @param string $property
     *
     * @return mixed
     */
    public function get(string $property): mixed
    {
        if (!property_exists($this, $property)) {
            throw new BadMethodCallException("Property '$property' does not exist");
        }

        return $this->$property;
    }
}
