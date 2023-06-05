<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/favicon.ico">
        <meta name="keywords" content="大野泰園,泰園,書家,書道家,東京,書道師範,公益財団法人日本書道教育学会,書学院,">
        <meta name="description" content="書家　大野泰園のウェブサイト">        

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
        <title>@yield('title')</title>
        
        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <div id="app">
            <header>
                <nav class="navbar fixed-top navbar-expand-md navbar-light bg-light row">
                    <div class="container-fluid">
                        <a class="navbar-brand col-md-3" href="{{ url('/') }}">
                            <img src="storage/image/taienlogo.png" class="headerlogo" alt="大野泰園 / OhnoTaien">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-md-0 col-md-9 row">
                                <li class="nav-item col-md-2">
                                    <a class="nav-link" href="{{ url('/') }}">Works<br>作品</a>
                                </li>
                                <li class="nav-item col-md-2">
                                    <a class="nav-link" href="{{ url('/') }}">Profile<br>プロフィール</a>
                                </li>
                                <li class="nav-item col-md-2">
                                    <a class="nav-link" href="{{ url('/') }}">News<br>お知らせ</a>
                                </li>
                                <li class="nav-item col-md-2">
                                    <a class="nav-link" href="{{ url('/') }}">Contact<br>お問い合わせ</a>
                                </li>
                            </ul>
                        </div>
 <!--                       <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                      </div>
-->                    </div>
                </nav>
                <nav class="navbar fixed-bottom navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features features features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav> 
            </header>

            <article>
                @yield('content')
            </article>

            <footer>
                Footer
            </footer>
        </div>
    </body>
</html>