<?php if ($footer == 'true'): ?>
    <footer class="p-t-100 p-b-60">
        <div class="container">
            <div class="edit nodrop safe-mode" field="microweber-whitelabel_footer" rel="global">
                <div class="row">
                    <div class="mx-auto col-xl-12">
                        <div class="row">
                            <div class="mx-auto col col-xl-3 allow-drop">
                                <div class="logo nodrop">
                                    <img src="<?php print template_url(); ?>assets/img/logo-footer.png" class="safe-element"/>
                                </div>

                                <p><?php print _lang('Микроуебър е система за  създаване и управление на сайтове с отводен код, базирана на PHP / Laravel под MIT лиценз', 'templates/microweber-whitelabel'); ?></p>
                                <module type="social_links" id="footer-socials"/>
                            </div>

                            <div class="mx-auto col col-xl-2 allow-drop">
                                <h3 class="small-title"><?php _lang('About us', 'templates/microweber-whitelabel'); ?></h3>
                                <module type="menu" name="footer_menu_1" template="footer"/>
                            </div>

                            <div class="mx-auto col col-xl-2 allow-drop">
                                <h3 class="small-title"><?php _lang('About us', 'templates/microweber-whitelabel'); ?></h3>
                                <module type="menu" name="footer_menu_2" template="footer"/>
                            </div>

                            <div class="mx-auto col col-xl-2 allow-drop">
                                <h3 class="small-title"><?php _lang('About us', 'templates/microweber-whitelabel'); ?></h3>
                                <module type="menu" name="footer_menu_3" template="footer"/>
                            </div>

                            <div class="mx-auto col col-xl-2 allow-drop">
                                <h3 class="small-title"><?php _lang('About us', 'templates/microweber-whitelabel'); ?></h3>
                                <module type="menu" name="footer_menu_4" template="footer"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php endif; ?>

</div>

<button id="to-top" class="btn" style="display: block;"></button>

<?php include('footer_cart.php'); ?>

<!-- Plugins -->
<script src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;language=en-GB&amp;key=AIzaSyDbN7i-eF7dlNNp-bxbERNomOGYpZld3B0"></script>

<script src="<?php print template_url(); ?>assets/js/libs/swiper/js/swiper.min.js"></script>
<script src="<?php print template_url(); ?>assets/plugins/elevatezoom/jquery.elevatezoom.js"></script>
<script type="text/javascript" src="<?php print template_url(); ?>assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="<?php print template_url(); ?>assets/plugins/masonry/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="<?php print template_url(); ?>assets/plugins/masonry/isotope.pkgd.min.js"></script>

<script src="<?php print template_url(); ?>assets/js/libs/anime.min.js"></script>
<script src="<?php print template_url(); ?>assets/js/libs/particles.js"></script>
<script src="<?php print template_url(); ?>assets/js/libs/jquery.sticky-sidebar.min.js"></script>
<script>
    mw.lib.require('slick');
    mw.lib.require('collapse_nav');
</script>
<script src="<?php print template_url(); ?>assets/js/main.js"></script>

<script src="<?php print template_url(); ?>assets/js/fx.js"></script>

</body>
</html>