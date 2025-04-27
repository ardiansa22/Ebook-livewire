<?php

namespace App\Livewire;

use Livewire\Component;

class MyBooks extends Component
{
    public function render()
    {
        $books = auth()->user()->userbooks()->with('book')->get();
        return view('livewire.user.my-books', compact('books'));
    }
}
