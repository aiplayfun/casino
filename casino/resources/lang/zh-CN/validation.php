<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */

    'accepted'             => ':attribute 必须被接受。',
    'active_url'           => ':attribute 不是一个有效的网址。',
    'after'                => ':attribute 必须是 :date 之后的日期。',
    'alpha'                => ':attribute 只能包含字母。',
    'alpha_dash'           => ':attribute 只能包含字母、数字、破折号和下划线。',
    'alpha_num'            => ':attribute 只能包含字母和数字。',
    'array'                => ':attribute 必须是一个数组。',
    'before'               => ':attribute 必须是 :date 之前的日期。',
    'between'              => [
        'numeric' => ':attribute 必须在 :min 和 :max 之间。',
        'file'    => ':attribute 必须在 :min 和 :max 千字节之间。',
        'string'  => ':attribute 必须在 :min 和 :max 个字符之间。',
        'array'   => ':attribute 必须有 :min 到 :max 项。',
    ],
    'boolean'              => ':attribute 字段必须为 true 或 false。',
    'confirmed'            => ':attribute 确认不匹配。',
    'date'                 => ':attribute 不是一个有效的日期。',
    'date_format'          => ':attribute 与格式 :format 不符。',
    'different'            => ':attribute 和 :other 必须不同。',
    'digits'               => ':attribute 必须是 :digits 位数字。',
    'digits_between'       => ':attribute 必须在 :min 和 :max 位数字之间。',
    'distinct'             => ':attribute 字段有重复值。',
    'email'                => ':attribute 必须是一个有效的电子邮件地址。',
    'exists'               => '选定的 :attribute 是无效的。',
    'filled'               => ':attribute 字段是必填的。',
    'image'                => ':attribute 必须是图像。',
    'in'                   => '选定的 :attribute 是无效的。',
    'in_array'             => ':attribute 字段不存在于 :other 中。',
    'integer'              => ':attribute 必须是整数。',
    'ip'                   => ':attribute 必须是一个有效的 IP 地址。',
    'json'                 => ':attribute 必须是一个有效的 JSON 字符串。',
    'max'                  => [
        'numeric' => ':attribute 不能大于 :max。',
        'file'    => ':attribute 不能大于 :max 千字节。',
        'string'  => ':attribute 不能多于 :max 个字符。',
        'array'   => ':attribute 不能有超过 :max 项。',
    ],
    'mimes'                => ':attribute 必须是一个 :values 类型的文件。',
    'min'                  => [
        'numeric' => ':attribute 至少是 :min。',
        'file'    => ':attribute 至少是 :min 千字节。',
        'string'  => ':attribute 至少是 :min 个字符。',
        'array'   => ':attribute 至少有 :min 项。',
    ],
    'not_in'               => '选定的 :attribute 是无效的。',
    'numeric'              => ':attribute 必须是一个数字。',
    'present'              => ':attribute 字段必须存在。',
    'regex'                => ':attribute 格式无效。',
    'required'             => ':attribute 字段是必填的。',
    'required_if'          => '当 :other 是 :value 时，:attribute 字段是必填的。',
    'required_unless'      => '除非 :other 在 :values 中，否则 :attribute 字段是必填的。',
    'required_with'        => '当 :values 存在时，:attribute 字段是必填的。',
    'required_with_all'    => '当 :values 存在时，:attribute 字段是必填的。',
    'required_without'     => '当 :values 不存在时，:attribute 字段是必填的。',
    'required_without_all' => '当 :values 都不存在时，:attribute 字段是必填的。',
    'same'                 => ':attribute 和 :other 必须匹配。',
    'size'                 => [
        'numeric' => ':attribute 必须是 :size。',
        'file'    => ':attribute 必须是 :size 千字节。',
        'string'  => ':attribute 必须是 :size 个字符。',
        'array'   => ':attribute 必须包含 :size 项。',
    ],
    'string'               => ':attribute 必须是一个字符串。',
    'timezone'             => ':attribute 必须是一个有效的时区。',
    'unique'               => ':attribute 已经被占用。',
    'url'                  => ':attribute 格式无效。',

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

    'custom'               => [
        'attribute-name' => [
            'rule-name' => '自定义消息',
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

    'attributes' => [
        //
    ],

];