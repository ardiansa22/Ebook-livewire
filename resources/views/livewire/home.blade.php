<div class="container mt-3 dashboard">

    @include('components.greeting-card', [
        'userName' => 'Ferian',
        'location' => 'Bandung',
        'weather' => '28°C, Cerah'
    ])

    @include('components.category', [
        'categories' => [
            ['name' => 'Lele', 'image' => 'img/lele.png', 'link' => '#'],
            ['name' => 'Patin', 'image' => 'img/patin.png', 'link' => '#'],
            ['name' => 'Mas', 'image' => 'img/goldfish.png', 'link' => '#', 'imgClass' => 'category-img-goldfish'],
            ['name' => 'Bawal', 'image' => 'img/bawal.png', 'link' => '#'],
            ['name' => 'Semua', 'icon' => 'fas fa-ellipsis-h', 'link' => '#', 'isModal' => true],
        ]
    ])

    @include('components.category-modal', [
        'modalCategories' => [
            ['name' => 'Gurame', 'icon' => 'fas fa-fish', 'link' => '/kategori/gurame'],
            ['name' => 'Patin', 'icon' => 'fas fa-water', 'link' => '/kategori/patin'],
            ['name' => 'Nila', 'icon' => 'fas fa-seedling', 'link' => '/kategori/nila'],
            ['name' => 'Bandeng', 'icon' => 'fas fa-leaf', 'link' => '/kategori/bandeng'],
        ]
    ])

    @include('components.book-carousel', [
        'title' => 'Spot Menjanjikan untuk Cuaca Hari ini',
        'items' => $books->map(function($book){
            return [
                'image' => $book->image,
                'title' => $book->title,
                'subtitle' => $book->price,
                'link' => route('book.show', $book->id)
            ];
        })->toArray()
    ])

    @include('components.book-carousel', [
        'title' => 'Event Baru untukmu',
        'items' => [
            ['image' => '/img/even 1.jpg', 'title' => 'Raja Pancing', 'subtitle' => '4.3 km | ⭐4.7'],
            ['image' => 'img/even2.jpeg', 'title' => 'Raja Pancing', 'subtitle' => '4.3 km | ⭐4.7'],
            ['image' => 'img/market.jpg', 'title' => 'Tempat 3', 'subtitle' => '4.3 km | ⭐4.7'],
            ['image' => 'img/market.jpg', 'title' => 'Tempat 4', 'subtitle' => '4.3 km | ⭐4.7'],
        ]
    ])

    @include('components.book-carousel', [
        'title' => 'Tips Buat Kamu',
        'items' => [
            ['image' => '/img/even 1.jpg', 'title' => 'Rahasia Umpan Jitu'],
            ['image' => 'img/even2.jpeg', 'title' => 'Umpan Gacor Ikan Mas'],
            ['image' => 'img/market.jpg', 'title' => 'Keong Mas Jitu'],
            ['image' => 'img/market.jpg', 'title' => 'Belut Goreng'],
        ]
    ])

</div>
