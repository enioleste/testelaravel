<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'O :attribute precisa ser aceito.',
    'active_url'           => 'O campo :attribute não é uma URL válida.',
    'after'                => 'O campo :attribute precisa ser uma data posterior a :date.',
    'alpha'                => 'O campo :attribute pode apenas conter letras.',
    'alpha_dash'           => 'O campo :attribute pode apenas conter letras, números e traços.',
    'alpha_num'            => 'O campo :attribute pode apenas conter letras e números.',
    'array'                => 'O campo :attribute deve ser um array.',
    'before'               => 'O campo :attribute precisa ser uma data anterior a :date.',
    'between'              => [
        'numeric' => 'O campo :attribute deve estar entre :min e :max.',
        'file'    => 'O campo :attribute deve estar entre :min e :max kilobytes.',
        'string'  => 'O campo :attribute deve estar entre :min e :max caracteres.',
        'array'   => 'O campo :attribute deve estar entre :min e :max itens.',
    ],
    'boolean'              => 'O campo :attribute deve ser verdadeiro ou falso.',
    'confirmed'            => 'O campo :attribute não corresponde ao valor.',
    'date'                 => 'O campo :attribute não é uma data válida.',
    'date_format'          => 'O campo :attribute não corresponde ao formato de data :format.',
    'different'            => 'O campo :attribute e :other tem que ser diferentes.',
    'digits'               => 'O campo :attribute deve conter :digits digitos.',
    'digits_between'       => 'O campo :attribute deve estar entre :min e :max digitos.',
    'dimensions'           => 'O campo :attribute tem dimensões de imagem incorretos.',
    'distinct'             => 'O campo :attribute contém valor duplicado.',
    'email'                => 'O campo :attribute deve ser um endereço de email válido.',
    'exists'               => 'O campo selecionado :attribute é inválido.',
    'file'                 => 'O campo :attribute deve conter um arquivo.',
    'filled'               => 'O campo :attribute é obrigatório.',
    'image'                => 'O campo :attribute deve conter uma imagem.',
    'in'                   => 'O campo selecionado :attribute é inválido.',
    'in_array'             => 'O campo :attribute não existe em :other.',
    'integer'              => 'O campo :attribute deve conter um valor inteiro.',
    'ip'                   => 'O campo :attribute deve conter um endereço de IP válido.',
    'json'                 => 'O campo :attribute deve conter uma string JSON válida.',
    'max'                  => [
        'numeric' => 'O campo :attribute não pode ser maior que :max.',
        'file'    => 'O campo :attribute não pode ser maior que :max kilobytes.',
        'string'  => 'O campo :attribute não pode ser maior que :max caracteres.',
        'array'   => 'O campo :attribute não pode conter mais que :max itens.',
    ],
    'mimes'                => 'O campo :attribute deve conter um arquivo com os seguintes formatos: :values.',
    'mimetypes'            => 'O campo :attribute deve conter um arquivo com os seguintes formatos: :values.',
    'min'                  => [
        'numeric' => 'O campo :attribute deve ter pelo menos :min.',
        'file'    => 'O campo :attribute deve ter pelo menos :min kilobytes.',
        'string'  => 'O campo :attribute deve ter pelo menos :min caracteres.',
        'array'   => 'O campo :attribute deve conter pelo menos :min itens.',
    ],
    'not_in'               => 'O campo selecionado :attribute é inválido.',
    'numeric'              => 'O campo :attribute deve ser um número.',
    'present'              => 'O campo :attribute deve ser preenchido.',
    'regex'                => 'O campo :attribute contém formato inválido.',
    'required'             => 'O campo :attribute é obrigatório.',
    'required_if'          => 'O campo :attribute é obrigatório quando :other é :value.',
    'required_unless'      => 'O campo :attribute é obrigatório unless :other é in :values.',
    'required_with'        => 'O campo :attribute é obrigatório quando :values é present.',
    'required_with_all'    => 'O campo :attribute é obrigatório quando :values é present.',
    'required_without'     => 'O campo :attribute é obrigatório quando :values é not present.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum dos :values estão presentes.',
    'same'                 => 'O campo :attribute e :other devem ser compatíveis.',
    'size'                 => [
        'numeric' => 'O campo :attribute deve ser de :size.',
        'file'    => 'O campo :attribute deve ser de :size kilobytes.',
        'string'  => 'O campo :attribute deve ser de :size caracteres.',
        'array'   => 'O campo :attribute deve conter :size itens.',
    ],
    'string'               => 'O campo :attribute deve ser uma string.',
    'timezone'             => 'O campo :attribute deve ser uma zona de tempo válida.',
    'unique'               => 'O campo :attribute já existe.',
    'uploaded'             => 'O campo :attribute falhou ao enviar.',
    'url'                  => 'O campo :attribute tem formato inválido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
