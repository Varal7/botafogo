      <footer>

        <ul>
          <li><a href="http://www.mit.edu/"><img src="http://ballroom-media.mit.edu/archive/Photos/Website/Static_Content/Logos/mitlogo.png" alt="Massachusetts Institute of Technology"/></a></li>
          <li><a href="http://ballroom.mit.edu/index.php/feed/"><img src="http://ballroom-media.mit.edu/archive/Photos/Website/Static_Content/Logos/rss-icon-14x14.png" alt="RSS Feed" /></a> <a href="http://twitter.com/MIT_Ballroom/"><img src="http://ballroom-media.mit.edu/archive/Photos/Website/Static_Content/Logos/twitter-icon-14x14.png" alt="MIT on Twitter" /></a> <a href="http://facebook.com/mitbdt"><img src="http://ballroom-media.mit.edu/archive/Photos/Website/Static_Content/Logos/facebook-icon-14x14.png" alt="MIT Open on Facebook" /></a></li>

          <li>View <a href="index.php/about-inclusion/">our policy</a> on inclusivity</li>
        </ul>
          <ul>
               <li>     MITBDT is a 501(<a class="hidden_link" href="http://validator.w3.org/check/referer">c</a>)<a class="hidden_link" href="<?php bloginfo('url') ?>/wordpress/wp-admin/">3</a> organization </li>
          <li>     Contact the <a href="mailto:mitbdt-www@mit.edu" class="mailto">Webmaster</a> </li>
        </ul>

      </footer>

        </div>

        </script>
        <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>

        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

        <script src="<?php echo bloginfo('template_url') ?>/menu.js"></script>
        <?php  if ((isset($_GET['yt']) && ($_GET['yt'] == 1))) { ?>
            <script src="<?php echo bloginfo('template_url') ?>/youtube.js"></script>
        <?php } ?>
        <script src="<?php echo bloginfo('template_url') ?>/carousel.js"></script>

        <script>
        function fixHeight() {
        <?php  if ((isset($_GET['full']) && ($_GET['full'] == 1))) { ?>
            const height =  $( window ).height() - 50;
        <?php } else { ?>
            const height = 600;
        <?php } ?>
          $('.jumbotron').height(Math.max(height, 600));
          $('.carousel').height(Math.max(height, 600));
          $('.slide').height(Math.max(height, 600));
          $('.slick-arrow').height(Math.max(height, 600));
        }

        $( window ).resize(function() {
          fixHeight();
        });
        </script>
        <script>
        $(document).ready(function() {
          carousel();
          fixHeight();
        }
        </script>

</body>
</html>
