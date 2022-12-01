<!doctype html>
<html lang="ko">

<head>
    <?php include "../_inc/config.php"; ?>
    <script>
        dep1 = 4
        dep2 = 01;
        dep3 = "";
    </script>
</head>

<body>
    <!-- accessibility -->
    <div class="cm-accessibility">
        <a href="#container">본문바로가기</a>
    </div>
    <!-- //accessibility -->
    <!-- code -->
    <div id="wrap" class="sub-wrap   ">
        <!-- header -->
        <?php include "../_inc/header.php"; ?>

        <!-- container -->
        <div id="container">
            <!-- visual -->
            <!-- 서브비주얼 없을때 visual_type ="none" -->
            <section id="visual" class="sub-visual-customer">
                <div class="visual-img-con">
                    <div class="visual-img-inner" style="background:#eee url(../../images/layout/sub_visual_customer.jpg) no-repeat 70% 0%"></div>
                </div>
                <div class="area visual-txt-con">
                    <div class="table-cell-layout">
                        <div class="visual-txt-container">
                            <h2 class="visual-tit trans400">
                                Contact us </h2>
                            <p class="visual-sub-txt">With Aivom’s Plasma Technology, <br class="m-br">Eliminate</p>
                            <div class="location">
                                <ul>
                                    <li><a href="../index.html" title="HOME"><i class="xi-home"></i></a></li>
                                    <li>Contact us</li>
                                    <li>Contact us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- //visual -->
            <!-- middleArea -->
            <div id="middleArea">
                <!-- ****************** 서브메뉴 ********************** -->
                <!--  모든 서브메뉴 : fixed될때 fixed-sub-menu, top-fixed-object 클래스 추가  -->
                <!-- 서브메뉴1 -->
                <aside id="topMenu01" class="">
                    <div class="side-menu-inner">
                        <div class="area">
                            <ul class="snb sub-menu-customer clearfix">
                                <li><a href="online.html"><span>Contact us</span></a></li>
                                <li><a href="faq.html"><span>FAQ</span></a></li>
                                <li><a href="recruit.html"><span>인재채용</span></a></li>
                            </ul>
                        </div>
                    </div>
                </aside>
                <!-- // -->

                <!-- 모바일 서브메뉴 2 -->
                <aside id="topMenuM02" class="cm-top-menu clearfix">
                    <div class="side-menu-inner clearfix">
                        <!-- 2차메뉴 -->
                        <div class="menu-location  location2 cm-drop-menu-box-JS" data-drop-event="click">
                            <button class="cur-location cm-drop-open-btn-JS">
                                <span>Contact us</span>
                                <i class="xi-caret-down-circle-o arrow"></i>
                            </button>
                            <ul class="location-menu-con cm-drop-list-JS">
                                <li><a href="online.html"><span>Contact us</span></a></li>
                                <li><a href="faq.html"><span>FAQ</span></a></li>
                                <li><a href="recruit.html"><span>인재채용</span></a></li>
                            </ul>
                        </div>
                    </div>
                </aside>
                <!-- // -->

                <!-- 2차&3차 같이 있는 타입 -->


                <!-- content -->
                <section id="content" class="area ">
                    <article class="cm-sub-tit-box" data-scroll="fade-up">
                        <div class="area">
                            <h2 class="tit">Contact us</h2>
                            <p class="sub-tit">도시환경의 기술정보가 필요한 곳에 엔아이디에스가 있습니다.</p>
                        </div>
                    </article>

                    <article class="sub-page customer-page" data-scroll="fade-up">
                        <form name="inquiry_form" id="iqnuiry_form" action="https://www.nids.co.kr/nids/kr/customer/inquiry_ok.php" method="POST">
                            <input type="hidden" name="lang" value="1">
                            <input type="hidden" name="site_type" value="2">
                            <div class="support-inquiry-wrapper animated" data-scroll="fade-up" data-scroll-delay="250">
                                <ul class="support-inquiry-list">
                                    <li class="support-inquiry-item">
                                        <div class="cm-search-input-box">
                                            <div class="cm-search-input-inner">
                                                <div class="cm-input-con">
                                                    <button class="cm-input-trigger" type="button"><em class="button-tit">성함 <span>*</span></em></button>
                                                    <div class="cm-input" style="display: none;">
                                                        <input name="name" type="text" placeholder="성함을 입력해주세요.">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="support-inquiry-item">
                                        <div class="cm-search-input-box">
                                            <div class="cm-search-input-inner">
                                                <div class="cm-input-con">
                                                    <button class="cm-input-trigger" type="button"><em class="button-tit">이메일 주소 <span>*</span></em></button>
                                                    <div class="cm-input" style="display: none;">
                                                        <input name="email" type="text" placeholder="이메일 주소를 입력해주세요.">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="support-inquiry-item">
                                        <div class="cm-search-input-box">
                                            <div class="cm-search-input-inner">
                                                <div class="cm-input-con">
                                                    <button class="cm-input-trigger" type="button"><em class="button-tit">전화번호 <span>*</span></em></button>
                                                    <div class="cm-input" style="display: none;">
                                                        <input name="phone" type="text" placeholder="전화번호를 입력해주세요.">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="support-inquiry-item">
                                        <div class="cm-search-select-box">
                                            <div class="cm-search-select-inner">
                                                <div class="cm-select-con">
                                                    <button class="cm-select-trigger" type="button"><em class="button-tit">문의유형 <span>*</span></em><span class="select-txt"></span></button>
                                                    <input type="hidden" name="type" value="">
                                                    <ul class="cm-select-option-list" style="display: none;">
                                                        <li><button type="button" onclick="type_check(1);" class="cm-select-option-item">정보요청</button></li>
                                                        <li><button type="button" onclick="type_check(2);" class="cm-select-option-item">데모요청</button></li>
                                                        <li><button type="button" onclick="type_check(3);" class="cm-select-option-item">AS 요청</button></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <script>
                                        function type_check(value) {
                                            var f = document.inquiry_form;
                                            f.type.value = value;
                                        }
                                    </script>
                                    <li class="support-inquiry-item">
                                        <div class="cm-search-input-box">
                                            <div class="cm-search-input-inner">
                                                <div class="cm-textarea-con">
                                                    <h5 class="textarea-tit">문의내용</h5>
                                                    <div class="cm-textarea">
                                                        <textarea name="content" id="" cols="30" rows="10"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="support-inquiry-agree animated" data-scroll="fade-up" data-scroll-delay="400">
                                <p class="agree-txt">
                                    <input type="checkbox" name="agree1" id="agree1"><label for="agree1"><a href="../etc/privacy.html" class="cm-modal-open-btn"><span>개인 정보 보호 정책</span></a>에 동의합니다.</label>
                                    <a href="../etc/privacy.html" class="cm-modal-open-btn right-txt"><span>더 보기</span> <i class="xi-search"></i></a>
                                </p>
                                <button type="button" onclick="sendit();" class="support-inquiry-summit-btn">Request</button>
                            </div>
                        </form>
                    </article>

                    <script>
                        $(document).ready(function() {
                            /* ************************
                             * Func : cm-select-con 
                             ************************ */
                            $(".cm-select-con").each(function() {
                                var $selectOpenBtn = $(this).find(".cm-select-trigger");
                                var $selectOpenList = $(this).find(".cm-select-option-list");
                                $selectOpenBtn.on("click", function(e) {
                                    $(".cm-input-con").removeClass("open");
                                    $(".cm-input-con").find(".cm-input").hide();
                                    $selectOpenList.slideToggle();
                                    $(this).toggleClass("open");
                                    e.stopPropagation();
                                    $(document).on('click', function() {
                                        $selectOpenList.hide();
                                        $selectOpenBtn.removeClass("open");
                                    });
                                });

                                $selectOpenList.find(".cm-select-option-item").click(function() {
                                    $selectOpenBtn.addClass("selected").find(".select-txt").text($(this).text());
                                });
                            });

                            /* ************************
                             * Func : cm-input-con 
                             ************************ */
                            $(".cm-input-con").each(function() {
                                var $inputOpenCon = $(this);
                                var $inputOpenBtn = $(this).find(".cm-input-trigger");
                                var $inputOpenBox = $(this).find(".cm-input");

                                $(this).on("click", function(e) {
                                    $(".cm-input-con").removeClass("open");
                                    $(".cm-input-con").find(".cm-input").hide();
                                    $(".cm-select-con").find(".cm-select-option-list").hide();
                                    $(".cm-select-con").find(".cm-select-trigger").removeClass("open");
                                    $inputOpenBox.show();
                                    $(this).addClass("open");
                                    e.stopPropagation();
                                    $(document).on('click', function() {
                                        $inputOpenBox.hide();
                                        $inputOpenCon.removeClass("open");
                                    });
                                });

                                $inputOpenBox.keyup(function(e) {
                                    $(this).closest(".cm-input-con").addClass("selected");
                                });
                            });
                        })
                    </script>

                </section>
                <!-- //content -->
            </div>
            <!-- //middleArea -->
        </div>
        <!-- //container -->
        <!-- footer -->
        <footer id="footer">
            <button class="to-top-btn"><em class="blind">TOP</em><i class="xi-arrow-up"></i></button>
            <!-- 푸터 상단 -->
            <article id="footerInner">
                <div class="area-box clearfix">
                    <!-- 왼쪽 -->
                    <div class="footer-left-con">
                        <div class="footer-address-info-box">
                            <h5 class="footer-address-info-tit" data-scroll="fade">고객지원 </h5>
                            <div class="footer-address-list" data-scroll="fade">
                                <h5>본사 / 엔아이디에스 <a href="#" class="place-icon"><i class="xi-maker"></i></a></h5>
                                <dl class="col1">
                                    <dt>주소</dt>
                                    <dd>경기도 성남시 중원구 갈마치로 314 717호 (우)13201</dd>
                                </dl>
                                <dl>
                                    <dt>Tel</dt>
                                    <dd>+82-31-742-8200</dd>
                                </dl>
                                <dl class="col2">
                                    <dt>E-mail</dt>
                                    <dd><a class="mail" href="mailto:sales@nids.co.kr">sales@nids.co.kr</a></dd>
                                </dl>
                            </div>
                            <div class="footer-address-list" data-scroll="fade">
                                <h5>브랜드 / 에어봄<a href="#" class="place-icon"><i class="xi-maker"></i></a></h5>
                                <dl class="col1">
                                    <dt>주소</dt>
                                    <dd>경기도 성남시 중원구 갈마치로 314 B2층 15호 (우)13201</dd>
                                </dl>
                                <dl>
                                    <dt>Tel</dt>
                                    <dd>+82-31-745-0207</dd>
                                </dl>
                                <dl class="col2">
                                    <dt>E-mail</dt>
                                    <dd><a class="mail" href="mailto:support@airvom.com">support@airvom.com</a></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <!-- 오른쪽 -->
                    <article class="footer-right-con" data-scroll="fade" data-scroll-delay="500">
                        <ul class="foot-menu clearfix">
                            <li><a href="../etc/privacy.html" class="cm-modal-open-btn"><b>PRIVACY POLICY</b></a></li>
                        </ul>
                        <span class="foot-logo">
                            <svg id="Layer_2" class="foot-logo-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 395.24 162.94">
                                <g id="Layer_1-2">
                                    <g>
                                        <path class="cls-3" d="M0,30.1s57.07,12.93,76.04,57.83C76.04,87.93,141.64-.92,225.89,0c0,0,34.25,10.64,70.35,7.41,0,0-68.97,13.42-90.72-.46,0,0-83.32,34.72-130.99,117.11,0,0-25.46-71.75-74.53-93.97Z" />
                                        <g>
                                            <path class="cls-2" d="M102.54,40.2h23.64l30.85,45.34V40.2h23.87V122.14h-23.87l-30.69-44.99v44.99h-23.81V40.2Z" />
                                            <path class="cls-2" d="M198.73,40.2h25.38V122.14h-25.38V40.2Z" />
                                            <path class="cls-2" d="M242.61,40.2h37.62c7.41,0,13.41,1.01,17.97,3.02,4.56,2.01,8.33,4.9,11.32,8.66,2.98,3.76,5.14,8.14,6.48,13.13,1.34,5,2.01,10.29,2.01,15.87,0,8.76-1,15.55-2.99,20.37-1.99,4.82-4.76,8.87-8.3,12.13-3.54,3.26-7.34,5.43-11.4,6.51-5.55,1.49-10.58,2.24-15.09,2.24h-37.62V40.2Zm25.32,18.56v44.77h6.2c5.29,0,9.06-.59,11.29-1.76,2.24-1.17,3.99-3.22,5.25-6.15,1.26-2.92,1.9-7.67,1.9-14.23,0-8.68-1.42-14.62-4.25-17.83-2.83-3.21-7.53-4.81-14.08-4.81h-6.32Z" />
                                            <path class="cls-2" d="M320.9,95.03l24.09-1.51c.52,3.91,1.58,6.89,3.19,8.94,2.61,3.32,6.34,4.97,11.18,4.97,3.61,0,6.4-.85,8.36-2.54s2.93-3.66,2.93-5.9-.93-4.03-2.79-5.7c-1.86-1.68-6.19-3.26-12.97-4.75-11.11-2.5-19.02-5.81-23.76-9.95-4.77-4.14-7.15-9.41-7.15-15.82,0-4.21,1.22-8.19,3.66-11.93,2.44-3.74,6.11-6.69,11.01-8.83s11.62-3.21,20.15-3.21c10.47,0,18.45,1.95,23.95,5.84,5.5,3.89,8.77,10.09,9.81,18.59l-23.87,1.4c-.63-3.69-1.96-6.37-4-8.05-2.03-1.68-4.84-2.52-8.41-2.52-2.95,0-5.16,.62-6.65,1.87s-2.24,2.77-2.24,4.56c0,1.31,.61,2.48,1.84,3.52,1.19,1.08,4.02,2.09,8.5,3.02,11.07,2.38,19,4.8,23.78,7.24,4.79,2.44,8.27,5.47,10.45,9.08,2.18,3.62,3.27,7.66,3.27,12.13,0,5.26-1.45,10.1-4.36,14.53-2.91,4.44-6.97,7.8-12.19,10.09-5.22,2.29-11.79,3.44-19.73,3.44-13.94,0-23.59-2.68-28.95-8.05-5.37-5.37-8.4-12.19-9.11-20.46Z" />
                                        </g>
                                    </g><text class="cls-1" transform="translate(101.54 152.01)">
                                        <tspan class="cls-4" x="0" y="0">Sensor </tspan>
                                        <tspan class="cls-5" x="116.68" y="0">T</tspan>
                                        <tspan class="cls-6" x="133.72" y="0">echnology</tspan>
                                    </text>
                                </g>
                            </svg>
                        </span>
                        <div class="foot-sns-menu">
                            <ul class="clearfix">
                                <li><a href="#" target="_blank" title="새창으로열기"><i class="xi-youtube"></i></a></li>
                                <li><a href="#" target="_blank" title="새창으로열기"><i class="xi-facebook"></i></a></li>
                                <li><a href="#" target="_blank" title="새창으로열기"><i class="xi-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="footer-copyright">COPYRIGHT(C) 2022. NIDS CO.,LTD. ALL RIGHTS RESERVED.</div>
                    </article>
                </div>
            </article>
        </footer>
        <article id="footerPartnerListWrap" data-scroll>
            <article id="footerPartnerListContent01">
                <div class="area-box" dir="rtl">
                    <ul class="footer-partner-list footer-partner-list01 clearfix">
                        <li class="partner-item">
                            <div class="partner-item-inner">
                                <span><img src="../../images/common/footer_partner01_img01.jpg" alt="파트너사 이름" /></span>
                            </div>
                        </li>
                        <li class="partner-item">
                            <div class="partner-item-inner">
                                <span><img src="../../images/common/footer_partner01_img02.jpg" alt="파트너사 이름" /></span>
                            </div>
                        </li>
                        <li class="partner-item">
                            <div class="partner-item-inner">
                                <span><img src="../../images/common/footer_partner01_img03.jpg" alt="파트너사 이름" /></span>
                            </div>
                        </li>
                        <li class="partner-item">
                            <div class="partner-item-inner">
                                <span><img src="../../images/common/footer_partner01_img04.jpg" alt="파트너사 이름" /></span>
                            </div>
                        </li>
                        <li class="partner-item">
                            <div class="partner-item-inner">
                                <span><img src="../../images/common/footer_partner01_img05.jpg" alt="파트너사 이름" /></span>
                            </div>
                        </li>
                        <li class="partner-item">
                            <div class="partner-item-inner">
                                <span><img src="../../images/common/footer_partner01_img06.jpg" alt="파트너사 이름" /></span>
                            </div>
                        </li>
                        <li class="partner-item">
                            <div class="partner-item-inner">
                                <span><img src="../../images/common/footer_partner01_img07.jpg" alt="파트너사 이름" /></span>
                            </div>
                        </li>
                        <li class="partner-item">
                            <div class="partner-item-inner">
                                <span><img src="../../images/common/footer_partner01_img08.jpg" alt="파트너사 이름" /></span>
                            </div>
                        </li>
                        <li class="partner-item">
                            <div class="partner-item-inner">
                                <span><img src="../../images/common/footer_partner01_img01.jpg" alt="파트너사 이름" /></span>
                            </div>
                        </li>
                        <li class="partner-item">
                            <div class="partner-item-inner">
                                <span><img src="../../images/common/footer_partner01_img02.jpg" alt="파트너사 이름" /></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </article>
            <article id="footerPartnerListContent02">
                <div class="area-box">
                    <ul class="footer-partner-list footer-partner-list02 clearfix">
                        <li class="partner-item">
                            <div class="partner-item-inner">
                                <span><img src="../../images/common/footer_partner02_img01.jpg" alt="파트너사 이름" /></span>
                            </div>
                        </li>
                        <li class="partner-item">
                            <div class="partner-item-inner">
                                <span><img src="../../images/common/footer_partner02_img02.jpg" alt="파트너사 이름" /></span>
                            </div>
                        </li>
                        <li class="partner-item">
                            <div class="partner-item-inner">
                                <span><img src="../../images/common/footer_partner02_img03.jpg" alt="파트너사 이름" /></span>
                            </div>
                        </li>
                        <li class="partner-item">
                            <div class="partner-item-inner">
                                <span><img src="../../images/common/footer_partner02_img04.jpg" alt="파트너사 이름" /></span>
                            </div>
                        </li>
                        <li class="partner-item">
                            <div class="partner-item-inner">
                                <span><img src="../../images/common/footer_partner02_img05.jpg" alt="파트너사 이름" /></span>
                            </div>
                        </li>
                        <li class="partner-item">
                            <div class="partner-item-inner">
                                <span><img src="../../images/common/footer_partner02_img06.jpg" alt="파트너사 이름" /></span>
                            </div>
                        </li>
                        <li class="partner-item">
                            <div class="partner-item-inner">
                                <span><img src="../../images/common/footer_partner02_img07.jpg" alt="파트너사 이름" /></span>
                            </div>
                        </li>
                        <li class="partner-item">
                            <div class="partner-item-inner">
                                <span><img src="../../images/common/footer_partner02_img01.jpg" alt="파트너사 이름" /></span>
                            </div>
                        </li>
                        <li class="partner-item">
                            <div class="partner-item-inner">
                                <span><img src="../../images/common/footer_partner02_img02.jpg" alt="파트너사 이름" /></span>
                            </div>
                        </li>
                        <li class="partner-item">
                            <div class="partner-item-inner">
                                <span><img src="../../images/common/footer_partner02_img03.jpg" alt="파트너사 이름" /></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </article>
        </article>

        <div class="mouse-pointer">
            <div class="pointer-circle"></div>
            <span class="pointer-txt">DRAG</span>
        </div> <!-- //footer -->
        <section id="siteMapCon03" class="cm-sitemap-wrapper">
            <div class="cm-sitemap-container cm-sitemap-container-03">
                <div class="sitemap-bg cm-sitemap-bg">
                    <!-- logo 배경 있을경우 -->
                    <!-- <div class="logo-bg"><span>LOGO</span></div> -->
                </div>
                <div class="cm-sitemap-inner-con">
                    <section class="cm-sitemap-area-con area">
                        <div class="sitemap-modal-tit-con-03 cm-modal-tit-con">
                            <h1 class="cm-modal-tit" data-splitting>SITEMAP</h1>
                            <button title="Close Sitemap" class="sitemap-close-btn cm-sitemap-close-btn"><i class="xi-close-thin"></i></button>
                        </div>
                        <article class="sitemap-wrapper-style sitemap-wrapper-style03"></article>
                    </section>
                </div>
            </div>
        </section>
    </div>
    <!-- //wrap -->
    <script type="text/javascript" src="../../../js/vendor/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="../../../js/plugin/slick.js"></script>
    <script type="text/javascript" src="../../../js/plugin/swiper.min.js"></script>
    <script type="text/javascript" src="../../../js/plugin/gsap.min.js"></script>
    <script type="text/javascript" src="../../../js/plugin/ScrollToPlugin.min.js"></script>
    <script type="text/javascript" src="../../../js/plugin/splitting.min.js"></script>
    <script type="text/javascript" src="../../../js/plugin/skrollr.min.js"></script>
    <script type="text/javascript" src="../../../js/plugin/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="../../../js/plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="../../../js/plugin/jquery.magnific-popup.js"></script>
    <script type="text/javascript" src="../../../js/plugin/spotlight.min.js"></script>
    <script type="text/javascript" src="../../../js/functions54e3.js?ver=220908"></script>
    <script type="text/javascript" src="../../js/navb66a.js?ver=220701"></script>
    <script type="text/javascript" src="../../../js/layer_popup.js"></script>
    <script type="text/javascript" src="../../js/common07c8.js?ver=220914"></script>
    <script type="text/javascript" src="../../js/subdbfb.js?ver=220921"></script>

    <script>
        function sendit() {
            var f = document.inquiry_form;
            if (f.name.value == "") {
                alert("성함을 입력해 주세요.");
                f.name.focus();
                return false;
            }

            if (f.email.value == "") {
                alert("이메일 주소를 입력해 주세요.");
                f.email.focus();
                return false;
            }

            if (f.phone.value == "") {
                alert("전화번호를 입력해 주세요.");
                f.phone.focus();
                return false;
            }

            if (f.type.value == "") {
                alert("문의유형을 선택해 주세요.");
                f.type.focus();
                return false;
            }

            if (f.agree1.checked == false) {
                alert("개인정보처리방침에 동의하지 않으셨습니다.");
                f.agree1.focus();
                return false;
            }

            f.submit();

        }
    </script>
</body>

</html>