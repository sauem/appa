<?php
/**
 * Template Name: Contact
 */

get_header(); ?>
    <div class="row">
        <div class="head">
            <div class="col-12">
                <h1 class="text-white text-center m-0">Contact</h1>
            </div>
        </div>
    </div>
<section class="container py-5">
    <div class="row">
        <div class="col-5">
            <div class="txt-cam">HI! WE ARE HERE</div>
            SEND EMAIL FOR US
            <div class="py-5">
            <p> <input  type="text" placeholder="Your Name"></p>
             <p>  <input  type="text" placeholder="Your Email"> </p>
              <p><input type="text" placeholder="Subject"> </p>
              <p> <textarea type="text" placeholder="Your Message"></textarea> </p>
                <p ><input type="submit" value="Send" class="send" >  </p>
            </div>
        </div>
        <div class="col-7">
            <img class="img-fluid" src="<?=ASSET?>/assets/images/appa/map.jpg">
           <p class="size-15 text-center pt-4"> <b>Ha Noi</b>: Room 708, 7th Floor, 142 Le Duan, Dong Da / Tel : +84 243 218 1488</p>

            <p class="size-15 text-center"> <b>HCM</b> : 7th floor, 14 Phan Ton, Da Kao ward, District 1, HCM/ Tel :+84 287 108 0503</p>

            <p class="size-15 text-center"> <b>Singapore</b>: 20A TANJONG PAGAR ROAD, Singapore/ Tel :088443</p>
        </div>
    </div>
</section>

<?php
get_footer();
