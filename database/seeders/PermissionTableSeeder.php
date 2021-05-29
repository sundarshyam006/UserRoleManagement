<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use App\Models\Menu;
  
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = Menu::pluck('name','name')->all();
        
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
       }
    }
}