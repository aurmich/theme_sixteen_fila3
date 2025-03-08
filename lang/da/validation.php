<?php

declare(strict_types=1);

return [
<<<<<<< HEAD
    'accepted' => ':attribute skal accepteres.',
    'active_url' => ':attribute er ikke en gyldig adresse.',
    'after' => ':attribute skal være en dato efter :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => ':attribute må kun indeholde bogstaver.',
    'alpha_dash' => ':attribute må kun indeholde bogstaver, tal og mellemstreger.',
    'alpha_num' => ':attribute må kun indeholde bogstaver og tal.',
    'array' => ':attribute skal være en liste.',
    'before' => ':attribute skal være en dato før :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
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

    'accepted' => ':attribute skal accepteres.',
    'active_url' => ':attribute er ikke en gyldig URL.',
    'after' => ':attribute skal være en dato efter :date.',
    'after_or_equal' => ':attribute skal være en dato efter eller lig med :date.',
    'alpha' => ':attribute må kun bestå af bogstaver.',
    'alpha_dash' => ':attribute må kun bestå af bogstaver, tal og bindestreger.',
    'alpha_num' => ':attribute må kun bestå af bogstaver og tal.',
    'array' => ':attribute skal være et array.',
    'before' => ':attribute skal være en dato før :date.',
    'before_or_equal' => ':attribute skal være en dato før eller lig med :date.',
>>>>>>> 50bf5e8f5f (Squashed 'laravel/Modules/Fixcity/' content from commit 11c5f6a3e0)
    'between' => [
        'numeric' => ':attribute skal være mellem :min og :max.',
        'file' => ':attribute skal være mellem :min og :max kilobytes.',
        'string' => ':attribute skal være mellem :min og :max tegn.',
<<<<<<< HEAD
        'array' => ':attribute skal have mellem :min og :max elementer.',
    ],
    'boolean' => ':attribute skal være sandt eller falsk.',
    'confirmed' => ':attribute bekræftelse passer ikke sammen.',
    'date' => ':attribute er ikke en gyldig dato.',
    'date_format' => ':attribute passer ikke til formatet :format.',
    'different' => ':attribute og :other skal være forskellige.',
    'digits' => ':attribute skal være på :digits cifre.',
    'digits_between' => ':attribute skal være mellem :min og :max cifre.',
    'dimensions' => ':attribute har ugyldige dimensioner.',
    'distinct' => ':attribute skal være unik.',
    'email' => ':attribute skal være en gyldig e-mailaddresse.',
    'exists' => ':attribute findes ikke.',
    'file' => ':attribute skal være en fil.',
    'filled' => ':attribute skal udfyldes.',
    'image' => ':attribute skal være et billed.',
    'in' => ':attribute er ikke gyldig.',
    'in_array' => ':attribute findes ikke i :other.',
    'integer' => ':attribute skal være et heltal.',
    'ip' => ':attribute skal være en gyldig IP-adresse.',
    'json' => ':attribute skal være gyldig JSON format.',
    'max' => [
        'numeric' => ':attribute må ikke være større end :max.',
        'file' => ':attribute må ikke være større end :max kilobytes.',
        'string' => ':attribute må ikke være længere end :max tegn.',
        'array' => ':attribute må ikke have flere end :max elementer.',
    ],
    'mimes' => ':attribute skal være filtypen: :values.',
    'min' => [
        'numeric' => ':attribute skal være mindst :min.',
        'file' => ':attribute skal være mindst :min kilobytes.',
        'string' => ':attribute skal mindts være :min tegn.',
        'array' => ':attribute skal have mindst :min elementer.',
    ],
    'not_in' => ':attribute er ikke gyldig.',
    'numeric' => ':attribute skal være et tal.',
    'present' => 'Feltet :attribute mangler.',
    'regex' => ':attribute er ikke et gyldigt format.',
    'required' => ':attribute er påkrævet.',
    'required_if' => ':attribute er påkrævet når :other er :value.',
    'required_unless' => ':attribute er påkrævet med mindre :other er :values.',
    'required_with' => ':attribute er påkrævet når :values er tilgængelig.',
    'required_with_all' => ':attribute er påkrævet når :values er tilgængelig.',
    'required_without' => ':attribute er påkrævet når :values ikke er tilgængelig.',
    'required_without_all' => ':attribute er påkrævet når ingen af værdierne :values er tilgængelig.',
=======
        'array' => ':attribute skal indeholde mellem :min og :max elementer.',
    ],
    'boolean' => ':attribute skal være sand eller falsk.',
    'confirmed' => ':attribute er ikke det samme som bekræftelsesfeltet.',
    'date' => ':attribute er ikke en gyldig dato.',
    'date_equals' => ':attribute skal være en dato lig med :date.',
    'date_format' => ':attribute matcher ikke formatet :format.',
    'different' => ':attribute og :other skal være forskellige.',
    'digits' => ':attribute skal have :digits cifre.',
    'digits_between' => ':attribute skal have mellem :min og :max cifre.',
    'dimensions' => ':attribute har forkerte billeddimensioner.',
    'distinct' => ':attribute har en duplikatværdi.',
    'email' => ':attribute skal være en gyldig e-mailadresse.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'exists' => 'Valgte :attribute er ugyldig.',
    'file' => ':attribute skal være en fil.',
    'filled' => ':attribute skal udfyldes.',
    'gt' => [
        'numeric' => ':attribute skal være større end :value.',
        'file' => ':attribute skal være større end :value kilobytes.',
        'string' => ':attribute skal være mere end :value tegn.',
        'array' => ':attribute skal være mere end :value elementer.',
    ],
    'gte' => [
        'numeric' => ':attribute skal være større end eller lig med :value.',
        'file' => ':attribute skal være større end eller lig med :value kilobytes.',
        'string' => ':attribute skal være mere end eller lig med :value tegn.',
        'array' => ':attribute skal have :value elementer eller mere.',
    ],
    'image' => ':attribute skal være et billede.',
    'in' => 'Valgte :attribute er ugyldig.',
    'in_array' => ':attribute eksisterer ikke i :other.',
    'integer' => ':attribute skal være et heltal.',
    'ip' => ':attribute skal være en gyldig IP adresse.',
    'ipv4' => ':attribute skal være en gyldig IPv4 adresse.',
    'ipv6' => ':attribute skal være en gyldig IPv6 adresse.',
    'json' => ':attribute skal være en gyldig JSON streng.',
    'lt' => [
        'numeric' => ':attribute skal være mindre end :value.',
        'file' => ':attribute skal være mindre end :value kilobytes.',
        'string' => ':attribute skal være mindre end :value tegn.',
        'array' => ':attribute skal have mindre end :value items.',
    ],
    'lte' => [
        'numeric' => ':attribute skal være mindre eller lig med :value.',
        'file' => ':attribute skal være mindre eller lig med :value kilobytes.',
        'string' => ':attribute skal være mindre eller lig med :value tegn.',
        'array' => ':attribute må ikke have mere end :value elementer.',
    ],
    'max' => [
        'numeric' => ':attribute må ikke være større end :max.',
        'file' => ':attribute må ikke være større end :max kilobytes.',
        'string' => ':attribute må ikke være mere end :max tegn.',
        'array' => ':attribute må ikke indeholde mere end :max elementer.',
    ],
    'mimes' => ':attribute skal være en fil af typen: :values.',
    'mimetypes' => ':attribute skal være en fil af typen: :values.',
    'min' => [
        'numeric' => ':attribute skal være mindst :min.',
        'file' => ':attribute skal være mindst :min kilobytes.',
        'string' => ':attribute skal være mindst :min tegn.',
        'array' => ':attribute skal indeholde mindst :min elementer.',
    ],
    'multiple_of' => 'The :attribute must be a multiple of :value',
    'not_in' => 'Valgte :attribute er ugyldig.',
    'not_regex' => 'Formatet for :attribute er ugyldigt.',
    'numeric' => ':attribute skal være et tal.',
    'password' => 'The password is incorrect.',
    'present' => ':attribute skal være tilstede.',
    'regex' => ':attribute formatet er ugyldigt.',
    'required' => ':attribute skal udfyldes.',
    'required_if' => ':attribute skal udfyldes når :other er :value.',
    'required_unless' => ':attribute er påkrævet med mindre :other findes i :values.',
    'required_with' => ':attribute skal udfyldes når :values er udfyldt.',
    'required_with_all' => ':attribute skal udfyldes når :values er udfyldt.',
    'required_without' => ':attribute skal udfyldes når :values ikke er udfyldt.',
    'required_without_all' => ':attribute skal udfyldes når ingen af :values er udfyldt.',
>>>>>>> 50bf5e8f5f (Squashed 'laravel/Modules/Fixcity/' content from commit 11c5f6a3e0)
    'same' => ':attribute og :other skal være ens.',
    'size' => [
        'numeric' => ':attribute skal være :size.',
        'file' => ':attribute skal være :size kilobytes.',
<<<<<<< HEAD
        'string' => ':attribute skal have :size tegn.',
        'array' => ':attribute skal indeholde :size elementer.',
    ],
    'string' => ':attribute skal være tekst.',
    'timezone' => ':attribute skal være en gyldig tidszone.',
    'unique' => ':attribute er allerede i brug.',
    'url' => ':attribute er ikke i det rigtige format.',
=======
        'string' => ':attribute skal være :size tegn lang.',
        'array' => ':attribute skal indeholde :size elementer.',
    ],
    'starts_with' => ':attribute skal starte med én af følgende: :values.',
    'string' => ':attribute skal være en streng.',
    'timezone' => ':attribute skal være en gyldig tidszone.',
    'unique' => ':attribute er allerede taget.',
    'uploaded' => ':attribute fejlede i upload.',
    'url' => ':attribute formatet er ugyldigt.',
    'uuid' => ':attribute skal være en gyldig UUID.',

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
                    'associated_roles' => 'Tilknyttede Roller',
                    'dependencies' => 'Afhængigheder',
                    'display_name' => 'Visningsnavn',
                    'group' => 'Gruppe',
                    'group_sort' => 'Gruppesortering',
                    'groups' => [
                        'name' => 'Gruppenavn',
                    ],
                    'name' => 'Navn',
                    'system' => 'System?',
                ],
                'roles' => [
                    'associated_permissions' => 'Tilknyttede Rettigheder',
                    'name' => 'Navn',
                    'sort' => 'Sortér',
                ],
                'users' => [
                    'active' => 'Aktiv',
                    'associated_roles' => 'Tilknyttede Roller',
                    'confirmed' => 'Bekræftet',
                    'email' => 'E-mailadresse',
                    'name' => 'Navn',
                    'other_permissions' => 'Andre Rettigheder',
                    'password' => 'Adgangskode',
                    'password_confirmation' => 'Bekræft adgangskode',
                    'send_confirmation_email' => 'Send bekræfelsesmail',
                ],
            ],
        ],
        'frontend' => [
            'email' => 'E-mailadresse',
            'name' => 'Navn',
            'password' => 'Adgangskode',
            'password_confirmation' => 'Bekræft adgangskode',
            'old_password' => 'Gammel adgangskode',
            'new_password' => 'Ny adgangskode',
            'new_password_confirmation' => 'Bekræft ny adgangskode',
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
