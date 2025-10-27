<?php

namespace JobMetric\CustomField\Exceptions;

use Exception;
use Throwable;

class BladeViewNotFoundException extends Exception
{
    public function __construct(string $qualifiedView, string $expectedFile, int $code = 400, ?Throwable $previous = null)
    {
        parent::__construct(trans('custom-field::base.exceptions.blade_view_not_found', [
            'qualifiedView' => $qualifiedView,
            'expectedFile' => $expectedFile,
        ]), $code, $previous);
    }
}
