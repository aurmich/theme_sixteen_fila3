<?php

declare(strict_types=1);

namespace Modules\Cms\View\Composers;

use Modules\Cms\Models\Menu;

class ThemeComposer
{
    /**
     * Undocumented function.
     *
     * @return array|null
     */
    public function getMenu(string $menu_name)
    {
        $menu = Menu::firstOrCreate(['title' => $menu_name]);

        return $menu->items ?? [];
    }

    public function getMenuUrl(array $menu): string
    {
        if(empty($menu)){
            return '#';
        }
        $lang = app()->getLocale();
        if($menu['type'] == 'internal'){
            return route('page_slug.show', ['lang'=>$lang,'page_slug' => $menu['url'] ]);
        }
        if($menu['type'] == 'external'){
            return $menu['url'];
        }
        if($menu['type'] == 'route_name'){
            return route($menu['url'], ['lang'=>$lang]);
        }

        return '#';
    }
}
