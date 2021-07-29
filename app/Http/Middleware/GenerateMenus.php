<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;
use Harimayco\Menu\Models\Menus;
use Harimayco\Menu\Models\MenuItems;


class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        \AppMenu::make('MyNavBar', function ($menu) {

            $links = DB::table('admin_menu_items')->where('sort', '!=',  0)->orderByDesc('sort')->get();
            // dd($links);
            $mainMenu = Menus::where('id', 1)->with('items')->first();

            if ($mainMenu) {

                $menuItems = $mainMenu->items;
                $menuItems = $menuItems->sortBy('sort');
                // dd($menuItems, $mainMenu);

                $menuItems->each(function ($item) use (&$menu){
                    if (app()->getLocale() == 'kk') {
                        $menu->add($item->label_kk, ['url' => $item->link_kk])->link->secure();
                    }
                    if (app()->getLocale() == 'ru') {
                        $menu->add($item->label_ru, ['url' => $item->link_ru]);
                    }

                });
            }

            // $menu->add('Home');
            // $menu->add('Services', 'services');
            // $menu->add('Contact', 'contact');
        });

        return $next($request);
    }
}
