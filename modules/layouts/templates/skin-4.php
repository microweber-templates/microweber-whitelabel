<?php

/*

type: layout

name: Home Banner

position: 4

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-100';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-0';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="<?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-4-<?php print $params['id'] ?>" rel="module">
    <module type="slider" template="bxslider-skin-1"/>
</section>

<!--<div class="container d-flex">
        <div class="row">
            <div class="col-lg-6 col-xl-6 align-self-center position-static">
                <div class=" allow-drop p-10">
                    <div class="text-bg" style="background-image: url('<?php /*print template_url(); */ ?>assets/img/text-bg.png');"></div>
                    <h2><?php /*print _lang('Направи си <span class="text-default">сайт<br />безплатно</span>, подаряваме <br />ти <span class="text-primary">и хостинг</span> за него!', 'templates/microweber-whitelabel'); */ ?></h2>
                    <p><?php /*print _lang('Направи си уебсайт сега, безплатно с Микроуебър, <br />а Нетера ти дава безплатен хостинг за него!', 'templates/microweber-whitelabel'); */ ?></p>

                    <div class="m-t-50">
                        <p><?php /*print _lang('С подкрепата на: ', 'templates/microweber-whitelabel'); */ ?> &nbsp; <a href="https://neterra.net/bg" target="_blank"><img src="<?php /*print template_url(); */ ?>assets/img/neterra_logo.png" alt=""/></a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-xl-6 text-center allow-drop align-self-end">
                <img src="<?php /*print template_url(); */ ?>assets/img/sections/home.png" alt=""/>
            </div>
        </div>
    </div>-->