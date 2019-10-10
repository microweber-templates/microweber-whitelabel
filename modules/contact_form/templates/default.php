<?php

/*

type: layout

name: Default

description: Default

*/

?>

<div class="alert alert-success margin-bottom-30" id="msg<?php print $form_id; ?>" style="display:none;">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong><?php _lang("Thank You", "templates/microweber-whitelabel"); ?>!</strong> <?php _lang("Your message successfully sent", "templates/microweber-whitelabel"); ?>!
</div>

<!--<script>
    $(document).ready(function () {
        $('.section-42 form label').each(function () {
            var thisLabel = $(this).text().trim();
            $(this).next().find("input").attr("placeholder", thisLabel);
            $(this).remove();
        });
    });
</script>-->
<div class="section-42">
    <div class="form">
        <form id="contactform" data-form-id="<?php print $form_id ?>" name="<?php print $form_id ?>" method="post">
            <?php print csrf_form() ?>
            <input type="hidden" name="for" value="contact_form"/>
            <input type="hidden" name="for_id" value="<?php print $params['id']; ?>"/>

            <module type="custom_fields" for-id="<?php print $params['id'] ?>" data-for="module" default-fields="name,email,message" template="bootstrap-4"/>

            <div class="row">
                <div class="col-12">

                    <!-- <div class="form-group">
                        <?php /*if (get_option('disable_captcha', $params['id']) != 'y'): */ ?>
                            <module type="captcha" template="default"/>
                        <?php /*endif; */ ?>
                    </div>-->

                    <module type="btn" template="bootstrap" button_action="submit" button_style="btn-primary" button_size="btn-lg" text="Submit"/>
                </div>
            </div>
        </form>
    </div>
</div>