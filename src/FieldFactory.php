<?php

namespace JobMetric\CustomField;

use Exception;
use InvalidArgumentException;
use JobMetric\CustomField\Contracts\FieldContract;
use JobMetric\CustomField\Support\CustomFieldRegistry;

class FieldFactory
{
    /**
     * Create a field instance based on the type
     *
     * @param string $type
     *
     * @return FieldContract
     * @throws Exception
     */
    public static function create(string $type): FieldContract
    {
        /** @var CustomFieldRegistry $registry */
        $registry = app('CustomFieldRegistry');

        try {
            $prototype = $registry->get($type);
        } catch (InvalidArgumentException $e) {
            throw new Exception("Unsupported field type: $type");
        }

        // Return a fresh clone to avoid shared state between usages
        return clone $prototype;
    }
}
