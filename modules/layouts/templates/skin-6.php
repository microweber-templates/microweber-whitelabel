<?php

/*

type: layout

name: Features

position: 6

*/

?>

<?php

if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-30';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-30';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section data-bg-contain class="section-14 d-flex edit safe-mode nodrop" field="layout-skin-6-<?php print $params['id'] ?>" rel="module">
    <div class="container align-items-center <?php print $layout_classes; ?> background-image-holder allow-drop" style="background-image: url('<?php print template_url(); ?>assets/img/features-bg.png');">
        <div class="d-flex h-100">
            <div class="align-self-center w-100">
                <div class="row">
                    <div class="col-12">
                        <h2 class="fx-deactivate"><?php print _lang('Лесен и безплатен сайт строител', 'templates/microweber-whitelabel'); ?></h2>
                        <p><?php print _lang('Направи си <span class="text-default">сайт за 5 минути с най-добрия български</span>', 'templates/microweber-whitelabel'); ?> <img src="<?php print template_url(); ?>assets/img/flag.png" alt="" class="m-l-5 m-r-5"/> <?php print _lang('сайт билдър. Подходящ за начинаещи и разработчици.', 'templates/microweber-whitelabel'); ?></p>

                        <br/>
                        <br/>
                        <br/>

                        <div class="features nodrop">
                            <div class="feature cloneable">
                                <div class="image">
                                    <img src="<?php print template_url(); ?>assets/img/feature-1.png" alt=""/>
                                </div>
                                <div class="title">
                                    <p> <?php print _lang('Редактираш <br/> за секунди', 'templates/microweber-whitelabel'); ?></p>
                                </div>
                            </div>

                            <div class="feature cloneable">
                                <div class="image">
                                    <img src="<?php print template_url(); ?>assets/img/feature-2.png" alt=""/>
                                </div>
                                <div class="title">
                                    <p> <?php print _lang('Бизнес или <br/>личен сайт', 'templates/microweber-whitelabel'); ?></p>
                                </div>
                            </div>

                            <div class="feature cloneable">
                                <div class="image">
                                    <img src="<?php print template_url(); ?>assets/img/feature-3.png" alt=""/>
                                </div>
                                <div class="title">
                                    <p> <?php print _lang('Он-лайн <br/> Магазин', 'templates/microweber-whitelabel'); ?></p>
                                </div>
                            </div>

                            <div class="feature cloneable">
                                <div class="image">
                                    <img src="<?php print template_url(); ?>assets/img/feature-4.png" alt=""/>
                                </div>
                                <div class="title">
                                    <p> <?php print _lang('Мобилен <br/> изглед', 'templates/microweber-whitelabel'); ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="features nodrop cloneable">
                            <div class="feature cloneable">
                                <div class="image">
                                    <i class="mw-micon-Sun safe-element"></i>
                                </div>
                                <div class="title">
                                    <p>WiFi</p>
                                </div>
                            </div>

                            <div class="feature cloneable">
                                <div class="image">
                                    <i class="mw-micon-Sun safe-element"></i>
                                </div>
                                <div class="title">
                                    <p>Sunny</p>
                                </div>
                            </div>

                            <div class="feature cloneable">
                                <div class="image">
                                    <i class="mw-micon-Cinema safe-element"></i>
                                </div>
                                <div class="title">
                                    <p>Presentation</p>
                                </div>
                            </div>

                            <div class="feature cloneable">
                                <div class="image">
                                    <i class="mw-micon-Swimming safe-element"></i>
                                </div>
                                <div class="title">
                                    <p>Bath</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>