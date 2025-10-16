<?php

namespace JobMetric\CustomField\FieldImage;

use Illuminate\Support\Traits\Macroable;

class ImageBuilder
{
    use Macroable;

    /**
     * Built Image instances.
     *
     * @var array<Image> $images
     */
    protected array $images;

    /**
     * Source URL of the image.
     *
     * @var string
     */
    protected string $src = '';

    /**
     * Alt text of the image.
     *
     * @var string
     */
    protected string $alt = '';

    /**
     * Width of the image.
     *
     * @var string|int
     */
    protected string|int $width = '';

    /**
     * Height of the image.
     *
     * @var string|int
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
     * @param string|int $width
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
     * @param string|int $height
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
     */
    public function build(): Image
    {
        $image = new Image($this->src, $this->alt, $this->width, $this->height);

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
