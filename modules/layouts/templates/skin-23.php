<?php

/*

type: layout

name: Instagram Feed

position: 23

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-100';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-70';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-23-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="m-b-100">Our Instagram</h1>

               <module type="instagram_feed" />
            </div>
        </div>
    </div>
</section>