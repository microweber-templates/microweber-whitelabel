<?php

/*

type: layout

name: Google Maps

position: 18

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-10';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-0';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<div class="edit safe-mode nodrop" field="layout-skin-18-<?php print $params['id'] ?>" rel="module">
    <section class="section allow-drop">
        <module type="google_maps"/>
    </section>
</div>