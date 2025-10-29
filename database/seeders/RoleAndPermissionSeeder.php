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
        Permission::create(['name' => 'news:destroy']);

        // create permissions
        Permission::create(['name' => 'comments:index']);
        Permission::create(['name' => 'comments:store']);
        Permission::create(['name' => 'comments:show']);
        Permission::create(['name' => 'comments:update']);
        Permission::create(['name' => 'comments:destroy']);

        // create permissions
        Permission::create(['name' => 'users:index']);
        Permission::create(['name' => 'users:store']);
        Permission::create(['name' => 'users:show']);
        Permission::create(['name' => 'users:update']);
        Permission::create(['name' => 'users:destroy']);

        // create permissions
        Permission::create(['name' => 'categories:index']);
        Permission::create(['name' => 'categories:store']);
        Permission::create(['name' => 'categories:show']);
        Permission::create(['name' => 'categories:update']);
        Permission::create(['name' => 'categories:destroy']);

        // create permissions
        Permission::create(['name' => 'roles:index']);
        Permission::create(['name' => 'roles:store']);
        Permission::create(['name' => 'roles:show']);
        Permission::create(['name' => 'roles:update']);
        Permission::create(['name' => 'roles:destroy']);
        
        $admin = Role::create(['name' => 'admin'])
            ->givePermissionTo(
                [
                    'news:index',
                    'news:store',
                    'news:show',
                    'news:update',
                    'news:destroy',
                    
                    'comments:index',
                    'comments:store',
                    'comments:show',
                    'comments:update',
                    'comments:destroy',

                    'users:index',
                    'users:store',
                    'users:show',
                    'users:update',
                    'users:destroy',

                    'categories:index',
                    'categories:store',
                    'categories:show',
                    'categories:update',
                    'categories:destroy',

                    'roles:index',
                    'roles:store',
                    'roles:show',
                    'roles:update',
                    'roles:destroy',
                ]
            );

        $author = Role::create(['name' => 'author'])
            ->givePermissionTo(
                [
                    'news:index',
                    'news:store',
                    'news:show',
                    'news:update',
                    'news:destroy',
                    
                    'comments:index',
                    'comments:store',
                    'comments:show',
                    'comments:update',
                    'comments:destroy',

                    'categories:index',
                    'categories:store',
                    'categories:show',
                    'categories:update',
                    'categories:destroy',
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
                    'comments:destroy',
                ]
            );
    }
}
