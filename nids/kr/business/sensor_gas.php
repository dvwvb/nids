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
        dep3 = 02;
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
                                <span>가스센서</span>
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

                    <section class="sub-page business-page sensor-gas-page">
                        <h3 class="cm-page-tit" data-scroll="fade-up">가스센서</h3>
                        <article class="sensor-top-con">
                            <div class="sensor-top-bg" data-scroll="fade-up"></div>
                            <div class="area-wide">
                                <div class="sensor-top-list" data-scroll="fade-up">
                                    <div class="list-item">
                                        <div class="icon-box">
                                            <span><img src="../../images/content/sensor_gas_top_icon01.png" alt=""></span>
                                            <strong class="tit">특징</strong>
                                        </div>
                                        <div class="txt-box">
                                            <p class="txt">
                                                실내외 처리 장치 및 공기 품질 모니터에
                                                통합되도록 설계된 디지털 TVOC 센서와 CO<sub>2</sub>
                                                센서는 사용자의 요구 사항에 대한 완벽한
                                                솔루션을 제공합니다.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="list-item">
                                        <div class="icon-box">
                                            <span><img src="../../images/content/sensor_gas_top_icon02.png" alt=""></span>
                                            <strong class="tit">장점</strong>
                                        </div>
                                        <div class="txt-box">
                                            <p class="txt">
                                                엔아이디에스의 고유 독창적인 기술력으로
                                                TVOC 센서와 CO<sub>2</sub> 센서의 광범위한 농도영역 및
                                                응용분야에서 활용되고 있습니다. 특히, 성능과
                                                신뢰성을 바탕으로 신속 정확한 측정을
                                                가능하게 합니다.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="list-item">
                                        <div class="icon-box">
                                            <span><img src="../../images/content/sensor_gas_top_icon03.png" alt=""></span>
                                            <strong class="tit">기술</strong>
                                        </div>
                                        <div class="txt-box">
                                            <p class="txt">
                                                엔아이디에스 가스측정기술은 나노 기술 금속
                                                산화물 센서 재료와 다중 가스 측정 플랫폼을 결합
                                                기능을 포함합니다. 높은 농도의 열전도율 기술과
                                                센서 특화된 소형화 작업은 센서채용기기를
                                                더욱 돋보이게 해줍니다.
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
                                            <span class="img-box"><img src="../../images/content/sensor_gas_con02_img01.png" alt="Gas Sensor"></span>
                                            <div class="tit-box">
                                                <h5 class="tit">Gas Sensor</h5>
                                                <a href="javascript:;" class="tab-open-btn">제품규격 <i class="xi-angle-right-thin"></i></a>
                                            </div>
                                        </div>
                                        <div class="info-box">
                                            <p class="info-txt">
                                                가스 센서는 일상 생활 속 냄새가스와 유해가스를 감지합니다. <br>
                                                <strong class="info-plus-txt"><i class="xi-info"></i> 감지 가스 : CO₂, TVOC, HCHO, Toluene, Acetone, H₂S 등</strong>
                                            </p>
                                            <p class="info-txt">공기청정기를 포함한 국내외 각종 에어가전에 적용 가능합니다.</p>
                                        </div>
                                    </div>
                                    <div class="list-item">
                                        <div class="item-box">
                                            <span class="img-box"><img src="../../images/content/sensor_gas_con02_img02.png" alt="Multi Sensor Module"></span>
                                            <div class="tit-box">
                                                <h5 class="tit">Multi Sensor Module</h5>
                                                <a href="javascript:;" class="tab-open-btn second-btn">제품규격 <i class="xi-angle-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="info-box">
                                            <p class="info-txt">
                                                Multi Sensor Module은 IoT 어플리케이션에 최적화된 저전력, <br class="pc-br" />소형의 가스/온습도 센서 모듈입니다. <br>
                                                <strong class="info-plus-txt"><i class="xi-info"></i> 감지 대상 : VOC 가스, 온도, 습도</strong>
                                            </p>
                                            <p class="info-txt">에어가전, 실내 공기질 모니터(AQM), IoT Solution 등에 적용 가능합니다.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="sensor-con-02-tab">
                                    <section class="cm-tab-container-JS">
                                        <aside class="sensor-tab-wrapper-style">
                                            <div class="sensor-tab-list-style cm-tab-list-JS">
                                                <ul class="clearfix">
                                                    <li class="first-tab selected"><a href="#tabCon01"><em>Gas Sensor</em></a></li>
                                                    <li class="second-tab"><a href="#tabCon02"><em>Multi Sensor Module</em></a></li>
                                                </ul>
                                            </div>
                                        </aside>
                                        <article class="sub-tab-content-style cm-tab-content-wrapper-JS">
                                            <div class="sub-tab-con" id="tabCon01">
                                                <div class="sensor-tab-inner">
                                                    <div class="item-list gas-item-list">
                                                        <div class="list-item">
                                                            <div class="sensor-circle-item"><img src="../../images/content/sensor_gas_con02_tab01_01.png" alt="NOG001"></div>
                                                            <strong class="tit">NOG001</strong>
                                                        </div>
                                                        <div class="list-item">
                                                            <div class="sensor-circle-item"><img src="../../images/content/sensor_gas_con02_tab01_02.png" alt="NOG002"></div>
                                                            <strong class="tit">NOG002</strong>
                                                        </div>
                                                        <div class="list-item">
                                                            <div class="sensor-circle-item inner-txt">
                                                                <p class="inner-txt-box">High accuracy <br /><b>NDIR CO<sub>2</sub> Sensor</b></p>
                                                            </div>
                                                        </div>
                                                        <div class="list-item">
                                                            <div class="sensor-circle-item"><img src="../../images/content/sensor_gas_con02_tab01_03.png" alt="NSG002"></div>
                                                            <strong class="tit">NSG002</strong>
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
                                                                            <th>Size [mm]</th>
                                                                            <th>Supply Voltage</th>
                                                                            <th>Output interface</th>
                                                                            <th>Detection range</th>
                                                                            <th>Output deviation</th>
                                                                            <th>Characteristics</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>NOG001</td>
                                                                            <td>33x20x17.6</td>
                                                                            <td>+5V input</td>
                                                                            <td>UART</td>
                                                                            <td>400~5,000 ppm (CO<sub>2</sub>)</td>
                                                                            <td>±5% ±50 ppm</td>
                                                                            <td>High Sensitvity <br />Single type</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>NOG002</td>
                                                                            <td>33x20.5x18</td>
                                                                            <td>+5V input</td>
                                                                            <td>UART</td>
                                                                            <td>400~5,000 ppm (CO<sub>2</sub>)</td>
                                                                            <td>±5% ±50 ppm</td>
                                                                            <td>High Sensitvity <br />Single type</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>NOG101</td>
                                                                            <td>79.3x42.8x25.2</td>
                                                                            <td>+12V input</td>
                                                                            <td>LIN</td>
                                                                            <td>400~5,000 ppm (CO<sub>2</sub>)</td>
                                                                            <td>±5% ±50 ppm</td>
                                                                            <td>For automotive Single type <br />Released in 2022</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>NOG011</td>
                                                                            <td>33x20.5x18</td>
                                                                            <td>+15V input</td>
                                                                            <td>UART</td>
                                                                            <td>0~100 %LEL (CH<sub>2</sub>)</td>
                                                                            <td>+3%</td>
                                                                            <td>NDIR CH<sub>4</sub>sensor Dual type <br />Released in 2022</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>NSG002</td>
                                                                            <td>Φ9.4x17.6</td>
                                                                            <td>+5V input</td>
                                                                            <td>Analong Voltage</td>
                                                                            <td>Various gases</td>
                                                                            <td>+10% (Rs/R0)</td>
                                                                            <td>High Sensitivity <br />MOS sensor <br />Low Price</td>
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
                                                    <div class="item-list list-02">
                                                        <div class="list-item">
                                                            <div class="sensor-circle-item"><img src="../../images/content/sensor_gas_con02_tab02_01.png" alt="NMG002"></div>
                                                            <strong class="tit">NMG002</strong>
                                                        </div>
                                                        <div class="list-item">
                                                            <div class="sensor-circle-item"><img src="../../images/content/sensor_gas_con02_tab02_02.png" alt="MGS-104B"></div>
                                                            <strong class="tit">MGS-104B</strong>
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
                                                                            <th>Size [mm]</th>
                                                                            <th>Supply Voltage</th>
                                                                            <th>Output interface</th>
                                                                            <th>Detection range</th>
                                                                            <th>Output deviation</th>
                                                                            <th>Characteristics</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>NOG001</td>
                                                                            <td>22x37x9.7</td>
                                                                            <td rowspan="2" class="border-bottom">+5V input</td>
                                                                            <td rowspan="2" class="border-bottom">1<sup>2</sup>C</td>
                                                                            <td rowspan="2" class="border-bottom">0~500 Index (IAQ) <br />0~65℃ (Temperature) <br />20~80%RH (Humidity)</td>
                                                                            <td rowspan="2" class="border-bottom">±15% ±15 (IAQ) <br />±1℃ (Temperature) <br />±5%RH (Humidity)</td>
                                                                            <td rowspan="2" class="border-bottom">High performance MEMS sensor <br />High Sensitivity <br />Compensation algorithm <br />Low-consumption</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>MGS-104B</td>
                                                                            <td class="border-right">22x37x9.7</td>
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
                                    <h4 class="tit">Gas Sensor Application</h4>
                                    <p class="txt">
                                        엔아이디에스 가스센서는 다가올 미래 에너지(천연가스, 수소, 바이오메탄 및 혼합)를 위한 혁신적인 센서 솔루션 제공을 <br />
                                        위한 핵심 부품으로 가스 미터, 가스 분석기, 연소 프로세스, 연료 전지 등에 채용될 것입니다.
                                    </p>
                                    <p class="txt">
                                        수년 동안 입증되어온 엔아이디에스 가스계량 기술은 수소, 바이오메탄 등 재생 가능한 가스를 측정하는데 주된 과제라고 볼 수 있는 정확성, 안전성,
                                        신뢰성 확보를 위해 철저히 준비되었습니다. 가스센서의 채용은 소형화 작업과 더불어 입증된 표준 준수로 신뢰성 있는 멑티 가스 모듈을 제공합니다.
                                    </p>
                                </div>
                                <div class="check-txt-box">
                                    <p class="check-txt"><b>20년</b> 이상의 독보적인 센서 기술 노하우 보유</p>
                                    <p class="check-txt">NDIR & Mos & MEMS 측정원리를 기반으로 <b>가스센서 기술을 소형화</b> 할 수 있었습니다.</p>
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
                                            <span><img src="../../images/content/sensor_dust_con04_img02.jpg" alt=""></span>
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
                                    <div class="list-item right-item" data-scroll="fade-up">
                                        <div class="img-box">
                                            <span><img src="../../images/content/sensor_gas_con04_img04.jpg" alt=""></span>
                                        </div>
                                        <div class="txt-box">
                                            <strong class="sub-tit">Semiconductor</strong>
                                            <h4 class="tit">반도체 산업 제조공정 <br />정밀 & 신속한 높은품질 고속화 작업 요구</h4>
                                            <p class="txt">
                                                반도체 산업은 진공 증착과 DRIE(Deep reactive ion etching)와 같은
                                                정밀하고 빠른 작업과 요구된다. 엔아이디에스의 가스센서 솔루션은 현대 반도체
                                                산업에서 정확하고 신뢰할 수 있는 제조 공정작업을 가능하게 합니다.
                                            </p>
                                            <div class="btn-box">
                                                <a href="#" class="btn-style01">Photoresist Dosing</a>
                                                <a href="#" class="btn-style02">반도체 정밀도공정</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-item left-item" data-scroll="fade-up">
                                        <div class="img-box">
                                            <span><img src="../../images/content/sensor_gas_con04_img05.jpg" alt=""></span>
                                        </div>
                                        <div class="txt-box">
                                            <strong class="sub-tit">악취 모니터링</strong>
                                            <h4 class="tit">돈사 & 하수처리장 인근 악취문제 개선 <br />정밀한 가스센서계측 기술</h4>
                                            <p class="txt">
                                                돈사내 발생하는 악취문제는 인근 거주민들의 컴플레인 & 사회 분쟁 이슈이다.
                                                특히, 작업자와 가축의 건강과 직접적 연관되어 생산성 즉, 경제성에 영향을 미친다.
                                                이에, 엔아이디에스의 가스센서는 각종 악취가스의 흐름을 측정, 더 나아가 내구성
                                                높은 소재 적용으로 시스템 오류를 사전 방지하고 정확한 데이터 값을 제공합니다.
                                            </p>
                                            <div class="btn-box">
                                                <a href="#" class="btn-style01">돼지 돈사</a>
                                                <a href="#" class="btn-style02">하수처리장</a>
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
                                    <h4 class="tit">NDIR CO<sub>2</sub> Sensor</h4>
                                    <p class="txt">High Accuracy NDIR CO<sub>2</sub> Sensor</p>
                                </div>
                            </div>

                            <div class="area-box">
                                <div class="sensor-con-06-box" data-scroll="fade-up">
                                    <div class="area">
                                        <div class="sensor-con-06-top">
                                            <div class="img-box"><img src="../../images/content/sensor_gas_con06_img01.png" alt="SM-LS-01A"></div>
                                            <div class="txt-box">
                                                <h4 class="tit">SM-LS-01A</h4>
                                                <strong class="sub-tit">High accuracy laser particle particle sensor</strong>
                                                <div class="check-txt-box">
                                                    <p class="check-txt">독보적인 특허 기술을 농축한 알고리즘 탑재</p>
                                                    <p class="check-txt">휴대장치 및 귀하제품과 손쉬운 채용</p>
                                                    <p class="check-txt">높은 습도에서 작동가능한 내구성 겸비</p>
                                                    <p class="check-txt">신뢰성 높은 데이터 값 제공</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sensor-con-06-bottom">
                                            <div class="list-item">
                                                <h5 class="item-tit">NMG002</h5>
                                                <div class="item-img"><span><img src="../../images/content/sensor_gas_con06_img02.png" alt="NMG002"></span></div>
                                            </div>
                                            <div class="list-item">
                                                <h5 class="item-tit">MGS-104B</h5>
                                                <div class="item-img"><span><img src="../../images/content/sensor_gas_con06_img03.png" alt="MGS-104B"></span></div>
                                            </div>
                                            <div class="list-item">
                                                <h5 class="item-tit">NSG002</h5>
                                                <div class="item-img"><span><img src="../../images/content/sensor_gas_con06_img04.png" alt="NSG002"></span></div>
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