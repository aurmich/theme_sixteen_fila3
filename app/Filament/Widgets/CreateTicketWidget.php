<?php

/**
 * @see https://filamentphp.com/docs/3.x/forms/adding-a-form-to-a-livewire-component#adding-the-form
 */

declare(strict_types=1);

namespace Modules\Fixcity\Filament\Widgets;

use Filament\Forms\ComponentContainer;
use Filament\Forms\Components\Actions;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Widgets\Widget as BaseWidget;
use Modules\Xot\Filament\Widgets\XotBaseWidget;
use Modules\Fixcity\Events\TicketCreatedEvent;
use Modules\Fixcity\Filament\Resources\TicketResource;
use Modules\Fixcity\Models\Ticket;
use Filament\Forms\Components\ViewField;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Checkbox;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Blade;

/**
 * @property ComponentContainer $form
 */
class CreateTicketWidget extends BaseWidget implements HasForms
{
    use InteractsWithForms;
    
    protected static string $view = 'fixcity::filament.widgets.create-ticket';

    protected int|string|array $columnSpan = 'full';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function getFormSchema(): array
    {
        return [
            Wizard::make([
                Step::make('step-1')
                    ->label(__('fixcity::ticket.steps.auth.label'))
                    ->icon('heroicon-o-shield-check')
                    ->description(__('fixcity::ticket.steps.auth.description'))
                    ->schema([
                        RichEditor::make('privacy_notice')
                            ->label('')
                            ->default(__('fixcity::ticket.fields.privacy_notice.content'))
                            ->disabled()
                            ->extraAttributes(['class' => 'border-0 shadow-none !p-0 !bg-transparent']),

                        Checkbox::make('accept_terms')
                            ->label(__('fixcity::ticket.fields.accept_terms.label'))
                            ->helperText(__('fixcity::ticket.fields.accept_terms.helper'))
                            ->required()
                            ->default(false)
                            ->extraAttributes(['class' => 'text-green-500 text-lg checked:bg-green-500 checked:hover:bg-green-500 focus:ring-green-500'])
                            ->rules(['accepted']),
                    ])
                    ->afterValidation(function($state) {
                        if (!$state['accept_terms']) {
                            $this->addError('data.accept_terms', __('fixcity::ticket.validation.accept_terms'));
                            $this->stop();
                        }
                    }),

                Step::make('step-2')
                    ->label(__('fixcity::ticket.steps.data.label'))
                    ->icon('heroicon-o-document-text')
                    ->description(__('fixcity::ticket.steps.data.description'))
                    ->schema([
                        Placeholder::make('')
                            ->content(new HtmlString('<h1 class="subtitle text-4xl font-bold mb-4">' . __('fixcity::ticket.fields.issue.label') . '</h1>')),
                        ...TicketResource::getFormSchema(),
                    ]),
            ])
                ->nextAction(
                    fn (Action $action) => $action
                        ->label(__('fixcity::ticket.actions.next.label'))
                        ->icon('heroicon-m-arrow-right')
                        ->color('primary')
                        ->size('xl')
                        ->extraAttributes(['class' => 'px-8 py-4 text-lg font-bold w-96 -ml-6'])
                )
                ->submitAction(new HtmlString(Blade::render(<<<BLADE
                    <button
                        type="submit"
                        class="fi-btn relative grid-flow-col items-center justify-center font-semibold outline-none transition duration-75 focus-visible:ring-2 rounded-lg fi-btn-size-md gap-1.5 px-8 py-4 text-md font-bold w-64 bg-white text-green-600 border-2 border-green-600 hover:bg-green-50"
                    >
                        {{ __('fixcity::ticket.actions.save.label') }}
                    </button>
                BLADE)))
                ->columnSpanFull()
                ->extraAttributes([
                    'class' => 'w-full max-w-full mx-auto',
                    'navigationContainerAttributes' => 'class="justify-start"'
                ]),
        ];
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema($this->getFormSchema())
            ->statePath('data');
    }

    public function create(): void
    {
        // Ottieni i dati dal form
        $data = $this->form->getState();
    
        // Crea il ticket senza le immagini
        $ticket = Ticket::create($data);
    
        // Salva le immagini usando saveRelationships()
        $this->form->model($ticket)->saveRelationships();
    
        // Dispatch dell'evento
        TicketCreatedEvent::dispatch($ticket);
    
        // Redirect alla pagina principale
        redirect('/');
    }
    
}
