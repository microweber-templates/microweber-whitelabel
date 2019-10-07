<div class="section-7 d-flex">
    <div class="container d-flex">
        <div class="row position-relative">
            <div class="col-lg-6 col-xl-6 align-self-center position-static">
                <div class=" allow-drop p-10">
                    <div class="text-bg" style="background-image: url('<?php print template_url(); ?>assets/img/text-bg.png');"></div>

                    <h2><?php echo $primaryText; ?></h2>
                    <p><?php echo $secondaryText; ?></p>
                </div>
            </div>

            <div class="col-lg-6 col-xl-6 text-center allow-drop align-self-center">
                <a href="<?php print $url; ?>">
                    <img src="<?php if (isset($slide['images'][0])) { ?><?php print thumbnail($slide['images'][0], 1920, 1920); ?><?php } ?>" alt=""/>
                </a>
            </div>
        </div>
    </div>
</div>