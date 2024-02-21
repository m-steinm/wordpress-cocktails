
<?php get_header();?>

<?php 
	if ( is_page('home') ) {
		include("templates/pages/home.php");
	}

	if ( is_page('list') ) {

		include("templates/pages/list.php");
	}

	if ( is_page('ingredients') ) {

		include("templates/pages/ingredient-list/ingredient-list.php");
	}

	if ( is_page('collections') ) {

		include("templates/pages/collections.php");
	}

	if ( is_singular('cocktail') ) {
		include("templates/pages/cocktail-detail/cocktail-detail.php");
	}

	if ( is_singular('collection') ) {
		include("templates/pages/collection-detail.php");
	}

	if ( is_singular('liquor') ) {
		include("templates/pages/ingredient-detail.php");
	}

	if ( is_singular('juice') ) {
		include("templates/pages/ingredient-detail.php");
	}

	if ( is_singular('syrup') ) {
		include("templates/pages/ingredient-detail.php");
	}

	if ( is_singular('other') ) {
		include("templates/pages/ingredient-detail.php");
	}

	if ( is_singular('spirits') ) {
		include("templates/pages/ingredient-detail.php");
	}

	if ( is_singular('garnish') ) {
		include("templates/pages/ingredient-detail.php");
	}

	if ( is_singular('bitters') ) {
		include("templates/pages/ingredient-detail.php");
	}

	if ( is_singular('amaro') ) {
		include("templates/pages/ingredient-detail.php");
	}
	
	if ( is_singular('infusion') ) {
		include("templates/pages/ingredient-detail.php");
	}

	if ( is_singular('liqueur') ) {
		include("templates/pages/ingredient-detail.php");
	}

?>

<?php get_footer();?>
