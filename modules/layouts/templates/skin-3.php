<?php

/*

type: layout

name: Simple Title with Text

position: 3

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

<section class="section-3 <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-3-<?php print $params['id'] ?>" rel="module">
    <div class="container allow-drop">
        <h2><?php print _lang('Направи си сайт още сега', 'templates/microweber-whitelabel'); ?></h2>
        <p><?php print _lang('Лесно, безплатно и с удоволствие.', 'templates/microweber-whitelabel'); ?></p>
        <div class="m-t-50">
            <module type="btn" template="bootstrap" button_style="btn-default" button_size="btn-lg" text="<?php print _lang('Създай Уебсайт', 'templates/microweber-whitelabel'); ?>" class="inline-block cloneable m-l-10 m-r-10"/>
        </div>
    </div>
</section>
