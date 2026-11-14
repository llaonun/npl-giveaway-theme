</main>
<footer class="site-footer">
	<div class="container footer-inner">
		<div class="footer-brand">
			<h3><?php esc_html_e( 'NPL Giveaway | LekhaSetu', 'npl-giveaway' ); ?></h3>
			<p><?php esc_html_e( 'Accounting, bookkeeping & tax — done online, done right.', 'npl-giveaway' ); ?></p>
			<p><a href="https://accounting.nirmalbhattarai12.com.np/">accounting.nirmalbhattarai12.com.np</a></p>
			<p><?php esc_html_e( 'Contact:', 'npl-giveaway' ); ?> <a href="mailto:contact@nirmalbhattarai12.com.np">contact@nirmalbhattarai12.com.np</a> &middot; +977 9703140647</p>
		</div>
		<nav class="footer-nav" aria-label="<?php esc_attr_e( 'Footer Menu', 'npl-giveaway' ); ?>">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'footer',
				'fallback_cb'    => false,
			) );
			?>
		</nav>
	</div>
	<div class="footer-bottom">
		<div class="container">&copy; <?php echo esc_html( date( 'Y' ) ); ?> LekhaSetu &middot; NPL Giveaway &middot; <?php esc_html_e( 'Predict responsibly.', 'npl-giveaway' ); ?></div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
