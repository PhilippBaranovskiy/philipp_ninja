<?php get_header(); ?>

	<div class="info">
		<h1 class="info__name"><?php
			$siteOwner = array();
			$siteOwner[] = my_meta('user_firstname', 1);
			$siteOwner[] = my_meta('user_lastname', 1);
			echo join(' ', $siteOwner);
		?></h1>
		<p class="info__status">Software engineer / UI developer</p>
		<ul class="info__list">
			<li class="info__list__item">
				<a title="GitHub" href="<?php echo my_meta('github', 1); ?>" class="info__list__item__link info__list__item__link--icon sprite-gh"></a>
			</li>
			<li class="info__list__item">
				<a title="LinkedIn" href="<?php echo my_meta('linkedin', 1); ?>" class="info__list__item__link info__list__item__link--icon sprite-in"></a>
			</li>
			<li class="info__list__item">
				<a title="VK" href="<?php echo my_meta('vk', 1); ?>" class="info__list__item__link info__list__item__link--icon sprite-vk"></a>
			</li>
			<li class="info__list__item">
				<a title="Istagram" href="<?php echo my_meta('instagram', 1); ?>" class="info__list__item__link info__list__item__link--icon ig-b-24"></a>
			</li>
		</ul>
		<ul class="info__list">
 			<li class="info__list__item">
				<a class="info__list__item__vision-link" href="tel:375257689528">+375 (25) 768-95-28</a>
				/
				<a class="info__list__item__vision-link" href="mailto:<?php echo my_meta('user_email', 1); ?>">
					<?php echo my_meta('user_email', 1); ?>
				</a>
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