<!doctype html>
<html lang="ko">

<head>
    <?php include "../_inc/config.php"; ?>
    <script>
        dep1 = 3
        dep2 = 03;
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
            <section id="visual" class="sub-visual-company">
                <div class="visual-img-con">
                    <div class="visual-img-inner" style="background:#eee url(../../images/layout/sub_visual_company.jpg) no-repeat 70% 0%"></div>
                </div>
                <div class="area visual-txt-con">
                    <div class="table-cell-layout">
                        <div class="visual-txt-container">
                            <h2 class="visual-tit trans400">
                                About us </h2>
                            <p class="visual-sub-txt">With Aivom’s Plasma Technology, <br class="m-br">Eliminate</p>
                            <div class="location">
                                <ul>
                                    <li><a href="../index.html" title="HOME"><i class="xi-home"></i></a></li>
                                    <li>About us</li>
                                    <li>뉴스</li>
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
                            <ul class="snb sub-menu-company clearfix">
                                <li><a href="intro.html"><span>회사개요</span></a></li>
                                <li><a href="greeting.html"><span>CEO 인사말</span></a></li>
                                <li><a href="news.html"><span>뉴스</span></a></li>
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
                                <span>뉴스</span>
                                <i class="xi-caret-down-circle-o arrow"></i>
                            </button>
                            <ul class="location-menu-con cm-drop-list-JS">
                                <li><a href="intro.html"><span>회사개요</span></a></li>
                                <li><a href="greeting.html"><span>CEO 인사말</span></a></li>
                                <li><a href="news.html"><span>뉴스</span></a></li>
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
                            <h2 class="tit">뉴스</h2>
                            <p class="sub-tit">도시환경의 기술정보가 필요한 곳에 엔아이디에스가 있습니다.</p>
                        </div>
                    </article>

                    <article class="sub-page news-page board-page">
                        <div class="news-con01" data-scroll="fade-up">
                            <!-- skin - gallery - G18-->
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
                            <!-----------------------------------------------------  게시판 리스트 시작 ------------------------------------------------------------------------------------------------------------------------------------->
                            <!-- 갤러리형 시작 -->

                            <aside class="bbs-top-list-box">
                                <!-- 센터정렬 : top-search-center 추가 -->
                                <div class="board-search-box search-style-bottom-line">
                                    <!-- 라인형 기본 / 밑줄형 search-style-bottom-line / 원형배경 search-style-radius -->
                                    <form name="bbs_search_form" method="get" action="https://www.nids.co.kr/nids/kr/company/news.php">
                                        <div class="board-search-inner clearfix">
                                            <!-- Custom Select 사용할수 없는경우 클래스 삭제 -->
                                            <div class="board-custom-select-box custom-select-box ">
                                                <select name="search_item" class="search-subject-select custom-select">
                                                    <option value="subject">제목</option>
                                                    <option value="content">내용</option>
                                                    <!-- <option value="name" >작성자</option> -->
                                                </select>
                                            </div>
                                            <input placeholder="검색어를 입력해주세요." type="search" name="search_order" class="search-word" value="">
                                            <button type="submit" class="bbs-search-btn" title="Search"><i class="xi-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <p class="total-list-con">TOTAL <b class="cm-bbs-font-color">5</b> </p>
                            </aside>
                            <article class="sub-news-list">
                                <ul class="cm-post-list">
                                    <li>
                                        <a href="newsf8b7.html?bgu=view&amp;idx=16" class="inner hover-wrapper">
                                            <div class="img-box">
                                                <span><img src="../../../data/bbsData/16626125749.jpg" alt="Arirang TV broadcasts NIDS in 'SmartBiz Accelerators' program" class="img-center"></span>
                                                <!-- 이미지 권장사이즈 : 380*250 -->
                                            </div>
                                            <div class="txt-box">
                                                <span class="detail">Sep 08, 2022</span>
                                                <h3 class="cm-tit small">Arirang TV broadcasts NIDS in 'SmartBiz Accelerators' program</h3>
                                                <p class="cm-txt small line-clamp2">Arirang TV broadcasts NIDS in 'SmartBiz Accelerators'programon January 31 2019. Source from Arirang TV</p>
                                                <div class="cm-arrow-btn">
                                                    <span class="txt">Read more</span>
                                                    <span class="arrow">
                                                        <em class="line"></em>
                                                        <i class="xi-angle-right-min"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="news0919.html?bgu=view&amp;idx=15" class="inner hover-wrapper">
                                            <div class="img-box">
                                                <span><img src="../../../data/bbsData/16626125689.jpg" alt="Arirang TV broadcasts NIDS in 'SmartBiz Accelerators' program" class="img-center"></span>
                                                <!-- 이미지 권장사이즈 : 380*250 -->
                                            </div>
                                            <div class="txt-box">
                                                <span class="detail">Sep 08, 2022</span>
                                                <h3 class="cm-tit small">Arirang TV broadcasts NIDS in 'SmartBiz Accelerators' program</h3>
                                                <p class="cm-txt small line-clamp2">Arirang TV broadcasts NIDS in 'SmartBiz Accelerators'programon January 31 2019. Source from Arirang TV</p>
                                                <div class="cm-arrow-btn">
                                                    <span class="txt">Read more</span>
                                                    <span class="arrow">
                                                        <em class="line"></em>
                                                        <i class="xi-angle-right-min"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="news406a.html?bgu=view&amp;idx=14" class="inner hover-wrapper">
                                            <div class="img-box">
                                                <span><img src="../../../data/bbsData/16626125599.jpg" alt="Arirang TV broadcasts NIDS in 'SmartBiz Accelerators' program" class="img-center"></span>
                                                <!-- 이미지 권장사이즈 : 380*250 -->
                                            </div>
                                            <div class="txt-box">
                                                <span class="detail">Sep 08, 2022</span>
                                                <h3 class="cm-tit small">Arirang TV broadcasts NIDS in 'SmartBiz Accelerators' program</h3>
                                                <p class="cm-txt small line-clamp2">Arirang TV broadcasts NIDS in 'SmartBiz Accelerators'programon January 31 2019. Source from Arirang TV</p>
                                                <div class="cm-arrow-btn">
                                                    <span class="txt">Read more</span>
                                                    <span class="arrow">
                                                        <em class="line"></em>
                                                        <i class="xi-angle-right-min"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="newsa557.html?bgu=view&amp;idx=12" class="inner hover-wrapper">
                                            <div class="img-box">
                                                <span><img src="../../../data/bbsData/16626119289.jpg" alt="Arirang TV broadcasts NIDS in 'SmartBiz Accelerators' program" class="img-center"></span>
                                                <!-- 이미지 권장사이즈 : 380*250 -->
                                            </div>
                                            <div class="txt-box">
                                                <span class="detail">Sep 08, 2022</span>
                                                <h3 class="cm-tit small">Arirang TV broadcasts NIDS in 'SmartBiz Accelerators' program</h3>
                                                <p class="cm-txt small line-clamp2">Arirang TV broadcasts NIDS in 'SmartBiz Accelerators'programon January 31 2019. Source from Arirang TV</p>
                                                <div class="cm-arrow-btn">
                                                    <span class="txt">Read more</span>
                                                    <span class="arrow">
                                                        <em class="line"></em>
                                                        <i class="xi-angle-right-min"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="news3f69.html?bgu=view&amp;idx=11" class="inner hover-wrapper">
                                            <div class="img-box">
                                                <span><img src="../../../data/bbsData/16626119229.jpg" alt="Arirang TV broadcasts NIDS in 'SmartBiz Accelerators' program" class="img-center"></span>
                                                <!-- 이미지 권장사이즈 : 380*250 -->
                                            </div>
                                            <div class="txt-box">
                                                <span class="detail">Sep 08, 2022</span>
                                                <h3 class="cm-tit small">Arirang TV broadcasts NIDS in 'SmartBiz Accelerators' program</h3>
                                                <p class="cm-txt small line-clamp2">Arirang TV broadcasts NIDS in 'SmartBiz Accelerators'programon January 31 2019. Source from Arirang TV</p>
                                                <div class="cm-arrow-btn">
                                                    <span class="txt">Read more</span>
                                                    <span class="arrow">
                                                        <em class="line"></em>
                                                        <i class="xi-angle-right-min"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </article>
                            <!-- 갤러리형 종료 -->



                            <!-- 
		paging 스타일 클래스
		no-margin(margin없는형태) / paging-style02(원형) / paging-style03(라인)
	-->

                            <div class="paging paging-style03">
                                <a href='newse349.html?search_item=&amp;search_order=&amp;startPage=0#recruit' onfocus=this.blur() class='paging-arrow paging-first' title='first'><i class='xi-angle-left-min'></i><i class='xi-angle-left-min'></i></a><a href='newse349.html?search_item=&amp;search_order=&amp;startPage=0#recruit' onfocus=this.blur() class='paging-arrow paging-prev' title='prev'><i class='xi-angle-left-min'></i></a><a href='javascript:;' class='cur'>1</a> <a href='newse349.html?search_item=&amp;search_order=&amp;startPage=0#recruit' onfocus=this.blur() class='paging-arrow paging-next' title='next'><i class='xi-angle-right-min'></i></a><a href='newse349.html?search_item=&amp;search_order=&amp;startPage=0#recruit' onfocus=this.blur() class='paging-arrow paging-last' title='last'><i class='xi-angle-right-min'></i><i class='xi-angle-right-min'></i></a>
                            </div>

                            <!--
	<div class="board-search-box"><!-- 라인형 기본 / 밑줄형 search-style-bottom-line / 원형배경 search-style-radius 
		<form name="bbs_search_form" method="get" action="/nids/kr/company/news.php">
		<input type="hidden" name="skin" value="">
			<div class="board-search-inner clearfix">
				<!-- Custom Select 사용할수 없는경우 클래스 삭제 
				<div class="board-custom-select-box custom-select-box ">
					<select name="search_item" class="search-subject-select custom-select">
						<option value="subject" >제목</option>
						<option value="content" >내용</option>
						<option value="name" >작성자</option>
					</select>
				</div>
				<input placeholder="검색어를 입력해주세요." type="search" name="search_order" class="search-word" value="">
				<button type="submit" class="bbs-search-btn" title="Search"><i class="xi-search"></i></button>
			</div>
		</form>
	</div>
	-->

                    </article> <!-- // -->
            </div>
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