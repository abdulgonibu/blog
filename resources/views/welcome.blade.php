<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/font-awesome/css/all.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container mx-auto ">
        <div class="flex mt-10 relative">
            <div class="hidden md:block">
                @foreach ($logos as $logo)
                    <a href="{{ route('index') }}">
                        <img src="{{ !empty($logo->image) ? url('upload/logo_images/' . $logo->image) : url('upload/no-image.png') }}"
                            height="130px" width="120px">
                    </a>
                @endforeach

                <div class="mt-10">


                    @foreach ($categories as $category)
                        <p
                            class="transition p-3 cursor-pointer hover:bg-slate-100 mb-1 hover:opacity-80 border-b border-slate-100">
                            <a href="{{ route('category.view', $category->id) }}">
                                {{ $category->name }}
                            </a>
                        </p>
                    @endforeach
                    <p
                        class="transition p-3 cursor-pointer hover:bg-slate-100 mb-1 hover:opacity-80 border-b border-slate-100">
                        <a href="{{ route('about.view') }}">About Me</a>
                    </p>
                </div>
            </div>
            <div class="">
                {{-- <div class="grid md:grid-cols-3 ">
                    @foreach ($portfolies as $portfolio)
                        <div class="col-md-4 mb-3">
                            <div class="p-3 shadow ">
                                <img src="{{ !empty($portfolio->image) ? url('upload/logo_images/' . $portfolio->image) : url('upload/no-image.png') }}"
                                    height="400px" width="400px">
                            </div>
                        </div>
                    @endforeach
                </div> --}}
                <div class="">
                    @yield('content')

                </div>

            </div>
        </div>
    </div>
    </div>
    <div class="absolute top-1 right-4 cursor-pointer mt-5">
        <span class="md:hidden navbar-toggle text-slate-900">
            <i class="fa-solid fa-bars-staggered" id="toggle-icon"></i>
        </span>
    </div>
    </div>
    <div class="mobile-navbar hidden h-[102vh] bg-white absolute top-0 left-0 text-left shadow overflow-y">
        <div class="text-center pt-2 flex items-center mt-3">
            <a href="index.html" class="m-0 mx-auto">
                <img src="./images/logo.png" alt="" class="w-36">
            </a>
        </div>
        <div class="p-3">
            <div class="relative">
                <span class="absolute top-2.5 left-4">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </span>
                <input type="search"
                    class="transition w-full text-xs rounded-md p-3 pl-12 bg-slate-100 outline-none outline-1 focus:outline-red-300"
                    placeholder="Search for Tuts, Videos, Tutors etc..">
            </div>
            <ul class="mt-3 list-none">
                <li class="py-3">
                    <i class="fa-solid fa-cube text-gray-400 mr-2"></i>
                    Categories
                </li>
                @foreach ($categories as $category)
                    <li
                        class="transition p-3 cursor-pointer hover:bg-slate-100 mb-1 hover:opacity-80 border-b border-slate-100">
                        <a href="{{ route('category.view', $category->id) }}">
                            <i class="fa-solid fa-chevron-right text-xs mr-4"></i>
                            {{ $category->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <script src="{{ asset('vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>




</body>

</html>
