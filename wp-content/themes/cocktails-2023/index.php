
<?php get_header();?>

<?php 
	if ( is_page('home') ) {
		include("templates/pages/home.php");
	}

	if ( is_page('list') ) {

		include("templates/pages/list.php");
	}

	if ( is_page('ingredients') ) {

		include("templates/pages/ingredient-list.php");
	}

	if ( is_page('collections') ) {

		include("templates/pages/collections.php");
	}

	if ( is_singular('cocktail') ) {
		include("templates/pages/cocktail-detail.php");
	}

	if ( is_singular('collection') ) {
		include("templates/pages/cocktail-detail.php");
	}


?>

<?php get_footer();?>
