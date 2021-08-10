<?php
/*
Template Name: Main
*/
get_header();
?>

    <section class="preview-swiper" id="preview-swiper">
        <div class="margin">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="d-flex slide1">
                            <div class="img-swiper">
                                <img src="<?= get_template_directory_uri() ?>/assets/img/imgswiper1.png">
                            </div>
                            <div class="d-flex flex-column align-items-center info-swiper">
                                <h5 class="h5">Время дать отпор шлифовальной пыли</h5>
                                <p class="text-medium-16">Узнайте, какое оборудование для
                                    удаления пыли оптимально для вашего производства</p>
                                <div class="d-flex align-items-center button-arrow">
                                    <div><a class="button-red" data-bs-toggle="modal"
                                            data-bs-target="#formModalRequest">Узнать больше</a></div>
                                    <div class="button-slide-next">
                                        <svg width="67" height="8" viewBox="0 0 67 8" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M66.3536 4.35355C66.5488 4.15829 66.5488 3.84171 66.3536 3.64645L63.1716 0.464466C62.9763 0.269204 62.6597 0.269204 62.4645 0.464466C62.2692 0.659728 62.2692 0.976311 62.4645 1.17157L65.2929 4L62.4645 6.82843C62.2692 7.02369 62.2692 7.34027 62.4645 7.53553C62.6597 7.7308 62.9763 7.7308 63.1716 7.53553L66.3536 4.35355ZM0 4.5L66 4.5V3.5L0 3.5L0 4.5Z"
                                                  fill="#EE1C25"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="d-flex slide2">
                            <div class="img-swiper">
                                <img src="<?= get_template_directory_uri() ?>/assets/img/imgswiper2.png">
                            </div>
                            <div class="d-flex flex-column align-items-center info-swiper">
                                <h5 class="h5">Время дать отпор шлифовальной пыли</h5>
                                <p class="text-medium-16">Узнайте, какое оборудование для
                                    удаления пыли оптимально для вашего производства</p>
                                <div class="d-flex align-items-center button-arrow">
                                    <div><a class="button-red" data-bs-toggle="modal"
                                            data-bs-target="#formModalRequest">Узнать больше</a></div>
                                    <div class="button-slide-prev">
                                        <svg width="67" height="8" viewBox="0 0 67 8" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M66.3536 4.35355C66.5488 4.15829 66.5488 3.84171 66.3536 3.64645L63.1716 0.464466C62.9763 0.269204 62.6597 0.269204 62.4645 0.464466C62.2692 0.659728 62.2692 0.976311 62.4645 1.17157L65.2929 4L62.4645 6.82843C62.2692 7.02369 62.2692 7.34027 62.4645 7.53553C62.6597 7.7308 62.9763 7.7308 63.1716 7.53553L66.3536 4.35355ZM0 4.5L66 4.5V3.5L0 3.5L0 4.5Z"
                                                  fill="#EE1C25"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--            <div class="swiper-pagination"></div>-->
                <!--            <div class="swiper-button-prev"></div>-->
                <!--            <div class="swiper-button-next"></div>-->
            </div>
        </div>
    </section>
    <section class="rupes-kr2a">
        <div class="d-flex justify-content-around align-items-center margin">
            <div class="img-rupes">
                <!--            <img src="<?= get_template_directory_uri() ?>/assets/img/rupes.png">-->
                <picture class="border-paper">
                    <source srcset="<?= get_template_directory_uri() ?>/assets/img/rupes_mob.png"
                            media="(max-width: 991px)">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/rupes.png">
                </picture>
            </div>
            <div class="d-flex flex-column txt-rupes">
                <h3 class="h3-source">Турбина Rupes KR2A</h3>
                <p class="text-medium-16">лучшее индустриальное решение для удаления шлифовальной пыли</p>
            </div>
        </div>
        <div class="margin">
            <div class="d-flex flex-column kr2a">
                <p>KR2A</p>
                <p class="text-medium-16">ПОЗВОЛИТ ВАМ ПОВЫСИТЬ КАЧЕСТВО ШЛИФОВАНИЯ И СОКРАТИТЬ ЗАТРАТЫ</p>
                <div class="arrow-red">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/arrow_red.svg">
                </div>
            </div>
        </div>
    </section>
    <section class="benefits" id="benefits">
        <div class="margin">
            <h2 class="h2">Преимущества</h2>
            <div class="box-swiper-pagination">
                <div class="d-flex align-items-center justify-content-evenly box-swiper-button">
                    <div class="swiper-button-prev">
                        <div class="arrow-swiper2">
                            <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.17676 1.77037L9.35794 4.949H0V6.85026H9.35794L6.17676 10.0289L7.52227 11.3734L13 5.89963L7.52227 0.426025L6.17676 1.77037Z"
                                      fill="#4F4F4F"/>
                            </svg>
                        </div>
                    </div>
                    <?php
                    $benefits = get_posts(array(
                        'post_type' => 'benefits',
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        'numberposts' => -1,
                    ));
                    ?>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php foreach ($benefits as $post):
                                setup_postdata($post);
                                $images = get_field('изображения'); ?>
                                <div class="swiper-slide">
                                    <div class="d-flex flex-column box-slide">
                                        <h3 class="h3"><?php the_title(); ?></h3>
                                        <p class="text-medium-16"><?php the_field('описание'); ?></p>
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-column box-img">
                                                <div class="img-slide">
                                                    <img src="<?= $images['изображения_1']; ?>">
                                                </div>
                                                <p class="description-slide"><?= $images['текст_изображения_1']; ?></p>
                                            </div>
                                            <div class="d-flex flex-column box-img">
                                                <div class="img-slide">
                                                    <img src="<?= $images['изображение_2']; ?>">
                                                </div>
                                                <p class="description-slide"><?= $images['текст_изображения_2']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                    <div class="swiper-button-next">
                        <div class="arrow-swiper2">
                            <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.17676 1.77037L9.35794 4.949H0V6.85026H9.35794L6.17676 10.0289L7.52227 11.3734L13 5.89963L7.52227 0.426025L6.17676 1.77037Z"
                                      fill="#4F4F4F"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="justify-content-evenly button-mob">
                    <div class="swiper-button-prev">
                        <div class="arrow-swiper2">
                            <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.17676 1.77037L9.35794 4.949H0V6.85026H9.35794L6.17676 10.0289L7.52227 11.3734L13 5.89963L7.52227 0.426025L6.17676 1.77037Z"
                                      fill="#4F4F4F"/>
                            </svg>
                        </div>
                    </div>
                    <div class="swiper-button-next">
                        <div class="arrow-swiper2">
                            <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.17676 1.77037L9.35794 4.949H0V6.85026H9.35794L6.17676 10.0289L7.52227 11.3734L13 5.89963L7.52227 0.426025L6.17676 1.77037Z"
                                      fill="#4F4F4F"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="d-flex flex-column box-chart" id="box-chart">
                <div class="img-chart">
                    <picture class="border-paper">
                        <source srcset="<?= get_template_directory_uri() ?>/assets/img/chart_mob.svg"
                                media="(max-width: 700px)">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/chart.svg">
                    </picture>
                    <div class="arrow-red">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/arrow_red.svg">
                    </div>
                </div>
                <div class="d-flex justify-content-between description-chart">
                    <p class="text-medium-16"><span></span>В турбинах не используются электрические
                        моторы, требующие замены щеток через каждые 800 часов работы;</p>
                    <p class="text-medium-16"><span></span>Использование мешков для сбора пыли в
                        турбине не является обязательным;</p>
                    <p class="text-medium-16"><span></span>Энергоэффективность турбины соответствует
                        требованиям европейских стандартов.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="buy">
        <div class="margin">
            <div class="d-flex justify-content-evenly">
                <button class="button-red" data-bs-toggle="modal" data-bs-target="#formModalRequest">Стоимость установки
                    в вашем регионе
                </button>
                <button class="button-white" data-bs-toggle="modal" data-bs-target="#formModalBuy">Скачать
                    дополнительную информацию
                </button>
            </div>
        </div>
    </section>
    <section class="video-container">
        <div class="d-flex margin">
            <div class="d-flex flex-column justify-content-center description-video">
                <h1 class="h1">Rupes KR2A</h1>
                <p class="text-medium-16">основные узлы и характеристики</p>
            </div>
            <div class="box-video">
                <div class="video__link">
                    <img class="video__media" src="https://i.ytimg.com/vi/cdf1OpL7-_4/maxresdefault.jpg">
                </div>
                <button class="video__button" aria-label="запустить видео">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="31.5" stroke="white"/>
                        <path d="M37 32.5L29.5 36.3971L29.5 28.6029L37 32.5Z" fill="white"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>
    <section class="download-specifications">
        <div class="margin">
            <div class="box-arrow">
                <!--                <button class="button-white button-big" data-bs-toggle="modal" data-bs-target="#formModalBuy">Скачать лист технических характеристик Rupes KR2A</button>-->
                <a target="_blank"
                   href="https://truefactory.expert/oborydovanie/istoricheskie-stili/avtonomnaya-ustanovka-pyleudaleniya-rupes-kr2a-tehnicheskie-harakteristiki/ "
                   class="button-white button-big">Скачать лист технических характеристик Rupes KR2A</a>
                <div class="arrow-red">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/arrow_red.svg">
                </div>
            </div>
        </div>
    </section>
    <section class="production-options" id="production-options">
        <div class="margin">
            <div class="d-flex flex-column">
                <h2 class="h2-source">Для каких производств подойдет установка KR2A?</h2>
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-column box-img">
                        <div class="img-production">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/productions1.jpg">
                        </div>
                        <p class="text-bold-18">Предприятия по производству мебели
                            и столярно-строительных изделий</p>
                    </div>
                    <div class="d-flex flex-column box-img">
                        <div class="img-production">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/productions2.jpg">
                        </div>
                        <p class="text-bold-18">Предприятия производства и ремонта
                            автомобильного и железнодорожного транспорта</p>
                    </div>
                    <div class="d-flex flex-column box-img">
                        <div class="img-production">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/productions3.jpg">
                        </div>
                        <p class="text-bold-18">Мастерские строительства и
                            ремонта водного транспорта</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="discount">
        <div class="margin">
            <div class="box-arrow">
                <button class="button-red button-big" data-bs-toggle="modal" data-bs-target="#formModalRequest">Получить
                    скидку при заказе через сайт
                </button>
                <div class="arrow-red">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/arrow_red.svg">
                </div>
            </div>
        </div>
    </section>
    <section class="reviews" id="reviews">
        <div class="margin">
            <div class="d-flex flex-column">
                <h2 class="h2">Отзывы</h2>
                <div class="box-swiper-pagination">
                    <div class="d-flex align-items-center justify-content-evenly box-swiper-button">
                        <div class="swiper-button-prev">
                            <div class="arrow-swiper2">
                                <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.17676 1.77037L9.35794 4.949H0V6.85026H9.35794L6.17676 10.0289L7.52227 11.3734L13 5.89963L7.52227 0.426025L6.17676 1.77037Z"
                                          fill="#4F4F4F"/>
                                </svg>
                            </div>
                        </div>
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <?php
                                $reviews = get_posts(array(
                                    'post_type' => 'reviews',
                                    'post_status' => 'publish',
                                    'orderby' => 'date',
                                    'order' => 'ASC',
                                    'numberposts' => -1,
                                ));
                                ?>
                                <?php foreach ($reviews as $post):
                                    setup_postdata($post);

                                    $video_link = get_field('ссылка_на_youtube');
                                    preg_match('/src="(.+?)"/', $video_link, $matches);
                                    $src = $matches[1];
                                    $cuted_url_video = parse_video_youtube($src); ?>
                                    <div class="swiper-slide">

                                        <div class="d-flex flex-column align-items-center box-img">
                                            <div class="box-video">

                                                <div class="video__link">
                                                    <?php if (get_field('собственное_превью')):; ?>
                                                        <img data-src="<?= $cuted_url_video; ?>" class="video__media"
                                                             src="<?=get_field('превью');?>">
                                                    <?php else: ?>
                                                        <img data-src="<?= $cuted_url_video; ?>" class="video__media"
                                                             src="https://i.ytimg.com/vi/<?= $cuted_url_video; ?>/maxresdefault.jpg">
                                                    <?php endif; ?>
                                                </div>
                                                <button class="video__button" aria-label="запустить видео">
                                                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="32" cy="32" r="31.5" stroke="white"/>
                                                        <path d="M37 32.5L29.5 36.3971L29.5 28.6029L37 32.5Z"
                                                              fill="white"/>
                                                    </svg>
                                                </button>
                                            </div>
                                            <p class="text-bold-18"><?php the_title(); ?></p>
                                        </div>

                                    </div>
                                <?php endforeach;
                                wp_reset_postdata() ?>
                            </div>
                        </div>
                        <div class="swiper-button-next">
                            <div class="arrow-swiper2">
                                <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.17676 1.77037L9.35794 4.949H0V6.85026H9.35794L6.17676 10.0289L7.52227 11.3734L13 5.89963L7.52227 0.426025L6.17676 1.77037Z"
                                          fill="#4F4F4F"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="justify-content-evenly button-mob">
                        <div class="swiper-button-prev">
                            <div class="arrow-swiper2">
                                <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.17676 1.77037L9.35794 4.949H0V6.85026H9.35794L6.17676 10.0289L7.52227 11.3734L13 5.89963L7.52227 0.426025L6.17676 1.77037Z"
                                          fill="#4F4F4F"/>
                                </svg>
                            </div>
                        </div>
                        <div class="swiper-button-next">
                            <div class="arrow-swiper2">
                                <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.17676 1.77037L9.35794 4.949H0V6.85026H9.35794L6.17676 10.0289L7.52227 11.3734L13 5.89963L7.52227 0.426025L6.17676 1.77037Z"
                                          fill="#4F4F4F"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="questions" id="questions">
        <div class="margin">
            <div class="d-flex flex-column">
                <div class="box-arrow">
                    <h2 class="h2">Часто задаваемые вопросы</h2>
                    <div class="arrow-red">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/arrow_red.svg">
                    </div>
                </div>
                <div class="d-flex flex-column container-collapse">
                    <?php
                    $questions = get_posts(array(
                        'post_type' => 'questions',
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        'numberposts' => -1,
                    ));
                    ?>
                    <?php foreach ($questions as $post): ?>
                        <div class="box-collapse">
                            <div class="d-flex button-collapse">
                                <div class="button-plus">
                                    <div></div>
                                    <div></div>
                                </div>
                                <p class="text-mobile"><?php the_title(); ?></p>
                            </div>
                            <p class="text-mobile open-collapse"><?php the_field('текст_раскрытия_вопроса'); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="form-contacts" id="form-contacts">
        <div class="margin">
            <div class="d-flex box-form-contacts">
                <div class="d-flex flex-column flexform">
                    <h2 class="h2">Где купить</h2>
                    <form action="/" class="d-flex flex-column ajax-form" method="post">
                        <input type="hidden" name="email_to" value="<?= get_field('email_для_заявок', 'options'); ?>">
                        <div class="d-flex justify-content-between box-entryfield">
                            <div class="d-flex flex-column">
                                <div class="input-valid">
                                    <input class="entryfield text-mobile name" type="text" autocomplete="off"
                                           pattern="([а-яА-Яa-zA-z]+)" id="name" placeholder="Фамилия Имя Отчество*"
                                           name="name">
                                    <p>Please enter valid name</p>
                                    <img class="valid-img"
                                         src="<?= get_template_directory_uri() ?>/assets/img/valid.svg">
                                    <img class="invalid-img"
                                         src="<?= get_template_directory_uri() ?>/assets/img/invalid.svg">
                                </div>
                                <div class="input-valid">
                                    <input class="entryfield text-mobile country" type="text" autocomplete="off"
                                           id="country" placeholder="Страна*" name="country">
                                    <p>Please enter valid name</p>
                                    <img class="valid-img"
                                         src="<?= get_template_directory_uri() ?>/assets/img/valid.svg">
                                    <img class="invalid-img"
                                         src="<?= get_template_directory_uri() ?>/assets/img/invalid.svg">
                                </div>
                                <div class="input-valid">
                                    <input class="entryfield text-mobile organization" type="text" autocomplete="off"
                                           id="organization" placeholder="Организация*" name="organization">
                                    <p>Please enter valid name</p>
                                    <img class="valid-img"
                                         src="<?= get_template_directory_uri() ?>/assets/img/valid.svg">
                                    <img class="invalid-img"
                                         src="<?= get_template_directory_uri() ?>/assets/img/invalid.svg">
                                </div>
                                <div class="input-valid">
                                    <input class="entryfield input-mask__phone text-mobile phone" type="text" id="phone"
                                           placeholder="Телефон*" name="phone">
                                    <p>Please enter valid name</p>
                                    <img class="valid-img"
                                         src="<?= get_template_directory_uri() ?>/assets/img/valid.svg">
                                    <img class="invalid-img"
                                         src="<?= get_template_directory_uri() ?>/assets/img/invalid.svg">
                                </div>
                                <div class="input-valid">
                                    <input class="entryfield input-mask__mail text-mobile mail" type="text"
                                           pattern="(\w+[.]?\w+?@\w+?\.[a-z]{2,4})" id="mail" placeholder="Email*"
                                           name="mail">
                                    <p>Please enter valid name</p>
                                    <img class="valid-img"
                                         src="<?= get_template_directory_uri() ?>/assets/img/valid.svg">
                                    <img class="invalid-img"
                                         src="<?= get_template_directory_uri() ?>/assets/img/invalid.svg">
                                </div>
                                <label class="check-ico" id="variable">
                                    <input class="consent" type="checkbox" onclick="check();" id="consent" value=""
                                           autocomplete="off" name="choice" required>
                                    <span class="d-flex align-items-center text-medium-16">Я согласен с Политикой конфиденциальности</span>
                                </label>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="button-red" disabled>Отправить</button>
                    </form>
                </div>
                <div class="d-flex flex-column contacts">
                    <h2 class="h2">Контакты</h2>
                    <div class="d-flex flex-column tel-mail">
                        <div class="d-flex flex-column tel">
                            <p class="text-bold-18">Телефон</p>
                            <div class="">
                                <?php $phone = get_field('номер_телефона_для_вызова', 'options'); ?>
                                <a href="tel:<?= parse_phone_number($phone); ?>"><?= $phone; ?></a>
                                <p>в Российской Федерации, Украине, Республике Беларусь, Республике Казахстан</p>
                            </div>
                            <?php
                            $telega = get_field('telegram', 'options');
                            $viber = get_field('номер_viber', 'options');
                            $whatsapp = get_field('номер_viber', 'options');
                            ?>
                            <div class="d-flex justify-content-between ico-box">
                                <?php if ($telega): ?>
                                    <a target="_blank" href="https://t.me/<?= $telega; ?>">
                                        <img src="<?= get_template_directory_uri() ?>/assets/img/telegram.svg"
                                    </a>
                                <?php endif; ?>
                                <?php if ($viber): ?>
                                    <a target="_blank" href="viber://chat?number=%2B<?= $viber; ?>">
                                        <img src="<?= get_template_directory_uri() ?>/assets/img/viber.svg">
                                    </a>
                                <?php endif; ?>
                                <?php if ($whatsapp): ?>
                                    <a target="_blank" href="https://wa.me/+<?= $whatsapp; ?>">
                                        <img src="<?= get_template_directory_uri() ?>/assets/img/whatsapp.svg">
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="d-flex flex-column mail">
                            <p class="text-bold-18">E-mail</p>
                            <a href="mailto:<?php the_field('e-mail', 'options'); ?>"><?php the_field('e-mail', 'options'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="button-up">
        <a href="#preview-swiper" class="d-flex flex-column align-items-center">
            <div class="arrow-up">
                <!--            <img src="<?= get_template_directory_uri() ?>/assets/img/arrow_up.svg">-->
                <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.33506 7.981L5.83279 4.56946L5.79203 14.6466L7.87587 14.655L7.91663 4.57791L11.3866 8.01769L12.8661 6.57474L6.89057 0.651732L0.867475 6.5261L2.33506 7.981Z"
                          fill="#EE1C25"/>
                </svg>
            </div>
            <p>Наверх</p>
        </a>
    </section>


<?php

get_footer();
