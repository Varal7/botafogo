<?php
/*
Template Name: Results
*/
?>

<?php get_header(); ?>

      <section>
        <div class="sidebar-layout">
          <div id="content" class="narrowcolumn column">

<?php //Print results page
$resultfile = (TEMPLATEPATH . '/results/results_' . $_GET['comp'] . '.html');
if (file_exists ($resultfile)) {
        $fh = fopen($resultfile, 'r');
        $result = fread($fh, filesize($resultfile));
        fclose ($fh);
        echo $result;
}
?>

	</div>

<?php get_sidebar(); ?>
      </div>
    </section>

<?php get_footer(); ?>
