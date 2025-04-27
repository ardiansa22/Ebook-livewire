<div class="d-flex justify-content-around mt-3">
    @foreach($categories as $category)
        <div class="text-center">
            <a href="{{ $category['link'] }}" class="text-decoration-none text-dark" {{ $category['isModal'] ?? false ? 'data-bs-toggle=modal data-bs-target=#iconModal' : '' }}>
                <div class="category-icon">
                    @if(isset($category['image']))
                        <img src="{{ asset($category['image']) }}" alt="{{ $category['name'] }}" class="{{ $category['imgClass'] ?? 'category-img' }}">
                    @else
                        <i class="{{ $category['icon'] }}"></i>
                    @endif
                </div>
                <p>{{ $category['name'] }}</p>
            </a>
        </div>
    @endforeach
</div>
