<div>
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">Role</th>
                <th class="px-4 py-2">Permissions</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
                <tr>
                    <td class="border px-4 py-2">{{ $role->name }}</td>
                    <td class="border px-4 py-2">
                        @foreach($permissions as $permission)
                            <label class="inline-flex items-center">
                                <input type="checkbox" wire:model="rolePermissions.{{ $role->id }}" value="{{ $permission->id }}">
                                <span class="ml-2">{{ $permission->name }}</span>
                            </label>
                        @endforeach
                    </td>
                    <td class="border px-4 py-2">
                        <button wire:click="updateRolePermissions({{ $role->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Save
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
