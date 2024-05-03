<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    public $title,$body;

    public function save()
    {
        sleep(3);
    }

    public function cancel()
    {
        sleep(3);
    }

    public function render()
    {
        return view('livewire.post.index')
            ->extends('layouts.app')
            ->section('content');
    }
}
