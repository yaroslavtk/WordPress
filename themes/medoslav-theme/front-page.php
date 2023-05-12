
<?php get_header() ?>

<body>
        <nav class="topicons">
            <div class="container">

            <?php wp_nav_menu(
                array(
                    'theme_location' => 'menu-2',
                    'container' => false,
                    'menu_class' => 'topicons-list multiple-items',
                )
            ) ?>

            </div>
        </nav>

        <div class="container">
            <div class="shipping">
                <div class="shipping-text">
                    <p>Безкоштовна доставка на замовлення від 600 грн!</p>
                </div>
            </div>
        </div>

        <div class="container">
            <header class="wellcome shadow-box" id="products-a">
                <video playsinline autoplay muted loop poster="">
                    <source src="<?php echo get_template_directory_uri(); ?>/assets/vid/Honeycomb.mp4" type="video/webm">
                    Your browser does not support the video tag.
                </video>
                <div data-aos="fade-up" class="wellcome-text-wrap">
                    <p class="wellcome-text-1 wellcome-text-active">Вітаємо на сайті нашої пасіки!</p>
                    <p class="wellcome-text-2 wellcome-text-active">Будемо раді стати вашим постачальником корисної
                        продукції!</p>
                </div>
            </header>
        </div>


        <section data-aos="fade-up" class="products" id="products-a">
            <div class="container">

                <div class="title-wrap title-wrap-small">
                    <h2 class="cream-title section-title">Продукція</h2>

                    <div class="owl-nav">

                        <ul class="top-product-list">
                            <li class="top-product-item"><a href="">Найкращі</a></li>
                            <li class="top-product-item"><a href="">Знижки</a></li>
                            <li class="top-product-item"><a href="">Останні</a></li>
                        </ul>
                        <!-- <div class="owl-nav-buttons">
                            <button type="button" class="owl-prev"><i
                                    class="fa fa-angle-left"></i></button>
                            <button type="button" class="owl-next"><i
                                    class="fa fa-angle-right"></i></button>
                        </div> -->
                    </div>
                </div>

                <div class="wrapper">

                    <ul class="product-list responsive">
                    
                        <li class="product-list-item">
                            <div class="product-block">
                                <div class="product-transition">
                                    <div class="product-image"><img width="450" height="420"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/img/37-removebg-preview.png" class="product-img" alt="">
                                    </div>
                                    <div class="group-action">
                                        <div class="shop-action">
                                            <button class="woosw-btn" type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/heart.png"
                                                    width="14" height="14" alt="submit"></button>
                                            <button class="woosw-btn" type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/online-shopping.png"
                                                    width="16" height="16" alt="submit"></button>
                                            <button data-open-modal class="woosw-btn" type="submit"><img
                                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/view.png" width="18" height="18" alt="submit"></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="volume-switch">
                                    <div class="volume-value">1000ml</div>
                                    <div class="volume-value">750ml</div>
                                    <div class="volume-value">300ml</div>
                                </div>
                                <h3 class="product-title"><a href="#">Enormous Silk Computer</a></h3>
                                <span class="price"><span class="product-price">829.58<span
                                            class="price-currency">грн</span></span></span>
                                <a data-quantity="1" class="add-to-cart">В кошик</a>
                            </div>

                            <dialog data-modal class="modal">
                                <div class="details">
                                    <div>Product 1 Details</div>
                                </div>
                                <button class="modal-close-btn" data-close-modal>X</button>
                            </dialog> 

                        </li>

                        <li class="product-list-item">
                            <div class="product-block">
                                <div class="product-transition">
                                    <div class="product-image"><img width="450" height="420"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/img/39-removebg-preview.png" class="product-img" alt="">
                                    </div>
                                    <div class="group-action">
                                        <div class="shop-action">
                                            <button class="woosw-btn" type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/heart.png"
                                                    width="14" height="14" alt="submit"></button>
                                            <button class="woosw-btn" type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/online-shopping.png"
                                                    width="16" height="16" alt="submit"></button>
                                            <button data-open-modal class="woosw-btn" type="submit"><img
                                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/view.png" width="18" height="18" alt="submit"></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="volume-switch">
                                    <div class="volume-value">1000ml</div>
                                    <div class="volume-value">500ml</div>
                                </div>
                                <h3 class="product-title"><a href="#">Enormous Silk Computer</a></h3>
                                <span class="price"><span class="product-price">829.58<span
                                            class="price-currency">грн</span></span></span>
                                <a data-quantity="1" class="add-to-cart">В кошик</a>
                            </div>

                            <!-- <dialog data-modal class="modal">
                                <div class="details">
                                    <div>Product 2 details</div>
                                </div>
                                <button class="modal-close-btn" data-close-modal>X</button>
                            </dialog> -->

                        </li>

                        <li class="product-list-item">
                            <div class="product-block">
                                <div class="product-transition">
                                    <div class="product-image"><img width="450" height="420"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/img/40-removebg-preview.png" class="product-img" alt="">
                                    </div>
                                    <div class="group-action">
                                        <div class="shop-action">
                                            <button class="woosw-btn" type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/heart.png"
                                                    width="14" height="14" alt="submit"></button>
                                            <button class="woosw-btn" type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/online-shopping.png"
                                                    width="16" height="16" alt="submit"></button>
                                            <button class="woosw-btn" type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/view.png"
                                                    width="18" height="18" alt="submit"></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="volume-switch">
                                    <div class="volume-value">1000ml</div>
                                    <div class="volume-value">750ml</div>
                                    <div class="volume-value">500ml</div>
                                    <div class="volume-value">300ml</div>
                                </div>
                                <h3 class="product-title"><a href="#">Enormous Silk Computer</a></h3>
                                <span class="price"><span class="product-price">829.58<span
                                            class="price-currency">грн</span></span></span>
                                <a data-quantity="1" class="add-to-cart">В кошик</a>
                            </div>
                        </li>

                        <li class="product-list-item">
                            <div class="product-block">
                                <div class="product-transition">
                                    <div class="product-image"><img width="450" height="420" src="<?php echo get_template_directory_uri(); ?>/assets/img/honey_v4.png"
                                            class="product-img" alt="">
                                    </div>
                                    <div class="group-action">
                                        <div class="shop-action">
                                            <button class="woosw-btn" type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/heart.png"
                                                    width="14" height="14" alt="submit"></button>
                                            <button class="woosw-btn" type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/online-shopping.png"
                                                    width="16" height="16" alt="submit"></button>
                                            <button class="woosw-btn" type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/view.png"
                                                    width="18" height="18" alt="submit"></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="volume-switch">
                                    <div class="volume-value">1000ml</div>
                                    <div class="volume-value">750ml</div>
                                    <div class="volume-value">500ml</div>
                                    <div class="volume-value">300ml</div>
                                </div>
                                <h3 class="product-title"><a href="#">Enormous Silk Computer</a></h3>
                                <span class="price"><span class="product-price">829.58<span
                                            class="price-currency">грн</span></span></span>
                                <a data-quantity="1" class="add-to-cart">В кошик</a>
                            </div>
                        </li>

                        <li class="product-list-item">
                            <div class="product-block">
                                <div class="product-transition">
                                    <div class="product-image"><img width="450" height="420"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/img/Yellow_Jam_Jar_Mockup_2a-removebg-preview.png" class="product-img"
                                            alt="">
                                    </div>
                                    <div class="group-action">
                                        <div class="shop-action">
                                            <button class="woosw-btn" type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/heart.png"
                                                    width="14" height="14" alt="submit"></button>
                                            <button class="woosw-btn" type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/online-shopping.png"
                                                    width="16" height="16" alt="submit"></button>
                                            <button class="woosw-btn" type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/view.png"
                                                    width="18" height="18" alt="submit"></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="volume-switch">
                                    <div class="volume-value">1000ml</div>
                                    <div class="volume-value">750ml</div>
                                    <div class="volume-value">500ml</div>
                                    <div class="volume-value">300ml</div>
                                </div>
                                <h3 class="product-title"><a href="#">Enormous Silk Computer</a></h3>
                                <span class="price"><span class="product-price">829.58<span
                                            class="price-currency">грн</span></span></span>
                                <a data-quantity="1" class="add-to-cart">В кошик</a>
                            </div>
                        </li>

                        <li class="product-list-item">
                            <div class="product-block">
                                <div class="product-transition">
                                    <div class="product-image"><img width="450" height="420"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/img/Крем-мед_Ківі_470_г_w1280-removebg-preview.png" class="product-img"
                                            alt="">
                                    </div>
                                    <div class="group-action">
                                        <div class="shop-action">
                                            <button class="woosw-btn" type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/heart.png"
                                                    width="14" height="14" alt="submit"></button>
                                            <button class="woosw-btn" type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/online-shopping.png"
                                                    width="16" height="16" alt="submit"></button>
                                            <button class="woosw-btn" type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/view.png"
                                                    width="18" height="18" alt="submit"></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="volume-switch">
                                    <div class="volume-value">1000ml</div>
                                    <div class="volume-value">300ml</div>
                                </div>
                                <h3 class="product-title"><a href="#">Enormous Silk Computer</a></h3>
                                <span class="price"><span class="product-price">829.58<span
                                            class="price-currency">грн</span></span></span>
                                <a data-quantity="1" class="add-to-cart">В кошик</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>   

        <section data-aos="fade-up" class="cream-honey" id="cream-a">
            <div class="container">

                <div class="title-wrap title-wrap-small">
                    <h2 class="cream-title section-title">Крем-мед</h2>

                    <!-- <div class="owl-nav">

                        <ul class="top-product-list">
                            <li class="top-product-item"><a href="">Найкращі</a></li>
                            <li class="top-product-item"><a href="">Знижки</a></li>
                            <li class="top-product-item"><a href="">Останні</a></li>
                        </ul>
                        <div class="owl-nav-buttons">
                            <button type="button" class="owl-prev"><i class="fa fa-angle-left"></i></button>
                            <button type="button" class="owl-next"><i class="fa fa-angle-right"></i></button>
                        </div>
                    </div> -->
                </div>

                    <div class="wrapper">

                    <?php echo do_shortcode('[product_category category="krem-med"]') ?>

                     </div>
            </div>
        </section>

        <section class="facts">
            <div class="container">
                <ul class="facts-list facts-slider">
                    <li class="facts-item">
                        <div class="fact-container">
                            <div class="fact-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/fruits_1.png" class="fact-img" alt="" width="110">
                            </div>
                            <div class="facts-item-text">
                                <h3>Смородина</h3>
                                <p>Містить вітаміни C, K та антиоксиданти. Покращує імунітет серцево-судинну
                                    систему, зір та знижує ризик появи раку.</p>
                            </div>
                        </div>
                    </li>
                    <li class="facts-item">
                        <div class="fact-container">
                            <div class="fact-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/fruits_2.png" class="fact-img" alt="" width="110">
                            </div>
                            <div class="facts-item-text">
                                <h3>Курага</h3>
                                <p>Містить бета-каротин, вітаміни C та E та дієтичні волокна. Покращує здоров'я шкіри,
                                    очей, імунної та серцево-судинної систем.</p>
                            </div>
                        </div>
                    </li>
                    <li class="facts-item">
                        <div class="fact-container">
                            <div class="fact-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/fruits_4.png" class="fact-img" alt="" width="110">
                            </div>
                            <div class="facts-item-text">
                                <h3>Чорнослив</h3>
                                <p>Містить вітаміни C, К та клітковину. Поліпшує травлення, знижує ризик раку, та
                                    захищає від хвороб серця.</p>
                            </div>
                    </li>
                    <li class="facts-item">
                        <div class="fact-container">
                            <div class="fact-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/fruits_5.png" class="fact-img" alt="" width="110">
                            </div>
                            <div class="facts-item-text">
                                <h3>Журавлина</h3>
                                <p>Містить вітаміни C та К, антиоксиданти та фітонутрієнти. Знижує ризик винекнення
                                    захворювань серця та цукрового діабету.</p>
                            </div>
                    </li>
                    <li class="facts-item">
                        <div class="fact-container">
                            <div class="fact-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/fruits_6.png" class="fact-img" alt="" width="110">
                            </div>
                            <div class="facts-item-text">
                                <h3>Лимон</h3>
                                <p>Містить велику кількість вітаміну C та антиоксидантів. Знижує запальні процеси в
                                    організмі, покращує шкіру та травлення.</p>
                            </div>
                    </li>
                    <li class="facts-item">
                        <div class="fact-container">
                            <div class="fact-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/fruits_7.png" class="fact-img" alt="" width="110">
                            </div>
                            <div class="facts-item-text">
                                <h3>Обліпиха</h3>
                                <p>Містить вітамін C, E та антиоксиданти. Захищає від хвороб серця та раку, лікує
                                    запалення шкіри та слизових оболонок.</p>
                            </div>
                    </li>
                    <li class="facts-item">
                        <div class="fact-container">
                            <div class="fact-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/fruits_8.png" class="fact-img" alt="" width="90">
                            </div>
                            <div class="facts-item-text">
                                <h3>М'ята-Лайм</h3>
                                <p>Окрім корисних властивостей лайму м'ята містить ментол. Поліпшує травлення, знижує
                                    запалення, біль та стрес.</p>
                            </div>
                    </li>
                    <li class="facts-item">
                        <div class="fact-container">
                            <div class="fact-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/fruits_9.png" class="fact-img" alt="" width="110">
                            </div>
                            <div class="facts-item-text">
                                <h3>Полуниця</h3>
                                <p>Містить вітаміни С та К. Знижує ризик захворювань серця та цукрового діабету,
                                    поліпшує функції мозку та зору.</p>
                            </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="facts">
            <div class="container">
                <div class="honey-facts-big">
                    <ul class="honey-facts-big-left">
                        <li data-aos="fade-right" class="honey-fact-item">Покращує стан шкіри<div
                                class="honey-fact-ico"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/skin-care.png" alt="" width="48px"></div>
                        </li>
                        <li data-aos="fade-right" class="honey-fact-item">Регулює роботу нервової системи<div
                                class="honey-fact-ico"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/calm.png" alt="" width="48px"></div>
                        </li>
                        <li data-aos="fade-right" class="honey-fact-item">Зміцнює імунітет<div class="honey-fact-ico">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/immunity.png" alt="" width="48px">
                            </div>
                        </li>
                        <li data-aos="fade-right" class="honey-fact-item">Відновлює корисну міклофлору<div
                                class="honey-fact-ico"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/bacteria.png" alt="" width="48px"></div>
                        </li>
                        <li data-aos="fade-right" class="honey-fact-item">Поліпшує сон<div class="honey-fact-ico"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/sleep.png" alt="" width="48px"></div>
                        </li>
                    </ul>
                    <div data-aos="fade-up" class="facts-honey-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/honey_v9_removebg.png"
                            class="facts-honey-image" alt=""></div>

                    <ul class="honey-facts-big-right">
                        <li data-aos="fade-left" class="honey-fact-item-right">
                            <div class="honey-fact-ico"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/digestion.png" alt="" width="48px"></div>
                            Стимулює травлення
                        </li>
                        <li data-aos="fade-left" class="honey-fact-item-right">
                            <div class="honey-fact-ico"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/blood-pressure.png" alt="" width="48px"></div>
                            Нормалізує тиск
                        </li>
                        <li data-aos="fade-left" class="honey-fact-item-right">
                            <div class="honey-fact-ico"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/cough.png" alt="" width="48px"></div>Лікує
                            кашель
                        </li>
                        <li data-aos="fade-left" class="honey-fact-item-right">
                            <div class="honey-fact-ico"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/working.png" alt="" width="48px"></div>
                            Збільшує працездатність
                        </li>
                        <li data-aos="fade-left" class="honey-fact-item-right">
                            <div class="honey-fact-ico"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/healthy.png" alt="" width="48px"></div>
                            Покращує обмін речовин
                        </li>
                    </ul>
                </div>
                <ul class="facts-list facts-list-honey facts-slider">
                    <li class="facts-item facts-item-honey">
                        <div class="fact-container">
                            <div class="fact-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/immunity.png" class="fact-img fact-img-honey"
                                    alt="" width="110"></div>
                            <div class="facts-item-text">
                                <h3>Зміцнює імунітет</h3>
                                <p>Мед містить значну
                                    кількість корисних мінералів: магній, залізо, калій, кальцій, натрій, хлор та сірку
                                    та вітамінів В1,В2,В3,В5,В6,Вс,Е,К,С і каротин.</p>
                            </div>
                        </div>
                    </li>
                    <li class="facts-item facts-item-honey">
                        <div class="fact-container">
                            <div class="fact-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/calm.png" class="fact-img fact-img-honey" alt=""
                                    width="110"></div>
                            <div class="facts-item-text">
                                <h3>Регулює роботу нервової системи</h3>
                                <p>Мінеральні речовини, присутні в меді, регулюють
                                    діяльність
                                    нервової системи, тканинне дихання, кровотворення.</p>
                            </div>
                        </div>
                    </li>
                    <li class="facts-item facts-item-honey">
                        <div class="fact-container">
                            <div class="fact-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/skin-care.png" class="fact-img fact-img-honey"
                                    alt="" width="110"></div>
                            <div class="facts-item-text">
                                <h3>Покращує стан шкіри</h3>
                                <p>Мед пом'якшує шкіру, усуває сухість і лущення, підвищує тонус
                                    шкіри,
                                    завдяки чому мед часто використовують у косметичних цілях.</p>
                            </div>
                        </div>
                    </li>
                    <li class="facts-item facts-item-honey">
                        <div class="fact-container">
                            <div class="fact-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/bacteria.png" class="fact-img fact-img-honey"
                                    alt="" width="110"></div>
                            <div class="facts-item-text">
                                <h3>Відновлює корисну міклофлору</h3>
                                <p>Мед – відмінний пробіотик. Він покращує травлення і відновлює
                                    корисну
                                    мікрофлору організму,
                                    оскільки містить понад шість видів лактобацил і чотири види біфідобактерій.</p>
                            </div>
                        </div>
                    </li>
                    <li class="facts-item facts-item-honey">
                        <div class="fact-container">
                            <div class="fact-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/blood-pressure.png"
                                    class="fact-img fact-img-honey" alt="" width="110"></div>
                            <div class="facts-item-text">
                                <h3>Нормалізує тиск</h3>
                                <p> Завдяки вмісту калію, антиоксидантів та
                                    флавоноїдів мед допомагає зменшити напругу на
                                    стінках судин, що сприяє зниженню кров'яного тиску.</p>
                            </div>
                        </div>
                    </li>
                    <li class="facts-item facts-item-honey">
                        <div class="fact-container">
                            <div class="fact-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/sleep.png" class="fact-img fact-img-honey" alt=""
                                    width="110"></div>
                            <div class="facts-item-text">
                                <h3>Поліпшує сон</h3>
                                <p>Вживання меду сприяє поліпшенню обміну речовин, що, своєю
                                    чергою,
                                    впливає на поліпшення сну та зниження нервової
                                    збудливості.</p>
                            </div>
                        </div>
                    </li>
                    <li class="facts-item facts-item-honey">
                        <div class="fact-container">
                            <div class="fact-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/digestion.png" class="fact-img fact-img-honey"
                                    alt="" width="110"></div>
                            <div class="facts-item-text">
                                <h3>Стимулює травлення</h3>
                                <p>Ферменти, що входять до складу меду, стимулюють процеси
                                    травлення
                                    та
                                    покращують обмін речовин.</p>
                            </div>
                        </div>
                    </li>
                    <li class="facts-item facts-item-honey">
                        <div class="fact-container">
                            <div class="fact-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/no-virus.png" class="fact-img fact-img-honey"
                                    alt="" width="110"></div>
                            <div class="facts-item-text">
                                <h3>Має антибактеріальну дію</h3>
                                <p>Мед має потужну антибактеріальну дію. Це чудовий засіб для
                                    загоєння різноманітних ран та порізів.</p>
                            </div>
                        </div>
                    </li>
                    <li class="facts-item facts-item-honey">
                        <div class="fact-container">
                            <div class="fact-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/cough.png" class="fact-img fact-img-honey" alt=""
                                    width="110"></div>
                            <div class="facts-item-text">
                                <h3>Лікує кашель</h3>
                                <p>Мед заспокоює кашель під застуди чи бронхіту, особливо у
                                    дітей.
                                    Якщо перед сном з’їсти ложку меду, сон буде міцніший.</p>
                            </div>
                        </div>
                    <li class="facts-item facts-item-honey">
                        <div class="fact-container">
                            <div class="fact-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/working.png" class="fact-img fact-img-honey"
                                    alt="" width="110"></div>
                            <div class="facts-item-text">
                                <h3>Збільшує працездатність</h3>
                                <p>Мед містить в собі багато корисних речовин, таких як глюкоза та фруктоза, які є
                                    джерелом енергії для організму. Білки, що містяться в меді, беруть участь в
                                    утворенні
                                    гормонів.</p>
                            </div>
                        </div>
                    </li>
                    <li class="facts-item facts-item-honey">
                        <div class="fact-container">
                            <div class="fact-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/healthy.png" class="fact-img fact-img-honey"
                                    alt="" width="110"></div>
                            <div class="facts-item-text">
                                <h3>Покращує обмін речовин</h3>
                                <p>Мед містить вітаміни, мінерали та антиоксиданти, які сприяють правильному
                                    функціонуванню різних органів та систем організму.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section data-aos="fade-up" class="nuts" id="nuts-a">
            <div class="container">

                <div class="title-wrap title-wrap-small">
                    <h2 class="cream-title section-title">З горіхами</h2>

                    <!-- <div class="owl-nav">

                        <ul class="top-product-list">
                            <li class="top-product-item"><a href="">Найкращі</a></li>
                            <li class="top-product-item"><a href="">Знижки</a></li>
                            <li class="top-product-item"><a href="">Останні</a></li>
                        </ul>
                        <div class="owl-nav-buttons">
                            <button type="button" class="owl-prev"><i class="fa fa-angle-left"></i></button>
                            <button type="button" class="owl-next"><i class="fa fa-angle-right"></i></button>
                        </div>
                    </div> -->
                </div>

                <div class="wrapper">

                <?php echo do_shortcode('[product_category category="z-gorihamy"]') ?>

                </div>

            </div>
        </section>

        <section class="facts">
            <div class="container">
                <ul class="facts-list facts-slider">
                    <li class="facts-item">
                        <div class="fact-container">
                            <div class="fact-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/nut_1.png" class="fact-img" alt="" width="110"></div>
                            <div class="facts-item-text">
                                <h3>Фундук</h3>
                                <p>У горіхах містяться речовини, що допомагають впоратися з
                                    депресією, подолати стрес і нервовове напруження.</p>
                            </div>
                    </li>
                    <li class="facts-item">
                        <div class="fact-container">
                            <div class="fact-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/nut_12.png" class="fact-img" alt="" width="110"></div>
                            <div class="facts-item-text">
                                <h3>Кедрові</h3>
                                <p>Ядра горіхів наповнені корисними мікроелементами, мінералами,
                                    вітамінами
                                    та поліненасиченими жирними кислотами.</p>
                            </div>
                        </div>
                    </li>
                    <li class="facts-item">
                        <div class="fact-container">
                            <div class="fact-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/nut_9.png" class="fact-img" alt="" width="110"></div>
                            <div class="facts-item-text">
                                <h3>Кеш'ю</h3>
                                <p>При вживані горіхів з організму виводяться
                                    токсини та
                                    шлаки, покращується робота мозку, зір та стан шкіри.</p>
                            </div>
                        </div>
                    </li>
                    <li class="facts-item">
                        <div class="fact-container">
                            <div class="fact-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/nut_2.png" class="fact-img" alt="" width="110"></div>
                            <div class="facts-item-text">
                                <h3>Мигдаль</h3>
                                <p>Також відмічається позитивний вплив горіхів на кровоносну,
                                    нервову, імунну, жіночу і чоловічу статеві системи.</p>
                            </div>
                    </li>
                    <li class="facts-item">
                        <div class="fact-container">
                            <div class="fact-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/nut_5.png" class="fact-img" alt="" width="110"></div>
                            <div class="facts-item-text">
                                <h3>Арахіс</h3>
                                <p>Горіхи корисні для суглобів, м'язів, серця, очей, знижують ризик вірусних
                                    захворювань, запобігають ламкості нігтів та зміцнюють волосся.</p>
                            </div>
                    </li>
                    <li class="facts-item">
                        <div class="fact-container">
                            <div class="fact-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/nut_10.png" class="fact-img" alt="" width="110"></div>
                            <div class="facts-item-text">
                                <h3>Гарбузові</h3>
                                <p>Горіхи рекомендується регулярно вживати людям з хворобами
                                    печінки, нирок або кишечника.</p>
                            </div>
                    </li>
                    <li class="facts-item">
                        <div class="fact-container">
                            <div class="fact-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/nut_3.png" class="fact-img" alt="" width="110"></div>
                            <div class="facts-item-text">
                                <h3>Грецькі</h3>
                                <p>Горіхи швидко втамовують голод, забезпечують організм
                                    енергетичним запасом і є хорошим перекусом.</p>
                            </div>
                    </li>
                    <li class="facts-item">
                        <div class="fact-container">
                            <div class="fact-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/nut_4.png" class="fact-img" alt="" width="110"></div>
                            <div class="facts-item-text">
                                <h3>Фісташки</h3>
                                <p>Оскільки горіхи є хорошим «підживленням» для мозку, то
                                    людям
                                    з розумовою працею вони просто необхідні.</p>
                            </div>
                    </li>
                </ul>
            </div>
        </section>

        <section data-aos="fade-up" class="gifts" id="gifts-a">
            <div class="container">

                <div class="title-wrap title-wrap-small">
                    <h2 class="cream-title section-title">Подарунки</h2>

                    <!-- <div class="owl-nav">

                        <ul class="top-product-list">
                            <li class="top-product-item"><a href="">Найкращі</a></li>
                            <li class="top-product-item"><a href="">Знижки</a></li>
                            <li class="top-product-item"><a href="">Останні</a></li>
                        </ul>
                        <div class="owl-nav-buttons">
                            <button type="button" class="owl-prev"><i class="fa fa-angle-left"></i></button>
                            <button type="button" class="owl-next"><i class="fa fa-angle-right"></i></button>
                        </div>
                    </div> -->
                </div>

                <div class="wrapper">

                    <ul class="product-list responsive">

                        <li class="product-list-item">
                            <div class="product-block">
                                <div class="product-transition">
                                    <div class="product-image"><img width="450" height="420" src="<?php echo get_template_directory_uri(); ?>/assets/img/gift_2.png"
                                            class="product-img" alt="">
                                    </div>
                                    <div class="group-action gift-action">
                                        <div class="shop-action">
                                            <button class="woosw-btn" type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/heart.png"
                                                    width="14" height="14" alt="submit"></button>
                                            <!-- <button class="woosw-btn" type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/online-shopping.png"
                                                    width="16" height="16" alt="submit"></button> -->
                                            <button class="woosw-btn" type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/view.png"
                                                    width="18" height="18" alt="submit"></button>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="volume-switch">
                                    <div class="volume-value">1000ml</div>
                                    <div class="volume-value">750ml</div>
                                    <div class="volume-value">300ml</div>
                                </div> -->
                                <h3 class="product-title"><a href="#">Ящик</a></h3>
                                <span class="price"><span class="product-price">829-1600<span
                                            class="price-currency">грн</span></span></span>
                                <a data-quantity="1" class="add-to-cart">Огляд</a>
                            </div>
                        </li>

                        <li class="product-list-item">
                            <div class="product-block">
                                <div class="product-transition">
                                    <div class="product-image"><img width="450" height="420" src="<?php echo get_template_directory_uri(); ?>/assets/img/gift_1.png"
                                            class="product-img" alt="">
                                    </div>
                                    <div class="group-action gift-action">
                                        <div class="shop-action">
                                            <button class="woosw-btn" type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/heart.png"
                                                    width="14" height="14" alt="submit"></button>
                                            <!-- <button class="woosw-btn" type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/online-shopping.png"
                                                    width="16" height="16" alt="submit"></button> -->
                                            <button class="woosw-btn" type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/view.png"
                                                    width="18" height="18" alt="submit"></button>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="volume-switch">
                                    <div class="volume-value">1000ml</div>
                                    <div class="volume-value">500ml</div>
                                </div> -->
                                <h3 class="product-title"><a href="#">Підставка</a></h3>
                                <span class="price"><span class="product-price">829-1600<span
                                            class="price-currency">грн</span></span></span>
                                <a data-quantity="1" class="add-to-cart">Огляд</a>
                            </div>
                        </li>

                        <li class="product-list-item">
                            <div class="product-block">
                                <div class="product-transition">
                                    <div class="product-image"><img width="450" height="420" src="<?php echo get_template_directory_uri(); ?>/assets/img/gift_3.png"
                                            class="product-img" alt="">
                                    </div>
                                    <div class="group-action gift-action">
                                        <div class="shop-action">
                                            <button class="woosw-btn" type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/heart.png"
                                                    width="14" height="14" alt="submit"></button>
                                            <!-- <button class="woosw-btn" type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/online-shopping.png"
                                                    width="16" height="16" alt="submit"></button> -->
                                            <button class="woosw-btn" type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/view.png"
                                                    width="18" height="18" alt="submit"></button>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="volume-switch">
                                    <div class="volume-value">1000ml</div>
                                    <div class="volume-value">750ml</div>
                                    <div class="volume-value">500ml</div>
                                    <div class="volume-value">300ml</div>
                                </div> -->
                                <h3 class="product-title"><a href="#">Ящик на 3 банки</a></h3>
                                <span class="price"><span class="product-price">829-1600<span
                                            class="price-currency">грн</span></span></span>
                                <a data-quantity="1" class="add-to-cart">Огляд</a>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </section>

        <section class="promo">
            <div class="container">
                <ul class="promo-list">
                    <li class="promo-list-item">
                        <div>
                            <img class="promo_img" alt="Ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/beekeeper_ico_2.png" width="46">
                            <p class="promo-list-item-text">Власна пасіка та більше 12 років досвіду</p>
                        </div>
                    </li>
                    <li class="promo-list-item">
                        <div>
                            <img class="promo_img" alt="Ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/gift-box_ico.png" width="46">
                            <p class="promo-list-item-text">Індивідуальні набори та гравіювання</p>
                        </div>
                    </li>
                    <li class="promo-list-item">
                        <div>
                            <img class="promo_img" alt="Ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/vitamins_ico.png" width="46">
                            <p class="promo-list-item-text">Ввесь спектр корисних речовин</p>
                        </div>
                    </li>
                    <li class="promo-list-item">
                        <div>
                            <img class="promo_img" alt="Ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/gift_ico_2.png" width="46">
                            <p class="promo-list-item-text">Оригінальні та корисні подарунки</p>
                        </div>
                    </li>
                    <li class="promo-list-item">
                        <div>
                            <img class="promo_img" alt="Ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/delivery-truck_ico.png" width="46">
                            <p class="promo-list-item-text">Швидке оформлення та доставка</p>
                        </div>
                    </li>
                    <li class="promo-list-item">
                        <div>
                            <img class="promo_img" alt="Ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/quality_ico.png" width="46">
                            <p class="promo-list-item-text">За якість відповідаємо репутацією</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="comparison">
            <div class="container">
                <div class="wrapper">
                    <div data-aos="fade-up" class="comparison-container">
                        <div class="comparison-chart">
                            <div class="comparison-head">
                                <div class="comparison-head-block">
                                    <div class="comparison-head-block-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sugar.png" alt="Цукор"
                                            width="180px" height="140px"></div>
                                    <div class="comparison-head-block-text">Цукор</div>
                                </div>
                                <div class="comparison-head-icon"><svg width="256" height="60" viewBox="0 0 256 60"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="128" cy="30" r="30" fill="#A1AFB1"></circle>
                                        <path
                                            d="M115.426 22.552L119.81 39H123.394L128.034 22.552H124.706C123.778 26.808 122.05 33.176 121.762 35.48H121.73C121.378 32.984 120.098 27.448 118.978 22.552H115.426ZM128.906 34.104C128.938 37.048 130.666 39.288 134.41 39.288C137.994 39.288 139.978 37.464 139.978 34.296C139.978 31.608 138.634 30.328 135.242 29.048C133.162 28.28 132.586 27.736 132.586 26.616C132.586 25.56 133.194 24.824 134.378 24.824C136.298 24.824 136.426 26.584 136.426 27.224H139.626C139.626 25.048 138.57 22.264 134.474 22.264C130.73 22.264 129.354 24.632 129.354 26.84C129.354 29.208 130.314 30.52 134.026 31.896C136.042 32.664 136.682 33.336 136.682 34.68C136.682 35.896 136.01 36.728 134.57 36.728C132.874 36.728 132.202 35.448 132.17 34.104H128.906Z"
                                            fill="white"></path>
                                        <line x1="6.55671e-08" y1="31.25" x2="78" y2="31.25" stroke="#D0D7D8"
                                            stroke-width="1.5"></line>
                                        <line x1="178" y1="31.25" x2="256" y2="31.25" stroke="#D0D7D8"
                                            stroke-width="1.5"></line>
                                    </svg></div>
                                <div class="comparison-head-block">
                                    <div class="comparison-head-block-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/honey_v3_min.png" alt="Мед"
                                            width="130px" height="130px"></div>
                                    <div class="comparison-head-block-text">Мед</div>
                                </div>
                            </div>
                            <div class="comparison-chart-block">
                                <div class="comparison-chart-block-start"><svg
                                        class="component--home--comparison--chart__icon" width="40" height="40"
                                        viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="20" cy="20" r="19.25" fill="#CCEEEC" stroke="#00AB9F"
                                            stroke-width="1.5">
                                        </circle>
                                        <path
                                            d="M28.4948 13.1611L16.5 25.1559L11.5052 20.1611L9.82812 21.8382L15.6615 27.6715L16.5 28.4736L17.3385 27.6715L30.1719 14.8382L28.4948 13.1611Z"
                                            fill="#00AB9F"></path>
                                    </svg></div>
                                <div class="comparison-chart-block-center">
                                    <div class="comparison-chart-block-text">Можна додавати в чай та каву</div>
                                </div>
                                <div class="comparison-chart-block-end"><svg
                                        class="component--home--comparison--chart__icon" width="40" height="40"
                                        viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="20" cy="20" r="19.25" fill="#CCEEEC" stroke="#00AB9F"
                                            stroke-width="1.5">
                                        </circle>
                                        <path
                                            d="M28.4948 13.1611L16.5 25.1559L11.5052 20.1611L9.82812 21.8382L15.6615 27.6715L16.5 28.4736L17.3385 27.6715L30.1719 14.8382L28.4948 13.1611Z"
                                            fill="#00AB9F"></path>
                                    </svg></div>
                            </div>
                            <div class="comparison-chart-block">
                                <div class="comparison-chart-block-start"><svg
                                        class="component--home--comparison--chart__icon" width="40" height="40"
                                        viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="20" cy="20" r="19.25" fill="#E9EBEB" stroke="#738889"
                                            stroke-width="1.5">
                                        </circle>
                                        <path
                                            d="M12.707 11.293L11.293 12.707L18.5859 20L11.293 27.293L12.707 28.707L20 21.4141L27.293 28.707L28.707 27.293L21.4141 20L28.707 12.707L27.293 11.293L20 18.5859L12.707 11.293Z"
                                            fill="#738889"></path>
                                    </svg></div>
                                <div class="comparison-chart-block-center">
                                    <div class="comparison-chart-block-text">Не викликає залежність</div>
                                </div>
                                <div class="comparison-chart-block-end"><svg
                                        class="component--home--comparison--chart__icon" width="40" height="40"
                                        viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="20" cy="20" r="19.25" fill="#CCEEEC" stroke="#00AB9F"
                                            stroke-width="1.5">
                                        </circle>
                                        <path
                                            d="M28.4948 13.1611L16.5 25.1559L11.5052 20.1611L9.82812 21.8382L15.6615 27.6715L16.5 28.4736L17.3385 27.6715L30.1719 14.8382L28.4948 13.1611Z"
                                            fill="#00AB9F"></path>
                                    </svg></div>
                            </div>
                            <div class="comparison-chart-block">
                                <div class="comparison-chart-block-start"><svg
                                        class="component--home--comparison--chart__icon" width="40" height="40"
                                        viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="20" cy="20" r="19.25" fill="#E9EBEB" stroke="#738889"
                                            stroke-width="1.5">
                                        </circle>
                                        <path
                                            d="M12.707 11.293L11.293 12.707L18.5859 20L11.293 27.293L12.707 28.707L20 21.4141L27.293 28.707L28.707 27.293L21.4141 20L28.707 12.707L27.293 11.293L20 18.5859L12.707 11.293Z"
                                            fill="#738889"></path>
                                    </svg></div>
                                <div class="comparison-chart-block-center">
                                    <div class="comparison-chart-block-text">Не викликає "помилкового" почуття голоду та
                                        зайву
                                        вагу</div>
                                </div>
                                <div class="comparison-chart-block-end"><svg
                                        class="component--home--comparison--chart__icon" width="40" height="40"
                                        viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="20" cy="20" r="19.25" fill="#CCEEEC" stroke="#00AB9F"
                                            stroke-width="1.5">
                                        </circle>
                                        <path
                                            d="M28.4948 13.1611L16.5 25.1559L11.5052 20.1611L9.82812 21.8382L15.6615 27.6715L16.5 28.4736L17.3385 27.6715L30.1719 14.8382L28.4948 13.1611Z"
                                            fill="#00AB9F"></path>
                                    </svg></div>
                            </div>
                            <div class="comparison-chart-block">
                                <div class="comparison-chart-block-start"><svg
                                        class="component--home--comparison--chart__icon" width="40" height="40"
                                        viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="20" cy="20" r="19.25" fill="#E9EBEB" stroke="#738889"
                                            stroke-width="1.5">
                                        </circle>
                                        <path
                                            d="M12.707 11.293L11.293 12.707L18.5859 20L11.293 27.293L12.707 28.707L20 21.4141L27.293 28.707L28.707 27.293L21.4141 20L28.707 12.707L27.293 11.293L20 18.5859L12.707 11.293Z"
                                            fill="#738889"></path>
                                    </svg></div>
                                <div class="comparison-chart-block-center">
                                    <div class="comparison-chart-block-text">Зміцнює імунітет</div>
                                </div>
                                <div class="comparison-chart-block-end"><svg
                                        class="component--home--comparison--chart__icon" width="40" height="40"
                                        viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="20" cy="20" r="19.25" fill="#CCEEEC" stroke="#00AB9F"
                                            stroke-width="1.5">
                                        </circle>
                                        <path
                                            d="M28.4948 13.1611L16.5 25.1559L11.5052 20.1611L9.82812 21.8382L15.6615 27.6715L16.5 28.4736L17.3385 27.6715L30.1719 14.8382L28.4948 13.1611Z"
                                            fill="#00AB9F"></path>
                                    </svg></div>
                            </div>
                            <div class="comparison-chart-block">
                                <div class="comparison-chart-block-start"><svg
                                        class="component--home--comparison--chart__icon" width="40" height="40"
                                        viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="20" cy="20" r="19.25" fill="#E9EBEB" stroke="#738889"
                                            stroke-width="1.5">
                                        </circle>
                                        <path
                                            d="M12.707 11.293L11.293 12.707L18.5859 20L11.293 27.293L12.707 28.707L20 21.4141L27.293 28.707L28.707 27.293L21.4141 20L28.707 12.707L27.293 11.293L20 18.5859L12.707 11.293Z"
                                            fill="#738889"></path>
                                    </svg></div>
                                <div class="comparison-chart-block-center">
                                    <div class="comparison-chart-block-text">Не сприяє старінню</div>
                                </div>
                                <div class="comparison-chart-block-end"><svg
                                        class="component--home--comparison--chart__icon" width="40" height="40"
                                        viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="20" cy="20" r="19.25" fill="#CCEEEC" stroke="#00AB9F"
                                            stroke-width="1.5">
                                        </circle>
                                        <path
                                            d="M28.4948 13.1611L16.5 25.1559L11.5052 20.1611L9.82812 21.8382L15.6615 27.6715L16.5 28.4736L17.3385 27.6715L30.1719 14.8382L28.4948 13.1611Z"
                                            fill="#00AB9F"></path>
                                    </svg></div>
                            </div>
                            <div class="comparison-chart-block">
                                <div class="comparison-chart-block-start"><svg
                                        class="component--home--comparison--chart__icon" width="40" height="40"
                                        viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="20" cy="20" r="19.25" fill="#E9EBEB" stroke="#738889"
                                            stroke-width="1.5">
                                        </circle>
                                        <path
                                            d="M12.707 11.293L11.293 12.707L18.5859 20L11.293 27.293L12.707 28.707L20 21.4141L27.293 28.707L28.707 27.293L21.4141 20L28.707 12.707L27.293 11.293L20 18.5859L12.707 11.293Z"
                                            fill="#738889"></path>
                                    </svg></div>
                                <div class="comparison-chart-block-center">
                                    <div class="comparison-chart-block-text">Не шкодить серцево-судинній системі</div>
                                </div>
                                <div class="comparison-chart-block-end"><svg
                                        class="component--home--comparison--chart__icon" width="40" height="40"
                                        viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="20" cy="20" r="19.25" fill="#CCEEEC" stroke="#00AB9F"
                                            stroke-width="1.5">
                                        </circle>
                                        <path
                                            d="M28.4948 13.1611L16.5 25.1559L11.5052 20.1611L9.82812 21.8382L15.6615 27.6715L16.5 28.4736L17.3385 27.6715L30.1719 14.8382L28.4948 13.1611Z"
                                            fill="#00AB9F"></path>
                                    </svg></div>
                            </div>
                            <div class="comparison-chart-block">
                                <div class="comparison-chart-block-start"><svg
                                        class="component--home--comparison--chart__icon" width="40" height="40"
                                        viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="20" cy="20" r="19.25" fill="#E9EBEB" stroke="#738889"
                                            stroke-width="1.5">
                                        </circle>
                                        <path
                                            d="M12.707 11.293L11.293 12.707L18.5859 20L11.293 27.293L12.707 28.707L20 21.4141L27.293 28.707L28.707 27.293L21.4141 20L28.707 12.707L27.293 11.293L20 18.5859L12.707 11.293Z"
                                            fill="#738889"></path>
                                    </svg></div>
                                <div class="comparison-chart-block-center">
                                    <div class="comparison-chart-block-text">Не позбавляє організм кальцію та вітамінів
                                        групи B
                                    </div>
                                </div>
                                <div class="comparison-chart-block-end"><svg
                                        class="component--home--comparison--chart__icon" width="40" height="40"
                                        viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="20" cy="20" r="19.25" fill="#CCEEEC" stroke="#00AB9F"
                                            stroke-width="1.5">
                                        </circle>
                                        <path
                                            d="M28.4948 13.1611L16.5 25.1559L11.5052 20.1611L9.82812 21.8382L15.6615 27.6715L16.5 28.4736L17.3385 27.6715L30.1719 14.8382L28.4948 13.1611Z"
                                            fill="#00AB9F"></path>
                                    </svg></div>
                            </div>
                        </div>
                        <div class="comparison-subtitle">
                            <p class="comparison-subtitle-text">Мед допоможе побороти залежність від цукру. Його можна
                                додавати, як
                                підсолоджувач, в чай та каву а також при приготуванні страв та випічки.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section data-aos="fade-up" class="feedbacks" id="feedbacks-a">
            <div class="container">

                <div class="title-wrap">
                    <h2 class="cream-title section-title">Відгуки</h2>
                </div>

                <div class="feedback-container">
                    <div data-aos="fade-up" class="phone-container">
                        <ul class="screenshot-list screen-slider">
                            <li class="screenshot-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feedbacks/photo_2022-07-21_19-29-57.jpg" class="screen-img" alt="Відгук">
                            </li>
                            <li class="screenshot-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feedbacks/photo_2022-07-21_19-30-49.jpg" class="screen-img" alt="Відгук">
                            </li>
                            <li class="screenshot-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feedbacks/photo_2022-07-21_19-30-59.jpg" class="screen-img" alt="Відгук">
                            </li>
                        </ul>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone_3.png" width="325" height="670" class="phone-img" alt="Phone">
                    </div>

                    <div data-aos="fade-up" class="onsite-feedback">
                        <div class="onsite-feedback-name">Леся Українка</div>
                        <div class="onsite-feedback-stars">&#9733;&#9733;&#9733;&#9733;&#9734;</div>
                        <div class="onsite-feedback-date">23 Квітня 2023</div>
                        <div class="onsite-feedback-photo"><img class="onsite-feedback-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/honey-feedback.jpg"
                                alt=""></div>
                        <div class="onsite-feedback-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Inventore quaerat sapiente minus culpa id recusandae deserunt ab architecto sit quia soluta
                            maxime, nihil illo odit facilis atque repudiandae doloremque. Voluptatibus.</div>
                        <div class="onsite-feedback-add"><button
                                class="onsite-feedback-button send-feedback btn-add-bin">Залишити відгук</button></div>
                    </div>

                    <div data-aos="fade-up" class="add-feedback">
                        <form class="add-feedback-form" action="" method="post" name="feedback-form"
                            enctype="multipart/form-data">
                            <div class="feedback-form-row">
                                <label for="feedback-name">Ім'я<span class="red-star">*</span></label>
                                <input type="text" name="fb-name" required>
                            </div>
                            <div class="feedback-form-row">
                                <label for="fb-surname">Прізвище</label>
                                <input type="text" name="fb-surname">
                            </div>
                            <div class="feedback-form-row">
                                <label for="fb-email">Email</label>
                                <input type="email" name="fb-email">
                            </div>
                            <div class="feedback-form-row">
                                <label for="fb-phone">Телефон</label>
                                <input type="number" name="fb-phone">
                            </div>
                            <div class="feedback-form-row">
                                <textarea class="feedback-form-textarea" name="fb-text" id="" cols="30" rows="10"
                                    placeholder="Ваш відгук" required></textarea>
                            </div>
                            <div class="feedback-form-row">
                                <label for="fb-photo">Фото</label>
                                <input class="fb-photo" type="file" name="fb-photo" accept="image/*">
                            </div>
                            <div class="feedback-form-row">
                                <button class="send-feedback btn-add-bin" name="fb-form-submit"
                                    value="submited">Відправити</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section data-aos="fade-up" class="blog">
            <div class="container">

                <div class="title-wrap">
                    <h2 class="cream-title section-title">Блог</h2>
                </div>

                <ul class="blog-list">
                    <li data-aos="fade-up" class="blog-item">
                        <div class="blog-item-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/apiary.jpg" alt="" class="blog-item-ima"></div>
                        <h3 class="blog-item-title">Наша пасіка</h3>
                        <div class="blog-item-descr">
                            <p class="blog-item-descr-text">Детально про нашу пасіку та процес виробництва</p>
                            <a href="" class="blog-item-link">Читати</a>
                        </div>
                    </li>
                    <li data-aos="fade-up" class="blog-item">
                        <div class="blog-item-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/medohonka.jpg" alt="" class="blog-item-ima"></div>
                        <h3 class="blog-item-title">Наш цех</h3>
                        <div class="blog-item-descr">
                            <p class="blog-item-descr-text">Детально про наш цех та процес приготування ваших улюблених
                                міксів</p>
                            <a href="" class="blog-item-link">Читати</a>
                        </div>
                    </li>
                    <li data-aos="fade-up" class="blog-item">
                        <div class="blog-item-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/nuts.png" alt="" class="blog-item-ima"></div>
                        <h3 class="blog-item-title">Користь горіхів</h3>
                        <div class="blog-item-descr">
                            <p class="blog-item-descr-text">Все що потрібно знати про цілющі властивості горіхів</p>
                            <a href="" class="blog-item-link">Читати</a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section data-aos="fade-up" class="order" id="order-a">
            <div class="container">


                <div class="title-wrap title-wrap-small">
                    <h2 class="cream-title section-title">Оплата і доставка</h2>

                    <!-- <div class="owl-nav">

                        <ul class="top-product-list">
                            <li class="top-product-item"><a href="">Найкращі</a></li>
                            <li class="top-product-item"><a href="">Знижки</a></li>
                            <li class="top-product-item"><a href="">Останні</a></li>
                        </ul>
                        <div class="owl-nav-buttons">
                            <button type="button" class="owl-prev"><i
                                    class="fa fa-angle-left"></i></button>
                            <button type="button" class="owl-next"><i
                                    class="fa fa-angle-right"></i></button>
                        </div>
                    </div> -->
                </div>

                <div class="wrapper">

                    <dl class="payment-list">
                        <div data-aos="fade-up" class="payment-item-wrap">
                            <dt class="payment-item">
                                <img class="payment_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/cash_ico.svg" width="46" alt="Ico">
                                <p>При отриманні</p>
                            </dt>
                            <dd class="payment-description">Оплата при отриманні можлива, як при доставці на відділення
                                Нової
                                Пошти або Укрпошти, так і при
                                адресній доставці кур'єром. При такому способі оплати покупець додатково оплачує комісію
                                за
                                переказ
                                коштів: тарифи вказані у розділі "Доставка".</dd>
                        </div>
                        <div data-aos="fade-up" class="payment-item-wrap">
                            <dt class="payment-item">
                                <img class="payment_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/card_ico.svg" width="46" height="46" alt="Ico">
                                <p>Онлайн на сайті</p>
                            </dt>
                            <dd class="payment-description">Оплата здійснюється на сайті картками Visa або Mastercard
                                будь-якого
                                українського банку через
                                системи Приват24 або LIQPAY. Надійність оплати забеспечує найбільший в Україні сервіс
                                миттєвих
                                платежів LIQPAY.</dd>
                        </div>
                        <div data-aos="fade-up" class="payment-item-wrap">
                            <dt class="payment-item">
                                <img class="payment_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/pryvat_24_ico.svg" width="46" height="46"
                                    alt="Ico">
                                <p>На картку ПриватБанку</p>
                            </dt>
                            <dd class="payment-description">При виборі цього способу оплати, після оформлення замовлення
                                вам
                                прийде
                                смс-повідомлення з номером
                                картки, на яку потрібно здійснити переказ.</dd>
                        </div>
                    </dl>
                    <dl class="delivery-list">
                        <div data-aos="fade-up" class="delivery-item-wrap">
                            <dt class="delivery-item">
                                <img class="payment_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/nova_poshta_ico.webp" width="46" height="46"
                                    alt="Ico">
                                <p>Нова Пошта</p>
                            </dt>
                            <dd class="delivery-descriprion">Вартість доставки по Україні від 63 грн. Комісія за
                                наложений
                                платіж:
                                20 грн. + 2% від суми
                                замовлення.</dd>
                        </div>
                        <div data-aos="fade-up" class="delivery-item-wrap">
                            <dt class="delivery-item">
                                <img class="payment_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/ukrposhta_ico.webp" width="46" height="46"
                                    alt="Ico">
                                <p>Укрпошта Експрес</p>
                            </dt>
                            <dd class="delivery-descriprion">Вартість доставки по Україні від 40 грн. Комісія за
                                наложений
                                платіж:
                                1% від суми замовлення, але не
                                менше ніж 10 грн.</dd>
                        </div>
                        <div data-aos="fade-up" class="delivery-item-wrap">
                            <dt class="delivery-item">
                                <img class="payment_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/delivery_ico.svg" width="46" height="46"
                                    alt="Ico">
                                <p>Кур'єром в руки</p>
                            </dt>
                            <dd class="delivery-descriprion">Вартість доставки по Україні згідно з тарифами Нової Пошти.
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </section>

        <section data-aos="fade-up" class="gallery" id="gallery-a">
            <div class="container">

                <div class="title-wrap">
                    <h2 class="cream-title section-title">Галерея</h2>
                </div>

                <ul data-aos="fade-up" class="gallery-list">
                    <li class="gallery-item"><img class="galery-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/insta/medoslav.ua_1.jpg" alt=""></li>
                    <li class="gallery-item"><img class="galery-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/insta/medoslav.ua_2.jpg" alt=""></li>
                    <li class="gallery-item"><img class="galery-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/insta/medoslav.ua_3.jpg" alt=""></li>
                    <li class="gallery-item"><img class="galery-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/insta/medoslav.ua_4.jpg" alt=""></li>
                    <li class="gallery-item"><img class="galery-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/insta/medoslav.ua_5.jpg" alt=""></li>
                    <li class="gallery-item"><img class="galery-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/insta/medoslav.ua_11.jpg" alt=""></li>
                    <li class="gallery-item"><img class="galery-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/insta/medoslav.ua_9.jpg" alt=""></li>
                    <li class="gallery-item"><img class="galery-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/insta/medoslav.ua_10.jpg" alt=""></li>
                </ul>
            </div>
        </section>

        <section data-aos="fade-up" data-aos="fade-up" class="faq">
            <div class="container">

                <div class="title-wrap title-wrap-small">
                    <h2 class="cream-title section-title">Запитання</h2>

                    <!-- <div class="owl-nav">

                        <ul class="top-product-list">
                            <li class="top-product-item"><a href="">Найкращі</a></li>
                            <li class="top-product-item"><a href="">Знижки</a></li>
                            <li class="top-product-item"><a href="">Останні</a></li>
                        </ul>
                        <div class="owl-nav-buttons">
                            <button type="button" class="owl-prev"><i
                                    class="fa fa-angle-left"></i></button>
                            <button type="button" class="owl-next"><i
                                    class="fa fa-angle-right"></i></button>
                        </div>
                    </div> -->
                </div>

                <div class="wrapper">

                    <div data-aos="fade-up" class="acor-container">
                        <input type="radio" name="acor" id="acor1" checked="checked">
                        <label for="acor1">Чому мед швидко або довго кристалізіється?</label>
                        <div class="acor-body">
                            <p>Кристалізація меду — природний процес. Тобто цей продукт не може постійно перебувати у
                                рідкому стані. Найдовше рідким залишається травневий мед, який вважають найдорожчим та
                                найкориснішим. Чим більше в меді фруктози та води,
                                тим він повільніше кристалізується. А ще кристалізація меду — це доказ його високої
                                якості. Під час його дозрівання (тобто кристалізації)
                                підвищується біологічна активність продукту.</p>
                        </div>

                        <input type="radio" name="acor" id="acor2">
                        <label for="acor2">Чи правда що мед не можна додавати в гарячі напої?</label>
                        <div class="acor-body">
                            <p>Мед не є отруйним, якщо його додати в чай. Попри поширену думку, що поєднання окропу та
                                меду може не лише знизити користь останнього,
                                але й спровокувати негативні зміни в людському організмі, це не має
                                ґрунтовного наукового підтвердження. Тож, хоча це може бути менш корисним,
                                це аж ніяк не токсично.</p>
                        </div>

                        <input type="radio" name="acor" id="acor3">
                        <label for="acor3">Чи можна давати мед немовлятам?</label>
                        <div class="acor-body">
                            <p>Пам’ятайте: давати мед дітям, молодшим ніж рік, небезпечно. Незначні кількості спор
                                бактерій групи клостридії
                                (нешкідливі для дітей старшого віку та дорослих) можуть викликати ботулізм у немовлят.
                                Є такі “батьківські прийоми” — обмазувати соску медом, щоб дитина більш охоче її брала
                                до рота. Цього не варто робити.</p>
                        </div>
                        <input type="radio" name="acor" id="acor4">
                        <label for="acor4">Як правильно зберігати мед?</label>
                        <div class="acor-body">
                            <p>Головне правило зберігання меду – дотримання температурного режиму (не вище +20 градусів
                                Цельсія).
                                Сонячні промені можуть бути небезпечні для меду тільки тим, що їх прямий вплив на банку
                                розігріє її.
                                Харчовий пластик інертний і ніяких отрут і токсинів в мед не виділяє. Тому, дотримуючись
                                температурний режим, мед можна зберігати як в скляній, так і в пластиковій тарі. Також
                                на зберігання ніяк не впливає прозорість ємності.
                                Що стосується холодильнику, то середня температура в ньому від +2 до +6 градусів, що
                                відповідає нормальній температурі зберігання меду. Властивостей своїх він не втратить.
                            </p>
                        </div>
                        <input type="radio" name="acor" id="acor5">
                        <label for="acor5">Чи правда що мед не має терміну придатності?</label>
                        <div class="acor-body">
                            <p>Мед вважається природним консервантом. Він довгий час не псується і може
                                використовуватися впродовж 10 років за зберігання в правильних умовах. З часом
                                відбувається кристалізація меду, тому він довго залишається в хорошому стані.

                                Проте це не означає, що мед не має терміну придатності. Мед
                                може окислятися. Особливо, якщо в банці буде міститися багато повітря. В такому разі він
                                втратить всі свої корисні властивості.

                                Тобто, якщо повністю ізолювати ласощі від впливу повітря, термін придатності може бути
                                дійсно довгим (до 2 тисяч років). Наприклад, саме стільки мед зберігався у гробниці
                                Тутанхамона. Вченими було виявлено, що цей продукт залишився повністю придатним до
                                вживання.
                            </p>
                        </div>
                        <input type="radio" name="acor" id="acor6">
                        <label for="acor6">Темний мед корисніший за світлий?</label>
                        <div class="acor-body">
                            <p>Колір меду залежить від складу нектару, а той в свою чергу залежить від медоносів,
                                географії збору, інтенсивності медозбору і погоди. Тому в більшій мірі колір меду
                                залежить від рослин, з яких бджола збирає нектар. Колір меду взагалі ніяк не впливає на
                                його користь, так само як і консистенція, смак і аромат.
                                А визначити більшу чи меншу корисність певного сорту продукту важко.</p>
                        </div>
                        <button class="send-feedback btn-add-bin faq-button">Запитати</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-form-section">
            <div class="container">
                <div class="wrapper">
                    <form class="contact-form" method="post" action="php/contact_form.php" name="contact-form">
                        <div class="contact-form-row">
                            <label for="get-name">Ім'я<span class="red-star">*</span></label>
                            <input id="get-name" type="text" name="name" required>
                        </div>
                        <div class="contact-form-row">
                            <label for="get-surname">Прізвище</label>
                            <input id="get-surname" type="text" name="surname">
                        </div>
                        <div class="contact-form-row">
                            <label for="get-email">Email<span class="red-star">*</span></label>
                            <input id="get-email" type="email" name="email" required>
                        </div>
                        <div class="contact-form-row">
                            <label for="get-phone">Телефон</label>
                            <input id="get-phone" type="number" name="phone">
                        </div>
                        <div class="contact-form-textarea">
                            <textarea class="question-textarea" name="question" placeholder="Ваше запитання"
                                id="get-question" cols="20" rows="5" required></textarea>
                            <button class="send-quseion btn-add-bin" name="contact-form-submit"
                                value="submited">Відправити</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section class="contacts" id="contacts-a">
            <div class="container">
                <div data-aos="fade-up" class="contacts-wrapper">
                    <div class="osmmap">
                        <div id="map"></div>
                    </div>
                    <div class="adress">
                        <div class="adress_wrap">
                            <p class="adress-field">Одеська область</p>
                            <p class="adress-field">смт Любашівка</p>
                            <p class="adress-field">вул. Завокзальна 7</p>
                            <p class="adress-field">+38(066)12-34-567</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <button class="up-button" type="button">
        ⇪
        <span class="visually-hidden">Наверх</span>
    </button>

    <?php get_footer(); ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick_settengs.js"></script>

    <script>AOS.init({
            once: true,
            duration: 800,
        });</script>
        
</body>

</html>