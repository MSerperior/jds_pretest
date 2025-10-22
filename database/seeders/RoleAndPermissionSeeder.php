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
        Permission::create(['name' => 'view-all news']);
        Permission::create(['name' => 'view news']);
        Permission::create(['name' => 'store news']);
        Permission::create(['name' => 'edit news']);
        Permission::create(['name' => 'delete news']);

        // create permissions
        Permission::create(['name' => 'view-all comments']);
        Permission::create(['name' => 'view comment']);
        Permission::create(['name' => 'store comment']);
        Permission::create(['name' => 'edit comment']);
        Permission::create(['name' => 'delete comment']);
        
        $admin = Role::create(['name' => 'admin'])
            ->givePermissionTo(
                [
                    'view-all news',
                    'view news',
                    'store news',
                    'edit news',
                    'delete news',
                    
                    'view-all comments',
                    'view comment',
                    'store comment',
                    'edit comment',
                    'delete comment',
                ]
            );
        $nonAdmin = Role::create(['name' => 'non-admin'])
            ->givePermissionTo(
                [
                    'view-all news',
                    'view news',
                    
                    'view-all comments',
                    'view comment',
                    'store comment',
                    'edit comment',
                    'delete comment',
                ]
            );
    }
}
