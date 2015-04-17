<?php
/**
 * The template for displaying portfolio archive page.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package philipp_ninja
 */

get_header(); ?>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<p class="projectHeader">
				<span class="projectHeader__text">
					<?php the_title(); ?>
				</span>
			</p>

			<section class="projectDescription container">
				<p class="projectDescription__text eleven columns offset-by-one">
					<?php the_field('project_description'); ?>
				</p>
<!--
				<?php
					$testimonial = get_field('testimonial');
					if ( $testimonial ):
					
						// override $post
						$post = $testimonial;
						setup_postdata( $post ); 
					?>
					<div class="testimonial testimonial--projectPageTestimonial four columns offset-by-one">
						<figure class="testimonial__avatar">
							<img class="testimonial__avatar__src" src="/wp-content/themes/philipp_ninja/img/testimonialAvatar.png" alt="John Doe, ProntoPrint!">
							<figcaption class="testimonial__avatar__caption">
								<?php the_field('testimonial_customer_name');?>,<br>
								<?php the_title();?>
							</figcaption>
						</figure>
						<p class="testimonial__text">
							В целом все очень хорошо получилось (virool.com/blog уже переехал).<br>
							one small thing: рекомендовал бы усилить тестирование на стороне исполнителя, во избежание недосмотра мелких ошибок.
						</p>
					</div>
					<?php
						wp_reset_postdata();
					?>
				<?php endif; ?>
-->
			</section>

			<section class="projectMainPreview">
				<figure class="projectMainPreview__object">
					<?php
						$mainPreviewID = get_field('project_main_preview');
						$mainPreviewSRC = 'http://placehold.it/1020x650';

						if ($mainPreviewID) {
							$mainPreview = wp_get_attachment_image_src($mainPreviewID, 'full');
							$mainPreviewSRC = $mainPreview[0];
						}
					?>
					<img class="projectMainPreview__object__src" src="<?php echo $mainPreviewSRC; ?>" alt="<?php the_title(); ?>, project screenshot">
				</figure>
			</section>

			<section class="projectDetails container">
				<p class="projectDetails__text seven columns">
					<?php the_field('participation'); ?>
				</p>
				<div class="team team--projectPageTeam four columns offset-by-one">
					<ul class="team__list">
						<li class="team__list__item">Дизайн:</li>
						<li class="team__list__item"><a href="https://www.behance.net/gloomish" title="Other Stella's works on her catalog">Стелла Хон</a></li>
						<li class="team__list__item">&nbsp;</li>
						<li class="team__list__item">Разработка:</li>
						<li class="team__list__item">+ <a href="https://www.virool.com/about#team">команда Virool</a></li>
					</ul>
				</div>
			</section>

		<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>