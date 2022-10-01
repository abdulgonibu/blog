<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('public/css/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500&display=swap" rel="stylesheet">
    <style>
        .grid-container {
            display: grid;
            gap: 10px;
            grid-template-columns: 1fr 1fr 1fr;
            padding: 10px;
        }

        .grid-item {
            background-color: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(0, 0, 0, 0.8);
            padding: 20px;
            font-size: 30px;
            text-align: center;
        }

        @media only screen and (max-width: 768px) {

            /* For desktop: */
            .grid-container {
                display: grid;
                gap: 10px;
                grid-template-columns: 1fr;
                padding: 10px;
            }

        }
    </style>

</head>

<body>
    <div class="container mx-auto ">
        <div class="flex mt-10 relative">
            <div class="hidden md:block">
                @foreach ($logos as $logo)
                    <a href="{{ route('home') }}">
                        <img src="{{ !empty($logo->image) ? url('public/upload/logo_images/' . $logo->image) : url('upload/no-image.png') }}"
                            height="130px" width="120px">
                    </a>
                @endforeach

                <div class="mt-10">

                    <a class="transition p-3 cursor-pointer hover:bg-slate-100  hover:opacity-80 border-b border-slate-100"
                        href="{{ route('home') }}">Overview</a>
                    @foreach ($categories as $category)
                        <p
                            class="transition p-3 cursor-pointer hover:bg-slate-100  hover:opacity-80 border-b border-slate-100">
                            <a href="{{ route('category.view', $category->id) }}">
                                {{ $category->name }}
                            </a>
                        </p>
                    @endforeach
                    <a class="transition p-3 cursor-pointer hover:bg-slate-100 mb-1 hover:opacity-80 border-b  border-slate-100"
                        href="{{ route('video.view') }}">Film/Video</a>
                    <p
                        class="transition p-3 cursor-pointer hover:bg-slate-100 mb-1  hover:opacity-80 border-b border-slate-100">
                        <a href="{{ route('about.view') }}">About Me</a>
                    </p>
                    <p
                        class="transition p-3 cursor-pointer hover:bg-slate-100 mb-1  hover:opacity-80 border-b border-slate-100">
                        <a href="{{ route('about.view') }}">Coutact</a>
                    </p>
                </div>
            </div>
            <div class="container mx-10">
                @foreach ($abouts as $about)
                    <div class=" grid-container gap-10">
                        <div class="text-justify pt-1 col-span-2" dangerouslySetInnerHTML=__html:> <?php echo $about->about_text; ?>

                        </div>
                        <div class="w-full">
                            <div>
                                <img class="w-full h-96"
                                    src="{{ !empty($about->image) ? url('public/upload/about_images/' . $about->image) : url('upload/no-image.png') }}">
                            </div>

                            <div
                                class="container flex gap-3 mt-5 bg-white p-2 md:mt-14 rounded-full  md:mr-10 w-52 items-center text-center justify-center space-x-4">
                                <a target="_blank" href="https://www.facebook.com/Global.Business.Solution.Bd">
                                    <img src="{{ asset('public/images/icons/facebook.png') }}" class="h-8 w-8" alt="">

                                </a>
                                <a target="_blank" href="https://www.youtube.com/channel/UCYqeNTj2sO1ZHO5yHPs1r5Q">
                                    <img src="{{ asset('public/images/icons/Youtube.png') }}" class="h-8 w-8" alt="">
                                </a>

                                <a target="_blank" href="https://www.linkedin.com/company/globalbusinessbd/">
                                    <img src="{{ asset('public/images/icons/linkedin.png') }}" class="h-8 w-8" alt="">
                                </a>
                            </div>
                        </div>
                @endforeach

                <div class="flex justify-center text-center">
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

        <script src="{{ asset('public/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('public/js/main.js') }}"></script>



</body>

</html>
