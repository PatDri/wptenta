<?php
  get_header();
?>


  <div class="container">
    <div class="row">
      <div class="col-md-9">
        
        <?php
          if (have_posts()) {
              while (have_posts()){
                the_post();
                ?>
                  <article class="post">
                    <header>
                      <h1 class="the-title"><?php the_title(); ?></h1>
                    </header>
                    <main class="the-content">
                      <?php the_content(); ?>  
                    </main>
                  </article>

                <?php

              }

            } else {
            
            // inget innehåll finns
                
              _e("Ledsen, kunde tyvärr inte hitta några inlägg åt dig!", 'wptenta');
            }
          ?>

      </div><!-- / .col-md-9 -->
      <div class="col-md-3">
        <?php
          get_sidebar();
        ?>
      </div><!-- / .col-md-3 -->
    </div><!-- / .row -->
  </div><!-- / .container -->


<?php
  get_footer();
?>