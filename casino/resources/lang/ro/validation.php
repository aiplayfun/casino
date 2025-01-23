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

    'accepted'             => ':attribute phải được chấp nhận',
    'active_url'           => ':attribute không phải là URL hợp lệ',
    'after'                => ':attribute phải là một ngày sau :date',
    'alpha'                => ':attribute chỉ có thể chứa các chữ cái',
    'alpha_dash'           => ':attribute chỉ có thể chứa các chữ cái, số, dấu gạch ngang và dấu gạch dưới',
    'alpha_num'            => ':attribute chỉ có thể chứa các chữ cái và số',
    'array'                => ':attribute phải là một mảng',
    'before'               => ':attribute phải là một ngày trước :date',
    'between'              => [
        'numeric' => ':attribute phải nằm trong khoảng :min và :max',
        'file'    => ':attribute phải nằm trong khoảng :min và :max kilobytes',
        'string'  => ':attribute phải nằm trong khoảng :min và :max ký tự',
        'array'   => ':attribute phải có từ :min đến :max mục',
    ],
    'boolean'              => ':attribute phải là true hoặc false',
    'confirmed'            => ':attribute xác nhận không khớp',
    'date'                 => ':attribute không phải là một ngày hợp lệ',
    'date_format'          => ':attribute không khớp với định dạng :format',
    'different'            => ':attribute và :other phải khác nhau',
    'digits'               => ':attribute phải là :digits chữ số',
    'digits_between'       => ':attribute phải nằm trong khoảng :min và :max chữ số',
    'distinct'             => ':attribute có giá trị trùng lặp',
    'email'                => ':attribute phải là một địa chỉ email hợp lệ',
    'exists'               => ':attribute đã chọn không hợp lệ',
    'filled'               => ':attribute không được để trống',
    'image'                => ':attribute phải là một hình ảnh',
    'in'                   => ':attribute đã chọn không hợp lệ',
    'in_array'             => ':attribute không tồn tại trong :other',
    'integer'              => ':attribute phải là một số nguyên',
    'ip'                   => ':attribute phải là một địa chỉ IP hợp lệ',
    'json'                 => ':attribute phải là một chuỗi JSON hợp lệ',
    'max'                  => [
        'numeric' => ':attribute không được lớn hơn :max',
        'file'    => ':attribute không được lớn hơn :max kilobytes',
        'string'  => ':attribute không được lớn hơn :max ký tự',
        'array'   => ':attribute không được có nhiều hơn :max mục',
    ],
    'mimes'                => ':attribute phải là một tệp loại: :values',
    'min'                  => [
        'numeric' => ':attribute phải ít nhất là :min',
        'file'    => ':attribute phải ít nhất là :min kilobytes',
        'string'  => ':attribute phải ít nhất là :min ký tự',
        'array'   => ':attribute phải có ít nhất :min mục',
    ],
    'not_in'               => ':attribute đã chọn không hợp lệ',
    'numeric'              => ':attribute phải là một số',
    'present'              => ':attribute phải có mặt',
    'regex'                => ':attribute định dạng không hợp lệ',
    'required'             => ':attribute là bắt buộc',
    'required_if'          => ':attribute là bắt buộc khi :other là :value',
    'required_unless'      => ':attribute là bắt buộc trừ khi :other nằm trong :values',
    'required_with'        => ':attribute là bắt buộc khi có :values',
    'required_with_all'    => ':attribute là bắt buộc khi có :values',
    'required_without'     => ':attribute là bắt buộc khi không có :values',
    'required_without_all' => ':attribute là bắt buộc khi không có :values nào',
    'same'                 => ':attribute và :other phải khớp',
    'size'                 => [
        'numeric' => ':attribute phải là :size',
        'file'    => ':attribute phải là :size kilobytes',
        'string'  => ':attribute phải là :size ký tự',
        'array'   => ':attribute phải chứa :size mục',
    ],
    'string'               => ':attribute phải là một chuỗi',
    'timezone'             => ':attribute phải là một múi giờ hợp lệ',
    'unique'               => ':attribute đã được sử dụng',
    'url'                  => ':attribute định dạng không hợp lệ',

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
            'rule-name' => 'Thông báo tùy chỉnh',
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