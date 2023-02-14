<?php
/**
 * Template Name: child Homepage
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<body>
  <!-- ****************** Banner Section  ****************** -->
        
        
        <div id="content">
            <?php //aws_get_search_form( true ); ?>
            
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
            
            <!-- ****************** Our Customer  Section ****************** -->
            
        </div>
        
        <!-- ****************** Footer Section ****************** -->
       


<?php get_footer(); ?>