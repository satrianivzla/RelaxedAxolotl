<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> | <?php bloginfo('name'); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
	<!-- Favicon and App Icons -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/icons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/icons/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/site.webmanifest">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/icons/favicon.ico">
	<meta name="theme-color" content="#f7f3ec">	
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top scroll-navbar">
    <div class="container">
        <!-- Logo (Left) -->
        <a class="navbar-brand" href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpg" alt="Logo" title="Logo" width="50">
        </a>

        <!-- Mobile Menu Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Links (Center) -->
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="<?php echo home_url(); ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo home_url('/about'); ?>">About</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo home_url('/blog'); ?>">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo home_url('/videos'); ?>">Videos</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo home_url('/community'); ?>">Community</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo home_url('/contact'); ?>">Contact</a></li>
            </ul>
        </div>

        <!-- Search Icon (Right) -->
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">
                <i class="bi bi-search"></i> <!-- Bootstrap Icon -->
            </button>
        </form>
		
		<button id="darkModeToggle" class="btn btn-sm btn-outline-light ms-auto" title="Toggle Dark Mode">
			🌗
		</button>
		
    </div>
</nav>