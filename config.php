<?php

$config = array();
$config['name'] = "Microweber White Label";
$config['author'] = "Microweber";
$config['version'] = 1.0;
$config['url'] = "http://microweber.com";
$config['standalone_module_skins'] = true;
$config['framework'] = "bootstrap4";

$config['is_default'] = 0; //if you set this parameter the template will be selected on the install screen

$config['stylesheet_compiler']['source_file'] = 'assets/css/less/main.less';
$config['stylesheet_compiler']['css_file'] = 'assets/css/main.css';
$config['stylesheet_compiler']['settings']['default'] = array('type' => 'color', 'default' => '#ff768c', 'label' => 'Default color');
$config['stylesheet_compiler']['settings']['primary'] = array('type' => 'color', 'default' => '#222222', 'label' => 'Primary color');
$config['stylesheet_compiler']['settings']['textDark'] = array('type' => 'color', 'default' => '#222222', 'label' => 'Text Dark');
$config['stylesheet_compiler']['settings']['textLight'] = array('type' => 'color', 'default' => '#fff', 'label' => 'Text Light');
$config['stylesheet_compiler']['settings']['dark'] = array('type' => 'color', 'default' => '#222222', 'label' => 'Dark color');
$config['stylesheet_compiler']['settings']['light'] = array('type' => 'color', 'default' => '#fff', 'label' => 'Light color');
$config['stylesheet_compiler']['settings']['silver'] = array('type' => 'color', 'default' => '#f3f3f3', 'label' => 'Silver');
$config['stylesheet_compiler']['settings']['grey'] = array('type' => 'color', 'default' => '#f3f3f3', 'label' => 'Grey');
$config['stylesheet_compiler']['settings']['bodyFontSize'] = array('type' => 'text', 'default' => '14px', 'label' => 'Body Font Size');

//Stylesheet Settings / accept type="dropdown" and type="text" and type="title" and type="delimiter"
$config['template_settings'][] = array('type' => 'title', 'label' => 'Header Options');

$config['template_settings']['sticky_navigation'] = array('type' => 'dropdown', 'default' => 'sticky-nav', 'label' => 'Sticky Sidebar');
$config['template_settings']['sticky_navigation']['options'] = array('sticky-nav' => 'Yes', '' => 'No');

$config['template_settings']['header_style'] = array('type' => 'dropdown', 'default' => 'header-inverse', 'label' => 'Header Style');
$config['template_settings']['header_style']['options'] = array('header-inverse' => 'Black', 'header-normal' => 'White');

$config['template_settings']['shopping_cart'] = array('type' => 'dropdown', 'default' => 'false', 'label' => 'Show shopping cart in header');
$config['template_settings']['shopping_cart']['options'] = array('true' => 'Yes', 'false' => 'No');

$config['template_settings']['profile_link'] = array('type' => 'dropdown', 'default' => 'false', 'label' => 'Show Profile link in header');
$config['template_settings']['profile_link']['options'] = array('false' => 'No', 'true' => 'Yes');

$config['template_settings']['preloader'] = array('type' => 'dropdown', 'default' => 'true', 'label' => 'Turn on preloader');
$config['template_settings']['preloader']['options'] = array('true' => 'Yes', 'false' => 'No');

$config['template_settings'][] = array('type' => 'delimiter');

$config['template_settings'][] = array('type' => 'title', 'label' => 'Footer Options');

$config['template_settings']['footer'] = array('type' => 'dropdown', 'default' => 'true', 'label' => 'Turn on Footer for the website', 'help' => 'You can hide the footer from your website');
$config['template_settings']['footer']['options'] = array('true' => 'Yes', 'false' => 'No');

//Layouts Padding Top & Bottom classes definiton
$config['layouts_css_classes'] = [];
$config['layouts_css_classes']['padding-top']['none'] = 'p-t-0';
$config['layouts_css_classes']['padding-top'][1] = 'p-t-10';
$config['layouts_css_classes']['padding-top'][2] = 'p-t-20';
$config['layouts_css_classes']['padding-top'][3] = 'p-t-30';
$config['layouts_css_classes']['padding-top'][4] = 'p-t-40';
$config['layouts_css_classes']['padding-top'][5] = 'p-t-50';
$config['layouts_css_classes']['padding-top'][6] = 'p-t-60';
$config['layouts_css_classes']['padding-top'][7] = 'p-t-70';
$config['layouts_css_classes']['padding-top'][8] = 'p-t-80';
$config['layouts_css_classes']['padding-top'][9] = 'p-t-90';
$config['layouts_css_classes']['padding-top'][10] = 'p-t-100';
$config['layouts_css_classes']['padding-top'][15] = 'p-t-150';
$config['layouts_css_classes']['padding-top'][20] = 'p-t-200';

$config['layouts_css_classes']['padding-bottom']['none'] = 'p-b-0';
$config['layouts_css_classes']['padding-bottom'][1] = 'p-b-10';
$config['layouts_css_classes']['padding-bottom'][2] = 'p-b-20';
$config['layouts_css_classes']['padding-bottom'][3] = 'p-b-30';
$config['layouts_css_classes']['padding-bottom'][4] = 'p-b-40';
$config['layouts_css_classes']['padding-bottom'][5] = 'p-b-50';
$config['layouts_css_classes']['padding-bottom'][6] = 'p-b-60';
$config['layouts_css_classes']['padding-bottom'][7] = 'p-b-70';
$config['layouts_css_classes']['padding-bottom'][8] = 'p-b-80';
$config['layouts_css_classes']['padding-bottom'][9] = 'p-b-90';
$config['layouts_css_classes']['padding-bottom'][10] = 'p-b-100';
$config['layouts_css_classes']['padding-bottom'][15] = 'p-b-150';
$config['layouts_css_classes']['padding-bottom'][20] = 'p-b-200';

