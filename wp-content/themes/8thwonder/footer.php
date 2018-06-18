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
<footer class="page_footer ds section_padding_top_100 section_padding_bottom_75">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="widget widget_text"> <img src="http://pool.8thwonderpromos.com/images/logo.png" alt="">
                        <!--<p class="topmargin_20">You can purchase our pool membership, where you will find all our content.</p>-->
                    <div class="topmargin_25"> <a href="#" class="social-icon border-icon rounded-icon socicon-apple"></a> <a href="#" class="social-icon border-icon rounded-icon socicon-play"></a> <a href="#" class="social-icon border-icon rounded-icon socicon-amazon"></a> <a href="#" class="social-icon border-icon rounded-icon socicon-spotify"></a>									<a href="#" class="social-icon border-icon rounded-icon socicon-soundcloud"></a> </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 text-center">
                <div class="widget widget_text">
                    <h4 class="widget-title"> Contact Form </h4>
                    <form class="contact-form" method="post" action="./">
                        <div class="bottommargin_10"> <label for="name-footer">Your Name <span class="required">*</span></label> <input type="text" aria-required="true" size="30" value="" name="name" id="name-footer" class="form-control text-center" placeholder="Full Name*"> </div>
                        <div class="bottommargin_10">
                            <label for="message-footer">Message</label> <textarea aria-required="true" rows="3" cols="45" name="message" id="message-footer" class="form-control text-center" placeholder="Message..."></textarea> </div>
                        <div class="contact-form-submit topmargin_10">
                            <button type="submit" id="contact_form_submit_footer" name="contact_submit" class="theme_button color1">Send Message</button> </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 text-center">
                <div class="widget widget_text">
                    <h4 class="widget-title"> My Contacts </h4>
                    <div>
                        <div class="media small-media inline-block">
                            <div class="media-left"> <i class="fa fa-map-marker highlight" aria-hidden="true"></i> </div>
                            <div class="media-body"> 1767 Central Park Ave Suite 381 Yonkers NY 10710 </div>
                        </div>
                        <div class="media small-media inline-block">
                            <div class="media-left"> <i class="fa fa-phone highlight" aria-hidden="true"></i> </div>
                            <div class="media-body"> 1833 DJ Promo </div>
                        </div>
                        <div class="media small-media inline-block">
                            <div class="media-left"> <i class="fa fa-print highlight" aria-hidden="true"></i> </div>
                            <div class="media-body"> 1767 Central Park Ave Suite 381 Yonkers NY 10710 </div>
                        </div>
                        <div class="media small-media greylinks inline-block">
                            <div class="media-left"> <i class="fa fa-envelope highlight" aria-hidden="true"></i> </div>
                            <div class="media-body"> <a href="mailto:support@8thwonderpromos.com">support@8thwonderpromos.com</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<section class="ls page_copyright section_padding_top_40 section_padding_bottom_40">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="bottommargin_10"> <a class="social-icon socicon-facebook" href="#" title="Facebook"></a> <a class="social-icon socicon-twitter" href="#" title="Twitter"></a> <a class="social-icon socicon-youtube" href="#" title="Youtube"></a> <a class="social-icon socicon-google"
                                                                                                                                                                                                        href="#" title="Google"></a> </div>
                <p class="small-text">&copy; Copyright 2018. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</section>
</div>
<!-- eof #box_wrapper -->
</div>
<!-- eof #canvas -->
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/compressed.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/main.js"></script>
<?php wp_footer(); ?>
</body>

</html>