<section>
    <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-4 lg:items-start">
            <div class="lg:sticky lg:top-4 bg-neutral text-white">
                <details open class="overflow-hidden rounded border border-gray-200">
                    <summary class="flex items-center justify-between px-5 py-3 lg:hidden">
                        <span class="text-sm font-medium"> Toggle Filters </span>

                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </summary>

                    <form action="{{ route('Cari-Jenis') }}" method="GET"
                        class="border-t border-gray-200 lg:border-t-0">
                        @csrf
                        <fieldset>
                            <legend class="block w-full  px-5 py-3 text-xs font-medium">
                                Jenis
                            </legend>

                            <div class="space-y-2 px-5 py-6">
                                <div class="flex items-center">
                                    <input id="toy" type="checkbox" name="type[0]"
                                        class="h-5 w-5 rounded border-gray-300" value="Lengan Panjang" />

                                    <label for="toy" class="ml-3 text-sm font-medium">
                                        Lengan Panjang
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="game" type="checkbox" name="type[1]"
                                        class="h-5 w-5 rounded border-gray-300" value="Lengan Pendek" />

                                    <label for="game" class="ml-3 text-sm font-medium">
                                        Lengan Pendek
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="outdoor" type="checkbox" name="type[2]"
                                        class="h-5 w-5 rounded border-gray-300" value="Hoddie" />

                                    <label for="outdoor" class="ml-3 text-sm font-medium">
                                        Jaket/Hoodie
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input id="outdoor" type="checkbox" name="type[3]"
                                        class="h-5 w-5 rounded border-gray-300" value="Krunet" />

                                    <label for="outdoor" class="ml-3 text-sm font-medium">
                                        Krunet
                                    </label>
                                </div>
                            </div>
                        </fieldset>

                        {{-- <div>
                            <fieldset>
                                <legend class="block w-full bg-gray-50 px-5 py-3 text-xs font-medium">
                                    Ukuran
                                </legend>

                                <div class="space-y-2 px-5 py-6">
                                    <div class="flex items-center">
                                        <input id="3+" type="checkbox" name="age[3+]"
                                            class="h-5 w-5 rounded border-gray-300" />

                                        <label for="3+" class="ml-3 text-sm font-medium">
                                            S
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="8+" type="checkbox" name="age[8+]"
                                            class="h-5 w-5 rounded border-gray-300" />

                                        <label for="8+" class="ml-3 text-sm font-medium">
                                            M
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="12+" type="checkbox" name="age[12+]"
                                            class="h-5 w-5 rounded border-gray-300" />

                                        <label for="12+" class="ml-3 text-sm font-medium">
                                            L
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="16+" type="checkbox" name="age[16+]"
                                            class="h-5 w-5 rounded border-gray-300" />

                                        <label for="16+" class="ml-3 text-sm font-medium">
                                            XL
                                        </label>
                                    </div>

                                    <div class="pt-2">
                                        <button type="button" class="text-xs text-gray-500 underline">
                                            Reset Age
                                        </button>
                                    </div>
                                </div>
                            </fieldset>
                        </div> --}}

                        <div class="flex justify-between border-t border-gray-200 px-5 py-3">
                            <button name="reset" type="reset"
                                class="rounded text-xs font-medium text-white underline">
                                Reset All
                            </button>

                            <button name="commit" type="submit"
                                class="rounded bg-base-100 px-5 py-3 text-sm font-bold text-black">
                                Cari
                            </button>
                        </div>
                    </form>
                </details>
            </div>

            <div class="lg:col-span-3">
                {{-- <div class="flex items-center justify-between">
                    <p class="text-sm text-gray-500">
                        <span class="hidden sm:inline"> Showing </span>
                        6 of 24 Products
                    </p>

                    <div class="ml-4">
                        <label for="SortBy" class="sr-only"> Sort </label>

                        <select id="SortBy" name="sort_by" class="rounded border-gray-100 text-sm">
                            <option readonly>Sort</option>
                            <option value="title-asc">Title, A-Z</option>
                            <option value="title-desc">Title, Z-A</option>
                            <option value="price-asc">Price, Low-High</option>
                            <option value="price-desc">Price, High-Low</option>
                        </select>
                    </div>
                </div> --}}

                <div
                    class="mt-4 grid grid-cols-1 gap-4 border border-gray-200 bg-gray-200 sm:grid-cols-2 lg:grid-cols-3">

                    @if (!empty($reqData))
                        @foreach ((object) $reqData as $item => $key)
                            @php
                                // dd([$item,count( $key)]);
                            @endphp
                            @if (count($key) > 0)
                                <a href="#" class="relative block bg-white col-span-1">
                                    <button type="button" name="wishlist"
                                        class="absolute right-4 top-4 rounded-full bg-black p-2 text-white">
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                            </path>
                                        </svg>
                                    </button>

                                    <img alt="Produk" src="{{ asset('upload/' . $key[$item]->gambar) }}"
                                        class="h-56 w-full object-contain lg:h-72 max-w-md" />

                                    <div class="p-6">
                                        <span class="inline-block bg-neutral text-white px-3 py-1 text-xs font-medium">
                                            New
                                        </span>

                                        <h5 class="mt-4 text-lg font-bold">{{ $key[$item]->nama }}</h5>

                                        <p class="mt-2 text-sm font-medium text-gray-600">
                                            {{ $key[$item]->deskripsi }}</p>
                                        <p class="mt-2 text-sm font-medium text-gray-600">Katalog :
                                            {{ $key[$item]->katalog }}
                                        </p>
                                        <p class="mt-2 text-sm font-medium text-gray-600">Jenis
                                            :{{ $key[$item]->jenis }}</p>

                                        <button name="add" type="button"
                                            class="mt-4 flex w-full items-center justify-center rounded-sm bg-neutral text-white px-8 py-4">
                                            <span class="text-sm font-medium">Pesan Sekarang</span>

                                            <svg class="ml-1.5 h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                            </svg>
                                        </button>
                                    </div>
                                </a>
                            @else
                                <div class="container mx-auto">
                                    Maaf Pencarian Tidak ada
                                </div>
                            @endif
                        @endforeach
                    @elseif(empty($reqData))
                        @if ($produk->count() > 0)
                            @foreach ($produk as $item)
                                <section href="#" class="relative block bg-white col-span-1">
                                    <button type="button" name="wishlist"
                                        class="absolute right-4 top-4 rounded-full bg-black p-2 text-white">
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                            </path>
                                        </svg>
                                    </button>

                                    <img alt="Produk" src="{{ asset('upload/' . $item->gambar) }}"
                                        class="h-56 w-full object-contain lg:h-72 max-w-md" />

                                    <div class="p-6">
                                        <span class="inline-block bg-neutral text-white px-3 py-1 text-xs font-medium">
                                            New
                                        </span>

                                        <h5 class="mt-4 text-lg font-bold">{{ $item->nama }}</h5>

                                        <p class="mt-2 text-sm font-medium text-gray-600">{{ $item->deskripsi }}</p>
                                        <p class="mt-2 text-sm font-medium text-gray-600">Katalog :
                                            {{ $item->katalog }}
                                        </p>
                                        <p class="mt-2 text-sm font-medium text-gray-600">Jenis :{{ $item->jenis }}
                                        </p>

                                        <a href="{{ route('whatsapp', ['id' => $item->id]) }}"
                                            class="mt-4 flex w-full items-center justify-center rounded-sm bg-neutral text-white px-8 py-4">
                                            <span class="text-sm font-medium">Pesan Sekarang</span>
                                            <svg class="ml-1.5 h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                            </svg>
                                        </a>
                                    </div>
                                </section>
                            @endforeach
                        @else
                            <div class="container mx-auto col-span-1">
                                Maaf Kosong
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    window.addEventListener('resize', () => {
        const desktopScreen = window.innerWidth < 768

        document.querySelector('details').open = !desktopScreen
    })
</script>
