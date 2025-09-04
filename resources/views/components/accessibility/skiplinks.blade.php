{{-- Skiplinks per navigazione da tastiera - Conforme AGID --}}
<nav 
    class="sr-only focus:not-sr-only fixed top-0 left-0 z-[100]" 
<<<<<<< HEAD
<<<<<<< HEAD
    aria-label="{{ __('pub_theme::accessibility.skip_navigation') }}"
=======
    aria-label="{{ __('sixteen::accessibility.skip_navigation') }}"
>>>>>>> 7e2fefb (.)
=======
    aria-label="{{ __('pub_theme::accessibility.skip_navigation') }}"
>>>>>>> 9c84373 (.)
>
    <ul class="flex flex-col space-y-2 p-4 bg-white shadow-lg rounded-br-lg">
        <li>
            <a 
                href="#main-content"
                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                @keydown.tab="$event.shiftKey || $el.nextElementSibling?.querySelector('a')?.focus()"
            >
<<<<<<< HEAD
<<<<<<< HEAD
                {{ __('pub_theme::accessibility.skip_to_content') }}
=======
                {{ __('sixteen::accessibility.skip_to_content') }}
>>>>>>> 7e2fefb (.)
=======
                {{ __('pub_theme::accessibility.skip_to_content') }}
>>>>>>> 9c84373 (.)
            </a>
        </li>
        
        <li>
            <a 
                href="#main-navigation"
                class="px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition-colors focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2"
                @keydown.tab="$event.shiftKey || $el.nextElementSibling?.querySelector('a')?.focus()"
            >
<<<<<<< HEAD
<<<<<<< HEAD
                {{ __('pub_theme::accessibility.skip_to_navigation') }}
=======
                {{ __('sixteen::accessibility.skip_to_navigation') }}
>>>>>>> 7e2fefb (.)
=======
                {{ __('pub_theme::accessibility.skip_to_navigation') }}
>>>>>>> 9c84373 (.)
            </a>
        </li>
        
        <li>
            <a 
                href="#search-form"
                class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2"
                @keydown.tab="$event.shiftKey || $el.nextElementSibling?.querySelector('a')?.focus()"
            >
<<<<<<< HEAD
<<<<<<< HEAD
                {{ __('pub_theme::accessibility.skip_to_search') }}
=======
                {{ __('sixteen::accessibility.skip_to_search') }}
>>>>>>> 7e2fefb (.)
=======
                {{ __('pub_theme::accessibility.skip_to_search') }}
>>>>>>> 9c84373 (.)
            </a>
        </li>
        
        <li>
            <a 
                href="#footer"
                class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition-colors focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2"
                @keydown.tab="$event.shiftKey || $el.nextElementSibling?.querySelector('a')?.focus()"
            >
<<<<<<< HEAD
<<<<<<< HEAD
                {{ __('pub_theme::accessibility.skip_to_footer') }}
=======
                {{ __('sixteen::accessibility.skip_to_footer') }}
>>>>>>> 7e2fefb (.)
=======
                {{ __('pub_theme::accessibility.skip_to_footer') }}
>>>>>>> 9c84373 (.)
            </a>
        </li>
    </ul>
</nav>

{{-- Punto di ancoraggio per il contenuto principale --}}
<div id="main-content" tabindex="-1" class="sr-only"></div>