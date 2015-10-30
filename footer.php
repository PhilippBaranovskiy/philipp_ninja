<?php if (is_single()) : ?>
<footer class="pageFooter">
	<!-- <p>
		<span class="iconsSET">H</span><br>
		2008 &copy; <a href="http://philipp.ninja" title="Philipp Baranovskiy: UI / frontend developer">Philipp Baranovskiy</a>
	</p> -->
	<!-- <div class="likely">
		<div class="twitter" data-via="philipp_ninja"></div>
		<div class="facebook"></div>
		<div class="vkontakte"></div>
		<div class="gplus"></div> -->
		<!-- <div class="pinterest" data-media="i/pinnable.png">Запинить</div> -->
	<!-- </div> -->

</footer>
<?php endif; ?>
	<?php wp_footer(); ?>
	<?php if ( !is_admin() ) : ?>
		<!-- Yandex.Metrika counter -->
		<script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter28181988 = new Ya.Metrika({id:28181988, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.body, s = d.createElement("script"), f = function () { n.appendChild(s); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/28181988" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
		<!-- /Yandex.Metrika counter -->
	<?php endif; ?>
</body>
</html>