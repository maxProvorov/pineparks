<footer>
    <div class="footer__top wrapper">
        <div class="footer__left">
            <div class="footer__logo logo">
                <?php if (is_front_page()) { ?>
                    <span class="logo__image"></span>
                    <span class="logo__text">SAFARI</span>
                <?php } else { ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo__link">
                        <span class="logo__image"></span>
                        <span class="logo__text">SAFARI</span>
                    </a>
                <?php } ?>
            </div>
        </div>
        <div class="footer__right">
            <div class="footer-nav">
                <div class="footer-nav__left">
                    <a href="#">
                        <div class="footer-nav__title">Top destinations</div>
                    </a>
                    <a href="#">
                        <div class="footer-nav__item">Serengeti National Park</div>
                    </a>
                    <a href="#">
                        <div class="footer-nav__item">Kilimanjaro</div>
                    </a>
                    <a href="#">
                        <div class="footer-nav__item">Zanzibar</div>
                    </a>
                    <a href="#">
                        <div class="footer-nav__item">Ngorongoro Conservation Area</div>
                    </a>
                    <a href="#">
                        <div class="footer-nav__item">Lake Manyara</div>
                    </a>
                    <a href="#">
                        <div class="footer-nav__item">Lake Natron</div>
                    </a>
                    <a href="#">
                        <div class="footer-nav__item">Arusha National Park</div>
                    </a>
                    <a href="#">
                        <div class="footer-nav__item">Selous Game Reserve</div>
                    </a>
                    <a href="#">
                        <div class="footer-nav__item">Tarangire National Park</div>
                    </a>
                </div>
                <div class="footer-nav__right">
                    <div class="footer-nav__right-wrap">
                        <a href="#">
                            <div class="footer-nav__title">Travel information</div>
                        </a>
                        <a href="#">
                            <div class="footer-nav__item">About Tanzania Safari</div>
                        </a>
                        <a href="#">
                            <div class="footer-nav__item">Contact</div>
                        </a>
                        <a href="#">
                            <div class="footer-nav__item">Privacy policy</div>
                        </a>
                        <a href="#">
                            <div class="footer-nav__item">Terms and conditions</div>
                        </a>
                        <a href="#">
                            <div class="footer-nav__item">Tanzania traveller reviews</div>
                        </a>
                    </div>
                    <button class="footer__btn btn btn-white">Book a tour</button>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom wrapper">
        <div class="footer__bottom-left">
            <span>© 2022 Tanzania</span>|
            <span>Terms and conditions</span>|
            <span>Privacy policy</span>
        </div>
        <div class="footer__bottom-right">
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon1.svg" alt="Инста"></a>
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon2.svg" alt="Фэйсбук"></a>
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon4.svg" alt="Твиттер"></a>
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon3.svg"
                    alt="Пинтерест"></a>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</html>