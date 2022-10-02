<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased overflow-y-auto">

    <div class="flex flex-no-wrap bg-gray-200">
        <!-- Sidebar starts -->
        <!-- Remove class [ hidden ] and replace [ sm:flex ] with [ flex ] -->
        <div
            class="w-64 absolute sm:fixed overflow-y-auto bg-gray-800 shadow md:h-full flex-col justify-between hidden sm:flex">
            <div class="px-8 overflow-y-auto">
                <div class="h-16 w-full flex items-center">
                    <img src="{{ asset('image/logo/logo-putih-removebg-preview.png') }}" alt="Logo">
                </div>
                <ul class="mt-12">

                    <li
                        class="flex w-full justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center mb-6">
                        <a href="{{ route('produk.index') }}"
                            class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-puzzle"
                                width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                <path
                                    d="M4 7h3a1 1 0 0 0 1 -1v-1a2 2 0 0 1 4 0v1a1 1 0 0 0 1 1h3a1 1 0 0 1 1 1v3a1 1 0 0 0 1 1h1a2 2 0 0 1 0 4h-1a1 1 0 0 0 -1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-1a2 2 0 0 0 -4 0v1a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h1a2 2 0 0 0 0 -4h-1a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1">
                                </path>
                            </svg>
                            <span class="text-sm ml-2">Produk</span>
                        </a>
                        <div
                            class="py-1 px-3 bg-gray-600 rounded text-gray-300 flex items-center justify-center text-xs">
                            8</div>
                    </li>
                    <li
                        class="flex w-full justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center mb-6">
                        <a href="{{ route('team.index') }}"
                            class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-compass"
                                width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                <polyline points="8 16 10 10 16 8 14 14 8 16"></polyline>
                                <circle cx="12" cy="12" r="9"></circle>
                            </svg>
                            <span class="text-sm ml-2">Team</span>
                        </a>
                    </li>
                    <li
                        class="flex w-full justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center mb-6">
                        <a href="{{ route('profile.show', ['profile' => '1']) }}"
                            class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-compass"
                                width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                <polyline points="8 16 10 10 16 8 14 14 8 16"></polyline>
                                <circle cx="12" cy="12" r="9"></circle>
                            </svg>
                            <span class="text-sm ml-2">Profile</span>
                        </a>
                    </li>
                </ul>
                {{-- <div class="flex justify-center mt-10 mb-4 w-full">
                    <div class="relative">
                        <div class="text-gray-300 absolute ml-4 inset-0 m-auto w-4 h-4">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_icons_at_bottom-svg2.svg"
                                alt="Search">
                        </div>
                        <input
                            class="bg-gray-700 focus:outline-none focus:ring-1 focus:ring-gray-100 rounded w-full text-sm text-gray-300 placeholder-gray-400 bg-gray-100 pl-10 py-2"
                            type="text" placeholder="Search" />
                    </div>
                </div> --}}
            </div>
            {{-- <div class="px-8 border-t border-gray-700">
                <ul class="w-full flex items-center justify-between bg-gray-800">
                    <li class="cursor-pointer text-white pt-5 pb-3">
                        <button aria-label="show notifications"
                            class="focus:outline-none focus:ring-2 rounded focus:ring-gray-300">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_icons_at_bottom-svg3.svg"
                                alt="notifications">
                        </button>
                    </li>
                    <li class="cursor-pointer text-white pt-5 pb-3">
                        <button aria-label="open chats"
                            class="focus:outline-none focus:ring-2 rounded focus:ring-gray-300">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_icons_at_bottom-svg4.svg"
                                alt="chat">
                        </button>
                    </li>
                    <li class="cursor-pointer text-white pt-5 pb-3">
                        <button aria-label="open settings"
                            class="focus:outline-none focus:ring-2 rounded focus:ring-gray-300">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_icons_at_bottom-svg5.svg"
                                alt="settings">
                        </button>
                    </li>
                    <li class="cursor-pointer text-white pt-5 pb-3">
                        <button aria-label="open logs"
                            class="focus:outline-none focus:ring-2 rounded focus:ring-gray-300">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_icons_at_bottom-svg6.svg"
                                alt="drawer">
                        </button>
                    </li>
                </ul>
            </div> --}}
        </div>
        <div class="w-64 z-40 absolute bg-gray-800 shadow md:h-full flex-col justify-between sm:hidden transition duration-150 ease-in-out"
            id="mobile-nav">
            <button aria-label="toggle sidebar" id="openSideBar"
                class="h-10 w-10 bg-gray-800 absolute right-0 mt-16 -mr-10 flex items-center shadow rounded-tr rounded-br justify-center cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 rounded focus:ring-gray-800"
                onclick="sidebarHandler(true)">
                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_icons_at_bottom-svg7.svg"
                    alt="toggler">
            </button>
            <button aria-label="Close sidebar" id="closeSideBar"
                class="hidden h-10 w-10 bg-gray-800 absolute right-0 mt-16 -mr-10 flex items-center shadow rounded-tr rounded-br justify-center cursor-pointer text-white"
                onclick="sidebarHandler(false)">
                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_icons_at_bottom-svg8.svg"
                    alt="cross">
            </button>
            <div class="px-8">
                <div class="h-16 w-full flex items-center">
                    <img src="{{asset('image/logo/logo-putih-removebg-preview.png')}}"
                        alt="Logo">
                </div>
                <ul class="mt-12">

                    <li
                        class="flex w-full justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center mb-6">
                        <a href="{{ route('produk.index') }}"
                            class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-puzzle"
                                width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                <path
                                    d="M4 7h3a1 1 0 0 0 1 -1v-1a2 2 0 0 1 4 0v1a1 1 0 0 0 1 1h3a1 1 0 0 1 1 1v3a1 1 0 0 0 1 1h1a2 2 0 0 1 0 4h-1a1 1 0 0 0 -1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-1a2 2 0 0 0 -4 0v1a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h1a2 2 0 0 0 0 -4h-1a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1">
                                </path>
                            </svg>
                            <span class="text-sm ml-2">Produk</span>
                        </a>
                        <div
                            class="py-1 px-3 bg-gray-600 rounded text-gray-300 flex items-center justify-center text-xs">
                            8</div>
                    </li>
                    <li
                        class="flex w-full justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center mb-6">
                        <a href="{{ route('team.index') }}"
                            class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-compass"
                                width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                <polyline points="8 16 10 10 16 8 14 14 8 16"></polyline>
                                <circle cx="12" cy="12" r="9"></circle>
                            </svg>
                            <span class="text-sm ml-2">Team</span>
                        </a>
                    </li>
                    <li
                        class="flex w-full justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center mb-6">
                        <a href="{{ route('profile.show', ['profile' => '1']) }}"
                            class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-compass"
                                width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                <polyline points="8 16 10 10 16 8 14 14 8 16"></polyline>
                                <circle cx="12" cy="12" r="9"></circle>
                            </svg>
                            <span class="text-sm ml-2">Profile</span>
                        </a>
                    </li>
                </ul>
                {{-- <div class="flex justify-center mt-48 mb-4 w-full">
                    <div class="relative">
                        <div class="text-gray-300 absolute ml-4 inset-0 m-auto w-4 h-4">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_icons_at_bottom-svg2.svg"
                                alt="Search">
                        </div>
                        <input
                            class="bg-gray-700 focus:outline-none focus:ring-1 focus:ring-gray-100  rounded w-full text-sm text-gray-300 placeholder-gray-400 bg-gray-100 pl-10 py-2"
                            type="text" placeholder="Search" />
                    </div>
                </div> --}}
            </div>
            {{-- <div class="px-8 border-t border-gray-700">
                <ul class="w-full flex items-center justify-between bg-gray-800">
                    <li class="cursor-pointer text-white pt-5 pb-3">
                        <button aria-label="show notifications"
                            class="focus:outline-none focus:ring-2 rounded focus:ring-gray-300">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_icons_at_bottom-svg3.svg"
                                alt="notifications">
                        </button>
                    </li>
                    <li class="cursor-pointer text-white pt-5 pb-3">
                        <button aria-label="open chats"
                            class="focus:outline-none focus:ring-2 rounded focus:ring-gray-300">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_icons_at_bottom-svg4.svg"
                                alt="chat">
                        </button>
                    </li>
                    <li class="cursor-pointer text-white pt-5 pb-3">
                        <button aria-label="open settings"
                            class="focus:outline-none focus:ring-2 rounded focus:ring-gray-300">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_icons_at_bottom-svg5.svg"
                                alt="settings">
                        </button>
                    </li>
                    <li class="cursor-pointer text-white pt-5 pb-3">
                        <button aria-label="open logs"
                            class="focus:outline-none focus:ring-2 rounded focus:ring-gray-300">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_icons_at_bottom-svg6.svg"
                                alt="drawer">
                        </button>
                    </li>
                </ul>
            </div> --}}
        </div>
        <!-- Sidebar ends -->
        <!-- Remove class [ h-64 ] when adding a card block -->
        <div class="container sm:ml-[16.5rem] overflow-y-auto mx-auto py-10 h-full md:w-4/5 w-11/12 px-6 bg-white">
            {{ $slot }}
        </div>
    </div>

    <script>
        var sideBar = document.getElementById("mobile-nav");
        var openSidebar = document.getElementById("openSideBar");
        var closeSidebar = document.getElementById("closeSideBar");
        sideBar.style.transform = "translateX(-260px)";

        function sidebarHandler(flag) {
            if (flag) {
                sideBar.style.transform = "translateX(0px)";
                openSidebar.classList.add("hidden");
                closeSidebar.classList.remove("hidden");
            } else {
                sideBar.style.transform = "translateX(-260px)";
                closeSidebar.classList.add("hidden");
                openSidebar.classList.remove("hidden");
            }
        }
    </script>
</body>

</html>
