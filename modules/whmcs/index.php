<?php
$template = get_option('data-template', $params['id']);

$whmcs_url = '';
$settings = get_whitelabel_whmcs_settings();
if (!empty($settings)) {
    $whmcs_url = $settings['whmcs_url'];
}

$whmcs_url = str_replace('https://','//', $whmcs_url);
$whmcs_url = str_replace('http://','//', $whmcs_url);

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
    $style = 'whitelabel';
}

$style_other = get_option('style_other', $params['id']);
if (!isset($style_other) or $style_other == false or $style_other == '') {
    $style_other = '';
}else{
    $style = $style_other;
}

if ($template == false and isset($params['template'])) {
    $template = $params['template'];
}
if ($template != false) {
    $template_file = module_templates($config['module'], $template);
} else {
    $template_file = module_templates($config['module'], 'default');

}

if ($template_file != false and is_file($template_file)) {
    include($template_file);
}
