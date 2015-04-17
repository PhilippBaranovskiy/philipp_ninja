<?php
/**
 * The template for displaying portfolio archive page.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package philipp_ninja
 */

get_header(); ?>

	<dl id="wrapper">

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<dt><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dt>
			<dd>
				<figure>
					<a href="<?php the_permalink(); ?>"><img src="http://lunarians.ru/preview/virool.png"></a>
				</figure>
				<p class="desc">Верстка, программирование на JS, Responsive Mobile View, WP, разработка WP плагинов.</p>
			</dd>

		<?php endwhile; ?>
	<?php endif; ?>

	</dl>

<?php get_footer(); ?>