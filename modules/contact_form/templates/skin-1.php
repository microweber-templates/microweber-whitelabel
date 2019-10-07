<?php

/*

type: layout

name: Skin-1

description: Skin-1

*/

?>

<div class="alert alert-success margin-bottom-30" id="msg<?php print $form_id; ?>" style="display:none;">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong><?php _lang("Thank You", "templates/microweber-whitelabel"); ?>!</strong> <?php _lang("Your message successfully sent", "templates/microweber-whitelabel"); ?>!
</div>

<script>
    $(document).ready(function () {
        $('.section-42 form label').each(function () {
            var thisLabel = $(this).text().trim();
            $(this).next().find("input").attr("placeholder", thisLabel);
            $(this).remove();
        });
    });
</script>
<div class="section-42">
    <div class="form">
        <form id="contactform" data-form-id="<?php print $form_id ?>" name="<?php print $form_id ?>" method="post">
            <?php print csrf_form() ?>
            <input type="hidden" name="for" value="contact_form"/>
            <input type="hidden" name="for_id" value="<?php print $params['id']; ?>"/>

            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="form-group">
                        <label class="control-label" for="first_name">Name</label>
                        <input class="form-control" id="first_name" name="first_name" type="text" placeholder="Your name">
                    </div>
                </div>

                <div class="col-12 col-md-12">
                    <div class="form-group">
                        <label class="control-label" for="phone">Phone</label>
                        <input class="form-control" id="phone" type="text" placeholder="Phone">
                    </div>
                </div>
            </div>

            <!--<div class="row">
                <div class="col-12">
                    <module type="custom_fields" default-fields="first_name, phone, date, time, seats, email, message" input_class="form-control"/>
                </div>
            </div>-->

            <div class="row">
                <div class="col-12">

                    <!-- <div class="form-group">
                        <?php /*if (get_option('disable_captcha', $params['id']) != 'y'): */ ?>
                            <module type="captcha" template="default"/>
                        <?php /*endif; */ ?>
                    </div>-->

                    <module type="btn" template="bootstrap" button_action="submit" button_style="btn-default" button_size="btn-lg btn-block" text="Send"/>
                </div>
            </div>
        </form>
    </div>
</div>