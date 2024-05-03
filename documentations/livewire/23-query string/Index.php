<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Index extends Component
{
    public $search;
    protected $queryString = [//-------------note-------------
        'search' => ['except' => '']
    ];

    public function render()
    {
        return view('livewire.post.index', [
            'posts' => Post::where('title', 'like', '%' . $this->search . '%')->get(),
        ])
            ->extends('layouts.app')
            ->section('content');
    }
}
