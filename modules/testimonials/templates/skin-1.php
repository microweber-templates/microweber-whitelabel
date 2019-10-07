<?php

/*

type: layout

name:  Skin 1

description:  Skin 1

*/

?>

<script>
    $(document).ready(function () {
        if ($('<?php print '#' . $params['id']; ?> .slick-testimonials-2').length > 0) {
            $('<?php print '#' . $params['id']; ?> .slick-testimonials-2').each(function () {
                var el = $(this);
                el.slick({
                    centerMode: true,
                    centerPadding: '0px',
                    slidesToShow: 1,
                    arrows: false,
                    dots: false,
                    autoplay: true,
                    swipe: false,
                    touchMove: false,
                    responsive: [
                        {
                            breakpoint: 1200,
                            settings: {
                                slidesToShow: 1
                            }
                        },
                        {
                            breakpoint: 992,
                            settings: {
                                slidesToShow: 1
                            }
                        }
                    ]
                });
            });
        }
    });
</script>

<style>
    #
    <?php echo $params['id']; ?>
    .slick-slide {
        -webkit-user-select: text;
        -moz-user-select: text;
        -ms-user-select: text;
        user-select: text;
    }
</style>
<div class="slider-wrapper p-b-10">
    <div class="slick-testimonials-2">
        <?php if (isset($data)): ?>
            <?php foreach ($data as $item) { ?>
                <div class="slide">
                    <div class="slide-holder">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="img-holder-bg" style="background-image: url('<?php print template_url(); ?>assets/img/testimonials-bg.png');">
                                    <?php if ($item['client_picture']): ?>
                                        <div class="img-holder" style="background-image: url('<?php print thumbnail($item['client_picture'], 400, 400, true); ?>');"></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                                <div class="info-holder text-left ">
                                    <div class="align-self-center">
                                        <h4><?php print _lang('Повече от 50,000 инсталации из целия свят', 'templates/microweber-whitelabel'); ?></h4>
                                        <p><?php print $item['content']; ?></p>

                                        <div class="testimonial-by">
                                            <h3><?php print $item['name']; ?> @</h3>

                                            <?php if (isset($item['client_website'])) { ?>
                                                <h4>
                                                    <a href="<?php print $item['client_website']; ?>" target="_blank">
                                                        <?php if (isset($item["client_company"])) { ?>
                                                            <?php print $item['client_company']; ?>
                                                        <?php } ?>
                                                    </a>
                                                </h4>
                                            <?php } else { ?>
                                                <a href="http://<?php print $item['client_company']; ?>" target="_blank">
                                                    <h4>
                                                        <?php if (isset($item["client_company"])) { ?>
                                                            <?php print $item['client_company']; ?>
                                                        <?php } ?>
                                                    </h4>
                                                </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            <?php } ?>
        <?php else: ?>
            <div class="slide">
                <div class="slide-holder">
                    <div class="img-holder" style="background-image: url('<?php print template_url(); ?>assets/uploads/testimonial4.png');"></div>
                    <div class="info-holder">
                        <h3>Steven Doe</h3>
                        <h4>CEO, Microweber</h4>
                        <p>This team is awesome. I get a great supportand deffenetely recoment Microweber for your next website! </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="slide-holder">
                    <div class="img-holder" style="background-image: url('<?php print template_url(); ?>assets/uploads/testimonial2.png');"></div>
                    <div class="info-holder">
                        <h3>Joana Hanna</h3>
                        <h4>CEO, Microweber</h4>
                        <p>This team is awesome. I get a great supportand deffenetely recoment Microweber for your next website! </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="slide-holder">
                    <div class="img-holder" style="background-image: url('<?php print template_url(); ?>assets/uploads/testimonial3.png');"></div>
                    <div class="info-holder">
                        <h3>John Doe</h3>
                        <h4>CEO, Microweber</h4>
                        <p>This team is awesome. I get a great supportand deffenetely recoment Microweber for your next website! </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="slide-holder">
                    <div class="img-holder" style="background-image: url('<?php print template_url(); ?>assets/uploads/testimonial1.png');"></div>
                    <div class="info-holder">
                        <h3>Steven Doe</h3>
                        <h4>CEO, Microweber</h4>
                        <p>This team is awesome. I get a great supportand deffenetely recoment Microweber for your next website! </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="slide-holder">
                    <div class="img-holder" style="background-image: url('<?php print template_url(); ?>assets/uploads/testimonial2.png');"></div>
                    <div class="info-holder">
                        <h3>Joana Hanna</h3>
                        <h4>CEO, Microweber</h4>
                        <p>This team is awesome. I get a great supportand deffenetely recoment Microweber for your next website! </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="slide-holder">
                    <div class="img-holder" style="background-image: url('<?php print template_url(); ?>assets/uploads/testimonial3.png');"></div>
                    <div class="info-holder">
                        <h3>John Doe</h3>
                        <h4>CEO, Microweber</h4>
                        <p>This team is awesome. I get a great supportand deffenetely recoment Microweber for your next website! </p>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>