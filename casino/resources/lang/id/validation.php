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

    'accepted'             => ':attribute গ্রহণ করতে হবে',
    'active_url'           => ':attribute একটি বৈধ URL নয়',
    'after'                => ':attribute তারিখের পরে একটি তারিখ হতে হবে :date',
    'alpha'                => ':attribute শুধুমাত্র অক্ষর থাকতে পারে',
    'alpha_dash'           => ':attribute শুধুমাত্র অক্ষর, সংখ্যা, ড্যাশ এবং আন্ডারস্কোর থাকতে পারে',
    'alpha_num'            => ':attribute শুধুমাত্র অক্ষর এবং সংখ্যা থাকতে পারে',
    'array'                => ':attribute একটি অ্যারে হতে হবে',
    'before'               => ':attribute তারিখের আগে একটি তারিখ হতে হবে :date',
    'between'              => [
        'numeric' => ':attribute :min এবং :max এর মধ্যে হতে হবে',
        'file'    => ':attribute :min এবং :max কিলোবাইটের মধ্যে হতে হবে',
        'string'  => ':attribute :min এবং :max অক্ষরের মধ্যে হতে হবে',
        'array'   => ':attribute :min থেকে :max আইটেম থাকতে হবে',
    ],
    'boolean'              => ':attribute ক্ষেত্রটি সত্য বা মিথ্যা হতে হবে',
    'confirmed'            => ':attribute নিশ্চিতকরণ মেলে না',
    'date'                 => ':attribute একটি বৈধ তারিখ নয়',
    'date_format'          => ':attribute বিন্যাসের সাথে মেলে না :format',
    'different'            => ':attribute এবং :other আলাদা হতে হবে',
    'digits'               => ':attribute হতে হবে :digits সংখ্যা',
    'digits_between'       => ':attribute :min এবং :max সংখ্যার মধ্যে হতে হবে',
    'distinct'             => ':attribute ক্ষেত্রের একটি ডুপ্লিকেট মান আছে',
    'email'                => ':attribute একটি বৈধ ইমেল ঠিকানা হতে হবে',
    'exists'               => 'নির্বাচিত :attribute অবৈধ',
    'filled'               => ':attribute ক্ষেত্রটি প্রয়োজনীয়',
    'image'                => ':attribute একটি চিত্র হতে হবে',
    'in'                   => 'নির্বাচিত :attribute অবৈধ',
    'in_array'             => ':attribute ক্ষেত্রটি :other এ বিদ্যমান নয়',
    'integer'              => ':attribute একটি পূর্ণসংখ্যা হতে হবে',
    'ip'                   => ':attribute একটি বৈধ IP ঠিকানা হতে হবে',
    'json'                 => ':attribute একটি বৈধ JSON স্ট্রিং হতে হবে',
    'max'                  => [
        'numeric' => ':attribute :max এর চেয়ে বড় হতে পারে না',
        'file'    => ':attribute :max কিলোবাইটের চেয়ে বড় হতে পারে না',
        'string'  => ':attribute :max অক্ষরের চেয়ে বড় হতে পারে না',
        'array'   => ':attribute :max আইটেমের চেয়ে বেশি থাকতে পারে না',
    ],
    'mimes'                => ':attribute একটি ফাইল হতে হবে: :values',
    'min'                  => [
        'numeric' => ':attribute কমপক্ষে হতে হবে :min',
        'file'    => ':attribute কমপক্ষে হতে হবে :min কিলোবাইট',
        'string'  => ':attribute কমপক্ষে হতে হবে :min অক্ষর',
        'array'   => ':attribute কমপক্ষে থাকতে হবে :min আইটেম',
    ],
    'not_in'               => 'নির্বাচিত :attribute অবৈধ',
    'numeric'              => ':attribute একটি সংখ্যা হতে হবে',
    'present'              => ':attribute ক্ষেত্রটি উপস্থিত থাকতে হবে',
    'regex'                => ':attribute বিন্যাস অবৈধ',
    'required'             => ':attribute ক্ষেত্রটি প্রয়োজনীয়',
    'required_if'          => ':attribute ক্ষেত্রটি প্রয়োজনীয় যখন :other হল :value',
    'required_unless'      => ':attribute ক্ষেত্রটি প্রয়োজনীয় যদি না :other :values এ থাকে',
    'required_with'        => ':attribute ক্ষেত্রটি প্রয়োজনীয় যখন :values উপস্থিত',
    'required_with_all'    => ':attribute ক্ষেত্রটি প্রয়োজনীয় যখন :values উপস্থিত',
    'required_without'     => ':attribute ক্ষেত্রটি প্রয়োজনীয় যখন :values অনুপস্থিত',
    'required_without_all' => ':attribute ক্ষেত্রটি প্রয়োজনীয় যখন :values এর কোনটি উপস্থিত নয়',
    'same'                 => ':attribute এবং :other মেলাতে হবে',
    'size'                 => [
        'numeric' => ':attribute হতে হবে :size',
        'file'    => ':attribute হতে হবে :size কিলোবাইট',
        'string'  => ':attribute হতে হবে :size অক্ষর',
        'array'   => ':attribute থাকতে হবে :size আইটেম',
    ],
    'string'               => ':attribute একটি স্ট্রিং হতে হবে',
    'timezone'             => ':attribute একটি বৈধ অঞ্চল হতে হবে',
    'unique'               => ':attribute ইতিমধ্যে নেওয়া হয়েছে',
    'url'                  => ':attribute বিন্যাস অবৈধ',

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
            'rule-name' => 'কাস্টম বার্তা',
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