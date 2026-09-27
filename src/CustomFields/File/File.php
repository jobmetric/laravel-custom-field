<?php

namespace JobMetric\CustomField\CustomFields\File;

use JobMetric\CustomField\Contracts\FieldContract;
use JobMetric\CustomField\Core\BaseCustomField;

/** Render a managed file upload field. */
class File extends BaseCustomField implements FieldContract
{
    /** Return the registered field type. */
    public static function type(): string
    {
        return 'file';
    }

    /** Mark file fields as managed before exporting their definition. */
    public function beforeBuild(): void
    {
        $this->managedFile();
    }
}
