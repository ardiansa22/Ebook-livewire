<div class="modal fade" id="iconModal" tabindex="-1" aria-labelledby="iconModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="fw-bold modal-title" id="iconModalLabel">Pilih Kategori</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex flex-wrap justify-content-around">
                    @foreach($modalCategories as $modalCategory)
                        <div class="text-center">
                            <a href="{{ $modalCategory['link'] }}" class="text-decoration-none text-dark">
                                <div class="category-icon"><i class="{{ $modalCategory['icon'] }}"></i></div>
                                <p>{{ $modalCategory['name'] }}</p>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
