<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<section class="bg-neutral">
    <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 lg:px-8 ">
        <h2 class="text-2xl font-bold text-white">Produk Kami</h2>

        <div class="mt-4">
            <div class="swiper">
                <ul class="swiper-wrapper">
                    @for ($i = 3; $i < 10; $i++)
                        <li class="swiper-slide max-h-96">
                            <a href="#" class="relative block shadow-sm">
                                <div class="card w-full bg-base-100 shadow-xl image-full">
                                    <figure><img src="{{asset('image/img ('. mt_rand(3,20) .').jpeg')}}" class="h-full" alt="Mural" /></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">TemanCoret</h2>
                                        <p>Brand Lokal Makassar</p>
                                        <div class="card-actions justify-end">
                                            <button class="btn btn-warning">Pesan Sekarang</button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endfor
                </ul>

                <div class="swiper-pagination !relative !bottom-0 mx-auto mt-8 max-w-3xl"></div>
            </div>
        </div>
    </div>
</section>

<script>
    new Swiper('.swiper', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 32,
        autoplay: true,
        pagination: {
            type: 'progressbar',
            el: '.swiper-pagination',
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    })
</script>
