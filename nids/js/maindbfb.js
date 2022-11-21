/* *******************************************************
 * filename : main.js
 * description : 메인에만 사용되는 JS
 * date : 2022-08-08
******************************************************** */

setTimeout(function  () {
	addClassName($("body"), "active-page");
},100);

$(window).on('resize', function () {
	//var _skrollr = skrollr.get();
	if ( isMobile() && isSkrollrInstance() ) {
		_skrollr.destroy();
	} else if ( !(isMobile()) &&  !isSkrollrInstance() ) {
		initSkrollr();
	}
});
$(window).on("load",function  () {
	if ( !(isMobile()) ) {
		initSkrollr();
	}
});

$(document).ready(function  () {
	/* ************************
	* Func : 메인 비주얼 높이 설정 및 slick 슬라이드
	* slick.js , getWindowWidth(), getWindowHeight() 필요
	************************ */
	// 메인 비주얼 높이값 설정
	if ($.exists('#mainVisual.full-height')) {
		mainVisualHeight();
		$(window).on('resize', mainVisualHeight);

		function mainVisualHeight () {
			var visual_height = getWindowHeight();	// header가 fixed or absolute일경우 - $("#header").height() 삭제
			$("#mainVisual").height(visual_height);
		}
	}

	// 메인 비주얼 고정 텍스트 Active
	if ($.exists('.main-visual-fixed-txt-con')) {
		addClassName($(".main-visual-fixed-txt-con"), "active-item");
	}

	// 메인 비주얼 슬라이드
	var $mainVisualItem = $(".main-visual-con");
	var visualPausePlay = true;		// Pause, play 사용시 변경

	$mainVisualItem.on('init', function(event, slick, currentSlide) {
		$mainVisualItem.addClass("start-progress");
		$(".main-visual-item").eq(0).addClass("active-item");
		if ($.exists('.main-visual-conuter')) {
			$(".main-visual-conuter .total-num").text(slick.slideCount);
		}
	});
	$mainVisualItem.on('beforeChange', function(event, slick, currentSlide, nextSlide) {	
		$mainVisualItem.removeClass("start-progress");
		$(this).find(".main-visual-item").eq(nextSlide).addClass("active-item");
		$(this).find(".main-visual-item").eq(currentSlide).addClass("stop-active-item");
		if ($.exists('.main-visual-conuter')) {
			$(".main-visual-conuter .cur-num").text(nextSlide+1);
		}
	});
	$mainVisualItem.on('afterChange', function() {
		$(this).find(".stop-active-item").removeClass("stop-active-item active-item");
	});

	$mainVisualItem.slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		fade: true,
		dots:true,
		autoplay: true,
		speed:1000,
		infinite:true,
		autoplaySpeed: 5000,
		// easing: 'easeInOutQuint',
		pauseOnHover:false,
		zIndex:1,
		cssEase: 'cubic-bezier(0.87, 0.03, 0.41, 0.9)',
		prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Prev" tabindex="0" role="button"><i class="xi-angle-left-min"></i></button>',
		nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><i class="xi-angle-right-min"></i></button>'
	});

	$mainVisualItem.find(".slick-dots").wrap("<aside class='slick-dots-wrapper'><div class='area-wide'></div></aside>");

	// 일시정지, 재생버튼 사용시
	if ( visualPausePlay ) {
		$(".slick-dots-wrapper").children().prepend("<span class='slick-control-btns'><button class='slick-pause-btn' title='일시정지'><i class='xi-pause'></i></button><button class='slick-play-btn' title='재생'><i class='xi-play-circle-o'></i></button></span>");

		$(document).on("click",".slick-pause-btn .slick-pause-btn",function  () {
			$mainVisualItem.slick("slickPause");
			$(this).hide();
			$(".slick-pause-btn .slick-play-btn").show();
		});
		$(document).on("click",".slick-pause-btn .slick-play-btn",function  () {
			$mainVisualItem.slick("slickPlay");
			$(this).hide();
			$(".slick-pause-btn .slick-pause-btn").show();
		});
	}

	
	/* ************************
	* Func : 메인 기술소개 슬라이드
	************************ */
	var $mainTechItem = $(".main-tech-list");
	var techPausePlay = true;	

	$mainTechItem.on('init', function(event, slick, currentSlide) {
		//$(".main-tech-item").eq(0).addClass("active-item");
		//$(".main-tech-list .slick-dots").delay(600).animate({opacity: '1'}, 300, 'swing');
		//$(".main-tech-list .slick-arrow").delay(600).animate({opacity: '1'}, 300, 'swing');
	});
	$mainTechItem.on('beforeChange', function(event, slick, currentSlide, nextSlide) {	
		$(this).find(".main-tech-item").eq(nextSlide).addClass("active-item");
		$(this).find(".main-tech-item").eq(currentSlide).addClass("stop-active-item");
		$(".slick-dots-wrapper02, .main-tech-list .slick-arrow").css({"opacity" : "0"});
		$(".slick-dots-wrapper02, .main-tech-list .slick-arrow").delay(600).animate({opacity: '1'}, 300, 'swing');
	});
	$mainTechItem.on('afterChange', function() {
		$(this).find(".stop-active-item").removeClass("stop-active-item active-item");
	});

	$mainTechItem.slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		fade: true,
		dots:true,
		autoplay: false,
		speed:2000,
		infinite:true,
		autoplaySpeed: 8000,
		// easing: 'easeInOutQuint',
		pauseOnHover:false,
		zIndex:1,
		prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Prev" tabindex="0" role="button"><i class="xi-angle-left-min"></i></button>',
		nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><i class="xi-angle-right-min"></i></button>'
	});

	$mainTechItem.find(".slick-dots").wrap("<aside class='slick-dots-wrapper02'><div class='area-box'></div></aside>");

	// 일시정지, 재생버튼 사용시
	if ( techPausePlay ) {
		$(".slick-dots-wrapper02").children().prepend("<span class='slick-control-btns'><button class='slick-pause-btn' title='일시정지'><i class='xi-pause'></i></button><button class='slick-play-btn' title='재생'><i class='xi-play-circle-o'></i></button></span>");

		$(document).on("click",".slick-control-btns02 .slick-pause-btn",function  () {
			$mainTechItem.slick("slickPause");
			$(this).hide();
			$(".slick-control-btns02 .slick-play-btn").show();
		});
		$(document).on("click",".slick-control-btns02 .slick-play-btn",function  () {
			$mainTechItem.slick("slickPlay");
			$(this).hide();
			$(".slick-control-btns02 .slick-pause-btn").show();
		});
	}

	/* ************************
	* Func : 메인 솔루션 슬라이드
	************************ */
	var $mainSolItem = $(".main-solution-list");

	$mainSolItem.on('init', function(event, slick, currentSlide) {
		//$(".main-solution-item").eq(0).addClass("active-item");
	});
	$mainSolItem.on('beforeChange', function(event, slick, currentSlide, nextSlide) {	
		$(this).find(".main-solution-item").eq(nextSlide).addClass("active-item");
		$(this).find(".main-solution-item").eq(currentSlide).addClass("stop-active-item");
	});
	$mainSolItem.on('afterChange', function() {
		$(".main-solution-img, .main-solution-txt").removeClass("animated item01");
		$(this).find(".stop-active-item").removeClass("stop-active-item active-item");
	});

	$mainSolItem.slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		dots:true,
		autoplay: false,
		speed: 800,
		infinite:true,
		autoplaySpeed: 4000,
		easing: 'easeInOutQuint',
		pauseOnHover:false,
		draggable: false,
		touchMove: false,
		customPaging : function(slider, i) {
			var title = $(slider.$slides[i]).data('title');
			return '<a class="page-title">'+title+'</a>';
		}
	});
	$mainSolItem.find(".slick-dots").wrap("<aside class='slick-dots-wrapper03'><div class='area-box'></div></aside>");

	
	/* ************************
	* Func : 메인 뉴스 슬라이드
	* slick.js 필요
	************************ */
	if ($.exists('.main-news-con')) {
		var $newsSlide = $('.main-news-list');
		var slickOptionsNews = { 
			slidesToShow: 2,
			slidesToScroll: 1,
			variableWidth: true,
			arrows: true,
			fade: false,
			dots:false,
			autoplay: false,
			speed:1500,
			infinite:true,
			autoplaySpeed: 4000,
			easing: 'easeInOutQuint',
			pauseOnHover:false,
			appendArrows: $(".main-news-wrapper .arrow-box"),
			prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Prev" tabindex="0" role="button"><i class="xi-angle-left-min"></i></button>',
			nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><i class="xi-angle-right-min"></i></button>',
			responsive: [
						{
						  breakpoint: 1367,
						  settings: {
							slidesToShow: 1,
						  }
						},
					  ]
		};
		if( getWindowWidth () > mobileWidth ) { 			
			$newsSlide.slick(slickOptionsNews); 	
			$(".main-news-list").addClass("start-autoplay-scroll-object");
		}
		$(window).on("resize", function  () {
			if( getWindowWidth () > mobileWidth ) { 			
				$newsSlide.not('.slick-initialized').slick(slickOptionsNews);
				$(".main-news-list").addClass("start-autoplay-scroll-object");
			}else{ 			
				if($('.main-news-list').hasClass("slick-initialized") === true) {
					$newsSlide.slick('unslick');
					$(".main-news-list").removeClass("start-autoplay-scroll-object");
				}
			} 
		});
	}
	
	/* ************************
	* Func : 해당영역갔을때 슬라이드 autoPlay
	* wayPoint.js 필요
	************************ */
	// 해당영역갔을때 슬라이드 autoPlay
	if ($.exists('.start-autoplay-scroll-object')) {
		$(".start-autoplay-scroll-object").slick("slickPause");
		$(".start-autoplay-scroll-object").waypoint(function(direction) {
			if ( direction ===  "down" ) {
				$(".start-autoplay-scroll-object").addClass("play");
				$(".start-autoplay-scroll-object").slick("slickPlay");
			}
		},
		{
			triggerOnce: true,
			offset: startOffset
		});
	}
});


/* ************************
* Func : 기술 비주얼 스크롤
************************ */
$(window).on("load",function  (e) {
	if ( !isMobile() && (getWindowWidth() > tabletWidth) ) { 
		if ($.exists("#mainContainer")) {
			var wheel_move;
			var isPassive = function () {
				var passiveSupported = false;
				try {
				  document.addEventListener("test", null, { get passive() { passiveSupported = true }});
				} catch(e) {}

				return passiveSupported;
			}
			var windowHeightCheck = function  () {
				return $(window).scrollTop();
			}
			var scrollStop = function(event) {
					event.preventDefault();
					event.stopPropagation();
					return false;
			}
			var browserWheelStop = function  () {
				if (isPassive()) {
					this.addEventListener("wheel",scrollStop, {passive: false});
				} else {
					$('body').on('scroll touchmove mousewheel', scrollStop);
				}
			}
			var $section1_top = $("#mainTechCon").offset().top;
			var $section2_top = $("#mainPrdCon").offset().top;
			
			if (windowHeightCheck() ===  0) {
				browserWheelStop();
			}

			$("#mainVisual").on("mousewheel DOMMouseScroll", function (e, delta) {
				e.preventDefault();
				if (delta < 0){
					moveScrollContent($section1_top,false)
					return;
				}else {
					moveScrollContent(0,false)
				}
			});
			$("#mainTechCon").on("mousewheel DOMMouseScroll", function (e, delta) {
				e.preventDefault();
				if (delta > 0){
					moveScrollContent(0,false)
					return;
				}else {
					moveScrollContent($section2_top,true);
					smoothScroll();
				}
			});

			$(".main-scroll-container").on("mousewheel DOMMouseScroll", function (e, delta) {
				var $section1_top = $("#mainVisual").offset().top;
				var $section2_top = $("#mainTechCon").offset().top;
				
				if (delta > 0){ // up
					if (getScrollTop() > $section2_top ) {
						if (isPassive()) {
							window.removeEventListener("wheel",scrollStop, {passive: false});
							smoothScroll();
						} else {
							$('body').off('scroll touchmove mousewheel', scrollStop);
						}
					}else {
						e.preventDefault();
						moveScrollContent(0,true);
						smoothScroll_destory();
					}
					return;
				}else { //down
					if (isPassive()) {
						window.removeEventListener("wheel",scrollStop, {passive: false});
						if (getScrollTop() > $section2_top) {
							smoothScroll();
						}
					} else {
						$('body').off('scroll touchmove mousewheel', scrollStop);
					}
				}
			});
			
			function moveScrollContent (top,scrollState) {
				if(wheel_move && wheel_move.progress() < 1){
					return;
				}
				wheel_move = TweenMax.to('html, body', 0.8 , {
					scrollTop:top,
					ease: Expo.easeInOutCubic,
					onComplete : function() {
						if ( scrollState ) {
							if (isPassive()) {
								window.removeEventListener("wheel",scrollStop, {passive: false});
							} else {
								$('body').off('scroll touchmove mousewheel', scrollStop);
							}
						}
					}
				});
			}
		}
	}
});