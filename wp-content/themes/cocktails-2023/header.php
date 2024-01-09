<!doctype html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo wp_get_document_title(); ?></title>

	<?php wp_head(); ?>
</head>

<inner-column>
	<body <?php body_class(); ?>>
		<header>
			<?php include("site-menu.php"); ?>
		</header>


	<main class="page-content">