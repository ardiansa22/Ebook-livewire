<div class="p-6">
    <h1 class="text-2xl mb-4">My Books</h1>
    <div class="grid grid-cols-3 gap-4">
        @foreach ($books as $userbook)
            <div class="border p-4">
                <h3>{{ $userbook->book->title }}</h3>
                <p>{{ $userbook->book->price }} IDR</p>
            </div>
        @endforeach
    </div>
</div>
