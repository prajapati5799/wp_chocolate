<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gallery
 */

?>

	 <footer id="footer">
          <div class="container">
              <div class="top-footer">
                <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h4><?php //echo get_field('contact_us','options'); ?></h4>
                                    <address>
                                        <?php //echo get_field('contact_us_detais','options'); ?>
                                    </address>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                          <h4>CONNECT WITH US</h4>
                          <ul class="list-inline social-links">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="bottom-footer">
                  <div class="row">
                      <div class="col-md-4">
                          
                        </div>
                        <div class="col-md-8">
                          <ul class="list-inline">
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="<?php echo home_url( $wp->request )."/about-us2"; ?>">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="blog-left-sidebar.html">Blog</a></li>
                                <li><a href="<?php echo home_url('contact-us'); ?>">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                  
                </div> 
            </div>
        </footer>
    </div>
    
    
    
</body>
</html>

<?php wp_footer(); ?>

