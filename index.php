<?php
include (''.$_SERVER["DOCUMENT_ROOT"].'/includes/header.php');
?>
    <section class="stock">
        <div class="container">
            <div class="stock__wrap">
                <div class="stock__content">
                    <p class="stock__text_red">Акция</p>
                    <h1 class="stock__title">Новый взгляд на ковры!</h1>
                    <p class="stock__text">
                        Современные ковры придадут завершенность интерьеру и уюта в ваш дом.
                    </p>
                    <div class="stock__btn" onclick="openModal('popup__callback')">Подобрать ковер</div>
                </div>
                <div class="stock__img_wrap" style="background:url(/css/img/stock__img.png) no-repeat left top / cover"></div>
            </div>
        </div>
    </section>
    <section class="catalog">
        <div class="container">
            <div class="catalog__wrap">
                <a href="/uploads/img/catalog/c1.png" data-fancybox data-width="1024" class="catalog__item">
                    <div class="catalog__item_img" style="background:url(/uploads/img/catalog/c1.png) no-repeat 50% 50% / cover"></div>
                    <p class="catalog__item_p">Каталог ковров</p>
                </a>
                <a href="/uploads/img/catalog/c2.png" data-fancybox data-width="1024" class="catalog__item">
                    <div class="catalog__item_img" style="background:url(/uploads/img/catalog/c2.png) no-repeat 50% 50% / cover"></div>
                    <p class="catalog__item_p">Большие и средние ковры</p>
                </a>
                <a href="/uploads/img/catalog/c3.png" data-fancybox data-width="1024" class="catalog__item">
                    <div class="catalog__item_img" style="background:url(/uploads/img/catalog/c3.png) no-repeat 50% 50% / cover"></div>
                    <p class="catalog__item_p">Маленькие коврики и дорожки</p>
                </a>
                <a href="/uploads/img/catalog/c4.png" data-fancybox data-width="1024" class="catalog__item">
                    <div class="catalog__item_img" style="background:url(/uploads/img/catalog/c4.png) no-repeat 50% 50% / cover"></div>
                    <p class="catalog__item_p">Круглые ковры</p>
                </a>
                <a href="/uploads/img/catalog/c5.png" data-fancybox data-width="1024" class="catalog__item">
                    <div class="catalog__item_img" style="background:url(/uploads/img/catalog/c5.png) no-repeat 50% 50% / cover"></div>
                    <p class="catalog__item_p">Современные ковры</p>
                </a>
                <a href="/uploads/img/catalog/c6.png" data-fancybox data-width="1024" class="catalog__item">
                    <div class="catalog__item_img" style="background:url(/uploads/img/catalog/c6.png) no-repeat 50% 50% / cover"></div>
                    <p class="catalog__item_p">Однотонные ковры</p>
                </a>
                <a href="/uploads/img/catalog/c7.png" data-fancybox data-width="1024" class="catalog__item">
                    <div class="catalog__item_img" style="background:url(/uploads/img/catalog/c7.png) no-repeat 50% 50% / cover"></div>
                    <p class="catalog__item_p">Натуральные ковры</p>
                </a>
                <a href="/uploads/img/catalog/c8.png" data-fancybox data-width="1024" class="catalog__item">
                    <div class="catalog__item_img" style="background:url(/uploads/img/catalog/c8.png) no-repeat 50% 50% / cover"></div>
                    <p class="catalog__item_p">Безворсные ковры</p>
                </a>
            </div>
        </div>
    </section>
    <section class="advantages">
        <div class="container">
            <div class="advantages__wrap">
                <div class="advantages__title">Выбирая нас вы получаете</div>
                <div class="advantages__items">
                    <div class="advantages__item">
                        <img src="/css/img/01.svg" alt="" class="advantages__item_img">
                        <p class="advantages__item_p">Бесплатная доставка по всей России</p>
                    </div>
                    <div class="advantages__item">
                        <img src="/css/img/02.svg" alt="" class="advantages__item_img">
                        <p class="advantages__item_p">Легкий возврат в течение 30 дней</p>
                    </div>
                    <div class="advantages__item">
                        <img src="/css/img/03.svg" alt="" class="advantages__item_img">
                        <p class="advantages__item_p">Скидка 15% на следующую покупку</p>
                    </div>
                    <div class="advantages__item">
                        <img src="/css/img/04.svg" alt="" class="advantages__item_img">
                        <p class="advantages__item_p">Бесплатная консультация дизайнера интерьера</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="leaders">
        <div class="container">
            <div class="leaders__wrap">
                <div class="leaders__title">Лидеры продаж</div>
                <a href="/pages/catalog/" class="leaders__btn">Смотреть все</a>
            </div>
            <div class="leaders__slider1">
                <a href="#" class="leaders__slider_slid">
                    <img src="/uploads/img/products/p1.png" alt="" class="leaders__slider_slid_img">
                    <p class="leaders__slider_slid_p">Ковер Signet Grey Art Deco Carpet Decor, 160х230 см</p>
                    <div class="leaders__slider_slid_price">19 350 <span class="leaders__slider_slid_price_span">₽</span></div>
                </a>
                <a href="#" class="leaders__slider_slid">
                    <img src="/uploads/img/products/p2.png" alt="" class="leaders__slider_slid_img">
                    <p class="leaders__slider_slid_p">Ковер Petra Wine Magic Home Carpet Decor, 160х230 см</p>
                    <div class="leaders__slider_slid_price">36 850 <span class="leaders__slider_slid_price_span">₽</span></div>
                </a>
                <a href="#" class="leaders__slider_slid">
                    <img src="/uploads/img/products/p3.png" alt="" class="leaders__slider_slid_img">
                    <p class="leaders__slider_slid_p">Ковер Petra Wine Magic Home Carpet Decor, 160х230 см</p>
                    <div class="leaders__slider_slid_price">10 550 <span class="leaders__slider_slid_price_span">₽</span></div>
                </a>
                <a href="#" class="leaders__slider_slid">
                    <img src="/uploads/img/products/p4.png" alt="" class="leaders__slider_slid_img">
                    <p class="leaders__slider_slid_p">Ковер Petra Wine Magic Home Carpet Decor, 160х230 см</p>
                    <div class="leaders__slider_slid_price">10 550 <span class="leaders__slider_slid_price_span">₽</span></div>
                </a>
                <a href="#" class="leaders__slider_slid">
                    <img src="/uploads/img/products/p1.png" alt="" class="leaders__slider_slid_img">
                    <p class="leaders__slider_slid_p">Ковер Signet Grey Art Deco Carpet Decor, 160х230 см</p>
                    <div class="leaders__slider_slid_price">19 350 <span class="leaders__slider_slid_price_span">₽</span></div>
                </a>
            </div>
            <div class="leaders__arr_wrap">
                <img src="/css/img/prev.svg" alt="Стрелка" class="prev prev01">
                <img src="/css/img/next.svg" alt="Стрелка" class="next next01">
            </div>
        </div>
    </section>
    <section class="brend">
        <div class="container">
            <div class="brend__title">Работаем с лучшими брендами</div>
            <div class="brend__wrap">
                <div class="brend__item">
                    <img src="/uploads/img/brand/b1.svg" alt="" class="brend__item_img">
                </div>
                <div class="brend__item">
                    <img src="/uploads/img/brand/b2.svg" alt="" class="brend__item_img">
                </div>
                <div class="brend__item">
                    <img src="/uploads/img/brand/b3.svg" alt="" class="brend__item_img">
                </div>
                <div class="brend__item">
                    <img src="/uploads/img/brand/b4.svg" alt="" class="brend__item_img">
                </div>
                <div class="brend__item">
                    <img src="/uploads/img/brand/b5.svg" alt="" class="brend__item_img">
                </div>
                <div class="brend__item">
                    <img src="/uploads/img/brand/b2.svg" alt="" class="brend__item_img">
                </div>
            </div>
        </div>
    </section>
    <section class="leaders">
        <div class="container">
            <div class="leaders__wrap">
                <div class="leaders__title">Новинки</div>
                <a href="/pages/catalog/" class="leaders__btn">Смотреть все</a>
            </div>
            <div class="leaders__slider2">
                <a href="#" class="leaders__slider_slid">
                    <img src="/uploads/img/products/p1.png" alt="" class="leaders__slider_slid_img">
                    <p class="leaders__slider_slid_p">Ковер Signet Grey Art Deco Carpet Decor, 160х230 см</p>
                    <div class="leaders__slider_slid_price">19 350 <span class="leaders__slider_slid_price_span">₽</span></div>
                </a>
                <a href="#" class="leaders__slider_slid">
                    <img src="/uploads/img/products/p2.png" alt="" class="leaders__slider_slid_img">
                    <p class="leaders__slider_slid_p">Ковер Petra Wine Magic Home Carpet Decor, 160х230 см</p>
                    <div class="leaders__slider_slid_price">36 850 <span class="leaders__slider_slid_price_span">₽</span></div>
                </a>
                <a href="#" class="leaders__slider_slid">
                    <img src="/uploads/img/products/p3.png" alt="" class="leaders__slider_slid_img">
                    <p class="leaders__slider_slid_p">Ковер Petra Wine Magic Home Carpet Decor, 160х230 см</p>
                    <div class="leaders__slider_slid_price">10 550 <span class="leaders__slider_slid_price_span">₽</span></div>
                </a>
                <a href="#" class="leaders__slider_slid">
                    <img src="/uploads/img/products/p4.png" alt="" class="leaders__slider_slid_img">
                    <p class="leaders__slider_slid_p">Ковер Petra Wine Magic Home Carpet Decor, 160х230 см</p>
                    <div class="leaders__slider_slid_price">10 550 <span class="leaders__slider_slid_price_span">₽</span></div>
                </a>
                <a href="#" class="leaders__slider_slid">
                    <img src="/uploads/img/products/p1.png" alt="" class="leaders__slider_slid_img">
                    <p class="leaders__slider_slid_p">Ковер Signet Grey Art Deco Carpet Decor, 160х230 см</p>
                    <div class="leaders__slider_slid_price">19 350 <span class="leaders__slider_slid_price_span">₽</span></div>
                </a>
            </div>
            <div class="leaders__arr_wrap">
                <img src="/css/img/prev.svg" alt="Стрелка" class="prev prev02">
                <img src="/css/img/next.svg" alt="Стрелка" class="next next02">
            </div>
        </div>
    </section>
    <section class="main__news">
        <div class="container">
            <div class="main__news_wrap">
                <a href="/pages/news/item/" class="main__news_item">
                    <div class="main__news_item_content">
                        <div class="main__news_item_title">Как выбрать ковер?</div>
                        <p class="main__news_item_p">Читать статью полностью</p>
                    </div>
                    <div class="main__news_item_img" style="background:url(/uploads/img/news/s1.png) no-repeat 50% 50% / cover"></div>
                </a>
                <a href="/pages/news/item/" class="main__news_item">
                    <div class="main__news_item_content">
                        <div class="main__news_item_title">Подбор ковра по фото вашего интерьера</div>
                        <p class="main__news_item_p">Читать статью полностью</p>
                    </div>
                    <div class="main__news_item_img" style="background:url(/uploads/img/news/s2.png) no-repeat 50% 50% / cover"></div>
                </a>
            </div>
        </div>
    </section>
    <section class="reviews">
        <div class="container">
            <div class="reviews__title">Отзывы наших клиентов</div>
            <div class="reviews__slider">
                <div class="reviews__slid">
                    <img src="/css/img/quote_red.svg" alt="Кавычки" class="reviews__slid_img">
                    <p class="reviews__slid_p">
                        Небесная сфера иллюстрирует Юпитер. Приливное трение однократно. Маятник Фуко, после осторожного анализа, меняет керн. Млечный Путь неравномерен.

                        Небесная сфера иллюстрирует Юпитер. Приливное трение 
                    </p>
                    <p class="reviews__slid_p_bold">Петров Петр</p>
                    <p class="reviews__slid_p_bold">16 августа 2021</p>
                </div>
                <div class="reviews__slid">
                    <img src="/css/img/quote_red.svg" alt="Кавычки" class="reviews__slid_img">
                    <p class="reviews__slid_p">
                        Небесная сфера иллюстрирует Юпитер. Приливное трение однократно. Маятник Фуко, после осторожного анализа, меняет керн. Млечный Путь неравномерен.

                        Небесная сфера иллюстрирует Юпитер. Приливное трение 
                    </p>
                    <p class="reviews__slid_p_bold">Петров Петр</p>
                    <p class="reviews__slid_p_bold">16 августа 2021</p>
                </div>
                <div class="reviews__slid">
                    <img src="/css/img/quote_red.svg" alt="Кавычки" class="reviews__slid_img">
                    <p class="reviews__slid_p">
                        Небесная сфера иллюстрирует Юпитер. Приливное трение однократно. Маятник Фуко, после осторожного анализа, меняет керн. Млечный Путь неравномерен.

                        Небесная сфера иллюстрирует Юпитер. Приливное трение 
                    </p>
                    <p class="reviews__slid_p_bold">Петров Петр</p>
                    <p class="reviews__slid_p_bold">16 августа 2021</p>
                </div>
                <div class="reviews__slid">
                    <img src="/css/img/quote_red.svg" alt="Кавычки" class="reviews__slid_img">
                    <p class="reviews__slid_p">
                        Небесная сфера иллюстрирует Юпитер. Приливное трение однократно. Маятник Фуко, после осторожного анализа, меняет керн. Млечный Путь неравномерен.

                        Небесная сфера иллюстрирует Юпитер. Приливное трение 
                    </p>
                    <p class="reviews__slid_p_bold">Петров Петр</p>
                    <p class="reviews__slid_p_bold">16 августа 2021</p>
                </div>
            </div>
            <div class="leaders__arr_wrap">
                <img src="/css/img/prev2.svg" alt="Стрелка" class="prev2">
                <img src="/css/img/next2.svg" alt="Стрелка" class="next2">
            </div>
        </div>
    </section>
    <section class="form">
        <div class="container">
            <form action="#" class="form__wrap">
                <div class="form__title">Не нашли то, что искали?</div>
                <div class="form__subtitle">Оставьте заявку и мы подберем вам нужный товар</div>
                <div class="form__input_wrap">
                    <input type="text" name="name" class="form__input" placeholder="Ваше имя">
                    <input type="text" name="tel" class="form__input form__input_tel" placeholder="+7 (999) 999-99-99" autocomplete="off">
                    <input type="submit" class="form__input_submit" value="Отправить">
                </div>
                <div class="form__text">
                    Нажимая кнопку вы соглашаетесь с <a href="/pages/policy/persinfo/" target="_blank" class="form__link">политикой обработки персональных данных</a>
                </div>
            </form>
        </div>
    </section>
<?php
include (''.$_SERVER["DOCUMENT_ROOT"].'/includes/footer.php');
?>