<?php get_header(); ?>

<section class="hero">
	<div class="container hero-inner">
		<span class="hero-badge"><?php esc_html_e( 'Nepal Premier League · Season 3 · 26 Oct – 21 Nov 2026', 'npl-giveaway' ); ?></span>
		<h1 class="hero-title"><?php esc_html_e( 'Predict the NPL.', 'npl-giveaway' ); ?><br><?php esc_html_e( 'Win', 'npl-giveaway' ); ?> <span class="gold-text"><?php esc_html_e( 'Rs. 1,000.', 'npl-giveaway' ); ?></span></h1>
		<p class="hero-sub"><?php esc_html_e( 'Pick the winner before every match. Earn 10 points for the right winner and 5 bonus points for the right margin. Top the leaderboard after the final and the Rs. 1,000 prize is yours.', 'npl-giveaway' ); ?></p>
		<div class="hero-actions">
			<a class="btn btn-gold" href="<?php echo esc_url( home_url( '/how-to-play-rules/' ) ); ?>"><?php esc_html_e( 'How to Play', 'npl-giveaway' ); ?></a>
			<a class="btn btn-outline-light" href="<?php echo esc_url( home_url( '/matches/' ) ); ?>"><?php esc_html_e( 'See Matches', 'npl-giveaway' ); ?></a>
		</div>
		<div class="hero-stats">
			<div class="hero-stat"><strong>32</strong><span><?php esc_html_e( 'Matches', 'npl-giveaway' ); ?></span></div>
			<div class="hero-stat"><strong>8</strong><span><?php esc_html_e( 'Teams', 'npl-giveaway' ); ?></span></div>
			<div class="hero-stat"><strong>Rs. 1,000</strong><span><?php esc_html_e( 'Prize', 'npl-giveaway' ); ?></span></div>
		</div>
	</div>
</section>

<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		if ( get_the_content() ) :
			?>
			<section class="section intro-section">
				<div class="container narrow"><?php the_content(); ?></div>
			</section>
			<?php
		endif;
	endwhile;
endif;
?>

<section class="section" id="how-it-works">
	<div class="container">
		<h2 class="section-title"><?php esc_html_e( 'How it works', 'npl-giveaway' ); ?></h2>
		<p class="section-sub"><?php esc_html_e( 'Three steps between you and the prize.', 'npl-giveaway' ); ?></p>
		<div class="steps">
			<article class="step-card">
				<span class="step-num">1</span>
				<h3><?php esc_html_e( 'Predict before the match', 'npl-giveaway' ); ?></h3>
				<p><?php esc_html_e( 'Choose the winner — and the winning margin — before the scheduled start of every NPL match.', 'npl-giveaway' ); ?></p>
			</article>
			<article class="step-card">
				<span class="step-num">2</span>
				<h3><?php esc_html_e( 'Earn points', 'npl-giveaway' ); ?></h3>
				<p><?php esc_html_e( '10 points for the correct winner, plus 5 bonus points if your margin is right. Points add up all season.', 'npl-giveaway' ); ?></p>
			</article>
			<article class="step-card">
				<span class="step-num">3</span>
				<h3><?php esc_html_e( 'Top the board, win Rs. 1,000', 'npl-giveaway' ); ?></h3>
				<p><?php esc_html_e( 'After the final on 21 November, the highest total wins Rs. 1,000 — paid via your preferred option: eSewa, Khalti, or bank.', 'npl-giveaway' ); ?></p>
			</article>
		</div>
	</div>
</section>

<section class="section prize-section">
	<div class="container">
		<div class="prize-card">
			<div>
				<h2><?php esc_html_e( 'The prize: Rs. 1,000', 'npl-giveaway' ); ?></h2>
				<p><?php esc_html_e( 'One winner, after the final match. Paid through the payment option you choose at signup — eSewa, Khalti, or bank.', 'npl-giveaway' ); ?></p>
			</div>
			<a class="btn btn-dark" href="<?php echo esc_url( home_url( '/leaderboard/' ) ); ?>"><?php esc_html_e( 'View Leaderboard', 'npl-giveaway' ); ?></a>
		</div>
	</div>
</section>

<?php if ( function_exists( 'npl_giveaway_get_next_match' ) ) : $npl_next = npl_giveaway_get_next_match(); if ( $npl_next ) : ?>
<section class="section next-match-section">
	<div class="container">
		<div class="next-match-card">
			<div>
				<span class="next-match-label"><?php esc_html_e( 'Next match', 'npl-giveaway' ); ?></span>
				<h2><?php echo esc_html( $npl_next->team_a ); ?> <span class="npl-vs">vs</span> <?php echo esc_html( $npl_next->team_b ); ?></h2>
				<p><?php echo esc_html( npl_giveaway_format_match_time( $npl_next ) ); ?> NPT · <?php esc_html_e( 'TU Ground, Kirtipur', 'npl-giveaway' ); ?></p>
			</div>
			<a class="btn btn-gold" href="<?php echo esc_url( home_url( '/predict/' ) ); ?>"><?php esc_html_e( 'Predict this match', 'npl-giveaway' ); ?></a>
		</div>
	</div>
</section>
<?php endif; endif; ?>

<?php if ( function_exists( 'npl_giveaway_get_leaderboard' ) ) : $npl_top = npl_giveaway_get_leaderboard(); if ( ! empty( $npl_top ) ) : $npl_top = array_slice( $npl_top, 0, 3 ); ?>
<section class="section top3-section">
	<div class="container">
		<h2 class="section-title"><?php esc_html_e( 'Top of the leaderboard', 'npl-giveaway' ); ?></h2>
		<ol class="top3-list">
			<?php foreach ( $npl_top as $i => $row ) : ?>
			<li><span class="top3-rank"><?php echo (int) $i + 1; ?></span> <?php echo esc_html( $row->name ); ?> <strong><?php echo (int) $row->points; ?> pts</strong></li>
			<?php endforeach; ?>
		</ol>
		<p class="center"><a class="btn btn-teal" href="<?php echo esc_url( home_url( '/leaderboard/' ) ); ?>"><?php esc_html_e( 'Full leaderboard', 'npl-giveaway' ); ?></a></p>
	</div>
</section>
<?php endif; endif; ?>

<section class="section">
	<div class="container">
		<h2 class="section-title"><?php esc_html_e( 'Rules at a glance', 'npl-giveaway' ); ?></h2>
		<div class="rules-grid">
			<div class="rule-item">
				<h3><?php esc_html_e( 'Follow LekhaSetu', 'npl-giveaway' ); ?></h3>
				<p><a href="https://www.instagram.com/lekhasetu">Instagram</a> &amp; <a href="https://www.facebook.com/61596141450790/">Facebook</a> — <?php esc_html_e( 'following both pages is required to win. Share your username and a follow screenshot when you sign up.', 'npl-giveaway' ); ?></p>
			</div>
			<div class="rule-item">
				<h3><?php esc_html_e( 'One prediction per match', 'npl-giveaway' ); ?></h3>
				<p><?php esc_html_e( 'One entry per person, per match.', 'npl-giveaway' ); ?></p>
			</div>
			<div class="rule-item">
				<h3><?php esc_html_e( 'Predictions close at match start', 'npl-giveaway' ); ?></h3>
				<p><?php esc_html_e( 'Entries after the scheduled start do not count.', 'npl-giveaway' ); ?></p>
			</div>
			<div class="rule-item">
				<h3><?php esc_html_e( '10 + 5 points', 'npl-giveaway' ); ?></h3>
				<p><?php esc_html_e( '10 for the winner, 5 bonus for the margin.', 'npl-giveaway' ); ?></p>
			</div>
			<div class="rule-item">
				<h3><?php esc_html_e( 'Winner after the final', 'npl-giveaway' ); ?></h3>
				<p><?php esc_html_e( 'Highest total after the final match on 21 November 2026 wins.', 'npl-giveaway' ); ?></p>
			</div>
		</div>
		<p class="center"><a class="btn btn-teal" href="<?php echo esc_url( home_url( '/how-to-play-rules/' ) ); ?>"><?php esc_html_e( 'Read the full rules', 'npl-giveaway' ); ?></a></p>
	</div>
</section>

<section class="cta-band">
	<div class="container">
		<h2><?php esc_html_e( 'Predictions open before every match.', 'npl-giveaway' ); ?></h2>
		<p><?php esc_html_e( 'Sign up, pick your payment option, and start predicting.', 'npl-giveaway' ); ?></p>
		<a class="btn btn-gold" href="<?php echo esc_url( home_url( '/matches/' ) ); ?>"><?php esc_html_e( 'See the fixtures', 'npl-giveaway' ); ?></a>
	</div>
</section>

<?php get_footer(); ?>
