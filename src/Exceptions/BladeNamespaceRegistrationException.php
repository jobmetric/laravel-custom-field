<?php

namespace JobMetric\CustomField\Exceptions;

use Exception;
use Throwable;

class BladeNamespaceRegistrationException extends Exception
{
    public function __construct(string $namespace, string $path, int $code = 400, ?Throwable $previous = null)
    {
        parent::__construct(trans('custom-field::base.exceptions.blade_namespace_registration', [
            'namespace' => $namespace,
            'path' => $path,
        ]), $code, $previous);
    }
}
