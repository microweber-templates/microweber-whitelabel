<?php

/*

type: layout

name: Sidebar Posts

description: Sidebar Posts

*/
?>


<div class="row blog-posts-2">
    <?php if (!empty($data)): ?>
        <?php foreach ($data as $item): ?>
            <div class="m-b-10 col-12" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
                <a href="<?php print $item['link'] ?>" itemprop="url">
                    <div class="post  d-flex align-content-center align-self-center align-items-center">
                        <?php if (!isset($show_fields) or $show_fields == false or in_array('thumbnail', $show_fields)): ?>
                            <div class="image" style="background-image: url('<?php print thumbnail($item['image'], 120, 120, true); ?>');"></div>
                        <?php endif; ?>
                        <div class="description">
                            <?php if (!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                                <h5><?php print $item['title'] ?></h5>
                            <?php endif; ?>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>