<?php get_header(); ?>
	
	<?php while ( have_posts() ) : the_post(); ?>
	
		<main class="row">
			<article class="post twelve columns">
				<header class="post__header">
					<p>
						<span style="font-size: 30px; position: relative; bottom: -4px;">⬑</span>
						<a href="<?php echo esc_url( home_url() ); ?>">philipp.ninja</a>
					</p>
					<h1 class="post__title"><?php the_title(); ?></h1>
					<?php the_post_thumbnail("thumbnail"); ?>
				</header>
				<div class="post-content twelve columns">
					<?php the_content(); ?>
				</div>
			
			<footer class="pageFooter">
				<div class="yashare-auto-init" data-yashareL10n="ru"
					 data-yashareType="small"
					 data-yashareQuickServices="vkontakte,facebook,twitter,gplus"
					 data-yashareTheme="counter"></div>
			</footer>

			<!-- Begin MailChimp Signup Form -->
			<link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
			<style type="text/css">
				#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
				/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
				   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
			</style>
			<div id="mc_embed_signup">
			<form action="//ninja.us11.list-manage.com/subscribe/post?u=39e02a0b24cc24daa5ca5a8b8&amp;id=b5b5434a1b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			    <div id="mc_embed_signup_scroll">
				<label for="mce-EMAIL">Получать посты на почту, около 2 раз в месяц:</label>
				<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
			    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			    <div style="position: absolute; left: -5000px;"><input type="text" name="b_39e02a0b24cc24daa5ca5a8b8_b5b5434a1b" tabindex="-1" value=""></div>
			    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
			    </div>
			</form>
			</div>

			<!--End mc_embed_signup-->

			<p>
				<span style="font-size: 30px; position: relative; bottom: -4px;">⬑</span>
				<a href="<?php echo esc_url( home_url() ); ?>">philipp.ninja</a>
			</p>

			<div id="disqus_thread"></div>
			<script type="text/javascript">
			    /* * * CONFIGURATION VARIABLES * * */
			    var disqus_shortname = 'philipp-ninja';
			    
			    /* * * DON'T EDIT BELOW THIS LINE * * */
			    (function() {
			        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
			        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
			        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
			    })();
			</script>
			</article>
		</main>
	
	<?php endwhile; ?>
<?php get_footer(); ?>