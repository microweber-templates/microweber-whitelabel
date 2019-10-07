<?php

/*

type: layout

name: Big Home Banner

position: 14

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-10';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-100';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<div data-parallax="" data-overlay="1" data-overlay-black="" class="edit safe-mode nodrop" field="layout-skin-14-<?php print $params['id'] ?>" rel="module">
    <section class="section-6 inverse d-flex background-image-holder" style="background-image: url('<?php print template_url(); ?>assets/img/sections/home-big.jpg');">
        <div class="container align-self-center <?php print $layout_classes; ?>">
            <div class="row">
                <div class="col-12 allow-drop">
                    <h5 class="fx-deactivate"><?php print _lang('The Beauty', 'templates/microweber-whitelabel'); ?></h5>
                    <h2 class="fx-deactivate"><?php print _lang('Is a Mission', 'templates/microweber-whitelabel'); ?></h2>
                    <p class="fx-deactivate"><?php print _lang('A favorite place for women', 'templates/microweber-whitelabel'); ?></p>
                    <br/><br/>

                    <module type="btn" template="bootstrap" button_style="btn-default" button_size="btn-lg" text="<?php print _lang('Book a Consultation', 'templates/microweber-whitelabel'); ?>" class="fx-particles-2"/>
                </div>
            </div>
        </div>
    </section>
</div>