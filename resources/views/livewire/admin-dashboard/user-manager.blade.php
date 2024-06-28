<div>
    <table>
        <!-- <caption>User Roles and Information</caption> -->
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <select name="role" wire:model="roles.{{ $user->id }}" wire:change="updateUserRole({{ $user->id }})">
                        @foreach($rolesList as $role)
                            <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : '' }}>
                                {{ $role->name }}
                            </option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <button wire:click="deleteUser({{ $user->id }})">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <button wire:click="addUser">Add User</button>
</div>