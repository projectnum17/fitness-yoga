<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Polezen_Theme
 */

get_header();
?>
    <!-- intro start -->
    <main class="main">
        <section class="intro">
            <div class="video">
                <video preload="auto" no-controls autoplay loop playsinline muted
                    src="<?php echo get_stylesheet_directory_uri();?>/assets/video/background.mp4"></video>
                <div class="video-overlay"></div>
            </div>
            <div class="container">
                <div class="intro__wrapper">

                    <h1 class="intro__title">Школа повітряної акробатики та пілонного спорту Pole Zen</h1>
                    <p class="intro__subtitle">
                        Місце, де викладають професіонали та чемпіони у таких напрямках, як Pole
                        Dance, Акробатика, Паркур, Повітряні дисципліни та багато іншого! У нашій школі Ви можете
                        зайнятися
                        своїм тілом та випробувати нові незвичні емоції!
                    </p>
                </div>
            </div>
        </section>
        <!-- intro end -->

        <!-- pupils start -->
        <section class="pupils">
            <div class="pupils__wrapper">
                <div class="container">
                    <h2 class="pupils__title">80% наших учнів починали свій шлях з нами без спортивного минулого!</h2>
                </div>
            </div>
        </section>
        <div class="buttons">
            <div class="container">
                <a href="#!" class="buttons__trainee">Записатися на тренування</a>
            </div>
        </div>
        <!-- pupils end -->

        <!-- towards start -->
        <section class="towards">
            <img class="towards__bg" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/towards_bg.png" alt="">
            <div class="towards__wrapper">
                <div class="container">
                    <h3 class="towards__title">Наші напрямки</h3>
                    <p class="towards__subtitle">Щодня ми працюємо, щоб зробити життя наших клієнтів кращим!</p>
                </div>
            </div>

            <!-- towards end -->

            <!-- cards start -->
            <div class="cards">
                <div class="container">
                    <div class="cards__block">

                        <!-- 1 -->
                        <div class="cards__block-card">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/cards_photo-1.webp" alt="Pole Sport">
                            <div class="cards__block-card_text">
                                <h3 class="cards__block-card_text-title">Pole Sport</h3>
                                <p class="cards__block-card_text-descr">
                                    Напрямок, основу якого складають трюки на пілоні та поруч із ним. На заняттях Ви
                                    підкачаєте всі групи м'язів, вивчите неймовірні трюки та їх комбінації, відкриєте
                                    нові
                                    можливості свого тіла!
                                </p>
                            </div>
                        </div>
                        <!-- 1 -->

                        <!-- 2 -->
                        <div class="cards__block-card">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/cards_photo-2.webp" alt="Aerial Silks">
                            <div class="cards__block-card_text">
                                <h3 class="cards__block-card_text-title">Aerial Silks</h3>
                                <p class="cards__block-card_text-descr">
                                    Граціозний напрямок циркового мистецтва, в якому силова акробатика органічно
                                    поєднується
                                    з хореографією та станом вільного польоту! Навчання гімнастики на повітряних
                                    полотнах не
                                    потребує спеціальної підготовки та не має вікових обмежень!
                                </p>
                            </div>
                        </div>
                        <!-- 2 -->

                        <!-- 3 -->
                        <div class="cards__block-card">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/cards_photo-3.webp" alt="Parkour">
                            <div class="cards__block-card_text">
                                <h3 class="cards__block-card_text-title">Parkour</h3>
                                <p class="cards__block-card_text-descr">
                                    Складовими паркуру є сила, швидкість, витривалість, спритність, баланс, акробатика.
                                    У
                                    нашій школі заняття паркуром адаптовані під безпечні умови: зали оснащені матами,
                                    поясом, страховиком, турниками та поролоновою ямою.
                                </p>
                            </div>
                        </div>
                        <!-- 3 -->

                        <!-- 4 -->
                        <div class="cards__block-card">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/cards_photo-4.webp" alt="Aerial Hoop">
                            <div class="cards__block-card_text">
                                <h3 class="cards__block-card_text-title">Aerial Hoop</h3>
                                <p class="cards__block-card_text-descr">
                                    Повітряна гімнастика на кільці – це красиві та граціозні елементи, переходи, зв'язки
                                    повітряного танцю та акробатики. Прекрасний баланс гнучкості та сили.
                                </p>
                            </div>
                        </div>
                        <!-- 4 -->

                        <!-- 5 -->
                        <div class="cards__block-card">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/cards_photo-5.webp" alt="Pole Exotic">
                            <div class="cards__block-card_text">
                                <h3 class="cards__block-card_text-title">Pole Exotic</h3>
                                <p class="cards__block-card_text-descr">
                                    Ніжний, жіночний та дуже сексуальний танець з
                                    пілоном! Якщо Ви прийшли на пілон
                                    насамперед розкріпачитися та розкрити в собі жіночність – то Вам, безперечно, сюди!
                                    Трюки в даному напрямку займають всього 30%, решта 70% - це витончені кроки,
                                    повороти,
                                    обігравання танцю цікавим чином
                                </p>
                            </div>
                        </div>
                        <!-- 5 -->

                        <!-- 6 -->
                        <div class="cards__block-card">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/cards_photo-6.webp" alt="Pole Kids + Stretching">
                            <div class="cards__block-card_text">
                                <h3 class="cards__block-card_text-title">Pole Kids + Stretching</h3>
                                <p class="cards__block-card_text-descr">
                                    Заняття на пілоні для дітей складаються з трьох частин: розминка, підкачування,
                                    робота з
                                    пілоном, розтяжці ж приділяється окрема година! Групи від 2 до 7 дітей. Вік дітей:
                                    віком
                                    від 4 до 14 років. У групах дітки займаються з 6 років, а молодшого віку лише
                                    індивідуально, оскільки в групах на такому снаряді це було б небезпечно.
                                </p>
                            </div>
                        </div>
                        <!-- 6 -->

                        <!-- 7 -->
                        <div class="cards__block-card">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/cards_photo-7.webp" alt="Stretching">
                            <div class="cards__block-card_text">
                                <h3 class="cards__block-card_text-title">Stretching</h3>
                                <p class="cards__block-card_text-descr">
                                    Особливий вид аеробіки, спрямований головним чином розтяжку м'язів тіла, розвиток
                                    гнучкості і еластичності. Займатися стретчингом можна у будь-якому віці, незалежно
                                    від
                                    рівня підготовки.
                                </p>
                            </div>
                        </div>
                        <!-- 7 -->

                        <!-- 8 -->
                        <div class="cards__block-card">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/cards_photo-8.webp" alt="Acrobatic">
                            <div class="cards__block-card_text">
                                <h3 class="cards__block-card_text-title">Acrobatic</h3>
                                <p class="cards__block-card_text-descr">
                                    Різновид гімнастики, що включає вправи на спритність, гнучкість, стрибучість, силу і
                                    балансування. Акробатика застосовується для тренування спортсменів різних видів
                                    спорту,
                                    тобто, по суті, це різні акробатичні елементи, що використовуються в тому чи іншому
                                    виді
                                    спорту.
                                </p>
                            </div>
                        </div>
                        <!-- 8 -->

                        <!-- 9 -->
                        <div class="cards__block-card">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/cards_photo-9.webp" alt="Heels Dance">
                            <div class="cards__block-card_text">
                                <h3 class="cards__block-card_text-title">Heels Dance</h3>
                                <p class="cards__block-card_text-descr">
                                    Хай Хіллс (High Heels) - це танець, який вибирають для себе люди, які люблять бути в
                                    самому центрі уваги. Серед усіх сучасних напрямів він чітко виділяється. А головна
                                    особливість – рухи виконуються на високих підборах.
                                </p>
                            </div>
                        </div>
                        <!-- 9 -->

                        <!-- 10 -->
                        <div class="cards__block-card">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/cards_photo-10.webp" alt="Alfagravity">
                            <div class="cards__block-card_text">
                                <h3 class="cards__block-card_text-title">Alfagravity</h3>
                                <p class="cards__block-card_text-descr">
                                    Тренування на спеціальному тренажері для розвитку здоров'я всього тіла! Навіть
                                    просто
                                    повисівши на мотузочках, не виконуючи вправ, лінії тіла витягуються під власною
                                    вагою
                                    людини, м'язи розслабляються, покращується кровопостачання головного мозку та
                                    мікроциркуляція кінцівок
                                </p>
                            </div>
                        </div>
                        <!-- 10 -->

                        <!-- 11 -->
                        <div class="cards__block-card">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/cards_photo-11.webp" alt="Aerial Hammock">
                            <div class="cards__block-card_text">
                                <h3 class="cards__block-card_text-title">Aerial Hammock</h3>
                                <p class="cards__block-card_text-descr">
                                    Повітряний гамак є петлю, закріплену в одне кріплення, обов'язково через обертальну
                                    машинку. Робоча довжина повітряного гамака становить 6 та більше метрів!
                                    <span>
                                        Трюки виконуються як у розправленому гамаку (а ширина його понад 2х м!), і у
                                        зібраному
                                        вигляді, як петлі!
                                    </span>

                                </p>
                            </div>
                        </div>
                        <!-- 11 -->

                        <!-- 12 -->
                        <div class="cards__block-card">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/cards_photo-12.webp" alt="Трикінг">
                            <div class="cards__block-card_text">
                                <h3 class="cards__block-card_text-title">Трикінг</h3>
                                <p class="cards__block-card_text-descr">
                                    Відносно новий спортивний рух, що є поєднанням рухів з бойових мистецтв, гімнастики,
                                    капоейри, брейкдансу та інших спортивних дисциплін для створення видовищної суміші з
                                    обертань у різних площинах.
                                </p>
                            </div>
                        </div>
                        <!-- 12 -->
                    </div>
                </div>
            </div>
        </section>
        <!-- cards end -->

        <!-- about -->
        <section class="about">
            <div class="container">
                <h3 class="about__title">Чому варто обрати саме нас?</h3>
                <div class="about__cards">
                    <!-- 1 -->
                    <div class="about__cards-item">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/done_icon.svg" alt="Done">
                        <h3 class="about__cards-item_title">Просторі та світлі зали!</h3>
                        <p class="about__cards-item_descr">
                            Три комфортні зали, розміром від 100 м2! Оснащені матами, килимками, потужною системою
                            кондиціювання та всім необхідним обладнанням для тренувань!
                        </p>
                    </div>
                    <!-- 1 -->

                    <!-- 2 -->
                    <div class="about__cards-item">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/done_icon.svg" alt="Done">
                        <h3 class="about__cards-item_title"> Знання та досвід – наші сильні сторони!</h3>
                        <p class="about__cards-item_descr">
                            Усі тренери школи є багаторазовими чемпіонами та призерами як Українських так і
                            Європейських Чемпіонатів! Тренери є творцями авторських майстер-класів, марафонів та
                            програм тренувань!
                        </p>
                    </div>
                    <!-- 2 -->

                    <!-- 3 -->
                    <div class="about__cards-item">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/done_icon.svg" alt="Done">
                        <h3 class="about__cards-item_title">Якість та комфорт!</h3>
                        <p class="about__cards-item_descr">
                            Наявність роздягальні з окремими шафками із замками, лаунж зони, кулера з питною водою.
                            Також у нас на стійці ви можете придбати все потрібне для занять.
                        </p>
                    </div>
                    <!-- 3 -->
                </div>
            </div>
        </section>
        <!-- about -->

        <!-- video -->
        <section class="video">
            <div class="container">
                <div class="video__wrapper">
                    <div class="video__item"></div>
                    <iframe class="video__element" src="https://www.youtube.com/embed/qSA4-Vh1SUs"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="video__text">
                    <p>Записатися на пробне заняття зараз та отримати знижку - 20% на перше заняття!</p>
                    <div class="buttons__wrapper">
                        <a href="#!" class="video__btn buttons__trainee">Записатися на тренування</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- video -->

        <!-- proud -->
        <section class="proud">
            <div class="container">
                <div class="proud__wrapper">

                    <div class="pop__up" id="pop_up">
                        <div class="pop__up-container">
                            <div class="pop__up-body" id="pop__up_body">
                                <!-- Slideshow container -->
                                <div class="slideshow-container">

                                    <!-- Full-width images with number and caption text -->
                                    <div class="mySlides fade">
                                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/form_bg.webp" style="width:100%">
                                    </div>

                                    <div class="mySlides fade">
                                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/form_bg.webp" style="width:100%">
                                    </div>

                                    <div class="mySlides fade">
                                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/form_bg.webp" style="width:100%">
                                    </div>

                                    <!-- Next and previous buttons -->
                                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                                </div>
                                <br>

                                <!-- The dots/circles -->
                                <div style="text-align:center">
                                    <span class="dot" onclick="currentSlide(1)"></span>
                                    <span class="dot" onclick="currentSlide(2)"></span>
                                    <span class="dot" onclick="currentSlide(3)"></span>
                                </div>
                                <div class="pop__up-close" id="pop_up_close">&#10006</div>
                            </div>
                        </div>
                    </div>

                    <h3 class="proud__title">Наші учні - наша гордість!</h3>
                    <a href="#!" class="pround__link" id="open_pop_up">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/proud_img.webp" alt="Our proud" class="proud__image">
                    </a>
                </div>
            </div>
        </section>
        <!-- proud -->

        <!-- testimonials -->
        <section class="testimonials">
            <div class="container">
                <div class="testimonials__text">
                    <h3 class="testimonials__title">300+ учнів нашої школи вже почали свій шлях у Світі повітряної
                        акробатики!</h3>
                    <p class="testimonials__descr">Їх результати надихають впровадити тренування в життя кожного!</p>
                </div>

                <div class="slider__wrapper">
                    <!-- slider -->
                    <div class="image-slider swiper-container">
                        <div class="image-slider__wrapper swiper-wrapper">
                            <!-- 1 -->
                            <div class="image-slider__slide swiper-slide">
                                <div class="first-slide image-slider__block">
                                    <div class="image-slider__block-test">
                                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/slide_people-1.png" alt="Anny"
                                            class="image-slider__block-people">
                                        <h3 class="image-slider__block-name">Anny</h3>
                                        <div class="image-slider__block-rating">
                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/star.svg" alt="Star">
                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/star.svg" alt="Star">
                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/star.svg" alt="Star">
                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/star.svg" alt="Star">
                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/star.svg" alt="Star">
                                        </div>
                                        <p class="image-slider__block-descr">Чудова студія! Багато напрямків на
                                            будь-який
                                            смак Тренера професіонали, дуже комфортні умови.</p>

                                    </div>
                                </div>
                            </div>
                            <!-- 1 -->

                            <!-- 2 -->
                            <div class="image-slider__slide swiper-slide">
                                <div class="second-slide image-slider__block">
                                    <div class="image-slider__block-test">
                                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/slide_people-2.png" alt="Katty"
                                            class="image-slider__block-people">
                                        <h3 class="image-slider__block-name">Katty</h3>
                                        <div class="image-slider__block-rating">
                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/star.svg" alt="Star">
                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/star.svg" alt="Star">
                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/star.svg" alt="Star">
                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/star.svg" alt="Star">
                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/star.svg" alt="Star">
                                        </div>
                                        <p class="image-slider__block-descr">Дуже подобається атмосфера, тренери та
                                            різноманітність тренувань. Йога взагалі супер
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- 2 -->

                            <!-- 3 -->
                            <div class="image-slider__slide swiper-slide">
                                <div class="second-slide image-slider__block">
                                    <div class="image-slider__block-test">
                                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/slide_people-3.png" alt="Betty"
                                            class="image-slider__block-people">
                                        <h3 class="image-slider__block-name">Betty</h3>
                                        <div class="image-slider__block-rating">
                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/star.svg" alt="Star">
                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/star.svg" alt="Star">
                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/star.svg" alt="Star">
                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/star.svg" alt="Star">
                                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/star.svg" alt="Star">
                                        </div>
                                        <p class="image-slider__block-descr">Відмінна студія з відмінними тренерами! 💪
                                            Багато різноманітних тренувань не тільки для дорослих.
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <!-- 3 -->
                        </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <!-- slider -->

                </div>
            </div>
        </section>
        <!-- testimonials -->

        <section class="form">
            <div class="container">
                <h4 class="form__title">Дійте без сумнівів, а якщо залишились питання - ми дамо Вам відповіді!</h4>
            </div>
            <!-- modal -->
            <div class="overlay js-overlay-thank-you">
                <div class="popup js-thank-you">
                    <div class="popup-text">
                        <h4>Ми звʼяжемося з Вами найближчим часом!</h4>
                        <p>
                            А поки запрошуємо вас приєднатися до нашої сторінки
                            <span>
                                <a href="#!">Instagram</a>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <!-- modal -->
            <div class="form__wrapper">
                <div class="form__wrapper-contact">
                    <form class="form" id="form" name="form">
                        <input class="form-field name" name="name" type="name" placeholder="Ім'я" required>
                        <input class="form-field phone" name="phone" type="phone" placeholder="Номер телефону" required>
                        <input class="form-field email" name="email" type="email" placeholder="Е-мейл" required>
                        <button class="form-button btn"><span class="text-button">Надіслати</span></button>
                    </form>
                </div>

            </div>
        </section>

    </main>


<?php
get_footer();
