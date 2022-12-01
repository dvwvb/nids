<!doctype html>
<html lang="ko">

<head>
    <?php include "../_inc/config.php"; ?>
    <script>
        dep1 = 3
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
                                    <li>CEO 인사말</li>
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
                                <span>CEO 인사말</span>
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
                <section id="content" class="wide ">
                    <article class="cm-sub-tit-box" data-scroll="fade-up">
                        <div class="area">
                            <h2 class="tit">CEO 인사말</h2>
                            <p class="sub-tit">도시환경의 기술정보가 필요한 곳에 엔아이디에스가 있습니다.</p>
                        </div>
                    </article>

                    <article class="sub-page greeting-page">
                        <div class="greeting-con01" data-scroll="fade-up">
                            <div class="area">
                                <div class="greeting-con01-tit">
                                    <p><svg id="Layer_2" class="logo-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 395.24 162.94">
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
                                        </svg>에 <br>오신 것을 환영합니다!</p>
                                </div>
                            </div>
                        </div>
                        <div class="greeting-con02" data-scroll="fade-up">
                            <div class="area">
                                <h5 class="greeting-con02-tit">㈜엔아이디에스는 <br class="pc-br">2000년부터 고객의 성공을 위해 <br class="pc-br">최선을 다하고 있습니다.</h5>
                                <div class="greeting-con02-txt">
                                    <p>세계 최초로 스마트 디지털 먼지센서를 개발했습니다.<br>
                                        박사의 기업가정신과 환경, 인간 사랑을 겸비한 임직원과 인재들이 함께 협력하여 <br class="pc-br">
                                        혁신적인 기술 개발을 통한 사업 경쟁력 확보를 위해 노력하고 있습니다.<br>
                                        NIDS는 최고의 품질과 편안한 서비스로 해외수출에 주력하며 성장하는 기업입니다.<br>
                                        혁신기술로 우리의 최첨단 제품은 항상 당신과 함께할 것입니다.</p>
                                    <p>관심과 지도에 감사드립니다.</p>
                                </div>
                            </div>
                        </div>
                        <div class="greeting-con03" data-scroll="fade-up">
                            <div class="area">
                                <!-- ceo이미지 권장사이즈 192x244 -->
                                <div class="greeting-con03-img"><span><img src="../../images/content/ceo-img.jpg" alt="ceo"></span></div>
                                <div class="greeting-con03-txt">
                                    <div class="tit">NIDS Sensor Technology</div>
                                    <div class="info">
                                        <b class="position">설립자 / CEO</b>
                                        <span class="name-kr">황학인</span>
                                        <span class="name-en">Dr. Hak In. Hwang</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="greeting-con04" data-scroll="fade-up">
                            <div class="area">
                                <section class="cm-tab-container-JS">
                                    <aside class="greeting-tab-wrapper-style">
                                        <div class="greeting-tab-list-style cm-tab-list-JS">
                                            <ul class="clearfix">
                                                <li class="selected"><a href="#tabCon01"><em>주요활동</em></a></li>
                                                <li><a href="#tabCon02"><em>주요경력</em></a></li>
                                            </ul>
                                        </div>
                                    </aside>
                                    <article class="greeting-tab-content-style cm-tab-content-wrapper-JS">
                                        <div class="sub-tab-con" id="tabCon01">
                                            <div class="greeting-con04-item">
                                                <h5 class="greeting-con04-tit">주요활동</h5>
                                                <div class="greeting-con04-wrapper">
                                                    <table class="greeting-con04-tbl">
                                                        <tbody>
                                                            <tr>
                                                                <td class="date">2021.01 ~2021.12</td>
                                                                <td class="text-align-left">한국 센서학회 회장</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="date">2016.1 ~ 2016.12</td>
                                                                <td class="text-align-left">한국 공학 한림원 에너지 분과 운영위원</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="date">2016.1 ~ 2016.12</td>
                                                                <td class="text-align-left">경기도 에너지 운영위원</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="date">2014.8 ~ 2016.3</td>
                                                                <td class="text-align-left">산업자원통상부 에너지기술기반 전문위원회 위원</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="date">2011.10 ~ 2016.12</td>
                                                                <td class="text-align-left">한국연구재단 사회재난분야 국책 연구 RP</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="date">2011.7 ~ 2016.3</td>
                                                                <td class="text-align-left">에너지 기술 평가원 에너지전략 로드맵 운영위원 에너지기술평가원 국제협력 기획위원 등 </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="date">2011.10 ~ 2016.12</td>
                                                                <td class="text-align-left">한국 융합과학기술 포름 운영위원</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="date">2007.1 ~ 2016.12</td>
                                                                <td class="text-align-left">IEEE sensor editor</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="date">2014.10 ~ 2015.12</td>
                                                                <td class="text-align-left">제주 엑스포 전기차 조직위원회 위원</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="date">2010.3 ~ 2011. 6</td>
                                                                <td class="text-align-left">경기도 투지유치 위원회. 위원</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="date">2007.1 ~ 2011.12</td>
                                                                <td class="text-align-left">지경부 부품소재 전문 위원회 기술위원</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="date">2011.1 ~ 2015.12</td>
                                                                <td class="text-align-left">경기 나노 특화팹 운영위원</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="date">2007.1 ~ 2008.12</td>
                                                                <td class="text-align-left">한국 세라믹학회 이사</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="date">2002.9 ~ 2005.2</td>
                                                                <td class="text-align-left">아주대학교 전자공학과 겸임교수</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="date">2003.6 ~ 2011.6</td>
                                                                <td class="text-align-left">경기도 GRRC 지역협력연구센터 협의회 회장</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="date">2003.6 ~ 2011.6</td>
                                                                <td class="text-align-left">경기도 과학기술 자문위원회 위원장</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sub-tab-con" id="tabCon02">
                                            <div class="greeting-con04-item">
                                                <h5 class="greeting-con04-tit">주요경력</h5>
                                                <div class="greeting-con04-wrapper">
                                                    <table class="greeting-con04-tbl">
                                                        <colgroup>
                                                            <col style="width: 33.33%;">
                                                            <col style="width: 33.33%;">
                                                            <col style="width: 33.33%;">
                                                        </colgroup>
                                                        <thead>
                                                            <tr>
                                                                <th>근무 기관</th>
                                                                <th>주요업무</th>
                                                                <th>직위</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>㈜ 엔아이디에스</td>
                                                                <td>경영총괄</td>
                                                                <td>대표이사</td>
                                                            </tr>
                                                            <tr>
                                                                <td>이화여자대학교</td>
                                                                <td>융합기술연구소</td>
                                                                <td>산중교수</td>
                                                            </tr>
                                                            <tr>
                                                                <td>신한대학교</td>
                                                                <td>에너지환경공학과</td>
                                                                <td>산중교수</td>
                                                            </tr>
                                                            <tr>
                                                                <td>전자부품연구원</td>
                                                                <td>에너지연구본부</td>
                                                                <td>본부장</td>
                                                            </tr>
                                                            <tr>
                                                                <td>전자부품연구원</td>
                                                                <td>부품연구본부</td>
                                                                <td>본부장</td>
                                                            </tr>
                                                            <tr>
                                                                <td>스위스연방공대</td>
                                                                <td>Microsystem, MEMS</td>
                                                                <td>EPFL연구원, 포닥</td>
                                                            </tr>
                                                            <tr>
                                                                <td>전자부품연구원</td>
                                                                <td>센서연구실</td>
                                                                <td>실장</td>
                                                            </tr>
                                                            <tr>
                                                                <td>삼성전자</td>
                                                                <td>OA 부품개발</td>
                                                                <td>책임 연구원</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="greeting-con04-item">
                                                <h5 class="greeting-con04-tit">주요상벌</h5>
                                                <div class="greeting-con04-wrapper">
                                                    <table class="greeting-con04-tbl">
                                                        <colgroup>
                                                            <col style="width: 33.33%;">
                                                            <col style="width: 33.33%;">
                                                            <col style="width: 33.33%;">
                                                        </colgroup>
                                                        <thead>
                                                            <tr>
                                                                <th>구분</th>
                                                                <th>소속기관 및 내용</th>
                                                                <th>기관 / 시기</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>IR52장영실상</td>
                                                                <td>삼성전자 “ 밀착형 이미지센서”</td>
                                                                <td>매일경제/1991</td>
                                                            </tr>
                                                            <tr>
                                                                <td>성남기업대상</td>
                                                                <td>성남시 상패 2017-1421</td>
                                                                <td>성남시 2017년 12월</td>
                                                            </tr>
                                                            <tr>
                                                                <td>그린뉴딜혁신대상</td>
                                                                <td>2020 대한민국 기업대상</td>
                                                                <td>머니투데이 202.12</td>
                                                            </tr>
                                                            <tr>
                                                                <td>장관상</td>
                                                                <td>중소벤처기업부</td>
                                                                <td>중소벤처기업부 2022.05</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="greeting-con04-item">
                                                <h5 class="greeting-con04-tit">학력사항</h5>
                                                <div class="greeting-con04-wrapper">
                                                    <table class="greeting-con04-tbl">
                                                        <colgroup>
                                                            <col style="width: 20%;">
                                                            <col style="width: 20%;">
                                                            <col style="width: 20%;">
                                                            <col style="width: 20%;">
                                                            <col style="width: 20%;">
                                                        </colgroup>
                                                        <thead>
                                                            <tr>
                                                                <th>구분</th>
                                                                <th>기간 (년, 월, 일)</th>
                                                                <th>전공</th>
                                                                <th>학위명</th>
                                                                <th>수여기관(학교명)</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>학사</td>
                                                                <td>1978.3-1982.2</td>
                                                                <td>무기재료</td>
                                                                <td>-</td>
                                                                <td>HanYang Univ.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>석사</td>
                                                                <td>1982.3-1984.2</td>
                                                                <td>무기재료</td>
                                                                <td>초전체소재</td>
                                                                <td>HanYang Univ.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>박사</td>
                                                                <td>1978.3-1982.2</td>
                                                                <td>무기재료</td>
                                                                <td>-</td>
                                                                <td>1985.3-1988.2</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </section>
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
</body>

</html>