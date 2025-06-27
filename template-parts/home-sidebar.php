<aside class="home-sidebar p-4 rounded bg-light">
    <h4 class="mb-4">Browse Categories</h4>
    <ul class="list-group mb-4">
        <?php
        $categories = get_categories();
        foreach ($categories as $category) :
        ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="<?php echo get_category_link($category->term_id); ?>" class="text-decoration-none">
                    <?php echo $category->name; ?>
                </a>
                <span class="badge bg-primary rounded-pill"><?php echo $category->count; ?></span>
            </li>
        <?php endforeach; ?>
    </ul>

    <!-- Optional: Add more sidebar widgets below -->
    <!-- <div class="mb-4">
        <h5>Newsletter Signup</h5>
        [insert form or custom HTML]
    </div> -->
</aside>
