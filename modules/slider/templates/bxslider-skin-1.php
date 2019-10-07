<?php

/*

  type: layout

  name: bxSlider - Heading Slider

  description: bxSlider - Heading Slider


*/

?>



<div class=" bxSlider-heading">
    <div class="bxSlider">
        <?php foreach ($data as $slide) { ?>
            <?php if (isset($slide['primaryText'])) {
                $primaryText = $slide['primaryText'];

            }
            if (isset($slide['secondaryText'])) {
                $secondaryText = $slide['secondaryText'];

            }
            if (isset($slide['url'])) {
                $url = $slide['url'];
            } else {
                $url = 'javascript:;';
            }
            ?>

            <?php if (isset($slide['skin_file'])) { ?>
                <?php include $slide['skin_file'] ?>
            <?php } ?>
        <?php } ?>
    </div>
</div>