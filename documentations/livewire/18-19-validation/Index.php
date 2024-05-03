<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;
##################################
tip1: "when we use this that want to use a variable in rule";
tip2: "by every change on over public properties this function will lunch";
##################################
class Index extends Component
{
    
    public $title = '';
    public $body = '';

    // protected $rules = [ //------------note-------------
    //     'title' => 'required|min:5',
    //     'body' => 'required'
    // ];

    protected function rules()//-------tip1---------
    {
        return [
            'title' => 'required|min:5',
            'body' => 'required'
        ];
    }

    // protected $messages = [
    //     'title.required' => 'The Title cannot be empty.'
    // ];

    protected $validationAttributes = [
        'title' => 'Ali'
    ];

    public function updated($propertyName) //----------tip2----------
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();//-------------------note------------

        dd($this->title, $this->body);

        // Post::create([
        //     'title' => $this->title,
        //     'body' => $this->body,
        // ]);
    }

    public function render()
    {
        return view('livewire.post.index')
            ->extends('layouts.app')
            ->section('content');
    }
}
