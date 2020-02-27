<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */


get_header(); ?>

    <section class="m-5 p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <img src="<?=ASSET?>/assets/images/404.jpg" class="img-fluid">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
