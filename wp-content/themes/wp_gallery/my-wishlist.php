<?php
/**
 * Template Name: my-wishlist
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
          <section>
                <div class="container">
                    <div class="discount-banner">
                        <h1><?php echo get_field('wishlist_discount_banner'); ?>%</h1>
                        <p><?php echo get_field('wishlist_discount_banner_heading'); ?></p>
                        <a href="<?php echo get_field('wishlist_discount_banner_button'); ?>" class="btn btn-default">Shop Now</a>
                    </div>
                </div>
            </section>
            <section class="list-page">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="sidebar">
                                <div class="filter-list">
                                    <h4>Price selector</h4>
                                    <div class="check-list price-selector">
                                        <div id="keypress"></div> 
                                        <input type="text" id="input-with-keypress-0" class="form-control"> 
                                        <input type="text" id="input-with-keypress-1" class="form-control">
                                    </div>
                                </div> 
                                
                                <div class="filter-list">
                                    <h4><?php echo get_field('wishlist_discount_filter_header'); ?></h4>
                                    <div class="check-list">
                                        <?php
                                                $wishlist = get_field('wishlist_discount_filter_list');
                                                $i = 01;
                                                if( $wishlist ): ?>
                                                
                                                    <?php foreach( $wishlist as $filter ): ?>
                                                        <?php //print_r($filter); ?>
                                                        
                                            <label  for="checkbox-<?php echo $i; ?>">
                                            <input name="sample-checkbox-<?php echo $i; ?>" id="checkbox-<?php echo $i; ?>" value="<?php echo $filter; ?>" type="checkbox" ><?php  echo $filter; ?></label>

                                                    <?php 
                                                    $i++;
                                                endforeach; ?>
                                                
                                                <?php endif; ?>
                                    </div>
                                </div>
                                 <div class="filter-list">
                                    <h4><?php echo get_field('wishlist_discount_filter_header'); ?></h4>
                                    <div class="check-list">
                                        <?php
                                                $wishlist = get_field('wishlist_discount_filter_list1');
                                                $i = 01;
                                                if( $wishlist ): ?>
                                                
                                                    <?php foreach( $wishlist as $filter ): ?>
                                                        <?php //print_r($filter); ?>
                                                        
                                            <label  for="checkbox-<?php echo $i; ?>">
                                            <input name="sample-checkbox-<?php echo $i; ?>" id="checkbox-<?php echo $i; ?>" value="<?php echo $filter; ?>" type="checkbox" ><?php  echo $filter; ?></label>

                                                    <?php 
                                                    $i++;
                                                endforeach; ?>
                                                
                                                <?php endif; ?>
                                    </div>
                                </div>
                                <div class="filter-list">
                                    <h4>Chocolate Categories</h4>
                                    <div class="check-list">
                                        <ul class="choclate-categories">
                                            <li class="has-child"><a href="javascript:void(0);">Cacao <span>(4)</span></a>
                                                <ul class="cat-list">
                                                    <li><a href="#">Cacao Nibs</a></li>
                                                    <li><a href="#">Raw Cacao</a></li>
                                                    <li><a href="#">Roasted Cacao</a></li>
                                                    <li><a href="#">Ground Cacao</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Chocolate Liquor <span>(8)</span></a></li>
                                            <li class="has-child"><a href="javascript:void(0);">Unsweetened Chocolate <span>(6)</span></a>
                                                <ul class="cat-list"l>
                                                    <li><a href="#">Chocolate</a></li>
                                                    <li><a href="#">Baking Chocolate</a></li>
                                                    <li><a href="#">Pure Chocolate</a></li>
                                                    <li><a href="#">Bitter Chocolate</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-child"><a href="javascript:void(0);">Chocolates <span>(4)</span></a>
                                                <ul class="cat-list">
                                                    <li><a href="#">Chocolate Candies</a></li>
                                                    <li><a href="#">Truffles</a></li>
                                                    <li><a href="#">Creams</a></li>
                                                    <li><a href="#">Pralines</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-child"><a href="javascript:void(0);">Bittersweet Chocolate <span>(5)</span></a>
                                                <ul class="cat-list">
                                                    <li><a href="#">Semisweet Chocolate</a></li>
                                                    <li><a href="#">Dark Chocolate</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Sweet Chocolate <span>(4)</span></a></li>
                                            <li><a href="#">Milk Chocolate <span>(5)</span></a></li>
                                            <li><a href="#">White Chocolate <span>(7)</span></a></li>
                                            <li class="has-child"><a href="javascript:void(0);">Chocolate Coating <span>(1)</span></a>
                                                <ul class="cat-list">
                                                    <li><a href="#">Compound Chocolate Coating</a></li>
                                                    <li><a href="#">Summer Coating</a></li>
                                                    <li><a href="#">Chocolate Flavored Coating</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Baking Chocolate <span>(15)</span></a></li>
                                            <li class="has-child"><a href="javascript:void(0);">Ground Chocolate <span>(6)</span></a>
                                                <ul class="cat-list">
                                                    <li><a href="#">Powdered Chocolate</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-child"><a href="javascript:void(0);">Cocoa <span>(4)</span></a>
                                                <ul class="cat-list">
                                                    <li><a href="#">Cocoa Powder</a></li>
                                                    <li><a href="#">Unsweetened Cocoa Powder</a></li>
                                                    <li><a href="#">Unsweetened Cocoa</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="filter-section clearfix">
                                <div class="top-left-filter">
                                    <div class="filter-group">
                                        <label>Short by : </label>
                                        <select id="short-by" class="selectpicker show-tick form-control">
                                            <option>Popular</option>
                                            <option>New</option>
                                            <option>Mostly Viewed</option> 
                                        </select>
                                    </div>
                                    <div class="filter-group">
                                        <ul class="list-inline view-options">
                                            <li class="active"><a href="search-page.html"><i class="fa fa-th-large" aria-hidden="true"></i></a></li>
                                            <li><a href="list-view.html"><i class="fa fa-list" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="top-right-filter">
                                    <div class="filter-group">
                                        <label>Show :</label>
                                        <select id="show-items" class="selectpicker show-tick form-control">
                                            <option>12</option>
                                            <option>15</option>
                                            <option>20</option> 
                                        </select>
                                    </div>
                                    <div class="filter-group">
                                        <ul class="pagination">
                                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                            <li><a href="#">2 </a></li>
                                            <li><a href="#" aria-label="Previous"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-list">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="product-box">
                                            <div class="img"><img src="assets/images/product-img/img2.jpg" alt="" /></div>
                                            <div class="product-detail">
                                                <div class="name"><strong>Antique Gold - </strong>Chocolate bar with and 14 Milk Chocolates</div>
                                                <div class="rating">
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star-half-full" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                </div>
                                                <div class="price"><span>$ 449.0</span></div>
                                            </div>
                                            <div class="hover-block">
                                                <ul class="list-inline">
                                                    <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                    <li><a href="my-wishlist.html" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="product-detail.html" data-toggle="tooltip" data-placement="top" title="Quickview"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="product-box">
                                            <div class="new-label"><span>NEW</span></div>
                                            <div class="img"><img src="assets/images/product-img/img3.jpg" alt="" /></div>
                                            <div class="product-detail">
                                                <div class="name"><strong>Antique Gold - </strong>Chocolate bar with and 14 Milk Chocolates</div>
                                                <div class="rating">
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star-half-full" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                </div>
                                                <div class="price"><span>$ 449.0</span></div>
                                            </div>
                                            <div class="hover-block">
                                                <ul class="list-inline">
                                                    <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                    <li><a href="my-wishlist.html" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="product-detail.html" data-toggle="tooltip" data-placement="top" title="Quickview"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="product-box">
                                            <div class="img">
                                                <img src="assets/images/product-img/img4.jpg" alt="" />
                                                <span class="discount">20%</span>
                                            </div>
                                            <div class="product-detail">
                                                <div class="name"><strong>Antique Gold - </strong>Chocolate bar with and 14 Milk Chocolates</div>
                                                <div class="rating">
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star-half-full" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                </div>
                                                <div class="price">
                                                    <span>$ 359.2</span>
                                                    <span class="old-price">$ 449.0</span>
                                                </div>
                                            </div>
                                            <div class="hover-block">
                                                <ul class="list-inline">
                                                    <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                    <li><a href="my-wishlist.html" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="product-detail.html" data-toggle="tooltip" data-placement="top" title="Quickview"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="product-box">
                                            <div class="new-label"><span>NEW</span></div>
                                            <div class="img"><img src="assets/images/product-img/img3.jpg" alt="" /></div>
                                            <div class="product-detail">
                                                <div class="name"><strong>Antique Gold - </strong>Chocolate bar with and 14 Milk Chocolates</div>
                                                <div class="rating">
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star-half-full" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                </div>
                                                <div class="price"><span>$ 449.0</span></div>
                                            </div>
                                            <div class="hover-block">
                                                <ul class="list-inline">
                                                    <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                    <li><a href="my-wishlist.html" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="product-detail.html" data-toggle="tooltip" data-placement="top" title="Quickview"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="product-box">
                                            <div class="img">
                                                <img src="assets/images/product-img/img4.jpg" alt="" />
                                                <span class="discount">20%</span>
                                            </div>
                                            <div class="product-detail">
                                                <div class="name"><strong>Antique Gold - </strong>Chocolate bar with and 14 Milk Chocolates</div>
                                                <div class="rating">
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star-half-full" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                </div>
                                                <div class="price">
                                                    <span>$ 359.2</span>
                                                    <span class="old-price">$ 449.0</span>
                                                </div>
                                            </div>
                                            <div class="hover-block">
                                                <ul class="list-inline">
                                                    <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                    <li><a href="my-wishlist.html" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="product-detail.html" data-toggle="tooltip" data-placement="top" title="Quickview"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="product-box">
                                            <div class="img"><img src="assets/images/product-img/img2.jpg" alt="" /></div>
                                            <div class="product-detail">
                                                <div class="name"><strong>Antique Gold - </strong>Chocolate bar with and 14 Milk Chocolates</div>
                                                <div class="rating">
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star-half-full" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                </div>
                                                <div class="price"><span>$ 449.0</span></div>
                                            </div>
                                            <div class="hover-block">
                                                <ul class="list-inline">
                                                    <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                    <li><a href="my-wishlist.html" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="product-detail.html" data-toggle="tooltip" data-placement="top" title="Quickview"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="product-box">
                                            <div class="img"><img src="assets/images/product-img/img1.jpg" alt="" /></div>
                                            <div class="product-detail">
                                                <div class="name"><strong>Antique Gold - </strong>Chocolate bar with and 14 Milk Chocolates</div>
                                                <div class="rating">
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star-half-full" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                </div>
                                                <div class="price"><span>$ 449.0</span></div>
                                            </div>
                                            <div class="hover-block">
                                                <ul class="list-inline">
                                                    <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                    <li><a href="my-wishlist.html" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="product-detail.html" data-toggle="tooltip" data-placement="top" title="Quickview"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="product-box">
                                            <div class="img"><img src="assets/images/product-img/img3.jpg" alt="" /></div>
                                            <div class="product-detail">
                                                <div class="name"><strong>Antique Gold - </strong>Chocolate bar with and 14 Milk Chocolates</div>
                                                <div class="rating">
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star-half-full" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                </div>
                                                <div class="price"><span>$ 449.0</span></div>
                                            </div>
                                            <div class="hover-block">
                                                <ul class="list-inline">
                                                    <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                    <li><a href="my-wishlist.html" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="product-detail.html" data-toggle="tooltip" data-placement="top" title="Quickview"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="product-box">
                                            <div class="img">
                                                <img src="assets/images/product-img/img4.jpg" alt="" />
                                                <span class="discount">20%</span>
                                            </div>
                                            <div class="product-detail">
                                                <div class="name"><strong>Antique Gold - </strong>Chocolate bar with and 14 Milk Chocolates</div>
                                                <div class="rating">
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star-half-full" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                                </div>
                                                <div class="price">
                                                    <span>$ 359.2</span>
                                                    <span class="old-price">$ 449.0</span>
                                                </div>
                                            </div>
                                            <div class="hover-block">
                                                <ul class="list-inline">
                                                    <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                    <li><a href="my-wishlist.html" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="product-detail.html" data-toggle="tooltip" data-placement="top" title="Quickview"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- ****************** Footer Section ****************** -->
       


<?php get_footer(); ?>