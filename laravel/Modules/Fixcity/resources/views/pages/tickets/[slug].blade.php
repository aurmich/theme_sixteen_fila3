<?php

use Modules\Fixcity\Models\Ticket;
use Illuminate\Support\Arr;
use Illuminate\View\View;
use Modules\Fixcity\Enums\TicketStatusEnum;
use Modules\Fixcity\Enums\TicketPriorityEnum;
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Illuminate\Support\Facades\Http;
use function Laravel\Folio\{withTrashed, middleware, name, render};

withTrashed();
name('ticket.view');
middleware(['auth']);
=======
>>>>>>> origin/master
use function Laravel\Folio\{withTrashed,middleware, name,render};

withTrashed();
name('ticket.view');
//middleware(['auth', 'verified']);
<<<<<<< HEAD
=======
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master

render(function (View $view, string $slug) {
    $ticket = Ticket::firstWhere(['slug' => $slug]);

<<<<<<< HEAD
=======
<<<<<<< HEAD
    if ($ticket == null) {
        return view('pub_theme::404');
    }

    $status=TicketStatusEnum::from($ticket->status);
    $medias = $ticket->getMedia('ticket');

    $address = 'N/A';
    if ($ticket->latitude && $ticket->longitude) {
        $response = Http::withHeaders([
            'User-Agent' => 'YourAppName/1.0 (your@email.com)'
        ])->get("https://nominatim.openstreetmap.org/reverse", [
            'lat' => $ticket->latitude,
            'lon' => $ticket->longitude,
            'format' => 'json',
            'accept-language' => 'it' // Change to your preferred language
        ]);

        if ($response->successful()) {
            $data = $response->json();
            $address = $data['display_name'] ?? 'N/A';
        }
    }

    return $view->with([
        'ticket' => $ticket,
        'medias' => $medias,
        'address' => $address,
        'user' => auth()->user(),
        'status' => $status
=======
>>>>>>> origin/master
    if($ticket == null){
      return view('pub_theme::404');
    }

    $medias = $ticket->getMedia('ticket');

    //$statuses = TicketStatusEnum::getArrayValueLabelIcon();
    //$priorities = TicketPriorityEnum::getArrayValueLabelIcon();
    //$priority = $ticket->priority;
    if($ticket->status==""){
        $ticket->setStatus(TicketStatusEnum::PENDING->value);
        $up=tap($ticket)->update([
            'status'=>TicketStatusEnum::PENDING
        ]);


    }

    // $status=TicketStatusEnum::from($ticket->status);


    $status = $ticket->status instanceof TicketStatusEnum 
        ? $ticket->status 
        : ($ticket->status !== null 
            ? TicketStatusEnum::from($ticket->status) 
            : TicketStatusEnum::PENDING);



    $statuses = $ticket->statuses;

    return $view->with([
        'ticket' => $ticket,
        'medias' => $medias,
        'status' => $status,
        'statuses' => $statuses,
        //'priorities' => $priorities,
        //'priority_ticket' => $ticket->priority
<<<<<<< HEAD
=======
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
    ]);
});


?>
<x-layouts.marketing>
<<<<<<< HEAD
    <x-comments::styles />
=======
<<<<<<< HEAD
=======
    <x-comments::styles />
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
    <x-ui.marketing.breadcrumbs :crumbs="[
        [
            'href' => '/tickets',
            'text' => 'Tickets'
        ],
        [
            'text' => $ticket->name
        ]
    ]" />

<<<<<<< HEAD
=======
<<<<<<< HEAD
    <div class="container w-full md:w-1/2 mx-auto mt-4 px-2">
        <div class="pb-6">
            <h1 class="text-3xl md:text-6xl font-bold">Segnalazione disservizio</h1>
        </div>

        <div class="bg-gray-100 border-l-4 border-yellow-500 p-4">
            <strong class="text-yellow-500">ATTENZIONE</strong>
            <p>Le informazioni che hai fornito hanno valore di dichiarazione. Verifica che siano corrette.</p>
        </div>

        <div class="py-4">
            <h1 class="text-2xl md:text-4xl font-bold">Segnalazione</h1>
        </div>

        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
            <h2 class="text-lg font-semibold pb-2">Disservizio</h2>
            <div class="bg-white p-4 rounded-lg shadow-sm">
                <div class="mb-4">
                    <p class="font-semibold">Indirizzo</p>
                    <p class="text-gray-700">{{ $address }}</p>
                    <hr class="my-2 border-gray-300">
                </div>

                <div class="mb-4">
                    <p class="font-semibold">Tipo di disservizio</p>
                    <p class="text-gray-700">{{ $ticket->type?->getLabel() ?? 'N/A' }}</p>
                    <hr class="my-2 border-gray-300">
                </div>

                <div class="mb-4">
                    <p class="font-semibold">Titolo</p>
                    <p class="text-gray-700">{{ $ticket->name ?? 'N/A' }}</p>
                    <hr class="my-2 border-gray-300">
                </div>

                <div class="mb-4">
                    <p class="font-semibold">Stato</p>
                    <p class="text-gray-700">{{ $status->getLabel() ?? 'N/A' }}</p>
                    <hr class="my-2 border-gray-300">
                </div>

                <div class="mb-4">
                    <p class="font-semibold">Dettagli</p>
                    <p class="text-gray-700">{{ $ticket->content ?? 'N/A' }}</p>
                    <hr class="my-2 border-gray-300">
                </div>

                <div class="mb-4">
                    <p class="font-semibold">Immagini</p>
                    @if($medias->isNotEmpty())
                    @foreach($medias as $media)
                    <img src="{{ $media->getFullUrl() }}" alt="Immagine del disservizio" class="rounded-md w-full max-w-md">
                    @endforeach
                    @else
                    <p class="text-gray-700">Nessuna immagine disponibile.</p>
                    @endif
                    <hr class="my-2 border-gray-300">
                </div>
            </div>
        </div>

        <div class="py-4">
            <h1 class="text-2xl md:text-4xl font-bold">Dati Generali</h1>
        </div>

        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
            <h2 class="text-lg font-semibold pb-2">Autore della segnalazione</h2>
            <div class="bg-white p-4 rounded-lg shadow-sm pb-3">
                <div class="mb-4">
                    <p class="font-semibold text-3xl">{{ $user->name }}</p>
                    <hr class="my-2 border-gray-300">
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-sm">
                <div class="mb-4">
                    <p class="font-semibold text-3xl">Contatti</p>
                    <hr class="my-2 border-gray-300">
                </div>
                <div class="mb-4">
                    <p class="font-semibold">Email</p>
                    <p class="text-gray-700">{{ $user->email }}</p>
                    <hr class="my-2 border-gray-300">
                </div>
            </div>
        </div>
    </div>
</x-layouts.marketing>

</html>
=======
>>>>>>> origin/master
    <article class="container max-w-6xl p-4 mx-auto space-y-8">

        <section>
            <div class="relative flex w-full gap-6 pb-4 overflow-x-auto snap-x">
                @foreach($medias as $media)
                    <div class="snap-center shrink-0">
                        <img class="object-cover h-64 rounded shadow-lg aspect-video" 
                            src="{{ $media->getUrl() }}" />
                    </div>
                @endforeach
            </div>
        </section>

        <div class="grid lg:grid-cols-3">
            <div class="space-y-6 lg:col-span-2">
                <section class="flex flex-col justify-center space-y-2">
                    <div>
                        <p>Di <strong>{{ $ticket->creator->name }}</strong> il {{ $ticket->created_at->isoFormat('LLL') }}</p>
                    </div>
                    <h1 class="text-4xl font-bold heading md:text-6xl dark:text-white md:leading-tight">
                        {{ $ticket->name }}
                    </h1>
                    <div class="flex space-x-4">
                        <div class="flex items-center px-4 py-2 space-x-1 text-sm text-orange-600 border rounded-full bg-orange-500/20 border-orange-500/30">
                            <x-filament::icon icon="{{ $ticket->priority->getIcon() }}" class="size-4" />
                            <span>Priorità</span>
                            <span class="font-semibold"> {{ $ticket->priority->getLabel() }}</span>
                        </div>
                        <div class="flex items-center px-4 py-2 space-x-1 text-sm text-blue-600 border rounded-full bg-blue-500/20 border-blue-500/30">
                            <x-filament::icon icon="{{ $status->getIcon() }}" class="size-4" />
                            <span>Stato</span>
                            <span class="font-semibold"> {{ $status->getLabel() }}</span>
                        </div>
                    </div>
                </section>

                <section class="prose-sm prose md:prose-lg">
                    {!! $ticket->content !!}
                </section>

                @auth
                    <livewire:comments :model="$ticket"/>
                @endauth

                @guest
                    <livewire:comments read-only :model="$ticket"/>

                    <p class="comments-no-comment-yet">
                        {{ __('comment::txt.log-in-for-comment') }}
                    </p>
                @endguest


            </div>
            <section class="space-y-4">
                <h2 class="text-2xl font-bold">Timeline</h2>
                <div>
                    <ol class="relative border-gray-200 border-s dark:border-gray-700">
                        @foreach($statuses as $status)
                            <li class="mb-10 ms-4">
                                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                                <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">{{ $status->created_at->isoFormat('LLL') }}</time>
<<<<<<< HEAD
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ __('fixcity::enums.'.$status->name.'.label') }}</h3>
=======
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ __('ticket::enums.'.$status->name.'.label') }}</h3>
>>>>>>> origin/master
                                <p class="text-base font-normal text-gray-500 dark:text-gray-400">{{ $status->reason }}</p>
                            </li>
                        @endforeach
                        {{-- <li class="mb-10 ms-4">
                            <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                            <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">March 2024</time>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Expedita fugiat quos! Facere, maxime?</h3>
                            <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Rerum quod voluptatum similique architecto alias temporibus delectus sunt explicabo! Sint!</p>
                            <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">
                                <span>Learn more</span>
                                <x-filament::icon icon="heroicon-o-arrow-right" class="size-4" />
                            </a>
                        </li>
                        <li class="mb-10 ms-4">
                            <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                            <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Jan 2024</time>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Odit unde aspernatur corporis recusandae.</h3>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Obcaecati, unde nobis perspiciatis doloribus natus sed deleniti sapiente error suscipit voluptates esse dolor dicta non officia ipsa asperiores eum fugit repellat.</p>
                        </li> --}}
                    </ol>
                </div>
            </section>
        </div>

    </article>
</x-layouts.marketing>
<<<<<<< HEAD
=======
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
