<?php

/*

type: layout

name: Pricing Table

position: 9

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

<section class="section-9 d-flex <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-9-<?php print $params['id'] ?>" rel="module">
    <div class="container align-self-center allow-drop">
        <module type="accordion"/>
    </div>
</section>