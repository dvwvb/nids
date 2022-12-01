<!doctype html>
<html lang="ko">

<head>
    <?php include "../_inc/config.php"; ?>
    <script>
        //  1번째  대메뉴 인덱스
        dep1 = 1
        // dep1 = 01,
        dep2 = 01;
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
    <div id="wrap" class="sub-wrap business-wrap">
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
                                                <span>환경센서</span>
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
                                <li><a href="sensor_dust.html"><span>먼지센서</span></a></li>
                                <li><a href="sensor_gas.html"><span>가스센서</span></a></li>
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
                                <span>환경센서</span>
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
                                <span>먼지센서</span>
                                <i class="xi-caret-down-circle-o arrow"></i>
                            </button>
                            <ul class="location-menu-con cm-drop-list-JS">
                                <li><a href="sensor_dust.html"><span>먼지센서</span></a></li>
                                <li><a href="sensor_gas.html"><span>가스센서</span></a></li>
                            </ul>
                        </div>
                    </div>
                </aside>
                <!-- // -->


                <!-- content -->
                <section id="content" class="wide pt-120">

                    <section class="sub-page business-page">
                        <h3 class="cm-page-tit" data-scroll="fade-up">먼지센서</h3>
                        <article class="sensor-top-con">
                            <div class="sensor-top-bg" data-scroll="fade-up"></div>
                            <div class="area-wide">
                                <div class="sensor-top-list" data-scroll="fade-up">
                                    <div class="list-item">
                                        <div class="icon-box">
                                            <span><img src="../../images/content/sensor_dust_top_icon01.png" alt=""></span>
                                            <strong class="tit">특징</strong>
                                        </div>
                                        <div class="txt-box">
                                            <p class="txt">* 높은 정확도와 정밀한 공정작업으로 먼지입자를 빠르게 감지하고 구분합니다.</p>
                                        </div>
                                    </div>
                                    <div class="list-item">
                                        <div class="icon-box">
                                            <span><img src="../../images/content/sensor_dust_top_icon02.png" alt=""></span>
                                            <strong class="tit">장점</strong>
                                        </div>
                                        <div class="txt-box">
                                            <p class="txt">
                                                엔아이디에스 환경센서는 다양한 응용분야와
                                                시장에서 채용되어, 그간 수많은 특허 및 경험을
                                                바탕으로 에너지 효율 개선과 인간의 근본적
                                                건강한 삶의 질 형성에 기여해왔습니다.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="list-item">
                                        <div class="icon-box">
                                            <span><img src="../../images/content/sensor_dust_top_icon03.png" alt=""></span>
                                            <strong class="tit">기술</strong>
                                        </div>
                                        <div class="txt-box">
                                            <p class="txt">
                                                20년 이상의 미세입자 감지 기술개발 경험과
                                                엔아이디에스의 독자적인 알고리즘과 결합되어,
                                                대부분의 채용 기기에 요구되는 수준이상의
                                                정밀도를 제공합니다.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="sensor-top-btn">
                                    <a href="#" data-scroll="fade-up"><i class="xi-search"></i> <span>기술력 파트</span></a>
                                </div>
                            </div>
                        </article>

                        <article class="sensor-con-01">
                            <div class="area">
                                <div class="tit-box" data-scroll="fade-up">
                                    <h4 class="sensor-tit">엔아이디에스 환경센서, 엄격한 국제표준(ISO) 입증완료</h4>
                                    <strong class="sub-tit">글로벌 수준의 품질관리 & 환경경영 시스템 구축</strong>
                                    <p class="txt">
                                        국제표준화 기구(ISO)에서 제정한 국제 규격 인증 <br />
                                        깐깐하고 체계적인 국제심사 절차를 거쳐, 고객에게 제공되는 제품과 서비스가 엄격히 유지관리 되고 있음을 입증하는 인증입니다.
                                    </p>
                                </div>
                                <div class="sensor-con-list" data-scroll="fade-up">
                                    <div class="list-item">
                                        <div class="logo-box"><img src="../../images/content/sensor_dust_con01_logo01.jpg" alt=""></div>
                                        <dl class="txt-box">
                                            <dt>품질경영 국제표준 ISO 9001 인증</dt>
                                            <dd>당사 품질관리시스템이 글로벌 수준의 최고 품질로 일관되게 고객의 요구를 충족할 수 있도록 관리되고 있음을 증명합니다.</dd>
                                        </dl>
                                    </div>
                                    <div class="list-item">
                                        <div class="logo-box"><img src="../../images/content/sensor_dust_con01_logo02.jpg" alt=""></div>
                                        <dl class="txt-box">
                                            <dt>환경경영 시스템 ISO14001 인증</dt>
                                            <dd>글로벌 수준의 친환경 경영시스템 구축 증명 유해 환경 요소들을 최소화하고 당사 제품의 에너지와 자원 소비, 재생이 효율적으로 <br class="pc-br" />관리되어 지고 있음을 증명합니다.</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="sensor-con-02" id="sensorTabCon">
                            <div class="area">
                                <div class="tit-box" data-scroll="fade-up">
                                    <h4 class="sensor-tit">
                                        <span>다양한 유형의 먼지 입자를 정밀하고 신속히 측정하기 위한</span>
                                        <br />엔아이디에스의 핵심 공기질 센싱 솔루션 제공
                                    </h4>
                                </div>

                                <div class="sensor-con-02-list" data-scroll="fade-up">
                                    <div class="list-item">
                                        <div class="item-box">
                                            <span class="img-box"><img src="../../images/content/sensor_dust_con02_img01.png" alt="Laser Particle Sensor"></span>
                                            <div class="tit-box">
                                                <h5 class="tit">Laser Particle Sensor</h5>
                                                <a href="javascript:;" class="tab-open-btn">제품규격 <i class="xi-angle-right-thin"></i></a>
                                            </div>
                                        </div>
                                        <div class="info-box">
                                            <p class="info-txt">광학 방식으로 공기 중 미세먼지를 감지하여 농도 값을 출력합니다.</p>
                                            <p class="info-txt">센서 내부에 레이저와 광센서가 광학적으로 배열되어 있으며, <br />광센서는 먼지 입자에 의해 산란된 레이저 광을 감지합니다.</p>
                                            <p class="info-txt">센서의 MCU가 미세 입자의 농도와 사이즈를 계산하여 PM1/PM2.5/PM10 농도를 출력합니다.</p>
                                        </div>
                                    </div>
                                    <div class="list-item">
                                        <div class="item-box">
                                            <span class="img-box"><img src="../../images/content/sensor_dust_con02_img02.png" alt="IR Dust Sensor"></span>
                                            <div class="tit-box">
                                                <h5 class="tit">IR Dust Sensor</h5>
                                                <a href="javascript:;" class="tab-open-btn second-btn">제품규격 <i class="xi-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="info-box">
                                            <p class="info-txt">광학 방식으로 공기 중 미세먼지를 감지하여 농도 값을 출력합니다. </p>
                                            <p class="info-txt">센서 내부에 IR LED와 광센서가 광학적으로 배열되어 있으며, <br />광센서는 먼지 입자에 의해 산란된 IR LED 광을 감지합니다.</p>
                                            <p class="info-txt">IR Dust Sensor는 담배연기, 미세먼지 등의 미세 입자를 감지하여 <br />신호 출력 펄스 패턴에 따라 입자의 크기(PM2.5/PM10)도 구분할 수 있습니다.</p>
                                            <p class="info-txt">본 센서는 PWM, UART 프로토콜 인터페이스를 제공합니다.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="sensor-con-02-tab">
                                    <section class="cm-tab-container-JS">
                                        <aside class="sensor-tab-wrapper-style">
                                            <div class="sensor-tab-list-style cm-tab-list-JS">
                                                <ul class="clearfix">
                                                    <li class="first-tab selected"><a href="#tabCon01"><em>Laser Particle Sensor</em></a></li>
                                                    <li class="second-tab"><a href="#tabCon02"><em>IR Dust Sensor</em></a></li>
                                                </ul>
                                            </div>
                                        </aside>
                                        <article class="sub-tab-content-style cm-tab-content-wrapper-JS">
                                            <div class="sub-tab-con" id="tabCon01">
                                                <div class="sensor-tab-inner">
                                                    <div class="item-list">
                                                        <div class="list-item">
                                                            <div class="sensor-circle-item"><img src="../../images/content/sensor_dust_con02_tab01_01.png" alt="SM-LS-01C"></div>
                                                            <strong class="tit">SM-LS-01C</strong>
                                                        </div>
                                                        <div class="list-item">
                                                            <div class="sensor-circle-item"><img src="../../images/content/sensor_dust_con02_tab01_02.png" alt="SM-LS-03A"></div>
                                                            <strong class="tit">SM-LS-03A</strong>
                                                        </div>
                                                        <div class="list-item">
                                                            <div class="sensor-circle-item"><img src="../../images/content/sensor_dust_con02_tab01_03.png" alt="SM-LS-05B"></div>
                                                            <strong class="tit">SM-LS-05B</strong>
                                                        </div>
                                                        <div class="list-item">
                                                            <div class="sensor-circle-item"><img src="../../images/content/sensor_dust_con02_tab01_04.png" alt="NLS006"></div>
                                                            <strong class="tit">NLS006</strong>
                                                        </div>
                                                    </div>

                                                    <div class="item-table">
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
                                                                <table class="sensor-table scroll-object">
                                                                    <!-- .scroll-object -->
                                                                    <caption>Laser Particle Sensor</caption>
                                                                    <colgroup>
                                                                        <col width="10%">
                                                                        <col width="15.8%">
                                                                        <col width="13%">
                                                                        <col width="14%">
                                                                        <col width="14.6%">
                                                                        <col width="16.6%">
                                                                        <col width="16%">
                                                                    </colgroup>
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Model</th>
                                                                            <th>Size [mm] / Weight [g]</th>
                                                                            <th>Supply Voltage</th>
                                                                            <th>Output interface</th>
                                                                            <th>Detection range</th>
                                                                            <th>Output deviation</th>
                                                                            <th>Characteristics</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>SM-LS-01C</td>
                                                                            <td>49x35x12 / 24</td>
                                                                            <td>+5V input</td>
                                                                            <td>UART 3.3V TTL</td>
                                                                            <td>0~1,000 µg/m<sup>2</sup></td>
                                                                            <td>±10 µg/m<sup>2</sup> @<100 µg/m<sup>2</sup> <br />±10% @≥ 100 µg/m<sup>2</sup></td>
                                                                            <td>PM 1.0/2.5/10 <br />Long lifetime</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>SM-LS-03A</td>
                                                                            <td>49x35x12 / 24</td>
                                                                            <td>+5V input</td>
                                                                            <td>UART 3.3V TTL</td>
                                                                            <td>0~1,000 µg/m<sup>2</sup></td>
                                                                            <td>±10 µg/m<sup>2</sup> @<100 µg/m<sup>2</sup> <br />±10% @≥ 100 µg/m<sup>2</sup></td>
                                                                            <td>PM 1.0/2.5/10 <br />Screw hole</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>SM-LS-05B</td>
                                                                            <td>35x31x12 / 20</td>
                                                                            <td>+5V input</td>
                                                                            <td>UART 3.3V TTL I2C</td>
                                                                            <td>0~1,000 µg/m<sup>2</sup></td>
                                                                            <td>±10 µg/m<sup>2</sup> @<100 µg/m<sup>2</sup> <br />±10% @≥ 100 µg/m<sup>2</sup></td>
                                                                            <td>PM 1.0/2.5/10 <br />Compact size</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>NLS006</td>
                                                                            <td>82.5x40x24 / 38</td>
                                                                            <td>+12V input</td>
                                                                            <td>LIN</td>
                                                                            <td>0~500 µg/m<sup>2</sup></td>
                                                                            <td>±10 µg/m<sup>2</sup> @<100 µg/m<sup>2</sup> <br />±10% @≥ 100 µg/m<sup>2</sup></td>
                                                                            <td>For automotive <br />Released in 2022</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>NLS007</td>
                                                                            <td>110x45x40 / 50</td>
                                                                            <td>110x45x40 / 50</td>
                                                                            <td>110x45x40 / 50</td>
                                                                            <td>0~500 µg/m<sup>2</sup> <br />400~5,000 ppm (CO<sub>2</sub>)</td>
                                                                            <td>±10 µg/m<sup>2</sup> @<100 µg/m<sup>2</sup> <br />±10% @≥ 100 µg/m<sup>2</sup> <br />±5% ±550 ppm (CO<sub>2</sub>)</td>
                                                                            <td>For automotive <br />Multi sensor module <br />(Particle+CO<sub>2</sub>) <br />Released in 2022</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sub-tab-con" id="tabCon02">
                                                <div class="sensor-tab-inner">
                                                    <div class="item-list">
                                                        <div class="list-item">
                                                            <div class="sensor-circle-item"><img src="../../images/content/sensor_dust_con02_tab02_01.png" alt="SM-PWM-01A"></div>
                                                            <strong class="tit">SM-PWM-01A</strong>
                                                        </div>
                                                        <div class="list-item">
                                                            <div class="sensor-circle-item"><img src="../../images/content/sensor_dust_con02_tab02_02.png" alt="SM-PWM-03A"></div>
                                                            <strong class="tit">SM-PWM-03A</strong>
                                                        </div>
                                                        <div class="list-item">
                                                            <div class="sensor-circle-item"><img src="../../images/content/sensor_dust_con02_tab02_03.png" alt="SM-PWM-03A-G"></div>
                                                            <strong class="tit">SM-PWM-03A-G</strong>
                                                        </div>
                                                        <div class="list-item">
                                                            <div class="sensor-circle-item"><img src="../../images/content/sensor_dust_con02_tab02_04.png" alt="SM-ND-10A"></div>
                                                            <strong class="tit">SM-ND-10A</strong>
                                                        </div>
                                                    </div>

                                                    <div class="item-table">
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
                                                                <table class="sensor-table scroll-object">
                                                                    <!-- .scroll-object -->
                                                                    <caption>Laser Particle Sensor</caption>
                                                                    <colgroup>
                                                                        <col width="10%">
                                                                        <col width="15.8%">
                                                                        <col width="13%">
                                                                        <col width="14%">
                                                                        <col width="14.6%">
                                                                        <col width="16.6%">
                                                                        <col width="16%">
                                                                    </colgroup>
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Model</th>
                                                                            <th>Size [mm] / Weight [g]</th>
                                                                            <th>Supply Voltage</th>
                                                                            <th>Output interface</th>
                                                                            <th>Detection range</th>
                                                                            <th>Output deviation</th>
                                                                            <th>Characteristics</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>SM-PWM-01A</td>
                                                                            <td>59x46x18 / 23</td>
                                                                            <td>+5V input</td>
                                                                            <td>PWM<br />UART 5V TTL</td>
                                                                            <td>0~800,000 pcs/ft<sup>3</sup> <br />0~300 µg/m<sup>3</sup></td>
                                                                            <td>±30%</td>
                                                                            <td>Moving average <br />Self diagnosis function <br />Heart beat output for monitoring</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>SM-PWM-03A</td>
                                                                            <td>59x45x18 / 23</td>
                                                                            <td>+5V input</td>
                                                                            <td>PWM<br />UART 5V TTL</td>
                                                                            <td>0~800,000 pcs/ft<sup>3</sup> <br />0~300 µg/m<sup>3</sup></td>
                                                                            <td>±15%</td>
                                                                            <td>High accuracy</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>SM-PWM-03A-G</td>
                                                                            <td>59x45x18 / 25</td>
                                                                            <td>+5V input</td>
                                                                            <td>PWM<br />UART 5V TTL <br />Analog Voltage (TVOC)</td>
                                                                            <td>0~800,000 pcs/ft<sup>3</sup> <br />0~300 µg/m<sup>3</sup></td>
                                                                            <td>±15%</td>
                                                                            <td>Multi sensor module (Dust+TVOC)</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>SM-ND-10A</td>
                                                                            <td>59x45x18 / 23</td>
                                                                            <td>+5V input</td>
                                                                            <td>PWM<br />UART 5V TTL</td>
                                                                            <td>0~800,000 pcs/ft<sup>3</sup> <br />0~300 µg/m<sup>3</sup></td>
                                                                            <td>±15%</td>
                                                                            <td>Superior noise Tolerance <br />Auto gain system <br />LED control</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </section>
                                </div>
                            </div>
                        </article>

                        <article class="sensor-con-03" data-scroll="fade-up">
                            <div class="area">
                                <div class="tit-box">
                                    <h4 class="tit">Dust Sensor Application</h4>
                                    <p class="txt">
                                        엔아이디에스 먼지 센서는 다양한 시장 및 다양한 응용 분야에서 채용되어 그 효과를 입증해 오고 있습니다. <br />
                                        국내 뿐 아니라 전 세계로 기술력을 인정 받아, 우리는 20년 이상의 기술 경험과 지속적인 혁신 추구에 대한 우리의 헌신 덕분에 먼지센서 시장의 리더가 되었습니다.
                                    </p>
                                </div>
                                <div class="check-txt-box">
                                    <p class="check-txt"><b>20년</b> 이상의 독보적인 센서 기술 노하우 보유</p>
                                    <p class="check-txt">매 년 전세계적으로 <b>수백만 대의</b> 이상 먼지센서 수출</p>
                                </div>
                            </div>
                        </article>

                        <article class="sensor-con-04">
                            <div class="area">
                                <div class="tit-box" data-scroll="fade-up">
                                    <strong class="sub-tit">귀하제품에 적합한 환경센서를 찾고 계십니까?</strong>
                                    <h4 class="sensor-tit"><span>엔아이디에스는 다양한 고품질 센서 범주와 독자적 기술력으로</span> <br class="pc-br" />사용자의 필요에 가장 적합한 센서를 제공합니다.</h4>
                                </div>

                                <div class="sensor-con-04-list">
                                    <div class="list-item left-item" data-scroll="fade-up">
                                        <div class="img-box">
                                            <span><img src="../../images/content/sensor_dust_con04_img01.jpg" alt=""></span>
                                        </div>
                                        <div class="txt-box">
                                            <strong class="sub-tit">Appliances</strong>
                                            <h4 class="tit">건강지킴이 엔아이디에스 환경센서</h4>
                                            <p class="txt">
                                                *엔아이디에스 스마트 센서 솔루션은 가전제품의 전기를 절약 사용하고 <br class="pc-br" />
                                                응용 프로그램을 보다 에너지 효율적으로 만들 수 있도록 지원합니다. <br />
                                                또한, 환경 모니터링 분야에서 스마트한 작동을 보장하고 혁신적인 센서 기술로 <br class="pc-br" />
                                                새로운 기능의 가능성을 제고합니다.
                                            </p>
                                            <div class="btn-box">
                                                <a href="#" class="btn-style01">Air Purifiers</a>
                                                <a href="#" class="btn-style02">Air Conditioner</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-item right-item" data-scroll="fade-up">
                                        <div class="img-box">
                                            <span><img src="../../images/content/sensor_dust_con04_img02_01.jpg" alt=""></span>
                                        </div>
                                        <div class="txt-box">
                                            <strong class="sub-tit">HVAC</strong>
                                            <h4 class="tit">건물 최적의 에너지 효율 제고</h4>
                                            <p class="txt">
                                                전 세계 에너지 소비의 40%를 차지하는 빌딩은 인간이 약 90%의 이상의 <br class="pc-br" />
                                                시간을 보내는 공간입니다. 엔아이디에스는 주택, 산업 시설 및 전체 건물 단지에서 <br class="pc-br" />
                                                에너지의 효율적 운영과 동시에 건강한 실내 기후를 위한 편안함을 증대 시키는 <br class="pc-br" />
                                                스마트 센서 솔루션을 제공합니다.
                                            </p>
                                            <div class="btn-box">
                                                <a href="#" class="btn-style01">Room Sensor</a>
                                                <a href="#" class="btn-style02">Filter Monitoring</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-item left-item" data-scroll="fade-up">
                                        <div class="img-box">
                                            <span><img src="../../images/content/sensor_dust_con04_img03.jpg" alt=""></span>
                                        </div>
                                        <div class="txt-box">
                                            <strong class="sub-tit">Vehicle</strong>
                                            <h4 class="tit">차량내 인체의 편암함 & 안전 <br />에너지 소비측면의 새로운 표준 설정</h4>
                                            <p class="txt">
                                                자동차 산업의 엄격한 배기 가스 배출 기준을 충족하기 위해, <br class="pc-br" />
                                                엔아이디에스는 안전 및 에너지 소비측면에서 자동차 제조업체가 차량의 <br class="pc-br" />
                                                에너지 소비를 효율적으로 줄일 수 있도록 지원합니다.
                                            </p>
                                            <div class="btn-box">
                                                <a href="#" class="btn-style01">Air Intake</a>
                                                <a href="#" class="btn-style02">Leakage detection & Optimized fuel</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="sensor-con-05">
                            <div class="area">
                                <div class="tit-box" data-scroll="fade-up">
                                    <h4 class="sensor-tit">엔아이디에스 환경센서 장점</h4>
                                    <p class="txt">환경 감지 분야에서 엔아이디에스의 환경센서는 독보적인 전문 지식과 기술을 겸비한 기계적 및 전기적 통합 센서 모듈입니다.</p>
                                </div>

                                <div class="sensor-con-05-list" data-scroll="fade-up">
                                    <div class="list-item">
                                        <div class="icon"><img src="../../images/content/sensor_con05_icon01.png" alt=""></div>
                                        <dl class="txt-box">
                                            <dt>Increased energy efficiency</dt>
                                            <dd>
                                                오염정도에 따른 자동 온오프 <br class="pc-br" />
                                                작동을 가능하게 함에 따라 <br class="pc-br" />
                                                전력 소비를 최소화할 수 있습니다.
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="list-item">
                                        <div class="icon"><img src="../../images/content/sensor_con05_icon02.png" alt=""></div>
                                        <dl class="txt-box">
                                            <dt>Autonomous device control</dt>
                                            <dd>
                                                신뢰성 있는 측정기술로 공기청정기 <br class="pc-br" />
                                                자동운전이 가능하도록 통제하며, <br class="pc-br" />
                                                대기오염 정도에 스마트하게 파악하며, <br class="pc-br" />
                                                공기 유량을 높여 필터를 거쳐 <br class="pc-br" />
                                                깨끗한 공기를 제공할 수 있게 합니다.
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="list-item">
                                        <div class="icon"><img src="../../images/content/sensor_con05_icon03.png" alt=""></div>
                                        <dl class="txt-box">
                                            <dt>Ensuring optimal <br>indoor air quality</dt>
                                            <dd>
                                                공기 오염정도가 나쁠 경우 <br class="pc-br" />
                                                경보가 자동 울리기 위해, <br class="pc-br" />
                                                엔아이디에스 환경센서는 공기질과 <br class="pc-br" />
                                                사용중인 필터의 상태를 모니터링 합니다.
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="list-item">
                                        <div class="icon"><img src="../../images/content/sensor_con05_icon04.png" alt=""></div>
                                        <dl class="txt-box">
                                            <dt>Reduction of <br />dust and pollen pollution</dt>
                                            <dd>
                                                환경 센서 시스템은 심한 먼지와 꽃가루 <br class="pc-br" />
                                                부하를 감지하여 사용중인공기청정기의 <br class="pc-br" />
                                                공기 유량을 증가시킴으로 필터를 통해 <br class="pc-br" />
                                                대기오염을 실시간으로 줄일 수 있다.
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="sensor-con-06">
                            <div class="area">
                                <div class="tit-box" data-scroll="fade-up">
                                    <h4 class="tit">Related Sensors</h4>
                                    <p class="txt">IR Dust Sensor & Laser Particle Sensor </p>
                                </div>
                            </div>

                            <div class="area-box">
                                <div class="sensor-con-06-box" data-scroll="fade-up">
                                    <div class="area">
                                        <div class="sensor-con-06-top">
                                            <div class="img-box"><img src="../../images/content/sensor_dust_con06_img01.png" alt="SM-LS-01A"></div>
                                            <div class="txt-box">
                                                <h4 class="tit">SM-LS-01A</h4>
                                                <strong class="sub-tit">High accuracy laser particle particle sensor</strong>
                                                <div class="check-txt-box">
                                                    <p class="check-txt">독보적인 특허 기술을 농축한 알고리즘 탑재</p>
                                                    <p class="check-txt">세련된 디자인과 빠른 동작을 겸비한 센서</p>
                                                    <p class="check-txt">내구성과 신뢰성 증대</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sensor-con-06-bottom">
                                            <div class="list-item">
                                                <h5 class="item-tit">SM-PWM-01A</h5>
                                                <div class="item-img"><span><img src="../../images/content/sensor_dust_con06_img02.png" alt="SM-PWM-01A"></span></div>
                                            </div>
                                            <div class="list-item">
                                                <h5 class="item-tit">SN-LS-05A</h5>
                                                <div class="item-img"><span><img src="../../images/content/sensor_dust_con06_img03.png" alt="SN-LS-05A"></span></div>
                                            </div>
                                            <div class="list-item">
                                                <h5 class="item-tit">SM-LS-05B</h5>
                                                <div class="item-img"><span><img src="../../images/content/sensor_dust_con06_img04.png" alt="SM-LS-05B"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="sensor-con-07">
                            <div class="area">
                                <div class="tit-box" data-scroll="fade-up">
                                    <h4 class="tit">Trend Topic</h4>
                                </div>
                            </div>

                            <div class="sensor-con-07-list" data-scroll="fade-up">
                                <div class="list-item">
                                    <strong class="sub-tit">Topic 1</strong>
                                    <h4 class="tit">Dangers in indoor air</h4>
                                    <a href="#" class="btn"><span>Read more</span> <i class="xi-angle-right-min"></i></a>
                                </div>
                                <div class="list-item">
                                    <strong class="sub-tit">Topic 2</strong>
                                    <h4 class="tit">Improving indoor air quality</h4>
                                    <a href="#" class="btn"><span>Read more</span> <i class="xi-angle-right-min"></i></a>
                                </div>
                            </div>
                        </article>
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

    <script>
        $(document).ready(function() {
            if ($.exists("#sensorTabCon")) {

                $(window).on('load', function() {
                    sensorTabHeight();
                });
                $(window).on('resize', function() {
                    sensorTabHeight();
                });

                function sensorTabHeight() {
                    $('.sensor-con-02-tab').offset().top
                }

                $('.tab-open-btn').click(function() {
                    if ($(this).hasClass('second-btn')) {
                        $('.sensor-tab-list-style ul li').removeClass('selected')
                        $('.second-tab').addClass('selected')
                        $('.cm-tab-content-wrapper-JS').children().hide();
                        $('#tabCon02').fadeIn();
                    } else {
                        $('.sensor-tab-list-style ul li').removeClass('selected')
                        $('.first-tab').addClass('selected')
                        $('.cm-tab-content-wrapper-JS').children().hide();
                        $('#tabCon01').fadeIn();
                    }

                    if ($('.sensor-con-02-tab').css('display') == "none") {
                        $('.sensor-con-02-tab').slideToggle();
                    }
                    setTimeout(function() {
                        moveScrollTop($('.sensor-con-02-tab').offset().top - 100);
                    });
                })
            }
        })
    </script>
</body>

</html>