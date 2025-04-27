<div class="container mt-3">
    <div class="card greeting-card shadow-sm p-3">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="fw-bold">Halo, {{ $userName ?? 'User' }}!</h5>
            <div class="weather-info d-flex align-items-center">
                <i class="fas fa-cloud-sun fa-2x me-2 text-warning"></i>
                <div>
                    <p class="mb-0 fw-semibold">🌍 {{ $location ?? 'Bandung' }}</p>
                    <p class="mb-0 text-muted">🌞 {{ $weather ?? '28°C, Cerah' }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
