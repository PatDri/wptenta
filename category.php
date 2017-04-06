<?php
get_header();
?>

<div class="container">
  <div class="row">
    <div class="col-md-9">
      <h1><?php single_cat_title(); ?></h1>

<?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

  <h2><a href="<?php the_permalink(); ?>" title="Permalink to this post"><?php the_title(); ?></a></h2>
  <div class="post-meta">
    Author: <?php the_author(); ?> | Created: <?php the_date(); ?>
  </div>

<?php
// check if the post or page has a Featured Image assigned to it.
if ( has_post_thumbnail() ) {
    the_post_thumbnail();
}
?>

<?php
        the_excerpt();
        ?>

  <hr />

  <?php
    endwhile;
    else :
        _e( 'Ledsen, inga inlägg som du sökte efter finns.', 'textdomain' );
    endif;

?>
    </div><!-- /col-md-9 -->
    <div class="col-md-3">

<?php
    get_sidebar();
?>

    </div><!-- /col-md-3 -->
  </div><!-- /row -->
</div><!-- /container -->

<?php
get_footer();
?>