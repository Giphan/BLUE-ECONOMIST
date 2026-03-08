<footer class="site-footer">
    <div class="footer-grid">
        <!-- Brand & Tagline Column -->
        <div class="footer-brand-column">
            <div class="footer-logo">
                <?php bloginfo('name'); ?>
            </div>
            <p class="footer-tagline">
                Make quick and confident buying decisions. Whether it’s finding great products or discovering helpful advice, we’ll help you get it right the first time.
                <a href="#" class="footer-cta">Subscribe now for unlimited access.</a>
            </p>
            
            <!-- Social Icons -->
            <div class="social-row">
                <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" aria-label="X"><i class="fab fa-x-twitter"></i></a>
                <a href="#" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
            </div>
        </div>

        <!-- Footer Links Column -->
        <div class="footer-links-column">
            <div class="link-group">
                <ul class="footer-menu">
                    <li><a href="#">About <?php bloginfo('name'); ?></a></li>
                    <li><a href="#">Our Team</a></li>
                    <li><a href="#">Staff Demographics</a></li>
                    <li><a href="#">Jobs at <?php bloginfo('name'); ?></a></li>
                    <li><a href="#">How to Pitch</a></li>
                </ul>
            </div>
            <div class="link-group">
                <ul class="footer-menu">
                    <li><a href="#">Contact <?php bloginfo('name'); ?></a></li>
                    <li><a href="#">Send Us Feedback</a></li>
                    <li><a href="#">Newsletters</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Legal & Disclosure Section -->
    <div class="footer-legal">
        <p class="copyright">
            &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>, Inc. A Review Company.
        </p>
        <div class="legal-nav">
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Service</a>
            <a href="#">Cookie Policy</a>
            <a href="#">Partnerships & Advertising</a>
            <a href="#">Licensing & Reprints</a>
            <a href="#">RSS</a>
        </div>
        <p class="disclosure">
            As an independent reviewer, we may earn a commission when you buy through links on our site.
        </p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
