<?php
/**
 * Template Name: contect
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
        <div id="content">
            <!-- ****************** Breadcrumb Section  ****************** -->
            <section class="inner-content">
                <div class="container">
                    <!-- ****************** Contact Us Section  ****************** -->
                    <div class="contact-us">
                        <div class="heading"><span>Contact Us</span></div>
                        <div class="contact-form">
                            <?php echo apply_shortcodes( '[lwCSForm]' ); ?>
                            
                        </div> 
                        <div class="contact-map">
                            <?php echo get_field('contact_map'); ?>
                        </div>
                    </div>
                </div>
            </section>
    
        </div>
        <!-- ****************** Footer Section ****************** -->
       


<?php get_footer(); ?>