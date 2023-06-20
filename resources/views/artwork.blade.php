@extends('layouts.user')

@section('title', '書家 大野泰園 / Shoka Ohno Taien - artwork')

@section('content')
<!-- <section class="section-artwork bg bg-light"> -->
<section id="ARTWORK" class="section-artwork">
    <div id="wrapper">
        <div id="header">
            <h1 class="mb-md-5"><span>artworks gallary</span></h1>
            <div class="d-grid gap-2 d-md-flex justify-content-center mb-md-3">
                <button type="button" class="btn btn-outline-secondary btn-sm active" aria-pressed="true">All</button>
                <button type="button" class="btn btn-outline-secondary btn-sm">漢字書</button>
                <button type="button" class="btn btn-outline-secondary btn-sm">ひらがな</button>
                <button type="button" class="btn btn-outline-secondary btn-sm">篆刻</button>
            </div>
            <!-- <p id="ww"> Window Width : <span></span></p> -->
        </div>
        <hr class="my-md-5 my-ms-3">
        <div class="pswp-gallery" id="container">
            <div class="item pswp-gallery__item">
                <a href="/images/1368913_m.jpg" data-pswp-width="2500" data-pswp-height="1668" target="_blank"></a>
                    <img src="/images/1368913_m.jpg" alt="item1">
                    <p>title 1</p>
                </a>
                <p class="pswp-caption-content"><strong>Lorem ipsum dolor (1933)</strong><br>Color photograph<br>12 x 10</p>
            </div>
            <div class="item">
                <a href="/images/hiragana.jpg" data-pswp-width="1668" data-pswp-height="2500" target="_blank"></a>
                    <img src="/images/hiragana.jpg" alt="item1">
                    <p>title 1</p>
                </a>
                <div class="pswp-caption-content"><strong>Lorem ipsum dolor (1933)</strong><br>Color photograph<br>12 x 10</div>
            </div>
            <div class="item">
                <a href="/images/1625819_s.jpg" data-pswp-width="2500" data-pswp-height="1668" target="_blank"></a>
                    <img src="/images/1625819_s.jpg" alt="item1">
                    <p>title 1</p>
                </a>
                <div class="pswp-caption-content"><strong>Lorem ipsum dolor (1933)</strong><br>Color photograph<br>12 x 10</div>
            </div>
            <div class="item">
                <a href="/images/1368913_m.jpg" data-pswp-width="2500" data-pswp-height="1668" target="_blank"></a>
                    <img src="/images/1368913_m.jpg" alt="item1">
                    <p>title 1</p>
                </a>
                <div class="pswp-caption-content"><strong>Lorem ipsum dolor (1933)</strong><br>Color photograph<br>12 x 10</div>
            </div>
            <div class="item">
                <a href="/images/hiragana.jpg" data-pswp-width="1668" data-pswp-height="2500" target="_blank"></a>
                    <img src="/images/hiragana.jpg" alt="item1">
                    <p>title 1</p>
                </a>
                <div class="pswp-caption-content"><strong>Lorem ipsum dolor (1933)</strong><br>Color photograph<br>12 x 10</div>
            </div>
            <div class="item">
                <a href="/images/1625819_s.jpg" data-pswp-width="2500" data-pswp-height="1668" target="_blank"></a>
                    <img src="/images/1625819_s.jpg" alt="item1">
                    <p>title 1</p>
                </a>
                <div class="pswp-caption-content"><strong>Lorem ipsum dolor (1933)</strong><br>Color photograph<br>12 x 10</div>
            </div>
            <div class="item">
                <a href="/images/1368913_m.jpg" data-pswp-width="2500" data-pswp-height="1668" target="_blank"></a>
                    <img src="/images/1368913_m.jpg" alt="item1">
                    <p>title 1</p>
                </a>
                <div class="pswp-caption-content"><strong>Lorem ipsum dolor (1933)</strong><br>Color photograph<br>12 x 10</div>
            </div>
            <div class="item">
                <a href="/images/hiragana.jpg" data-pswp-width="1668" data-pswp-height="2500" target="_blank"></a>
                    <img src="/images/hiragana.jpg" alt="item1">
                    <p>title 1</p>
                </a>
                <div class="pswp-caption-content"><strong>Lorem ipsum dolor (1933)</strong><br>Color photograph<br>12 x 10</div>
            </div>
            <div class="item">
                <a href="/images/1625819_s.jpg" data-pswp-width="2500" data-pswp-height="1668" target="_blank"></a>
                    <img src="/images/1625819_s.jpg" alt="item1">
                    <p>title 1</p>
                </a>
                <div class="pswp-caption-content"><strong>Lorem ipsum dolor (1933)</strong><br>Color photograph<br>12 x 10</div>
            </div>
            <div class="item">
                <a href="/images/1368913_m.jpg" data-pswp-width="2500" data-pswp-height="1668" target="_blank"></a>
                    <img src="/images/1368913_m.jpg" alt="item1">
                    <p>title 1</p>
                </a>
                <div class="pswp-caption-content"><strong>Lorem ipsum dolor (1933)</strong><br>Color photograph<br>12 x 10</div>
            </div>
            <div class="item">
                <a href="/images/hiragana.jpg" data-pswp-width="1668" data-pswp-height="2500" target="_blank"></a>
                    <img src="/images/hiragana.jpg" alt="item1">
                    <p>title 1</p>
                </a>
                <div class="pswp-caption-content"><strong>Lorem ipsum dolor (1933)</strong><br>Color photograph<br>12 x 10</div>
            </div>
            <div class="item">
                <a href="/images/1625819_s.jpg" data-pswp-width="2500" data-pswp-height="1668" target="_blank"></a>
                    <img src="/images/1625819_s.jpg" alt="item1">
                    <p>title 1</p>
                </a>
                <div class="pswp-caption-content"><strong>Lorem ipsum dolor (1933)</strong><br>Color photograph<br>12 x 10</div>
            </div>
            <div class="item">
                <a href="/images/1368913_m.jpg" data-pswp-width="2500" data-pswp-height="1668" target="_blank"></a>
                    <img src="/images/1368913_m.jpg" alt="item1">
                    <p>title 1</p>
                </a>
                <div class="pswp-caption-content"><strong>Lorem ipsum dolor (1933)</strong><br>Color photograph<br>12 x 10</div>
            </div>
            <div class="item">
                <a href="/images/hiragana.jpg" data-pswp-width="1668" data-pswp-height="2500" target="_blank"></a>
                    <img src="/images/hiragana.jpg" alt="item1">
                    <p>title 1</p>
                </a>
                <div class="pswp-caption-content"><strong>Lorem ipsum dolor (1933)</strong><br>Color photograph<br>12 x 10</div>
            </div>
            <div class="item">
                <a href="/images/1625819_s.jpg" data-pswp-width="2500" data-pswp-height="1668" target="_blank"></a>
                    <img src="/images/1625819_s.jpg" alt="item1">
                    <p>title 1</p>
                </a>
                <div class="pswp-caption-content"><strong>Lorem ipsum dolor (1933)</strong><br>Color photograph<br>12 x 10</div>
            </div>
            <div class="item">
                <a href="/images/1368913_m.jpg" data-pswp-width="2500" data-pswp-height="1668" target="_blank"></a>
                    <img src="/images/1368913_m.jpg" alt="item1">
                    <p>title 1</p>
                </a>
                <div class="pswp-caption-content"><strong>Lorem ipsum dolor (1933)</strong><br>Color photograph<br>12 x 10</div>
            </div>
            <div class="item">
                <a href="/images/hiragana.jpg" data-pswp-width="1668" data-pswp-height="2500" target="_blank"></a>
                    <img src="/images/hiragana.jpg" alt="item1">
                    <p>title 1</p>
                </a>
                <div class="pswp-caption-content"><strong>Lorem ipsum dolor (1933)</strong><br>Color photograph<br>12 x 10</div>
            </div>
            <div class="item">
                <a href="/images/1625819_s.jpg" data-pswp-width="2500" data-pswp-height="1668" target="_blank"></a>
                    <img src="/images/1625819_s.jpg" alt="item1">
                    <p>title 1</p>
                </a>
                <div class="pswp-caption-content"><strong>Lorem ipsum dolor (1933)</strong><br>Color photograph<br>12 x 10</div>
            </div>
            <div class="item">
                <a href="/images/1368913_m.jpg" data-pswp-width="2500" data-pswp-height="1668" target="_blank"></a>
                    <img src="/images/1368913_m.jpg" alt="item1">
                    <p>title 1</p>
                </a>
                <div class="pswp-caption-content"><strong>Lorem ipsum dolor (1933)</strong><br>Color photograph<br>12 x 10</div>
            </div>
            <div class="item">
                <a href="/images/hiragana.jpg" data-pswp-width="1668" data-pswp-height="2500" target="_blank"></a>
                    <img src="/images/hiragana.jpg" alt="item1">
                    <p>title 1</p>
                </a>
                <div class="pswp-caption-content"><strong>Lorem ipsum dolor (1933)</strong><br>Color photograph<br>12 x 10</div>
            </div>
            <div class="item">
                <a href="/images/1625819_s.jpg" data-pswp-width="2500" data-pswp-height="1668" target="_blank"></a>
                    <img src="/images/1625819_s.jpg" alt="item1">
                    <p>title 1</p>
                </a>
                <div class="pswp-caption-content"><strong>Lorem ipsum dolor (1933)</strong><br>Color photograph<br>12 x 10</div>
            </div>
        </div> <!-- Container -->
    </div> <!-- Section -->
</section>
@endsection
<!--
<div class="demo"></div>
<div class="demo"><img src="//unsplash.it/602/660" alt="" class="demo-image"></div>
<div class="demo"><img src="//unsplash.it/660/646" alt="" class="demo-image"></div>
<div class="demo"><img src="//unsplash.it/660/646" alt="" class="demo-image"></div>
<div class="demo"><img src="//unsplash.it/813/455" alt="" class="demo-image"></div>
<div class="demo"><img src="//unsplash.it/470/896" alt="" class="demo-image"></div>
<div class="demo"><img src="//unsplash.it/664/653" alt="" class="demo-image"></div>
<div class="demo"><img src="//unsplash.it/708/313" alt="" class="demo-image"></div>
<div class="demo"><img src="//unsplash.it/738/578" alt="" class="demo-image"></div>
<div class="demo"><img src="//unsplash.it/458/482" alt="" class="demo-image"></div>
-->
@section('body-script')

<script>
jQuery(function($){
  var $container = $('#container');
    $container.imagesLoaded(function(){
      $container.masonry({
        itemSelector: '.item',
        isFitWidth: true,
        columnWidth: 360
      });
    });
    $('#ww span').text($(window).width());
	$(window).resize(function () {
		$('#ww span').text($(window).width());
	});	
});
</script>

<script type="module">
    import PhotoSwipeLightbox from 'https://cdn.jsdelivr.net/npm/photoswipe@5.3.7/dist/photoswipe-lightbox.esm.min.js';
    import PhotoSwipeDynamicCaption from 'https://cdn.jsdelivr.net/npm/photoswipe-dynamic-caption-plugin@1.2.7/photoswipe-dynamic-caption-plugin.esm.js';

    const smallScreenPadding = {
    top: 0, bottom: 0, left: 0, right: 0
    };
    const largeScreenPadding = {
    top: 30, bottom: 30, left: 0, right: 0
    };
    const lightbox = new PhotoSwipeLightbox({
    gallerySelector: '#container',
    childSelector: '.item',

    // optionaly adjust viewport
    paddingFn: (viewportSize) => {
        return viewportSize.x < 700 ? smallScreenPadding : largeScreenPadding
    },
    pswpModule: () => import('https://cdn.jsdelivr.net/npm/photoswipe@5.3.7/dist/photoswipe.esm.min.js')
    });

    const captionPlugin = new PhotoSwipeDynamicCaption(lightbox, {
    mobileLayoutBreakpoint: 700,
    type: 'auto',
    mobileCaptionOverlapRatio: 1
    });

    lightbox.init();
</script>


@endsection