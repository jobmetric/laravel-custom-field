<?php

namespace JobMetric\CustomField\FieldImage;

use Closure;
use Illuminate\Support\Collection;

trait HasImage
{
    /**
     * Images.
     *
     * @var array
     */
    protected array $images = [];

    /**
     * Set the image for the field
     *
     * @param Closure|array $callable
     *
     * @return static
     */
    public function images(Closure|array $callable): static
    {
        if ($callable instanceof Closure) {
            $callable($builder = new ImageBuilder);

            $this->images[] = $builder->build();
        } else {
            foreach ($callable as $image) {
                $builder = new ImageBuilder;

                $builder->src($image['src']);
                $builder->alt($image['alt'] ?? '');
                $builder->width($image['width'] ?? '');
                $builder->height($image['height'] ?? '');

                $this->images[] = $builder->build();
            }
        }

        return $this;
    }

    /**
     * Get the image collection
     *
     * @return Collection
     */
    public function getImages(): Collection
    {
        return collect($this->images);
    }

    /**
     * Get images HTML.
     *
     * @return string
     */
    public function getThemeImages(): string
    {
        return $this->getImages()->map(function (Image $image) {
            return $image->toHtml();
        })->implode('');
    }
}
