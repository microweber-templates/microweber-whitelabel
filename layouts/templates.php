<?php

/*

type: layout
content_type: static
name: Templates
position: 2
description: Templates

*/


?>
<?php include template_dir() . "header.php"; ?>

<script>
    $(document).ready(function () {
        $('.navigation-holder').addClass('not-transparent');
    })
</script>

<div class="x-edit" rel="content" field="microweber-whitelabel_content">
    <module type="whmcs" template="templates"/>
</div>

<?php include template_dir() . "footer.php"; ?>
