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
    <section>
        <img src="<?= ASSET ?>/assets/images/appa/head.png" class="img-fluid"/>
    </section>
    <section class="section-2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <h1 class="text-center py-5">PROMOTION FOR CUSTOMERS</h1>
                </div>
                <div class="col-3">
                    <img src="<?= ASSET ?>/assets/images/appa/cup.png" class="img-fluid"/>
                </div>
                <div class="col-3">
                    <img src="<?= ASSET ?>/assets/images/appa/500.png" class="img-fluid"/>
                </div>
                <div class="col-6">
                    <h2>cho 30 khách hàng đầu tiên (*) khi chạy CPI/CPA Appa</h2>
                </div>
                <div class="col-3">
                    <img src="<?= ASSET ?>/assets/images/appa/cup.png" class="img-fluid"/>
                </div>
                <div class="col-3">
                    <img src="<?= ASSET ?>/assets/images/appa/1month.png" class="img-fluid"/>
                </div>
                <div class="col-6">
                    <h2>miễn phí kiểm tra sản lượng trên
                        Appsflyer (đơn vị đo lường cho
                        apps lớn nhất thị trường quốc tế)</h2>
                </div>
            </div>
        </div>
        <img src="<?= ASSET ?>/assets/images/appa/phone.png" class="img-fluid"/>
    </section>
    <section class="section-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center py-5">Introduce about APPA</h1>
                </div>
                <div class="col-12">
                    <ul>
                        <li>Up to 20.000 installs/ day</li>
                        <li>Up to 4.000 actions/day (Purchase, order...)</li>
                        <li>NRU: ~60%</li>
                        <li>Loyal rate: ~60%</li>
                        <li>Retention rate: > 30%</li>
                        <li>SEA and worldwide coverage</li>
                    </ul>
                </div>
            </div>
        </div>
        <img id="image" src="<?= ASSET ?>/assets/images/appa/ab.png" class="img-fluid"/>
    </section>
    <section class="section-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center py-5">CLIENT</h1>
                </div>
                <div class="col-12">

                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
