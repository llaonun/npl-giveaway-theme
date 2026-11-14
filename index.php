<?php get_header(); ?>

<section class="page-header">
	<div class="container">
		<h1 class="page-title"><?php bloginfo( 'name' ); ?></h1>
	</div>
</section>

<section class="section">
	<div class="container narrow">
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				?>
				<article class="post-card">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div><?php the_excerpt(); ?></div>
				</article>
				<?php
			endwhile;
		else :
			?>
			<p><?php esc_html_e( 'No content yet.', 'npl-giveaway' ); ?></p>
			<?php
		endif;
		?>
	</div>
</section>

<?php get_footer(); ?>
