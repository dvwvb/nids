<!doctype html>
<html lang="ko">

<head>
    <?php include "../_inc/config.php"; ?>
    <script>
        dep1 = 1
        dep2 = 03;
        dep3 = 01;
    </script>
</head>

<body>
    <!-- accessibility -->
    <div class="cm-accessibility">
        <a href="#container">본문바로가기</a>
    </div>
    <!-- //accessibility -->
    <!-- code -->
    <div id="wrap" class="sub-wrap business-wrap">
        <!-- header -->
        <?php include "../_inc/header.php"; ?>

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