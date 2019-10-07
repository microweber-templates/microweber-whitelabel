<?php

/*

  type: layout

  name: Default

  description: Default template for slick slider


*/

?>

<div class="container product-slider-holder section-silver">
    <div class="slider-wrapper">
        <div class="product-slider">
            <?php foreach ($data as $slide) { ?>
                <div class="slide">
                    <div class="row flexbox-container">
                        <div class="col-12 col-lg-6 left-side">
                            <h3><?php print $slide['primaryText']; ?></h3>
                            <p><?php print $slide['secondaryText']; ?></p>
                            <br/>
                            <br/>
                            <?php if (isset($slide['url'])): ?>
                                <p class="m-t-10">
                                    <a href="<?php print $slide['url']; ?>" class="btn btn-default btn-lg">
                                        <?php if (isset($slide['urlText']) and $slide['urlText'] != ''): ?>
                                            <?php print $slide['urlText']; ?>
                                        <?php else: ?>
                                            View More
                                        <?php endif; ?>
                                    </a>
                                </p>
                            <?php endif; ?>
                        </div>
                        <div class="col-12 col-lg-6 img-holder">
                            <?php if (isset($slide['images'][0])): ?>
                                <img src="<?php print thumbnail($slide['images'][0], 400, 400); ?>"/>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>