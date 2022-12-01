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
                            <article class="bbs-view-con">
                                <aside class="bbs-view-top">
                                    <!-- 필요할 경우만 삽입 -->

                                    <!-- <p class="reply-state"><span>답변대기</span></p><p class="reply-state reply-state-finish"><span>답변완료</span></p> -->
                                    <!-- <span class="bbs-category">[카테고리 있을때 쓰세요]</span> -->
                                    <!-- // -->
                                    <h1 class="bbs-tit">Arirang TV broadcasts NIDS in 'SmartBiz Accelerators' program</h1>
                                    <dl class="bbs-write-info">
                                        <dt>작성자</dt>
                                        <dd>관리자</dd>
                                        <dt>등록일</dt>
                                        <dd>2022-09-08</dd>
                                        <dt>조회수</dt>
                                        <dd>111</dd>
                                    </dl>
                                </aside>
                                <div class="bbs-view-content editor">
                                    <p><span style="font-size: 13.3333px;">Arirang TV broadcasts NIDS in 'SmartBiz Accelerators'</span></p>
                                    <p><span style="font-size: 13.3333px;">programon January 31 2019. Source from Arirang TV</span><br></p>
                                </div>

                                <!-- 
		게시판 공유 기능
		( ※ 필요한경우에만 넣으세요(sns공유) )
		아이콘 안나올시 : <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">	
	-->
                                <!-- <div class="bbs-view-share-con">
		<ul>
			<li style="background-color:#777;"><a href="" title="URL 복사"><i class="xi-link"></i></a></li>
			<li style="background-color:#3b5998;"><a href="" title="페이스북으로 공유하기"><i class="xi-facebook"></i></a></li>
			<li style="background-color:#11c1ff;"><a href="" title="트위터로 공유하기"><i class="xi-twitter"></i></a></li>
			<li style="background-color:#fab900;"><a href="" title="카카오스토리로 공유하기"><i class="xi-kakaostory"></i></a></li>
			<li style="background-color:#00c300;"><a href="" title="블로그로 공유하기"><i class="xi-blogger"></i></a></li>
			<li style="background-color:#dc4e41;"><a href="" title="구글에 공유하기"><i class="xi-google-plus"></i></a></li>
		</ul>
	</div> -->



                                <form method="post" action="#" name="form2">
                                    <input type="hidden" name="code" value="news_nids">
                                    <input type="hidden" name="bbs_view_del" value="1">
                                    <input type="hidden" name="bbs_view_edit" value="1">
                                    <input type="hidden" name="returnURL" value="news.html">
                                </form>

                                <div class="cm-btn-controls">
                                    <div class="right-btn-controls">
                                        <a href="news.html" class="btn-style01">
                                            목록 </a>
                                    </div>
                                </div>

                                <!-- 이전/다음 게시글보기 -->
                                <article class="bbs-view-prev-next-list">
                                    <ul>
                                        <li>
                                            <table class="bbs-prev-next-tbl">
                                                <colgroup>
                                                    <col style="width:140px">
                                                    <col>
                                                </colgroup>
                                                <tbody>
                                                    <tr>
                                                        <th><strong class="bbs-prev-next-tit">PREV<i class="xi-angle-up-min"></i></strong></th>
                                                        <td>
                                                            <p class="bbs-tit">이전 글이 없습니다.</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </li>
                                        <li>
                                            <table class="bbs-prev-next-tbl">
                                                <colgroup>
                                                    <col style="width:140px">
                                                    <col>
                                                </colgroup>
                                                <tbody>
                                                    <tr>
                                                        <th><strong class="bbs-prev-next-tit">NEXT<i class="xi-angle-down-min"></i></strong></th>
                                                        <td>
                                                            <a href="newsd6b4.html?code=news_nids&amp;idx=12&amp;bgu=view">
                                                                <p class="bbs-tit">Arirang TV broadcasts NIDS in 'SmartBiz Accelerators' program</p>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </li>
                                    </ul>
                                </article>
                                <!-- // -->
                                <script type="text/javascript">
                                    function dele() {
                                        ans = confirm("게시글을 삭제하시겠습니까?");
                                        if (ans == true) {
                                            form2.action = "https://www.nids.co.kr/bbs/bbs_view_del.php?returnURL=&amp;idx=11";
                                            form2.submit();
                                        }

                                    }

                                    function modi() {
                                        form2.action = "newsdb83.html?returnURL=&amp;bgu=edit&amp;idx=11";
                                        form2.submit();
                                    }
                                </script>


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