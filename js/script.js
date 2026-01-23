jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  var topBtn = $('.pagetop');
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  });

  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)
  $(document).on('click', 'a[href*="#"]', function () {
    let time = 400;
    let header = $('header').innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $('html,body').animate({
      scrollTop: targetY
    }, time, 'swing');
    return false;
  });

});

// スライダー
const workSwiper = new Swiper(".js-swiper", {
  slidesPerView: 3.4,
  centeredSlides: true,
  // loop: true,
  rewind: true,
  initialSlide: 2,
  loopAdditionalSlides: -1,  // slidesPerView の端数ぶん余裕を持たせる
  speed: 600,
  spaceBetween: 30,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 1.4,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2.4,
      spaceBetween: 30,
    },
    1024: {
      slidesPerView: 3.4,
      spaceBetween: 30,
    }
  },

});

// ロゴ
// jQuery(function($) {
//   function checkScroll() {
//     if ($(window).scrollTop() === 0) {
//       $('.l-header__logo').addClass('is-top');
//     } else {
//       $('.l-header__logo').removeClass('is-top');
//     }
//   }

//   // 初回チェック
//   checkScroll();

//   // スクロール時にチェック
//   $(window).on('scroll', function() {
//     checkScroll();
//   });
// });

document.addEventListener('DOMContentLoaded', function() {
  
  // .my-vision-swiper が存在するかチェック（エラー防止）
  const visionSliderEl = document.querySelector('.my-vision-swiper');

  if (visionSliderEl) {
    const visionSwiper = new Swiper('.my-vision-swiper', {
      // パラメータ設定
      loop: true, // 無限ループ
      speed: 1000, // 切り替え速度
      effect: 'fade', // フェードエフェクト
      fadeEffect: {
        crossFade: true
      },
      
      // 自動再生
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },

      // ページネーション
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      
      // アクセシビリティ
      a11y: {
        prevSlideMessage: 'Previous slide',
        nextSlideMessage: 'Next slide',
      },
    });
  }
});