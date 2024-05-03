<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;
######################################
//tip1: public is driver that is in filesysetm config
//,if we store file in storeage we must link it to public(read end of config file)
######################################
class Index extends Component
{
    use WithFileUploads; //-------note----------

    public $photos = [];//-------------note------

    public function save()
    {
        $this->validate([
            'photos.*' => 'image|max:1024', // 1MB Max
        ]);

        foreach ($this->photos as $photo) {
            $photo->store('photos', 'public');//-------tip1----------
        }
    }

    public function render()
    {
        return view('livewire.post.index')
            ->extends('layouts.app')
            ->section('content');
    }
}
