// JavaScript Document
//================================
//ハンバーガーメニュー
//================================
document.addEventListener('DOMContentLoaded', function() {
	document.getElementById("menuBtn").addEventListener("click", function() {
		this.classList.toggle("active");
		document.getElementById("nav").classList.toggle("active");
		document.getElementById("mask").classList.toggle("active");
    })
});

//================================
//スライダー
//================================
$('.slider').slick({
    autoplay: true,
    autoplaySpeed: 5000,
    speed: 2000,
    fade: true,
    cssEase: 'linear'
  });

//================================
//page top
//================================
$(function(){
  var pagetop = $('#page_top');
  // ボタン非表示
  pagetop.hide();
  // 300px スクロールしたらボタン表示
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
          pagetop.fadeIn();
        } else {
          pagetop.fadeOut();
        }
      });
      pagetop.click(function () {
        $('body, html').animate({ scrollTop: 0 }, 500);
        return false;
  });
});

//================================
//モーダルウインドウ
//================================

//================================
//スクロールアニメーション
//================================