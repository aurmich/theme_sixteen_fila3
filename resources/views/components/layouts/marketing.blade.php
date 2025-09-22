<x-layouts.main>
<<<<<<< HEAD
   <x-section slug="header"/>
    {{ $slot }}
    <x-section slug="footer"/>
=======
    {{--  
    <x-ui.marketing.header />
    --}}
    {{ $_theme->headernav() }}

    {{ $slot }}

    {{ $_theme->footer() }}

>>>>>>> 109edea (.)
</x-layouts.main>
