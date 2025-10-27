<?php

namespace JobMetric\CustomField\Support;

use InvalidArgumentException;
use JobMetric\CustomField\Contracts\FieldContract;

/**
 * CustomFieldRegistry
 *
 * Holds and manages all available custom field type instances at runtime.
 * This registry provides a single source of truth for resolving a field
 * implementation by its unique alias, ensuring predictable lookups and
 * preventing duplicate registrations.
 */
class CustomFieldRegistry
{
    /**
     * Internal map of field alias to field instance.
     * Acts as the in-memory catalog for all registered fields.
     *
     * @var array<string, FieldContract>
     */
    protected array $fields = [];

    /**
     * Register a field instance by its alias.
     * Ensures each alias is unique across the application lifecycle.
     *
     * @param FieldContract $field The field instance to be registered. Its alias() must be unique.
     *
     * @return static
     * @throws InvalidArgumentException If a field with the same alias is already registered.
     */
    public function register(FieldContract $field): static
    {
        $alias = $field::alias();

        if (isset($this->fields[$alias])) {
            throw new InvalidArgumentException("Field alias '{$alias}' already registered.");
        }

        $this->fields[$alias] = $field;

        return $this;
    }

    /**
     * Resolve and return a field instance by its alias.
     * Guarantees a concrete implementation for the requested field type.
     *
     * @param string $alias The unique alias of the field (e.g., "text", "color").
     *
     * @return FieldContract The corresponding field instance.
     * @throws InvalidArgumentException If the alias has not been registered.
     */
    public function get(string $alias): FieldContract
    {
        if (! isset($this->fields[$alias])) {
            throw new InvalidArgumentException("Field alias '{$alias}' not found.");
        }

        return $this->fields[$alias];
    }

    /**
     * Return all registered field instances indexed by their aliases.
     * Useful for introspection, debugging, or building UI pickers.
     *
     * @return array<string, FieldContract> Map of alias => field instance.
     */
    public function all(): array
    {
        return $this->fields;
    }
}
