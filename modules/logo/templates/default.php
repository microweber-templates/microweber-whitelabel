<?php
$size = $size . 'px';


?>


<a href="<?php if (!in_live_edit()) {
    print site_url();
} else {
    print 'javascript:mw.drag.module_settings();void(0);';
} ?>">
    <?php if ($logoimage == false and $text == false): ?>

        <?php if (is_live_edit()) : ?>
        <span class="logo-text"><span id="fitty-<?php print $params['id'] ?>-1">Microweber</span></span>
    <?php endif; ?>

    <?php else: ?>

    <?php if ($logotype == 'image' or $logotype == 'both' OR $logotype == false): ?>
    <img src="<?php print $logoimage; ?>" alt="" style="max-width: 100%; width: <?php print $size; ?>;" <?php if (in_live_edit()) {
        print 'onclick="javascript:mw.drag.module_settings();void(0);"';
    } ?>/>
    <?php endif; ?>

    <?php if ($logotype == 'text' or $logotype == 'both'): ?>
        <script>
            mw.lib.require('fitty');

            $(document).ready(function () {
                fitty(document.getElementById('fitty-<?php print $params['id'] ?>-1'));
            });
        </script>
    <?php if ($text == '') {
        $text = 'Logo';
    } ?>
        <span class="logo-text"><span id="fitty-<?php print $params['id'] ?>-1" style="font-family: <?php print $font_family; ?>;"><?php print $text; ?></span></span>
    <?php endif; ?>
    <?php endif; ?>
</a>