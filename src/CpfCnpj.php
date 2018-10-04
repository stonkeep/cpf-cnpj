<?php

namespace Stonkeep\CpfCnpj;

use Laravel\Nova\Fields\Field;

class CpfCnpj extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'cpf-cnpj';

    public function __construct(string $name, ?string $attribute = null, ?mixed $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);

        $this->rules('cpfCnpj');

    }

    /**
     * Set the validation rules for the field.
     *
     * @param  \Closure|array  $rules
     * @return $this
     */
    public function rules($rules)
    {
        parent::rules($rules);

        array_push($this->rules, 'cpfCnpj');

        return $this;
    }
}
