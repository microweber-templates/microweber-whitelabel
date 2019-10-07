<?php

/*

type: layout

name: Simple Title with Text

position: 8

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

<section class="section-3 bg-pink <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-8-<?php print $params['id'] ?>" rel="module">
    <div class="container allow-drop">
        <img src="<?php print template_url(); ?>assets/img/ornaments.png" alt="" class="m-b-80"/>

        <h2><?php print _lang('Trust Us', 'templates/microweber-whitelabel'); ?></h2>
        <p><?php print _lang('Trust your microweber-whitelabel with our specialists. They are kind with excellent knowledge and long experience. You can fully trust their opinion because their mission is your self-esteem. Each recommendation is discussed many times with several specialists.', 'templates/microweber-whitelabel'); ?></p>
        <div class="m-t-50">
            <module type="btn" template="bootstrap" button_style="btn-default" button_size="btn-lg" text="Book a Consultation" class="inline-block cloneable m-l-10 m-r-10"/>
        </div>
    </div>
</section>
