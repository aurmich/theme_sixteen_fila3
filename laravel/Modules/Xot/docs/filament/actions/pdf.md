---
title: Filament Action PDF
description: Azioni Filament per creare PDF
extends: _layouts.documentation
section: content
---
 


# Metodo 1

<<<<<<< HEAD
 file: app/Filament/Resources/OrderResource.php
=======
 file: app/Filament/resources/OrderResource.php
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
```php

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Blade;

class OrderResource extends \Modules\Xot\Filament\Resources\XotBaseResource
{
    // ...
 
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // ...
            ])
            ->filters([
                // ...
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('pdf') 
                    
                    ->color('success')
                    ->icon('heroicon-s-download')
                    ->action(function (Model $record) {
                        return response()->streamDownload(function () use ($record) {
                            echo Pdf::loadHtml(
                                Blade::render('pdf', ['record' => $record])
                            )->stream();
                        }, $record->number . '.pdf');
                    }), 
            ])
            ->bulkActions([
                // ...
            ]);
    }
 
    // ...
}
```

# Metodo 2 Passando per un controller 

 file: routes/web.php

```php
use App\Http\Livewire\Form;
use App\Http\Controllers\PdfController;
 
\Illuminate\Support\Facades\Route::get('form', Form::class);
 
Route::get('pdf/{order}', PdfController::class)->name('pdf'); 
 ```

 file: app/Http/Controllers/PdfController.php
```php
use App\Models\Shop\Order;
use Barryvdh\DomPDF\Facade\Pdf;
 
class PdfController extends Controller
{
    public function __invoke(Order $order)
    {
        return Pdf::loadView('pdf', ['record' => $order])
            ->download($order->number. '.pdf');
    }
}
 ```

<<<<<<< HEAD
 file: app/Filament/Resources/OrderResource.php
=======
 file: app/Filament/resources/OrderResource.php
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
 ```php
 class OrderResource extends \Modules\Xot\Filament\Resources\XotBaseResource
{
    // ...
 
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // ...
            ])
            ->filters([
                // ...
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('pdf') 
                    
                    ->color('success')
                    ->icon('heroicon-o-document-arrow-down')
                    ->url(fn (Order $record) => route('pdf', $record))
                    ->openUrlInNewTab(), 
            ])
            ->bulkActions([
                // ...
            ]);
    }
 
    // ...
}
 ```
