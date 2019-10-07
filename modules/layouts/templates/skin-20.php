<?php

/*

type: layout

name: Features

position: 20

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-20-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-10 mx-auto">
                <div class="row blog-posts">

                    <div class="m-b-40 col-12 col-sm-6 col-md-4 col-lg-4 cloneable">
                        <a href="javascript:;">
                            <div class="post">
                                <div class="image" style="background-image: url('<?php print template_url(); ?>assets/img/sections/feature1.jpg');"></div>
                                <div class="description allow-drop">
                                    <h3>Dermal Filler Treatments</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="m-b-40 col-12 col-sm-6 col-md-4 col-lg-4 cloneable">
                        <a href="javascript:;">
                            <div class="post">
                                <div class="image" style="background-image: url('<?php print template_url(); ?>assets/img/sections/feature2.jpg');"></div>
                                <div class="description allow-drop">
                                    <h3>Dermal Filler Treatments</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="m-b-40 col-12 col-sm-6 col-md-4 col-lg-4 cloneable">
                        <a href="javascript:;">
                            <div class="post">
                                <div class="image" style="background-image: url('<?php print template_url(); ?>assets/img/sections/feature3.jpg');"></div>
                                <div class="description allow-drop">
                                    <h3>Dermal Filler Treatments</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="m-b-40 col-12 col-sm-6 col-md-4 col-lg-4 cloneable">
                        <a href="javascript:;">
                            <div class="post">
                                <div class="image" style="background-image: url('<?php print template_url(); ?>assets/img/sections/feature4.jpg');"></div>
                                <div class="description allow-drop">
                                    <h3>Dermal Filler Treatments</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="m-b-40 col-12 col-sm-6 col-md-4 col-lg-4 cloneable">
                        <a href="javascript:;">
                            <div class="post">
                                <div class="image" style="background-image: url('<?php print template_url(); ?>assets/img/sections/feature5.jpg');"></div>
                                <div class="description allow-drop">
                                    <h3>Dermal Filler Treatments</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="m-b-40 col-12 col-sm-6 col-md-4 col-lg-4 cloneable">
                        <a href="javascript:;">
                            <div class="post">
                                <div class="image" style="background-image: url('<?php print template_url(); ?>assets/img/sections/feature6.jpg');"></div>
                                <div class="description allow-drop">
                                    <h3>Dermal Filler Treatments</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row element">
            <div class="col-12 col-xl-10 mx-auto">
                <div class="m-t-50 text-center allow-drop">
                    <module type="btn" template="bootstrap" button_style="btn-primary" button_size="btn-md" text="Price List" class="inline-block cloneable m-l-10 m-r-10"/>
                </div>
            </div>
        </div>
    </div>
</section>