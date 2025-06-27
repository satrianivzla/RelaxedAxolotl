<?php get_header(); ?>

<div class="container mt-4">

    <!-- Hero Slider -->
    <?php get_template_part('template-parts/hero-slider'); ?>

    <!-- Blog & Sidebar Grid -->
    <div class="row mt-5">
        
        <!-- Left Column: Blog Articles -->
        <div class="col-md-8">
            <?php get_template_part('template-parts/home-left-column'); ?>
        </div>

        <!-- Right Column: Sidebar -->
        <div class="col-md-4">
            <?php get_template_part('template-parts/home-sidebar'); ?>
        </div>
        
    </div>
	
	<?php get_template_part('template-parts/home-featured-video'); ?>
	
</div>

<?php get_footer(); ?>

