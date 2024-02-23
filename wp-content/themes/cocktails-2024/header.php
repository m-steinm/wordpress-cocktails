<!doctype html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo wp_get_document_title(); ?></title>
		<!-- font -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;700&family=Open+Sans&display=swap" rel="stylesheet">

		<?php wp_head(); ?>
	</head>


	<body <?php body_class(); ?>>
		<header>
			<?php include("site-menu.php"); ?>
		</header>


		<main class="page-content">
			