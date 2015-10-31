<?php get_header(); ?>

	<div class="info">
		<h1 class="info__name"><?php
			$siteOwner = array();
			$siteOwner[] = my_meta('user_firstname', 1);
			$siteOwner[] = my_meta('user_lastname', 1);
			echo join(' ', $siteOwner);
		?></h1>
		<p class="info__status"><?php pll_e('Software engineer / UI developer'); ?></p>
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
 				<?php
 					$phone = my_meta('phone', 1);
 					if ($phone) : 
 						$phoneLink = preg_replace('/[ \+]/', '', $phone);
				?>
					<a class="info__list__item__vision-link" href="tel:<?php echo $phoneLink; ?>">
						<?php echo $phone; ?></a> /
				<?php endif; ?>
				<a class="info__list__item__vision-link" href="mailto:<?php echo my_meta('user_email', 1); ?>">
					<?php echo my_meta('user_email', 1); ?>
				</a>
			</li>
		</ul>
	</div>
	<p class="languages">
		<a href="/en" hreflang="en"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHzSURBVHjaYkxOP8IAB//+Mfz7w8Dwi4HhP5CcJb/n/7evb16/APL/gRFQDiAAw3JuAgAIBEDQ/iswEERjGzBQLEru97ll0g0+3HvqMn1SpqlqGsZMsZsIe0SICA5gt5a/AGIEarCPtFh+6N/ffwxA9OvP/7//QYwff/6fZahmePeB4dNHhi+fGb59Y4zyvHHmCEAAAW3YDzQYaJJ93a+vX79aVf58//69fvEPlpIfnz59+vDhw7t37968efP3b/SXL59OnjwIEEAsDP+YgY53b2b89++/awvLn98MDi2cVxl+/vl6mituCtBghi9f/v/48e/XL86krj9XzwEEEENy8g6gu22rfn78+NGs5Ofr16+ZC58+fvyYwX8rxOxXr169fPny+fPn1//93bJlBUAAsQADZMEBxj9/GBxb2P/9+S/R8u3vzxuyaX8ZHv3j8/YGms3w8ycQARmi2eE37t4ACCDGR4/uSkrKAS35B3TT////wADOgLOBIaXIyjBlwxKAAGKRXjCB0SOEaeu+/y9fMnz4AHQxCP348R/o+l+//sMZQBNLEvif3AcIIMZbty7Ly6t9ZmXl+fXj/38GoHH/UcGfP79//BBiYHjy9+8/oUkNAAHEwt1V/vI/KBY/QSISFqM/GBg+MzB8A6PfYC5EFiDAABqgW776MP0rAAAAAElFTkSuQmCC" title="English" alt="English"></a>

		<a href="/ru" hreflang="ru"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAE2SURBVHjaYvz69T8DAvz79w9CQVj/0MCffwwAAcQClObiAin6/x+okxHMgPCAbOb//5n+I4EXL74ABBALxGSwagTjPzbAyMgItAQggBg9Pf9nZPx//x7kjL9////9C2QAyf9//qCQQCQkxFhY+BEggFi2b/+nq8v46BEDSPQ3w+8//3//BqFfv9BJeXmQEwACCOSkP38YgHy4Bog0RN0vIOMXVOTPH6Cv/gEEEEgDxFKgHEgDXCmGDUAE1AAQQCybGZg1f/d8//XsH0jTn3+///z79RtE/v4NZfz68xfI/vOX+4/0ZoZFAAHE4gYMvD+3/v2+h91wCANo9Z+/jH9VxBkYAAKIBRg9TL//MEhKAuWAogxgZzGC2CCfgUggAoYdGAEVAwQQ41egu5AQAyoXTQoIAAIMAD+JZR7YOGEWAAAAAElFTkSuQmCC" title="Русский" alt="Русский"></a>

		<a href="/es" hreflang="es"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAFnSURBVHjaYvzPgAD/UNlYEUAAmuTYAAAQhAEYqF/zFbe50RZ1cMmS9TLi0pJLRjZohAMTGFUN9HdnHgEE1sDw//+Tp0ClINW/f0NIKPoFJH/9//ULyGaUlQXaABBALAx/Gf4zAt31F4i+ffj3/cN/XrFfzOx//v///f//LzACM/79ZmD8/e8TA0AAMYHdDVT958vXP38nMDB0s3x94/Tj5y+YahhiAKLfQKUAAcQEdtJfoDHMF2L+vPzDmFXLelf551tGFOOhev4A/QgQQExgHwAd8IdFT/Wz6j+GhlpmXSOW/2z///8Eq/sJ18Dw/zdQA0AAMQExxJjjdy9x2/76EfLz4MXdP/i+wsyGkkA3Aw3984cBIIAYfzIwMKel/bt3jwEaLNAwgZIQxp/fDH/+MqqovL14ESCAWICeZvr9h0FSEhSgwBgAygFDEMT+wwAhgQgc4kAEVAwQQIxfUSMSTxxDAECAAQAJWke8v4u1tAAAAABJRU5ErkJggg==" title="Español" alt="Español"></a>
	</p>
	<div class="container">
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
	</div>
<?php get_footer(); ?>