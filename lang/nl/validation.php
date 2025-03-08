<?php

declare(strict_types=1);

return [
<<<<<<< HEAD
    'accepted' => ':attribute moet geaccepteerd worden.',
    'active_url' => ':attribute is geen geldige URL.',
    'after' => ':attribute moet een datum na :date zijn.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => ':attribute mag alleen letters bevatten.',
    'alpha_dash' => ':attribute mag alleen letters, cijfers en koppeltekens bevatten.',
    'alpha_num' => ':attribute mag alleen letters, cijfers bevatten',
    'array' => ':attribute moet een array zijn.',
    'before' => ':attribute moet een datum voor :date zijn.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => ':attribute moet tussen :min en :max liggen.',
        'file' => ':attribute moet tussen :min and :max kilobytes liggen.',
        'string' => ':attribute moet tussen de :min en :max karakters hebben.',
        'array' => ':attribute moet tussen :min en :max items hebben.',
    ],
    'boolean' => ':attribute veld moet waar of onwaar zijn.',
    'confirmed' => ':attribute bevestiging komt niet overeen.',
    'date' => ':attribute bevat geen geldige datum.',
    'date_format' => ':attribute komt niet overeen met het formaat :format.',
    'different' => ':attribute en :other mogen niet gelijk zijn.',
    'digits' => ':attribute moet :digits cijfers bevatten.',
    'digits_between' => ':attribute moet tussen :min and :max cijfers bevatten.',
    'dimensions' => ':attribute heeft ongeldige afbeelding dimensies.',
    'distinct' => ':attribute bevat een duplicate waarde.',
    'email' => ':attribute moet een geldig e-mail adres zijn.',
    'exists' => 'Het geselecteerde :attribute is ongeldig.',
    'file' => ':attribute moet een bestand zijn.',
    'filled' => ':attribute veld is verplicht.',
    'image' => ':attribute moet een afbeelding zijn.',
    'in' => 'geselecteerd :attribute is ongeldig.',
    'in_array' => ':attribute veld bestaat niet in :other.',
    'integer' => ':attribute moet een heel getal zijn .',
    'ip' => ':attribute moet een geldig IP adres zijn.',
    'json' => ':attribute moet een geldige JSON string zijn.',
    'max' => [
        'numeric' => ':attribute mag niet groter zijn dan :max.',
        'file' => ':attribute mag niet groter zijn dan :max kilobytes.',
        'string' => ':attribute mag niet groter zijn dan :max karakters.',
        'array' => ':attribute mag niet meer dan :max items bevatten.',
    ],
    'mimes' => ':attribute moet een bestand zijn van het type: :values.',
    'min' => [
        'numeric' => ':attribute moet minimaal :min zijn.',
        'file' => ':attribute moet minimaal :min kilobytes zijn.',
        'string' => ':attribute moet minimaal :min karakters zijn.',
        'array' => ':attribute moet ten minste :min items bevatten.',
    ],
    'not_in' => 'Het geselcteerde :attribute is ongeldig.',
    'numeric' => ':attribute moet numeriek zijn.',
    'present' => ':attribute veld is verplicht.',
    'regex' => ':attribute formaat is ongeldig.',
    'required' => ':attribute veld is verplicht.',
    'required_if' => ':attribute veld is verplicht wanneer :other :value is.',
    'required_unless' => ':attribute veld is verplicht behalve wanneer:other :values is.',
    'required_with' => ':attribute veld is verplicht wanneer :values aanwezig is.',
    'required_with_all' => ':attribute veld is verplicht wanneer :values aanwezig is.',
    'required_without' => ':attribute veld is verplicht wanneer :values niet aanwezig is.',
    'required_without_all' => ':attribute veld is verplicht wanneer geen van :values aanwezig zijn.',
    'same' => ':attribute en :other moeten overeenkomen.',
    'size' => [
        'numeric' => ':attribute moet :size zijn.',
        'file' => ':attribute moet :size kilobytes zijn.',
        'string' => ':attribute moet :size karakters bevatten.',
        'array' => ':attribute moet :size items bevatten.',
    ],
    'string' => ':attribute moet een string zijn.',
    'timezone' => ':attribute moet een geldige tijdzone bevatten.',
    'unique' => ':attribute is al in gebruik.',
    'url' => ':attribute formaat is ongeldig.',
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'Individueel-bericht',
        ],
    ],
    'attributes' => [
        'backend' => [
            'access' => [
                'permissions' => [
                    'associated_roles' => 'Geassocieerde Rollen',
                    'dependencies' => 'Afhankelijkheden',
                    'display_name' => 'Weergave Naam',
                    'group' => 'Groep',
                    'group_sort' => 'Groep Sorteren',
                    'groups' => [
                        'name' => 'Groep Naam',
                    ],
                    'name' => 'Naam',
                    'system' => 'Systeem?',
                ],
                'roles' => [
                    'associated_permissions' => 'Geassocieerde Permissies',
                    'name' => 'Naam',
                    'sort' => 'Sorteren',
                ],
                'users' => [
                    'active' => 'Actief',
                    'associated_roles' => 'Geassocieerde Rollen',
                    'confirmed' => 'Bevestigd',
                    'email' => 'E-mail Adres',
                    'name' => 'Naam',
                    'other_permissions' => 'Overige Permissies',
                    'password' => 'Wachtwoord',
                    'password_confirmation' => 'Wachtwoord bevestiging',
                    'send_confirmation_email' => 'Stuur Bevestigings E-mail',
                ],
            ],
        ],
        'frontend' => [
            'email' => 'E-mail Adres',
            'name' => 'Naam',
            'password' => 'Wachwoord',
            'password_confirmation' => 'Wachtwoord Bevestiging',
            'old_password' => 'Oud Wachtwoord',
            'new_password' => 'Nieuw Wachtwoord',
            'new_password_confirmation' => 'Nieuw Wachtwoord Bevestigen',
        ],
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
    'accepted' => ':Attribute moet geaccepteerd zijn.',
    'active_url' => ':Attribute is geen geldige URL.',
    'after' => ':Attribute moet een datum na :date zijn.',
    'after_or_equal' => ':Attribute moet een datum na of gelijk aan :date zijn.',
    'alpha' => ':Attribute mag alleen letters bevatten.',
    'alpha_dash' => ':Attribute mag alleen letters, nummers, underscores (_) en streepjes (-) bevatten.',
    'alpha_num' => ':Attribute mag alleen letters en nummers bevatten.',
    'array' => ':Attribute moet geselecteerde elementen bevatten.',
    'before' => ':Attribute moet een datum voor :date zijn.',
    'before_or_equal' => ':Attribute moet een datum voor of gelijk aan :date zijn.',
    'between' => [
        'numeric' => ':Attribute moet tussen :min en :max zijn.',
        'file' => ':Attribute moet tussen :min en :max kilobytes zijn.',
        'string' => ':Attribute moet tussen :min en :max karakters zijn.',
        'array' => ':Attribute moet tussen :min en :max items bevatten.',
    ],
    'boolean' => ':Attribute moet ja of nee zijn.',
    'confirmed' => ':Attribute bevestiging komt niet overeen.',
    'date' => ':Attribute moet een datum bevatten.',
    'date_equals' => ':Attribute moet een datum gelijk aan :date zijn.',
    'date_format' => ':Attribute moet een geldig datum formaat bevatten.',
    'different' => ':Attribute en :other moeten verschillend zijn.',
    'digits' => ':Attribute moet bestaan uit :digits cijfers.',
    'digits_between' => ':Attribute moet bestaan uit minimaal :min en maximaal :max cijfers.',
    'dimensions' => ':Attribute heeft geen geldige afmetingen voor afbeeldingen.',
    'distinct' => ':Attribute heeft een dubbele waarde.',
    'email' => ':Attribute is geen geldig e-mailadres.',
    'ends_with' => ':Attribute moet met één van de volgende waarden eindigen: :values.',
    'exists' => ':Attribute bestaat niet.',
    'file' => ':Attribute moet een bestand zijn.',
    'filled' => ':Attribute is verplicht.',
    'gt' => [
        'numeric' => 'De :attribute moet groter zijn dan :value.',
        'file' => 'De :attribute moet groter zijn dan :value kilobytes.',
        'string' => 'De :attribute moet meer dan :value tekens bevatten.',
        'array' => 'De :attribute moet meer dan :value waardes bevatten.',
    ],
    'gte' => [
        'numeric' => 'De :attribute moet groter of gelijk zijn aan :value.',
        'file' => 'De :attribute moet groter of gelijk zijn aan :value kilobytes.',
        'string' => 'De :attribute moet minimaal :value tekens bevatten.',
        'array' => 'De :attribute moet :value waardes of meer bevatten.',
    ],
    'image' => ':Attribute moet een afbeelding zijn.',
    'in' => ':Attribute is ongeldig.',
    'in_array' => ':Attribute bestaat niet in :other.',
    'integer' => ':Attribute moet een getal zijn.',
    'ip' => ':Attribute moet een geldig IP-adres zijn.',
    'ipv4' => ':Attribute moet een geldig IPv4-adres zijn.',
    'ipv6' => ':Attribute moet een geldig IPv6-adres zijn.',
    'json' => ':Attribute moet een geldige JSON-string zijn.',
    'lt' => [
        'numeric' => 'De :attribute moet kleiner zijn dan :value.',
        'file' => 'De :attribute moet kleiner zijn dan :value kilobytes.',
        'string' => 'De :attribute moet minder dan :value tekens bevatten.',
        'array' => 'De :attribute moet minder dan :value waardes bevatten.',
    ],
    'lte' => [
        'numeric' => 'De :attribute moet kleiner of gelijk zijn aan :value.',
        'file' => 'De :attribute moet kleiner of gelijk zijn aan :value kilobytes.',
        'string' => 'De :attribute moet maximaal :value tekens bevatten.',
        'array' => 'De :attribute moet :value waardes of minder bevatten.',
    ],
    'max' => [
        'numeric' => ':Attribute mag niet hoger dan :max zijn.',
        'file' => ':Attribute mag niet meer dan :max kilobytes zijn.',
        'string' => ':Attribute mag niet uit meer dan :max tekens bestaan.',
        'array' => ':Attribute mag niet meer dan :max items bevatten.',
    ],
    'mimes' => ':Attribute moet een bestand zijn van het bestandstype :values.',
    'mimetypes' => ':Attribute moet een bestand zijn van het bestandstype :values.',
    'min' => [
        'numeric' => ':Attribute moet minimaal :min zijn.',
        'file' => ':Attribute moet minimaal :min kilobytes zijn.',
        'string' => ':Attribute moet minimaal :min tekens zijn.',
        'array' => ':Attribute moet minimaal :min items bevatten.',
    ],
    'multiple_of' => ':Attribute moet een veelvoud van :value zijn.',
    'not_in' => 'Het formaat van :attribute is ongeldig.',
    'not_regex' => 'De :attribute formaat is ongeldig.',
    'numeric' => ':Attribute moet een nummer zijn.',
    'password' => 'Wachtwoord is onjuist.',
    'present' => ':Attribute moet bestaan.',
    'regex' => ':Attribute formaat is ongeldig.',
    'required' => ':Attribute is verplicht.',
    'required_if' => ':Attribute is verplicht indien :other gelijk is aan :value.',
    'required_unless' => ':Attribute is verplicht tenzij :other gelijk is aan :values.',
    'required_with' => ':Attribute is verplicht i.c.m. :values',
    'required_with_all' => ':Attribute is verplicht i.c.m. :values',
    'required_without' => ':Attribute is verplicht als :values niet ingevuld is.',
    'required_without_all' => ':Attribute is verplicht als :values niet ingevuld zijn.',
    'same' => ':Attribute en :other moeten overeenkomen.',
    'size' => [
        'numeric' => ':Attribute moet :size zijn.',
        'file' => ':Attribute moet :size kilobyte zijn.',
        'string' => ':Attribute moet :size tekens zijn.',
        'array' => ':Attribute moet :size items bevatten.',
    ],
    'starts_with' => ':Attribute moet starten met een van de volgende: :values.',
    'string' => ':Attribute moet een tekst zijn.',
    'timezone' => ':Attribute moet een geldige tijdzone zijn.',
    'unique' => ':Attribute is al in gebruik.',
    'uploaded' => 'Het uploaden van :attribute is mislukt.',
    'url' => ':Attribute moet een geldig URL zijn.',
    'uuid' => ':Attribute moet een geldig UUID zijn.',
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
    'attributes' => [
        'address' => 'adres',
        'age' => 'leeftijd',
        'amount' => 'bedrag',
        'available' => 'beschikbaar',
        'city' => 'stad',
        'content' => 'inhoud',
        'country' => 'land',
        'currency' => 'valuta',
        'date' => 'datum',
        'date_of_birth' => 'geboortedatum',
        'day' => 'dag',
        'description' => 'omschrijving',
        'duration' => 'tijdsduur',
        'email' => 'e-mailadres',
        'excerpt' => 'uittreksel',
        'first_name' => 'voornaam',
        'gender' => 'geslacht',
        'group' => 'groep',
        'hour' => 'uur',
        'last_name' => 'achternaam',
        'lesson' => 'les',
        'message' => 'bericht',
        'minute' => 'minuut',
        'mobile' => 'mobiel',
        'month' => 'maand',
        'name' => 'naam',
        'password' => 'wachtwoord',
        'password_confirmation' => 'wachtwoordbevestiging',
        'phone' => 'telefoonnummer',
        'price' => 'prijs',
        'second' => 'seconde',
        'sex' => 'geslacht',
        'size' => 'grootte',
        'street' => 'straatnaam',
        'student' => 'student',
        'subject' => 'onderwerp',
        'teacher' => 'Docent',
        'time' => 'tijd',
        'title' => 'titel',
        'username' => 'gebruikersnaam',
        'year' => 'jaar',
>>>>>>> 50bf5e8f5f (Squashed 'laravel/Modules/Fixcity/' content from commit 11c5f6a3e0)
    ],
];
