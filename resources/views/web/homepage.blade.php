<x-layout>
    <div class="container mt-4">
        <x-alert />  {{-- Menampilkan notifikasi jika ada --}}

        <h3>Produk Terbaru</h3>
        <div class="row">
            <div class="col-md-4">
                <x-card 
                    title="Sepatu Sneakers"
                    description="Sepatu berkualitas tinggi dengan desain stylish."
                    price="Rp299.000"
                    image="https://images.tokopedia.net/img/cache/500-square/product-1/2020/8/8/100664454/100664454_1385dbc0-2093-4928-b269-c24e5e2d2144_2048_2048"
                    link="/product/sepatu-sneakers"
                />
            </div>
            <div class="col-md-4">
                <x-card 
                    title="Kaos Polos"
                    description="Kaos polos dengan bahan premium, nyaman dipakai."
                    price="Rp99.000"
                    image="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/4/19/4e03ea14-9e81-4b0b-9a66-7b3a8a4b3090.png"
                    link="/product/kaos-polos"
                />
            </div>
        </div>
    </div>
</x-layout>