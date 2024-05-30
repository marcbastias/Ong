<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear o recuperar los roles
        $role1 = Role::firstOrCreate(['name' => 'Admin']);
        $role2 = Role::firstOrCreate(['name' => 'Blogger']);

        // Crear o recuperar los permisos
        $permissions = [
            ['name' => 'admin.home', 'description' => 'Display dashboard'],
            ['name' => 'admin.users.index', 'description' => 'Display user list'],
            ['name' => 'admin.users.edit', 'description' => 'Assign role'],
            ['name' => 'admin.categories.index', 'description' => 'Display category list'],
            ['name' => 'admin.categories.create', 'description' => 'Create category'],
            ['name' => 'admin.categories.edit', 'description' => 'Edit category'],
            ['name' => 'admin.categories.destroy', 'description' => 'Delete category'],
            ['name' => 'admin.tags.index', 'description' => 'Display tag list'],
            ['name' => 'admin.tags.create', 'description' => 'Create tags'],
            ['name' => 'admin.tags.edit', 'description' => 'Edit tags'],
            ['name' => 'admin.tags.destroy', 'description' => 'Delete tags'],
            ['name' => 'admin.posts.index', 'description' => 'Display post list'],
            ['name' => 'admin.posts.create', 'description' => 'Create post'],
            ['name' => 'admin.posts.edit', 'description' => 'Edit post'],
            ['name' => 'admin.posts.destroy', 'description' => 'Delete post'],
        ];

        foreach ($permissions as $permissionData) {
            $permission = Permission::firstOrCreate(['name' => $permissionData['name']], ['description' => $permissionData['description']]);
            $permission->syncRoles([$role1, $role2]);
        }
    }
}
