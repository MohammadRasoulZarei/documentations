<div>
    Index Post Component
    <hr>

    <input wire:model="search" placeholder="Search posts by title...">//----------note----------

    <h1>Search Results:</h1>

    <ul>
        @foreach($posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
    </ul>
</div>
