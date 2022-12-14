<!doctype html>
<html lang="ko">

<head>
    <?php include "../_inc/config.php"; ?>
    <script>
        dep1 = 3
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
                                    <li>회사개요</li>
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
                                <span>회사개요</span>
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
                            <h2 class="tit">회사개요</h2>
                            <p class="sub-tit">도시환경의 기술정보가 필요한 곳에 엔아이디에스가 있습니다.</p>
                        </div>
                    </article>

                    <article class="sub-page intro-page">
                        <div class="intro-con01" data-scroll="fade-up">
                            <div class="area">
                                <div class="intro-con01-tit">
                                    <strong>About NIDS</strong>
                                    <p><span>엔아이디에스</span>는 혁신적인 센서 제품 및 솔루션의 개발을 통하여 <br class="pc-br">
                                        고객사의 관련 사업 성공을 위한 훌륭한 비즈니스 파트너가 되기 위하여 <br class="pc-br">
                                        노력하고 있는 환경 및 에너지 분야 센서 전문 기업입니다.</p>
                                </div>
                            </div>
                        </div>
                        <div class="intro-con01-txt" data-scroll="fade-up">
                            <div class="area">
                                <p class="txt01">젊고 열정적인 인력들이 함께 모여서 개발한 <br class="m-br">저희의 환경 분야 혁신적인 센서 제품들, <br class="m-br">미세먼지 센서(PM1.0/2.5/10), <br>CO₂ 센서, VOCs 센서 등은 미세먼지와 <br class="m-br">각종 유해 가스들로 인하여 점점 더 악화되어 <br class="m-br">가는 환경 공해로부터 여러분의 가족들을 <br>지켜낼 수 있는 좋은 솔루션이 되고자 하는 <br class="m-br">저희 개발자들의 바람을 담고 있습니다.</p>
                                <p class="txt01">글로벌 시장의 수출을 목표로 한 혁신적 기술 <br class="m-br">개발을 통하여 글로벌 경쟁력을 <br class="m-br">갖춘 센서 제품들을 개발하였으며, <br>세계 유수의 환경기기 제조 회사들을 <br class="m-br">저희 제품을 사용하는 고객사로 확보하였습니다</p>
                                <p class="txt02">환경 및 에너지 분야<br class="m-br">(Air cleaner, Air conditioner, HVAC for automobile and IoT <br class="m-br">smart sensor for energy management)<br class="m-br">에 <br class="pc-br">적용 가능한 혁신적인 첨단 제품 <br class="m-br">개발을 통하여 여러분의 훌륭한 파트너가 <br class="m-br">되고자 끊임없이 연구개발을 지속할 것입니다.</p>
                            </div>
                        </div>
                        <div class="intro-con02" data-scroll="fade-up">
                            <div class="area">
                                <article class="cm-fixed-tab-container-JS company-history-tab-container clearfix">
                                    <div class="company-history-left-box" data-scroll="fade-up">
                                        <div class="company-history-tit"><b>NIDS</b>Since 2000</div>
                                        <aside class="company-history-tab">
                                            <div class="company-history-tab-style cm-fixed-tab-list-JS top-fixed-object">
                                                <div class="area">
                                                    <div class="company-history-tab-wrapper">
                                                        <ul class="clearfix swiper-wrapper company-history-tab">
                                                            <li class="selected swiper-slide"><a href="#fixedContentM1"><em>2020’s</em></a></li>
                                                            <li class="swiper-slide"><a href="#fixedContentM2"><em>2019’s</em></a></li>
                                                            <li class="swiper-slide"><a href="#fixedContentM3"><em>2017~2018’s</em></a></li>
                                                            <li class="swiper-slide"><a href="#fixedContentM4"><em>2015~2016’s</em></a></li>
                                                            <li class="swiper-slide"><a href="#fixedContentM5"><em>2011~2014’s</em></a></li>
                                                            <li class="swiper-slide"><a href="#fixedContentM6"><em>2000~2010’s</em></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </aside>
                                    </div>
                                    <div class="sub-tab-content-style company-history-wrap">
                                        <div class="sub-tab-con active" id="fixedContentM1">
                                            <div class="company-history">
                                                <div class="company-history-wrapper col1">
                                                    <!-- 연도가 한줄이면 col1 클래스 붙혀야함 -->
                                                    <div class="company-history-list-wrap clearfix" data-scroll="fade-up">
                                                        <div class="company-history-info-box">
                                                            <div class="company-history-year">2020’s</div>
                                                            <div class="company-history-info">
                                                                <p class="history-item"><span class="history-txt">유망한 환경 기업 선정</span></p>
                                                                <p class="history-item"><span class="history-txt">한국 최고의 기업 선정</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sub-tab-con" id="fixedContentM2">
                                            <div class="company-history">
                                                <div class="company-history-wrapper col1">
                                                    <div class="company-history-list-wrap clearfix" data-scroll="fade-up">
                                                        <div class="company-history-info-box">
                                                            <div class="company-history-year">2019’s</div>
                                                            <div class="company-history-info">
                                                                <p class="history-item"><span class="history-txt">바이러스 탐지기 및 살균기</span></p>
                                                                <p class="history-item"><span class="history-txt">AQM 제품 & IoT</span></p>
                                                                <p class="history-item"><span class="history-txt">신축 및 공장 이전</span></p>
                                                                <p class="history-item"><span class="history-txt">청년 친화형 히든 챔피언</span></p>
                                                                <p class="history-item"><span class="history-txt">센서 수출 1000만불 달성</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sub-tab-con" id="fixedContentM3">
                                            <div class="company-history">
                                                <div class="company-history-wrapper">
                                                    <div class="company-history-list-wrap clearfix" data-scroll="fade-up">
                                                        <div class="company-history-info-box">
                                                            <div class="company-history-year">2017<br>~2018’s</div>
                                                            <div class="company-history-info">
                                                                <p class="history-item"><span class="history-txt">황학인 대표이사</span></p>
                                                                <p class="history-item"><span class="history-txt">새로운 센서 : 레이저 입자 센서</span></p>
                                                                <p class="history-item"><span class="history-txt">지역 비즈니스 : 20명 이상</span></p>
                                                                <p class="history-item"><span class="history-txt">글로벌 히든 챔피언 상</span></p>
                                                                <p class="history-item"><span class="history-txt">벤처 캐피탈 투자 (500만달러)</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sub-tab-con" id="fixedContentM4">
                                            <div class="company-history">
                                                <div class="company-history-wrapper">
                                                    <div class="company-history-list-wrap clearfix" data-scroll="fade-up">
                                                        <div class="company-history-info-box">
                                                            <div class="company-history-year">2015<br>~2016’s</div>
                                                            <div class="company-history-info">
                                                                <p class="history-item"><span class="history-txt">GE 센싱 글로벌 ODM, 먼지 센서</span></p>
                                                                <p class="history-item"><span class="history-txt">Amphenol 센서</span></p>
                                                                <p class="history-item"><span class="history-txt">DYSON 먼지 센서 공급업체</span></p>
                                                                <p class="history-item"><span class="history-txt">중국, NIDS 브랜드 센서 판매</span></p>
                                                                <p class="history-item"><span class="history-txt">TCL, MEDIA, YADU 등.</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sub-tab-con" id="fixedContentM5">
                                            <div class="company-history">
                                                <div class="company-history-wrapper">
                                                    <div class="company-history-list-wrap clearfix" data-scroll="fade-up">
                                                        <div class="company-history-info-box">
                                                            <div class="company-history-year">2011<br>~2014’s</div>
                                                            <div class="company-history-info">
                                                                <p class="history-item"><span class="history-txt">디지털 먼지 센서 개발</span></p>
                                                                <p class="history-item"><span class="history-txt">생산 기술</span></p>
                                                                <p class="history-item"><span class="history-txt">해외 마케팅</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sub-tab-con" id="fixedContentM6">
                                            <div class="company-history">
                                                <div class="company-history-wrapper">
                                                    <div class="company-history-list-wrap clearfix" data-scroll="fade-up">
                                                        <div class="company-history-info-box">
                                                            <div class="company-history-year">2000<br>~2010’s</div>
                                                            <div class="company-history-info">
                                                                <p class="history-item"><span class="history-txt">“키 센서 특허” 등록</span></p>
                                                                <p class="history-item"><span class="history-txt">삼성, 현대 자동차</span></p>
                                                                <p class="history-item"><span class="history-txt">공기질 센서, 가스센서, 이오나이저</span></p>
                                                                <p class="history-item"><span class="history-txt">자동차 SQ/AQS</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="intro-con03">
                            <div class="area">
                                <article class="cm-sub-tit-box" data-scroll="fade-up">
                                    <h2 class="tit">경영이념 및 목표</h2>
                                    <p class="sub-tit">도시환경의 기술정보가 필요한 곳에 엔아이디에스가 있습니다.</p>
                                </article>
                                <div class="intro-con03-box">
                                    <div class="intro-con03-center" data-scroll="fade">
                                        <div class="inner"><span>경영 이념</span></div>
                                        <i class="arrow01 xi-caret-down-min"></i>
                                        <i class="arrow02 xi-caret-down-min"></i>
                                        <i class="arrow03 xi-caret-down-min"></i>
                                        <i class="arrow04 xi-caret-down-min"></i>
                                        <ul class="cir-con-m-list" data-rolling-time="2000" data-reset-width="800">
                                            <li class="item item01">
                                                <div class="cir"><span class="icon"></span>
                                                    <p>경영 이념</p>
                                                </div>
                                            </li>
                                            <li class="item item02">
                                                <div class="cir"><span class="icon"></span>
                                                    <p>기업 비전</p>
                                                </div>
                                            </li>
                                            <li class="item item03">
                                                <div class="cir"><span class="icon"></span>
                                                    <p>환경 방침</p>
                                                </div>
                                            </li>
                                            <li class="item item04">
                                                <div class="cir"><span class="icon"></span>
                                                    <p>품질 방침</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="intro-con03-wrapper" data-scroll>
                                        <ul class="intro-con03-list" data-rolling-time="2000" data-reset-width="800">
                                            <li class="intro-con03-item item01">
                                                <div class="cir"><span class="icon"></span>
                                                    <p>경영 <br class="m-br">이념</p>
                                                </div>
                                                <div class="txt">
                                                    <p>인간 존중, 고객 중심, 환경 보전, 임직원 <br class="pc-br">행복 추구의 핵심 가치는 고객의 신뢰와 <br class="pc-br">만족, 깨끗한 지구 환경 보전을 바탕으로 <br class="pc-br">사회 공헌에 활용되고 있습니다.</p>
                                                </div>
                                            </li>
                                            <li class="intro-con03-item item02">
                                                <div class="cir"><span class="icon"></span>
                                                    <p>기업 <br class="m-br">비전</p>
                                                </div>
                                                <div class="txt">
                                                    <p>첨단 센서 기술을 바탕으로 세계 최고의 <br class="pc-br">센서 및 센서 기반 서비스 솔루션 기업이 <br class="pc-br">되어 지구와 인류를 오염으로부터 보호하여 <br class="pc-br">인류의 행복한 삶에 기여하겠습니다. </p>
                                                </div>
                                            </li>
                                            <li class="intro-con03-item item03">
                                                <div class="cir"><span class="icon"></span>
                                                    <p>환경 <br class="m-br">방침</p>
                                                </div>
                                                <div class="txt">
                                                    <p>환경 관리 역량 개발, 환경 오염 물질의 <br class="pc-br">효율적 관리, 지속적인 개선</p>
                                                </div>
                                            </li>
                                            <li class="intro-con03-item item04">
                                                <div class="cir"><span class="icon"></span>
                                                    <p>품질 <br class="m-br">방침</p>
                                                </div>
                                                <div class="txt">
                                                    <p>최고의 제품과 무결점으로 <br class="pc-br">고객 감동을 제공하여 일류 센서 <br class="pc-br">기업으로 성장합니다.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-con04">
                            <div class="area">
                                <article class="cm-sub-tit-box" data-scroll="fade-up">
                                    <h2 class="tit">특허 내역</h2>
                                    <p class="sub-tit">도시환경의 기술정보가 필요한 곳에 엔아이디에스가 있습니다.</p>
                                </article>
                                <div class="intro-con04-tbl-wrapper" data-scroll="fade-up">
                                    <div class="custom-scrollbar-wrapper">
                                        <div class="cm-scroll-drag-guide">
                                            <div class="cm-scroll-drag-inner">
                                                <span class="drag-tail">
                                                    <em class="tail"></em>
                                                    <i class="xi-touch hand-icon"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="scroll-object-box">
                                            <table class="intro-con04-tbl scroll-object">
                                                <caption>특허 내역</caption>
                                                <colgroup>
                                                    <col style="width:10.83%;" />
                                                    <col style="width:16.66%;" />
                                                    <col />
                                                    <col style="width:35.83%;" />
                                                    <col style="width:21.25%;" />
                                                </colgroup>
                                                <thead>
                                                    <tr>
                                                        <th scope="col"><span>권리</span></th>
                                                        <th scope="col"><span>출원번호</span></th>
                                                        <th scope="col"><span>상태</span></th>
                                                        <th scope="col"><span>명칭</span></th>
                                                        <th scope="col"><span>등록번호(등록일자)</span></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>특허</td>
                                                        <td>10-2005-0030302</td>
                                                        <td>등록</td>
                                                        <td>자기 감도 보정 기능 및 감도편차 조절 기능을 갖는 <br class="pc-br">광학식 먼지 센서</td>
                                                        <td>10-0539310-0000 (20051221)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>특허(공동)</td>
                                                        <td>10-2005-0001804</td>
                                                        <td>등록</td>
                                                        <td>다공성 탄소재의 제조방법</td>
                                                        <td>10-0649150-0000 (20061116)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>특허(공동)</td>
                                                        <td>10-2005-0001792</td>
                                                        <td>등록</td>
                                                        <td>비정항이 조절된 저온 발열 탄소재의 제조방법</td>
                                                        <td>10-0639790-0000 (20061023)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>특허</td>
                                                        <td>10-208-0064786</td>
                                                        <td>등록</td>
                                                        <td>이온 발생 장치</td>
                                                        <td>10-0991151-0000 (20101026)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>특허(공동)</td>
                                                        <td>10-2012-0038913</td>
                                                        <td>등록</td>
                                                        <td>유기성 폐기물 처리 장치</td>
                                                        <td>10-1221816-0000 (20130108)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>특허</td>
                                                        <td>10-2020-0127243</td>
                                                        <td>등록</td>
                                                        <td>복합살균정화기</td>
                                                        <td>10-2198329 (20130108)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>특허</td>
                                                        <td>10-2021-0001559</td>
                                                        <td>등록</td>
                                                        <td>공기정화기용 입자분리기</td>
                                                        <td>10-22254078 (20210513)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>특허</td>
                                                        <td>10-2015-0179518</td>
                                                        <td>등록</td>
                                                        <td>농도별 감도를 가변할 수 있는 광학식 먼지센서와 <br class="pc-br">광학식 먼지센서의 농도별 검출 감도 가변방법</td>
                                                        <td>10-17553680000 (20170703)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>특허(공동)</td>
                                                        <td>10-2021-0125922</td>
                                                        <td>출원</td>
                                                        <td>생물 입자 및 비생물 입자를 검출하는 센서 장치</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <tr>
                                                        <td>특허(공동)</td>
                                                        <td>10-2021-0074412</td>
                                                        <td>출원</td>
                                                        <td>공기 중 부유 미생물의 포집 장치와 이를 포함하는 부유 미생물의 <br class="pc-br">실시간 검출 장치 및 바이러스 실시간 원격 모니터링 IoT 시스템</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <tr>
                                                        <td>디자인</td>
                                                        <td>30-2011-00387723</td>
                                                        <td>등록</td>
                                                        <td>먼지 센서</td>
                                                        <td>30-0670883-0000(20121129)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>디자인</td>
                                                        <td>30-2016-0003061</td>
                                                        <td>등록</td>
                                                        <td>먼지 센서</td>
                                                        <td>30-0865977-0000 (20160722)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>디자인</td>
                                                        <td>30-2019-0049130</td>
                                                        <td>등록</td>
                                                        <td>공기질 측정기</td>
                                                        <td>30-1069330-0000 (20200731)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>디자인</td>
                                                        <td>30-2021-0027969</td>
                                                        <td>등록</td>
                                                        <td>먼지 센서</td>
                                                        <td>30-1119174-0000 (20210712)</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="intro-con04-wrapper">
                                    <ul class="intro-con04-list" data-scroll="fade-up">
                                        <li class="intro-con04-item">
                                            <span class="num">01</span>
                                            <h5 class="tit">Key patents</h5>
                                            <p class="txt">The optical dust sensor which has a function <br class="pc-br">of selfdiagnosis and the sensitivity control(2005)</p>
                                        </li>
                                        <li class="intro-con04-item">
                                            <span class="num">02</span>
                                            <h5 class="tit">Key patents</h5>
                                            <p class="txt">Adjustable sensitivity optical dust sensor and <br class="pc-br">method fot adjustable sensitivity(2015)</p>
                                        </li>
                                        <li class="intro-con04-item">
                                            <span class="num">03</span>
                                            <h5 class="tit">Key patents</h5>
                                            <p class="txt">Combined sterilization air purifier(2020)</p>
                                        </li>
                                    </ul>
                                </div>
                                <article class="certifi-list-style05" data-scroll="fade-up">
                                    <ul class="certificate-list clearfix popup-gallery">
                                        <li>
                                            <a href="../../images/test/certi_test_02.jpg" title="회사 인증서">
                                                <div class="certificate-img-thumb">
                                                    <div class="img-con"><span><img src="../../images/test/certi_test_02.jpg" alt="회사 인증서"></span></div>
                                                    <div class="certificate-over-box"><i class="xi-search"></i></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../../images/test/certi_test_02.jpg" title="회사 인증서">
                                                <div class="certificate-img-thumb">
                                                    <div class="img-con"><span><img src="../../images/test/certi_test_02.jpg" alt="회사 인증서"></span></div>
                                                    <div class="certificate-over-box"><i class="xi-search"></i></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../../images/test/certi_test_02.jpg" title="회사 인증서">
                                                <div class="certificate-img-thumb">
                                                    <div class="img-con"><span><img src="../../images/test/certi_test_02.jpg" alt="회사 인증서"></span></div>
                                                    <div class="certificate-over-box"><i class="xi-search"></i></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../../images/test/certi_test_02.jpg" title="회사 인증서">
                                                <div class="certificate-img-thumb">
                                                    <div class="img-con"><span><img src="../../images/test/certi_test_02.jpg" alt="회사 인증서"></span></div>
                                                    <div class="certificate-over-box"><i class="xi-search"></i></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../../images/test/certi_test_02.jpg" title="회사 인증서">
                                                <div class="certificate-img-thumb">
                                                    <div class="img-con"><span><img src="../../images/test/certi_test_02.jpg" alt="회사 인증서"></span></div>
                                                    <div class="certificate-over-box"><i class="xi-search"></i></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../../images/test/certi_test_02.jpg" title="회사 인증서">
                                                <div class="certificate-img-thumb">
                                                    <div class="img-con"><span><img src="../../images/test/certi_test_02.jpg" alt="회사 인증서"></span></div>
                                                    <div class="certificate-over-box"><i class="xi-search"></i></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../../images/test/certi_test_02.jpg" title="회사 인증서">
                                                <div class="certificate-img-thumb">
                                                    <div class="img-con"><span><img src="../../images/test/certi_test_02.jpg" alt="회사 인증서"></span></div>
                                                    <div class="certificate-over-box"><i class="xi-search"></i></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../../images/test/certi_test_02.jpg" title="회사 인증서">
                                                <div class="certificate-img-thumb">
                                                    <div class="img-con"><span><img src="../../images/test/certi_test_02.jpg" alt="회사 인증서"></span></div>
                                                    <div class="certificate-over-box"><i class="xi-search"></i></div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </article>
                            </div>
                        </div>
                        <div class="intro-con05">
                            <div class="area">
                                <article class="cm-sub-tit-box" data-scroll="fade-up">
                                    <h2 class="tit">기업 주요 인증 내역</h2>
                                    <p class="sub-tit">도시환경의 기술정보가 필요한 곳에 엔아이디에스가 있습니다.</p>
                                </article>
                                <div class="certifi-list-style04" data-scroll="fade-up">
                                    <ul class="clearfix popup-gallery">
                                        <li>
                                            <a href="../../images/test/certi_test_02.jpg" title="R&D CENTER">
                                                <div class="certifi-img-thumb">
                                                    <span><img src="../../images/test/certi_test_02.jpg" alt="R&D CENTER"></span>
                                                    <div class="certifi-over-box"><i class="xi-search"></i></div>
                                                </div>
                                                <p class="certifi-tit">R&D CENTER</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../../images/test/certi_test_02.jpg" title=" COMPONENT, MATERIAL SPECIAL">
                                                <div class="certifi-img-thumb">
                                                    <span><img src="../../images/test/certi_test_02.jpg" alt="COMPONENT, MATERIAL SPECIAL"></span>
                                                    <div class="certifi-over-box"><i class="xi-search"></i></div>
                                                </div>
                                                <p class="certifi-tit"> COMPONENT, MATERIAL SPECIAL </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../../images/test/certi_test_02.jpg" title="VENTURE">
                                                <div class="certifi-img-thumb">
                                                    <span><img src="../../images/test/certi_test_02.jpg" alt="VENTURE"></span>
                                                    <div class="certifi-over-box"><i class="xi-search"></i></div>
                                                </div>
                                                <p class="certifi-tit">VENTURE</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../../images/test/certi_test_02.jpg" title="INNO-BIZ">
                                                <div class="certifi-img-thumb">
                                                    <span><img src="../../images/test/certi_test_02.jpg" alt="INNO-BIZ"></span>
                                                    <div class="certifi-over-box"><i class="xi-search"></i></div>
                                                </div>
                                                <p class="certifi-tit">INNO-BIZ</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../../images/test/certi_test_02.jpg" title="Promising Environmental Enterprise Certificate">
                                                <div class="certifi-img-thumb">
                                                    <span><img src="../../images/test/certi_test_02.jpg" alt="Promising Environmental Enterprise Certificate"></span>
                                                    <div class="certifi-over-box"><i class="xi-search"></i></div>
                                                </div>
                                                <p class="certifi-tit">Promising Environmental Enterprise Certificate</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../../images/test/certi_test_02.jpg" title="R&D CENTER">
                                                <div class="certifi-img-thumb">
                                                    <span><img src="../../images/test/certi_test_02.jpg" alt="R&D CENTER"></span>
                                                    <div class="certifi-over-box"><i class="xi-search"></i></div>
                                                </div>
                                                <p class="certifi-tit">R&D CENTER</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../../images/test/certi_test_02.jpg" title=" COMPONENT, MATERIAL SPECIAL">
                                                <div class="certifi-img-thumb">
                                                    <span><img src="../../images/test/certi_test_02.jpg" alt="COMPONENT, MATERIAL SPECIAL"></span>
                                                    <div class="certifi-over-box"><i class="xi-search"></i></div>
                                                </div>
                                                <p class="certifi-tit"> COMPONENT, MATERIAL SPECIAL </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../../images/test/certi_test_02.jpg" title="VENTURE">
                                                <div class="certifi-img-thumb">
                                                    <span><img src="../../images/test/certi_test_02.jpg" alt="VENTURE"></span>
                                                    <div class="certifi-over-box"><i class="xi-search"></i></div>
                                                </div>
                                                <p class="certifi-tit">VENTURE</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../../images/test/certi_test_02.jpg" title="INNO-BIZ">
                                                <div class="certifi-img-thumb">
                                                    <span><img src="../../images/test/certi_test_02.jpg" alt="INNO-BIZ"></span>
                                                    <div class="certifi-over-box"><i class="xi-search"></i></div>
                                                </div>
                                                <p class="certifi-tit">INNO-BIZ</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../../images/test/certi_test_02.jpg" title="Promising Environmental Enterprise Certificate">
                                                <div class="certifi-img-thumb">
                                                    <span><img src="../../images/test/certi_test_02.jpg" alt="Promising Environmental Enterprise Certificate"></span>
                                                    <div class="certifi-over-box"><i class="xi-search"></i></div>
                                                </div>
                                                <p class="certifi-tit">Promising Environmental Enterprise Certificate</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
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