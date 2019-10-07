<?php include template_dir() . "header.php"; ?>
    <script>
        $(document).ready(function () {
            $('.navigation-holder').addClass('not-transparent');
        })
    </script>
    <div class="blog-inner-page" id="blog-content-<?php print CONTENT_ID; ?>">
        <?php $post = get_content_by_id(CONTENT_ID); ?>

        <div class="container m-t-100">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="row">
                        <div class="col-lg-8">

                            <section class="p-t-0 p-b-50">
                                <div class="container padding">
                                    <div class="row">
                                        <div class="col-12">
                                            <module type="pictures" rel="content" template="skin-2" id="blog-post-pictures"/>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="p-t-20 p-b-50">
                                <div class="container padding">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="heading">
                                                <h1><?php print content_title(); ?></h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="p-t-0 p-b-10 section">
                                <div class="container padding">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="description edit dropcap" field="content" rel="content">
                                                <div class="element">
                                                    <p align="justify"><?php print _e("This text is set by default and is suitable for edit in real time. By default the drag and drop core feature will allow you to position it anywhere on the site. Get creative, Make Web."); ?></p>
                                                </div>
                                            </div>

                                            <div class="m-t-40">
                                                <module type="sharer" id="post-bottom-sharer"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <module type="comments" template="skin-1" data-content-id="<?php print CONTENT_ID; ?>"/>
                        </div>

                        <div class="col-lg-4">
                            <?php include template_dir() . "layouts/blog_sidebar.php"; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php include template_dir() . "footer.php"; ?>