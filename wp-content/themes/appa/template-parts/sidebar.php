<div class="item">
    <h3 class="text-uppercase">Tin mới</h3>
    <?php
        query_posts([
            'post_type' => 'post',
            'posts_per_page' => 3,
            'tax_query' => [
                'taxonomy' => 'category',
                'terms' =>  list1(),
                'field' => 'term_id'
            ],
            'orderby' => 'ID',
            'order' => 'ASC'
        ]);
    while (have_posts()):the_post();
    ?>
    <div class="row my-2">
        <div class="col-4">
           <img src=" <?= simage(get_the_post_thumbnail_url())?>" class="img-fluid">
        </div>
        <div class="col-8">
            <a href="<?= get_the_permalink()?>"><?= get_the_title()?></a>
        </div>
    </div>
    <?php endwhile; wp_reset_query();?>
</div>