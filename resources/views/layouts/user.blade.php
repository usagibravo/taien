<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-EG4LNB70E5"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-EG4LNB70E5');
        </script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/favicon.ico">
        <meta name="keywords" content="大野泰園,泰園,書家,書道家,東京,書道師範,公益財団法人日本書道教育学会,書学院,">
        <meta name="description" content="書家 大野泰園のウェブサイト">        

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
        <title>@yield('title')</title>

        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

        <!-- Slick -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

        <!-- Lightbox -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js" integrity="sha512-Ixzuzfxv1EqafeQlTCufWfaC6ful6WFqIz4G+dWvK0beHw0NVJwvCKSgafpy5gwNqKmgUfIBraVwkKI+Cz0SEQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- masonry -->
        <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
        
        <!-- imagesLoaded -->
        <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>

        <!-- Photoswipe -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/photoswipe@5.3.7/dist/photoswipe.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/photoswipe-dynamic-caption-plugin@1.2.7/photoswipe-dynamic-caption-plugin.min.css">
        
        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/main.js'])

    </head>
    <body>
        <div id="app">
            <header>
                <nav class="navbar fixed-top navbar-expand-md navbar-white">
                    <div class="container-fluid px-md-3 ">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img style="height: 72px" src="/images/taienLogo1.png" alt="泰園 Taien">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="container-md ms-auto collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-md-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="/#WORKS">作品<br>artworks</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/#PROFILE">略歴・書歴<br>profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/#NEWS">お知らせ<br>news</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/contact/edit') }}">お問い合わせ<br>contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

            </header>

            <article>
                @yield('content')
            </article>

            <footer class="footer">
                <div class="footer-inner container-md">
                    <div class="footer-logo">
                        <img style="height: 160px" src="/images/taienLogo3.png" alt="泰園ロゴ">
                    </div>
                    <ul class="footer-bottom-list">
                        <li class="footer-btmList-item"><a href="/">top page</a></li>
                        <li class="footer-btmList-item"><a href="/#WORKS">artworks</a></li>
                        <li class="footer-btmList-item"><a href="/#PROFILE">profile</a></li>
                        <li class="footer-btmList-item"><a href="/#NEWS">news</a></li>
                        <li class="footer-btmList-item"><a href="{{ url('/contact/edit') }}">contact</a></li>
                    </ul>                    
                    <p class="footer-copyright">© 2023 書家 大野泰園 / Ohno Taien All rights reserved.</p>
                </div>
            </footer>
        </div>
        @yield('body-script')
    </body>
</html> 