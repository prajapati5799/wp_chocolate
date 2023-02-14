<?php
/**
 * Template Name: portfolio
 */

get_header();

   $args = array(
               'taxonomy' => 'porfolio_category',
               'orderby' => 'name',
               'order'   => 'ASC'
           );

   $cats = get_categories($args);

   foreach($cats as $cat) {
?>
     
           <?php //echo $cat->name; ?>
           <?php //$slug = basename( get_permalink() ); echo $slug;?>

           <div align="center">
            <a href="<?php get_the_permalink() ?>"><button class="btn btn-default filter-button" data-filter="<?php echo $cat->slug;?>">
            	<?php echo $cat->name;  
        ?></button></a>
        </div>
     
<?php
   }


$args = array(
    'post_type' => 'portfolio',
    'post_status' => 'publish',
    'posts_per_page' => -1
);
 
// The Query
$the_query = new WP_Query( $args );
// The Loop
if ( $the_query->have_posts() ) {
   while ( $the_query->have_posts() ) {
    	$the_query->the_post();
    	$terms = get_the_terms(get_the_ID(), 'porfolio_category' );
    	$slug = [];

    	foreach($terms as $k => $t){
    		$slug[] = $t->slug;
    	}
    	$slug_name = implode( " ", $slug );
	?>

<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter <?php echo $slug_name; ?> ">
                <a href="<?php echo get_the_permalink(); ?>"><?php the_post_thumbnail() ?></a>
            </div>
            
<?php
    }
} else {
    // no posts found
    echo "No Post Found";
}

wp_reset_postdata();



get_sidebar();
get_footer();
