<?php

/*

type: layout

name: Default

description: Login default

*/

?>
<?php $user = user_id(); ?>
<?php $have_social_login = false; ?>

<?php if ($user != false): ?>
        <module type="users/profile"/>
<?php else: ?>
    <script>
        $('.js-show-register-window', '#<?php print $params['id'] ?>').on('click', function () {
            $('.js-login-window').hide();
            $('.js-register-window').show();
        })
        $('.js-show-login-window', '#<?php print $params['id'] ?>').on('click', function () {
            $('.js-register-window').hide();
            $('.js-login-window').show();
        })
    </script>



    <div id="user_login_holder_<?php print $params['id'] ?>">

        <p>If you already have an account <br/>you can use it to log in.<br/><br/></p>

        <form method="post" id="user_login_<?php print $params['id'] ?>" action="#" autocomplete="off">

            <div class="alert alert-mini alert-danger margin-bottom-30" style="margin: 0;display: none;"></div>

            <div class="form-group">
                <input class="form-control input-lg" type="text" name="username" placeholder="Username or E-mail">
            </div>

            <div class="form-group m-t-20">
                <input class="form-control input-lg" type="password" name="password" placeholder="Password">
            </div>

            <?php if (isset($login_captcha_enabled) and $login_captcha_enabled): ?>
                <module type="captcha"/>
            <?php endif; ?>

            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label class="styled-checkbox"> Remember me
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <p><a href="<?php print forgot_password_url(); ?>">Forgot your password ?</a></p>
                </div>
            </div>

            <button type="submit" class="btn btn-default btn-lg btn-block m-t-10"><?php _e("Login"); ?></button>
        </form>

        <?php
        # Login Providers
        $facebook = get_option('enable_user_fb_registration', 'users') == 'y';
        $twitter = get_option('enable_user_twitter_registration', 'users') == 'y';
        $google = get_option('enable_user_google_registration', 'users') == 'y';
        $windows = get_option('enable_user_windows_live_registration', 'users') == 'y';
        $github = get_option('enable_user_github_registration', 'users') == 'y';
        $mw_login = get_option('enable_user_microweber_registration', 'users') == 'y';

        if ($facebook or $twitter or $google or $windows or $github) {
            $have_social_login = true;
        } else {
            $have_social_login = false;
        }
        ?>

        <?php if ($have_social_login): ?>
            <div class="socials-login">
                <?php if ($facebook): ?>
                    <a href="<?php print api_link('user_social_login?provider=facebook') ?>" class="facebook"><i class="fa fa-facebook"></i></a>
                <?php endif; ?>

                <?php if ($twitter): ?>
                    <a href="<?php print api_link('user_social_login?provider=twitter') ?>" class="twitter"><i class="fa fa-twitter"></i></a>
                <?php endif; ?>

                <?php if ($google): ?>
                    <a href="<?php print api_link('user_social_login?provider=google') ?>" class="gplus"><i class="fa fa-google-plus"></i></a>
                <?php endif; ?>

                <?php if ($github): ?>
                    <a href="<?php print api_link('user_social_login?provider=github') ?>" class="github"><i class="fa fa-github"></i></a>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <br/>

        <p class="or"><span>or</span></p>

        <div class="act create">
            <a href="#" class="js-show-register-window"><span>Create New Account</span></a>
        </div>
    </div>
<?php endif; ?>

