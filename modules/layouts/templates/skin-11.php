<?php

/*

type: layout

name: Contact Information

position: 11

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-70';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-70';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section-2 inverse d-flex <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-11-<?php print $params['id'] ?>" rel="module">
    <div class="container align-self-center">
        <div class="row">
            <div class="col-lg-5 col-xl-4 offset-xl-1 allow-drop cloneable text-center text-lg-left">
                <h3 class="fx-deactivate"><?php print _lang('Contacts', 'templates/microweber-whitelabel'); ?></h3>

                <p class="fx-deactivate"><?php print _lang('+ 359 123 456 789<br /> <a href="#">info@microweber-whitelabelclinic.email</a> <br />Bul. Cherni Vruh 47. Sofia, Bulgaria', 'templates/microweber-whitelabel'); ?></p>
                <p class="fx-deactivate"><?php print _lang('Opening hours: daily from 9 am to 19 pm', 'templates/microweber-whitelabel'); ?></p>
            </div>

            <div class="col-lg-7 col-xl-7">
                <module type="google_maps"/>
            </div>
        </div>
    </div>
</section>