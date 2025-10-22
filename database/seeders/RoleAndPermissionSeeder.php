<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create permissions
        Permission::create(['name' => 'news:index']);
        Permission::create(['name' => 'news:store']);
        Permission::create(['name' => 'news:show']);
        Permission::create(['name' => 'news:update']);
        Permission::create(['name' => 'news:delete']);

        // create permissions
        Permission::create(['name' => 'comments:index']);
        Permission::create(['name' => 'comments:store']);
        Permission::create(['name' => 'comments:show']);
        Permission::create(['name' => 'comments:update']);
        Permission::create(['name' => 'comments:delete']);
        
        $admin = Role::create(['name' => 'admin'])
            ->givePermissionTo(
                [
                    'news:index',
                    'news:store',
                    'news:show',
                    'news:update',
                    'news:delete',
                    
                    'comments:index',
                    'comments:store',
                    'comments:show',
                    'comments:update',
                    'comments:delete',
                ]
            );
        $nonAdmin = Role::create(['name' => 'non-admin'])
            ->givePermissionTo(
                [
                    'news:index',
                    'news:show',
                    
                    'comments:index',
                    'comments:store',
                    'comments:show',
                    'comments:update',
                    'comments:delete',
                ]
            );
    }
}
