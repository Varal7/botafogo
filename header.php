<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
     <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

     <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

     <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />

     <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
     <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
     <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />

     <!-- Google Analytics below. -->
     <script type="text/javascript">

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-18050045-1']);
          _gaq.push(['_trackPageview']);

          (function() {
               var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
               ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
               var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

     </script>
     <!-- End Google Analytics. -->


</head>

<body>

<div id="page">

     <header>
        <div class="container">
        <!--
          <div id="logo">
               <a href="<?php bloginfo('url') ?>/"><img src="http://ballroom-media.mit.edu/archive/Photos/Website/Static_Content/Logos/mitbdt_logo.png"  alt="MITBDT Logo" /></a>
          </div>
-->


          <div id="title">
            <a href="<?php bloginfo('url') ?>/">MIT Ballroom Dance Team</a>
          </div>

          <p id="menu"> <i class="fa fa-bars"></i> </p>
          <nav id="nav">

                <a <?php if (is_page('joining-the-team')||is_page('sign-up')||is_page('dance-camp')) { echo " class=\"current\""; } ?> href="<?php bloginfo('url') ?>/index.php/join/">Join</a>

                <a <?php if (is_page('giving')) { echo " class=\"current\""; } ?> href="<?php bloginfo('url') ?>/index.php/giving">Giving</a>

                <!-- <a href="http://ballroom.mit.edu/comp/">MIT Open</a> -->

            <div class="dropdown">
              <button class="dropbtn">More
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">


                <a <?php if (is_page('about')||is_page('about_ballroom')||is_page('about-our-coaches')||is_page('ycn-proficiency-points')) { echo " class=\"current\""; } ?> href="<?php bloginfo('url') ?>/index.php/about/">About</a>

                <a href="<?php bloginfo('url') ?>/index.php/category/upcoming-events/">Events</a>

                <!-- <a href="<?php bloginfo('url') ?>/index.php/2016/06/mitempire/">MIT/Empire</a> -->




                <a <?php if (is_page('results')||is_page('team-results-archive')) { echo " class=\"current\""; } ?> href="<?php bloginfo('url') ?>/index.php/category/results">Results</a>

                <a <?php if (is_page('alumni-corner')) { echo " class=\"current\""; } ?> href="<?php bloginfo('url') ?>/index.php/alumni-corner">Alumni</a>
                <a <?php if (is_page('performances')||is_page('performance-archive')) { echo " class=\"current\""; } ?> href="<?php bloginfo('url') ?>/index.php/performances/">Performances</a>

                <a <?php if (is_page('open-dancer-hall-of-fame')) { echo " class=\"current\""; } ?> href="<?php bloginfo('url') ?>/index.php/open-dancer-hall-of-fame/">Photos</a>

                <a href="http://ballroom.mit.edu/comp/">MIT Open</a>
                </div>
              </div>

              <a class="icon" href="http://facebook.com/mitbdt"><i class="fab fa-facebook-square"></i><span> Facebook</span></a>
              <a class="icon" href="https://www.instagram.com/mit.bdt/?hl=en"><i class="fab fa-instagram"></i><span> Instagram</span></a>
              <a class="icon" href="http://twitter.com/MIT_Ballroom/"><i class="fab fa-twitter"></i><span> Twitter</span></a>
              <a class="icon" href="<?php bloginfo('url') ?>/index.php/contact-us/"><i class="fa fa-envelope"></i><span> Contact</a>

            </nav>

          </div>
      </header>
