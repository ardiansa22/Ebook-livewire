<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class Categories extends Component
{
    public $name, $categoryId, $isEdit = false;

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.categories', compact('categories'));
    }

    public function save()
    {
        $this->validate([
            'name' => 'required'
        ]);

        Category::create([
            'name' => $this->name
        ]);

        session()->flash('success', 'Category created successfully!');
        $this->resetInput();
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $this->name = $category->name;
        $this->categoryId = $category->id;
        $this->isEdit = true;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required'
        ]);

        $category = Category::findOrFail($this->categoryId);
        $category->update([
            'name' => $this->name
        ]);

        session()->flash('success', 'Category updated successfully!');
        $this->resetInput();
    }

    public function delete($id)
    {
        Category::findOrFail($id)->delete();
        session()->flash('success', 'Category deleted successfully!');
    }

    public function resetInput()
    {
        $this->name = '';
        $this->categoryId = null;
        $this->isEdit = false;
    }
}
