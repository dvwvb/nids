<!doctype html>
<html lang="ko">

<head>
    <?php include "../_inc/config.php"; ?>
    <script>
        dep1 = 4
        dep2 = 02;
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
                                    <li>FAQ</li>
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
                                <span>FAQ</span>
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
                            <h2 class="tit">FAQ</h2>
                            <p class="sub-tit">도시환경의 기술정보가 필요한 곳에 엔아이디에스가 있습니다.</p>
                        </div>
                    </article>

                    <article class="sub-page customer-page" data-scroll="fade-up">
                        <!-- skin - faq - F02-->
                        <script type="text/javascript">
                            $(document).ready(function() {
                                // FAQ Toggle
                                $(".bbs-faq-list").each(function() {
                                    var $faqItem = $(this).find(".faq-item");

                                    $faqItem.children("dt").click(function() {
                                        var $faqCon = $(this).siblings();
                                        if ($faqCon.css("display") == "block") {
                                            $(this).siblings().slideUp();
                                            $(".faq-item").removeClass("open");
                                        } else {
                                            $(".faq-item > dd:visible").slideUp();
                                            $(".faq-item").removeClass("open");
                                            $(this).parent("dl").addClass("open");
                                            $faqCon.slideDown();
                                        }
                                    });
                                });
                            });
                        </script>
                        <!-----------------------------------------------------  게시판 리스트 시작 -------------------------------------------------------------------------------------------->

                        <!-- FAQ형 시작 -->

                        <article class="faq-list-con2 faq-category-list-con bbs-faq-list">
                            <dl class="faq-item">
                                <dt>
                                    <div class="faq-subject">
                                        <span class="question-icon">Q</span>
                                        <span class="faq-category">[본사]</span>
                                        <strong class="faq-title">본사 FAQ 게시판입니다.</strong>
                                        <span class="arrow"><i class="xi-angle-down-min"></i></span>
                                    </div>
                                </dt>
                                <dd>
                                    <span class="answer-icon">A</span>
                                    <div class="answer-con">
                                        <div class="editor">
                                            본사 FAQ 게시판입니다.<br><br> </div>
                                    </div>
                                </dd>
                            </dl>
                        </article>




                        <!-- 
		paging 스타일 클래스
		no-margin(margin없는형태) / paging-style02(원형) / paging-style03(라인)
	-->

                        <div class="paging paging-style03">
                            <a href='faqe349.html?search_item=&amp;search_order=&amp;startPage=0#recruit' onfocus=this.blur() class='paging-arrow paging-first' title='first'><i class='xi-angle-left-min'></i><i class='xi-angle-left-min'></i></a><a href='faqe349.html?search_item=&amp;search_order=&amp;startPage=0#recruit' onfocus=this.blur() class='paging-arrow paging-prev' title='prev'><i class='xi-angle-left-min'></i></a><a href='javascript:;' class='cur'>1</a> <a href='faqe349.html?search_item=&amp;search_order=&amp;startPage=0#recruit' onfocus=this.blur() class='paging-arrow paging-next' title='next'><i class='xi-angle-right-min'></i></a><a href='faqe349.html?search_item=&amp;search_order=&amp;startPage=0#recruit' onfocus=this.blur() class='paging-arrow paging-last' title='last'><i class='xi-angle-right-min'></i><i class='xi-angle-right-min'></i></a>
                        </div>


                    </article> <!-- // -->
                    </article>

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
</body>

</html>