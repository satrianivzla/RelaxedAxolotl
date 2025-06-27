// Dark mode toggle
document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.getElementById('darkModeToggle');
    const savedTheme = localStorage.getItem('relaxedAxolotlTheme');

    if (savedTheme === 'dark') {
        document.body.classList.add('dark-mode');
    }

    if (toggle) {
        toggle.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
            const isDark = document.body.classList.contains('dark-mode');
            localStorage.setItem('relaxedAxolotlTheme', isDark ? 'dark' : 'light');
        });
    }

    // Scroll-to-top button
    const scrollBtn = document.getElementById('scrollBtn');
    if (scrollBtn) {
        window.addEventListener('scroll', () => {
            scrollBtn.style.display = window.scrollY > 200 ? 'block' : 'none';
        });

        scrollBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }
});
