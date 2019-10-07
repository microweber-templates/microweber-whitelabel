<?php

/*

  type: layout

  name: Default

  description: Default template for bxSlider


*/

?>

<div class="swiper-container">
    <div class="swiper-wrapper">
        <?php foreach ($data as $slide) { ?>
            <div class="swiper-slide">
                <a href="<?php if (isset($slide['url'])) {
                    print $slide['url'];
                } else { ?>javascript:;<?php } ?>">
                    <?php if (isset($slide['images'][1])): ?>
                        <img src="<?php print thumbnail($slide['images'][1], 600, 600); ?>"/>
                    <?php endif; ?>
                </a>
            </div>
        <?php } ?>
    </div>
</div>