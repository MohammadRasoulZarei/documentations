<div>
    Index Post Component
    <hr>
    ############################################
    tip1: we dont use modifire
    ############################################
    <form wire:submit.prevent="save">
        <input type="file" wire:model="photos" multiple>//----tip1------

        @error('photos.*') <span style="color: red">{{ $message }}</span> @enderror

        <button type="submit">Save Photo</button>
    </form>

    @if (count($photos) > 0)
    Photo Preview :
        @foreach ($photos as $photo)
            <img width="150" src="{{ $photo->temporaryUrl() }}">//---------note*---------
        @endforeach
    @endif

</div>
