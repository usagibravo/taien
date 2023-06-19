@extends('layouts.user')

@section('title', '書家 大野泰園 / Shoka Ohno Taien - artwork')

@section('content')
<!-- <section class="section-artwork bg bg-light"> -->
<section class="section-artwork">
<div id="wrapper">
<div id="header">
  <h1>Masonry Sample 1</h1>
  <p id="ww"> Window Width : <span></span></p>
</div>
<div id="container">
  <div class="item x2 clearfix">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non alias dolore totam vero blanditiis harum quod. Perferendis, sit, praesentium possimus nostrum quisquam quod nisi fugiat consequuntur. Atque, recusandae reiciendis mollitia!</p>
    <p>Animi sint corrupti ipsum sunt. Libero, odio, maiores maxime similique soluta distinctio repudiandae debitis quisquam velit assumenda eligendi eaque nihil cum sequi possimus doloremque est illo atque! Repellat, non, itaque!</p>
  </div>
  <div class="item"><img src="/images/1368913_m.jpg"  alt="">
    <p>title 1</p>
  </div>
  <div class="item"><img src="/images/1625819_s.jpg"  alt="">
    <p>title 1</p>
  </div>
  <div class="item"><img src="/images/hiragana.jpg"  alt="">
    <p>title 1</p>
  </div>
  <div class="item"><img src="/images/1368913_m.jpg"  alt="">
    <p>title 1</p>
  </div>
  <div class="item"><img src="/images/1625819_s.jpg"  alt="">
    <p>title 1</p>
  </div>
  <div class="item"><img src="/images/hiragana.jpg"  alt="">
    <p>title 1</p>
  </div>
  <div class="item"><img src="/images/1368913_m.jpg"  alt="">
    <p>title 1</p>
  </div>
  <div class="item"><img src="/images/1625819_s.jpg"  alt="">
    <p>title 1</p>
  </div>
  <div class="item"><img src="/images/hiragana.jpg"  alt="">
    <p>title 1</p>
  </div>
  <div class="item"><img src="/images/1368913_m.jpg"  alt="">
    <p>title 1</p>
  </div>
  <div class="item"><img src="/images/1625819_s.jpg"  alt="">
    <p>title 1</p>
  </div>
  <div class="item"><img src="/images/hiragana.jpg"  alt="">
    <p>title 1</p>
  </div>
  <div class="item"><img src="/images/1368913_m.jpg"  alt="">
    <p>title 1</p>
  </div>
  <div class="item"><img src="/images/1625819_s.jpg"  alt="">
    <p>title 1</p>
  </div>
  <div class="item"><img src="/images/hiragana.jpg"  alt="">
    <p>title 1</p>
  </div>
  <div class="item"><img src="/images/1368913_m.jpg"  alt="">
    <p>title 1</p>
  </div>
  <div class="item"><img src="/images/1625819_s.jpg"  alt="">
    <p>title 1</p>
  </div>
  <div class="item"><img src="/images/hiragana.jpg"  alt="">
    <p>title 1</p>
  </div>
  <div class="item"><img src="/images/1368913_m.jpg"  alt="">
    <p>title 1</p>
  </div>
  <div class="item"><img src="/images/1625819_s.jpg"  alt="">
    <p>title 1</p>
  </div>
  <div class="item"><img src="/images/hiragana.jpg"  alt="">
    <p>title 1</p>
  </div>
  <div class="item"><img src="/images/1368913_m.jpg"  alt="">
    <p>title 1</p>
  </div>
  <div class="item"><img src="/images/1625819_s.jpg"  alt="">
    <p>title 1</p>
  </div>
  <div class="item"><img src="/images/hiragana.jpg"  alt="">
    <p>title 1</p>
  </div>
</div>
</div>
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

<script src="../lazyload/js/jquery.lazyload.min.js"></script> 
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

@endsection