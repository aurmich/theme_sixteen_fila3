<?php

declare(strict_types=1);

namespace Modules\Fixcity\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Filament\Facades\Filament;
use Filament\Resources\Resource;
use Dotswan\MapPicker\Fields\Map;
use Modules\Fixcity\Models\Ticket;
use Modules\Fixcity\Enums\TicketTypeEnum;
use Modules\Fixcity\Enums\TicketStatusEnum;
use Modules\Fixcity\Enums\TicketPriorityEnum;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Fixcity\Rules\FilterCoordinatesInRadius;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Modules\Fixcity\Filament\Resources\TicketResource\Pages;

class TicketResource extends Resource
{
    protected static ?string $model = Ticket::class;

    public static function getFormSchema(): array
    {
        return [
            Forms\Components\Section::make()
                ->schema([
                    // Ticket Name
                    Forms\Components\TextInput::make('name')
                        ->hiddenLabel()
<<<<<<< HEAD
<<<<<<< HEAD
                        ->placeholder(__('fixcity::ticket.title.placeholder') . '*')
=======
                        ->placeholder(__('ticket::ticket.title.placeholder') . '*')
>>>>>>> origin/master
=======
                        ->placeholder(__('ticket::ticket.title.placeholder') . '*')
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
                        ->columnSpanFull() // Occupa tutta la larghezza disponibile
                        ->required()
                        ->maxLength(255)
                        ->afterStateUpdated(function (Set $set, Get $get, string $state) {
                            if ($get('slug')) {
                                return;
                            }
                            $set('slug', Str::slug($state));
                        })
                        ->extraAttributes([
                            'style' => ''
                        ]),

                    // Slug
                    Forms\Components\TextInput::make('slug')
                        ->columnSpanFull() // Anche lo slug occupa tutta la larghezza disponibile
                        ->required()
                        ->hidden()
                        ->extraAttributes(['class' => 'max-w-full', 'style' => 'padding: 0; margin: 0;']), // Rimozione del padding e margini

                    // Ticket Type
                    Forms\Components\Select::make('type')
                        ->hiddenLabel()
<<<<<<< HEAD
<<<<<<< HEAD
                        ->placeholder(__('fixcity::ticket.type.placeholder') . '*')
=======
                        ->placeholder(__('ticket::ticket.type.placeholder') . '*')
>>>>>>> origin/master
=======
                        ->placeholder(__('ticket::ticket.type.placeholder') . '*')
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
                        ->searchable()
                        ->options(TicketTypeEnum::class)
                        ->columnSpanFull(),

                    // Ticket Priority
                    Forms\Components\Select::make('priority')
                        ->hiddenLabel()
<<<<<<< HEAD
<<<<<<< HEAD
                        ->placeholder(__('fixcity::ticket.priorities.label'))
=======
                        ->placeholder(__('ticket::ticket.priorities.label'))
>>>>>>> origin/master
=======
                        ->placeholder(__('ticket::ticket.priorities.label'))
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
                        ->searchable()
                        ->options(TicketPriorityEnum::class)
                        ->default(TicketPriorityEnum::default())
                        ->columnSpanFull(),

                    // Ticket Content (RichEditor)
                    // Forms\Components\RichEditor::make('content')
<<<<<<< HEAD
<<<<<<< HEAD
                    //     ->label(__('fixcity::ticket.content.label'))
=======
                    //     ->label(__('ticket::ticket.content.label'))
>>>>>>> origin/master
=======
                    //     ->label(__('ticket::ticket.content.label'))
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
                    //     ->required()
                    //     ->columnSpanFull()
                    //     ->extraAttributes(['class' => 'max-w-full', 'style' => 'padding: 0; margin: 0;']), // Rimozione del padding e margini


                    Forms\Components\Textarea::make('content')
                        ->hiddenLabel()
<<<<<<< HEAD
<<<<<<< HEAD
                        ->placeholder(__('fixcity::ticket.content.placeholder') . '**')
                        ->rows(2)
                        ->cols(10)
                        ->helperText(__('fixcity::ticket.content.helper_text')),
=======
=======
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
                        ->placeholder(__('ticket::ticket.content.placeholder') . '**')
                        ->rows(2)
                        ->cols(10)
                        ->helperText(__('ticket::ticket.content.helper_text')),
<<<<<<< HEAD
>>>>>>> origin/master
=======
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)


                    // Hidden Latitude and Longitude
                    Forms\Components\TextInput::make('latitude')
                        ->hidden(
                            function () {
                                Assert::notNull(Filament::auth()->user());
                                Assert::notNull(Filament::auth()->user()->profile);

                                return Filament::auth()->user()->profile->isSuperAdmin() ? false : true;
                            }
                        )
                        ->readOnly(),
                    Forms\Components\TextInput::make('longitude')
                        ->hidden(
                            function () {
                                Assert::notNull(Filament::auth()->user());
                                Assert::notNull(Filament::auth()->user()->profile);

                                return Filament::auth()->user()->profile->isSuperAdmin() ? false : true;
                            }
                        )
                        ->readOnly(),

                    // Map Section
                    // NOTA BENE, ASSICURATI DI ABILITARE LA LOCALIZZAZIONE NEL BROWSER
                    Map::make('location')
<<<<<<< HEAD
<<<<<<< HEAD
                        ->label(__('fixcity::ticket.your-location'))
=======
                        ->label(__('ticket::ticket.your-location'))
>>>>>>> origin/master
=======
                        ->label(__('ticket::ticket.your-location'))
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
                        ->columnSpanFull() // Occupare l'intera larghezza disponibile
                        ->default([
                            'lat' => 40.4168,
                            'lng' => -3.7038,
                        ])
                        ->afterStateUpdated(function (Set $set, ?array $state): void {
                            if (is_array($state)) {
                                $set('latitude', $state['lat']);
                                $set('longitude', $state['lng']);
                            }
                        })
                        ->afterStateHydrated(function ($state, $record, Set $set): void {
                            $set('location', ['lat' => $record?->latitude, 'lng' => $record?->longitude]);
                        })
                        ->rules([new FilterCoordinatesInRadius()])
                        ->liveLocation()
                        ->showMarker(false) // https://github.com/dotswan/filament-map-picker/pull/51
                        ->markerColor('#22c55eff')
                        ->showFullscreenControl()
                        ->showZoomControl()
                        ->draggable()
                        ->tilesUrl('https://tile.openstreetmap.de/{z}/{x}/{y}.png')
                        ->zoom(15)
                        ->detectRetina()
                        ->showMyLocationButton()
                        // ->extraAttributes(['class' => 'max-w-full', 'style' => 'min-height: 300px; padding: 0; margin: 0;'])
                        ,

                    // Image Upload
                    // SpatieMediaLibraryFileUpload::make('images')
<<<<<<< HEAD
<<<<<<< HEAD
                    //     ->label(__('fixcity::ticket.insert-images'))
=======
                    //     ->label(__('ticket::ticket.insert-images'))
>>>>>>> origin/master
=======
                    //     ->label(__('ticket::ticket.insert-images'))
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
                    //     ->collection('ticket')
                    //     ->directory('ticket')
                    //     ->disk('uploads')
                    //     ->responsiveImages()
                    //     ->multiple()
                    //     ->required()
                    //     ->columnSpanFull()
                    //     // ->extraAttributes(['class' => 'max-w-full', 'style' => 'padding: 0; margin: 0;'])
                    //     ,


                    SpatieMediaLibraryFileUpload::make('images')
<<<<<<< HEAD
<<<<<<< HEAD
                        ->label(__('fixcity::ticket.insert-images'))
=======
                        ->label(__('ticket::ticket.insert-images'))
>>>>>>> origin/master
=======
                        ->label(__('ticket::ticket.insert-images'))
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
                        ->collection('ticket')
                        ->directory('ticket')
                        ->disk('uploads')
                        ->responsiveImages()
                        ->multiple()
                        ->required()
                        ->maxFiles(5) // Limita il numero di file caricabili
                        ->maxSize(10240) // Imposta un limite massimo di 10MB per file
                        ->acceptedFileTypes(['image/png', 'image/jpeg', 'image/jpg']) // Accetta solo immagini
                        ->columnSpanFull()
                        ,

                ])
                ->columns(1) // Imposta il layout su una colonna
                ->extraAttributes(['class' => 'w-full max-w-full mx-auto', 'style' => 'padding: 0; margin: 0; !important;']), // Rimozione padding e margine
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTickets::route('/'),
            'create' => Pages\CreateTicket::route('/create'),
            'edit' => Pages\EditTicket::route('/{record}/edit'),
            'view' => Pages\ViewTicket::route('/{record}'),
        ];
    }
}
