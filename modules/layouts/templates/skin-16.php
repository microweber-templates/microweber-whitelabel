<?php

/*

type: layout

name: Discounts

position: 16

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-100';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-50';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section section-silver <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-16-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">
        <div class="row section-12 inverse p-b-0">
            <div class="col-12 allow-drop text-center">
                <h3>Discounts and Presents</h3>
                <p>We are always ready to surprise you with discounts and gifts.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <module type="slider" template="slickslider-skin-1"/>
            </div>
        </div>
    </div>
</section>
