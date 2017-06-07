<?php

// Add article meta after header.
add_action( 'wpcampus_after_article_header', 'wpcampus_print_article_meta', 5 );

get_header();

?>
<p>The WPCampus Podcast is a monthly show where members of the community come together to discuss relevant topics, unique ways that WordPress is being used in higher education, share tutorials and walkthroughs, and more.</p>
<?php

wpcampus_print_podcast_promo();

if ( ! have_posts() ) :
	wpcampus_print_404();
else :

	// Setup article arguments.
	$args = array(
		'header'        => 'h2',
		'print_content' => false,
	);

	// Print the articles.
	wpcampus_print_articles( $args );

endif;

get_footer();
