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

  // GSAPとScrollTriggerが読み込まれているか、かつターゲット要素があるか確認
  if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined' && document.querySelector('.js-vision-section')) {
    
    // プラグイン登録
    gsap.registerPlugin(ScrollTrigger);

    // アニメーション設定
    gsap.from(".js-vision-img", {
      y: 60,         // 下から60px浮き上がる
      opacity: 0,    // 透明から不透明へ
      scale: 0.9,    // 少し小さい状態から等倍へ
      duration: 1.0, // 1秒かけて
      ease: "power3.out", // ふわっと
      stagger: 0.2,  // 0.2秒ずつずらして順番に
      
      scrollTrigger: {
        trigger: ".js-vision-section", // このセクションが
        start: "top 75%", // 画面の75%の位置に来たら発火
        toggleActions: "play none none none", // 一度だけ再生
        // markers: true // デバッグ用（本番では削除）
      }
    });
  }

  const visionImages = document.querySelectorAll('.p-community-vision__img-wrapper');
  
  if (visionImages.length > 0) {
    visionImages.forEach(function(img) {
      img.addEventListener('mouseenter', function() {
        // 1. すべての画像から 'is-active' クラスを削除
        visionImages.forEach(function(el) {
          el.classList.remove('is-active');
        });
        
        // 2. ホバーされた画像にだけ 'is-active' クラスを追加
        this.classList.add('is-active');
      });
    });
  }
});