<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class Home extends Component
{
    public $search = '';
    public function render()
    {
        $books = Book::where('name','like','%'.$this->search.'%')->get();
        return view('livewire.home',compact('books'));
    }
}
