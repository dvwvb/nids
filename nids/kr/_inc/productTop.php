<script>
    document.cookie = "dep1 = " + dep1
</script>
<?php
$dep1 = $_COOKIE['dep1'];
if ($dep1 !== "2") {
?>
    <section id="productTop">
        <div class="area">
            <aside id="topMenu04" class="">
                <div class="side-menu-inner">
                    <div class="cm-top-menu clearfix">
                        <div class="menu-location location2 cm-drop-menu-box-JS" data-drop-event="click">
                            <button class="cur-location cm-drop-open-btn-JS">
                                <span>공기살균 & 탈취</span>
                                <i class="xi-caret-down-circle-o arrow"></i>
                            </button>
                            <ul class="location-menu-con cm-drop-list-JS">
                                <li>
                                    <a href="sensor_dust.php"><span>환경센서</span></a>
                                    <ul class="gnb-3dep">
                                        <li><a href="sensor_dust.php"><span>먼지센서</span></a></li>
                                        <li><a href="sensor_gas.php"><span>가스센서</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="plasma.php"><span>공기살균 & 탈취</span></a>
                                    <ul class="gnb-3dep">
                                        <li><a href="plasma.php"><span>플라즈마 모듈</span></a></li>
                                        <li><a href="photocatalytic.php"><span>광촉매 모듈</span></a></li>
                                        <li><a href="hepa.php"><span>향균헤파필터</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="iot.php"><span>IoT 시스템</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </aside>
            <aside id="topMenu02" class="">
                <div class="side-menu-inner">
                    <div class="prd-gnb-wrapper">
                        <ul class="swiper-wrapper sub-menu-business clearfix">

                            <li><a href="plasma.php"><span>플라즈마 모듈</span></a></li>
                            <li><a href="photocatalytic.php"><span>광촉매 모듈</span></a></li>
                            <li><a href="hepa.php"><span>향균헤파필터</span></a></li>
                        </ul>
                    </div>
                </div>
            </aside>
            <!-- // -->
            <div class="location">
                <ul>
                    <li><a href="../index.php" title="HOME"><i class="xi-home"></i></a></li>
                    <li>business</li>
                    <li>향균헤파필터</li>
                </ul>
            </div>
        </div>
    </section>
<?php } else { ?>
    <section id="productTop">
        <div class="area">
            <aside id="topMenu04" class="">
                <div class="side-menu-inner">
                    <div class="cm-top-menu clearfix">
                        <div class="menu-location location2 cm-drop-menu-box-JS" data-drop-event="click">
                            <button class="cur-location cm-drop-open-btn-JS">
                                <span>공기살균&탈취 기술</span>
                                <i class="xi-caret-down-circle-o arrow"></i>
                            </button>
                            <ul class="location-menu-con cm-drop-list-JS">
                                <li>
                                    <a href="sensor_dust.php"><span>센서기술</span></a>
                                    <ul class="gnb-3dep">
                                        <li><a href="sensor_dust.php"><span>먼지센싱기술</span></a></li>
                                        <li><a href="sensor_gas.php"><span>가스센싱기술</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="plasma.php"><span>공기살균 & 탈취 기술</span></a>
                                    <ul class="gnb-3dep">
                                        <li><a href="plasma.php"><span>플라즈마 기술</span></a></li>
                                        <li><a href="photocatalytic.php"><span>광촉매 기술</span></a></li>
                                        <li><a href="hepa.php"><span>향균헤파필터</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </aside>
            <aside id="topMenu02" class="">
                <div class="side-menu-inner">
                    <div class="prd-gnb-wrapper">
                        <ul class="swiper-wrapper sub-menu-technology clearfix">
                            <li class="swiper-slide gnb-name"><a href="plasma.php"><span>플라즈마 기술</span></a></li>
                            <li class="swiper-slide gnb-name"><a href="photocatalytic.php"><span>광촉매 기술</span></a></li>
                            <li class="swiper-slide gnb-name"><a href="hepa.php"><span>향균헤파</span></a></li>
                        </ul>
                    </div>
                </div>
            </aside>
            <div class="location">
                <ul>
                    <li><a href="../index.php" title="HOME"><i class="xi-home"></i></a></li>
                    <li>technology</li>
                    <li>플라즈마 기술</li>
                </ul>
            </div>
        </div>
    </section>
<?php } ?>