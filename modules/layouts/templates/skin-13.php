<?php

/*

type: layout

name: Posts

position: 13

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-13-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <module type="posts" hide_paging="true" limit="4" />
            </div>
        </div>
    </div>
</section>