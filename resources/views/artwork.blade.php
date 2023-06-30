@extends('layouts.user')

@section('title', '書家 大野泰園 / Shoka Ohno Taien - artwork')

@section('content')
<!-- <section class="section-artwork bg bg-light"> -->
<section id="ARTWORK" class="section-artwork">
    <div id="wrapper">
        <div id="header">
            <h1 class="mb-mdー5"><span>artworks gallary</span></h1>
            <div class="d-grid gap-2 d-flex justify-content-center mb-md-3">
                <button type="button" id="btn-all" onclick="location.href='/artwork?work_type=btn-all'" class="btn btn-outline-secondary btn-sm">all</button>
                <button type="button" id="btn-kanji" onclick="location.href='/artwork?work_type=btn-kanji'" class="btn btn-outline-secondary btn-sm">漢字書</button>
                <button type="button" id="btn-kana" onclick="location.href='/artwork?work_type=btn-kana'" class="btn btn-outline-secondary btn-sm">ひらがな</button>
                <button type="button" id="btn-tenkoku" onclick="location.href='/artwork?work_type=btn-tenkoku'" class="btn btn-outline-secondary btn-sm">篆刻</button>
            </div>
            <!-- <p id="ww"> Window Width : <span></span></p> -->
        </div>
        <hr class="my-md-5 my-ms-3">
        <div class="pswp-gallery" id="container">
            HTML Placeholder
        </div> <!-- Container -->
        <hr class="my-md-5 my-ms-3 d-block">
    </div> <!-- Section -->
</section>
@endsection

@section('body-script')

<script> // HTML Generation

const workType = '{{ is_null($work_type)?'btn-all':$work_type }}';
const works = {!!json_encode($works, JSON_UNESCAPED_UNICODE)!!};

const workTypeArray = {'btn-kanji':'漢字書', 'btn-kana':'ひらがな', 'btn-tenkoku':'篆刻'};
var lastWorkType = 'btn-all';
btnArray = {'all':document.getElementById('btn-all'), 'btn-kanji':document.getElementById('btn-kanji'), 'btn-kana':document.getElementById('btn-kana'), 'btn-tenkoku':document.getElementById('btn-tenkoku')};

function nvl(val1, val2){
    return (val1 == null)?val2:val1;
}

function switchWorkType(newWorkType) {
    var contentHTML = '';
    var lastButton = document.getElementById(lastWorkType);
    var newButton = document.getElementById(newWorkType);

    lastButton.classList.remove('active');
    lastButton.removeAttribute('aria-pressed');
    newButton.classList.add('active');
    newButton.setAttribute('aria-pressed', 'true');
    for(i=0; i< works.length; i++) {
        if(newWorkType == 'btn-all' || workTypeArray[newWorkType] == works[i].work_type) {
            contentHTML += '<div class="item">\n  <a href="/storage/image/' + works[i].image_path + '" data-pswp-width="' + works[i].image_width + '" data-pswp-height="' + works[i].image_height + '" target="_blank"></a>\n';
            contentHTML += '  <img src="/storage/image/' + works[i].image_path + '" alt="' + works[i].title + '">\n'
            contentHTML += '  <p>' + works[i].title + '</p>\n'
            contentHTML += '  <p class="pswp-caption-content"><b>' + works[i].title + '</b><br>' + nvl(works[i].body, '').replace(/\n/ , '<br>') + '</p>\n'
            contentHTML += '</div>\n'
        }
    }

    jQuery(function($){
        var $container = $('#container');
        $container.imagesLoaded(function(){
            $container.masonry({
            itemSelector: '.item',
            isFitWidth: true,
            columnWidth: 360,
            initLayout: false,
            transitionDuration: '0.8s'
            });
        });
        $('#ww span').text($(window).width());
        $(window).resize(function () {
            $('#ww span').text($(window).width());
        });	
    });

    lastWorkType = newWorkType;
    document.getElementById('container').innerHTML = contentHTML;

    jQuery(function($){
        var $container = $('#container');
        $container.masonry();
    })
}

switchWorkType(workType);

</script>
<!--
<script> // Masonry
jQuery(function($){
    var $container = $('#container');
    $container.imagesLoaded(function(){
        $container.masonry({
        itemSelector: '.item',
        isFitWidth: true,
        columnWidth: 360
        });
    });
    alert('hello!');
    $('#ww span').text($(window).width());
    $(window).resize(function () {
        $('#ww span').text($(window).width());
    });	
});

</script>
-->
<script type="module"> // PhotoSwipe
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