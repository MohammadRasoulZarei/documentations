<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    public $readyToLoad = false;//-------note----------

    public function loadPosts() //-------note----------
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        return view('livewire.post.index', [ //-------note----------
            'posts' => $this->readyToLoad
                ? Post::all()
                : [],
        ])
            ->extends('layouts.app')
            ->section('content');
    }
}
