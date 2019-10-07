<?php

/*

type: layout

name: Domain Search

position: 7

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-150';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-150';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<section data-bg-contain class="section d-flex xedit safe-mode nodrop" field="layout-skin-24-<?php print $params['id'] ?>" rel="module" style="min-height: 700px;">
    <div class="container align-items-end background-image-holder allow-drop" style="background-image: url('<?php print template_url(); ?>assets/img/domain-bg.jpg'); padding-top: 250px !important;">
        <div class="d-flex h-100">
            <div class="align-self-end w-100">
                <div class="row">
                    <div class="col-lg-10 col-xl-8 mx-auto">
                        <module type="whmcs" template="default" style="height: 320px; width: 100%;"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>