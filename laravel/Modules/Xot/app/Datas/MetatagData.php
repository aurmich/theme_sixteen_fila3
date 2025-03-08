<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

use Filament\Support\Colors\Color;
use Illuminate\Support\Arr;
use Livewire\Wireable;
use Modules\Tenant\Services\TenantService;
use Spatie\LaravelData\Concerns\WireableData;
use Spatie\LaravelData\Data;

/**
 * Undocumented class.
 */
class MetatagData extends Data implements Wireable
{
    use WireableData;
<<<<<<< HEAD

    public string $title;

    // ' => 'EWall',
    public string $sitename;

    // ' => 'the best place',
    public string $subtitle;

    // ' => 'Find restaurants, specials, and coupons for free',
    public ?string $generator = 'xot';

    // ' => '',
=======
<<<<<<< HEAD

=======
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
    public string $title;

    public string $sitename;

    public string $subtitle;

<<<<<<< HEAD
=======
    // ' => 'Find restaurants, specials, and coupons for free',
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
    public ?string $generator = 'xot';

>>>>>>> origin/master
    public string $charset = 'UTF-8';

    public ?string $author = 'xot';

<<<<<<< HEAD
=======
<<<<<<< HEAD
    public ?string $description;

=======
>>>>>>> origin/master
    // ' => '',
    public ?string $description;

    // ' => '',
<<<<<<< HEAD
    public ?string $keywords;

    // ' => '',
    public string $nome_regione;

    // ' => '',
    public string $nome_comune;

    // ' => '',
    public string $site_title;

    // ' => '',
    public string $logo;

    // ' => 'ewall::img/logo.png',
    public string $logo_square;

    // ' => 'ewall::img/logo.png',
=======
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
    public ?string $keywords;

    public string $nome_regione;

    public string $nome_comune;

    public string $site_title;

    public string $logo;

    public string $logo_square;

>>>>>>> origin/master
    public string $logo_header;

    public string $logo_header_dark;

<<<<<<< HEAD
    public ?string $logo_height = '2em';

    // = 'xot::img/logo.png';
    public string $logo_footer;

    // ' => 'ewall::img/logo.png',
    public string $logo_alt;

    // ' => 'Logo',
    public string $hide_megamenu;

    // ' => false,
    public string $hero_type;

    // ' => 'with_megamenu_bottom',
    public string $facebook_href;

    // ' => 'aa',
    public string $twitter_href;

    // ' => '',
    public string $youtube_href;

    // ' => '',
    public string $fastlink;

    // ' => false,
    public string $color_primary;

    // ' => '#0071b0',
    public string $color_title;

    // ' => 'white',
    public string $color_megamenu;

    // ' => '#d60021',
    public string $color_hamburger;

    // ' => '#000',
    public string $color_banner;

    // ' => '#000',
=======
<<<<<<< HEAD
    public string $logo_height = '2em';
=======
    public ?string $logo_height = '2em';
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')

    public string $logo_footer;

    public string $logo_alt;

    public string $hide_megamenu;

    public string $hero_type;

    public string $facebook_href;

    public string $twitter_href;

    public string $youtube_href;

    public string $fastlink;

    public string $color_primary;

    public string $color_title;

    public string $color_megamenu;

    public string $color_hamburger;

    public string $color_banner;

>>>>>>> origin/master
    public string $favicon = '/favicon.ico';

    public array $colors = [];

    private static ?self $instance = null;

    public static function make(): self
    {
        if (! self::$instance) {
            $data = TenantService::getConfig('metatag');
            self::$instance = self::from($data);
        }

        return self::$instance;
    }

    public function getLogoHeader(): string
    {
        return asset(app(\Modules\Xot\Actions\File\AssetAction::class)->execute($this->logo_header));
    }

    public function getLogoHeaderDark(): string
    {
        return asset(app(\Modules\Xot\Actions\File\AssetAction::class)->execute($this->logo_header_dark));
    }

    public function getLogoHeight(): string
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> origin/master
        if (null == $this->logo_height) {
            $this->logo_height = '2em';
        }

<<<<<<< HEAD
=======
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
        return $this->logo_height;
    }

    public function getFavicon(): string
    {
        return app(\Modules\Xot\Actions\File\AssetAction::class)->execute($this->favicon);
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
    /**
     * @return array<array<string>|string>
     */
=======
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
    public function getFilamentColors(): array
    {
        return [
            'danger' => 'danger',
            'gray' => 'gray',
            'info' => 'info',
            'primary' => 'primary',
            'success' => 'success',
            'warning' => 'warning',
        ];
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> origin/master
    public function getAllColors(): array
    {
        $colors = array_keys(Color::all());
        $colors = array_combine($colors, $colors);

        return $colors;
    }

    public function getColors(): array
    {
        $mapped = Arr::mapWithKeys(
            $this->colors,
            function (array $item, int|string $key): array {
                $k = $item['key'];
                $v = $item['color'];
                if ('custom' != $v) {
                    $v = Arr::get(Color::all(), $v);
                }
                if ('custom' == $v) {
                    $v = Color::hex($item['hex']);
                }

                return [$k => $v];
            }
        );

        return $mapped;
        /*
        return [
<<<<<<< HEAD
            // 'primary' => Color::Amber,
            'primary' => Color::Blue,
        ];
        */
    }
=======
            'danger' => 'danger',
            'gray' => 'gray',
            'info' => 'info',
            'primary' => 'primary',
            'success' => 'success',
            'warning' => 'warning',
        ];
        */
    }

>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
    /**
     * @return array<array<string>|string>
     */
    public function getAllColors(): array
    {
        $colors = array_keys(Color::all());
        $colors = array_combine($colors, $colors);

        return $colors;
    }

    /**
     * @return array<string, array<string>|string>
     */
    public function getColors(): array
    {
        /** @var array<string, array<string>|string> $mapped */
        $mapped = Arr::mapWithKeys(
            $this->colors,
            function (mixed $item, mixed $key): array {
                if (! is_array($item)) {
                    return [(string) $key => ''];
                }

                $keyStr = is_string($item['key'] ?? null) ? $item['key'] : (string) $key;
                $colorValue = is_string($item['color'] ?? null) ? $item['color'] : '';

                $value = match (true) {
                    'custom' === $colorValue && is_string($item['hex'] ?? null) => Color::hex($item['hex']),
                    'custom' !== $colorValue => Arr::get(Color::all(), $colorValue, ''),
                    default => '',
                };

                return [$keyStr => $value];
            }
        );

        return $mapped;
    }
<<<<<<< HEAD
=======

    public static function fromMeta(array $meta): self
    {
        return new self(
            title: $meta['title'] ?? null,
            description: $meta['description'] ?? null,
            image: $meta['image'] ?? null,
            url: $meta['url'] ?? null,
            type: $meta['type'] ?? 'website',
            site_name: $meta['site_name'] ?? null,
            locale: $meta['locale'] ?? null,
            custom: $meta['custom'] ?? [],
        );
    }
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
}
