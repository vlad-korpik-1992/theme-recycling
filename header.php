<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title("", true); ?></title>
</head>

<body>
    <header class="header">
        <div class="wrapper">
            <div class="header__box">
                <div class="logo">
                    <a class="logo__link" href="<?php echo site_url(); ?>">
                        <img class="logo__img" src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" alt="Home">
                    </a>
                </div>
                <nav class="menu">
                    <a href="#" class="menu__btn">
                        <span class="menu__btn-element"></span>
                    </a>
                    <ul class="menu__list">
                        <a href="#" class="menu__btn menu__btn--close">
                            <span class="menu__btn-element menu__btn-element_close"></span>
                        </a>
                        <li class="menu__list__items scrollto">
                            <a class="menu__link" href="#about">About Us</a>
                        </li>
                        <li class="menu__list__items scrollto">
                            <a class="menu__link" href="#recycling">Our Recycling Facility</a>
                        </li>
                        <li class="menu__list__items scrollto">
                            <a class="menu__link" href="#advantage">Our Advantage</a>
                        </li>
                        <li class="menu__list__items scrollto">
                            <a class="menu__link" href="#process">Our Process</a>
                        </li>
                        <li class="menu__list__items scrollto">
                            <a class="menu__link" href="#contacts">Contact Us</a>
                        </li>
                    </ul>
                </nav>
                <a class="header__link" href="tel:<?echo the_field('contact_info_phone', 7);?>">
                    <p class="header__link__content"><?echo the_field('contact_info_phone', 7);?></p>
                    <div class="header__link__circle">
                        <svg class="header__link__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 21">
                            <path d="M20.2514 16.3465L20.1535 16.0513C19.9215 15.3618 19.1611 14.6426 18.4625 14.4531L15.8769 13.7468C15.1758 13.5561 14.1756 13.8126 13.6626 14.3255L12.7269 15.2613C9.32613 14.3423 6.65944 11.6756 5.74175 8.27549L6.67754 7.3397C7.19054 6.8267 7.447 5.82785 7.25624 5.12669L6.55121 2.53988C6.36046 1.84001 5.63996 1.07959 4.95171 0.850143L4.65657 0.750909C3.967 0.521466 2.98357 0.753507 2.47062 1.26646L1.07086 2.66749C0.820799 2.91624 0.660978 3.62771 0.660978 3.6303C0.61202 8.07439 2.3546 12.3561 5.49816 15.4997C8.63401 18.6355 12.8996 20.3755 17.3308 20.3382C17.354 20.3382 18.0861 20.1809 18.3361 19.9321L19.7359 18.5324C20.2488 18.0194 20.4808 17.0361 20.2514 16.3465Z" fill="white"></path>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </header>
