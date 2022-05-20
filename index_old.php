<?php
    $root_server = $_SERVER["DOCUMENT_ROOT"];
    include (''.$root_server.'/include/header.php');
?> 
    <section class="promo">
        <div class="wrap">
            <div class="promo-container df-column">
                <div class="promo-info df-column wow fadeInRight" data-wow-duration="1.5s">
                    <h1 class="fsz36 white2">ПрофПолимерМеталл</h1>
                    <p class="fsz18 white2">Металлоконструкции различного назначения в Тюмени</p>
                    <a class="promo-info__btn fsz16 hex bg-white" onclick="price();">Узнать стоимость изделия</a>
                </div>      
                <?php
                include (''.$root_server.'/include/promo.php');
                ?> 
            </div>
        </div>
    </section>
    <div class="promo-block-mob"></div>

    <section class="direction">
        <div class="wrap">
            <div class="direction-container">
                <h2 class="fsz36 black">Направления, с которыми мы работаем</h2>
                <div class="direction-content">
                    <div class="direction-slick slick-slider">
                        <div class="direction-item">
                            <a href="/pages/polymer-powder/" class="direction-item__link">
                                <img class="direction-item__img" src="/css/img/direction-2.jpg" alt="картинка">
                            </a>
                            <h6 class="direction-item__heading white fsz24">Полимерные <br>покрытия
                            </h6>
                            <img class="direction-item__icon" src="/css/img/svg/plus-white.svg" alt="плюс">
                        </div>
                        <div class="direction-item">
                            <a href="#" class="direction-item__link">
                                <img class="direction-item__img" src="/css/img/direction-1.jpg" alt="картинка">
                            </a>
                            <h6 class="direction-item__heading white fsz24 df-column">МЕТАЛЛОИЗДЕЛИЯ</h6>
                            <p class="span-direction-elem df-column white fsz16">
                                    <a href="/pages/metall-fences/">Ограждения</a>
                                    <a href="/pages/tbo/">Площадки ТБО</a>
                                    <a href="/pages/product/">Скамьи</a>
                                    <a href="/pages/urn/">Урны</a>
                                    <a href="/pages/bicycle/">Велопарковки</a>
                                </p>
                            <img class="direction-item__icon" src="/css/img/svg/plus-white.svg" alt="плюс">
                        </div>
                        <div class="direction-item">
                            <a href="/pages/metall-build/цу" class="direction-item__link">
                                <img class="direction-item__img" src="/css/img/direction-3.jpg" alt="картинка">
                            </a>
                            <h6 class="direction-item__heading direction-item__heading_long white fsz24">Металлоконструкции <br>зданий и сооружений</h6>
                            <img class="direction-item__icon" src="/css/img/svg/plus-white.svg" alt="плюс">
                        </div>
                        <div class="direction-item">
                            <a href="#" class="direction-item__link">
                                <img class="direction-item__img" src="/css/img/direction-3.jpg" alt="картинка">
                            </a>
                            <h6 class="direction-item__heading white fsz24">Металлоконструкции <br>зданий и сооружений</h6>
                            <img class="direction-item__icon" src="/css/img/svg/plus-white.svg" alt="плюс">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
        include (''.$root_server.'/include/step.php');
    ?> 
    <?php
        include (''.$root_server.'/include/about.php');
    ?> 
    <section class="friends bg-pink">
        <div class="wrap">
            <div class="friends-container df-column">
                <h2 class="fsz36 black">Нам доверяют</h2>
                <div class="friebds-content">
                    <!-- Slider main container -->
                    <div class="swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                        <!-- Slides -->
                            <div class="swiper-slide" style="width: 372px;height: 190px;">
                                <img src="/css/img/part-1.png" alt="партнер">
                            </div>
                            <div class="swiper-slide" style="width: 372px;height: 190px;"> 
                               <img src="/css/img/part-2.png" alt="партнер">
                            </div>
                            <div class="swiper-slide" style="width: 372px;height: 190px;">
                              <img src="/css/img/part-3.png" alt="партнер">
                            </div>
                            <div class="swiper-slide" style="width: 372px;height: 190px;">
                              <img src="/css/img/part-4.png" alt="партнер">
                            </div>
                            <div class="swiper-slide" style="width: 372px;height: 190px;">
                              <img src="/css/img/part-5.png" alt="партнер">
                            </div>
                            <div class="swiper-slide" style="width: 372px;height: 190px;"> 
                              <img src="/css/img/part-6.png" alt="партнер">
                            </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev" style="    width: calc(var(--swiper-navigation-size)/ 44 * 40);"></div>
                        <div class="swiper-button-next" style="    width: calc(var(--swiper-navigation-size)/ 44 * 40);"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        include (''.$root_server.'/include/contacts.php');
    ?> 

<?php
    include (''.$root_server.'/include/plasts.php');
?>

<?php
    include (''.$root_server.'/include/footer.php');
?>