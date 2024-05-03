<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

############################################
$tip1= 'if we have bootsttrap it will use its class';
$tip2= 'every time $search changed we rest pages for query setring handling';
############################################
class Index extends Component
{
    use WithPagination; //------------note-------------

    public $search;
    protected $paginationTheme = 'bootstrap';//--------tip1-----------

    public function updatingSearch()//--------------tip2---------
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.post.index', [
            'posts' => Post::where('title', 'like', '%' . $this->search . '%')->paginate(2),//----note-----
        ])
            ->extends('layouts.app')
            ->section('content');
    }
}
