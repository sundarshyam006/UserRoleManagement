<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use App\Models\Menu;
  
class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = [
            'Users',
            'Roles',
            'Products'
        ];
     
        foreach ($menu as $menus) {
          $menu = Menu::create(['name' => $menus]);
       }
    }
}