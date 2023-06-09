@extends('layouts.user')

@section('title', '書家 大野泰園 / Shoka Ohno Taien')

@section('content')
<section class="firstview">
    <div class="slider">
        <div class="slick-img">
            <img src="images/1625819_s.jpg" alt="書家の写真" />
        </div>
        <div class="slick-img">
            <img src="images/1368913_m.jpg" alt="筆と硯の写真" />
        </div>
        <div class="slick-img">
            <img src="images/key-image-sho.jpg" alt="漢字書の写真" />
        </div>
    </div>
</section>
<section id="WORKS" class="section bg bg-light">
    <div class="container-md">
        <h1 class="mb-md-5">作品<br><span>artworks</span></h1>
        <div class="row align-center mb-md-5">
            <div class="col">
                <a href="#KANJI">
                    <img class="mb-md-3" src="images/key-image-sho.jpg" alt="作品：漢字書">
                </a>
                <h5 class="ms-md-5">漢字書</h5>
            </div>
            <div class="col">
                <a href="#HIRAGANA">
                    <img class="mb-md-3" src="images/key-image-sho.jpg" alt="作品：ひらがな">
                </a>
                <h5 class="ms-md-5">ひらがな</h5>
            </div>
            <div class="col">
                <a href="#TENKOKU">
                    <img class="mb-md-3" src="images/work_icon.jpeg" alt="作品：篆刻">
                </a>
                <h5 class="ms-md-5">篆刻</h5>
            </div>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button type="button" class="btn btn-secondary" onclick="location.href='#WORKS'">作品ページへ<br><span>artwork room</span></button>
        </div>
    </div>
</section>
<section id="PROFILE" class="section bg bg-light">
    <div class="sub-section">
        <div class="profile-img col-img item1" alt="漢字書"></div>
        <div class="container-sm col-text item2 mt-md-5">
<!--            <div class="profile-spacer"></div>
-->            <h2 class="mb-md-5">大野 泰園</h2>
            <div class="ryakureki">
                <h3 class="">略歴</h3>
                <p>神奈川県出身<br>書家<br>東京都在住</p>
            </div>
            <div class="shoreki">
                <h3 class="">書歴</h3>
                <table>
                    <tbody>
                        <tr>
                            <td>2010年</td>
                            <td>書家 野尻泰煌に師事</td>
                        </tr>                        <tr>
                            <td>2023年4月</td>
                            <td>公益財団法人 日本書道教育学会 書道師範コース修了</td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td> </td>
                        </tr>
                    </tbody>
                </table>
                <div class="profile-spacer"></div>
            </div>
        </div>
    </div>
</section>
<section id="NEWS" class="section bg bg-success">
    News
</section>
<section id="CONTACT" class="section-slim bg bg-info">
    Contact
</section>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>人類社会のすべての構成員の固有の尊厳と平等で譲ることのできない権利とを承認することは</h1>
            <h2>人類社会のすべての構成員の固有の尊厳と平等で譲ることのできない権利とを承認することは</h2>
            <h3>人類社会のすべての構成員の固有の尊厳と平等で譲ることのできない権利とを承認することは</h3>
            <h4>人類社会のすべての構成員の固有の尊厳と平等で譲ることのできない権利とを承認することは</h4>
            <h5>人類社会のすべての構成員の固有の尊厳と平等で譲ることのできない権利とを承認することは</h5>
        </div>
    </div>
</div>
@endsection