<?php

namespace JobMetric\CustomField\FieldImage;

use Illuminate\Support\Traits\Macroable;
use Throwable;

class ImageBuilder
{
    use Macroable;

    /**
     * The Image instances
     *
     * @var array $image
     */
    protected array $images;

    /**
     * Src of the image
     *
     * @var string$src
     */
    protected string $src = '';

    /**
     * Alt of the image
     *
     * @var string $alt
     */
    protected string $alt = '';

    /**
     * Width status of the image
     *
     * @var string|int $width
     */
    protected string|int $width = '';

    /**
     * Height status of the image
     *
     * @var string|int $height
     */
    protected string|int $height = '';

    /**
     * Set the src for the image.
     *
     * @param string $src
     *
     * @return static
     */
    public function src(string $src): static
    {
        $this->src = $src;

        return $this;
    }

    /**
     * Set the alt for the image.
     *
     * @param string|int|bool $alt
     *
     * @return static
     */
    public function alt(string|int|bool $alt): static
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Set the image as width.
     *
     * @return static
     */
    public function width(string|int $width): static
    {
        $this->width = $width;

        return $this;
    }


    /**
     * Set the image as height.
     *
     * @return static
     */
    public function height(string|int $height): static
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Build the image.
     *
     * @return Image
     * @throws Throwable
     */
    public function build(): Image
    {
        $image = new Image($this->src, $this->alt, $this->width , $this->height);

        $this->images[] = $image;

        return $image;
    }

    /**
     * Execute the callback to build the images.
     *
     * @return array
     */
    public function get(): array
    {
        return $this->images;
    }
}
