<div>
    Index Post Component
    <hr>

    <div wire:init="loadPosts">//-----------note: we can use this attribute for a button or every where we want----------
        <ul>
            @foreach ($posts as $post)
                <li>{{ $post->title }}</li>
            @endforeach
        </ul>
    </div>

</div>
