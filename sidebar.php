    <div id="sidebar" class="column">

          <img src="http://ballroom-media.mit.edu/archive/Photos/Website/Static_Content/Logos/mitbdt_sm.png" alt="MITBDT" class="" />

<hr class="logo"/>
          <br />
                <p><a href="<?php bloginfo('url') ?>/index.php/sign-up/" class="btn-small">Sign up</a></p>
                <br />

          <h2><a href="<?php bloginfo('url') ?>/index.php/category/upcoming-events/">Upcoming Events</a></h2>

          <?php
             $recentPosts = new WP_Query();
                 $recentPosts->query('showposts=5&order=ASC&category_name=Upcoming Events'); ?>

          <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
             <div class="sidebar-entry">

                   <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
     <!-- <p><small class="quiet"><?php echo get_post_meta($post->ID, 'Date', true) ?></small></p> -->

               <?php the_excerpt(); ?>
             </div>

          <?php endwhile; ?>

          <br />
          <br />
          <h2><a href="<?php bloginfo('url') ?>/index.php/category/news/">News</a></h2>
          <?php
             $recentPosts = new WP_Query();
                 $recentPosts->query('showposts=5&order=DES&category_name=News'); ?>

          <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>

                   <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
               <p><small class="quiet"><?php the_time('F jS, Y') ?></small></p>
               <?php the_excerpt(); ?>

          <?php endwhile; ?>

     </div>
