<?php

/*

type: layout

name: Testimonials

position: 2

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-5+0';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-50';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section-4 inverse <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-2-<?php print $params['id'] ?>" rel="module">
    <div class="container align-self-center">
        <module type="testimonials" template="skin-1"/>
    </div>
</section>

