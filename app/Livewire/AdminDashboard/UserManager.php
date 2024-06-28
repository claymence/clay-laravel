<?php

namespace App\Livewire\AdminDashboard;

use Livewire\Component;
//use Livewire\Volt\Component;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class UserManager extends Component
{
    public $users;
    public $rolesList;
    public $roles = [];

    public function mount()
    {
        $this->users = User::with('role')->get();
        $this->rolesList = Role::all();

        foreach ($this->users as $user) {
            $this->roles[$user->id] = $user->role_id;
        }
    }

    public function addUser()
    {
        $user = User::createTestUser();

        // to check - what is this event for exactly when registering?
        event(new Registered($user));

        // Refresh the users list
        $this->users = User::with('role')->get();
    }

    public function updateUserRole($userId)
    {
        if (Auth::id() == $userId) {
            dd("You cannot change your own role.");
        }

        $user = User::find($userId);
        if (!$user) {
            dd("User not found: $userId");
        }

        if (!isset($this->roles[$userId])) {
            dd("Role not set for user: $userId");
        }

        $user->role_id = $this->roles[$userId];
        $user->save();

        $this->users = User::with('role')->get(); // Refresh the users list
    }

    public function deleteUser($userId)
    {
        if (Auth::id() == $userId) {
            dd("You cannot delete your own account.");
        }

        $user = User::find($userId);
        if ($user) {
            $user->delete();
            $this->users = User::with('role')->get(); // Refresh the users list
        } else {
            dd("User not found: $userId");
        }
    }

    public function render(): mixed
    {
        return view('livewire.admin-dashboard.user-manager', ['users' => $this->users, 'rolesList' => $this->rolesList]);
    }

}
