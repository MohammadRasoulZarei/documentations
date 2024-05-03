<div>
    Index Post Component
    <hr>
#####################################
tip1= add a class in loading
#####################################
    <form wire:submit.prevent="save">

        <div>
            <label>Title</label>
            <input wire:model="title" type="text">
        </div>

        <div wire:loading.class="bg-gray">//------tip1--------
            <label>Body</label>
            <textarea wire:model="body" rows="5"></textarea>
        </div>

        <button type="submit">Create Post</button>

        <div wire:loading>//------note--------
            Loading...
        </div>
    </form>
    <button wire:click="cancel" wire:loading.attr="disabled">Cancel</button>//---------note-------
</div>
