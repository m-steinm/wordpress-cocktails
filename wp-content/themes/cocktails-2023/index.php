
<?php get_header();?>


<?php 
	if ( is_page('home') ) {
		include("templates/pages/home.php");
	}

	if ( is_page('list') ) {

		include("templates/pages/list.php");
	}

	if ( is_singular('cocktail') ) {
		include("templates/pages/cocktail-detail.php");
	}
?>

<?php get_footer();?>