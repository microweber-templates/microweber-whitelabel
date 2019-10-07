<?php

/*

type: layout

name: Contact Info

position: 19

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-0';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-0';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<section class="section-10 d-flex edit safe-mode nodrop" field="layout-skin-19-<?php print $params['id'] ?>" rel="module">
    <div class="container align-self-center">
        <div class="row">
            <div class="col-md-6 col-lg-3 m-t-20 mx-auto m-b-10 m-t-10 allow-drop cloneable">
                <h5 class="fx-deactivate"><?php print _lang('Phone Lines', 'templates/microweber-whitelabel'); ?></h5>
                <p class="fx-deactivate"><?php print _lang('+359 878 123 456, 359 889 321 654', 'templates/microweber-whitelabel'); ?></p>
            </div>

            <div class="col-md-6 col-lg-3 m-t-20 mx-auto m-b-10 m-t-10 allow-drop cloneable">
                <h5 class="fx-deactivate"><?php print _lang('Address', 'templates/microweber-whitelabel'); ?></h5>
                <p class="fx-deactivate"><?php print _lang('Sofia 1000, Bulgaria. Main Street 99', 'templates/microweber-whitelabel'); ?></p>
            </div>

            <div class="col-md-6 col-lg-3 m-t-20 mx-auto m-b-10 m-t-10 allow-drop cloneable">
                <h5 class="fx-deactivate"><?php print _lang('E-mail', 'templates/microweber-whitelabel'); ?></h5>
                <p class="fx-deactivate"><?php print _lang('office@microweber-whitelabel.email', 'templates/microweber-whitelabel'); ?></p>
            </div>

            <div class="col-md-6 col-lg-3 m-t-20 mx-auto m-b-10 m-t-10 allow-drop cloneable">
                <h5 class="fx-deactivate m-b-0"><?php print _lang('Social', 'templates/microweber-whitelabel'); ?></h5>
                <module type="social_links" template="skin-1"/>
            </div>
        </div>
    </div>
</section>