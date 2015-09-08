<?php

function my_meta ($key) {
	if (!$key) return false;
	return esc_attr(get_the_author_meta($key, 1));
}

?>