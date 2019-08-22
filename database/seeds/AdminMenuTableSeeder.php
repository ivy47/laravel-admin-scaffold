<?php

use Encore\Admin\Auth\Database\Menu;
use Illuminate\Database\Seeder;

class AdminMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::truncate();

        $menu = config('admin_custom.menu');
        foreach ($menu as $item) {
            Menu::updateOrCreate([
                'title'     => $item['title'],
            ], [
                'parent_id' => $item['parent_title'] === null ? 0 : Menu::whereTitle($item['parent_title'])->first()->id,
                'order'     => $item['order'],
                'icon'      => $item['icon'],
                'uri'       => $item['uri'],
                'permission' => $item['permission']
            ]);
        }
    }
}
