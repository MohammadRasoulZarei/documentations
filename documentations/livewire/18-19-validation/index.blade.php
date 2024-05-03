<div>
    Index Post Component
    <hr>

    Create Post :
    <form wire:submit.prevent="save">//-----------note---------
        #####################################
        tip: wire:model='title' is a replace for name attribute
        #####################################
        <div>
            <label>Title</label>

            <input wire:model="title" type="text">//--------tip---------

            {{-- <input wire:model.lazy="title" type="text"> --}} when we dont want real time validation
            @error('title')//---------note-----------
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Body</label>
            <textarea wire:model="body" rows="3"></textarea>
            @error('body')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Create Post</button>
    </form>

</div>
