@extends('layouts.user')

@section('title', '書家 大野泰園 / Shoka Ohno Taien')

@section('content')
<section class="firstview">
    <div class="slider">
        <div class="slick__bg slick__bg01" alt="書家の写真"></div>
        <div class="slick__bg slick__bg02"> alt="筆と硯の写真"</div>
        <div class="slick__bg slick__bg03"> alt="漢字書の写真"</div>
    </div>
</section>
<section id="WORKS" class="section bg bg-light">
    <div class="container-md">
        <h1 class="mb-5">作品<br><span>artworks</span></h1>
        <div class="row align-center mb-5 d-flex text-center">
            <div class="col-md-4 mb-3">
                <a href="{{ route('artwork', ['work_type' => 'btn-kanji']) }}">
                    <img class="mb-3" src="images/works_section1.png" height="300" width="300" alt="作品：漢字書">
                </a>
                <h5>漢字書</h5>
            </div>
            <div class="col-md-4 mb-3">
                <a href="{{ route('artwork', ['work_type' => 'btn-kana']) }}">
                    <img class="mb-3" src="images/works_section2.png" alt="作品：ひらがな">
                </a>
                <h5>ひらがな</h5>
            </div>
            <div class="col-md-4 mb-3">
                <a href="{{ route('artwork', ['work_type' => 'btn-tenkoku']) }}">
                    <img class="mb-3" src="images/works_section3.png" alt="作品：篆刻">
                </a>
                <h5>篆刻</h5>
            </div>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button type="button" class="btn btn-secondary" onclick="location.href='/artwork'">作品ページへ<br><span>artwork room</span></button>
        </div>
    </div>
</section>
<section id="PROFILE" class="section-profile bg bg-light">
    <div class="profile-top sub-section container-md">
        <div class="col-md-4 item1"></div>
        <div class="col-md-8 item2">
            <div class="col-text mt-md-5">
                <h2 class="mb-md-5">大野 泰園</h2>
                <div class="ryakureki">
                    <h3 class="">略歴</h3>
                    <p>神奈川県出身<br>書家<br>東京都在住</p>
                </div>
                <div class="shoreki">
                    <h3 class="">書歴</h3>
                    <table>
                        <tbody>
                            <tr>
                                <td>2011年</td>
                                <td>書家 野尻泰煌に師事</td>
                            </tr>
                            <tr>
                                <td>2023年4月</td>
                                <td>公益財団法人 日本書道教育学会 書道師範コース修了</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</section>
<section id="NEWS" class="section-news bg bg-light">
    <div class="container-md">
        <h1 class="mb-md-5">お知らせ<br><span>news</span></h1>
        @if(!is_null($posts))
            @foreach($posts as $post)
            <div class="news-post col-md-10 mx-auto pt-md-5">
                <div class="post row d-flex flex-row-reverse">
                    <div class="post-text col-md-8">
                        <div class="title mb-md-3">
                            <h2>{!! Str::limit(nl2br(e($post->title)), 150) !!}</h2>
                        </div>
                        <div class="body mb-md-3" >
                            <p>{!! Str::limit(nl2br($post->body), 1500) !!}</p>
                        </div>
                        <div class="date">
                            <p>Updated: {{ $post->dated_at }}</p>
                        </div>
                    </div>
                    <div class="post-image col-md-4">
                        @if ($post->image_path)
                            <img src=" {{ asset('storage/image/' . $post->image_path) }} ">
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        @endif
    </div>
</section>
@endsection