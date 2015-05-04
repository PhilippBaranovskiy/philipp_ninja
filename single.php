<?php get_header(); ?>
	
	<?php while ( have_posts() ) : the_post(); ?>
	
		<main class="row">
			<article class="post twelve columns">
				<header class="post__header">
					<h1 class="post__title"><?php the_title(); ?></h1>
					<?php the_post_thumbnail("thumbnail"); ?>
				</header>
				<div class="post-content twelve columns">
					<?php the_content(); ?>
				</div>
			</article>
		</main>
	
	<?php endwhile; ?>
<?php get_footer(); ?>