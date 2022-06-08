<?php
get_header();
?>
<section class="hero">
    <div class="wrapper">
        <div class="hero__box error-404">
            <h1 class="section-head section-head--white">Sorry, the address you entered is not available. This could be multiple answers:</h1>
            <p>Page removed (due to loss of relevance of information)</p>
			<p>Page moved to another location</p>
			<p>It is possible that some letter was missed when entering the address (in fact, we often do this ourselves)</p>
        </div>
        <form class="hero__form" action="#" method="post">
            <span for="" class="form__title">Urgent car valuation</span>
            <input class="form__text" type="text" name="fullname" id="fullname" placeholder="Full Name">
            <input class="form__text" type="tel" name="phone" id="phone" placeholder="Phone number">
            <textarea class="form__textarea" name="note" id="note" cols="30" rows="40" placeholder="Note"></textarea>
            <button class="form__btn" type="submit">
                <p class="form__btn__content">Calculate</p>
                <svg class="form__btn__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 24">
                    <path d="M2 10.5C1.17157 10.5 0.5 11.1716 0.5 12C0.5 12.8284 1.17157 13.5 2 13.5V10.5ZM34.0607 13.0607C34.6464 12.4749 34.6464 11.5251 34.0607 10.9393L24.5147 1.3934C23.9289 0.807611 22.9792 0.807611 22.3934 1.3934C21.8076 1.97919 21.8076 2.92893 22.3934 3.51472L30.8787 12L22.3934 20.4853C21.8076 21.0711 21.8076 22.0208 22.3934 22.6066C22.9792 23.1924 23.9289 23.1924 24.5147 22.6066L34.0607 13.0607ZM2 13.5H33V10.5H2V13.5Z"></path>
                </svg>
            </button>
            <div class="form__error error" id="hero-error"></div>
        </form>
        <div class="hero__diler">
            <img src="<?echo the_field('frst_screen_dealer_img', 7);?>" alt="Best price in Melbourne">
        </div>
    </div>
    <img class="hero__traid" src="<?php bloginfo('template_url'); ?>/assets/img/tread.png" alt="">
</section>
<?php
get_footer();
?>