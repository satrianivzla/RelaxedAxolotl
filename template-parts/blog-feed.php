<div class="blog-section mb-5">
    <h2 class="mb-4">Latest Blog Posts</h2>
    <?php
    $blog_query = new WP_Query([
        'posts_per_page' => 3
    ]);

    if ($blog_query->have_posts()) :
        echo '<div class="row">';
        while ($blog_query->have_posts()) : $blog_query->the_post();
    ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="<?php the_title(); ?>">
                <?php endif; ?>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title"><?php the_title(); ?></h5>
                    <p class="card-text flex-grow-1"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                    <small class="text-muted">
                        <?php the_time('F j, Y'); ?> | <?php the_author(); ?><br>
                        Section: <?php the_category(', '); ?>
                    </small>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary mt-3">More</a>
                </div>
            </div>
        </div>
    <?php
        endwhile;
        echo '</div>';
        wp_reset_postdata();
    else :
        echo '<p>No blog posts available at the moment.</p>';
    endif;
    ?>
</div>
