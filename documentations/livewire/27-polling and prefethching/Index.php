<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    public $contentIsVisible = false;

    public function toggleContent()
    {
        $this->contentIsVisible = true;
    }
    public function render()
    {
        return view('livewire.post.index')
            ->extends('layouts.app')
            ->section('content');
    }
}
