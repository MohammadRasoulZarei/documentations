<div>
    Index Post Component
    <hr>

    <form wire:submit.prevent="save">
        <input type="file" wire:model="photos" multiple>
        {{-- <input type="file" wire:model="photo"> --}}

        @error('photo.*') <span style="color: red">{{ $message }}</span> @enderror
        {{-- @error('photo') <span style="color: red">{{ $message }}</span> @enderror --}}

        <button type="submit">Save Photo</button>
    </form>

</div>
