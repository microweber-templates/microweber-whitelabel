<?php

/*

type: layout
content_type: static
name: Text page
position: 2
description: Text layout

*/


?>
<?php include template_dir() . "header.php"; ?>
<script>
    $(document).ready(function () {
        $('.navigation-holder').addClass('not-transparent');
    })
</script>

<div class="edit" rel="content" field="content">
    <module type="layouts" template="skin-17"/>
    <module type="layouts" template="skin-3"/>
</div>

<?php include template_dir() . "footer.php"; ?>
