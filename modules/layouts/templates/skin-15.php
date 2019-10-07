<?php

/*

type: layout

name: Gallery

position: 15

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

<section class="section <?php print $layout_classes; ?> x-edit safe-mode nodrop" field="layout-skin-15-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <module type="pictures" template="skin-3" style="padding: 0;"/>
            </div>
        </div>
    </div>
</section>
