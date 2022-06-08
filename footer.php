<footer class="footer" id="contacts">
    <div class="wrapper">
		<img class="footer__img" src="<?php bloginfo('template_url'); ?>/assets/img/footer-tread.png" alt="Footer">
        <div class="footer__box">
            <div class="footer__box__items">
				<a class="footer__link" href="<?php echo site_url(); ?>">
                	<img class="footer__logo" src="<?php bloginfo('template_url'); ?>/assets/img/logo-footer.svg" alt="Home">
				</a>
                <a class="footer__info" href="tel:<?echo the_field('contact_info_phone', 7);?>"><?echo the_field('contact_info_phone', 7);?></a>
                <a class="footer__info" href="mailto:<?echo the_field('contact_info_email', 7);?>"><?echo the_field('contact_info_email', 7);?></a>
                <address class="footer__info"><?echo the_field('contact_info_address', 7);?></address>
            </div>
            <div class="footer__box__items">
                <h5 class="footer__title">Remain questions?</h5>
                <form class="form__footer" id="footer__form" action="#">
                    <input class="form__text form__text--w100" type="text" name="footername" id="footername" placeholder="Full Name">
                    <input class="form__text form__text--w100" type="tel" name="footerphone" id="footerphone" placeholder="Phone number">
                    <input class="form__text form__text--w100" type="email" name="footeremail" id="footeremail" placeholder="Email">
                    <input class="form__text form__text--w100" type="text" name="footerquestion" id="footerquestion" placeholder="Question">
                    <button class="form__btn" id="form__btn-footer" type="submit">
                        <p class="form__btn__content">Send</p>
                        <svg class="form__btn__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 24">
                            <path d="M2 10.5C1.17157 10.5 0.5 11.1716 0.5 12C0.5 12.8284 1.17157 13.5 2 13.5V10.5ZM34.0607 13.0607C34.6464 12.4749 34.6464 11.5251 34.0607 10.9393L24.5147 1.3934C23.9289 0.807611 22.9792 0.807611 22.3934 1.3934C21.8076 1.97919 21.8076 2.92893 22.3934 3.51472L30.8787 12L22.3934 20.4853C21.8076 21.0711 21.8076 22.0208 22.3934 22.6066C22.9792 23.1924 23.9289 23.1924 24.5147 22.6066L34.0607 13.0607ZM2 13.5H33V10.5H2V13.5Z"></path>
                        </svg>
                    </button>
                    <div class="form__error form__error--left error" id="footer-error"></div>
                </form>
            </div>
            <div class="footer__box__items">
                <ul class="footer__list">
                    <li class="footer__list__items">
                        <a class="footer__list__link" href="#about">About Us</a>
                    </li>
                    <li class="footer__list__items">
                        <a class="footer__list__link" href="#recycling">Our Recycling Facility</a>
                    </li>
                    <li class="footer__list__items">
                        <a class="footer__list__link" href="#advantage">Our Advantage</a>
                    </li>
                    <li class="footer__list__items">
                        <a class="footer__list__link" href="#process">Our Process</a>
                    </li>
                </ul>
                <div class="social__box">
                    <a class="social__box__link" href="<?echo the_field('contact_info_instagram', 7);?>" target="_blank" rel=”nofollow”>
                        <svg class="social__icon social__box__link__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                            <path d="M17.5 12.8496C14.9345 12.8496 12.8508 14.9298 12.8508 17.4999C12.8508 20.0689 14.9357 22.1514 17.5 22.1514C20.0655 22.1514 22.1515 20.0689 22.1515 17.4999C22.1515 14.9298 20.0655 12.8496 17.5 12.8496ZM17.5 20.5403C15.8153 20.5403 14.4585 19.1788 14.4585 17.4999C14.4585 15.8211 15.8153 14.4596 17.5 14.4596C19.1672 14.4596 20.5415 15.8211 20.5415 17.4999C20.5415 19.1788 19.1847 20.5403 17.5 20.5403Z" fill="#D11D11"></path>
                            <path d="M22.6158 11.1487C22.0173 11.1487 21.5425 11.6247 21.5425 12.2232C21.5425 12.8205 22.0173 13.2953 22.6158 13.2953C23.2143 13.2953 23.6903 12.8205 23.6903 12.2232C23.6903 11.6247 23.2132 11.1487 22.6158 11.1487Z" fill="#D11D11"></path>
                            <path d="M17.5023 0.175049C7.93099 0.175049 0.173828 7.92988 0.173828 17.5C0.173828 27.0679 7.93099 34.825 17.5023 34.825C27.0678 34.825 34.8273 27.069 34.8273 17.5C34.8273 7.92988 27.0678 0.175049 17.5023 0.175049ZM26.4437 21.3092C26.4437 24.136 24.1348 26.4437 21.2917 26.4437H13.7083C10.864 26.4437 8.55516 24.1349 8.55516 21.3267V13.6897C8.55516 10.864 10.8628 8.55638 13.7083 8.55638H21.2917C24.136 8.55638 26.4437 10.864 26.4437 13.6897V21.3092Z" fill="#D11D11"></path>
                        </svg>
                    </a>
                    <a class="social__box__link" href="<?echo the_field('contact_info_facebook', 7);?>" target="_blank" rel=”nofollow”>
                        <svg class="social__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                            <path d="M35 17.5C35 27.164 27.1651 35 17.5022 35C7.8349 35 0 27.164 0 17.5C0 7.83376 7.8349 0 17.5022 0C27.1651 0 35 7.83376 35 17.5ZM14.5783 28.4375H19.1203V17.5074H22.1864L22.5833 13.6465H19.1203V11.3757C19.1203 10.5243 19.6867 10.3247 20.0836 10.3247H22.5274V6.57576L19.163 6.5625C15.4275 6.5625 14.5783 9.35838 14.5783 11.1467V13.6465H12.4181V17.5074H14.5783V28.4375Z" fill="#D11D11"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
