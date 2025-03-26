<x-layout>
    <div class="container">
        <x-alert />

        <h3>Semua Produk</h3>
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4">
                    <x-card 
                        title="{{ $product->name }}"
                        description="{{ $product->description }}"
                        price="Rp{{ number_format($product->price, 0, ',', '.') }}"
                        image="{{ $product->image ?? 'https://via.placeholder.com/150' }}"
                        link="{{ route('product', ['slug' => $product->slug]) }}" {{-- Link ke halaman produk --}}
                    />
                </div>
            @endforeach
        </div>

        {{-- Jika ada produk tertentu berdasarkan slug --}}
        @isset($product)
            <div class="mt-4">
                <h4>Detail Produk</h4>
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ $product->image ?? 'https://via.placeholder.com/300' }}" class="img-fluid" alt="{{ $product->name }}">
                    </div>
                    <div class="col-md-6">
                        <h5>{{ $product->name }}</h5>
                        <p>{{ $product->description }}</p>
                        <h6 class="text-danger">Rp{{ number_format($product->price, 0, ',', '.') }}</h6>
                        <a href="#" class="btn btn-success">Tambahkan ke Keranjang</a>
                    </div>
                </div>
            </div>
        @endisset
    </div>
</x-layout>