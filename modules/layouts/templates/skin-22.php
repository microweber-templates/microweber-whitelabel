<?php

/*

type: layout

name: Team Cards

position: 22

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-100';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-100';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section-5 <?php print $layout_classes; ?> fx-particles edit safe-mode nodrop" field="layout-skin-22-<?php print $params['id'] ?>" rel="module" style="">
    <div class="container">
        <div class="row features">
            <div class="col-sm-4 col-lg-4 cloneable">
                <div class="feature">
                    <div class="image">
                        <div class="holder align-self-end">
                            <img src="<?php print template_url(); ?>assets/img/sections/team1.png" alt=""/>
                        </div>
                    </div>
                    <h6>Nad Colev</h6>
                    <p>Cosmetologist</p>
                </div>
            </div>

            <div class="col-sm-4 col-lg-4 cloneable">
                <div class="feature">
                    <div class="image">
                        <div class="holder align-self-end">
                            <img src="<?php print template_url(); ?>assets/img/sections/team2.png" alt=""/>
                        </div>
                    </div>
                    <h6>July Gell</h6>
                    <p>Cosmetologist</p>
                </div>
            </div>

            <div class="col-sm-4 col-lg-4 cloneable">
                <div class="feature">
                    <div class="image">
                        <div class="holder align-self-end">
                            <img src="<?php print template_url(); ?>assets/img/sections/team3.png" alt=""/>
                        </div>
                    </div>
                    <h6>Doncho Tilov</h6>
                    <p>Dermatolog</p>
                </div>
            </div>
        </div>
    </div>
</section>