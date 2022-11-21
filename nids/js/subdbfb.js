/* *******************************************************
 * filename : sub.js
 * description : 서브컨텐츠에만 사용되는 JS
 * date : 2022-03-14
******************************************************** */


$(document).ready(function  () {
	/* ************************
	* Func : 서브 Visual Active 클래스 붙이기
	* addClassName () 필요
	************************ */
	setTimeout(function  () {
		addClassName($("#visual"), "active");
	},200);

	/* ************************
	* Func : 모달팝업 플러그인 사용
	* MagnificPopup.js 필요
	************************ */
	if ($.exists(".popup-gallery")) {
		magnificPopup($(".popup-gallery"));
	}

	/* ************************
	* Func : 일정 가로사이즈 아래부터 scroll 사용하기
	* mCustomScrollbar.js, customScrollX() 필요
	************************ */
	/* 서브 Scrollbar object  */
	$(".custom-scrollbar-wrapper").each(function  () {
		$(this).prepend("<div class='custom-scrollbar-cover'><div class='scroll-cover-txt'><i class='xi-touch'></i></div></div>");
		var $scrollObject = $(this).find(".scroll-object-box");
		if ($.exists($scrollObject)) {
			customScrollX($scrollObject);
		}
		$(this).on("touchmove click",function  () {
			$(this).find(".custom-scrollbar-cover").fadeOut(200);
		});
	});

	/* ************************
	* Func : 서브 상단 메뉴 FIXED
	* getWindowWidth(), checkOffset(), toFit() 필요
	************************ */
	if ($.exists(".fixed-sub-menu")) {
		var $fixedSubMenu = $(".fixed-sub-menu");
		var topMenuStart =  checkOffset($fixedSubMenu);
		$(window).resize(function  () {
			if ( getWindowWidth() > tabletWidth ) {
				topMenuStart =  checkOffset($fixedSubMenu);
			}else {
				$fixedSubMenu.removeClass("top-fixed");
			}
		});
		window.addEventListener('scroll', toFit(function  () {
			if ( getWindowWidth() > tabletWidth ) {
				objectFixed($fixedSubMenu, topMenuStart, "top-fixed");
			}else {
				$fixedSubMenu.removeClass("top-fixed");
			}
		}, {
		}),{ passive: true })
	}

	/* ************************
	* Func : 컨텐츠 메뉴 FIXED 및 클릭시 해당영역 이동
	* getScrollTop(), getWindowWidth(), checkOffset(), toFit(), checkFixedHeight(), moveScrollTop() 필요
	************************ */
	if ($.exists(".cm-fixed-tab-container-JS")) {
		var $fixedMoveTab = $(".cm-fixed-tab-list-JS");		// fixed되는 메뉴 클래스
		var $moveTabItem = $fixedMoveTab.find("li");
		var menuCount= $moveTabItem.length;
		var nav = [];
		
		$(window).on('load', function  () {
			checkStartOffset();
			nav = checkTopOffset();
		});
		$(window).on('resize', function  () {
			checkStartOffset();
			nav = checkTopOffset();
		}); 		

		var isVisible = false;
		$(window).on('scroll',function() {
			if (!isVisible) {
				checkStartOffset();
				nav = checkTopOffset();
				isVisible=true;
			}
		});
		
		// 탭이 붙기 시작하는 지점 체크
		function checkStartOffset () {
			if ($.exists('.intro-page') && (getWindowWidth () > mobileWidth) ) {
				var fixedStartPoint =  $(".cm-fixed-tab-container-JS").offset().top;	
			}else{
				var fixedStartPoint =  $(".cm-fixed-tab-container-JS").offset().top - checkFixedHeight();	
			}
			return fixedStartPoint;
		}		

		// 해당되는 각각의 영역 상단값 측정
		function checkTopOffset () {
			var arr = [];
			for(var i=0;i < menuCount;i++){
				arr[i]=$($moveTabItem.eq(i).children("a").attr("href")).offset().top;
			}
			return arr;
		}
		
		// 스크롤 0일때 상단fixed되는 높이값 체크
		function checkFixedObjectHeight () {
			var fixedObjectTotalHeight = 0;
			for (var i=0; i<$(".top-fixed-object").length; i++) {
				var fixedObjectTotalHeight = fixedObjectTotalHeight + $(".top-fixed-object").eq(i).outerHeight();
			}
			return fixedObjectTotalHeight;
		}

		// 스크롤 event 
		window.addEventListener('scroll', toFit(function  () {
			if ($.exists('.intro-page') ) {
				/*if (getWindowWidth () > mobileWidth) {*/
					var absoluteStart = $(".cm-fixed-tab-container-JS").offset().top + $(".cm-fixed-tab-container-JS").outerHeight() - $(".company-history-tab-style").outerHeight() - $(".company-history-tab-style").outerHeight();
				/*}*/
			}
			if ( getScrollTop() >  checkStartOffset() ) {
				$fixedMoveTab.addClass("top-fixed");
				if ($.exists('.intro-page') ) {
					if ( getScrollTop() > absoluteStart ) {
						$fixedMoveTab.addClass("absolute");
					}else {
						$fixedMoveTab.removeClass("absolute").addClass("top-fixed");
					}
				}
			}else if ( getScrollTop() <  (checkStartOffset() + $fixedMoveTab.height()) ) {
				$fixedMoveTab.removeClass("top-fixed");
				if ($.exists('.intro-page') ) {
					$fixedMoveTab.removeClass("absolute");
				}
			}

			$moveTabItem.each(function  (idx) {
				var eachOffset = nav[idx] -  checkFixedHeight();
				var minusOffset = $(window).height() / 6;	// 스크롤시 selected 붙는 지점을 조금 더 빠르게 하기위해 추가
				
				if( (getScrollTop() + minusOffset) >= eachOffset ){
					$moveTabItem.removeClass('selected');
					$moveTabItem.eq(idx).addClass('selected');

					var tagId = $moveTabItem.eq(idx).find("a").attr('href');
					$(".sub-tab-con").removeClass("active");
					$(".sub-tab-con"+tagId+"").addClass("active");
					// 모바일 드롭메뉴일때
					if ($.exists($moveTabItem.parents(".cm-drop-menu-box-JS"))) {
						$fixedMoveTab.find(".cm-drop-open-btn-JS > span").text($moveTabItem.eq(idx).find("em").text());
					}
				};
			});
			}, {
		}),{ passive: true })
		
		// 클릭 event 
		$moveTabItem.find("a").click(function  () {
			if ($.exists('.intro-page') && (getWindowWidth () > mobileWidth) ) {
				var goDivOffset = $($(this).attr("href")).offset().top - checkFixedHeight() + 35;	// 이동해야할 지점
			}else{
				var goDivOffset = $($(this).attr("href")).offset().top - checkFixedHeight() + 1;
			}
			if ( getScrollTop()  < checkStartOffset()) {
				if ( getScrollTop() == 0 ) {
					var goDiv = goDivOffset - checkFixedObjectHeight();
				}else {
					var goDiv = goDivOffset - $fixedMoveTab.height();
				}
			}else {
				var goDiv = goDivOffset;
			}
			setTimeout(function  () {
				moveScrollTop(goDiv);
			});

			// 모바일 드롭메뉴일때
			if ($.exists($(this).parents(".cm-drop-menu-box-JS")) ) {
				if ( getWindowWidth () < $fixedMoveTab.data("drop-width")+1 ) {
					$fixedMoveTab.find("ul").slideUp();
				}
			}
			 
			return false;
		});
	}

	/* ************************
	* Func : 에디터관련
	************************ */
	if ($.exists(".editor")) {
		/* 테이블 스크롤넣기 */ 
		$(".editor table").each(function  () {
			$(this).wrap("<div class='editor-table-box'></div>");
		});
		
		/* iframe 태그 감싸기 */ 
		$(".editor iframe").each(function  () {
			var iframeSrc = $(this).attr("src");
			var findStr = "https://www.youtube.com/embed"; 

			if (iframeSrc.indexOf(findStr) != -1) {
			  $(this).wrap("<div class='editor-iframe-box'></div>");
			}
		});
	}

	/* ************************
	* Func : Technology Slide
	* swiper.js 필요
	************************ */
	$('.technology-cm-slide-con .img-slide').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots:false,
		arrows:true,
		infinite:true,
		speed: 1500,
		prevArrow: '<button class="slick-arrow slick-prev"><i class="xi-angle-left"></i></button>',
		nextArrow: '<button class="slick-arrow slick-next"><i class="xi-angle-right"></i></button>',
		focusOnSelect: true,
		zIndex:1,
		asNavFor:'.technology-cm-slide-con .txt-slide, .technology-cm-slide-con .icon-slide',
		responsive: [
					{
					  breakpoint: 801,
					  settings: {
						autoplay: true,
						arrows:false,
					  }
					},
				  ]
	});
	$('.technology-cm-slide-con .icon-slide').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true,
		dots:false,
		arrows:false,
		infinite:true,
		speed: 800,
		focusOnSelect: false,
		zIndex:1,
		asNavFor:'.technology-cm-slide-con .txt-slide, .technology-cm-slide-con .img-slide',
	});
	$('.technology-cm-slide-con .txt-slide').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		dots:false,
		autoplay: true,
		speed:800,
		infinite:true,
		autoplaySpeed: 3500,
		easing: 'easeInOutQuint',
		pauseOnHover:true,
		touchThreshold: 50,
		focusOnSelect: true,
		zIndex:1,
		asNavFor:'.technology-cm-slide-con .img-slide, .technology-cm-slide-con .icon-slide',
		
	});

	/* ************************
	* Func : 제품뷰 works 슬라이드 
	************************ */
	$(".cm-col3-slide-JS").each(function  () {
		var swiperPrd = new Swiper(this, {
			slidesPerView: "auto",
			spaceBetween: 50,
			centeredSlides: true,
			loop: true,
			speed: 1200,
			//allowTouchMove:false,
			//autoplay: {
				//delay: 3500,
				//disableOnInteraction: false,
			//},
			pagination: {
				el: ".cm-col3-slide-JS .swiper-pagination",
				clickable: true,
				renderBullet: function (index, className) {
					return '<span class="' + className + '">0' + (index + 1) + "</span>";
				},
			},
			navigation: {
				nextEl: ".cm-col3-slide-JS .swiper-button-next",
				prevEl: ".cm-col3-slide-JS .swiper-button-prev",
			},
			breakpoints: {
				800: {
					slidesPerView: "auto",
					spaceBetween: 100,
				},
				1024: {
					slidesPerView: "auto",
					spaceBetween: 140,
				},
				1280: {
					slidesPerView: "auto",
					spaceBetween: 220,
				},
			}
		});

		// 해당영역갔을때 슬라이드 autoPlay
		if ($.exists('.start-autoplay-scroll-object')) {
			if ( isMobile() ) {
				startOffset = "100%";
			}else {
				startOffset = "90%";
			}
			$(".start-autoplay-scroll-object").waypoint(function  () {
				swiperPrd.autoplay.start();
			}, { 
				offset: startOffset
			});
		}
	});

	/* ************************
	* Func : 제품 소개 스크롤
	************************ */
	if ($.exists(".cm-prd-fixed-con")) {
		$(window).resize(function(){
			if (getWindowWidth() > 801) {
				mainQuickFixed ();
			}
		})
		if (getWindowWidth() > 801) {
			mainQuickFixed ();
		}
		
		window.addEventListener('scroll', toFit(function  () {
			mainQuickFixed();
		}, {
		}),{ passive: true })

		function mainQuickFixed () {
			$(".cm-prd-fixed-con").each(function  () {
				var $fixedContainer = $(this);
				var $moveContainer = $fixedContainer.find(".cm-prd-fixed-left");
				
				if ( getWindowWidth() > mobileWidth ) {
					var fixedStart = $fixedContainer.offset().top - 100;
					var absoluteStart = $fixedContainer.offset().top + $fixedContainer.outerHeight() - $moveContainer.outerHeight() - 100;
				}
				if($(window).scrollTop() > fixedStart){
					if ( $(window).scrollTop() > absoluteStart ) {
						$moveContainer.removeClass("fixed").addClass("absolute");
					}else {
						$moveContainer.removeClass("absolute").addClass("fixed");
					}
				} else {
					$moveContainer.removeClass("absolute").removeClass("fixed");
				}
			});
		}
	}

	/* ************************
	* Func : 제품 소개 stop active
	************************ */
	$(".cm-prd-info-list").each(function  () {
		var $listWrap = $(this);
		var $listWrapItem = $listWrap.find(".cm-prd-info-item");
		$(window).on("scroll", function(){
			for (i = 0; i < $listWrapItem.length ; i++ ) {
			    if ($listWrapItem.eq(i).offset().top - 370 <= window.pageYOffset) {
					$listWrapItem.removeClass("active");
					$listWrapItem.eq(i).addClass("active");
			    }
			}
		});
	});

	/* ************************
	* Func : sticky event
	************************ */
	if ($.exists(".cm-prd-list-con")) {
		$(".cm-prd-list-con").each(function  () {
			var $fixedStickyCon = $(this);		
			var $fixedStickyItem = $fixedStickyCon.find(".cm-prd-list-item");
			var menuCount= $fixedStickyItem.length;
			var nav = [];
			
			$(window).on('load', function  () {
				nav = checkTopOffset();
			});
			$(window).on('resize', function  () {
				nav = checkTopOffset();
			});

			// 해당되는 각각의 영역 상단값 측정
			function checkTopOffset () {
				var arr = [];
				for(var i=0;i < menuCount;i++){
					arr[i]=$($fixedStickyItem.eq(i)).offset().top;
				}
				return arr;
			}

			// 스크롤 event 
			window.addEventListener('scroll', toFit(function  () {
				$fixedStickyItem.each(function  () {
					if (!$(this).hasClass("hidden")) { 
						var top_object = $(this).offset().top;
					}
					var top_object_first = $fixedStickyItem.eq(0).offset().top;
					var top_object_last = $fixedStickyItem.last().offset().top;
					if( getScrollTop() > top_object - 1 ){
						$(this).addClass('active').prev(".cm-prd-list-item").removeClass('active');
					}else if( getScrollTop() > top_object_last - 1 ){
						$(this).prev(".cm-prd-list-item").addClass('active');
					}else if( getScrollTop() < top_object_first ){
						$fixedStickyCon.find(".cm-prd-list-item").eq(0).addClass('active');
					}else if( getScrollTop() < top_object ){
						$(this).removeClass('active');
					}
				});
				}, {
			}),{ passive: true })
		});
	}

	/* ************************
	* Func : 아코디언 컨텐츠
	************************ */
	if ($.exists(".cm-accordion-list-con")) {
		// 아코디언 Width
		function accordion_width () {
			$(".accordion-list").each(function  () {
				$accordionList = $(this);
				$accordionItem = $(this).find(".accordion-item");		// 아코디언 각각의 class
				itemTotalWidth = $accordionList.outerWidth();		// 아코디언 전체 width
				itemBoxLength = $accordionItem.length;		// 아코디언 갯수
				mobileWidth = 800;
				if ( $(window).width() > 1420 ) {
					itemWidth = 480
				}else {
					itemWidth = 180
				}
				activeWidth =  itemTotalWidth - (itemWidth * (itemBoxLength-1));
				
				if ( $(window).width() + 17 > mobileWidth ) {
					$accordionItem.each(function  () {
						$accordionItem.not(".active").css("width", itemWidth );
						$accordionList.find(".accordion-item.active").css("width", activeWidth );
					});
				}else {
					$accordionItem.removeAttr("style");
				}
			});
		}
		accordion_width();
		$(window).on('resize', accordion_width);
		
		// 1024 PC버전 마우스오버시
		$accordionItem.on("mouseenter",function  () {
			if ( $(window).width() > mobileWidth && !$(this).is(".active")) {
				$(this).addClass("active").stop().animate({"width": activeWidth },300,"swing");
				$accordionItem.not($(this)).removeClass("active").stop().animate({"width":itemWidth},300,"swing"); 
			}
		});

		// 1024이하 모바일버전 클릭시
		$accordionItem.on("click",function  () {
			if ( $(window).width() <  mobileWidth+1 ) {
				$(".accordion-list .accordion-item").not($(this)).removeClass("active");
				$(this).addClass("active");
			}
		});
	}

	/* ************************
	* Func : 연혁 탭 슬라이드
	************************ */
	var swiperHistory = undefined;
    function initSwiper(){ 
        if( getWindowWidth() < mobileWidth && swiperHistoryOption == undefined){
            var swiperHistoryOption = new Swiper('.company-history-tab-wrapper', {
				slidesPerView: 'auto',
				paginationClickable: true,
				spaceBetween: 0,
				loop: false,
			});   
        }else if( getWindowWidth() > mobileWidth && swiperHistory != undefined){
           swiperHistory.destroy();
           swiperHistory = undefined;
            $('.company-history-tab-wrapper .swiper-wrapper').removeAttr('style');
            $('.company-history-tab-wrapper .swiper-slide').removeAttr('style');
        }
    }
    initSwiper();
 
    $(window).on('resize', function(){
        initSwiper();
    });   

	/* ************************
	* Func : 경영이념 및 목표
	************************ */
	rollingActive(".intro-con03-list");
	rollingActive02(".cir-con-m-list");


	/* ************************
	* Func : 기술소개
	************************ */
	if ($.exists(".technology-sensor-con01")) {
		var $heightItem = $(".technology-sensor-con01 .sensor-item-wrap .left-box .info-box dd");
		var height_array = $heightItem.map(function () {
            return $(this).height();
        }).get();

		var max_height = Math.max.apply(Math, height_array);
		//console.log(max_height);

        if ( getWindowWidth () < mobileWidth ) {
			$heightItem.height(max_height);
		}else{
			$heightItem.height("auto");
		}
		$(window).resize(function  () {
			var height_array = $heightItem.map(function () {
				return $(this).height();
			}).get();

			var max_height = Math.max.apply(Math, height_array);
			
			if ( getWindowWidth () < mobileWidth ) {
				$heightItem.height(max_height);
			}else{
				$heightItem.height("auto");
			}
		});
	}
});

/* ************************
* Func : 유투브 API 가져오기
************************ */
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var done = false;
var player;
var playerID = $("#player").data("code");
$lineProgressBar = $(".visual-line-box .line");

function onYouTubeIframeAPIReady() {
	player = new YT.Player('player', {
		playerVars: {
		'autoplay': 1,
		'controls': 0,
		'autohide': 1,
		'wmode': 'opaque',
		'showinfo': 0,
		'loop': 1,
		'mute':1,
		'playsinline':1,
		'playlist': playerID	// Youtube ID
		},
		videoId: playerID,	// Youtube ID
		events: {
			'onReady': onPlayerReady,
			'onStateChange': onPlayerStateChange
		}
	});
}
function onPlayerStateChange(event) {
	// event.data = 1(재생), 2(일시정지), 0(정지)
	if (event.data === 1) {	// 재생
		$(".background-video").addClass("start");
		$(".background-video iframe").attr('data-keepplaying',''); // 풀페이지에서 영상 계속 재생 (섹션이동영향x)
		// Progress bar
		updateBar=setInterval(updateProgressBar, 0);
	}
	if ( event.data === 2 || event.data === 0 ) {	// 일시정지, 정지
		// Progress bar
		clearInterval(updateBar)
	}
}
function onPlayerReady(event) {
	event.target.playVideo();
}
function updateProgressBar (event) {
	var currentTime = parseFloat(player.getCurrentTime()).toFixed(2);
	var videoTime = parseFloat(player.getDuration()).toFixed(2);
	// Line update
	$lineProgressBar.css("width", ((currentTime / videoTime) *100) + "%"); 
}

/* ************************
* Func : 제품 비주얼 스크롤
************************ */
/*$(window).on("load",function  (e) {
	if ($.exists(".sub-cm-scroll-page")) {
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
		//if (getWindowWidth() >tabletWidth) {
			var $section1_top = $(".sub-cm-scroll-container").offset().top;
		//}
		
		if (windowHeightCheck() ===  0) {
			browserWheelStop();
		}

		// 스크롤업 버튼 누를 때
		$(".to-top-btn").on("click", function  () {
			$("#header, #productTop").removeClass("pos-absolute");
		})

		$(".sub-cm-visual-JS").on("mousewheel DOMMouseScroll", function (e, delta) {
			e.preventDefault();
			var $section1_top = $(".sub-cm-scroll-container").offset().top;
			if (delta < 0){ // down
				moveScrollContent($section1_top,true);
				if (!($("#header, #productTop").hasClass("pos-fixed"))) {	
					$("#header, #productTop").addClass("pos-fixed");
				}
				return;
			}else { //up
				moveScrollContent(0,false);
				if (!($("#header, #productTop").hasClass("pos-fixed"))) {	
					$("#header, #productTop").addClass("pos-fixed");
				}
			}
		});

		$(".sub-cm-scroll-container").on("mousewheel DOMMouseScroll", function (e, delta) {
			var $section1_top = $(".sub-cm-scroll-container").offset().top;// - $("#header").height();
			
			if (delta > 0){ // up
				if (getScrollTop() > $section1_top ) {
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
					if ($("#header, #productTop").hasClass("pos-absolute")) {
						$("#header, #productTop").removeClass("pos-absolute");
					}
				}
				return;
			}else { //down
				if (isPassive()) {
					window.removeEventListener("wheel",scrollStop, {passive: false});
					if (getScrollTop() > $section1_top) {
						smoothScroll();
					}
				} else {
					$('body').off('scroll touchmove mousewheel', scrollStop);
				}
				if (!($("#header, #productTop").hasClass("pos-absolute"))) {	
					$("#header, #productTop").addClass("pos-absolute");
				}
			}
		});
		
		function moveScrollContent (top,scrollState) {
			if(wheel_move && wheel_move.progress() < 1){
				return;
			}
			wheel_move = TweenMax.to('html, body', 1, {
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
});*/

/* ************************
* Func : 기술 비주얼 스크롤
************************ */
$(window).on("load",function  (e) {
	if ($.exists(".technology-scroll-page, .sub-cm-scroll-page")) {
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
		//if (getWindowWidth() >tabletWidth) {
			var $section1_top = $(".technology-scroll-container, .sub-cm-scroll-container").offset().top;
		//}
		
		if (windowHeightCheck() ===  0) {
			browserWheelStop();
		}

		$(".technology-visual-video, .product-visual-video").on("mousewheel DOMMouseScroll", function (e, delta) {
			e.preventDefault();
			var $section1_top = $(".technology-scroll-container, .sub-cm-scroll-container").offset().top;
			if (delta < 0){ // down
				moveScrollContent($section1_top,true);
				return;
			}else { //up
				moveScrollContent(0,false);
			}
		});

		$(".technology-scroll-container, .sub-cm-scroll-container").on("mousewheel DOMMouseScroll", function (e, delta) {
			var $section1_top = $(".technology-scroll-container, .sub-cm-scroll-container").offset().top;// - $("#header").height();
			
			if (delta > 0){ // up
				if (getScrollTop() > $section1_top ) {
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
					if (getScrollTop() > $section1_top) {
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
			wheel_move = TweenMax.to('html, body', 1, {
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
});