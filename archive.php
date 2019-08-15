<?php get_header(); ?>

      <section>
        <div class="sidebar-layout">
          <div id="content" class="narrowcolumn column">
<?php is_tag(); ?>
		<?php if (have_posts()) : ?>

		<h2> <?php single_cat_title(); ?></h2>
 	  <!--<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Author Archive</h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Blog Archives</h2>
 	  <?php } ?>-->

<pre>
<?php
$queried = $wp_query->get_queried_object();
// print_r($queried);
$term_id = $queried->term_id;
$parent = ($queried->category_parent);
?>
</pre>

<?php
if (($parent == 13) || is_category("Results")) { // # A results page
    $subcategories = get_terms( 'category' , 'parent=13' );

    usort($subcategories, function($a, $b)
    {
        return strcmp($b->name, $a->name);
    });

    ?><p>
    <?php
    if (is_category("Results")) { ?> <strong>About team results</strong> <?php } else { ?>
      <a href="<?php bloginfo('url') ?>/index.php/category/results">About team results</a>
    <?php } ?>
    <?php
    foreach ($subcategories as $subcat) {
      echo " | ";
      $name = str_replace("Results ", "", $subcat->name);

      if ($term_id == $subcat->term_id) {
        echo "<strong>" . $name . "</strong>";
      } else {
        ?><a href="<?php echo get_category_link( $subcat->term_id ); ?>"><?php echo $name; ?>
        </a> <?php
      }
    }
    ?> | <a href="<?php bloginfo('url') ?>/index.php/team-results-archive/">Archive</a>
    </p>
    <?php
}
?>


	  	<?php if (is_category('Upcoming Events')) {?>
		<p> <a href="http://mailman.mit.edu/mailman/listinfo/mitbdt-events" class="external">Click here</a> to sign up to our events mailing list.</p>
		<p><a href="<?php bloginfo('url') ?>/index.php?cat=6">« Past events</a></p>
		<?php } elseif (is_category('News')) {?>

		<p> Past news items are located in the <a
                href="<?php bloginfo('url') ?>/index.php?cat=9">News Archive.</a></p>
                  <?php } ?>



	  	<?php if (!is_category('Results')) {?>
                  <div class="navigation">
                          <div class="alignleft"><p><?php next_posts_link('&laquo; Older Entries') ?></p></div>
                          <div class="alignright"><p><?php previous_posts_link('Newer Entries &raquo;') ?></p></div>
                  </div>
                <?php } ?>

<?php
the_archive_description( '<div class="taxonomy-description">', '</div>' );
?>

                                  <hr class="separator">

                  <?php while (have_posts()) : the_post(); ?>
                  <div class="post">
                                  <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>


                                  <div class="entry">
                                          <?php the_content() ?>
                                  </div>

                                  <p class="postmetadata"></p>
                                  <hr class="separator">
			</div>

		<?php endwhile; ?>

		<div class="navigation">
                  <div class="alignleft"><p><?php next_posts_link('&laquo; Older Entries') ?></p></div>
                  <div class="alignright"><p><?php previous_posts_link('Newer Entries &raquo;') ?></p></div>
                  <?php if (is_category('Upcoming Events')) {?>
                  <p><a href="<?php bloginfo('url') ?>/index.php?cat=6">« Past events</a></p>
                  <?php } ?>
		</div>

<?php if (($parent == 13) || is_category("Results")) { // # A results page ?>
                  <p><em>On the collegiate scene, there has been an increasing problem of individuals competing at lower levels than they are permitted to do so as set by the guidelines of those individual competitions. This gives them an unfair advantage. The MITBDT takes level restrictions seriously and does not tolerate violations of this sort. We do what we can to prevent this from happening within our team. If there are any concerns that an MITBDT team member may be "dancing down" in an <strong>upcoming</strong> competition, please contact the <a href="mailto:mitbdt-captain@mit.edu">MITBDT team captain</a>. In fairness to all competitors, we would urge that any individual suspected of level violations from <strong>other</strong> institutions also be reported <strong>prior</strong> to the competition, to either the individual's affiliated school/studio or the competition organizers.</em></p>

    <p><em>If you notice errors in the results, please contact the <a href="mailto:mitbdt-captain@mit.edu">MITBDT team captain</a> to update the listing.</em></p>
              <?php } ?>

	<?php else : ?>

		<h2 class="center">Page Not Found</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>
      </div>
    </section>

<?php get_footer(); ?>
