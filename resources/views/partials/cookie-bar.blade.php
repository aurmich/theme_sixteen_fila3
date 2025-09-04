{{-- Cookie Bar conforme GDPR italiano --}}
<div 
    x-data="{
        show: {{ $show ?? 'true' }},
        accepted: localStorage.getItem('cookieConsent') === 'accepted',
        
        acceptAll() {
            localStorage.setItem('cookieConsent', 'accepted');
            this.show = false;
            this.$dispatch('cookie-accepted');
        },
        
        openPreferences() {
            this.$dispatch('open-cookie-preferences');
            this.show = false;
        }
    }"
    x-show="show && !accepted"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="transform translate-y-full"
    x-transition:enter-end="transform translate-y-0"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="transform translate-y-0"
    x-transition:leave-end="transform translate-y-full"
    class="fixed bottom-0 left-0 right-0 bg-gray-900 text-white z-50 shadow-2xl"
    role="dialog"
    aria-labelledby="cookie-title"
    aria-describedby="cookie-description"
>
    <div class="container-italia mx-auto px-4 py-4">
        <div class="flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="flex-1">
                <h3 id="cookie-title" class="text-lg font-semibold mb-2">
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9c84373 (.)
                    {{ __('pub_theme::cookies.title') }}
                </h3>
                
                <p id="cookie-description" class="text-sm leading-relaxed">
                    {{ __('pub_theme::cookies.description') }}
<<<<<<< HEAD
=======
                    {{ __('sixteen::cookies.title') }}
                </h3>
                
                <p id="cookie-description" class="text-sm leading-relaxed">
                    {{ __('sixteen::cookies.description') }}
>>>>>>> 7e2fefb (.)
=======
>>>>>>> 9c84373 (.)
                    <a 
                        href="{{ route('pages.view', ['slug' => 'privacy']) }}" 
                        class="text-blue-400 hover:text-blue-300 underline ml-1"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
<<<<<<< HEAD
<<<<<<< HEAD
                        {{ __('pub_theme::cookies.learn_more') }}
=======
                        {{ __('sixteen::cookies.learn_more') }}
>>>>>>> 7e2fefb (.)
=======
                        {{ __('pub_theme::cookies.learn_more') }}
>>>>>>> 9c84373 (.)
                    </a>
                </p>
            </div>
            
            <div class="flex gap-3 flex-shrink-0">
                <button
                    @click="openPreferences"
                    class="px-4 py-2 border border-blue-600 text-blue-400 rounded-lg hover:bg-blue-600 hover:text-white transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-900"
<<<<<<< HEAD
<<<<<<< HEAD
                    :aria-label="__('pub_theme::cookies.customize')"
                >
                    {{ __('pub_theme::cookies.customize') }}
=======
                    :aria-label="__('sixteen::cookies.customize')"
                >
                    {{ __('sixteen::cookies.customize') }}
>>>>>>> 7e2fefb (.)
=======
                    :aria-label="__('pub_theme::cookies.customize')"
                >
                    {{ __('pub_theme::cookies.customize') }}
>>>>>>> 9c84373 (.)
                </button>
                
                <button
                    @click="acceptAll"
                    class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-900"
<<<<<<< HEAD
<<<<<<< HEAD
                    :aria-label="__('pub_theme::cookies.accept_all')"
                >
                    {{ __('pub_theme::cookies.accept_all') }}
=======
                    :aria-label="__('sixteen::cookies.accept_all')"
                >
                    {{ __('sixteen::cookies.accept_all') }}
>>>>>>> 7e2fefb (.)
=======
                    :aria-label="__('pub_theme::cookies.accept_all')"
                >
                    {{ __('pub_theme::cookies.accept_all') }}
>>>>>>> 9c84373 (.)
                </button>
            </div>
        </div>
    </div>
</div>