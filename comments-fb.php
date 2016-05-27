<?php

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>

<p class="nocomments">Password protected.</p>
<?php
		return;
	}
?>
<!-- You can start editing here. -->


<br />
	<h3>Facebook でコメント</h3>
	<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-num-posts="5" data-width="620px"></div>

