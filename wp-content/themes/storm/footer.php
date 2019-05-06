</main>
<footer class="footer">
    <div class="container">
        <div class="footer__wrapper">
            <div class="footer__copy">
                Copyright <?php echo( date( "Y" ) ); ?>. Storm Guard. All Rights Reserved. Website Produced by: <a
                        href="#">Inverse Paradox</a>
            </div>
			<?php
			wp_nav_menu( [
				'theme_location' => 'footer',
				'container'      => null,
				'items_wrap'     => '<ul class="footer__menu-list row align-items-center justify-content-end">%3$s</ul>'
			] );
			?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>