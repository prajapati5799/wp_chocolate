<?php
/**
 * Template Name: Homepage
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="format-detection" content = "telephone=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Chocalate</title>
    
    <!-- favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico">
    <!-- Ioons -->
    
    <!--[if lt IE 9]>
      <link href="assets/css/ie8.css" rel="stylesheet">
    <![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 

<body>
  <!-- ****************** Banner Section  ****************** -->
        <section id="banner">
            <div class="banner-slider">
              <?php
                  if( have_rows('slider') ):
                    while( have_rows('slider') ) : the_row();
                      $container_banner_slider = get_sub_field('container_banner_slider');
                      $container_banner_title = get_sub_field('container_banner_title');
                      $container_banner_sub_title = get_sub_field('container_banner_sub_title');
                      ?>
                <div class="slide-div">
                  <div class="banner-content">
                    <div class="container">
                            <div class="row">
                              <div class="row-md-height">
                                    <div class="col-md-6 col-md-push-6 col-md-height">
                                        <img src="<?php echo $container_banner_slider; ?>" alt="Banner Image" class="img-responsive" />
                                    </div>
                                    <div class="col-md-6 col-md-pull-6 col-md-height">
                                        <h1><?php echo $container_banner_title; ?>.</h1>
                                        <p><?php echo $container_banner_sub_title; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <?php      
                      endwhile;
                    endif;
                  ?>
            </div>
        </section>
        
        <div id="content">
            <!-- ****************** Offers Section ****************** -->
             <section class="offers section-block">
                <div class="container">
                    <div class="heading"><span>FREE STANDARD SHIPPING ON ORDERS OVER $49</span></div>
                    <div class="offers-slider">
                        <?php
                          if( have_rows('content_repeater') ):
                            while( have_rows('content_repeater') ) : the_row();
                              $content_repeater_image = get_sub_field('content_repeater_image');
                              $content_repeater_name = get_sub_field('content_repeater_name');
                              ?>
                        <div class="col-md-4">
                            <div class="offer-box">
                                <img src="<?php echo $content_repeater_image; ?>" alt="" />
                                <div class="hover-block">
                                    <h3><?php echo $content_repeater_name; ?></h3>
                                </div>
                            </div>
                        </div>
                        <?php      
                              endwhile;
                            endif;
                          ?>
                    </div>

                    <div class="special-offer">
                        <img src="<?php echo get_field('special_offer_image'); ?>" alt="" class="img-responsive" />
                        <div class="offer-detail">
                            <div class="row">
                                <div class="col-md-4">
                                    <h2><?php echo get_field('special_offer_name'); ?></h2>
                                    <p><?php echo get_field('special_offer_dec'); ?></p>
                                    <a href="<?php echo get_field('special_offer_button'); ?>" class="btn btn-info">SHOP NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> 
            <?php //aws_get_search_form( true ); ?>
            <!-- ****************** Upcoming Offers Section ****************** -->
            <section class="upcoming-offers">
              <div class="overlay">
                  <div class="black-overlay"></div>
                    <div class="container">
                        <div class="detail">
                            <?php echo get_field('upcoming_offers'); ?>
                            <a href="<?php echo get_field('upcoming_offers_button'); ?>" class="btn btn-detail">SHOP NOW</a>
                        </div>
                    </div>
              </div>
            </section>
            <!-- ****************** Featured Products Section ****************** -->
            <section class="feature-products section-block">
                <div class="container">
                    <div class="heading"><span><?php echo get_field('featured_products'); ?></span></div>
                    <div class="product-list">
                        <div class="row">
                            <?php
                                  if( have_rows('featured_products_repeater') ):
                                    while( have_rows('featured_products_repeater') ) : the_row();
                                      $featured_products_image = get_sub_field('featured_products_image');
                                      $featured_products_details = get_sub_field('featured_products_details');
                                      $featured_products_price = get_sub_field('featured_products_price');
                                      ?>

                            <div class="col-md-3 col-sm-6">
                                <div class="product-box">
                                    <div class="img"><img src="<?php echo $featured_products_image; ?>" alt="" /></div>
                                    <div class="product-detail">
                                        <div class="name"><?php echo $featured_products_details; ?></div>
                                        <div class="rating">
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-half-full" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="price"><span>$ <?php echo $featured_products_price; ?></span></div>
                                    </div>
                                     <div class="hover-block">
                                        <ul class="list-inline">
                                            <?php global $wp;?>
                                            <li><a href="<?php echo home_url( $wp->request )."/cart" ; ?>" data-toggle="tooltip" data-placement="top" title="Cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>

                                            <?php //echo do_shortcode("[ti_wishlist_products_counter]"); ?>
                                            <li><a href="<?php echo home_url( $wp->request )."/wishlist" ; ?>" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li><a href="<?php //echo site_url('contact-us') ; ?>" data-toggle="tooltip" data-placement="top" title="Quickview"><i class="fa fa-search" aria-hidden="true"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                           <?php      
                                  endwhile;
                                endif;
                              ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="feature-products section-block">
                <div class="container">
                    <div class="heading"><span><?php echo get_field('featured_products'); ?></span></div>
                    <div class="product-list">
                        <div class="row"> 
                             <?php  
                                $args = array(
                                        'post_type'      => 'product',
                                        'posts_per_page' => 10
                                    );

                                    $loop = new WP_Query( $args );

                                    while ( $loop->have_posts() ) : $loop->the_post();
                                        global $product;
                                    //     echo '<pre>';
                                    // print_r($product);
                                    // exit;
                                        ?>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="product-box">
                                                <div class="product-detail">
                                        <?php
                                        echo '<br /><a href="'.get_permalink().'">' . woocommerce_get_product_thumbnail().' </a>';?>
                                        <div class="name"><?php echo '<a href="'.get_permalink().'">'.get_the_title().'</a>'; ?></div>
                                        <div class="name"><?php echo $product->get_description(); ?></div>
                                        <div class="rating">
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-half-full" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="price"><span>₹ <?php echo $product->get_price(); ?></span></div>
                                    </div>
                                    <div class="hover-block">
                                        <ul class="list-inline">
                                            <?php global $wp;?>
                                            <li><a href="<?php echo home_url( $wp->request )."?add-to-cart=".$product->id . "&quantity=1"; ?>" data-toggle="tooltip" data-placement="top" title="Cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>

                                            <?php //echo do_shortcode("[ti_wishlist_products_counter]"); ?>
                                            <li><a href="<?php echo home_url( $wp->request )."/wishlist" ; ?>" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li><a href="product-detail.html" data-toggle="tooltip" data-placement="top" title="Quickview"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php
                        endwhile; 

                        wp_reset_query();
                    ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ****************** Best Sellers Section ****************** -->
            <section class="best-seller section-block">
                <div class="container">
                    <div class="heading"><span><?php echo get_field('featured_products'); ?></span></div>
                    <div class="product-list">
                        <div class="row">
                            <?php
                                  if( have_rows('best_seller_repeater') ):
                                    while( have_rows('best_seller_repeater') ) : the_row();
                                      $best_seller_image = get_sub_field('best_seller_image');
                                      $best_seller_details = get_sub_field('best_seller_details');
                                      $best_seller_price = get_sub_field('best_seller_price');
                                      ?>

                            <div class="col-md-3 col-sm-6">
                                <div class="product-box">
                                    <div class="img"><img src="<?php echo $best_seller_image; ?>" alt="" /></div>
                                    <div class="product-detail">
                                        <div class="name"><?php echo $featured_products_details; ?></div>
                                        <div class="rating">
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-half-full" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="price"><span>$ <?php echo $best_seller_price; ?></span></div>
                                    </div>
                                     <div class="hover-block">
                                        <ul class="list-inline">
                                            <li><a href="<?php echo home_url( $wp->request )."/cart" ; ?>" data-toggle="tooltip" data-placement="top" title="Cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>

                                            <?php //echo do_shortcode("[ti_wishlist_products_counter]"); ?>
                                            <li><a href="<?php echo home_url( $wp->request )."/wishlist" ; ?>" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li><a href="product-detail.html" data-toggle="tooltip" data-placement="top" title="Quickview"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php      
                                  endwhile;
                                endif;
                              ?>
                        </div>
                    </div>
                </div>
            </section> 
            <!-- ****************** Our Brands Section ****************** -->
            <section class="our-brands section-block">
                <div class="container">
                    <div class="heading"><span><?php echo get_field('our_brand_repeater'); ?></span></div>
                    <div class="brands-slider">
                        <?php
                                  if( have_rows('our_brand_repeater') ):
                                    while( have_rows('our_brand_repeater') ) : the_row();
                                      $our_brand_image = get_sub_field('our_brand_image');
                                      ?>
                        <div><img src="<?php echo $our_brand_image; ?>" alt="" /></div>
                        <?php      
                              endwhile;
                            endif;
                          ?>
                    </div>
                </div>
            </section>
            <!-- ****************** New Arrivals Section ****************** -->
            <section class="new-arrivals section-block">
                <div class="container">
                    <div class="row">
                        <?php
                                  if( have_rows('new_arrivals_repeater') ):
                                    while( have_rows('new_arrivals_repeater') ) : the_row();
                                      $new_arrivals_image = get_sub_field('new_arrivals_image');
                                      ?>
                        <div class="col-sm-4">
                            <a href="#"><img src="<?php echo $new_arrivals_image; ?>" alt="" /></a>
                        </div>
                        <?php      
                              endwhile;
                            endif;
                          ?>
                    </div>
                </div>
            </section>
            <!-- ****************** Our Customer  Section ****************** -->
            <section class="our-customers section-block">
                <div class="container">
                    <div class="heading"><span><?php echo get_field('our_customer_heading'); ?></span></div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <?php
                                  if( have_rows('our_customer_repeater') ):
                                    while( have_rows('our_customer_repeater') ) : the_row();
                                      $our_customer_details = get_sub_field('our_customer_details');
                                      ?>
                                <div class="col-sm-4">
                                    <div class="cust-info">
                                        <span class="icon"><i class="fa fa-gift" aria-hidden="true"></i></span>
                                        <?php echo $our_customer_details; ?>
                                    </div>
                                </div>
                                <?php      
                                      endwhile;
                                    endif;
                                  ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="client-slider">
                                <?php
                                  if( have_rows('our_customer_info') ):
                                    while( have_rows('our_customer_info') ) : the_row();
                                      $our_customer_image = get_sub_field('our_customer_image');
                                      $our_customer_feedback = get_sub_field('our_customer_feedback');
                                      ?>
                                <div>
                                    <div class="client-feedback">
                                        <div class="client-img"><img src="<?php echo $our_customer_image; ?>" alt="" /></div>
                                        <div class="detail">
                                            <?php echo $our_customer_feedback; ?>
                                        </div>
                                    </div>
                                </div>
                                    <?php      
                                          endwhile;
                                        endif;
                                      ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        
        <!-- ****************** Footer Section ****************** -->
       


<?php get_footer(); ?>