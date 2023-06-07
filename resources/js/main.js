/**
 * Navbar Backgound Color Control
 */

// スロクロールに伴い色が透過→白に変化するJS

$(function(){
    $(window).scroll(function() {
        if ($(this).scrollTop() > 150) {
            $('nav').css('transition-duration', '1s');
            $('nav').css('background-color', '#fff'); /* htmlファイルのnavタグの背景色変更 */
        } else {
            $('nav').css('background', 'none'); /* htmlファイルのnavタグの背景色変更 */
        }
    });
});

/**
 * slik slider script
 */

$(function () {
    $(".slider")
      // 最初のスライドに"add-animation"のclassを付ける(data-slick-index="0"が最初のスライドを指す)
      .on("init", function () {
        $('.slick-slide[data-slick-index="0"]').addClass("add-animation");
      })
      // 通常のオプション
      .slick({
        autoplay: true, // 自動再生ON
        fade: true, // フェードON
        arrows: false, // 矢印OFF
        speed: 5000, // スライド、フェードアニメーションの速度2000ミリ秒
        autoplaySpeed: 4000, // 自動再生速度4000ミリ秒
        pauseOnFocus: false, // フォーカスで一時停止OFF
        pauseOnHover: false, // マウスホバーで一時停止OFF
      })
      .on({
        // スライドが移動する前に発生するイベント
        beforeChange: function (event, slick, currentSlide, nextSlide) {
          // 表示されているスライドに"add-animation"のclassをつける
          $(".slick-slide", this).eq(nextSlide).addClass("add-animation");
          // あとで"add-animation"のclassを消すための"remove-animation"classを付ける
          $(".slick-slide", this).eq(currentSlide).addClass("remove-animation");
        },
        // スライドが移動した後に発生するイベント
        afterChange: function () {
          // 表示していないスライドはアニメーションのclassを外す
          $(".remove-animation", this).removeClass(
            "remove-animation add-animation"
          );
        },
      });
  });