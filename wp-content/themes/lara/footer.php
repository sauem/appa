<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php wp_footer(); ?>

<section class="footer" style="padding-top: <?=is_front_page() ?'400px' :'0px' ?>">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3">
                <img id="cham2" src="<?=ASSET?>/assets/images/footer.png">
            </div>
            <div class="col-12 col-md-3">
                <h4 class="title">ABOUT US</h4>
            </div>
            <div class="col-12 col-md-3">
                <h4 class="title">GET IN TOUCH</h4>
                <ul>
                    <li>Address:</li>
                    <li>Phone:</li>
                    <li>Email:</li>
                </ul>
            </div>
            <div class="col-12 col-md-3">
                <h4 class="title">SOCIAL MEDIA</h4>
                <div class="social">

                </div>
            </div>
        </div>
    </div>
</section>
<div id="scrollTop">
    
</div>
</body>
</html>
