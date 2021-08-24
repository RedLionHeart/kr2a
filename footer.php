<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kr2a
 */

$telega = get_field('telegram', 'options');
$viber = get_field('номер_viber', 'options');
$whatsapp = get_field('номер_viber', 'options');

?>
<footer>
    <div class="margin">
        <div class="logo-top-mob">
            <a class="logo" href="#preview-swiper">KR2A</a>
        </div>
        <div class="d-flex justify-content-between box-footer">
            <div class="logo-top">
                <a class="logo" href="#preview-swiper">KR2A</a>
            </div>
            <nav>
                <ul class="d-flex flex-column">
                    <li class="nav-text">
                        <a href="#benefits">Преимущества</a>
                    </li>
                    <li class="nav-text">
                        <a href="#box-chart">Характеристики</a>
                    </li>
                    <li class="nav-text">
                        <a href="#production-options">Применение</a>
                    </li>
                    <li class="nav-text">
                        <a href="#reviews">Отзывы</a>
                    </li>
                    <li class="nav-text">
                        <a href="#questions">Вопросы</a>
                    </li>
                    <li class="nav-text">
                        <a href="#form-contacts">Где купить</a>
                    </li>
                </ul>
            </nav>
            <div class="d-flex flex-column list-link">
                <a target="_blank" href="https://truefactory.expert/oborydovanie/istoricheskie-stili/avtonomnaya-ustanovka-pyleudaleniya-rupes-kr2a-tehnicheskie-harakteristiki/ ">Скачать лист технических характеристик Rupes KR2A</a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#formModalBuy">Скачать дополнительную информацию</a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#formModalRequest">Стоимость установки в вашем регионе</a>
            </div>
            <div class="d-flex flex-column tel">
                <p class="text-bold-18">Контакты</p>
                <p>Телефон</p>
                <div class="">
                    <?php $phone = get_field('номер_телефона_для_вызова', 'options');?>
                    <a href="tel:<?= parse_phone_number($phone);?>"><?= $phone;?></a>
                    <p>в Российской Федерации, Украине, Республике Беларусь, Республике Казахстан</p>
                </div>
                <div class="d-flex justify-content-between ico-box">
                    <?php if($telega):?>
                        <a target="_blank" href="https://t.me/<?=$telega;?>">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/telegram.svg"
                        </a>
                    <?php endif;?>
                    <?php if($viber):?>
                        <a target="_blank" href="viber://chat?number=%2B<?=$viber;?>">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/viber.svg">
                        </a>
                    <?php endif;?>
                    <?php if($whatsapp):?>
                        <a target="_blank" href="https://wa.me/+<?=$whatsapp;?>">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/whatsapp.svg">
                        </a>
                    <?php endif;?>
                </div>
                <div class="d-flex flex-column mail-mob">
                    <p class="text-bold-18">E-mail</p>
                    <a href="mailto:<?php the_field('e-mail', 'options');?>"><?php the_field('e-mail', 'options');?></a>
                </div>
            </div>
            <div class="d-flex flex-column mail">
                <p class="text-bold-18">E-mail</p>
                <a href="mailto:<?php the_field('e-mail', 'options');?>"><?php the_field('e-mail', 'options');?></a>
            </div>
        </div>
    </div>
</footer>
<div class="modal fade" id="formModalBuy" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="d-flex flex-column modal-body">
                <div class="button-burger btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/close.svg">
                </div>
                <div class="d-flex flex-column flexform">
                    <h2 class="h2">Скачать файл</h2>
                    <p>Для скачивания документа, пожалуйста, заполните форму</p>
                    <form action="/" class="d-flex flex-column formbuy" method="post">
                        <input type="hidden" name="email_to" value="<?= get_field('email_для_заявок', 'options');?>">
                        <div class="d-flex justify-content-between box-entryfield">
                            <div class="d-flex flex-column">
                                <div class="input-valid">
                                    <input class="entryfield text-mobile name" type="text"  autocomplete="off" pattern="([а-яА-Яa-zA-z]+)" id="name" placeholder="Фамилия Имя Отчество*" name="name">
                                    <p>Please enter valid name</p>
                                    <img class="valid-img" src="<?= get_template_directory_uri() ?>/assets/img/valid.svg">
                                    <img class="invalid-img" src="<?= get_template_directory_uri() ?>/assets/img/invalid.svg">
                                </div>
                                <div class="input-valid">
                                    <input class="entryfield text-mobile country" type="text"  autocomplete="off" id="country" placeholder="Страна*" name="country">
                                    <p>Please enter valid name</p>
                                    <img class="valid-img" src="<?= get_template_directory_uri() ?>/assets/img/valid.svg">
                                    <img class="invalid-img" src="<?= get_template_directory_uri() ?>/assets/img/invalid.svg">
                                </div>
                                <div class="input-valid">
                                    <input class="entryfield text-mobile organization" type="text"  autocomplete="off" id="organization" placeholder="Организация*" name="organization">
                                    <p>Please enter valid name</p>
                                    <img class="valid-img" src="<?= get_template_directory_uri() ?>/assets/img/valid.svg">
                                    <img class="invalid-img" src="<?= get_template_directory_uri() ?>/assets/img/invalid.svg">
                                </div>
                                <div class="input-valid">
                                    <input class="entryfield input-mask__phone text-mobile phone" type="text" id="phone" placeholder="Телефон*" name="phone">
                                    <p>Please enter valid name</p>
                                    <img class="valid-img" src="<?= get_template_directory_uri() ?>/assets/img/valid.svg">
                                    <img class="invalid-img" src="<?= get_template_directory_uri() ?>/assets/img/invalid.svg">
                                </div>
                                <div class="input-valid">
                                    <input class="entryfield input-mask__mail text-mobile mail" type="text" pattern="(\w+[.]?\w+?@\w+?\.[a-z]{2,4})" id="mail" placeholder="Email*" name="mail">
                                    <p>Please enter valid name</p>
                                    <img class="valid-img" src="<?= get_template_directory_uri() ?>/assets/img/valid.svg">
                                    <img class="invalid-img" src="<?= get_template_directory_uri() ?>/assets/img/invalid.svg">
                                </div>
                                <div class="d-flex align-items-center box-check-ico">
                                    <label class="check-ico" id="variable">
                                        <input class="consent" type="checkbox" onclick="check();" id="consent" value=""
                                               autocomplete="off" name="choice" required>
                                        <span class="d-flex align-items-center text-medium-16"></span>
                                    </label>
                                    <div class="d-flex flex-wrap">
                                        <p class="text-medium-16">Я согласен с</p>
                                        <a class="text-medium-16" target="_blank" href="<?= get_template_directory_uri() ?>/assets/src/files/kr2a_ru.pdf">Политикой конфиденциальности</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>Поля, помеченные <span>*</span>, являются обязательными для заполнения</p>
                        <button type="submit" name="submit" class="button-red" disabled>Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="formModalRequest" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="d-flex flex-column modal-body">
                <div class="button-burger btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/close.svg">
                </div>
                <div class="d-flex flex-column flexform">
                    <h2 class="h2">Где купить</h2>
                    <p>Для получения информации, пожалуйста, заполните форму</p>
                    <form action="/" class="d-flex flex-column ajax-form" method="post">
                        <input type="hidden" name="email_to" value="<?= get_field('email_для_заявок', 'options');?>">
                        <div class="d-flex justify-content-between box-entryfield">
                            <div class="d-flex flex-column">
                                <div class="input-valid">
                                    <input class="entryfield text-mobile name" type="text"  autocomplete="off" pattern="([а-яА-Яa-zA-z]+)" id="name" placeholder="Фамилия Имя Отчество*" name="name">
                                    <p>Please enter valid name</p>
                                    <img class="valid-img" src="<?= get_template_directory_uri() ?>/assets/img/valid.svg">
                                    <img class="invalid-img" src="<?= get_template_directory_uri() ?>/assets/img/invalid.svg">
                                </div>
                                <div class="input-valid">
                                    <input class="entryfield text-mobile country" type="text"  autocomplete="off" id="country" placeholder="Страна*" name="country">
                                    <p>Please enter valid name</p>
                                    <img class="valid-img" src="<?= get_template_directory_uri() ?>/assets/img/valid.svg">
                                    <img class="invalid-img" src="<?= get_template_directory_uri() ?>/assets/img/invalid.svg">
                                </div>
                                <div class="input-valid">
                                    <input class="entryfield text-mobile organization" type="text"  autocomplete="off" id="organization" placeholder="Организация*" name="organization">
                                    <p>Please enter valid name</p>
                                    <img class="valid-img" src="<?= get_template_directory_uri() ?>/assets/img/valid.svg">
                                    <img class="invalid-img" src="<?= get_template_directory_uri() ?>/assets/img/invalid.svg">
                                </div>
                                <div class="input-valid">
                                    <input class="entryfield input-mask__phone text-mobile phone" type="text" id="phone" placeholder="Телефон*" name="phone">
                                    <p>Please enter valid name</p>
                                    <img class="valid-img" src="<?= get_template_directory_uri() ?>/assets/img/valid.svg">
                                    <img class="invalid-img" src="<?= get_template_directory_uri() ?>/assets/img/invalid.svg">
                                </div>
                                <div class="input-valid">
                                    <input class="entryfield input-mask__mail text-mobile mail" type="text" pattern="(\w+[.]?\w+?@\w+?\.[a-z]{2,4})" id="mail" placeholder="Email*" name="mail">
                                    <p>Please enter valid name</p>
                                    <img class="valid-img" src="<?= get_template_directory_uri() ?>/assets/img/valid.svg">
                                    <img class="invalid-img" src="<?= get_template_directory_uri() ?>/assets/img/invalid.svg">
                                </div>
                                <div class="d-flex align-items-center box-check-ico">
                                    <label class="check-ico" id="variable">
                                        <input class="consent" type="checkbox" onclick="check();" id="consent" value=""
                                               autocomplete="off" name="choice" required>
                                        <span class="d-flex align-items-center text-medium-16"></span>
                                    </label>
                                    <div class="d-flex flex-wrap">
                                        <p class="text-medium-16">Я согласен с</p>
                                        <a class="text-medium-16" target="_blank" href="<?= get_template_directory_uri() ?>/assets/src/files/kr2a_ru.pdf">Политикой конфиденциальности</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>Поля, помеченные <span>*</span>, являются обязательными для заполнения</p>
                        <button type="submit" name="submit" class="button-red" disabled>Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="formModalThanks" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="d-flex flex-column modal-body">
                <div class="button-burger btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/close.svg">
                </div>
                <div class="d-flex flex-column flexform">
                    <h5 class="h5">Спасибо, наш менеджер свяжется c вами в ближайшее время!</h5>
                    <button class="button-red" data-bs-toggle="modal" data-bs-target="#formModalThanks">Ok</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="formModalDownload" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="d-flex flex-column modal-body">
                <div class="button-burger btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/close.svg">
                </div>
                <div class="d-flex flex-column flexform">
                    <div class="img-load">
                        <svg width="40" height="50" viewBox="0 0 40 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M34.0915 38.0002H5.90835C5.02475 38.0002 4.30835 37.2782 4.30835 36.3878V27.1622C4.30835 26.2718 5.02475 25.5498 5.90835 25.5498C6.79195 25.5498 7.50835 26.2718 7.50835 27.1622V34.775H32.4911V27.1622C32.4911 26.2718 33.2075 25.5498 34.0911 25.5498C34.9747 25.5498 35.6911 26.2718 35.6911 27.1622V36.3874C35.6915 37.2782 34.9751 38.0002 34.0915 38.0002Z" fill="#EE1C25"/>
                            <path d="M27.926 18.7864L21.13 25.632C20.95 25.8132 20.726 25.9544 20.474 26.0312C20.422 26.0472 20.37 26.0596 20.318 26.0716C20.218 26.0916 20.11 26.104 19.998 26.104C19.73 26.104 19.478 26.0396 19.258 25.9184C19.21 25.8944 19.166 25.866 19.122 25.8376C19.078 25.8096 19.034 25.7772 18.99 25.7408C18.946 25.7084 18.906 25.6724 18.87 25.632L12.074 18.7868C11.45 18.158 11.45 17.134 12.074 16.5052C12.702 15.8764 13.714 15.8764 14.338 16.5052L18.398 20.6012V3.6124C18.398 2.7216 19.118 2 19.998 2C20.882 2 21.598 2.7216 21.598 3.6124V20.6004L25.662 16.5044C26.286 15.8756 27.298 15.8756 27.926 16.5044C28.55 17.1336 28.55 18.1576 27.926 18.7864Z" fill="#EE1C25"/>
                        </svg>
                    </div>
                    <h5 class="h5">Спасибо, теперь вы можете скачать файл</h5>
                    <a target="_blank" href="<?= get_template_directory_uri() ?>/assets/src/files/Brochure_KR2A_RUPES.pdf" class="button-red">Скачать</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php wp_footer();?>

</body>
</html>
