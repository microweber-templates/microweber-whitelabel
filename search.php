
<?php include template_dir() . "header.php"; ?>

<script>
    $(document).ready(function () {
        $('.navigation-holder').addClass('not-transparent');
    })
</script>

<?php
$keywords = '';
if (isset($_GET['keywords'])) {
    $keywords = htmlspecialchars($_GET['keywords']);
}

$searchType = '';
if (isset($_GET['search-type'])) {
    $searchType = htmlspecialchars($_GET['search-type']);
}
?>

<section class="iq-breadcrumb overview-block-pt text-center iq-bg iq-bg-fixed iq-over-blue-90" style="background-image: url(<?php print template_url(); ?>assets/images/bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="heading-title white iq-breadcrumb-title iq-mtb-100">
                    <h1 class="title iq-tw-7"><?php _e('Search results for'); ?>: <span><?php print $keywords; ?></span></h1>
                </div>
                <module type="breadcrumb"/>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="m-t-70">
            <?php if ($searchType == 'shop' OR $searchType == ''): ?>
                <h4><em><?php _e('Results found mentioning'); ?></em> &ldquo;<?php print $keywords; ?>&rdquo; <?php _lang("in Shop", "templates/microweber-whitelabel"); ?></h4>
                <br /><br />
                <div class="row">
                    <module type="shop/products" limit="18" keyword="<?php print $keywords; ?>" description-length="70"/>
                </div>
                <br/>
                <br/>
                <hr/>
            <br /><br />
            <?php endif; ?>

            <div class="clearfix"></div>

            <?php if ($searchType == 'blog' OR $searchType == ''): ?>
                <h4><em><?php _e('Results found mentioning'); ?></em> &ldquo;<?php print $keywords; ?>&rdquo; <?php _lang("in Blog", "templates/microweber-whitelabel"); ?></h4>
                <br/>
                <br/>
                <module type="posts" limit="18" keyword="<?php print $keywords; ?>" description-length="70"/>
            <?php endif; ?>
        </div>
    </div>
</section>


<?php include template_dir() . "footer.php"; ?>
