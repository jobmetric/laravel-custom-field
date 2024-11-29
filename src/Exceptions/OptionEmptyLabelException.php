<?php

namespace JobMetric\CustomField\Exceptions;

use Exception;
use Throwable;

class OptionEmptyLabelException extends Exception
{
    public function __construct(int $code = 400, ?Throwable $previous = null)
    {
        parent::__construct(trans('custom-field::base.exceptions.option_empty_label'), $code, $previous);
    }
}
