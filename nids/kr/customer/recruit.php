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

        <header id="header" class="top-fixed-object">
            <!-- .top-fixed가 붙는 object에 top-fixed-object 클래스 추가  -->
            <div class="gnb-overlay-bg"></div>
            <div id="headerInnerWrap">
                <!-- ****************** 헤더상단 ********************** -->
                <div id="headerInner" class="area-wide">
                    <h1 class="logo">
                        <a href="../index-2.html" title="to home">
                            <svg id="Layer_2" class="logo-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 395.24 162.94">
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
                        </a>
                    </h1>
                    <div class="header-util-box">
                        <!-- 외국어선택 -->
                        <div class="header-lang-list">
                            <ul class="clearfix">
                                <li class="cur"><a href="../index-2.html">KOR</a></li>
                                <li><a href="https://www.nids.co.kr/nids/en/">ENG</a></li>
                                <li><a href="https://www.nids.co.kr/nids/cn/">CHN</a></li>
                                <li><a href="https://www.nids.co.kr/nids/es/">ESP</a></li>
                            </ul>
                        </div>
                        <!-- 사이트맵 -->
                        <button class="sitemap-line-btn cm-sitemap-open-btn" title="Open the sitemap"><i class="xi-drag-vertical"></i></button>
                    </div>
                </div>
                <!-- ****************** GNB ********************** -->
                <!-- GNB PC  -->
                <nav id="gnb" class="each-menu">
                    <h2 class="blind">Menu</h2>
                    <!-- 
					- 전체메뉴 : class="total-menu"
					- 각각메뉴 : class="each-menu" + <div id="gnbBg"></div> 삭제
				-->
                    <!-- <div id="gnbBg"></div> -->
                    <ul class="clearfix area-box">
                        <li class="gnb1">
                            <a href="../business/sensor_dust.html">사업분야</a>
                            <div class="gnb-2dep">
                                <ul>
                                    <li>
                                        <a href="../business/sensor_dust.html"><span>환경센서</span></a>
                                        <ul class="gnb-3dep">
                                            <li><a href="../business/sensor_dust.html"><span>먼지센서</span></a></li>
                                            <li><a href="../business/sensor_gas.html"><span>가스센서</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="../business/plasma.html"><span>공기살균 & 탈취</span></a>
                                        <ul class="gnb-3dep">
                                            <li><a href="../business/plasma.html"><span>플라즈마 모듈</span></a></li>
                                            <li><a href="../business/photocatalytic.html"><span>광촉매 모듈</span></a></li>
                                            <li><a href="../business/hepa.html"><span>향균헤파필터</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="../business/iot.html"><span>IoT 시스템</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="gnb2">
                            <a href="../technology/sensor_dust.html">기술소개</a>
                            <div class="gnb-2dep">
                                <ul>
                                    <li>
                                        <a href="../technology/sensor_dust.html"><span>센서기술</span></a>
                                        <ul class="gnb-3dep">
                                            <li><a href="../technology/sensor_dust.html"><span>먼지센싱기술</span></a></li>
                                            <li><a href="../technology/sensor_gas.html"><span>가스센싱기술</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="../technology/plasma.html"><span>공기살균 & 탈취 기술</span></a>
                                        <ul class="gnb-3dep">
                                            <li><a href="../technology/plasma.html"><span>플라즈마 기술</span></a></li>
                                            <li><a href="../technology/photocatalytic.html"><span>광촉매 기술</span></a></li>
                                            <li><a href="../technology/hepa.html"><span>향균헤파필터</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="gnb3">
                            <a href="../company/intro.html">회사소개</a>
                            <div class="gnb-2dep">
                                <ul>
                                    <li><a href="../company/intro.html"><span>회사개요</span></a></li>
                                    <li><a href="../company/greeting.html"><span>CEO 인사말</span></a></li>
                                    <li><a href="../company/news.html"><span>뉴스</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="gnb4">
                            <a href="online.html">고객센터</a>
                            <div class="gnb-2dep">
                                <ul>
                                    <li><a href="online.html"><span>Contact us</span></a></li>
                                    <li><a href="faq.html"><span>FAQ</span></a></li>
                                    <li><a href="recruit.html"><span>인재채용</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="gnb5">
                            <a href="https://www.nids.co.kr/airvom/kr/index.php">에어봄 <i class="xi-external-link"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- GNB Mobile -->
            <button class="nav-open-btn" title="Menu Open"><i class="xi-drag-vertical"></i></button>
            <div class="gnb-overlay-bg-m"></div>
            <nav id="gnbM" class="gnb-style-basic">
                <!-- 
				기본스타일 : .gnb-style-basic
				Full 스타일 : .gnb-style-full
			-->
                <h2 class="blind">Menu</h2>
                <div class="header-util-menu-box">
                    <!-- 언어 선택 리스트 -->
                    <ul class="clearfix lang-select">
                        <li class="cur"><a href="../index-2.html">KOR</a></li>
                        <li><a href="javascript: alert('준비중입니다.');">ENG</a></li>
                        <li><a href="javascript: alert('준비중입니다.');">CHN</a></li>
                        <li><a href="javascript: alert('준비중입니다.');">ESP</a></li>
                    </ul>
                    <!-- // -->
                </div>
                <div class="gnb-navigation-wrapper">
                    <div class="gnb-navigation-inner">
                        <ul id="navigation" data-menu-clone="true"></ul><!-- PC메뉴 같을때 true / 같지않으면 false 후 메뉴삽입 -->
                    </div>
                </div>
            </nav>
        </header> <!-- //header -->
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