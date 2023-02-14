<?php
/**
 * Template Name: About Us Page
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
        <div id="content">
            <!-- ****************** Breadcrumb Section  ****************** -->
            <section class="inner-content">
                <div class="container">
                    <!-- ****************** About Us Section    ****************** -->
                    <div class="about-us">
                        <div class="heading"><span><?php echo get_field('about_us_title'); ?></span></div>
                        <?php echo get_field('about_us_des'); ?>
                        
                        
                        <div class="img"><img src="<?php echo get_field('about_us_image'); ?>" alt="" class="img-responsive" /></div>
                        <?php echo get_field('about_us_des1'); ?>

                        
                    </div>
                    
                    <!-- ****************** Our Customer  Section ****************** -->
                    <section class="our-customers section-block">
                        <div class="heading"><span><?php echo get_field('customer_heading'); ?></span></div> 
                        <div class="row">  
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="cust-info">
                                            <span class="icon"><i class="fa fa-gift" aria-hidden="true"></i></span>
                                            <p><span class="counter"><?php echo get_field('customer_counter'); ?></span> <?php echo get_field('customer_order'); ?> </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="cust-info">
                                            <span class="icon"><i class="fa fa-users " aria-hidden="true"></i></span>
                                            <p><span class="counter"><?php echo get_field('customer_counter1'); ?></span> <?php echo get_field('customer_order1'); ?> </p>
                                        </div>
                                    </div> 
                                    <div class="col-sm-4">
                                        <div class="cust-info">
                                            <span class="icon"><i class="fa fa-trophy" aria-hidden="true"></i></span>
                                            <p><span class="counter"><?php echo get_field('customer_counter2'); ?></span> <?php echo get_field('customer_order2'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="client-slider">

                                    <?php
                                      if( have_rows('feedback_repeater') ):
                                            while( have_rows('feedback_repeater') ) : the_row();
                                              $feedback_image = get_sub_field('feedback_image');
                                              $feedback_heading = get_sub_field('feedback_heading');
                                              $feedback_details = get_sub_field('feedback_details');
                                              ?>
                                    <div>
                                        <div class="client-feedback">
                                            <div class="client-img"><img src="<?php echo $feedback_image; ?>" alt="" /></div>
                                            <div class="detail">
                                                <h4><?php echo $feedback_heading; ?></h4>
                                                <p><?php echo $feedback_details; ?></p>
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
                </div>
            </section>
    
            
        </div>
        <!-- ****************** Footer Section ****************** -->
       


<?php get_footer(); ?>