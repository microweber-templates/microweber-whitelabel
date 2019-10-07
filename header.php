<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="en">

<head>

    <title>{content_meta_title}</title>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <meta property="og:title" content="{content_meta_title}"/>
    <meta name="keywords" content="{content_meta_keywords}"/>
    <meta name="description" content="{content_meta_description}"/>
    <meta property="og:type" content="{og_type}"/>
    <meta property="og:url" content="{content_url}"/>
    <meta property="og:image" content="{content_image}"/>
    <meta property="og:description" content="{og_description}"/>
    <meta property="og:site_name" content="{og_site_name}"/>
    <script>mw.lib.require('material_icons');</script>


    <script>
        mw.lib.require('bootstrap4');
        mw.lib.require('bootstrap_select');
        mw.lib.require('font_awesome');
        mw.lib.require('mw_icons_mind');
    </script>

    <script>
        $(document).ready(function () {
            $('.selectpicker').selectpicker();
        });
    </script>


    <!-- Plugins Styles -->
    <link href="<?php print template_url(); ?>assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet"/>

    <link href="<?php print template_url(); ?>assets/js/libs/swiper/css/swiper.min.css" rel="stylesheet"/>

    <link href="<?php print template_url(); ?>assets/css/typography.css" rel="stylesheet"/>

    <?php print get_template_stylesheet(); ?>

    <link href="<?php print template_url(); ?>assets/css/custom.css" rel="stylesheet"/>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php include('template_settings.php'); ?>

</head>
<body class="<?php print helper_body_classes(); ?> <?php print $header_style . ' ' . $sticky_navigation; ?> ">
<module type="template_settings" id="mw-template-microweber-whitelabel"/>

<?php if ($preloader == 'true'): ?>
    <div class="js-ajax-loading">
        <module type="logo" id="header-logo" class="w-100"/>
    </div>
<?php endif; ?>

<div class="main">
    <div class="navigation-holder">
        <nav class="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <module type="logo" class="logo" id="header-logo"/>

                    <div class="menu">
                        <module type="menu" id="header-menu" template="navbar"/>

                        <ul class="list mobile-list">
                            <?php if ($profile_link == 'true'): ?>
                                <li class="mobile-profile">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="fa fa-user"></i> <span>Hi <?php print user_name(); ?> <span class="caret"></span></span></a>
                                    <ul class="dropdown-menu">
                                        <?php if (user_id()): ?>
                                            <li><a href="#" data-toggle="modal" data-target="#loginModal"><?php _e("Profile"); ?></a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#ordersModal"><?php _e("My Orders"); ?></a></li>
                                        <?php else: ?>
                                            <li><a href="#" data-toggle="modal" data-target="#loginModal"><?php _e("Login"); ?></a></li>
                                        <?php endif; ?>

                                        <?php if (is_admin()): ?>
                                            <li><a href="<?php print admin_url() ?>"><?php _e("Admin panel"); ?></a></li>
                                        <?php endif; ?>

                                        <?php if (user_id()): ?>
                                            <li><a href="<?php print api_link('logout') ?>"><?php _e("Logout"); ?></a></li>
                                        <?php endif; ?>
                                    </ul>
                                </li>
                            <?php endif; ?>

                            <li class="mobile-search">
                                <form action="<?php print site_url(); ?>search.php" method="get">
                                    <i class="fa fa-search"></i>
                                    <input type="search" id="keywords" name="keywords"/>
                                    <button type="submit">Search</button>
                                </form>
                            </li>
                        </ul>
                    </div>

                    <div class="toggle">
                        <a href="javascript:;" class="js-menu-toggle">
                            <span class="mobile-menu-label">
                                <b>Menu</b>
                                <b>Close</b>
                            </span>
                            <span class="mobile-menu-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </a>
                    </div>

                    <ul class="member-nav">
                        <li class="btn-search edit nodrop safe-mode" field="microweber-whitelabel_header_phone" rel="global">
                            <div class="search d-flex">
                                <module type="btn" button_style="btn-link" button_size="btn-md" button_text="<?php _lang('Create a Website', 'templates/microweber-whitelabel'); ?>" id="header-get-started"/>
                                <module type="btn" button_style="btn-default-outline m-l-10" button_size="btn-md" button_text="<?php _lang('Download', 'templates/microweber-whitelabel'); ?>" id="header-download"/>
                            </div>
                        </li>

                        <?php if ($shopping_cart == 'true'): ?>
                            <li class="dropdown btn-cart">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-shopping-basket"></i> <span><span id="shopping-cart-quantity"><?php print cart_sum(false); ?></span> <span class="caret"></span></span></a>
                                <div class="dropdown-menu shopping-cart">
                                    <module type="shop/cart" template="small"/>
                                </div>
                            </li>
                        <?php endif; ?>

                        <?php if ($profile_link == 'true'): ?>
                            <li class="dropdown btn-member edit nodrop safe-mode" field="microweber-whitelabel_header_login" rel="global">
                                <a href="#" class="dropdown-button safe-element"><i class="fa fa-user safe-element"></i> <span class="safe-element"><?php _lang('Login', 'templates/microweber-whitelabel'); ?></span></a>
                            </li>
                            <?php /*<li class="dropdown btn-member">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> <span>Account <span class="caret"></span></span></a>
                                <ul class="dropdown-menu">
                                    <?php if (user_id()): ?>
                                        <li><a href="#" data-toggle="modal" data-target="#loginModal"><?php _e("Profile"); ?></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#ordersModal"><?php _e("My Orders"); ?></a></li>
                                    <?php else: ?>
                                        <li><a href="#" data-toggle="modal" data-target="#loginModal"><?php _e("Login"); ?></a></li>
                                    <?php endif; ?>

                                    <?php if (is_admin()): ?>
                                        <li><a href="<?php print admin_url() ?>"><?php _e("Admin panel"); ?></a></li>
                                    <?php endif; ?>

                                    <?php if (user_id()): ?>
                                        <li><a href="<?php print api_link('logout') ?>"><?php _e("Logout"); ?></a></li>
                                    <?php endif; ?>
                                </ul>
                            </li>*/ ?>
                        <?php endif; ?>
                    </ul>

                </div>
            </div>
        </nav>
    </div>