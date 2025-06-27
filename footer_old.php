<footer class="bg-dark text-white py-3">
    <div class="container d-flex justify-content-between">
        <!-- Left Side: Copyright & Message -->
        <div>
            &copy; 2025 Relaxed Axolotl. All rights reserved. Made with ♥ for peaceful minds.
        </div>

        <!-- Right Side: Policy Links -->
        <div>
            <a href="<?php echo home_url('/privacy-policy'); ?>" class="text-white text-decoration-none mx-2">Privacy Policy</a> |
            <a href="<?php echo home_url('/terms-of-service'); ?>" class="text-white text-decoration-none mx-2">Terms of Service</a> |
            <a href="<?php echo home_url('/copyright'); ?>" class="text-white text-decoration-none mx-2">Copyright</a> |
            <a href="<?php echo home_url('/cookie-policy'); ?>" class="text-white text-decoration-none mx-2">Cookie Policy</a> |
            <a href="<?php echo home_url('/dmca'); ?>" class="text-white text-decoration-none mx-2">DMCA</a>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

<button onclick="scrollToTop()" id="scrollBtn" class="btn btn-primary">▲ Top</button>



<script>
    // Show button when scrolling down
    window.onscroll = function() {
        let scrollBtn = document.getElementById("scrollBtn");
        if (document.documentElement.scrollTop > 100) {
            scrollBtn.style.display = "block";
        } else {
            scrollBtn.style.display = "none";
        }
    };

    // Scroll to top function
    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: "smooth" });
    }
</script>


</body>
</html>
