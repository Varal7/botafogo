<?php get_header();?>

      <main>

      <div id="player-container">
        <div id="player"></div>
        <div class="controls">
            <span id="mute" class="btn-main">Unmute</span>
        </div>
      </div>

      <div class="jumbotron">
        <div class="row">
          <div class="container"><?php
                  $recentPosts = new WP_Query();
                  $recentPosts->query('showposts=1&order=ASC&category_name=Upcoming Events');
              ?><?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
            <h1><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h1>
            <p><small class="quiet"><?php echo get_post_meta($post->ID, 'Date', true) ?></small></p>
            <?php the_excerpt(); ?>
            <div class="btn-container">
              <a href="<?php the_permalink()?>" class="btn-main"><i class="icon fas fa-shoe-prints"></i><span>Learn more</span></a>
            </div>
            <?php endwhile; ?>
          </div>
        </div>
        <div class="carousel">
          <div class="slide" style="background-image: url('https://i.imgur.com/MoBKiTH.jpg')">
            <div class="overlay">
              <div class="table-row">
                <span class="caption">Team members at MIT Open 2018</span>
              </div>
              <div class="table-row">
                <span class="credit">Credit: Emily Chen</span>
              </div>
            </div>
          </div>
          <div class="slide" style="background-image: url('https://i.imgur.com/qjC86Hg.jpg')">
            <div class="overlay">
              <div class="table-row">
                <span class="caption">Team members at MIT Open 2018</span>
              </div>
              <div class="table-row">
                <span class="credit">Credit: Emily Chen</span>
              </div>
            </div>
          </div>
          <div class="slide" style="background-image: url('https://i.imgur.com/iFs69uI.jpg')">
            <div class="overlay">
              <div class="table-row">
                <span class="caption">Team members at MIT Open 2018</span>
              </div>
              <div class="table-row">
                <span class="credit">Credit: Emily Chen</span>
              </div>
            </div>
          </div>
          <div class="slide" style="background-image: url('https://i.imgur.com/ciMrIhB.jpg')">
            <div class="overlay">
              <div class="table-row">
                <span class="caption">Team members at MIT Open 2018</span>
              </div>
              <div class="table-row">
                <span class="credit">Credit: Emily Chen</span>
              </div>
            </div>
          </div>

        </div>
      </div>


      <section class="two-columns">
          <div id="upcoming" class="column"><h2><a href="<?php bloginfo('url') ?>/index.php/category/upcoming-events/">Upcoming events</a></h2>
               <?php
                    $recentPosts = new WP_Query();
                    $recentPosts->query('showposts=3&order=ASC&category_name=Upcoming Events&offset=0');
               ?>

               <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>

                    <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                    <p><small class="quiet"><?php echo get_post_meta($post->ID, 'Date', true) ?></small></p>

                    <?php the_excerpt(); ?>

               <?php endwhile; ?>
              <div id="more-events">
                <p><a href="<?php bloginfo('url') ?>/index.php/category/upcoming-events/" class="btn-small">See all upcoming events</a></p>

                <p><a href="<?php bloginfo('url') ?>/index.php/category/events-archive/" class="btn-small">See past events</a></p>
              </div>
          </div>

          <div id="description" class="column">
               <img src="http://ballroom-media.mit.edu/archive/Photos/Website/Static_Content/Logos/mitbdt.png" alt="MITBDT" />
               <p>
                    <br />
Interested in learning how to dance competitive ballroom? Our classes start in the fall, and complete beginners as well as those with experience are welcome and encouraged to join! Sign up for our mailing list to find out about the first classes
<!--                    The MIT Ballroom Dance Team aims to share our passion for competitive ballroom dancing with MIT students, alums, and other MIT affiliates through beginner and advanced ballroom dance classes, competitions, socials, and performances.-->
<a href="http://mailman.mit.edu/mailman/listinfo/mitbdt-events" class="external">Click here</a> to sign up for our public mailing list.
               </p>
          <div class="cards">
            <a id="card-join-us" href="<?php bloginfo('url') ?>/index.php/join/"><div class="card">
                <p>Join us</p>
              </div>
            </a>
            <a id="card-donate" href="<?php bloginfo('url') ?>/index.php/giving">
              <div class="card">
                <p>Donate</p>
            </div>
              </a>
          </div>
        </div>
      </section>


      <section>
          <div id="news"><h2><a href="<?php bloginfo('url') ?>/index.php/category/news/">News</a></h2>
               <?php
                    $recentPosts = new WP_Query();
                    $recentPosts->query('showposts=3&order=DES&category_name=News'); ?>

          <div class="three-columns">
               <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
            <div class="column">

                    <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                    <p><small class="quiet"><?php the_time('F jS, Y') ?></small></p>

                    <?php the_excerpt(); ?>
            </div>

               <?php endwhile; ?>
            <p class="no-margin"></p>
          <p class="no-margin"><a href="<?php bloginfo('url') ?>/index.php/category/news/" class="btn-small">Visit the news archive</a></p>
          </div>
        </div>
    </section>
  </main>
<?php get_footer(); ?>
