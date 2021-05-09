//PC SP 画像変換 
$(function() {
  var $elem = $(".js-imageChange");
  var sp = "-smp.";
  var pc = "-pc.";
  var replaceWidth = 769;

  function imageSwitch() {
    var windowWidth = parseInt($(window).width());
    $elem.each(function () {
      var $this = $(this);
      if (windowWidth >= replaceWidth) {
        if ($this.attr("src")) {
          $this.attr("src", $this.attr("src").replace(sp, pc));
        } else if ($this.css("background-image")) {
          $this.css("background-image", $this.css("background-image").replace(sp, pc));
        } else {
          $this.attr("data-src", $this.attr("data-src").replace(sp, pc));
        }
      } else {
        if ($this.attr("src")) {
          $this.attr("src", $this.attr("src").replace(pc, sp));
        } else if ($this.css("background-image")) {
          $this.css("background-image", $this.css("background-image").replace(pc, sp));

        } else {
          $this.attr("data-src", $this.attr("data-src").replace(pc, sp));
        }
      }
    });
  }
  imageSwitch();
  var resizeTimer;
  $(window).on("resize", function () {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function () {
      imageSwitch();
    }, 200);
  });
});

//Swiper
$(function() {
  new Swiper ('.js-swiper1', {
    // 以下にオプションを設定
    loop: true, //最後に達したら先頭に戻る
    slidesPerView: 4,
    autoplay: {
        delay: 2500,
        disableOnInteraction: !1
    },
    speed: 500,
    effect: "slide",
    centeredSlides: !0,
    paginationClickable: !0,
    slidesPerView: "auto",
    spaceBetween: 10,
    initialSlide: 1,
    preloadImages: !0,
    lazy: !1,
    autoHeight: true,
       
    //ページネーション表示の設定
    pagination: { 
      el: '.swiper-pagination', //ページネーションの要素
      type: 'bullets', //ページネーションの種類
      clickable: true, //クリックに反応させる
    },
   
    //ナビゲーションボタン（矢印）表示の設定
    // navigation: { 
    //   nextEl: '.swiper-button-next', //「次へボタン」要素の指定
    //   prevEl: '.swiper-button-prev', //「前へボタン」要素の指定
    // },
   
    //スクロールバー表示の設定
    // scrollbar: { 
    //   el: '.swiper-scrollbar', //要素の指定
    // },

    // ブレークポイント指定
    breakpoints: {
        320: {
            slidesPerView: 1.5,
            spaceBetween: 10
        },
        480: {
            slidesPerView: 1.5,
            spaceBetween: 10
        },
        768: {
            slidesPerView: 1.5,
            spaceBetween: 10
        },
        960: {
            slidesPerView: 5,
            spaceBetween: 10
        }
    }

  });
  $('#tab10').prop('checked', true);
  new Swiper ('.js-swiper2', {
    // 以下にオプションを設定
    loop: true, //最後に達したら先頭に戻る
    slidesPerView: 4,
    autoplay: {
        delay: 2500,
        disableOnInteraction: !1
    },
    speed: 500,
    effect: "slide",
    centeredSlides: !0,
    paginationClickable: !0,
    slidesPerView: "auto",
    spaceBetween: 10,
    initialSlide: 1,
    preloadImages: !0,
    lazy: !1,
    autoHeight: true,
       
    //ページネーション表示の設定
    pagination: { 
      el: '.swiper-pagination', //ページネーションの要素
      type: 'bullets', //ページネーションの種類
      clickable: true, //クリックに反応させる
    },
   
    //ナビゲーションボタン（矢印）表示の設定
    // navigation: { 
    //   nextEl: '.swiper-button-next', //「次へボタン」要素の指定
    //   prevEl: '.swiper-button-prev', //「前へボタン」要素の指定
    // },
   
    //スクロールバー表示の設定
    // scrollbar: { 
    //   el: '.swiper-scrollbar', //要素の指定
    // },

    // ブレークポイント指定
    breakpoints: {
        320: {
            slidesPerView: 1.5,
            spaceBetween: 10
        },
        480: {
            slidesPerView: 1.5,
            spaceBetween: 10
        },
        768: {
            slidesPerView: 1.5,
            spaceBetween: 10
        },
        960: {
            slidesPerView: 5,
            spaceBetween: 10
        }
    }

  });
  $('#tab9').prop('checked', true);
  new Swiper ('.js-swiper3', {
    // 以下にオプションを設定
    loop: true, //最後に達したら先頭に戻る
    slidesPerView: 4,
    autoplay: {
        delay: 2500,
        disableOnInteraction: !1
    },
    speed: 500,
    effect: "slide",
    centeredSlides: !0,
    paginationClickable: !0,
    slidesPerView: "auto",
    spaceBetween: 10,
    initialSlide: 1,
    preloadImages: !0,
    lazy: !1,
    autoHeight: true,
       
    //ページネーション表示の設定
    pagination: { 
      el: '.swiper-pagination', //ページネーションの要素
      type: 'bullets', //ページネーションの種類
      clickable: true, //クリックに反応させる
    },
   
    //ナビゲーションボタン（矢印）表示の設定
    // navigation: { 
    //   nextEl: '.swiper-button-next', //「次へボタン」要素の指定
    //   prevEl: '.swiper-button-prev', //「前へボタン」要素の指定
    // },
   
    //スクロールバー表示の設定
    // scrollbar: { 
    //   el: '.swiper-scrollbar', //要素の指定
    // },

    // ブレークポイント指定
    breakpoints: {
        320: {
            slidesPerView: 1.5,
            spaceBetween: 10
        },
        480: {
            slidesPerView: 1.5,
            spaceBetween: 10
        },
        768: {
            slidesPerView: 1.5,
            spaceBetween: 10
        },
        960: {
            slidesPerView: 5,
            spaceBetween: 10
        }
    }

  });
  $('#tab12').prop('checked', true);
  new Swiper ('.js-swiper4', {
    // 以下にオプションを設定
    loop: true, //最後に達したら先頭に戻る
    slidesPerView: 4,
    autoplay: {
        delay: 2500,
        disableOnInteraction: !1
    },
    speed: 500,
    effect: "slide",
    centeredSlides: !0,
    paginationClickable: !0,
    slidesPerView: "auto",
    spaceBetween: 10,
    initialSlide: 1,
    preloadImages: !0,
    lazy: !1,
    autoHeight: true,
       
    //ページネーション表示の設定
    pagination: { 
      el: '.swiper-pagination', //ページネーションの要素
      type: 'bullets', //ページネーションの種類
      clickable: true, //クリックに反応させる
    },
   
    //ナビゲーションボタン（矢印）表示の設定
    // navigation: { 
    //   nextEl: '.swiper-button-next', //「次へボタン」要素の指定
    //   prevEl: '.swiper-button-prev', //「前へボタン」要素の指定
    // },
   
    //スクロールバー表示の設定
    // scrollbar: { 
    //   el: '.swiper-scrollbar', //要素の指定
    // },

    // ブレークポイント指定
    breakpoints: {
        320: {
            slidesPerView: 1.5,
            spaceBetween: 10
        },
        480: {
            slidesPerView: 1.5,
            spaceBetween: 10
        },
        768: {
            slidesPerView: 1.5,
            spaceBetween: 10
        },
        960: {
            slidesPerView: 5,
            spaceBetween: 10
        }
    }

  });
  $('#tab11').prop('checked', true);
  
  new Swiper ('.js-swiper5', {
    // 以下にオプションを設定
    loop: true, //最後に達したら先頭に戻る
    slidesPerView: 4,
    autoplay: {
        delay: 2500,
        disableOnInteraction: !1
    },
    speed: 2500,
    effect: "slide",
    centeredSlides: !0,
    paginationClickable: !0,
    slidesPerView: "auto",
    spaceBetween: 10,
    initialSlide: 1,
    preloadImages: !0,
    lazy: !1,
    autoHeight: true,
       
    //ページネーション表示の設定
    // pagination: { 
    //   el: '.swiper-pagination', //ページネーションの要素
    //   type: 'bullets', //ページネーションの種類
    //   clickable: true, //クリックに反応させる
    // },
   
    //ナビゲーションボタン（矢印）表示の設定
    navigation: { 
      nextEl: '.next1', //「次へボタン」要素の指定
      prevEl: '.prev1', //「前へボタン」要素の指定
    },
   
    //スクロールバー表示の設定
    // scrollbar: { 
    //   el: '.swiper-scrollbar', //要素の指定
    // },

    // ブレークポイント指定
    breakpoints: {
        320: {
            slidesPerView: 1.5,
            spaceBetween: 10
        },
        480: {
            slidesPerView: 1.5,
            spaceBetween: 10
        },
        768: {
            slidesPerView: 1.5,
            spaceBetween: 10
        },
        960: {
            slidesPerView: 3,
            spaceBetween: 20
        }
    }
  });
  $('#tab21').prop('checked', true);
  new Swiper ('.js-swiper6', {
    // 以下にオプションを設定
    loop: true, //最後に達したら先頭に戻る
    slidesPerView: 4,
    autoplay: {
        delay: 2500,
        disableOnInteraction: !1
    },
    speed: 2500,
    effect: "slide",
    centeredSlides: !0,
    paginationClickable: !0,
    slidesPerView: "auto",
    spaceBetween: 10,
    initialSlide: 1,
    preloadImages: !0,
    lazy: !1,
    autoHeight: true,
       
    //ページネーション表示の設定
    // pagination: { 
    //   el: '.swiper-pagination', //ページネーションの要素
    //   type: 'bullets', //ページネーションの種類
    //   clickable: true, //クリックに反応させる
    // },
   
    //ナビゲーションボタン（矢印）表示の設定
    navigation: { 
      nextEl: '.next2', //「次へボタン」要素の指定
      prevEl: '.prev2', //「前へボタン」要素の指定
    },
   
    //スクロールバー表示の設定
    // scrollbar: { 
    //   el: '.swiper-scrollbar', //要素の指定
    // },

    // ブレークポイント指定
    breakpoints: {
        320: {
            slidesPerView: 1.5,
            spaceBetween: 10
        },
        480: {
            slidesPerView: 1.5,
            spaceBetween: 10
        },
        768: {
            slidesPerView: 1.5,
            spaceBetween: 10
        },
        960: {
            slidesPerView: 3,
            spaceBetween: 20
        }
    }
  });
  $('#tab20').prop('checked', true);


  // new Swiper ('.js-swiper7', {
  //   // 以下にオプションを設定
  //   loop: true, //最後に達したら先頭に戻る
  //   slidesPerView: 3,
  //   autoplay: {
  //       delay: 2500,
  //       disableOnInteraction: !1
  //   },
  //   speed: 2500,
  //   effect: "slide",
  //   paginationClickable: !0,
  //   slidesPerView: "auto",
  //   spaceBetween: 10,
  //   initialSlide: 1,
  //   preloadImages: !0,
  //   lazy: !1,
  //   autoHeight: true,
       
  //   // ブレークポイント指定
  //   breakpoints: {
  //       320: {
  //           slidesPerView: 1,
  //           spaceBetween: 10
  //       },
  //       480: {
  //           slidesPerView: 1,
  //           spaceBetween: 10
  //       },
  //       768: {
  //           slidesPerView: 2,
  //           spaceBetween: 10
  //       },
  //       960: {
  //           slidesPerView: 3,
  //           spaceBetween: 10
  //       }
  //   }
  // });
  // $('#tab23').prop('checked', true);
  // new Swiper ('.js-swiper8', {
  //   // 以下にオプションを設定
  //   loop: true, //最後に達したら先頭に戻る
  //   slidesPerView: 3,
  //   autoplay: {
  //       delay: 2500,
  //       disableOnInteraction: !1
  //   },
  //   speed: 2500,
  //   effect: "slide",
  //   paginationClickable: !0,
  //   slidesPerView: "auto",
  //   spaceBetween: 10,
  //   initialSlide: 1,
  //   preloadImages: !0,
  //   lazy: !1,
  //   autoHeight: true,
       
  //   // ブレークポイント指定
  //   breakpoints: {
  //       320: {
  //           slidesPerView: 1,
  //           spaceBetween: 10
  //       },
  //       480: {
  //           slidesPerView: 1,
  //           spaceBetween: 10
  //       },
  //       768: {
  //           slidesPerView: 2,
  //           spaceBetween: 10
  //       },
  //       960: {
  //           slidesPerView: 3,
  //           spaceBetween: 10
  //       }
  //   }
  // });
  // $('#tab22').prop('checked', true);
});

//郵便番号自動
$(function() {
  $('#your-zip').on('keyup', function() {
    AjaxZip3.zip2addr( this, '', 'your-prefecture', 'your-address' );
  });
});

//SE対策
$(function() {
  var ua = navigator.userAgent;
  
  var sp = ua.indexOf('iPhone') > -1 ||
    (ua.indexOf('Android') > -1 && ua.indexOf('Mobile') > -1);

  var tab = !sp && (
    ua.indexOf('iPad') > -1 ||
    (ua.indexOf('Macintosh') > -1 && 'ontouchend' in document) ||
    ua.indexOf('Android') > -1
  );

  new ViewportExtra(tab ? 960 : 375);
});

//
$(function() {
  var ua = navigator.userAgent;
  var windowWidth = parseInt($(window).width());
  var replaceWidth = 960;
  
  var sp = ua.indexOf('iPhone') > -1 ||
    (ua.indexOf('Android') > -1 && ua.indexOf('Mobile') > -1);

  var tab = !sp && (
    ua.indexOf('iPad') > -1 ||
    (ua.indexOf('Macintosh') > -1 && 'ontouchend' in document) ||
    ua.indexOf('Android') > -1
  );
  console.log(windowWidth+'px');
  new ViewportExtra(tab ? 1024 : 375);
});

//modal
$( function() {
  // var inst = $( '[data-remodal-id=modal]' ).remodal();
  // $( document ).on( 'click', '.open-remodal', function() {
  //     inst.open();
  //     return false;
  // } );
  // $( document ).on( 'click', '.exit-remodal', function() {
  //     inst.close();
  // } );
} );

//fixbnr
function hashlink(e) {
  location.href = e }!
  function() {
  const e = document.getElementById("fixed"),
      i = 85;
  let n = 0,
      s = 0,
      t = !1;
  window.addEventListener("scroll", (function(a) {
      s = window.scrollY, t || (window.requestAnimationFrame((function() {
          s > i && (s > n ? e.classList.add("bnr-fixedmove") : e.classList.remove("bnr-fixedmove"), n = s), t = !1
      })), t = !0)
  }))
}();

