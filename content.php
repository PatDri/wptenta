<h1><a href="<?php the_permalink(); ?>" title="Permalink to this post"><?php the_title(); ?></a></h1>

<div class="post-meta">
 	Author: <?php the_author(); ?> | Created: <?php the_date(); ?>
</div>
<?php

// Lägg till vilka olika storlekar bilderna behöver ha.


// check if the post or page has a Featured Image assigned to it.

	if ( has_post_thumbnail() ) {
		the_post_thumbnail('post-featured-image');
	}

?>

<?php

the_content();