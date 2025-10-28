<?php

namespace JobMetric\CustomField\Support;

use InvalidArgumentException;
use JobMetric\CustomField\Contracts\FieldContract;

/**
 * CustomFieldRegistry
 *
 * Holds and manages all available custom field type instances at runtime.
 * This registry provides a single source of truth for resolving a field
 * implementation by its unique type, ensuring predictable lookups and
 * preventing duplicate registrations.
 */
class CustomFieldRegistry
{
    /**
     * Internal map of field type to field instance.
     * Acts as the in-memory catalog for all registered fields.
     *
     * @var array<string, FieldContract>
     */
    protected array $fields = [];

    /**
     * Register a field instance by its type.
     * Ensures each type is unique across the application lifecycle.
     *
     * @param FieldContract $field The field instance to be registered. Its type() must be unique.
     *
     * @return static
     * @throws InvalidArgumentException If a field with the same type is already registered.
     */
    public function register(FieldContract $field): static
    {
        $type = $field::type();

        if (isset($this->fields[$type])) {
            throw new InvalidArgumentException("Field type '{$type}' already registered.");
        }

        $this->fields[$type] = $field;

        return $this;
    }

    /**
     * Resolve and return a field instance by its type.
     * Guarantees a concrete implementation for the requested field type.
     *
     * @param string $type The unique type of the field (e.g., "text", "color").
     *
     * @return FieldContract The corresponding field instance.
     * @throws InvalidArgumentException If the type has not been registered.
     */
    public function get(string $type): FieldContract
    {
        if (! isset($this->fields[$type])) {
            throw new InvalidArgumentException("Field type '{$type}' not found.");
        }

        return $this->fields[$type];
    }

    /**
     * Return all registered field instances indexed by their types.
     * Useful for introspection, debugging, or building UI pickers.
     *
     * @return array<string, FieldContract> Map of type => field instance.
     */
    public function all(): array
    {
        return $this->fields;
    }
}
