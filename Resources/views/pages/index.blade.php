<?php

use function Laravel\Folio\{middleware, name};
use Livewire\Volt\Component;

name('home');
//middleware(['redirect-to-dashboard']);

new class extends Component
{
};

?>

<x-layouts.marketing>
    {!! $_theme->showPageContent('home') !!}

</x-layouts.marketing>