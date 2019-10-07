<?php

/*

  type: layout

  name: Default

  description: Default template for bxSlider


*/

?>

<div class="slider-wrapper">
    <div class="home-slider">
        <?php foreach ($data as $slide) { ?>
            <div class="slide">
                <?php if (isset($slide['skin_file'])) {
                    include($slide['skin_file']);
                }
                ?>
            </div>
        <?php } ?>
    </div>
</div>