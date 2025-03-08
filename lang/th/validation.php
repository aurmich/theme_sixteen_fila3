<?php

declare(strict_types=1);

return [
<<<<<<< HEAD
    'accepted' => 'ข้อมูล :attribute ต้องผ่านการยอมรับก่อน',
    'active_url' => 'ข้อมูล :attribute ต้องเป็น URL เท่านั้น',
    'after' => 'ข้อมูล :attribute ต้องเป็นวันที่หลังจาก :date',
    'after_or_equal' => 'ข้อมูล :attribute ต้องเป็นวันที่หลังหรือเท่ากันกับ :date.',
    'alpha' => 'ข้อมูล :attribute ต้องเป็นตัวอักษรภาษาอังกฤษเท่านั้น',
    'alpha_dash' => 'ข้อมูล :attribute ต้องเป็นตัวอักษรภาษาอังกฤษ ตัวเลข และ _ เท่านั้น',
    'alpha_num' => 'ข้อมูล :attribute ต้องเป็นตัวอักษรภาษาอังกฤษ ตัวเลข เท่านั้น',
    'array' => 'ข้อมูล :attribute ต้องเป็นอาเรย์เท่านั้น',
    'before' => 'ข้อมูล :attribute ต้องเป็นวันที่ก่อน :date',
    'before_or_equal' => 'ข้อมูล :attribute ต้องเป็นวันที่ก่อนหรือเท่ากันกับวันที่ :date.',
    'between' => [
        'numeric' => 'ข้อมูล :attribute ต้องอยู่ในช่วงระหว่าง :min - :max',
        'file' => 'ข้อมูล :attribute ต้องอยู่ในช่วงระหว่าง :min - :max กิโลไบต์',
        'string' => 'ข้อมูล :attribute ต้องอยู่ในช่วงระหว่าง :min - :max ตัวอักษร',
        'array' => 'ข้อมูล :attribute ต้องอยู่ในช่วงระหว่าง :min - :max ค่า',
=======
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages.
    |
    */

    'accepted' => 'ข้อมูล :attribute ต้องผ่านการยอมรับก่อน',
    'active_url' => 'ข้อมูล :attribute ต้องเป็น URL เท่านั้น',
    'after' => 'ข้อมูล :attribute ต้องเป็นวันที่หลังจาก :date.',
    'after_or_equal' => 'ข้อมูล :attribute ต้องเป็นวันที่ตั้งแต่วันที่ :date หรือหลังจากนั้น.',
    'alpha' => 'ข้อมูล :attribute ต้องเป็นตัวอักษรภาษาอังกฤษเท่านั้น',
    'alpha_dash' => 'ข้อมูล :attribute ต้องเป็นตัวอักษรภาษาอังกฤษ ตัวเลข และ _ เท่านั้น',
    'alpha_num' => 'ข้อมูล :attribute ต้องเป็นตัวอักษรภาษาอังกฤษ ตัวเลข เท่านั้น',
    'array' => 'ข้อมูล :attribute ต้องเป็น array เท่านั้น',
    'before' => 'ข้อมูล :attribute ต้องเป็นวันที่ก่อน :date.',
    'before_or_equal' => 'ข้อมูล :attribute ต้องเป็นวันที่ก่อนหรือเท่ากับวันที่ :date.',
    'between' => [
        'numeric' => 'ข้อมูล :attribute ต้องอยู่ในช่วงระหว่าง :min - :max.',
        'file' => 'ข้อมูล :attribute ต้องมีขนาดระหว่าง :min - :max กิโลไบต์',
        'string' => 'ข้อมูล :attribute ต้องมีความยาวตัวอักษรระหว่าง :min - :max ตัวอักษร',
        'array' => 'ข้อมูล :attribute ต้องมีค่าระหว่าง :min - :max ค่า',
>>>>>>> 50bf5e8f5f (Squashed 'laravel/Modules/Fixcity/' content from commit 11c5f6a3e0)
    ],
    'boolean' => 'ข้อมูล :attribute ต้องเป็นจริง หรือเท็จ เท่านั้น',
    'confirmed' => 'ข้อมูล :attribute ไม่ตรงกัน',
    'date' => 'ข้อมูล :attribute ต้องเป็นวันที่',
<<<<<<< HEAD
    'date_format' => 'ข้อมูล :attribute ไม่ตรงกับข้อมูลกำหนด :format',
    'different' => 'ข้อมูล :attribute และ :other ต้องไม่เท่ากัน',
    'digits' => 'ข้อมูล :attribute ต้องเป็น :digits',
    'digits_between' => 'ข้อมูล :attribute ต้องอยู่ในช่วงระหว่าง :min ถึง :max',
    'dimensions' => 'รูปภาพ :attribute มีขนาดไม่ถูกต้อง',
    'distinct' => 'ข้อมูล :attribute มีค่าที่ซ้ำกัน',
    'email' => 'ข้อมูล :attribute ต้องเป็นอีเมล์',
    'exists' => 'ข้อมูล ที่ถูกเลือกจาก :attribute ไม่ถูกต้อง',
    'file' => 'ข้อมูล :attribute ต้องเป็นไฟล์',
    'filled' => 'ข้อมูล :attribute จำเป็นต้องกรอก',
=======
    'date_equals' => 'ข้อมูล :attribute ต้องเป็นวันที่ที่เท่ากับ :date',
    'date_format' => 'ข้อมูล :attribute ไม่ตรงกับข้อมูลกำหนด :format.',
    'different' => 'ข้อมูล :attribute และ :other ต้องไม่เท่ากัน',
    'digits' => 'ข้อมูล :attribute ต้องเป็น :digits',
    'digits_between' => 'ข้อมูล :attribute ต้องอยู่ในช่วงระหว่าง :min ถึง :max',
    'dimensions' => 'ข้อมูล :attribute มีขนาดไม่ถูกต้อง.',
    'distinct' => 'ข้อมูล :attribute มีค่าที่ซ้ำกัน',
    'email' => 'ข้อมูล :attribute ต้องเป็นอีเมล์',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'exists' => 'ข้อมูล ที่ถูกเลือกจาก :attribute ไม่ถูกต้อง',
    'file' => 'ข้อมูล :attribute ต้องเป็นไฟล์.',
    'filled' => 'ข้อมูล :attribute จำเป็นต้องกรอก',
    'gt' => [
        'numeric' => 'ข้อมูล :attribute ต้องมีค่ามากกว่า :value.',
        'file' => 'ข้อมูล :attribute ต้องมีขนาดมากกว่า :value กิโลไบต์.',
        'string' => 'ข้อมูล :attribute ต้องมีความยาวตัวอักษรมากกว่า :value ตัวอักษร.',
        'array' => 'ข้อมูล :attribute ต้องมีมากกว่า :value ค่า.',
    ],
    'gte' => [
        'numeric' => 'ข้อมูล :attribute ต้องมีค่ามากกว่าหรือเท่ากับ :value.',
        'file' => 'ข้อมูล :attribute ต้องมีขนาดมากกว่าหรือเท่ากับ :value กิโลไบต์.',
        'string' => 'ข้อมูล :attribute ต้องมีความยาวตัวอักษรมากกว่าหรือเท่ากับ :value ตัวอักษร.',
        'array' => 'ข้อมูล :attribute ต้องมี :value ค่า หรือมากกว่า.',
    ],
>>>>>>> 50bf5e8f5f (Squashed 'laravel/Modules/Fixcity/' content from commit 11c5f6a3e0)
    'image' => 'ข้อมูล :attribute ต้องเป็นรูปภาพ',
    'in' => 'ข้อมูล ที่ถูกเลือกใน :attribute ไม่ถูกต้อง',
    'in_array' => 'ข้อมูล :attribute ไม่มีอยู่ภายในค่าของ :other',
    'integer' => 'ข้อมูล :attribute ต้องเป็นตัวเลข',
    'ip' => 'ข้อมูล :attribute ต้องเป็น IP',
<<<<<<< HEAD
    'json' => 'ข้อมูล :attribute ต้องเป็นอักขระ JSON ที่สมบูรณ์',
    'max' => [
        'numeric' => 'ข้อมูล :attribute ต้องมีจำนวนไม่เกิน :max',
        'file' => 'ข้อมูล :attribute ต้องมีจำนวนไม่เกิน :max กิโลไบต์',
        'string' => 'ข้อมูล :attribute ต้องมีจำนวนไม่เกิน :max ตัวอักษร',
        'array' => 'ข้อมูล :attribute ต้องมีจำนวนไม่เกิน :max ค่า',
    ],
    'mimes' => 'ข้อมูล :attribute ต้องเป็นชนิดไฟล์: :values',
    'min' => [
        'numeric' => 'ข้อมูล :attribute ต้องมีจำนวนอย่างน้อย :min',
        'file' => 'ข้อมูล :attribute ต้องมีจำนวนอย่างน้อย :min กิโลไบต์',
        'string' => 'ข้อมูล :attribute ต้องมีจำนวนอย่างน้อย :min ตัวอักษร',
        'array' => 'ข้อมูล :attribute ต้องมีจำนวนอย่างน้อย :min ค่า',
    ],
    'not_in' => 'ข้อมูล ที่เลือกจาก :attribute ไม่ถูกต้อง',
    'numeric' => 'ข้อมูล :attribute ต้องเป็นตัวเลข',
    'present' => 'ข้อมูล :attribute ต้องเป็นปัจจุบัน',
    'regex' => 'ข้อมูล :attribute มีรูปแบบไม่ถูกต้อง',
    'required' => 'ข้อมูล :attribute จำเป็นต้องกรอก',
    'required_if' => 'ข้อมูล :attribute จำเป็นต้องกรอกเมื่อ :other เป็น :value',
    'required_unless' => 'ข้อมูล :attribute จำเป็นต้องกรอกเว้นแต่ :other เป็น :values',
=======
    'ipv4' => 'ข้อมูล :attribute ต้องตรงตามรูปแบบ IPv4 address.',
    'ipv6' => 'ข้อมูล :attribute ต้องตรงตามรูปแบบ IPv6 address.',
    'json' => 'ข้อมูล :attribute ต้องเป็นอักขระ JSON ที่สมบูรณ์',
    'lt' => [
        'numeric' => 'ข้อมูล :attribute ต้องมีค่าน้อยกว่า :value.',
        'file' => 'ข้อมูล :attribute ต้องมีขนาดน้อยกว่า :value กิโลไบต์.',
        'string' => 'ข้อมูล :attribute ต้องมีความยาวตัวอักษรน้อยกว่า :value ตัวอักษร.',
        'array' => 'ข้อมูล :attribute ต้องมีน้อยกว่า :value ค่า.',
    ],
    'lte' => [
        'numeric' => 'ข้อมูล :attribute ต้องมีค่าน้อยกว่าหรือเท่ากับ :value.',
        'file' => 'ข้อมูล :attribute ต้องมีขนาดน้อยกว่าหรือเท่ากับ :value กิโลไบต์.',
        'string' => 'ข้อมูล :attribute ต้องมีความยาวตัวอักษรน้อยกว่าหรือเท่ากับ :value ตัวอักษร.',
        'array' => 'ข้อมูล :attribute ต้องมีไม่เกิน :value ค่า.',
    ],
    'max' => [
        'numeric' => 'ข้อมูล :attribute ต้องมีค่าไม่เกิน :max.',
        'file' => 'ข้อมูล :attribute ต้องมีขนาดไม่เกิน :max กิโลไบต์',
        'string' => 'ข้อมูล :attribute ต้องมีความยาวตัวอักษรไม่เกิน :max ตัวอักษร',
        'array' => 'ข้อมูล :attribute ต้องมีไม่เกิน :max ค่า',
    ],
    'mimes' => 'ข้อมูล :attribute ต้องเป็นชนิดไฟล์: :values.',
    'mimetypes' => 'ข้อมูล :attribute ต้องเป็นชนิดไฟล์: :values.',
    'min' => [
        'numeric' => 'ข้อมูล :attribute ต้องมีค่าอย่างน้อย :min.',
        'file' => 'ข้อมูล :attribute ต้องมีขนาดอย่างน้อย :min กิโลไบต์',
        'string' => 'ข้อมูล :attribute ต้องมีความยาวตัวอักษรอย่างน้อย :min ตัวอักษร',
        'array' => 'ข้อมูล :attribute ต้องมีอย่างน้อย :min ค่า',
    ],
    'multiple_of' => 'The :attribute must be a multiple of :value',
    'not_in' => 'ข้อมูล ที่เลือกจาก :attribute ไม่ถูกต้อง',
    'not_regex' => 'ข้อมูล :attribute มีรูปแบบไม่ถูกต้อง.',
    'numeric' => 'ข้อมูล :attribute ต้องเป็นตัวเลข',
    'password' => 'The password is incorrect.',
    'present' => 'ข้อมูล :attribute ต้องเป็นปัจจุบัน',
    'regex' => 'ข้อมูล :attribute มีรูปแบบไม่ถูกต้อง',
    'required' => 'ข้อมูล :attribute จำเป็นต้องกรอก',
    'required_if' => 'ข้อมูล :attribute จำเป็นต้องกรอกเมื่อ :other เป็น :value.',
    'required_unless' => 'ข้อมูล :attribute จำเป็นต้องกรอกเว้นแต่ :other เป็น :values.',
>>>>>>> 50bf5e8f5f (Squashed 'laravel/Modules/Fixcity/' content from commit 11c5f6a3e0)
    'required_with' => 'ข้อมูล :attribute จำเป็นต้องกรอกเมื่อ :values มีค่า',
    'required_with_all' => 'ข้อมูล :attribute จำเป็นต้องกรอกเมื่อ :values มีค่าทั้งหมด',
    'required_without' => 'ข้อมูล :attribute จำเป็นต้องกรอกเมื่อ :values ไม่มีค่า',
    'required_without_all' => 'ข้อมูล :attribute จำเป็นต้องกรอกเมื่อ :values ไม่มีค่าทั้งหมด',
    'same' => 'ข้อมูล :attribute และ :other ต้องถูกต้อง',
    'size' => [
        'numeric' => 'ข้อมูล :attribute ต้องเท่ากับ :size',
        'file' => 'ข้อมูล :attribute ต้องเท่ากับ :size กิโลไบต์',
        'string' => 'ข้อมูล :attribute ต้องเท่ากับ :size ตัวอักษร',
        'array' => 'ข้อมูล :attribute ต้องเท่ากับ :size ค่า',
    ],
<<<<<<< HEAD
    'string' => 'ข้อมูล :attribute ต้องเป็นอักขระ',
    'timezone' => 'ข้อมูล :attribute ต้องเป็นข้อมูลเขตเวลาที่ถูกต้อง',
    'unique' => 'ข้อมูล :attribute ไม่สามารถใช้ได้',
    'url' => 'ข้อมูล :attribute ไม่ถูกต้อง',
=======
    'starts_with' => 'ข้อมูล :attribute ต้องเริ่มด้วยค่าใดค่าหนึ่งต่อไปนี้: :values',
    'string' => 'ข้อมูล :attribute ต้องเป็นอักขระ',
    'timezone' => 'ข้อมูล :attribute ต้องเป็นข้อมูลเขตเวลาที่ถูกต้อง',
    'unique' => 'ข้อมูล :attribute ไม่สามารถใช้ได้',
    'uploaded' => 'ข้อมูล :attribute ไม่สามารพอัพโหลดได้.',
    'url' => 'ข้อมูล :attribute ไม่ถูกต้อง',
    'uuid' => 'ข้อมูล :attribute ต้องเป็นค่า UUID ที่ถูกต้อง',

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

>>>>>>> 50bf5e8f5f (Squashed 'laravel/Modules/Fixcity/' content from commit 11c5f6a3e0)
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
<<<<<<< HEAD
    'attributes' => [
        'backend' => [
            'access' => [
                'permissions' => [
                    'associated_roles' => 'บทบาทที่เกี่ยวข้อง',
                    'dependencies' => 'สิ่งที่จำเป็นต้องมี',
                    'display_name' => 'ชื่อที่แสดง',
                    'group' => 'กลุ่ม',
                    'group_sort' => 'เรียงตามกลุ่ม',
                    'groups' => [
                        'name' => 'ชื่อกลุ่ม',
                    ],
                    'name' => 'ชื่อ',
                    'system' => 'ระบบ?',
                ],
                'roles' => [
                    'associated_permissions' => 'สิทธิ์ที่เกี่ยวข้อง',
                    'name' => 'ชื่อ',
                    'sort' => 'เรียง',
                ],
                'users' => [
                    'active' => 'เปิดใช้งาน',
                    'associated_roles' => 'บทบาทที่เกี่ยวข้อง',
                    'confirmed' => 'ยืนยันตัวตน',
                    'email' => 'ที่อยู่อีเมล',
                    'name' => 'ชื่อ',
                    'other_permissions' => 'สิทธิ์อื่นๆ',
                    'password' => 'รหัสผ่าน',
                    'password_confirmation' => 'ยืนยันรหัสผ่าน',
                    'send_confirmation_email' => 'ส่งอีเมลยืนยันตัวตน',
                ],
            ],
        ],
        'frontend' => [
            'email' => 'ที่อยู่อีเมล',
            'name' => 'ชื่อ',
            'password' => 'รหัสผ่าน',
            'password_confirmation' => 'ยืนยันรหัสผ่าน',
            'old_password' => 'รหัสผ่านเดิม',
            'new_password' => 'รหัสผ่านใหม่',
            'new_password_confirmation' => 'ยืนยันรหัสผ่านใหม่',
        ],
=======

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
>>>>>>> 50bf5e8f5f (Squashed 'laravel/Modules/Fixcity/' content from commit 11c5f6a3e0)
    ],
];
