<?php get_header(); ?>

	<div class="info">
		<h1 class="info__name">Philipp Baranovskiy</h1>
		<p class="info__status">Software engineer / UI developer</p>
		<ul class="info__list">
			<li class="info__list__item"><li class="info__list__item">
				<a title="GitHub" href="https://github.com/rockfield" class="info__list__item__link info__list__item__link--icon sprite-gh"></a>
			</li>
			<li class="info__list__item">
				<a title="LinkedIn" href="https://linkedin.com/in/philippninja" class="info__list__item__link info__list__item__link--icon sprite-in"></a>
			</li>
			<li class="info__list__item">
				<a title="MoiKrug" href="http://phil-b.moikrug.ru/" class="info__list__item__link info__list__item__link--icon sprite-mk"></a>
			</li>
			<li class="info__list__item"><li class="info__list__item">
				<a title="VK" href="https://vk.com/philipp.ninja" class="info__list__item__link info__list__item__link--icon sprite-vk"></a>
			</li>
			<li class="info__list__item"><li class="info__list__item">
				<a title="Istagram" href="https://instagram.com/philipp.ninja" class="info__list__item__link info__list__item__link--icon ig-b-24"></a>
			</li>
		</ul>
		<ul class="info__list">
 			<li class="info__list__item">
				<a class="info__list__item__vision-link" href="tel:375257689528">+375 (25) 768-95-28</a>
				/
				<a class="info__list__item__vision-link" href="mailto:me@philipp.ninja">me@philipp.ninja</a>
			</li>
		</ul>
	</div>

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