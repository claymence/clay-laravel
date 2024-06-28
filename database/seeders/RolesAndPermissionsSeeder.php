<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;
use App\Models\Permission;
use App\Models\User;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::transaction(function () {
/* 
            command for running this seeder:
            php artisan db:seed --class=RolesAndPermissionsSeeder
 */

            // Define roles
            $roles = [
                'dev',
                'admin',
                'mod',
                'user',
            ];

            // Define permissions
            $permissions = [
                'manage_users',
                'view_dashboard',
                'view_admin-dashboard',
                'view_dev-sandbox',
            ];

            // Create roles and store them in an associative array
            $roleInstances = [];
            foreach ($roles as $roleName) {
                $role = Role::firstOrCreate(['name' => $roleName]);
                $roleInstances[$roleName] = $role;
                $this->command->info("Role '{$roleName}' created");
            }

            // Create permissions and store them in an associative array
            $permissionInstances = [];
            foreach ($permissions as $permissionName) {
                $permission = Permission::firstOrCreate(['name' => $permissionName]);
                $permissionInstances[$permissionName] = $permission;
                $this->command->info("Permission '{$permissionName}' created");
            }

            // Define permissions to assign to roles
            $rolePermissions = [
                'user' => ['view_dashboard'],
                'admin' => ['manage_users', 'view_dashboard', 'view_admin-dashboard'],
            ];

            // Attach permissions to roles
            foreach ($rolePermissions as $roleName => $permissions) {
                if (isset($roleInstances[$roleName])) {
                    $roleInstances[$roleName]->permissions()->sync(
                        array_map(fn($permissionName) => $permissionInstances[$permissionName]->id, $permissions)
                    );
                    $this->command->info("Permissions attached to '{$roleName}' role");
                }
            }


            // --- DEV ACCESS ---

            // Give all permissions to dev role
            if (isset($roleInstances['dev'])) {
                $roleInstances['dev']->permissions()->sync(Permission::all());
                $this->command->info("All permissions attached to 'dev' role");
            }

            // Assign dev role to specific user by email address
            $devEmail = env('SEEDER_DEV_EMAIL');
            $devUser = User::where('email', $devEmail)->first();
            if ($devUser && isset($roleInstances['dev'])) {
                $devUser->role()->associate($roleInstances['dev']);
                $devUser->save();
                $this->command->info("'dev' role assigned to user env('SEEDER_DEV_EMAIL')");
            }

        });
    }
}
