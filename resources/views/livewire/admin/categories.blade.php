<div class="p-6">
    <h1 class="text-2xl mb-4">{{ $isEdit ? 'Edit Category' : 'Create Category' }}</h1>

    <form wire:submit.prevent="{{ $isEdit ? 'update' : 'save' }}" class="space-y-4">
        <input type="text" wire:model="name" placeholder="Name" class="border p-2 w-full" />
        <button type="submit" class="bg-blue-500 text-white p-2 rounded">
            {{ $isEdit ? 'Update' : 'Save' }}
        </button>
    </form>

    <hr class="my-6" />

    <h2 class="text-xl mb-4">Categories List</h2>

    <table class="table-auto w-full border">
        <thead>
            <tr class="bg-gray-100">
                <th class="border p-2">Name</th>
                <th class="border p-2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td class="border p-2">{{ $category->name }}</td>
                <td class="border p-2">
                    <button wire:click="edit({{ $category->id }})" class="bg-yellow-400 text-white p-1 rounded">Edit</button>
                    <button wire:click="delete({{ $category->id }})" class="bg-red-500 text-white p-1 rounded">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
