<?php

/*

type: layout
content_type: static
name: Get started
position: 2
description: Get started

*/


?>
<?php include template_dir() . "header.php"; ?>

<script>
    $(document).ready(function () {
//        $('.navigation-holder').addClass('not-transparent');
        $('.navigation-holder').remove();
        $('footer').remove();
    })
</script>

<style>
    .main{
        height:100vh;
    }

    .x-edit{
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
    }
</style>

<div class="x-edit" rel="content" field="microweber-whitelabel_content">
<!--    <script src="https://members.microweber.com/modules/addons/microweber_addon/order/embed.js?domain-style=v1" crossorigin="anonymous"></script>-->
    <module type="layouts" template="skin-24" />
    <div class="p-b-200 p-t-200"></div>
</div>

<?php include template_dir() . "footer.php"; ?>
