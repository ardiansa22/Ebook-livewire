<div class="p-6">
    <h1 class="text-2xl mb-4">{{ $isEdit ? 'Edit Book' : 'Create Book' }}</h1>

    <form wire:submit.prevent="{{ $isEdit ? 'update' : 'save' }}" class="space-y-4">
        <input type="text" wire:model="name" placeholder="Name" class="border p-2 w-full" />
        <input type="text" wire:model="title" placeholder="Title" class="border p-2 w-full" />
        <textarea wire:model="description" placeholder="Description" class="border p-2 w-full"></textarea>
        <input type="number" wire:model="price" placeholder="Price" class="border p-2 w-full" />
        <input type="number" wire:model="stock" placeholder="Stock" class="border p-2 w-full" />
        <select wire:model="category_id" class="border p-2 w-full">
            <option value="">Select Category</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <input type="file" wire:model="image" class="border p-2 w-full" />

        <button type="submit" class="bg-blue-500 text-white p-2 rounded">
            {{ $isEdit ? 'Update' : 'Save' }}
        </button>
    </form>

    <hr class="my-6" />

    <h2 class="text-xl mb-4">Books List</h2>

    <table class="table-auto w-full border">
        <thead>
            <tr class="bg-gray-100">
                <th class="border p-2">Image</th>
                <th class="border p-2">Title</th>
                <th class="border p-2">Price</th>
                <th class="border p-2">Category</th>
                <th class="border p-2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <td class="border p-2">
                    <img src="{{ asset('storage/'.$book->image) }}" class="h-16 w-16 object-cover">
                </td>
                <td class="border p-2">{{ $book->title }}</td>
                <td class="border p-2">{{ $book->price }}</td>
                <td class="border p-2">{{ $book->category->name }}</td>
                <td class="border p-2">
                    <button wire:click="edit({{ $book->id }})" class="bg-yellow-400 text-white p-1 rounded">Edit</button>
                    <button wire:click="delete({{ $book->id }})" class="bg-red-500 text-white p-1 rounded">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
