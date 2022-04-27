<div class="sidebar-block product-tags">
    <div class="title-block">
        Thẻ liên quan (tags)
    </div>
    <div class="block-content">
        <ul class="listSidebarBlog list-unstyled">

            <?php foreach ($data['tags'] as $tag) { print_r($tag);?>
                <li>
                    <a href="#" title="Show products matching tag <?=$tag['']?>">Hot Trend</a>
                </li>
            <?php }?>

        </ul>
    </div>
</div>