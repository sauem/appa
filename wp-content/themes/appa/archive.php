<?php
get_header();
?>
<?php get_template_part('template-parts/bread')?>
<section class="container">
    <div class="row">
        <div class="col-md-9 col-12">
            <div class="row">
                <?php
                while (have_posts()) : the_post();
                ?>
                    <div class="col-md-4 col-12">
                        <div class="card">
                            <img class="img-fluid rounded" src="<?= simage(get_the_post_thumbnail_url(), [300,200]) ?>">
                            <h2 class="item-title"><?=get_the_title()?></h2>
                            <p class="text-3"><?=get_the_excerpt()?></p>
                            <?php $id = get_the_ID();?>

                        </div>
                    </div>
                <?php endwhile;?>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <?= get_template_part("template-parts/sidebar") ?>
        </div>
    </div>
</section>
<?php
get_footer();

