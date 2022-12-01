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
        <?php include "../_inc/footer.php"; ?>
        <!-- //footer -->

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
    <?php include "../_inc/config_t.php"; ?>

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