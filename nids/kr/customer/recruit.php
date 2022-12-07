<!doctype html>
<html lang="ko">

<head>
    <?php include "../_inc/config.php"; ?>
    <script>
        dep1 = 4
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
    <div id="wrap" class="sub-wrap">
        <!-- header -->
        <?php include "../_inc/header.php"; ?>
        <!-- //header -->
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
                                    <li>인재채용</li>
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
                                <span>인재채용</span>
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
                <section id="content" class="wide ">
                    <article class="cm-sub-tit-box" data-scroll="fade-up">
                        <div class="area">
                            <h2 class="tit">채용정보</h2>
                            <p class="sub-tit">도시환경의 기술정보가 필요한 곳에 엔아이디에스가 있습니다.</p>
                        </div>
                    </article>


                    <article class="sub-page recruit-page" data-scroll="fade-up">

                        <div class="recruit-con01">
                            <div class="area">
                                <div class="recruit-con01-list" data-scroll="fade-up">
                                    <div class="recruit-con01-item" data-scroll="fade-up">
                                        <div class="recruit-con01-top">
                                            <span class="step">STEP 01</span>
                                            <p class="tit">채용방법</p>
                                        </div>
                                        <div class="recruit-con01-bottom">
                                            <div class="img"><img src="../../images/content/recruit_con01_img01.png" alt="채용방법"></div>
                                            <div class="txt">
                                                <p>상시모집 : 연중 상시체용제도 운영</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recruit-con01-item" data-scroll="fade-up">
                                        <div class="recruit-con01-top">
                                            <span class="step">STEP 02</span>
                                            <p class="tit">제출서류 및 접수방법</p>
                                        </div>
                                        <div class="recruit-con01-bottom">
                                            <div class="img"><img src="../../images/content/recruit_con01_img02.png" alt="제출서류 및 접수방법"></div>
                                            <div class="txt">
                                                <p>경력증명서/자격증/성적증명서 사본 제출<br>입사지원서 : On-Line 접수</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recruit-con01-item" data-scroll="fade-up">
                                        <div class="recruit-con01-top">
                                            <span class="step">STEP 03</span>
                                            <p class="tit">채용절차</p>
                                        </div>
                                        <div class="recruit-con01-bottom">
                                            <ul class="list">
                                                <li>
                                                    <div class="list-img"><img src="../../images/content/recruit_con01_img03.png" alt="서류전형"></div>
                                                    <p class="list-txt">서류전형</p>
                                                </li>
                                                <li>
                                                    <div class="list-img"><img src="../../images/content/recruit_con01_img04.png" alt="면접전형"></div>
                                                    <p class="list-txt">면접전형</p>
                                                </li>
                                                <li>
                                                    <div class="list-img"><img src="../../images/content/recruit_con01_img05.png" alt="개별통보"></div>
                                                    <p class="list-txt">개별통보</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="recruit-con01-btn" data-scroll="fade-up">
                            <div class="area">
                                <ul>
                                    <li><a href="#"><i class="xi-file-download"></i><span>지원서 다운로드</span></a></li>
                                    <li><a href="#"><i class="xi-send"></i><span>입사지원하기</span></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="recruit-con02" data-scroll="fade-up" id="recruit">
                            <div class="area">
                                <!-- skin - notice - L08-->
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


                                <aside class="bbs-top-list-box">
                                    <!-- 센터정렬 : top-search-center 추가 -->
                                    <div class="board-search-box search-style-bottom-line">
                                        <!-- 라인형 기본 / 밑줄형 search-style-bottom-line / 원형배경 search-style-radius -->
                                        <form name="bbs_search_form" method="get" action="https://www.nids.co.kr/nids/kr/customer/recruit.php#recruit">
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
                                    <p class="total-list-con">TOTAL <b class="cm-bbs-font-color">2</b> </p>
                                </aside>
                                <section class="bbs-list-tbl">
                                    <div class="bbs-list-col-group">
                                        <span class="bbs-col-group-item" style="width:14.5rem;"></span>
                                        <span class="bbs-col-group-item"></span>
                                        <span class="bbs-col-group-item" style="width:21.66%;"></span>
                                    </div>

                                    <article class="bbs-list-tbody">
                                        <!-- bbs loop start -->
                                        <div class="bbs-list-row">
                                            <div class="column"><span class="bbs-state ing">채용중</span></div>
                                            <div class="column bbs-title">
                                                <a href="recruit665f.html?bgu=view&amp;idx=18">
                                                    <div class="bbs-subject-con">
                                                        <strong class="bbs-subject-txt">2023 상반기 엔아이디에스 경력사원 공개채용</strong>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="column bbs-inline"><i class="xi-time-o"></i> 2022.09.05 ~ 2022.12.31</div>
                                        </div>
                                        <div class="bbs-list-row">
                                            <div class="column"><span class="bbs-state end">채용마감</span></div>
                                            <div class="column bbs-title">
                                                <a href="recruitb9e2.html?bgu=view&amp;idx=17">
                                                    <div class="bbs-subject-con">
                                                        <strong class="bbs-subject-txt">2023 상반기 엔아이디에스 경력사원 공개채용</strong>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="column bbs-inline"><i class="xi-time-o"></i> 2022.09.05 ~ 2022.09.22</div>
                                        </div>
                                    </article>
                                </section>

                                <!-- bbs loop end -->



                                <!-- 답변형/공지사항형 종료 -->



                                <!-- 
		paging 스타일 클래스
		no-margin(margin없는형태) / paging-style02(원형) / paging-style03(라인)
	-->

                                <div class="paging paging-style03">
                                    <a href='recruite349.html?search_item=&amp;search_order=&amp;startPage=0#recruit' onfocus=this.blur() class='paging-arrow paging-first' title='first'><i class='xi-angle-left-min'></i><i class='xi-angle-left-min'></i></a><a href='recruite349.html?search_item=&amp;search_order=&amp;startPage=0#recruit' onfocus=this.blur() class='paging-arrow paging-prev' title='prev'><i class='xi-angle-left-min'></i></a><a href='javascript:;' class='cur'>1</a> <a href='recruite349.html?search_item=&amp;search_order=&amp;startPage=0#recruit' onfocus=this.blur() class='paging-arrow paging-next' title='next'><i class='xi-angle-right-min'></i></a><a href='recruite349.html?search_item=&amp;search_order=&amp;startPage=0#recruit' onfocus=this.blur() class='paging-arrow paging-last' title='last'><i class='xi-angle-right-min'></i><i class='xi-angle-right-min'></i></a>
                                </div>

                                <!--
	<div class="board-search-box"><!-- 라인형 기본 / 밑줄형 search-style-bottom-line / 원형배경 search-style-radius 
		<form name="bbs_search_form" method="get" action="/nids/kr/customer/recruit.php">
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