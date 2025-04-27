<div class="swiper-container mb-3">
    <h6 class="fw-bold">{{ $title }} <i class="fas fa-arrow-right"></i></h6>
    <div class="swiper-wrapper">
        @foreach ($items as $item)
            <div class="swiper-slide">
                <div class="card p-2">
                    <img src="{{ $item['image'] }}" class="card-img-top" alt="{{ $item['title'] }}">
                    <div class="card-body text-start">
                        <h6 class="card-title">{{ $item['title'] }}</h6>
                        <p class="text-muted">{{ $item['subtitle'] ?? '' }}</p>
                        @if(isset($item['link']))
                        <a href="{{ trim($item['link']) }}" wire:navigate>Detail</a>

                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
