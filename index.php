<?php get_header(); ?>
		<?php while ( have_posts() ) : the_post(); ?>
	
		<article class="post row">
			<header class="twelve columns">
				<h1 class="post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			</header>
			<!-- <div class="post-content twelve columns">
				<?php the_excerpt(); ?>
			</div> -->
		</article>
	
	<?php endwhile; ?>
<?php get_footer(); ?>