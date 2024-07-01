<div>
    @if($settings)
        <form wire:submit.prevent="save">
            <div>
                <label for="theme">Theme</label>
                <select id="theme" wire:model="settings.theme">
                    <option value="light">Light</option>
                    <option value="dark">Dark</option>
                </select>
            </div>
            <button type="submit">Save</button>
        </form>
    @else
        <p>No settings available.</p>
    @endif
</div>
