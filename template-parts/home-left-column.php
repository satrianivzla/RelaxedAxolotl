<div class="home-blog-left">
    <h2 class="mb-4">Latest Posts</h2>
    <?php
    $recent_posts = new WP_Query([
        'posts_per_page' => 3
    ]);

    if ($recent_posts->have_posts()) :
        while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
            <div class="card mb-4">
                <?php if (has_post_thumbnail()) : ?>
					<img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
				<?php else : ?>
					<img src="https://placehold.co/300x150?text=<?php the_title(); ?>" class="card-img-top" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
				<?php endif; ?>
                <div class="card-body">
                    <h5 class="card-title"><?php the_title(); ?></h5>
                    <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                    <p class="text-muted">
                        <?php echo get_the_date(); ?> | <?php the_author(); ?><br>
                        Section: <?php the_category(', '); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">More</a>
                </div>
            </div>
        <?php endwhile;
        wp_reset_postdata();
    else :
        echo '<p>No posts available right now.</p>';
    endif;
    ?>
</div>
