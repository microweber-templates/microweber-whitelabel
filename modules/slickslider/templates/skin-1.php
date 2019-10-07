<div class="product-slider">
    <?php foreach ($data as $slide) { ?>
        <div class="slide">
            <div class="holder">
                <?php if (isset($slide['url'])): ?><a href="<?php print $slide['url']; ?>"><?php endif; ?>
                    <img src="<?php print thumbnail($slide['images'][0], 400, 400); ?>"/>
                <?php if (isset($slide['url'])): ?></a><?php endif; ?>
            </div>
        </div>
    <?php } ?>
</div>