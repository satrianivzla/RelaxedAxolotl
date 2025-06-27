<?php
/* Template Name: Style Guide */
get_header();
?>

<div class="container my-5">
    <h1 class="mb-4">Relaxed Axolotl – Style Guide</h1>

    <!-- Typography -->
    <section class="mb-5">
        <h2 class="mb-3">Typography</h2>
        <h1>Heading 1</h1>
        <h2>Heading 2</h2>
        <h3>Heading 3</h3>
        <h4>Heading 4</h4>
        <p>Body text: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p><a href="#">This is a link</a></p>
        <hr>
    </section>

    <!-- Buttons -->
    <section class="mb-5">
        <h2 class="mb-3">Buttons</h2>
        <button class="btn btn-primary me-2">Primary Button</button>
        <button class="btn btn-outline-primary me-2">Outline Button</button>
        <button class="btn btn-secondary">Secondary Button</button>
    </section>

    <!-- Color Swatches -->
    <section class="mb-5">
        <h2 class="mb-3">Color Palette</h2>
        <div class="d-flex flex-wrap gap-3">
            <div class="p-3 text-white" style="background:#2b1d15;">#2b1d15 – Dark Cacao</div>
            <div class="p-3" style="background:#f7f3ec;">#f7f3ec – Warm Linen</div>
            <div class="p-3" style="background:#5a3e2b; color:#fff;">#5a3e2b – Deep Coffee</div>
            <div class="p-3" style="background:#ffbe78;">#ffbe78 – Golden Apricot</div>
            <div class="p-3" style="background:#ffcc99;">#ffcc99 – Peach Mist</div>
        </div>
    </section>

    <!-- Blog Card -->
    <section class="mb-5">
        <h2 class="mb-3">Blog Card</h2>
        <div class="card" style="max-width: 600px;">
            <img src="https://placehold.co/600x400?text=Fallback" class="card-img-top" alt="Blog demo">
            <div class="card-body">
                <h5 class="card-title">Sample Blog Post</h5>
                <p class="card-text">A brief excerpt showing how post summaries appear with visual spacing.</p>
                <p class="text-muted">June 2025 · by Simon</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </section>
	
	
	<!-- Hero Slider Module -->
		<section class="mb-5">
			<h2>Hero Slider Preview</h2>
			<?php get_template_part('template-parts/hero-slider'); ?>
		</section>

		<!-- Featured Video Module -->
		<section class="mb-5">
			<h2>Featured Video Block</h2>
			<?php get_template_part('template-parts/home-featured-video'); ?>
		</section>
	</div>
	
	<!-- Post Grid Layout -->
	<section class="mb-5">
		<h2>Post Grid</h2>
		<div class="row">
			<?php for ($i = 1; $i <= 3; $i++) : ?>
				<div class="col-md-4 mb-4">
					<div class="card h-100">
						<img src="https://placehold.co/600x400?text=Post+<?php echo $i; ?>" class="card-img-top" alt="Post <?php echo $i; ?>" title="Post <?php echo $i; ?>">
						<div class="card-body">
							<h5 class="card-title">Post Title <?php echo $i; ?></h5>
							<p class="card-text">A short excerpt for demo post <?php echo $i; ?> showing how post content appears in a grid.</p>
							<a href="#" class="btn btn-outline-primary">Read More</a>
						</div>
					</div>
				</div>
			<?php endfor; ?>
		</div>
	</section>
	
	<!-- Dark Mode Test Block -->
	<section class="mb-5">
		<h2>Dark Mode Preview</h2>
		<div class="p-4 text-light" style="background-color: #2b1d15;">
			<h3>Heading on Dark</h3>
			<p>This section simulates a dark mode variant for testing text contrast and spacing.</p>
			<a href="#" class="btn btn-outline-light">Dark Button</a>
		</div>
	</section>
	
	
	<!-- Sidebar Module -->
	<section class="mb-5">
		<h2>Sidebar Module</h2>
		<div class="row">
			<div class="col-md-4">
				<?php get_template_part('template-parts/home-sidebar'); ?>
			</div>
		</div>
	</section>


    <!-- Form -->
    <section class="mb-5">
        <h2 class="mb-3">Form Elements</h2>
        <form action="#" method="post">
            <div class="mb-3">
                <label for="nameInput" class="form-label">Name</label>
                <input type="text" id="nameInput" class="form-control" placeholder="Your name">
            </div>
            <div class="mb-3">
                <label for="emailInput" class="form-label">Email</label>
                <input type="email" id="emailInput" class="form-control" placeholder="you@example.com">
            </div>
            <button class="btn btn-primary">Submit</button>
        </form>
    </section>
</div>

	<!-- Optional: Scroll-to-Top Button -->
	<button id="scrollBtn" title="Scroll to top">↑</button>

<?php get_footer(); ?>
