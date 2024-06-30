<?php

namespace App\Livewire\AdminDashboard;

use Livewire\Component;
use App\Models\Role;
use App\Models\Permission;

class RoleManager extends Component
{
    public $roles;
    public $permissions;
    public $rolePermissions = [];

    public function mount()
    {
        $this->roles = Role::with('permissions')->get();
        $this->permissions = Permission::all();

        foreach ($this->roles as $role) {
            $this->rolePermissions[$role->id] = $role->permissions->pluck('id')->toArray();
        }
    }

    public function updateRolePermissions($roleId)
    {
        $role = Role::find($roleId);
        if ($role) {
            $role->permissions()->sync($this->rolePermissions[$roleId]);
            $this->roles = Role::with('permissions')->get(); // Refresh the roles list
        }
    }

    public function render()
    {
        return view('livewire.admin-dashboard.role-manager');
    }
}
