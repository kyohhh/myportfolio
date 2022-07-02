// ローディング判定
jQuery(function ($) {
	// この中であればWordpressでも「$」が使用可能になる

	// jQuery(window).on("load", function() {
	// 	jQuery("body").attr("data-loading", "true");
	// });


	// スクロール判定
	$(window).on("scroll", function() {
		if (100 < jQuery(this).scrollTop()) {
			jQuery("body").attr("data-scroll", "true");
		} else {
			jQuery("body").attr("data-scroll", "false");
		}
	});

	// ================
	// spメニュー
	// ================
	// ハンバーガー
	$(".js-hamburger").click(function() {
		$(this).toggleClass("open");
		$(".js-drawer-menu").toggleClass("open");

		return false;
	});

	// ドロワー
	$(".js-drawer-menu a[href]").click(function() {
		$('.js-hamburger').trigger('click');
	});

		// ================
		// swiper
		// ================
		// トップページ
		//メインビジュアル
		let mySwiper1 = new Swiper ('.js-mv-swiper', {
			loop: true,
			effect: 'fade',
			autoplay: {
			delay: 4000,
			disableOnInteraction: false,
			},
			speed: 2000
		});

		//worksセクション
		let mySwiper2 = new Swiper ('.js-works-swiper', {
			loop: true,
			effect: 'slide',
			autoplay: {
			delay: 4000,
			disableOnInteraction: false,
			},
			speed: 2000,
			pagination: {
			el: '.js-works-pagination',
			type: 'bullets', //ページネーションの種類
			clickable: true, //クリックに反応させる
			}
		});


		// 制作実績詳細
		let mySwiper3 = new Swiper ('.js-detail-swiper', {
			loop: true,
			effect: 'slide',
			autoplay: {
			delay: 4000,
			disableOnInteraction: false,
			},
			pagination: {
				el: '.js-works-pagination',
				type: 'bullets', //ページネーションの種類
				clickable: true, //クリックに反応させる
				},
			speed: 2000,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			slidesPerView: 1,
			spaceBetween: 0,
			initialSlide: 2,
			breakpoints: {
				// スライドの表示枚数：500px以上の場合
				768: {
				  slidesPerView: 3,
				}
			  }
		});

		// ================
		// ボタン
		// ================
		var topBtn = $('.js-pagetop');
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

  // ================
  // headerの透過切り替え
  // ================
	let header = $(".js-top-header");
	let headerHeight = $(".js-top-header").outerHeight(); //ヘッダーコンテンツ
	let imgHeight = $(".js-mv").outerHeight() - headerHeight; //画像の高さ取得

	$(window).on('load scroll', function(){
				if ($(window).scrollTop() < imgHeight) {
				// 指定px以下のスクロールでblackを外す
				header.removeClass("black")
				} else {
				// 指定px以上のスクロールでblackを付与
				header.addClass("black")
				}
	});

		// /* スムーススクロール */
		// jQuery('a[href^="#"]').click(function() {
		// 	let header = jQuery(".js-header").height();
		// 	let speed = 300;
		// 	let id = jQuery(this).attr("href");
		// 	let target = jQuery("#" == id ? "html" : id);
		// 	let position = jQuery(target).offset().top - header;
		// 	if ("fixed" !== jQuery("#header").css("position")) {
		// 		position = jQuery(target).offset().top;
		// 	}
		// 	if (0 > position) {
		// 		position = 0;
		// 	}
		// 	jQuery("html, body").animate(
		// 		{
		// 			scrollTop: position
		// 		},
		// 		speed
		// 	);
		// 	return false;
		// });

		/* 電話リンク */
		let ua = navigator.userAgent;
		if (ua.indexOf("iPhone") < 0 && ua.indexOf("Android") < 0) {
			jQuery('a[href^="tel:"]')
				.css("cursor", "default")
				.on("click", function(e) {
					e.preventDefault();
				});
		}
});
