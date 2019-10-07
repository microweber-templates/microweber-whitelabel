<?php

/*

type: layout

name: Templates

position: 5

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-150';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-150';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<div data-bg-contain class="edit safe-mode nodrop" field="layout-skin-5-<?php print $params['id'] ?>" rel="module">
    <section class="section-13 inverse">
        <div class="container <?php print $layout_classes; ?> background-image-holder" style="background-image: url('<?php print template_url(); ?>assets/img/templates_bg.png');">
            <div class="row">
                <div class="col-xl-10 mx-auto allow-drop">
                    <h2 class="fx-deactivate"><?php print _lang('Зашеметяващ дизайн за вашия сайт', 'templates/microweber-whitelabel'); ?></h2>
                    <p class="fx-deactivate"><?php print _lang('Създай лесно нов, модерен и красив уебсайт!', 'templates/microweber-whitelabel'); ?></p>
                    <br/><br/>
                    <img src="<?php print template_url(); ?>assets/img/templates.png" alt=""/>
                    <br/>
                    <br/>
                    <br/>
                    <p class="fx-deactivate"><?php print _lang('Страхотни темплейти чакат теб за последни щрихи. <br/> Избери един и си го направи по свой вкус', 'templates/microweber-whitelabel'); ?></p>
                    <br/>
                    <module type="btn" template="bootstrap" button_style="btn-default-outline" button_size="btn-md" text="<?php print _lang('Открий още темплейти', 'templates/microweber-whitelabel'); ?>" class="fx-particles-2"/>
                </div>
            </div>
        </div>
    </section>
</div>