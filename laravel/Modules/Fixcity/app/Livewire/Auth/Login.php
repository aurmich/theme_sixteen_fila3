<?php

namespace Modules\Fixcity\Livewire\Auth;

<<<<<<< HEAD
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
=======
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Form;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Filament\Notifications\Notification;
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)

class Login extends Component
{
    public ?array $data = [];

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('email')
                    ->email()
                    ->required()
                    ->label(__('Email'))
                    ->placeholder(__('Inserisci la tua email'))
                    ->autofocus(),
<<<<<<< HEAD

=======
                    
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
                TextInput::make('password')
                    ->password()
                    ->required()
                    ->label(__('Password'))
                    ->placeholder(__('Inserisci la tua password')),
<<<<<<< HEAD

=======
                    
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
                Checkbox::make('remember')
                    ->label(__('Ricordami')),
            ])
            ->statePath('data');
    }

    public function authenticate()
    {
        $validated = $this->form->getState();

        if (Auth::attempt($validated)) {
            session()->regenerate();
<<<<<<< HEAD

=======
            
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
            Notification::make()
                ->title(__('Login effettuato con successo'))
                ->success()
                ->send();
<<<<<<< HEAD

=======
            
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
            return redirect()->intended();
        }

        $this->addError('email', __('Le credenziali fornite non sono corrette.'));
<<<<<<< HEAD

=======
        
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
        Notification::make()
            ->title(__('Le credenziali fornite non sono corrette'))
            ->danger()
            ->send();
    }

    public function render()
    {
        return view('pub_theme::livewire.auth.login');
    }
<<<<<<< HEAD
}
=======
} 
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
