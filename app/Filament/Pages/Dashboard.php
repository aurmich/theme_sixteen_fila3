<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

namespace Modules\Job\Filament\Pages;
=======
declare(strict_types=1);

namespace Modules\Media\Filament\Pages;
>>>>>>> 38c1507055 (Squashed 'laravel/Modules/Media/' content from commit 4548be09a)
=======
declare(strict_types=1);

namespace Modules\Notify\Filament\Pages;
>>>>>>> 946fdba366 (Squashed 'laravel/Modules/Notify/' content from commit 6aac1e028)
=======
declare(strict_types=1);

namespace Modules\Tenant\Filament\Pages;
>>>>>>> 1c8d7d06e0 (Squashed 'laravel/Modules/Tenant/' content from commit be731f696)

use Filament\Pages\Page;
=======
declare(strict_types=1);

namespace Modules\UI\Filament\Pages;

use Filament\Pages\Page;
use Modules\UI\Filament\Widgets;
>>>>>>> 660b6fffd2 (Squashed 'laravel/Modules/UI/' content from commit b14fdc133)
=======
declare(strict_types=1);

namespace Modules\Activity\Filament\Pages;

use Filament\Pages\Page;
>>>>>>> a27ba4e75b (Squashed 'laravel/Modules/Activity/' content from commit 05cc09d7b)

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected static string $view = 'job::filament.pages.dashboard';

    // public function mount(): void {
    //     $user = auth()->user();
    //     if(!$user->hasRole('super-admin')){
    //         redirect('/admin');
    //     }
    // }
=======
/**
 * @see https://medium.com/@laravelprotips/filament-streamline-multiple-widgets-with-one-dynamic-livewire-filter-ed05c978a97f
 */

declare(strict_types=1);

namespace Modules\User\Filament\Pages;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Pages\Dashboard as BaseBashboard;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;
use Filament\Widgets\Widget;
use Filament\Widgets\WidgetConfiguration;
use Modules\User\Filament\Widgets;

class Dashboard extends BaseBashboard
{
    use HasFiltersForm;

    protected static ?string $navigationIcon = 'heroicon-o-home';
    // protected static string $routePath = 'finance';
    // protected static ?string $title = 'Finance dashboard';
    // protected static ?int $navigationSort = 15;

    // protected static string $view = 'user::filament.pages.dashboard';

    /**
     * @return array<class-string<Widget>|WidgetConfiguration>
     */
    public function getWidgets(): array
    {
        return [
            Widgets\UsersChartWidget::make(['chart_id' => 'bb']),
            // Widgets\UsersChartWidget::make(['chart_id' => 'aa']),
            Widgets\RecentLoginsWidget::class,
        ];
    }

    public function filtersForm(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        DatePicker::make('startDate')
                            ->native(false)
                        // ->maxDate(fn (Get $get) => $get('endDate') ?: now()),
                        ,
                        DatePicker::make('endDate')
                            ->native(false)
                        // ->minDate(fn (Get $get) => $get('startDate') ?: now())
                        // ->maxDate(now()),
                        ,
                    ])
                    ->columns(3),
            ]);
    }
>>>>>>> 3f813922dc (Squashed 'laravel/Modules/User/' content from commit edfbd6fa7)
=======
    protected static string $view = 'media::filament.pages.dashboard';
>>>>>>> 38c1507055 (Squashed 'laravel/Modules/Media/' content from commit 4548be09a)
=======
    protected static string $view = 'notify::filament.pages.dashboard';

    public function mount(): void
    {
        /*
        $user = auth()->user();
        if (! $user?->hasRole('super-admin')) {
            redirect('/admin');
        }
        */
    }
>>>>>>> 946fdba366 (Squashed 'laravel/Modules/Notify/' content from commit 6aac1e028)
=======
    protected static string $view = 'tenant::filament.pages.dashboard';
>>>>>>> 1c8d7d06e0 (Squashed 'laravel/Modules/Tenant/' content from commit be731f696)
=======
    protected static string $view = 'ui::filament.pages.dashboard';

    protected function getHeaderWidgets(): array
    {
        $widgets = [
            [
                'class' => Widgets\TestChartWidget::class,
                'properties' => [
                    'qid' => 5,
                    'max_height' => '900px',
                    'type' => 'pie',
                ],
            ],
            [
                'class' => Widgets\TestChartWidget::class,
                'properties' => [
                    'qid' => 7,
                    'type' => 'bar',
                ],
            ],
            [
                'class' => Widgets\TestChartWidget::class,
                'properties' => [
                    'qid' => 9,
                    'type' => 'bar',
                ],
            ],
        ];

        return [
            // Widgets\TestChartWidget::make(['qid' => 5]),
            // Widgets\TestChartWidget::make(['qid' => 6]),
            // Widgets\StatsOverviewWidget::class,

            Widgets\StatWithIconWidget::make(['label' => 'Unique views', 'value' => '192.1k']),
            Widgets\TestWidget::make(['widgets' => $widgets]),
            Widgets\TestWidget::make(['widgets' => $widgets]),
            Widgets\TestWidget::make(['widgets' => $widgets]),
            Widgets\TestWidget::make(['widgets' => $widgets]),
        ];
    }
>>>>>>> 660b6fffd2 (Squashed 'laravel/Modules/UI/' content from commit b14fdc133)
=======
    protected static string $view = 'activity::filament.pages.dashboard';

    // public function mount(): void
    // {
    //     // $user = auth()->user();
    //     // if(!$user->hasRole('super-admin')){
    //     //     redirect('/admin');
    //     // }
    //     ActivityEvent::dispatch();
    // }
>>>>>>> a27ba4e75b (Squashed 'laravel/Modules/Activity/' content from commit 05cc09d7b)
=======
declare(strict_types=1);

namespace Modules\Gdpr\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    // protected static string $view = 'gdpr::filament.pages.dashboard';
>>>>>>> ecd8d46956 (Squashed 'laravel/Modules/Gdpr/' content from commit d30cea3b2)
}
