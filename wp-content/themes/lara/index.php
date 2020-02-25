<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<section class="section-1">
    <div class="container">
        <div class="row ">
            <div class="col-12 col-md-6 offset-md-1">
                <ul class="top-info pt-5">
                    <li>Cover <span>97%</span> Asia internet user</li>
                    <li>Upto <span>9 BILLION</span> impressions</li>
                    <li>Upto <span>700 target</span> criteria</li>
                </ul>
            </div>
        </div>
    </div>
    <img id="cham1" src="<?=ASSET?>/assets/images/dot.png" class="img-fluid">
</section>
<section class="section-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3 col-12">
                <img src="<?=ASSET?>/assets/images/cup.png" class="img-fluid"/>
            </div>
            <div class="col-md-9 pl-md-0 col-12">
                <h3>PROMOTION FOR CUSTOMER</h3>
            </div>
            <div class="col-12 col-md-4">
                <h1>1 MONTH</h1>
            </div>
            <div class="col-md-6 col-12">
                <p>miễn phí kiểm tra sản lượng trên
                    <span>Appsflyer</span> ( đơn vị đo lường cho apps lớn nhất thị trường quốc tế)
                </p>
            </div>
        </div>
    </div>
    <img id="cham5" src="<?=ASSET?>/assets/images/cham5.png">
    <img id="cham3" src="<?=ASSET?>/assets/images/cham3.png">
</section>
<section class="section-3 d-flex align-items-center">
    <div id="trapezoid"></div>
    <img id="cham4" src="<?=ASSET?>/assets/images/cham4.png">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5">
                <img id="cham3" src="<?=ASSET?>/assets/images/eart.png">
            </div>
            <div class="col-md-7">
                <ul class="top-info">
                    <li>Cover <span>97%</span> Asia internet user</li>
                    <li>Upto <span>9 BILLION</span> impressions</li>
                    <li>Upto <span>700 target</span> criteria</li>
                </ul>
            </div>
            <div class="col-md-10 offset-md-1">
                <h1><span>MODERN FORMATS</span>, especially scratch banner and
                    360 degree banner are 1st time ever appear in Vietnam</h1>
            </div>
        </div>
    </div>
</section>
<section class="section-4">
    <img id="cham6" src="<?=ASSET?>/assets/images/lq.png">
    <img id="cham2" src="<?=ASSET?>/assets/images/cham2.png">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-12">
                <h1 class="text-center">CLIENT</h1>
            </div>
            <div class="col-3">
                <img src="<?=ASSET?>/assets/images/log1.png">
            </div>
            <div class="col-3">
                <img src="<?=ASSET?>/assets/images/log2.png">
            </div>
            <div class="col-3">
                <img src="<?=ASSET?>/assets/images/logo3.png">
            </div>
            <div class="col-3">
                <img src="<?=ASSET?>/assets/images/logo4.png">
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
