<?php get_header(); ?>

<div class="container mt-5 mb-5">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- Title -->
        <h1 class="mb-3"><?php the_title(); ?></h1>

        <!-- Meta Info -->
        <p class="text-muted">
            Published on <?php echo get_the_date(); ?> by <?php the_author(); ?>
        </p>

        <!-- Featured Image -->
        <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url('large'); ?>" class="img-fluid mb-4" alt="<?php the_title(); ?>">
        <?php endif; ?>

        <!-- Social Links -->
        <div class="mb-3">
            <span>Share:</span>
            <a href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>" target="_blank" class="btn btn-outline-primary btn-sm mx-1">Twitter</a>
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" class="btn btn-outline-primary btn-sm mx-1">Facebook</a>
            <a href="mailto:?subject=<?php the_title(); ?>&body=<?php the_permalink(); ?>" class="btn btn-outline-primary btn-sm mx-1">Email</a>
        </div>

        <!-- Categories -->
        <p>
            Categories: <?php the_category(', '); ?>
        </p>

        <!-- Blog Content -->
        <div class="mb-5">
            <?php the_content(); ?>
        </div>

        <!-- Comments -->
        <div class="mt-5">
            <?php comments_template(); ?>
        </div>

    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
