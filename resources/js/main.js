/**
 * Navbar Backgound Color Control
 */

// スロクロールに伴い色が透過→白に変化するJS

$(function(){
    $(window).scroll(function() {
        if ($(this).scrollTop() > 150) {
            $('nav').css('background-color', '#fff'); /* htmlファイルのnavタグの背景色変更 */
            $('nav').css('--bs-navbar-padding-y', '0'); /* Shrink navbar */
        } else {
            $('nav').css('background', 'none'); /* htmlファイルのnavタグの背景色変更 */
            $('nav').css('--bs-navbar-padding-y', '0.5rem'); /* Unshrink navbar */
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


/*
  $('#contactModal').on('show.bs.modal', function (event) {
    console.log("event handler started")
    var modal = $(this)  //モーダルを取得
    modal.find('.modal-body p#modalName').text($('#formNameInput').val()) //inputタグにも表示
    modal.find('.modal-body p#modalEmail').text($('#formEmailInput').val()) //inputタグにも表示
    modal.find('.modal-body p#modalSubject').text($('#formSubjectInput').val()) //inputタグにも表示
    modal.find('.modal-body p#modalBody').text($('#formBodyInput').val()) //inputタグにも表示
  })
*/
  $('.form-btn').click(function() {

    const name     = $('input[name="name"]').val();
    const email    = $('input[name="email"]').val();
    const subject  = $('input[name="subject"]').val();
    const body     = $('textarea[name="body"]').val();
    // const inputContents = body.replace( /\r?\n/g, '<br />' );
    let error = false;
  
    $('.attention-name').text('');
    $('.attention-email').text('');
    $('.attention-subject').text('');
    $('.attention-body').text('');
  
    // name
    // 必須
    if (name == '' || name == null) {
      $('.attention-name').show().text('お名前は必須項目です。');
      error = true;
      console.log('name error');
    }
  
    // email
    // 英数字のみ、@を含む
    if (!email.match(/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/)) {
      $('.attention-email').show().text('メールアドレスは正しく入力してください。');
      error = true;
    }
    // 必須
    if (email == '' || email == null) {
      $('.attention-email').show().text('メールアドレスは必須項目です。');
      error = true;
    }
  
    // subject
    // 必須
    if (name == '' || name == null) {
      $('.attention-subject').show().text('件名は必須項目です。');
      error = true;
    }

    // body
    // 必須
    if (body == '') {
      $('.attention-body').show().text('お問い合わせ内容は必須項目です。');
      error = true;
    }

    if (error == false) {
      $('.modalName').text(name).val(name);
      $('.modalEmail').text(email).val(email);
      $('.modalSubject').text(subject).val(subject);
      $('.modalBody').text(body).val(body);

      $('#contactModal').modal('show')
    } else {
      //
    }
  });

  $('#contactModal').on('hidden.bs.modal', function (event) {
    console.log('closed!')
    $('.form-btn').removeAttr("data-bs-toggle data-bs-target)");
  })