<div>
    Index Post Component
    <hr>

    <input wire:model="search" placeholder="Search posts by title...">

    <h1>Search Results:</h1>

    <ul>
        @foreach($posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
    </ul>

    {{ $posts->links() }}
</div>
