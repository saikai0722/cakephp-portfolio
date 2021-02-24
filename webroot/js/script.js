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
//カテゴリー
//================================
(function () {

  // ソート処理
  let clickSort;
  let clickScroll;
  let allShow;
  let sortTtlChange;
  const sortTtlNameArrey = []; //  data-sort-navを入れる配列

  const navInput = document.getElementsByClassName('nav-input');
  const sortList = document.getElementById('sort-list');
  const sortListLi = sortList.getElementsByTagName('li');
  const sortTtl = document.getElementById('sort-ttl');

  for (var i = 0; i < navInput.length; i++) {
      //  data-sort-navを配列に入れる
      sortTtlNameArrey.push(navInput[i].getAttribute('data-sort-nav'));
      // console.log(sortTtlNameArrey);

      (function (n) {

      // #sort-ttlを変更
      sortTtlChange = function (selectName) {
          let selectSortTtlName;

          // 全て表示
          if (selectName === 'show-all') {
              selectSortTtlName = 'all';
          } else {
              // sortTtlNameArreyにあてはまるものを探す
          for (var i = 0; i < sortTtlNameArrey.length; i++) {
              if (sortTtlNameArrey[i] == selectName) {
                  selectSortTtlName = sortTtlNameArrey[i].replace('-', ' '); // アンダースコアをスペースに
              break;
              }
          }
      }
          // console.log(sortTtlName)
          const sortTtlName = selectSortTtlName;
          sortTtl.innerHTML = sortTtlName;
      };

      // すべて表示
      allShow = function (e) {
          for (var i = 0; i < sortListLi.length; i++) {
              sortListLi[i].classList.add('is-selected');
          }
      };
      // しぼりこみ表示
      clickSort = function (e) {
          const dataSortNav = e.currentTarget.getAttribute('data-sort-nav');

          // dataSortNavと同じ値を持っているものにclassをつける
          for (var i = 0; i < sortListLi.length; i++) {
              (function (n) {
                  const sortListLiDataSortItem = sortListLi[n].getAttribute('data-sort-item');
                  const sortListLiDataSortItemArrey = sortListLiDataSortItem.split(',');
                  // console.log(sortListLiDataSortItemArrey);
                  for (var a = 0; a < sortListLiDataSortItemArrey.length; a++) {
                      if (sortListLiDataSortItemArrey[a] === dataSortNav) {
                      sortListLi[i].classList.add('is-selected');
                      break;
                  } else {
                      sortListLi[i].classList.remove('is-selected');
                  }
              }
              })(i);
          }
      };

      navInput[n].addEventListener('click', function (e) {
          // すべて表示
          if (e.currentTarget.getAttribute('data-sort-nav') === 'show-all') {
              allShow(e);
          } else {
          // 絞り込み
          for (var i = 0; i < navInput.length; i++) {
              navInput[i].classList.remove('is-checked');
          }
          e.currentTarget.classList.add('is-checked');
          clickSort(e);
          }
          sortTtlChange(e.currentTarget.getAttribute('data-sort-nav'));
          }, false);
      })(i);
  }
}());