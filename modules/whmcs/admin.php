<?php only_admin_access(); ?>

<?php
$settings = get_whitelabel_whmcs_settings();

/*$whmcs_url = get_option('whmcs_url', $params['id']);
if (!isset($whmcs_url) or $whmcs_url == false or $whmcs_url == '') {
    $whmcs_url = $settings['whmcs_url'];
}*/

$target = get_option('target', $params['id']);
if (!isset($target) or $target == false or $target == '') {
    $target = '';
}


$templates_style = get_option('templates-style', $params['id']);
if (!isset($templates_style) or $templates_style == false or $templates_style == '') {
    $templates_style = 'v1';
}

$template_preview_style = get_option('template-preview-style', $params['id']);
if (!isset($template_preview_style) or $template_preview_style == false or $template_preview_style == '') {
    $template_preview_style = 'v1';
}

$domain_style = get_option('domain-style', $params['id']);
if (!isset($domain_style) or $domain_style == false or $domain_style == '') {
    $domain_style = 'v1';
}

$plan_style = get_option('plan-style', $params['id']);
if (!isset($plan_style) or $plan_style == false or $plan_style == '') {
    $plan_style = 'v1';
}


$style = get_option('style', $params['id']);
if (!isset($style) or $style == false or $style == '') {
    $style = 'default';
}

$style_other = get_option('style_other', $params['id']);
if (!isset($style_other) or $style_other == false or $style_other == '') {
    $style_other = '';
}
?>
<script type="text/javascript">mw.require('options.js');</script>
<script>
    $(document).ready(function () {
        mw.options.form('.<?php print $config['module_class'] ?>', function () {
            window.parent.mw.url.windowDeleteHashParam('frameurl');

            /*var r = confirm("Do you want to reload the page to see the changes?");
             if (r == true) {
             top.location.reload();
             } else {

             }*/
        });
    });
</script>

<div class="mw-modules-tabs">
    <div class="mw-accordion-item">
        <div class="mw-ui-box-header mw-accordion-title">
            <div class="header-holder">
                <i class="mw-icon-gear"></i> <?php print _e('Settings'); ?>
            </div>
        </div>
        <div class="mw-accordion-content mw-ui-box mw-ui-box-content">
            <!-- Settings Content -->
            <div class="module-live-edit-settings module-whmcs-settings">
               <!--
                <div class="mw-ui-field-holder">
                    <label class="mw-ui-label"><?php /*_e('Your WHMCS URL'); */?></label>
                    <input type="text" class="mw_option_field mw-ui-field mw-full-width" placeholder="Example: https://members.microweber.com" name="whmcs_url" value="<?php /*print $whmcs_url; */?>">
                </div>-->

                <div class="mw-ui-field-holder">
                    <label class="mw-ui-label"><?php _e('Open at'); ?></label>
                    <select name="target" class="mw_option_field mw-ui-field mw-full-width">
                        <option value="" <?php if ($target == ''): ?>selected<?php endif; ?>>Current box</option>
                        <option value="top" <?php if ($target == 'top'): ?>selected<?php endif; ?>>New window</option>
                    </select>
                </div>
                <?php /*
                <div class="mw-ui-field-holder">
                    <label class="mw-ui-label"><?php _e('Templates Style'); ?></label>
                    <select name="templates-style" class="mw_option_field mw-ui-field mw-full-width">
                        <option value="v1" <?php if ($templates_style == 'v1'): ?>selected<?php endif; ?>>Style 1</option>
                        <option value="v2" <?php if ($templates_style == 'v2'): ?>selected<?php endif; ?>>Style 2</option>
                    </select>
                </div>

                <div class="mw-ui-field-holder">
                    <label class="mw-ui-label"><?php _e('Template Preview Style'); ?></label>
                    <select name="template-preview-style" class="mw_option_field mw-ui-field mw-full-width">
                        <option value="v1" <?php if ($template_preview_style == 'v1'): ?>selected<?php endif; ?>>Style 1</option>
                        <option value="v2" <?php if ($template_preview_style == 'v2'): ?>selected<?php endif; ?>>Style 2</option>
                    </select>
                </div>

                <div class="mw-ui-field-holder">
                    <label class="mw-ui-label"><?php _e('Domain Style'); ?></label>
                    <select name="domain-style" class="mw_option_field mw-ui-field mw-full-width">
                        <option value="v1" <?php if ($domain_style == 'v1'): ?>selected<?php endif; ?>>Style 1</option>
                        <option value="v2" <?php if ($domain_style == 'v2'): ?>selected<?php endif; ?>>Style 2</option>
                        <option value="v3" <?php if ($domain_style == 'v3'): ?>selected<?php endif; ?>>Style 3</option>
                    </select>
                </div>

                <div class="mw-ui-field-holder">
                    <label class="mw-ui-label"><?php _e('Plan Style'); ?></label>
                    <select name="plan-style" class="mw_option_field mw-ui-field mw-full-width">
                        <option value="v1" <?php if ($plan_style == 'v1'): ?>selected<?php endif; ?>>Style 1</option>
                        <option value="v2" <?php if ($plan_style == 'v2'): ?>selected<?php endif; ?>>Style 2</option>
                    </select>
                </div>
                */ ?>

                <div class="mw-ui-field-holder">
                    <label class="mw-ui-label"><?php _e('Style'); ?></label>
                    <select name="style" class="mw_option_field mw-ui-field mw-full-width">
                        <option value="default" <?php if ($style == 'default'): ?>selected<?php endif; ?>>Default</option>
                        <option value="microweber.com" <?php if ($style == 'microweber.com'): ?>selected<?php endif; ?>>Microweber.com</option>
<!--                        <option value="microweber.bg" --><?php //if ($style == 'microweber.bg'): ?><!--selected--><?php //endif; ?><!-->Microweber.bg</option>-->
<!--                        <option value="olaweb" --><?php //if ($style == 'olaweb'): ?><!--selected--><?php //endif; ?><!-->OlaWeb</option>-->
                        <option value="whitelabel" <?php if ($style == 'whitelabel'): ?>selected<?php endif; ?>>White Label</option>
                    </select>
                </div>

                <div class="mw-ui-field-holder">
                    <label class="mw-ui-label"><?php _e('Other Style'); ?> <small>This will skip Style</small></label>
                    <input type="text" class="mw_option_field mw-ui-field mw-full-width" placeholder="Example: microweber.bg" name="style_other" value="<?php print $style_other; ?>">
                </div>
            </div>
            <!-- Settings Content - End -->
        </div>
    </div>

    <div class="mw-accordion-item">
        <div class="mw-ui-box-header mw-accordion-title">
            <div class="header-holder">
                <i class="mw-icon-beaker"></i> <?php print _e('Templates'); ?>
            </div>
        </div>
        <div class="mw-accordion-content mw-ui-box mw-ui-box-content">
            <module type="admin/modules/templates"/>
        </div>
    </div>
</div>
