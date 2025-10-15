<?php

namespace JobMetric\CustomField\Option;

use BadMethodCallException;
use JobMetric\CustomField\Attribute\Data\HasData;
use Throwable;

/**
 * Class Option
 *
 * @package JobMetric\CustomField\Option
 *
 * @method getClass()
 * @method getLabel()
 * @method getValue()
 */
class Option
{
    use HasData;

    public string $mode;
    public string $type;
    public string $name;
    public string $label;
    public string $discription;
    public string $metaInfo;
    public string $extraContent;
    public string $tag;
    public string|int|bool $value;
    public bool $selected = false;

    public function __construct(
        string $mode,
        string $type, 
        string $name, 
        string $label, 
        string $discription, 
        string $metaInfo, 
        string $extraContent, 
        string $tag, 
        string|int|bool $value, 
        bool $selected = false
        )
    {
        $this->mode = $mode;
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
        $this->discription = $discription;
        $this->metaInfo = $metaInfo;
        $this->extraContent = $extraContent;
        $this->tag = $tag;
        $this->value = $value;
        $this->selected = $selected;
    }

    /**
     * Render the option as HTML.
     *
     * @return string
     * @throws Throwable
     */
    public function render(): string
    {
      
        if($this->type === 'radio' || $this->type === 'checkbox') {
            $viewName = $this->mode === 'pro' ? 'optionSuperRadioAndCheckbox' : 'optionRadioAndCheckbox';
        }else{
            $viewName = 'option';
        }

        return view("custom-field::$viewName", [
            'field' => $this,
        ])->render();

    }

    /**
     * get the property of the field
     *
     * @param string $name
     * @param array  $arguments
     *
     * @return mixed
     * @throws Throwable
     */
    public function __call(string $name, array $arguments): mixed
    {
        if (str_starts_with($name, 'get')) {
            return $this->get(lcfirst(substr($name, 3)));
        } else {
            throw new BadMethodCallException("Method '$name' does not exist");
        }
    }

    /**
     * get the property of the field
     *
     * @param string $property
     *
     * @return mixed
     * @throws Throwable
     */
    public function get(string $property): mixed
    {
        if (!property_exists($this, $property)) {
            throw new BadMethodCallException("Property '$property' does not exist");
        }

        return $this->$property;
    }
}
