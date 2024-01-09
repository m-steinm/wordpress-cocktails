<?php get_header();?>

<?php
function get_category_link( $category ) {
	if ( ! is_object( $category ) ) {
		$category = (int) $category;
	}

	$category = get_term_link( $category );

	if ( is_wp_error( $category ) ) {
		return '';
	}

	return $category;
}
?>
<?php get_footer();?>