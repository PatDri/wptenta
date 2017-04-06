<?php
  get_header();

          if (have_posts()) {
              while (have_posts()){
                the_post();

                if (has_post_thumbnail()){
                  get_template_part('content-templates/page', 'with-featured-image');
                } else {
                  get_template_part('content-templates/page', '');
                }
              }
            } else {
              _e("Ledsen, kunde tyvärr inte hitta den sida som du söker!", 'wptenta');

            }

  get_footer();
?>