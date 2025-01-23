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

    'accepted'             => ':attribute ต้องได้รับการยอมรับ',
    'active_url'           => ':attribute ไม่ใช่ URL ที่ถูกต้อง',
    'after'                => ':attribute ต้องเป็นวันที่หลังจาก :date',
    'alpha'                => ':attribute ต้องมีเฉพาะตัวอักษรเท่านั้น',
    'alpha_dash'           => ':attribute ต้องมีเฉพาะตัวอักษร, ตัวเลข, ขีดกลาง และขีดล่าง',
    'alpha_num'            => ':attribute ต้องมีเฉพาะตัวอักษรและตัวเลข',
    'array'                => ':attribute ต้องเป็นอาร์เรย์',
    'before'               => ':attribute ต้องเป็นวันที่ก่อน :date',
    'between'              => [
        'numeric' => ':attribute ต้องอยู่ระหว่าง :min และ :max',
        'file'    => ':attribute ต้องอยู่ระหว่าง :min และ :max กิโลไบต์',
        'string'  => ':attribute ต้องอยู่ระหว่าง :min และ :max ตัวอักษร',
        'array'   => ':attribute ต้องมีระหว่าง :min และ :max รายการ',
    ],
    'boolean'              => ':attribute ต้องเป็น true หรือ false',
    'confirmed'            => ':attribute การยืนยันไม่ตรงกัน',
    'date'                 => ':attribute ไม่ใช่วันที่ที่ถูกต้อง',
    'date_format'          => ':attribute ไม่ตรงกับรูปแบบ :format',
    'different'            => ':attribute และ :other ต้องแตกต่างกัน',
    'digits'               => ':attribute ต้องเป็น :digits หลัก',
    'digits_between'       => ':attribute ต้องอยู่ระหว่าง :min และ :max หลัก',
    'distinct'             => ':attribute มีค่าที่ซ้ำกัน',
    'email'                => ':attribute ต้องเป็นที่อยู่อีเมลที่ถูกต้อง',
    'exists'               => ':attribute ที่เลือกไม่ถูกต้อง',
    'filled'               => ':attribute ต้องไม่ว่างเปล่า',
    'image'                => ':attribute ต้องเป็นภาพ',
    'in'                   => ':attribute ที่เลือกไม่ถูกต้อง',
    'in_array'             => ':attribute ไม่มีอยู่ใน :other',
    'integer'              => ':attribute ต้องเป็นจำนวนเต็ม',
    'ip'                   => ':attribute ต้องเป็นที่อยู่ IP ที่ถูกต้อง',
    'json'                 => ':attribute ต้องเป็นสตริง JSON ที่ถูกต้อง',
    'max'                  => [
        'numeric' => ':attribute ต้องไม่เกิน :max',
        'file'    => ':attribute ต้องไม่เกิน :max กิโลไบต์',
        'string'  => ':attribute ต้องไม่เกิน :max ตัวอักษร',
        'array'   => ':attribute ต้องไม่เกิน :max รายการ',
    ],
    'mimes'                => ':attribute ต้องเป็นไฟล์ประเภท :values',
    'min'                  => [
        'numeric' => ':attribute ต้องไม่น้อยกว่า :min',
        'file'    => ':attribute ต้องไม่น้อยกว่า :min กิโลไบต์',
        'string'  => ':attribute ต้องไม่น้อยกว่า :min ตัวอักษร',
        'array'   => ':attribute ต้องไม่น้อยกว่า :min รายการ',
    ],
    'not_in'               => ':attribute ที่เลือกไม่ถูกต้อง',
    'numeric'              => ':attribute ต้องเป็นตัวเลข',
    'present'              => ':attribute ต้องมีอยู่',
    'regex'                => ':attribute ���ูปแบบไม่ถูกต้อง',
    'required'             => ':attribute จำเป็นต้องกรอก',
    'required_if'          => ':attribute จำเป็นต้องกรอกเมื่อ :other เป็น :value',
    'required_unless'      => ':attribute จำเป็นต้องกรอกเว้นแต่ :other อยู่ใน :values',
    'required_with'        => ':attribute จำเป็นต้องกรอกเมื่อมี :values',
    'required_with_all'    => ':attribute จำเป็นต้องกรอกเมื่อมี :values',
    'required_without'     => ':attribute จำเป็นต้องกรอกเมื่อไม่มี :values',
    'required_without_all' => ':attribute จำเป็นต้องกรอกเมื่อไม่มี :values เลย',
    'same'                 => ':attribute และ :other ต้องตรงกัน',
    'size'                 => [
        'numeric' => ':attribute ต้องเป็น :size',
        'file'    => ':attribute ต้องเป็น :size กิโลไบต์',
        'string'  => ':attribute ต้องเป็น :size ตัวอักษร',
        'array'   => ':attribute ต้องมี :size รายการ',
    ],
    'string'               => ':attribute ต้องเป็นสตริง',
    'timezone'             => ':attribute ต้องเป็นโซนเวลาที่ถูกต้อง',
    'unique'               => ':attribute ถูกใช้ไปแล้ว',
    'url'                  => ':attribute รูปแบบไม่ถูกต้อง',

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
            'rule-name' => 'ข้อความที่กำหนดเอง',
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