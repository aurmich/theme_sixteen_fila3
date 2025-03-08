<?php

declare(strict_types=1);

return [
<<<<<<< HEAD
    'accepted' => ':attribute måste accepteras.',
    'active_url' => ':attribute är inte en giltig webbadress.',
    'after' => ':attribute måste vara ett datum efter den :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => ':attribute får endast innehålla bokstäver.',
    'alpha_dash' => ':attribute får endast innehålla bokstäver, siffror och bindestreck.',
    'alpha_num' => ':attribute får endast innehålla bokstäver och siffror.',
    'array' => ':attribute måste vara en array.',
    'before' => ':attribute måste vara ett datum innan den :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => ':attribute måste vara en siffra mellan :min och :max.',
        'file' => ':attribute måste vara mellan :min till :max kilobyte stor.',
        'string' => ':attribute måste innehålla :min till :max tecken.',
        'array' => ':attribute måste innehålla mellan :min - :max objekt.',
    ],
    'boolean' => ':attribute måste vara sant eller falskt',
    'confirmed' => ':attribute bekräftelsen matchar inte.',
    'date' => ':attribute är inte ett giltigt datum.',
    'date_format' => ':attribute matchar inte formatet :format.',
    'different' => ':attribute och :other får inte vara lika.',
    'digits' => ':attribute måste vara minst :digits tecken.',
    'digits_between' => ':attribute måste vara mellan :min och :max tecken.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'Fältet :attribute måste innehålla en korrekt e-postadress.',
    'exists' => 'Det valda :attribute är ogiltigt.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'Fältet :attribute är obligatoriskt.',
    'image' => ':attribute måste vara en bild.',
    'in' => 'Det valda :attribute är ogiltigt.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => ':attribute måste vara en siffra.',
    'ip' => ':attribute måste vara en giltig IP-adress.',
    'json' => 'The :attribute must be a valid JSON string.',
    'max' => [
        'numeric' => ':attribute får inte vara större än :max.',
        'file' => ':attribute får max vara :max kilobyte stor.',
        'string' => ':attribute får max innehålla :max tecken.',
        'array' => ':attribute får inte innehålla mer än :max objekt.',
    ],
    'mimes' => ':attribute måste vara en fil av typen: :values.',
    'min' => [
        'numeric' => ':attribute måste vara större än :min.',
        'file' => ':attribute måste vara minst :min kilobyte stor.',
        'string' => ':attribute måste innehålla minst :min tecken.',
        'array' => ':attribute måste innehålla minst :min objekt.',
    ],
    'not_in' => 'Det valda :attribute är ogiltigt.',
    'numeric' => ':attribute måste vara en siffra.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'Formatet för :attribute är ogiltigt.',
    'required' => 'Fältet :attribute är obligatoriskt.',
    'required_if' => 'Fältet :attribute är obligatoriskt då :other är :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'Fältet :attribute är obligatoriskt då :values är ifyllt.',
    'required_with_all' => 'Fältet :attribute är obligatoriskt när :values är ifyllt.',
    'required_without' => 'Fältet :attribute är obligatoriskt då :values ej är ifyllt.',
    'required_without_all' => 'Fältet :attribute är obligatoriskt när ingen av :values är ifyllt.',
    'same' => ':attribute och :other måste vara lika.',
    'size' => [
        'numeric' => ':attribute måste vara :size.',
        'file' => ':attribute får endast vara :size kilobyte stor.',
        'string' => ':attribute måste innehålla :size tecken.',
        'array' => ':attribute måste innehålla :size objekt.',
    ],
    'string' => ':attribute måste vara en sträng.',
    'timezone' => ':attribute måste vara en giltig tidszon.',
    'unique' => ':attribute används redan.',
    'url' => 'Formatet :attribute är ogiltigt.',
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

    'accepted' => ':Attribute måste accepteras.',
    'active_url' => ':Attribute är inte en giltig webbadress.',
    'after' => ':Attribute måste vara ett datum efter :date.',
    'after_or_equal' => ':Attribute måste vara ett datum senare eller samma dag som :date.',
    'alpha' => ':Attribute får endast innehålla bokstäver.',
    'alpha_dash' => ':Attribute får endast innehålla bokstäver, siffror och bindestreck.',
    'alpha_num' => ':Attribute får endast innehålla bokstäver och siffror.',
    'array' => ':Attribute måste vara en array.',
    'before' => ':Attribute måste vara ett datum innan :date.',
    'before_or_equal' => ':Attribute måste vara ett datum före eller samma dag som :date.',
    'between' => [
        'numeric' => ':Attribute måste vara en siffra mellan :min och :max.',
        'file' => ':Attribute måste vara mellan :min till :max kilobyte stor.',
        'string' => ':Attribute måste innehålla :min till :max tecken.',
        'array' => ':Attribute måste innehålla mellan :min - :max objekt.',
    ],
    'boolean' => ':Attribute måste vara sant eller falskt.',
    'confirmed' => ':Attribute bekräftelsen matchar inte.',
    'date' => ':Attribute är inte ett giltigt datum.',
    'date_equals' => ':Attribute måste vara ett datum lika med :date.',
    'date_format' => ':Attribute matchar inte formatet :format.',
    'different' => ':Attribute och :other får inte vara lika.',
    'digits' => ':Attribute måste vara :digits tecken.',
    'digits_between' => ':Attribute måste vara mellan :min och :max tecken.',
    'dimensions' => ':Attribute har felaktiga bilddimensioner.',
    'distinct' => ':Attribute innehåller fler än en repetition av samma element.',
    'email' => ':Attribute måste innehålla en korrekt e-postadress.',
    'ends_with' => ':Attribute måste sluta med en av följande: :values.',
    'exists' => ':Attribute är ogiltigt.',
    'file' => ':Attribute måste vara en fil.',
    'filled' => ':Attribute är obligatoriskt.',
    'gt' => [
        'numeric' => ':Attribute måste vara större än :value.',
        'file' => ':Attribute måste vara större än :value kilobyte stor.',
        'string' => ':Attribute måste vara längre än :value tecken.',
        'array' => ':Attribute måste innehålla fler än :value objekt.',
    ],
    'gte' => [
        'numeric' => ':Attribute måste vara lika med eller större än :value.',
        'file' => ':Attribute måste vara lika med eller större än :value kilobyte stor.',
        'string' => ':Attribute måste vara lika med eller längre än :value tecken.',
        'array' => ':Attribute måste innehålla lika många eller fler än :value objekt.',
    ],
    'image' => ':Attribute måste vara en bild.',
    'in' => ':Attribute är ogiltigt.',
    'in_array' => ':Attribute finns inte i :other.',
    'integer' => ':Attribute måste vara en siffra.',
    'ip' => ':Attribute måste vara en giltig IP-adress.',
    'ipv4' => ':Attribute måste vara en giltig IPv4-adress.',
    'ipv6' => ':Attribute måste vara en giltig IPv6-adress.',
    'json' => ':Attribute måste vara en giltig JSON-sträng.',
    'lt' => [
        'numeric' => ':Attribute måste vara mindre än :value.',
        'file' => ':Attribute måste vara mindre än :value kilobyte stor.',
        'string' => ':Attribute måste vara kortare än :value tecken.',
        'array' => ':Attribute måste innehålla färre än :value objekt.',
    ],
    'lte' => [
        'numeric' => ':Attribute måste vara lika med eller mindre än :value.',
        'file' => ':Attribute måste vara lika med eller mindre än :value kilobyte stor.',
        'string' => ':Attribute måste vara lika med eller kortare än :value tecken.',
        'array' => ':Attribute måste innehålla lika många eller färre än :value objekt.',
    ],
    'max' => [
        'numeric' => ':Attribute får inte vara större än :max.',
        'file' => ':Attribute får max vara :max kilobyte stor.',
        'string' => ':Attribute får max innehålla :max tecken.',
        'array' => ':Attribute får inte innehålla mer än :max objekt.',
    ],
    'mimes' => ':Attribute måste vara en fil av typen: :values.',
    'mimetypes' => ':Attribute måste vara en fil av typen: :values.',
    'min' => [
        'numeric' => ':Attribute måste vara större än :min.',
        'file' => ':Attribute måste vara minst :min kilobyte stor.',
        'string' => ':Attribute måste innehålla minst :min tecken.',
        'array' => ':Attribute måste innehålla minst :min objekt.',
    ],
    'multiple_of' => 'The :attribute must be a multiple of :value',
    'not_in' => ':Attribute är ogiltigt.',
    'not_regex' => 'Formatet för :attribute är ogiltigt.',
    'numeric' => ':Attribute måste vara en siffra.',
    'password' => 'Lösenordet är fel.',
    'present' => ':Attribute måste finnas med.',
    'regex' => ':Attribute har ogiltigt format.',
    'required' => ':Attribute är obligatoriskt.',
    'required_if' => ':Attribute är obligatoriskt när :other är :value.',
    'required_unless' => ':Attribute är obligatoriskt när inte :other finns bland :values.',
    'required_with' => ':Attribute är obligatoriskt när :values är ifyllt.',
    'required_with_all' => ':Attribute är obligatoriskt när :values är ifyllt.',
    'required_without' => ':Attribute är obligatoriskt när :values ej är ifyllt.',
    'required_without_all' => ':Attribute är obligatoriskt när ingen av :values är ifyllt.',
    'same' => ':Attribute och :other måste vara lika.',
    'size' => [
        'numeric' => ':Attribute måste vara :size.',
        'file' => ':Attribute får endast vara :size kilobyte stor.',
        'string' => ':Attribute måste innehålla :size tecken.',
        'array' => ':Attribute måste innehålla :size objekt.',
    ],
    'starts_with' => ':Attribute måste börja med en av följande: :values',
    'string' => ':Attribute måste vara en sträng.',
    'timezone' => ':Attribute måste vara en giltig tidszon.',
    'unique' => ':Attribute används redan.',
    'uploaded' => ':Attribute kunde inte laddas upp.',
    'url' => ':Attribute har ett ogiltigt format.',
    'uuid' => ':Attribute måste vara ett giltigt UUID.',

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
                    'associated_roles' => 'Sammankopplade roller',
                    'dependencies' => 'Krävda tillstånd',
                    'display_name' => 'Namn som visas',
                    'group' => 'Tillståndsgrupp',
                    'group_sort' => 'Ordning för tillståndsgrupp',
                    'groups' => [
                        'name' => 'Namn för tillståndsgrupp',
                    ],
                    'name' => 'Namn',
                    'system' => 'System-status?',
                ],
                'roles' => [
                    'associated_permissions' => 'Sammankopplade tillstånd',
                    'name' => 'Namn',
                    'sort' => 'Ordning',
                ],
                'users' => [
                    'active' => 'Aktiv',
                    'associated_roles' => 'Sammankopplade roller',
                    'confirmed' => 'Bekräftad',
                    'email' => 'E-postadress',
                    'name' => 'Namn',
                    'other_permissions' => 'Övriga tillstånd',
                    'password' => 'Lösenord',
                    'password_confirmation' => 'Bekräfta lösenord',
                    'send_confirmation_email' => 'Skicka bekräftelsemail',
                ],
            ],
        ],
        'frontend' => [
            'email' => 'E-postadress',
            'name' => 'Namn',
            'password' => 'Lösenord',
            'password_confirmation' => 'Bekräfta lösenord',
            'old_password' => 'Gammalt lösenord',
            'new_password' => 'Nytt lösenord',
            'new_password_confirmation' => 'Bekräfta nytt lösenord',
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
