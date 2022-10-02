<x-layout.app title="Dashboard">
    @if (empty($reqCari))
        <div class="bg-white px-2 md:px-20 py-10">
            <div class="hero min-h-16 md:mx-auto"
                style="background-image: url('{{ asset('image/save.jpg') }}'); background-size:auto; background-position-x: inherit;box-shadow:inset 0 0 0 2000px rgba(0, 0, 0, 0.514);">
                <div class="hero-content flex-col lg:flex-row-reverse">
                    <div class="max-w-md carousel rounded-box">
                        @for ($i = 7; $i < 14; $i++)
                            <div class="carousel-item w-full">
                                <img src="{{ asset('image/img (' . $i . ').jpeg') }}" class="w-full"
                                    alt="Tailwind CSS Carousel component" />
                            </div>
                        @endfor
                    </div>
                    <div class="text-center">
                        <img src="{{ asset('' . $profile->logo . '') }}" class="drop-shadow-lg shadow-white"
                            class="w-1/2" alt="" srcset="">
                        <h4 class="text-white font-banger text-2xl drop-shadow-sm">{{ $profile->deskripsi }}</h4>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <x-produklist :reqData="$reqCari" />
    <x-produkkatalog />
    <x-produkcarousel />

</x-layout.app>
