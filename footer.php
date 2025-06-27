<footer class="footer-custom text-white pt-5 pb-3">
    <div class="container">
        <div class="row">

            <!-- Description -->
            <div class="col-md-4 mb-4">
                <h5>About Us</h5>
                <p>Creating peaceful soundscapes for meditation, relaxation, and inner harmony. Join our community of mindful listeners.</p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-4 mb-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="<?php echo home_url(); ?>" class="footer-link">Home</a></li>
                    <li><a href="<?php echo home_url('/blog'); ?>" class="footer-link">Blog</a></li>
                    <li><a href="<?php echo home_url('/videos'); ?>" class="footer-link">Videos</a></li>
                    <li><a href="<?php echo home_url('/community'); ?>" class="footer-link">Community</a></li>
                    <li><a href="<?php echo home_url('/contact'); ?>" class="footer-link">Contact</a></li>
                    <li><a href="<?php echo home_url('/about'); ?>" class="footer-link">About</a></li>
                </ul>
            </div>

            <!-- Connect -->
            <div class="col-md-4 mb-4">
                <h5>Connect</h5>
                <ul class="list-unstyled">
                    <li><a href="https://www.youtube.com/@RelaxedAxolotl" target="_blank" class="footer-link">YouTube</a></li>
                    <li><a href="#" class="footer-link">Substack</a></li>
                    <li><a href="#" class="footer-link">Reddit</a></li>
                    <li><a href="#" class="footer-link">Patreon</a></li>
                    <li><a href="#" class="footer-link">Instagram</a></li>
                </ul>
            </div>
        </div>

        <!-- Bottom Row -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center border-top pt-3 mt-4">
            <small>
                &copy; <?php echo do_shortcode('[year]'); ?> Relaxed Axolotl. All rights reserved. Made with ♥ for peaceful minds.
            </small>
            <div class="footer-policies text-md-end text-center mt-2 mt-md-0">
                <a href="<?php echo home_url('/privacy-policy'); ?>" class="footer-link">Privacy Policy</a> |
                <a href="<?php echo home_url('/terms-of-service'); ?>" class="footer-link">Terms of Service</a> |
                <a href="<?php echo home_url('/copyright'); ?>" class="footer-link">Copyright</a> |
                <a href="<?php echo home_url('/cookie-policy'); ?>" class="footer-link">Cookie Policy</a> |
				<a href="<?php echo home_url('/dmca'); ?>" class="footer-link">DMCA</a>
            </div>
        </div>
    </div>
</footer>
