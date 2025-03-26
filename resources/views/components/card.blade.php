{{-- resources/views/components/card.blade.php --}}
@props(['title', 'description' => 'Deskripsi tidak tersedia.', 'price' => 'Rp0', 'image' => 'https://via.placeholder.com/150', 'link' => '#'])

<div class="card shadow-sm" style="width: 18rem;">
    <div class="p-2 text-center">
        <img src="{{ $image }}" class="card-img-top border rounded-3" style="max-height: 200px; object-fit: cover;" alt="{{ $title }}">
    </div>
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">{{ $description }}</p>
        <h6 class="text-danger fw-bold">{{ $price }}</h6>
        <a href="{{ $link }}" class="btn btn-primary">Lihat Produk</a>
    </div>
</div>