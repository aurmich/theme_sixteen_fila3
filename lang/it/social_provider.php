<?php return array (
  'resources' => 'Risorse',
  'pages' => 'Pagine',
  'widgets' => 'Widgets',
  'navigation' => 
  array (
    'name' => 'Social Provider',
    'plural' => 'Social Providers',
    'group' => 
    array (
      'name' => 'Admin',
    ),
    'label' => 'social provider',
    'sort' => 82,
  ),
  'fields' => 
  array (
    'name' => 'Nome',
    'guard_name' => 'Guard',
    'permissions' => 'Permessi',
    'updated_at' => 'Aggiornato il',
    'first_name' => 'Nome',
    'last_name' => 'Cognome',
    'select_all' => 
    array (
      'name' => 'Seleziona Tutti',
      'message' => '',
    ),
  ),
  'actions' => 
  array (
    'import' => 
    array (
      'fields' => 
      array (
        'import_file' => 'Seleziona un file XLS o CSV da caricare',
      ),
    ),
    'export' => 
    array (
      'filename_prefix' => 'Aree al',
      'columns' => 
      array (
        'name' => 'Nome area',
        'parent_name' => 'Nome area livello superiore',
      ),
    ),
    'create' => 
    array (
      'label' => 'create',
    ),
  ),
  'plural' => 
  array (
    'model' => 
    array (
      'label' => 'social provider.plural.model',
    ),
  ),
);