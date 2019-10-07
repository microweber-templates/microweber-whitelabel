<div class="edit" field="active_blog_sidebar" rel="inherit">
    <div class="sidebar allow-drop">
        <div class="sidebar__widget">
            <h6><?php _lang("Categories", "templates/microweber-whitelabel"); ?></h6>
            <hr>

            <module type="categories" content-id="<?php print PAGE_ID; ?>"/>
        </div>

        <div class="sidebar__widget">
            <h6><?php _lang("Last posts", "templates/microweber-whitelabel"); ?></h6>
            <hr>
            <module type="posts" template="skin-2" limit="3" hide_paging="true" id="blog_sidebar_posts"/>
        </div>

        <div class="sidebar__widget">
            <h6><?php _lang("Follow us", "templates/microweber-whitelabel"); ?></h6>
            <hr>
            <module type="social_links" id="blog_sidebar_socials"/>
        </div>

        <div class="sidebar__widget">
            <h6><?php _lang("Tags", "templates/microweber-whitelabel"); ?></h6>
            <hr>
            <module type="tags" id="blog_sidebar_tags"/>
        </div>

        <div class="sidebar__widget">
            <h6><?php _lang("About Us", "templates/microweber-whitelabel"); ?></h6>
            <hr>
            <p>
                <?php _lang("We're a digital focussed collective working with individuals and businesses to establish rich, engaging online presences.", "templates/microweber-whitelabel"); ?>
            </p>
        </div>
    </div>
</div>
