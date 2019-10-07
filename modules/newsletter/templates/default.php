<?php

/*

type: layout

name: Default

description: Default

*/
?>


<div class="row">
    <div class="col-12 text-center edit" rel="module" field="module-<?php print $params['id'] ?>">
        <h3>Subscribe for Our Newsletter</h3>
        <p>Stay up to date with our latest news and products.</p>
        <br/>
    </div>
</div>

<form method="post" id="newsletters-form-<?php print $params['id'] ?>">
    <?php print csrf_form(); ?>

    <div class="row">
        <div class="col-12 col-lg-3">
            <div class="form-group">
                <input type="text" name="first_name" id="first_name" tabindex="1" class="form-control input-lg" placeholder="First name"/>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="form-group">
                <input type="text" name="last_name" id="last_name" tabindex="2" class="form-control input-lg" placeholder="Last name"/>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="form-group">
                <input type="email" name="email" id="email" tabindex="3" class="form-control input-lg" placeholder="Enter your email"/>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <button type="submit" class="btn btn-default btn-block btn-lg" tabindex="4"><?php _lang("Subscribe Now", "templates/microweber-whitelabel"); ?></button>
        </div>
    </div>
</form>