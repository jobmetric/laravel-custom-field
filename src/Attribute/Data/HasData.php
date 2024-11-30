<?php

namespace JobMetric\CustomField\Attribute\Data;

use Closure;
use Throwable;

trait HasData
{
    /**
     * The data property for the field
     *
     * @var array $data
     */
    protected array $data = [];

    /**
     * Set the data for the field
     *
     * @param Closure|array $callable
     *
     * @return static
     * @throws Throwable
     */
    public function data(Closure|array $callable): static
    {
        if ($callable instanceof Closure) {
            $callable($builder = new DataBuilder);

            $this->data[] = $builder->build();
        } else {
            foreach ($callable as $data) {
                $builder = new DataBuilder;

                $builder->name($data['name']);
                $builder->value($data['value'] ?? '');

                $this->data[] = $builder->build();
            }
        }

        return $this;
    }
}