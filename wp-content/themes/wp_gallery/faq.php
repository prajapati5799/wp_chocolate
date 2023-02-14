<?php
/**
 * Template Name: faq
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
        <section class="inner-content">
                <div class="container">
                    <!-- ****************** FAQ's Section   ****************** -->
                    <div class="faq-page">
                        <div class="heading"><span>Frequently Asked Questions</span></div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="search-view">
                                    <input value="" placeholder="Enter a search term …" type="text">
                                    <button type="submit" value=""><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <?php
                                    $i = 1;
                                  if( have_rows('faq_repeater') ):
                                    while( have_rows('faq_repeater') ) : the_row();
                                      $faq_quection = get_sub_field('faq_quection');
                                      $faq_answer = get_sub_field('faq_answer');
                                ?>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="1">
                                    <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapseOne">
                                    <?php echo $faq_quection; ?>
                                    </a>
                                    </h4>
                                </div>
                                <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="1">
                                    <div class="panel-body">
                                        <?php echo $faq_answer; ?>
                                </div>
                                </div>
                            </div>
                            
                            <?php    
                                    $i++;  
                                  endwhile;
                                endif;
                              ?>
                        </div>
                        <div class="bottom-pagination clearfix">
                            <ul class="pagination">
                                <li class="disabled"><a href="#" aria-label="Previous"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                <li><a href="#">2 </a></li>
                                <li><a href="#" aria-label="Previous"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        <!-- ****************** Footer Section ****************** -->
       


<?php get_footer(); ?>