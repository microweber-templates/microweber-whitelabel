<?php

/*

type: layout

name: Book a Consultation

position: 10

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-150';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-150';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<div data-parallax="" data-overlay="5" data-overlay-black="" class="edit safe-mode nodrop" field="layout-skin-10-<?php print $params['id'] ?>" rel="module">
    <section class="section-4 background-image-holder" style="background-image: url('<?php print template_url(); ?>assets/img/sections/nails.jpg');">
        <div class="container <?php print $layout_classes; ?> allow-drop">
            <h2 class="fx-deactivate"><?php print _lang('Book a consultation', 'templates/microweber-whitelabel'); ?></h2>
            <p class="fx-deactivate"><?php print _lang('Leave your name and phone and we\'ll call you a few <br />minutes to confirm', 'templates/microweber-whitelabel'); ?></p>
            <br/><br/>

            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <module type="contact_form" template="skin-1"/>
                </div>
            </div>
        </div>
    </section>
</div>
