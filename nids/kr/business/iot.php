<!doctype html>
<html lang="ko">

<head>
    <?php include "../_inc/config.php"; ?>
    <script>
        //  1번째  대메뉴 인덱스
        dep1 = 1
        // dep1 = 01,
        dep2 = 03;
        // sub2_num 변수가 있을때 ( 3차메뉴 )
        dep3 = 01;
        //console.log(dep3);
    </script>
</head>

<body>
    <!-- accessibility -->
    <div class="cm-accessibility">
        <a href="#container">본문바로가기</a>
    </div>
    <!-- //accessibility -->
    <!-- code -->
    <div id="wrap" class="sub-wrap   business-wrap">
        <!-- header -->

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
                            <a href="sensor_dust.html">사업분야</a>
                            <div class="gnb-2dep">
                                <ul>
                                    <li>
                                        <a href="sensor_dust.html"><span>환경센서</span></a>
                                        <ul class="gnb-3dep">
                                            <li><a href="sensor_dust.html"><span>먼지센서</span></a></li>
                                            <li><a href="sensor_gas.html"><span>가스센서</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="plasma.html"><span>공기살균 & 탈취</span></a>
                                        <ul class="gnb-3dep">
                                            <li><a href="plasma.html"><span>플라즈마 모듈</span></a></li>
                                            <li><a href="photocatalytic.html"><span>광촉매 모듈</span></a></li>
                                            <li><a href="hepa.html"><span>향균헤파필터</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="iot.html"><span>IoT 시스템</span></a>
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
                            <a href="../customer/online.html">고객센터</a>
                            <div class="gnb-2dep">
                                <ul>
                                    <li><a href="../customer/online.html"><span>Contact us</span></a></li>
                                    <li><a href="../customer/faq.html"><span>FAQ</span></a></li>
                                    <li><a href="../customer/recruit.html"><span>인재채용</span></a></li>
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
            <section id="visual" class="sub-visual-business">
                <div class="visual-img-con">
                    <div class="visual-img-inner" style="background:#eee url(../../images/layout/sub_visual_business.jpg) no-repeat 70% 0%"></div>
                </div>
                <div class="area visual-txt-con">
                    <div class="table-cell-layout">
                        <div class="visual-txt-container">
                            <h2 class="visual-tit trans400">
                                Buiness Field </h2>
                            <p class="visual-sub-txt">With Aivom’s Plasma Technology, <br class="m-br">Eliminate</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- //visual -->
            <!-- middleArea -->
            <div id="middleArea">
                <!-- ****************** 서브메뉴 ********************** -->

                <!-- 2차&3차 같이 있는 타입 -->
                <!-- 서브메뉴1 -->
                <aside id="topBusinessMenu" class="">
                    <div class="side-menu-inner">
                        <div class="area">
                            <aside id="topMenu04" class="">
                                <div class="side-menu-inner">
                                    <div class="cm-top-menu clearfix">
                                        <div class="menu-location location2 cm-drop-menu-box-JS" data-drop-event="click">
                                            <button class="cur-location cm-drop-open-btn-JS">
                                                <span>IoT 시스템</span>
                                                <i class="xi-caret-down-circle-o arrow"></i>
                                            </button>
                                            <ul class="location-menu-con cm-drop-list-JS">
                                                <li>
                                                    <a href="sensor_dust.html"><span>환경센서</span></a>
                                                    <ul class="gnb-3dep">
                                                        <li><a href="sensor_dust.html"><span>먼지센서</span></a></li>
                                                        <li><a href="sensor_gas.html"><span>가스센서</span></a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="plasma.html"><span>공기살균 & 탈취</span></a>
                                                    <ul class="gnb-3dep">
                                                        <li><a href="plasma.html"><span>플라즈마 모듈</span></a></li>
                                                        <li><a href="photocatalytic.html"><span>광촉매 모듈</span></a></li>
                                                        <li><a href="hepa.html"><span>향균헤파필터</span></a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="iot.html"><span>IoT 시스템</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <ul class="business-3dep-list sub-menu-business clearfix">
                                <li><a href="iot.html"><span>IoT 시스템</span></a></li>
                            </ul>
                        </div>
                    </div>
                </aside>
                <!-- // -->

                <!-- 모바일 서브메뉴 2 -->
                <aside id="topMenuM02" class="dep2-menu cm-top-menu clearfix">
                    <div class="side-menu-inner clearfix">
                        <!-- 2차메뉴 -->
                        <div class="menu-location location2 cm-drop-menu-box-JS" data-drop-event="click">
                            <button class="cur-location cm-drop-open-btn-JS">
                                <span>IoT 시스템</span>
                                <i class="xi-caret-down-circle-o arrow"></i>
                            </button>
                            <ul class="location-menu-con cm-drop-list-JS">
                                <li>
                                    <a href="sensor_dust.html"><span>환경센서</span></a>
                                    <ul class="gnb-3dep">
                                        <li><a href="sensor_dust.html"><span>먼지센서</span></a></li>
                                        <li><a href="sensor_gas.html"><span>가스센서</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="plasma.html"><span>공기살균 & 탈취</span></a>
                                    <ul class="gnb-3dep">
                                        <li><a href="plasma.html"><span>플라즈마 모듈</span></a></li>
                                        <li><a href="photocatalytic.html"><span>광촉매 모듈</span></a></li>
                                        <li><a href="hepa.html"><span>향균헤파필터</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="iot.html"><span>IoT 시스템</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>
                <aside id="topMenuM02" class="cm-top-menu clearfix">
                    <div class="side-menu-inner clearfix">
                        <!-- 3차메뉴 -->
                        <div class="menu-location location3 cm-drop-menu-box-JS" data-drop-event="click">
                            <button class="cur-location cm-drop-open-btn-JS">
                                <span>IoT시스템</span>
                                <i class="xi-caret-down-circle-o arrow"></i>
                            </button>
                            <ul class="location-menu-con cm-drop-list-JS">
                                <li><a href="iot.html"><span>IoT 시스템</span></a></li>
                            </ul>
                        </div>
                    </div>
                </aside>
                <!-- // -->


                <!-- content -->
                <section id="content" class="wide pt-120">

                    <section class="sub-page business-page iot-page">
                        <h3 class="cm-page-tit" data-scroll="fade-up">IoT 시스템</h3>
                        <article class="sensor-top-con">
                            <div class="sensor-top-bg" data-scroll="fade-up"></div>
                            <div class="area-wide">
                                <div class="sensor-top-list" data-scroll="fade-up">
                                    <div class="list-item">
                                        <div class="icon-box">
                                            <span><img src="../../images/content/iot_top_icon01.png" alt=""></span>
                                            <strong class="tit">특징</strong>
                                        </div>
                                        <div class="txt-box">
                                            <p class="txt">
                                                엔아이디에스 IoT 솔루션은 스마트 센서와
                                                댜양한 분야의 서비스를 융합하여 고객의 삶을
                                                The Smart하게 만드는 것을 목표합니다.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="list-item">
                                        <div class="icon-box">
                                            <span><img src="../../images/content/iot_top_icon02.png" alt=""></span>
                                            <strong class="tit">장점</strong>
                                        </div>
                                        <div class="txt-box">
                                            <p class="txt">
                                                스마트 센서와 서비스 플랫폼이 융합되어
                                                올 인원 서비스를 제공하며, 제품의 타입,
                                                고객의 유형에 따른 커스터마이징 서비스를
                                                제공합니다.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="list-item">
                                        <div class="icon-box">
                                            <span><img src="../../images/content/iot_top_icon03.png" alt=""></span>
                                            <strong class="tit">기술</strong>
                                        </div>
                                        <div class="txt-box">
                                            <p class="txt">
                                                엔아이디에스 자체 개발 IoT 공기질 측정기(AQM)은
                                                <span>성능인증 1등급을 받은 제품으로,</span> 실시간 현황,
                                                지도연동, 장치별 그래프 등 고객의 요청과
                                                내장 분석툴을 통해 스마트 리포트 제공이 가능합니다.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="sensor-top-btn">
                                    <a href="#" data-scroll="fade-up"><i class="xi-documents-o"></i> <span>IOT 시스템 자세히보기 </span></a>
                                </div>
                            </div>
                        </article>

                        <article class="sensor-con-02">
                            <div class="area">
                                <div class="tit-box" data-scroll="fade-up">
                                    <h4 class="sensor-tit">㈜엔아이디에스 <br class="m-br" />IoT 플랫폼 제품화</h4>
                                </div>

                                <div class="sensor-con-02-list" data-scroll="fade-up">
                                    <div class="list-item">
                                        <div class="item-box">
                                            <span class="img-box"><img src="../../images/content/iot_con02_img01.png" alt="Airvom T"></span>
                                            <div class="tit-box">
                                                <h5 class="tit">Airvom T</h5>
                                                <a href="#" class="">자세히 보기 <i class="xi-angle-right-thin"></i></a>
                                            </div>
                                            <div class="iot-plus-box">
                                                <div class="iot-plus-item">
                                                    <span class="icon"><img src="../../images/content/iot_con02_icon01.png" alt=""></span>
                                                    <dl>
                                                        <dt>높은 정확도 </dt>
                                                        <dd>NIDS inside</dd>
                                                    </dl>
                                                </div>
                                                <div class="iot-plus-item">
                                                    <span class="icon"><img src="../../images/content/iot_con02_icon02.png" alt=""></span>
                                                    <dl>
                                                        <dt>PM 2.5 / PM 10</dt>
                                                        <dd>동시 측정 </dd>
                                                    </dl>
                                                </div>
                                                <div class="iot-plus-item">
                                                    <span class="icon"><img src="../../images/content/iot_con02_icon03.png" alt=""></span>
                                                    <dl>
                                                        <dt>휴대용</dt>
                                                        <dd>USB 충전식</dd>
                                                    </dl>
                                                </div>
                                                <div class="iot-plus-item">
                                                    <span class="icon"><img src="../../images/content/iot_con02_icon04.png" alt=""></span>
                                                    <dl>
                                                        <dt>국내 제조</dt>
                                                        <dd>Made in Korea</dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-item">
                                        <div class="item-box">
                                            <span class="img-box"><img src="../../images/content/iot_con02_img02.png" alt="Airvom T4"></span>
                                            <div class="tit-box">
                                                <h5 class="tit">Airvom T4</h5>
                                                <a href="#" class="">자세히 보기 <i class="xi-angle-right"></i></a>
                                            </div>
                                            <div class="iot-plus-box">
                                                <div class="iot-plus-item">
                                                    <span class="icon"><img src="../../images/content/iot_con02_icon05.png" alt=""></span>
                                                    <dl>
                                                        <dt>성능인증 1 등급</dt>
                                                    </dl>
                                                </div>
                                                <div class="iot-plus-item">
                                                    <span class="icon"><img src="../../images/content/iot_con02_icon06.png" alt=""></span>
                                                    <dl>
                                                        <dt>3.2인치 TFT LCD 표시 장치</dt>
                                                    </dl>
                                                </div>
                                                <div class="iot-plus-item">
                                                    <span class="icon"><img src="../../images/content/iot_con02_icon07.png" alt=""></span>
                                                    <dl>
                                                        <dt>고정밀급 Laser Diode 광산란식</dt>
                                                    </dl>
                                                </div>
                                                <div class="iot-plus-item">
                                                    <span class="icon"><img src="../../images/content/iot_con02_icon08.png" alt=""></span>
                                                    <dl>
                                                        <dt>PM2.5, PM10, CO2, TVOC, 온도, 습도 측정</dt>
                                                    </dl>
                                                </div>
                                                <div class="iot-plus-item">
                                                    <span class="icon"><img src="../../images/content/iot_con02_icon09.png" alt=""></span>
                                                    <dl>
                                                        <dt>실시간 1초 단위 측정 수치 표시</dt>
                                                    </dl>
                                                </div>
                                                <div class="iot-plus-item">
                                                    <span class="icon"><img src="../../images/content/iot_con02_icon10.png" alt=""></span>
                                                    <dl>
                                                        <dt>60초 단위부터 IoT 서버전송 및 저장</dt>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="sensor-con-05">
                            <div class="area">
                                <div class="tit-box" data-scroll="fade-up">
                                    <h4 class="sensor-tit">엔아이디에스 IoT 시스템 장점</h4>
                                    <p class="txt">
                                        엔아이디에스 IoT 시스템은 기능의 범위에 따라 온 습도 기능 뿐만 아니라 청정기능으로 실내 기후를 편안한 수준으로 유지시키는 필수 기술력입니다. <br />
                                        엔아이디에스의 독창적 IoT 기술로 청정기능의 광범위한 애플리케이션 시나리오에 맞게 귀사의 해당 제품의 작동을 최적화시킵니다. <br />
                                        특히, 자사의 IOT 플랫폼 제품 채용시 개발 된 자사 서버채널을 통해 센서기반의 실시간 실내외 모니터링을 제공합니다.
                                    </p>
                                </div>

                                <div class="sensor-con-05-list" data-scroll="fade-up">
                                    <div class="list-item">
                                        <div class="icon"><img src="../../images/content/sensor_con05_icon01.png" alt=""></div>
                                        <dl class="txt-box">
                                            <dt>센서기반 모니터링</dt>
                                            <dd>
                                                공기 품질에 대한 엔아이디에스 <br class="pc-br" />
                                                센서 기반 모니터링은 외부 공기 <br class="pc-br" />
                                                공급의 기반 제어를 통해 최적의 <br class="pc-br" />
                                                실내 공기질을 형성합니다.
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="list-item">
                                        <div class="icon"><img src="../../images/content/sensor_con05_icon02.png" alt=""></div>
                                        <dl class="txt-box">
                                            <dt>Autonomous device control</dt>
                                            <dd>
                                                온 습도 센서로 가습 및 제습과 같은 <br class="pc-br" />
                                                다양한 작동 모드를 정밀 제어하며, <br class="pc-br" />
                                                최적의 기능 도출로 에너지 효율 개선에 <br class="pc-br" />
                                                기여합니다.
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="list-item">
                                        <div class="icon"><img src="../../images/content/sensor_con05_icon03.png" alt=""></div>
                                        <dl class="txt-box">
                                            <dt>Ensuring optimal <br>indoor air quality</dt>
                                            <dd>
                                                대기 중 수많은 부유 오염물질은 <br class="pc-br" />
                                                인간의 삶의 질과 건강에 직접적인 <br class="pc-br" />
                                                부정적 영향을 미치고 있습니다. <br class="pc-br" />
                                                엔아이디에스 환경 센서의 실내 오염 <br class="pc-br" />
                                                대기질 시각화 적업으로 제품 채용 시 <br class="pc-br" />
                                                실내외 대기질 상태를 실시간 확인 <br class="pc-br" />
                                                할 수 있습니다.
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="list-item">
                                        <div class="icon"><img src="../../images/content/sensor_con05_icon04.png" alt=""></div>
                                        <dl class="txt-box">
                                            <dt>Reduction of <br />dust and pollen pollution</dt>
                                            <dd>
                                                엔아이디에스 환경 센서 기술과 IOT 시스템의 <br class="pc-br" />
                                                연계는 최적의 에너지 효율을 도출과 <br class="pc-br" />
                                                최상의 개인 쾌적함을 구현에 필수 핵심 부품이 <br class="pc-br" />
                                                될 것입니다.
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="sensor-con-04">
                            <div class="area">
                                <div class="tit-box" data-scroll="fade-up">
                                    <h4 class="sensor-tit">엔아이디에스 IoT 플랫폼 서비스 제공 범위</h4>
                                    <p class="txt">스마트 센서와 서비스 플랫폼이 융합되어 만들어지는 더 스마트한 세상</p>
                                </div>

                                <div class="sensor-con-04-list">
                                    <div class="list-item left-item" data-scroll="fade-up">
                                        <div class="img-box">
                                            <span><img src="../../images/content/iot_con04_img01.jpg" alt=""></span>
                                        </div>
                                        <div class="txt-box">
                                            <strong class="sub-tit">H/W 플랫폼</strong>
                                            <h4 class="tit">H/W Platform</h4>
                                            <p class="txt">
                                                <span class="inner-txt">*WiFi / BT 를 통한 무선 통신</span>
                                                <span class="inner-txt">각종 센서 I/F 연결</span>
                                                <span class="inner-txt">데이터 디스플레이</span>
                                                <span class="inner-txt">H/W 기기 제어</span>
                                                <span class="inner-txt">IoT 플랫폼 제품화 </span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="list-item right-item" data-scroll="fade-up">
                                        <div class="img-box">
                                            <span><img src="../../images/content/iot_con04_img02.jpg" alt=""></span>
                                        </div>
                                        <div class="txt-box">
                                            <strong class="sub-tit">IoT Server</strong>
                                            <h4 class="tit">IoT Server</h4>
                                            <p class="txt">
                                                <span class="inner-txt">*MQTT 프로토콜 IoT 서버 연동</span>
                                                <span class="inner-txt">각종 센서 데이터 전송</span>
                                                <span class="inner-txt">다양한 모니터링 서비스 활용</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="list-item left-item" data-scroll="fade-up">
                                        <div class="img-box">
                                            <span><img src="../../images/content/iot_con04_img03.jpg" alt=""></span>
                                        </div>
                                        <div class="txt-box">
                                            <strong class="sub-tit">Application</strong>
                                            <h4 class="tit">스마트폰 App.</h4>
                                            <p class="txt">
                                                <span class="inner-txt">센서 디바이스 연결</span>
                                                <span class="inner-txt">모니터링 및 제어 관리</span>
                                                <span class="inner-txt">각종 데이터 서버 전송</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <div class="iot-con-06">
                            <div class="area">
                                <div class="tit-box" data-scroll="fade-up">
                                    <h4 class="sensor-tit">센서 디바이스 연결 및 모니터링 제어관리 구축</h4>
                                    <p class="txt">더 스마트한 삶을 위해 다양한 분야가 융합된 서비스를 추구합니다.</p>
                                </div>

                                <div class="iot-item" data-scroll="fade-up">
                                    <span class="img-item">
                                        <img src="../../images/content/iot_con05_img01.png" alt="">
                                    </span>
                                    <span class="img-item">
                                        <img src="../../images/content/iot_con05_img02.png" alt="">
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="iot-con-07">
                            <div class="area">
                                <div class="iot-item-list" data-scroll="fade-up">
                                    <div class="iot-item">
                                        <span class="icon"><img src="../../images/content/iot_con07_icon01.png" alt=""></span>
                                        <dl>
                                            <dt>강력한 IoT 모듈</dt>
                                            <dd>
                                                IoT 모듈은 센서와 <br />
                                                디바이스를 스마트 하게 <br />
                                                만들어 다양한 서비스를 <br />
                                                가능하게 합니다.
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="iot-item">
                                        <span class="icon"><img src="../../images/content/iot_con07_icon02.png" alt=""></span>
                                        <dl>
                                            <dt>올-인-원 서비스</dt>
                                            <dd>
                                                모든센서 데이터와 서비스는 <br />
                                                단하나의 플랫폼에서 <br />
                                                다양한 서비스 형태로 제공됩니다.
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="iot-item">
                                        <span class="icon"><img src="../../images/content/iot_con07_icon03.png" alt=""></span>
                                        <dl>
                                            <dt>커스터마이징서비스 </dt>
                                            <dd>
                                                제품의타입,프로토콜, <br />
                                                클라이언트 유형에 따른 <br />
                                                커스터마이징 서비스 제공
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="iot-item">
                                        <span class="icon"><img src="../../images/content/iot_con07_icon04.png" alt=""></span>
                                        <dl>
                                            <dt>최고레벨 보안 환경</dt>
                                            <dd>
                                                엔아이디에스 IoT 플랫폼은 <br />
                                                최고수준의 보안 환경을 <br />
                                                제공합니다.
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="iot-item">
                                        <span class="icon"><img src="../../images/content/iot_con07_icon05.png" alt=""></span>
                                        <dl>
                                            <dt>스마트리포트</dt>
                                            <dd>
                                                고객의 요청에 따라 내장 분석툴을 <br />
                                                통하여 매월 데이터를 자동분석하여 <br />
                                                제공,별도의 분석 서비스를 <br />
                                                이용할 필요가 없습니다.
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="iot-item">
                                        <span class="icon"><img src="../../images/content/iot_con07_icon06.png" alt=""></span>
                                        <dl>
                                            <dt>편의성</dt>
                                            <dd>
                                                고객이 쉽고 빠르게 판단할 수 <br />
                                                있도록 최대한 간결하고 쉬운 <br />
                                                UI/UX 구성
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="iot-con-08">
                            <div class="area">
                                <div class="tit-box" data-scroll="fade-up">
                                    <h4 class="sensor-tit"><span>엔아이디에스 IoT 플랫폼</span> 더 스마트한서비스 </h4>
                                </div>

                                <div class="iot-item" data-scroll="fade-up">
                                    <div class="left-box">
                                        <span><img src="../../images/content/iot_con08_img.png" alt=""></span>
                                    </div>
                                    <div class="right-box">
                                        <dl>
                                            <dt class="tit">환경 분야 서비스</dt>
                                            <dd class="txt">미세먼지 등의 공기질을 측정/분석하고 <br />청정한 환경을 위해 청정기 및 공조시스템을 관리</dd>
                                        </dl>
                                        <dl>
                                            <dt class="tit">방범, 보안, 감시 서비스</dt>
                                            <dd class="txt">고객들이 안전하고 안심할 수 있는 환경을 만들고 소중한 신체와 재물을 보호합니다.</dd>
                                        </dl>
                                        <dl>
                                            <dt class="tit">소방, 방재 서비스</dt>
                                            <dd class="txt">다양한 감지 데이터를 분석하여 화재 예방 및 신속한알림 서비스를 제공합니다.</dd>
                                        </dl>
                                        <dl>
                                            <dt class="tit">헬스케어 서비스</dt>
                                            <dd class="txt">고객이 건강하게 더 스마트한 삶을 영위할 수 있도록 <br />건강관리 서비스를 제공합니다.</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

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