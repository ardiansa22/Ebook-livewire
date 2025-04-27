<?php

namespace App\Livewire\Admin;

use App\Models\Book;
use App\Models\Category;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Books extends Component
{
    use WithFileUploads;

    public $name, $title, $description, $price, $stock, $category_id, $image;
    public $bookId;
    public $isEdit = false;

    public function render()
    {
        $books = Book::with('category')->get();
        $categories = Category::all();
        return view('livewire.admin.books', compact('books', 'categories'));
    }

    public function save()
    {
        $data = $this->validate([
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'category_id' => 'required',
            'image' => 'nullable|image|max:1024',
        ]);

        if ($this->image) {
            $data['image'] = $this->image->store('books', 'public');
        }

        Book::create($data);

        session()->flash('success', 'Book created successfully!');
        $this->resetInput();
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $this->bookId = $book->id;
        $this->name = $book->name;
        $this->title = $book->title;
        $this->description = $book->description;
        $this->price = $book->price;
        $this->stock = $book->stock;
        $this->category_id = $book->category_id;
        $this->isEdit = true;
    }

    public function update()
    {
        $data = $this->validate([
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'category_id' => 'required',
        ]);

        $book = Book::findOrFail($this->bookId);
        $book->update($data);

        session()->flash('success', 'Book updated successfully!');
        $this->resetInput();
    }

    public function delete($id)
    {
        Book::findOrFail($id)->delete();
        session()->flash('success', 'Book deleted successfully!');
    }

    public function resetInput()
    {
        $this->name = '';
        $this->title = '';
        $this->description = '';
        $this->price = '';
        $this->stock = '';
        $this->category_id = '';
        $this->image = '';
        $this->bookId = null;
        $this->isEdit = false;
    }
}
