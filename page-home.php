<?php
/**
  * Template Name: Main page
*/
?>
<?php get_header();?>
<section class="hero">
    <div class="wrapper">
        <div class="hero__box">
            <h1 class="section-head section-head--white"><?php single_post_title(); ?></h1>
            <? echo wpautop(the_content());?>
        </div>
        <form class="hero__form" id="hero__form">
            <span for="" class="form__title">Urgent car valuation</span>
            <input class="form__text" type="text" name="fullname" id="fullname" placeholder="Full Name">
            <input class="form__text" type="tel" name="phone" id="phone" placeholder="Phone number">
            <textarea class="form__textarea" name="note" id="note" cols="30" rows="40" placeholder="Note"></textarea>
            <button class="form__btn" id="form__btn-calculate" type="submit">
                <p class="form__btn__content">Calculate</p>
                <svg class="form__btn__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 24">
                    <path d="M2 10.5C1.17157 10.5 0.5 11.1716 0.5 12C0.5 12.8284 1.17157 13.5 2 13.5V10.5ZM34.0607 13.0607C34.6464 12.4749 34.6464 11.5251 34.0607 10.9393L24.5147 1.3934C23.9289 0.807611 22.9792 0.807611 22.3934 1.3934C21.8076 1.97919 21.8076 2.92893 22.3934 3.51472L30.8787 12L22.3934 20.4853C21.8076 21.0711 21.8076 22.0208 22.3934 22.6066C22.9792 23.1924 23.9289 23.1924 24.5147 22.6066L34.0607 13.0607ZM2 13.5H33V10.5H2V13.5Z"></path>
                </svg>
            </button>
            <div class="form__error error" id="hero-error"></div>
        </form>
        <div class="hero__diler">
            <img src="<?echo the_field('frst_screen_dealer_img');?>" alt="Best price in Melbourne">
        </div>
    </div>
    <img class="hero__traid" src="<?php bloginfo('template_url'); ?>/assets/img/tread.png" alt="">
</section>
<section class="about" id="about">
    <div class="wrapper">
        <img class="about__img" src="<?php bloginfo('template_url'); ?>/assets/img/about-us.png" alt="">
        <div class="about__box">
            <div class="about__item">
                <h2 class="section-head section-head--about-bottom"><?echo the_field('about_title');?></h2>
                <svg class="about__box__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 223 8">
                    <path d="M98 7V1L1 1.75V3.91667L98 7Z" fill="black" stroke="black"></path>
                    <path d="M125 7V1L222 1.75V3.91667L125 7Z" fill="black" stroke="black"></path>
                </svg>
            </div>
            <div class="about__content">
                <? echo wpautop(the_field('about_content'));?>
                <a class="about__link" href="<? echo the_field('about_file_my_best_price'); ?>" download>
                    <p>What's My Best Price</p>
                    <svg class="form__btn__icon form__btn__icon--white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 24">
                        <path d="M2 10.5C1.17157 10.5 0.5 11.1716 0.5 12C0.5 12.8284 1.17157 13.5 2 13.5V10.5ZM34.0607 13.0607C34.6464 12.4749 34.6464 11.5251 34.0607 10.9393L24.5147 1.3934C23.9289 0.807611 22.9792 0.807611 22.3934 1.3934C21.8076 1.97919 21.8076 2.92893 22.3934 3.51472L30.8787 12L22.3934 20.4853C21.8076 21.0711 21.8076 22.0208 22.3934 22.6066C22.9792 23.1924 23.9289 23.1924 24.5147 22.6066L34.0607 13.0607ZM2 13.5H33V10.5H2V13.5Z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="recycling" id="recycling">
    <div class="wrapper">
        <h2 class="section-head"><?echo the_field('our_recycling_facility_title');?></h2>
        <? echo wpautop(the_field('our_recycling_facility_content'));?>
        <div class="recycling__box">
            <div class="recycling__box__items--sizer"></div>
            <div class="recycling__box__items recycling__box__items--width1">
                <div class="recycling__box__cover" style="background-image: url(<?echo the_field('our_recycling_facility_block_pictures_1');?>)">
                    <div class="recycling__box__title recycling__box__title--first">
                        <span>01</span>
                        <p><? echo the_field('our_recycling_facility_block_title_1');?></p>
                    </div>
                </div>
            </div>
            <div class="recycling__box__items recycling__box__items--width2">
                <div class="recycling__box__cover recycling__box__cover--height" style="background-image: url(<?echo the_field('our_recycling_facility_block_pictures_2');?>)">
                    <div class="recycling__box__title recycling__box__title--lh">
                        <span>02</span>
                        <p><? echo the_field('our_recycling_facility_block_title_2');?></p>
                    </div>
                </div>
            </div>
            <div class="recycling__box__items recycling__box__items--width3">
                <div class="recycling__box__cover recycling__box__cover--height2" style="background-image: url(<?echo the_field('our_recycling_facility_block_pictures_3');?>)">
                    <div class="recycling__box__title recycling__box__title--lh">
                        <span>03</span>
                        <p><? echo the_field('our_recycling_facility_block_title_3');?></p>
                    </div>
                </div>
            </div>
            <div class="recycling__box__items recycling__box__items--width4">
                <div class="recycling__box__cover recycling__box__cover--height2" style="background-image: url(<?echo the_field('our_recycling_facility_block_pictures_4');?>)">
                    <div class="recycling__box__title">
                        <span>04</span>
                        <p><? echo the_field('our_recycling_facility_block_title_4');?></p>
                    </div>
                </div>
            </div>
            <div class="recycling__box__items recycling__box__items--width5">
                <div class="recycling__box__cover recycling__box__cover--height3" style="background-image: url(<?echo the_field('our_recycling_facility_block_pictures_5');?>)">
                    <div class="recycling__box__title recycling__box__title--lh">
                        <span>05</span>
                        <p><? echo the_field('our_recycling_facility_block_title_5');?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cost">
    <div class="wrapper">
        <img class="cost__box__img" src="<?php bloginfo('template_url'); ?>/assets/img/cost-recycling.png" alt="Find out the cost of buying a car">
        <div class="cost__box">
            <div class="cost__box__items">
                <h2 class="section-head section-head--white"><? echo the_field('cost_title');?></h2>
                <form action="#" class="cost__form" id="cost__form">
                    <div class="cost__form__items">
                        <input class="form__text form__text--mb" type="text" name="costname" id="costname" placeholder="Name">
                        <input class="form__text form__text--mb" type="text" name="costemail" id="costemail" placeholder="E-mail">
                        <input class="form__text form__text--mb" type="text" name="costecar" id="costecar" placeholder="Make a car">
                    </div>
                    <div class="cost__form__items">
                        <input class="form__text form__text--mb" type="text" name="costyear" id="costyear" placeholder="Year of issue">
                        <input class="form__text form__text--mb" type="tel" name="costphone" id="costphone" placeholder="Phone number">
                        <input class="form__text form__text--mb" type="text" name="costenote" id="costenote" placeholder="notebook">
                        <button class="form__btn form__btn--mt" id="form__btn-cost" type="submit">
                            <p class="form__btn__content">What's My Best Price</p>
                            <svg class="form__btn__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 24">
                                <path d="M2 10.5C1.17157 10.5 0.5 11.1716 0.5 12C0.5 12.8284 1.17157 13.5 2 13.5V10.5ZM34.0607 13.0607C34.6464 12.4749 34.6464 11.5251 34.0607 10.9393L24.5147 1.3934C23.9289 0.807611 22.9792 0.807611 22.3934 1.3934C21.8076 1.97919 21.8076 2.92893 22.3934 3.51472L30.8787 12L22.3934 20.4853C21.8076 21.0711 21.8076 22.0208 22.3934 22.6066C22.9792 23.1924 23.9289 23.1924 24.5147 22.6066L34.0607 13.0607ZM2 13.5H33V10.5H2V13.5Z"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="form__error form__error--white error" id="cost-error"></div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="benefits" id="advantage">
    <img class="benefits__img" src="<?php bloginfo('template_url'); ?>/assets/img/tread-2.png" alt="benefits">
    <div class="wrapper">
        <div class="benefits__box">
            <div class="benefits__box__items">
                <h2 class="section-head section-head--right"><? echo the_field('benefits_title');?></h2>
                <a class="about__link about__link--mt" href="<? echo the_field('about_file_my_best_price'); ?>" download>
                    <p>What's My Best Price</p>
                    <svg class="form__btn__icon form__btn__icon--white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 24">
                        <path d="M2 10.5C1.17157 10.5 0.5 11.1716 0.5 12C0.5 12.8284 1.17157 13.5 2 13.5V10.5ZM34.0607 13.0607C34.6464 12.4749 34.6464 11.5251 34.0607 10.9393L24.5147 1.3934C23.9289 0.807611 22.9792 0.807611 22.3934 1.3934C21.8076 1.97919 21.8076 2.92893 22.3934 3.51472L30.8787 12L22.3934 20.4853C21.8076 21.0711 21.8076 22.0208 22.3934 22.6066C22.9792 23.1924 23.9289 23.1924 24.5147 22.6066L34.0607 13.0607ZM2 13.5H33V10.5H2V13.5Z"></path>
                    </svg>
                </a>
            </div>
            <div class="benefits__box__items">
                <div class="feature__box">
                    <div class="feature__box__items">
                        <div class="feature__box__cover feature__box__cover--one">
                            <div class="feature__box__number">01</div>
                            <div class="feature__box__title"><? echo the_field('benefits_block_title_1');?></div>
                        </div>
                    </div>
                    <div class="feature__box__items">
                        <div class="feature__box__cover feature__box__cover--two">
                            <div class="feature__box__number">02</div>
                            <div class="feature__box__title"><? echo the_field('benefits_block_title_2');?></div>
                        </div>
                    </div>
                    <div class="feature__box__items">
                        <div class="feature__box__cover feature__box__cover--three">
                            <div class="feature__box__number">03</div>
                            <div class="feature__box__title"><? echo the_field('benefits_block_title_3');?></div>
                        </div>
                    </div>
                    <div class="feature__box__items">
                        <div class="feature__box__cover feature__box__cover--four">
                            <div class="feature__box__number">04</div>
                            <div class="feature__box__title"><? echo the_field('benefits_block_title_4');?></div>
                        </div>
                    </div>
                    <div class="feature__box__items">
                        <div class="feature__box__cover feature__box__cover--five">
                            <div class="feature__box__number">05</div>
                            <div class="feature__box__title"><? echo the_field('benefits_block_title_5');?></div>
                        </div>
                    </div>
                    <div class="feature__box__items">
                        <div class="feature__box__cover feature__box__cover--six">
                            <div class="feature__box__number">06</div>
                            <div class="feature__box__title"><? echo the_field('benefits_block_title_6');?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="process" id="process">
    <div class="wrapper">
        <h2 class="section-head"><? echo the_field('our_process_title');?></h2>
        <div class="process__box process__box--one">
            <img class="process__img process__img--one-pr" src="<?echo the_field('our_process_block_picture_1');?>" alt="<?echo the_field('our_process_block_title_1');?>">
            <div class="process__content process__content--one">
                <h3 class="section-head"><?echo the_field('our_process_block_title_1');?></h3>
                <? echo wpautop(the_field('our_process_block_content_1'));?>
            </div>
        </div>
        <div class="process__box process__box--two">
            <div class="process__content process__content--two">
                <h3 class="section-head"><?echo the_field('our_process_block_title_2');?></h3>
                <? echo wpautop(the_field('our_process_block_content_2'));?>
            </div>
            <img class="process__img process__img--two-pl" src="<?echo the_field('our_process_block_picture_2');?>" alt="<?echo the_field('our_process_block_title_2');?>">
        </div>
        <div class="process__box">
            <img class="process__img process__img--one-pr" src="<?echo the_field('our_process_block_picture_3');?>" alt="<?echo the_field('our_process_block_title_3');?>">
            <div class="process__content process__content--three">
                <h3 class="section-head"><?echo the_field('our_process_block_title_3');?></h3>
                <? echo wpautop(the_field('our_process_block_content_3'));?>
            </div>
        </div>
    </div>
</section>
<section class="questions">
    <div class="wrapper">
        <h2 class="section-head"><?echo the_field('questions_title');?></h2>
        <div class="questions__box">
            <div class="questions__box__items">
                <?$reviews = get_field('feedback');
                $col_feedback = 0;
                foreach($reviews as $review) :?>
                    <div class="questions__box__items__content">
                        <div class="questions__box__items__head">
                            <div class="questions__link" id="questions<? echo $col_feedback; ?>"><? echo $review['feedback_title']?></div>
                            <div class="questions__icon">+</div>
                        </div>
                        <div class="questions__content" id="1questions<? echo $col_feedback; ?>">
                            <? echo wpautop($review['feedback_content']);?>
                        </div>
                    </div>
                    <?$col_feedback++;
                endforeach?>
            </div>
            <div class="questions__box__items">
                <a class="questions__box__items__link" href="tel:<?echo the_field('contact_info_phone');?>">
                    <svg class="questions__box__items__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43 43">
                        <path d="M42.8065 34.2741L42.5925 33.6292C42.0856 32.1225 40.4241 30.5511 38.8977 30.1371L33.2484 28.5939C31.7164 28.1771 29.5311 28.7375 28.4102 29.8583L26.3656 31.9029C18.9352 29.8951 13.1086 24.0683 11.1035 16.6393L13.1481 14.5946C14.269 13.4737 14.8294 11.2913 14.4126 9.75928L12.8721 4.10721C12.4553 2.57801 10.881 0.916517 9.37726 0.415194L8.73238 0.198372C7.22571 -0.302951 5.07695 0.204049 3.95616 1.32484L0.897765 4.38603C0.351384 4.92953 0.00217928 6.48406 0.00217928 6.48973C-0.10479 16.1999 3.70266 25.5551 10.5712 32.4238C17.4229 39.2755 26.7431 43.0774 36.4251 42.9957C36.4757 42.9957 38.0753 42.6521 38.6217 42.1085L41.6801 39.0501C42.8009 37.9294 43.3078 35.7807 42.8065 34.2741Z" fill="white"></path>                        
                    </svg>
                </a>
                <div class="questions__box__circle">
                    <img class="questions__img" src="<?php bloginfo('template_url'); ?>/assets/img/questions-img.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer()?>