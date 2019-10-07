<?php

/*

type: layout
content_type: static
name: Plans MW
position: 2
description: Plans MW

*/


?>
<?php include template_dir() . "header.php"; ?>

<script>
    $(document).ready(function () {
        $('.navigation-holder').addClass('not-transparent');
    })
</script>

<div class="edit" rel="content" field="microweber-whitelabel_content">
    <module type="layouts" template="skin-3" />
    <module type="layouts" template="skin-25" />
    <div class="p-b-200 p-t-200"></div>
</div>

<?php include template_dir() . "footer.php"; ?>
