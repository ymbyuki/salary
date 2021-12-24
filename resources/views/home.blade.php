<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ mix('js/main.js') }}" defer></script>
</head>

<body>
    <nav id="scrollArea" class="font-sans bg-pantone-orange shadow text-center flex justify-between items-center sm:px-8 px-4 py-4 fixed w-full">
        <a href="/">
            <img src="{{ asset('img/logo.svg') }}" class="h-10" alt="logo">
        </a>
        <ul class="text-sm text-gray-700 list-none p-0 flex items-center">
            <li><a href="/login" class="inline-block py-2 px-3 text-gray-900 hover:text-gray-700 ">ログイン</a></li>
            <li><a href="/register" class="bg-black hover:bg-text-gray-800 text-white ml-4 py-2 px-3">登録</a></li>
        </ul>
    </nav>
    <section class="font-sans h-screen w-full bg-cover text-center flex flex-col items-center justify-center object-cover" style="background:url(img/bg-1.jpg) no-repeat right; background-size: cover;">
        <div class="grid sm:grid-cols-2 items-center text-center px-16 sm:mt-0 mt-36">
            <div class="m-auto">
                <img src="{{ asset('img/logo.svg') }}" alt="" class="h-24">
                <p class="mt-4 text-xl">103万円の壁と戦おう</p>
            </div>
            <div class="">
                <img src="/img/moc.png" alt="" class="">
            </div>
        </div>
    </section>

    <section class="font-sans text-center py-16 bg-pantone-blue shadow-lg">
        <h1 class="capitalize font-medium pb-12 text-xl">Salaryにログインする</h1>
        <a href="/login" class="bg-black hover:bg-gray-900 text-white hover:text-white py-3 px-6 uppercase text-xs tracking-wide">ログイン</a>
    </section>

    <section class="bg-pantone-orange font-sans">

        <div class="flex flex-col md:flex-row sm:mx-36 mx-12 items-center">
            <div class="flex flex-col w-full lg:w-1/2 justify-center items-start py-8">
                <h1 class="my-4 font-normal text-2xl">Salaryとは</h1>
                <p class="leading-normal mb-4">扶養内で働く人にとって１番気をつけることは給与計算です。<br> しかし、複数のアルバイトや事業所を掛け持ちすると、給与明細で一括計算が難しく、気がついたら超える直前なこともあると思います。
                    <br> Salaryは、103万円の壁や130万円の壁と戦う学生や扶養の方の給与計算を簡単に計算することができるように作ったWebアプリケーションです。
                </p>
                <a href="/register" class="bg-transparent hover:bg-black text-black font-semibold hover:text-white py-2 px-4 border border-black hover:border-transparent">登録する</a>
            </div>
            <div class="w-full lg:w-1/2 lg:py-6"><img src="/img/moc.png" alt="image" class="w-full"></div>
        </div>
    </section>

    <footer class="font-sans bg-white py-8 px-4">
        <div class="mx-auto container overflow-hidden flex flex-col md:flex-row justify-between pb-4 text-center md:text-left">
            <a href="/">
                <img src="{{ asset('img/logo.svg') }}" class="h-10" alt="logo">
            </a>
        </div>
        <div class="pt-4 mt-4 text-gray-700 text-xs border-t border-gray-300 text-center"> ©2021 Salary. MuTec. All rights reserved.
        </div>
    </footer>

    <script>
        // var startPos = 0,
        //     winScrollTop = 0;
        // // scrollイベントを設定∂
        // window.addEventListener('scroll', function() {
        //     winScrollTop = this.scrollY;
        //     if (winScrollTop >= startPos) {
        //         // 下にスクロールされた時
        //         if (winScrollTop >= 200) {
        //             // 下に200pxスクロールされたら隠す
        //             document.getElementById('scrollArea').classList.add('hide');
        //         }
        //     } else {
        //         // 上にスクロールされた時
        //         document.getElementById('scrollArea').classList.remove('hide');
        //     }
        //     startPos = winScrollTop;
        // });
    </script>
    <style>
        .hide {
            transform: translateY(-100%);
        }

        #scrollArea {
            transition: .5s;
        }
    </style>
</body>

</html>