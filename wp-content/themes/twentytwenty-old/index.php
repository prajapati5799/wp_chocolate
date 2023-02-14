<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content">

	<?php

	$archive_title    = '';
	$archive_subtitle = '';

	if ( is_search() ) {
		global $wp_query;

		$archive_title = sprintf(
			'%1$s %2$s',
			'<span class="color-accent">' . __( 'Search:', 'twentytwenty' ) . '</span>',
			'&ldquo;' . get_search_query() . '&rdquo;'
		);

		if ( $wp_query->found_posts ) {
			$archive_subtitle = sprintf(
				/* translators: %s: Number of search results. */
				_n(
					'We found %s result for your search.',
					'We found %s results for your search.',
					$wp_query->found_posts,
					'twentytwenty'
				),
				number_format_i18n( $wp_query->found_posts )
			);
		} else {
			$archive_subtitle = __( 'We could not find any results for your search. You can give it another try through the search form below.', 'twentytwenty' );
		}
	} elseif ( is_archive() && ! have_posts() ) {
		$archive_title = __( 'Nothing Found', 'twentytwenty' );
	} elseif ( ! is_home() ) {
		$archive_title    = get_the_archive_title();
		$archive_subtitle = get_the_archive_description();
	}

	if ( $archive_title || $archive_subtitle ) {
		?>

		<header class="archive-header has-text-align-center header-footer-group">

			<div class="archive-header-inner section-inner medium">

				<?php if ( $archive_title ) { ?>
					<h1 class="archive-title"><?php echo wp_kses_post( $archive_title ); ?></h1>
				<?php } ?>

				<?php if ( $archive_subtitle ) { ?>
					<div class="archive-subtitle section-inner thin max-percentage intro-text"><?php echo wp_kses_post( wpautop( $archive_subtitle ) ); ?></div>
				<?php } ?>

			</div><!-- .archive-header-inner -->

		</header><!-- .archive-header -->

		<?php
	}

	if ( have_posts() ) {

		$i = 0;

		while ( have_posts() ) {
			$i++;
			if ( $i > 1 ) {
				echo '<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true" />';
			}
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		}
	} elseif ( is_search() ) {
		?>

		<div class="no-search-results-form section-inner thin">

			<?php
			get_search_form(
				array(
					'aria_label' => __( 'search again', 'twentytwenty' ),
				)
			);
			?>

		</div><!-- .no-search-results -->

		<?php
	}
	?>

	<?php get_template_part( 'template-parts/pagination' ); ?>

</main><!-- #site-content -->

<?php
if (is_user_logged_in()) {
	if(isset($_REQUEST["save"]))
	{
		$id = wp_insert_post(
			array(
				'post_type' => "team",
				'post_status' => "draft",
				'post_title' => $_REQUEST["title"],
				'post_content' => $_REQUEST["desc"],
			),
		);
		
		require_once(ABSPATH . "wp-admin" . '/includes/image.php');
		require_once(ABSPATH . "wp-admin" . '/includes/file.php');
		require_once(ABSPATH . "wp-admin" . '/includes/media.php');
				

		$file_handler = 'thumbnail'; //Form attachment Field name.
		$attach_id = media_handle_upload( $file_handler, $post_id );


		//making it featured!
		set_post_thumbnail($post_ID, $attach_id );

		$insertdata = wp_set_object_terms( $id, $_REQUEST["mycategory"], $team_categories);

		if($insertdata) {
			echo "Form Data has been submitted";
		} else{
			echo "Form Data not submitted";
		}
		
	}
}else {
	echo "<h1> Please log in and try again </h1>";
}
?>
<div class="container">
	<form method="POST" enctype="multipart/form-data">
		<div>
			Enter your Title
			<input type="text" name="title" required>
		</div>
		<div>
			Description
			<textarea name="desc" id="" cols="30" rows="10"></textarea>
		</div>
		<div>
			Category
			<select name="mycategory" id="">
				<?php 
				$terms = get_terms( array(
						'taxonomy' => 'team_categories',
						'hide_empty' => false,
						'orderby' => 'name',
						'order' => 'desc',
					)	
				);

				foreach($terms as $val){

				?>
				<option value="<?php echo $val->name; ?>"><?php echo $val->name; ?></option>
			<?php
			
			}?>
			</select>
		</div>
		<div>
			Featured Image
			<input type="file" name="thumbnail" id="thumbnail">
		</div>

		<input type="submit" name="save" value="save">
	</form>
</div>

<div>
	<?php
	$teamdata = new WP_Query(array(
		'posts_per_page' => '',
		'post_type' => 'team'
	));

	?> 
	<table>
	<thead>
        <tr>
        <th>Title</th>
		<th>Description</th>
		<th>Category</th>
    	</tr>
	</thead>
	<tbody>
	<?php
	$the_post_id = get_the_ID();
	$categories = wp_get_post_terms($the_post_id, ['team_categories']);

	// echo '<pre>';
	// print_r($categories);
	// wp_die();
	while($teamdata->have_posts()) {
		$teamdata->the_post(); ?>
		<tr>
				<td><?php the_title(); ?></td>
				<td><?php echo wp_trim_words(get_the_content(), 20); ?></td>
				<td><?php echo $categories->name; ?></td>
		</tr>
		<?php }
	?>
	</tbody>
</table>
</div>

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>


<?php
get_footer();
