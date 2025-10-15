<?php

namespace JobMetric\CustomField\FieldImage;

use Closure;
use Illuminate\Support\Collection;
use Throwable;

trait HasImage
{
    /**
     * The image for the field
     *
     * @var array $images
     */
    protected array $images = [];

    /**
     * Set the image for the field
     *
     * @param Closure|array $callable
     *
     * @return static
     * @throws Throwable
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
        return collect($this->image);
    }

    /**
     * Get the images render template
     *
     * @return string
     */
    public function getThemeImages(): string
    {
        return $this->getImages()->map(function (Image $image) {
            return $image->render();
        })->implode('');
    }
}
