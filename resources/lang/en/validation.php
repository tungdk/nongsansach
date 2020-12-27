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

    'accepted' => '1', //'The :attribute must be accepted.',
    'active_url' => '2', //'The :attribute is not a valid URL.',
    'after' => '3', //'The :attribute must be a date after :date.',
    'after_or_equal' => '4', //'The :attribute must be a date after or equal to :date.',
    'alpha' => '5', //'The :attribute may only contain letters.',
    'alpha_dash' => '6', //'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => '7', //'The :attribute may only contain letters and numbers.',
    'array' => '8', //'The :attribute must be an array.',
    'before' => '9', //'The :attribute must be a date before :date.',
    'before_or_equal' => '10', //'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => '11', //'The :attribute must be between :min and :max.',
        'file' => '12', //'The :attribute must be between :min and :max kilobytes.',
        'string' => '13', //'The :attribute must be between :min and :max characters.',
        'array' => '14', //'The :attribute must have between :min and :max items.',
    ],
    'boolean' => '15', //'The :attribute field must be true or false.',
    'confirmed' => '16', //'The :attribute confirmation does not match.',
    'date' => '17', //'The :attribute is not a valid date.',
    'date_equals' => '18', //'The :attribute must be a date equal to :date.',
    'date_format' => '19', //'The :attribute does not match the format :format.',
    'different' => '20', //'The :attribute and :other must be different.',
    'digits' => '21', //'The :attribute must be :digits digits.',
    'digits_between' => '22', //'The :attribute must be between :min and :max digits.',
    'dimensions' => '23', //'The :attribute has invalid image dimensions.',
    'distinct' => '24', //'The :attribute field has a duplicate value.',
    'email' => '25', //'The :attribute must be a valid email address.',
    'ends_with' => '26', //'The :attribute must end with one of the following: :values.',
    'exists' => '27', //'The selected :attribute is invalid.',
    'file' => '28', //'The :attribute must be a file.',
    'filled' => '29', //'The :attribute field must have a value.',
    'gt' => [
        'numeric' => '30', //'The :attribute must be greater than :value.',
        'file' => '31', //'The :attribute must be greater than :value kilobytes.',
        'string' => '32', //'The :attribute must be greater than :value characters.',
        'array' => '33', //'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => '34', //'The :attribute must be greater than or equal :value.',
        'file' => '35', //'The :attribute must be greater than or equal :value kilobytes.',
        'string' => '36', //'The :attribute must be greater than or equal :value characters.',
        'array' => '37', //'The :attribute must have :value items or more.',
    ],
    'image' => '38', //'The :attribute must be an image.',
    'in' => '39', //'The selected :attribute is invalid.',
    'in_array' => '40', //'The :attribute field does not exist in :other.',
    'integer' => '41', //'The :attribute must be an integer.',
    'ip' => '42', //'The :attribute must be a valid IP address.',
    'ipv4' => '43', //'The :attribute must be a valid IPv4 address.',
    'ipv6' => '44', //'The :attribute must be a valid IPv6 address.',
    'json' => '45', //'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => '46', //'The :attribute must be less than :value.',
        'file' => '47', //'The :attribute must be less than :value kilobytes.',
        'string' => '48', //'The :attribute must be less than :value characters.',
        'array' => '49', //'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => '50', //'The :attribute must be less than or equal :value.',
        'file' => '51', //'The :attribute must be less than or equal :value kilobytes.',
        'string' => '52', //'The :attribute must be less than or equal :value characters.',
        'array' => '53', //'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => '54', //'The :attribute may not be greater than :max.',
        'file' => '55', //'The :attribute may not be greater than :max kilobytes.',
        'string' => '56', //'The :attribute may not be greater than :max characters.',
        'array' => '57', //'The :attribute may not have more than :max items.',
    ],
    'mimes' => '58', 'The :attribute must be a file of type: :values.',
    'mimetypes' => '59', //'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => '60', //'The :attribute must be at least :min.',
        'file' => '61', //'The :attribute must be at least :min kilobytes.',
        'string' => '62', //'The :attribute must be at least :min characters.',
        'array' => '63', //'The :attribute must have at least :min items.',
    ],
    'multiple_of' => '64', //'The :attribute must be a multiple of :value',
    'not_in' => '65', //'The selected :attribute is invalid.',
    'not_regex' => '66', //'The :attribute format is invalid.',
    'numeric' => '67', //'The :attribute must be a number.',
    'password' => '68', //'The password is incorrect.',
    'present' => '69', //'The :attribute field must be present.',
    'regex' => '70', //'The :attribute format is invalid.',
    'required' => '71', //'The :attribute field is required.',
    'required_if' => '72', //'The :attribute field is required when :other is :value.',
    'required_unless' => '73', //'The :attribute field is required unless :other is in :values.',
    'required_with' => '74', //'The :attribute field is required when :values is present.',
    'required_with_all' => '75', //'The :attribute field is required when :values are present.',
    'required_without' => '76', //'The :attribute field is required when :values is not present.',
    'required_without_all' => '77', //'The :attribute field is required when none of :values are present.',
    'same' => '78', //'The :attribute and :other must match.',
    'size' => [
        'numeric' => '79', //'The :attribute must be :size.',
        'file' => '80', //'The :attribute must be :size kilobytes.',
        'string' => '81', //'The :attribute must be :size characters.',
        'array' => '82', //'The :attribute must contain :size items.',
    ],
    'starts_with' => '83', //'The :attribute must start with one of the following: :values.',
    'string' => '84', //'The :attribute must be a string.',
    'timezone' => '85', //'The :attribute must be a valid zone.',
    'unique' => '86', //'The :attribute has already been taken.',
    'uploaded' => '87', //'The :attribute failed to upload.',
    'url' => '88', //'The :attribute format is invalid.',
    'uuid' => '89', //'The :attribute must be a valid UUID.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
