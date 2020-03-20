<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

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
                      <div class="col-12">
                          <h1><?=get_the_title()?></h1>
                          <?php the_content();?>
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
