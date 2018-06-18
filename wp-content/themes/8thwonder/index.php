<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
get_header();
?>

<section class="intro_section page_mainslider ds">
    <div class="flexslider" data-dots="true" data-nav="te">
        <?php echo do_shortcode( '[responsive_slider]' ); ?>
    </div>
    <!-- eof flexslider -->
</section>
<section id="about" class="ls section_padding_top_40 section_padding_bottom_40 table_section table_section_md columns_margin_bottom_30">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-push-6 text-center"> <img src="images/about.png" alt=""> </div>
            <div class="col-md-6 col-md-pull-6">
                <h6 class="highlight">about me</h6>
                <h2 class="section_header">Info/Bio</h2>
                <p class="fontsize_20">8th Wonder Promos we provide the Best DJ Service.</p>
                <div class="inline-content topmargin_25"> <span class="small-text">Follow Me:</span> <span>
                        <a class="social-icon socicon-facebook" href="#" title="Facebook"></a>
                        <a class="social-icon socicon-twitter" href="#" title="Twitter"></a>
                        <a class="social-icon socicon-google" href="#" title="Twitter"></a>
                        <a class="social-icon socicon-linkedin" href="#" title="Twitter"></a>
                        <a class="social-icon socicon-youtube" href="#" title="Youtube"></a>
                    </span> </div>
            </div>
        </div>
    </div>
</section>
<section id="latest-album" class="ls ms section_padding_top_150 section_padding_bottom_100 columns_margin_bottom_30 columns_padding_25">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h6 class="highlight">membership</h6>
                <h2 class="section_header">Plans</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="promos">  
                    <div class="promo first">
                        <h4>Monthly</h4>
                        <ul class="features">
                            <li class="brief">Monthly membership</li>
                            <li class="price">$19.99</span></li>
                            <li>Will Be Renewed Every Month</li>
                            <li>All Contents Available For 1 Month</li>
                            <li>Store Discount</li>
                            <li class="buy"><button onclick="window.location.replace('https://www.8thwonderpromos.com/amember/signup/monthly')">Sign up</button></li>   
                        </ul>
                    </div>
                    <div class="promo third scale">
                        <h4>Annual</h4>
                        <ul class="features">
                            <li class="brief">Annual membership</li>
                            <li class="price">$199.99</li>
                            <li>Will Be Renewed Every Year</li>
                            <li>All Contents Available For 1 year</li>
                            <li>Big Store Discounts</li> 
                            <li class="buy"><button onclick="window.location.replace('https://www.8thwonderpromos.com/amember/signup/yearly')">Sign up</button></li>  
                        </ul>
                    </div>
                    <div class="promo second">
                        <h4>Monthly</h4>
                        <ul class="features">
                            <li class="brief">Quaterly membership</li>
                            <li class="price">$44.99</span></li>
                            <li>Will Be Renewed In Every 3 Month</li>
                            <li>All Contents Available For 3 Month</li>
                            <li>Store Discount</li>
                            <li class="buy"><button onclick="window.location.replace('https://www.8thwonderpromos.com/amember/signup/quaterly')">Sign up</button></li>   
                        </ul>
                    </div>  
                </div>
            </div>	
        </div>
    </div>
</section>
<section id="gallery" class="ls section_padding_top_65 columns_padding_0">
    <div class="container-fluid">
        <div class="col-sm-12 bottommargin_0">

        </div>
    </div>
</section>

<section id="subscribe" class="ds parallax section_subscribe section_padding_top_150 section_padding_bottom_150 table_section table_section_md">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 text-center text-md-left">
                <h6 class="highlight margin_0">Subscribe to our</h6>
                <h3 class="margin_0">Newsletter:</h3>
            </div>
            <div class="col-lg-9 col-md-8 text-center">
                <div class="widget widget_mailchimp">
                    <form class="signup" action="./" method="get">
                        <div class="subs-elements-wrapper">
                            <div class="form-group margin_0"> <input class="mailchimp_email form-control text-center" name="email" type="email" placeholder="Enter Your Email"> </div> <button type="submit" class="theme_button color1">Subscribe now!</button> </div>
                        <div class="response"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

get_footer();
