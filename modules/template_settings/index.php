<?php $theme_color_1 = get_option('theme-color-1', 'mw-template-microweber-whitelabel'); ?>
<?php $theme_color_2 = get_option('theme-color-2', 'mw-template-microweber-whitelabel'); ?>
<?php $theme_color_3 = get_option('theme-color-3', 'mw-template-microweber-whitelabel'); ?>
<?php $theme_color_4 = get_option('theme-color-4', 'mw-template-microweber-whitelabel'); ?>
<?php $theme_color_5 = get_option('theme-color-5', 'mw-template-microweber-whitelabel'); ?>

<?php if (isset($theme_color_1) AND $theme_color_1 != '' OR isset($theme_color_2) AND $theme_color_2 != '' OR isset($theme_color_3) AND $theme_color_3 != '' OR isset($theme_color_4) AND $theme_color_4 != '' OR isset($theme_color_5) AND $theme_color_5 != '') : ?>
    <?php $theme_color_1 = str_replace('#', '', $theme_color_1); ?>
    <?php $theme_color_2 = str_replace('#', '', $theme_color_2); ?>
    <?php $theme_color_3 = str_replace('#', '', $theme_color_3); ?>
    <?php $theme_color_4 = str_replace('#', '', $theme_color_4); ?>
    <?php $theme_color_5 = str_replace('#', '', $theme_color_5); ?>
    <link href="<?php print api_url(); ?>theme_colors_palette_css?color1=<?php print $theme_color_1; ?>&color2=<?php print $theme_color_2; ?>&color3=<?php print $theme_color_3; ?>&color4=<?php print $theme_color_4; ?>&color5=<?php print $theme_color_5; ?>" rel="stylesheet" type="text/css" media="all"/>
<?php endif; ?>
