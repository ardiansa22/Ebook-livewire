
<div class="container mt-3 dashboard">

    <div class="container mt-3">
        <div class="card greeting-card shadow-sm p-3">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="fw-bold">Halo, Ferian!</h5>
                <div class="weather-info d-flex align-items-center">
                    <i class="fas fa-cloud-sun fa-2x me-2 text-warning"></i>
                    <div>
                        <p class="mb-0 fw-semibold">🌍 Bandung</p>
                        <p class="mb-0 text-muted">🌞 28°C, Cerah</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kategori -->
    <div class="d-flex justify-content-around mt-3">
        <div class="text-center">
            <a href="" class="text-decoration-none text-dark">
                <div class="category-icon">
                    <img src="{{ asset('img/lele.png') }}" alt="Lele" class="category-img">
                </div>
                <p>Lele</p>
            </a>
        </div>        
        <div class="text-center">
            <a href="" class="text-decoration-none text-dark">
                <div class="category-icon">
                    <img src="{{ asset('img/patin.png') }}" alt="Lele" class="category-img">
                </div>
                <p>Patin</p>
            </a>
        </div>
        <div class="text-center">
            <a href="" class="text-decoration-none text-dark">
                <div class="category-icon">
                    <img src="{{ asset('img/goldfish.png') }}" alt="Lele" class="category-img-goldfish">
                </div>
                <p>Mas</p>
            </a>
        </div>
        <div class="text-center">
            <a href="" class="text-decoration-none text-dark">
                <div class="category-icon">
                    <img src="{{ asset('img/bawal.png') }}" alt="Lele" class="category-img">
                </div>
                <p>Bawal</p>
            </a>
        </div>
        <div class="text-center">
            <a href="#" class="text-decoration-none text-dark" data-bs-toggle="modal" data-bs-target="#iconModal">
                <div class="category-icon"><i class="fas fa-ellipsis-h"></i></div>
                <p>Semua</p>
            </a>
        </div>        
    </div>
    <!-- Modal -->
    <div class="modal fade" id="iconModal" tabindex="-1" aria-labelledby="iconModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h6 class="fw-bold" class="modal-title" id="iconModalLabel">Pilih Kategori</h6 class="fw-bold">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="d-flex flex-wrap justify-content-around">
                <div class="text-center">
                <a href="/kategori/gurame" class="text-decoration-none text-dark">
                    <div class="category-icon"><i class="fas fa-fish"></i></div>
                    <p>Gurame</p>
                </a>
                </div>
                <div class="text-center">
                <a href="/kategori/patin" class="text-decoration-none text-dark">
                    <div class="category-icon"><i class="fas fa-water"></i></div>
                    <p>Patin</p>
                </a>
                </div>
                <div class="text-center">
                <a href="/kategori/nila" class="text-decoration-none text-dark">
                    <div class="category-icon"><i class="fas fa-seedling"></i></div>
                    <p>Nila</p>
                </a>
                </div>
                <div class="text-center">
                <a href="/kategori/bandeng" class="text-decoration-none text-dark">
                    <div class="category-icon"><i class="fas fa-leaf"></i></div>
                    <p>Bandeng</p>
                </a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
  

    <!-- Swiper Carousel -->
    <div class="swiper-container mb-3">
        <h6 class="fw-bold">Spot Menjanjikan untuk Cuaca Hari ini <i class="fas fa-arrow-right"></i></h6 class="fw-bold">
        <div class="swiper-wrapper">
        @foreach ($books as $book)
            <div class="swiper-slide">
                <div class="card p-2">
                    <img src="{{$book->image}}" class="card-img-top" alt="Gambar 1">
                    <div class="card-body text-start">
                        <h6 class="card-title">{{$book->title}}</h6>
                        <p class="text-muted">{{$book->price}}</p>
                        <a href="{{route('book.show',$book->id)}}">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Event Baru -->
    <div class="swiper-container mb-3">
        <h6 class="fw-bold">Event Baru untukmu <i class="fas fa-arrow-right"></i></h6 class="fw-bold">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="card p-2">
                    <img src="/img/even 1.jpg" class="card-img-top" alt="Gambar 1">
                    <div class="card-body text-start">
                        <h6 class="card-title">Raja Pancing</h6>
                        <p class="text-muted">4.3 km | ⭐4.7</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card p-2">
                    <img src="img/even2.jpeg" class="card-img-top" alt="Gambar 2">
                    <div class="card-body text-start">
                        <h6 class="card-title">Raja Pancing</h6>
                        <p class="text-muted">4.3 km | ⭐4.7</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card p-2">
                    <img src="img/market.jpg" class="card-img-top" alt="Gambar 3">
                    <div class="card-body text-start">
                        <h6 class="card-title">Tempat 3</h6>
                        <p class="text-muted">4.3 km | ⭐4.7</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card p-2">
                    <img src="img/market.jpg" class="card-img-top" alt="Gambar 4">
                    <div class="card-body text-start">
                        <h6 class="card-title">Tempat 4</h6>
                        <p class="text-muted">4.3 km | ⭐4.7</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TIPS n Trick -->
    <div class="swiper-tips mb-5">
        <h6 class="fw-bold">Tips Buat Kamu <i class="fas fa-arrow-right"></i></h6>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="card p-2">
                    <img src="/img/even 1.jpg" class="card-img-top" alt="Gambar 1">
                    <div class="card-body text-start">
                        <h6 class="card-title fw-bold">Rahasia Umpan Jitu</h6>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card p-2">
                    <img src="img/even2.jpeg" class="card-img-top" alt="Gambar 2">
                    <div class="card-body text-start">
                        <h6 class="card-title">Umpan Gacor Ikan Mas</h6>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card p-2">
                    <img src="img/market.jpg" class="card-img-top" alt="Gambar 3">
                    <div class="card-body text-start">
                        <h6 class="card-title">Keong Mas jitu</h6>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card p-2">
                    <img src="img/market.jpg" class="card-img-top" alt="Gambar 4">
                    <div class="card-body text-start">
                        <h6 class="card-title">Belut Goreng</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
