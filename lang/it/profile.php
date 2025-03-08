<?php

declare(strict_types=1);

return [
    'navigation' => [
<<<<<<< HEAD
        'name' => 'Profilo',
        'plural' => 'Profili',
        'group' => [
            'name' => 'Gestione Utenti',
            'description' => 'Gestione dei profili utente',
        ],
        'label' => 'Profilo',
        'sort' => 73,
        'icon' => 'user-profile-animated',
    ],
    'fields' => [
        'personal_info' => [
            'label' => 'Informazioni Personali',
            'first_name' => 'Nome',
            'last_name' => 'Cognome',
            'email' => 'Email',
            'phone' => 'Telefono',
            'birth_date' => 'Data di Nascita',
            'gender' => [
                'label' => 'Genere',
                'male' => 'Maschio',
                'female' => 'Femmina',
                'other' => 'Altro',
            ],
        ],
        'preferences' => [
            'label' => 'Preferenze',
            'language' => 'Lingua',
            'timezone' => 'Fuso Orario',
            'notifications' => 'Notifiche',
            'theme' => [
                'label' => 'Tema',
                'light' => 'Chiaro',
                'dark' => 'Scuro',
                'system' => 'Sistema',
            ],
        ],
        'security' => [
            'label' => 'Sicurezza',
            'current_password' => 'Password Attuale',
            'new_password' => 'Nuova Password',
            'confirm_password' => 'Conferma Password',
            'two_factor' => 'Autenticazione a Due Fattori',
            'recovery_codes' => 'Codici di Recupero',
        ],
        'id' => [
            'label' => 'ID',
        ],
        'ente' => [
            'label' => 'Ente',
        ],
        'matr' => [
            'label' => 'Matricola',
        ],
        'first_name' => [
            'label' => 'Nome',
            'fields' => [
                'label' => 'Nome',
            ],
        ],
        'last_name' => [
            'label' => 'Cognome',
            'fields' => [
                'label' => 'Cognome',
            ],
        ],
        'email' => [
            'label' => 'Email',
            'fields' => [
                'label' => 'Email',
            ],
        ],
        'is_active' => [
            'label' => 'Attivo',
            'fields' => [
                'label' => 'Attivo',
            ],
        ],
        'delete' => [
            'label' => 'Elimina',
        ],
        'toggleColumns' => [
            'label' => 'Mostra/Nascondi Colonne',
        ],
        'reorderRecords' => [
            'label' => 'Riordina Record',
        ],
        'resetFilters' => [
            'label' => 'Resetta Filtri',
        ],
        'applyFilters' => [
            'label' => 'Applica Filtri',
        ],
    ],
    'personal_info' => [
        'heading' => 'Informazioni Personali',
        'subheading' => 'Gestisci le tue informazioni personali.',
        'submit' => [
            'label' => 'Aggiorna',
        ],
        'notify' => 'Profilo aggiornato correttamente!',
    ],
    'navigation' => [
        'name' => 'Profilo',
        'plural' => 'Profili',
        'group' => [
            'name' => 'Gestione Utenti',
            'description' => 'Gestione dei profili',
        ],
        'label' => 'profili',
        'sort' => 71,
        'icon' => 'user-profile',
=======
        'name' => 'Profili Privacy',
        'plural' => 'Profili Privacy',
        'group' => [
            'name' => 'GDPR',
            'description' => 'Gestione dei profili di privacy degli utenti',
        ],
        'label' => 'Profili Privacy',
        'sort' => 22,
        'icon' => 'gdpr-profile',
    ],
    'fields' => [
        'user' => 'Utente',
        'preferences' => 'Preferenze',
        'marketing_consent' => 'Consenso Marketing',
        'analytics_consent' => 'Consenso Analytics',
        'third_party_consent' => 'Consenso Terze Parti',
        'last_updated' => 'Ultimo Aggiornamento',
    ],
    'preferences' => [
        'communication' => 'Preferenze Comunicazione',
        'data_retention' => 'Conservazione Dati',
        'data_sharing' => 'Condivisione Dati',
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
    ],
];
