<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kr2a
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <!-- Disable screen scaling-->
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, user-scalable=0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
    <div class="margin">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center justify-content-between logo-lang">
            <div class="logo-top">
                <a class="logo" href="#preview-swiper">KR2A</a>
            </div>
            <div class="d-flex language">
                <div class="d-flex align-items-center">
                    <span class="link-lang">RU</span>
                </div>
                <div class="d-flex align-items-center">
                    <a class="link-lang" href="https://kr2a.com.ua/">UKR</a>
                </div>
            </div>
            </div>
            <nav>
                <ul class="d-flex justify-content-between">
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
            <div class="button-burger btn btn-primary" data-bs-toggle="modal" data-bs-target="#burgerModal">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 10V11.5H26V10H6ZM6 15.25V16.75H26V15.25H6ZM6 20.5V22H26V20.5H6Z" fill="#EE1C25"/>
                </svg>
            </div>
        </div>
    </div>
</header>
<div class="modal fade" id="burgerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="margin">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo-top">
                            <a class="logo" href="#">KR2A</a>
                        </div>
                        <div class="button-burger" data-bs-toggle="modal" data-bs-target="#burgerModal">
                            <img alt="certification" src="<?= get_template_directory_uri() ?>/assets/img/close.svg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <nav>
                    <ul class="d-flex flex-column justify-content-between align-items-end">
                        <li class="nav-text" data-bs-toggle="modal" data-bs-target="#burgerModal">
                            <a href="#benefits">Преимущества</a>
                        </li>
                        <li class="nav-text" data-bs-toggle="modal" data-bs-target="#burgerModal">
                            <a href="#box-chart">Характеристики</a>
                        </li>
                        <li class="nav-text" data-bs-toggle="modal" data-bs-target="#burgerModal">
                            <a href="#production-options">Применение</a>
                        </li>
                        <li class="nav-text" data-bs-toggle="modal" data-bs-target="#burgerModal">
                            <a href="#reviews">Отзывы</a>
                        </li>
                        <li class="nav-text" data-bs-toggle="modal" data-bs-target="#burgerModal">
                            <a href="#questions">Вопросы</a>
                        </li>
                        <li class="nav-text" data-bs-toggle="modal" data-bs-target="#burgerModal">
                            <a href="#form-contacts">Где купить</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>