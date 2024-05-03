<div>
    Index Post Component
    <hr>

    @if (session()->has('message'))//------note:it is live wire when we click blade will reload------
        {{ session('message') }}
    @endif

    <button wire:click="show">Show Message</button> //--------note-------
</div>
