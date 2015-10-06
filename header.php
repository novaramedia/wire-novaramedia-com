<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php wp_title('|',true,'right'); bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" value="@novaramedia">
  <?php if (have_posts()):while(have_posts()):the_post();
    $excerpt = get_the_excerpt();
    if(has_post_thumbnail()) {
      $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'opengraph' );
    }
    $author = get_post_meta($post->ID, '_cmb_author_twitter', true);
    endwhile; endif;
    if (!empty($thumb)) {
  ?>
  <meta property="og:image" content="<?php echo $thumb['0'] ?>" />
  <meta name="twitter:image:src" content="<?php echo $thumb['0'] ?>">
  <?php } else { ?>
  <meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.png" />
  <meta name="twitter:image:src" content="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.png">
  <?php }
    if (!empty($author)) { ?>
  <meta name="twitter:creator" value="@<?php echo $author; ?>">
  <?php }
    if (is_home()) { ?>
  <meta property="og:title" content="<?php bloginfo('name'); ?>" />
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:description" content="<?php bloginfo('description'); ?>" />
<?php } elseif (is_single()) { ?>
  <meta property="og:url" content="<?php the_permalink() ?>"/>
  <meta property="og:title" content="<?php single_post_title(''); ?>" />
  <meta property="og:description" content="<?php echo $excerpt ?>" />
  <meta property="og:type" content="article" />
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<?php } else { ?>
  <meta property="og:title" content="<?php single_post_title(''); ?>" />
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
  <meta property="og:description" content="<?php bloginfo('description'); ?>" />
  <meta property="og:type" content="website" />
<?php } ?>

  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.png">
  <link rel="shortcut" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.ico">
  <link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon-touch.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.png">

  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/modernizr.js"></script>
  <script type="text/javascript">
    Modernizr.load([
      {
        test: Modernizr.mq('only all'),
        nope: "<?php bloginfo('stylesheet_directory'); ?>/js/polyfills/mediaqueries.js"
      }
    ]);
  </script>

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--[if lt IE 7]><p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p><![endif]-->

<a href="http://live.novaramedia.com">
  <section id="livenow">
  	&iexcl; LIVE NOW @ live.novaramedia.com !
  </section>
</a>

<!-- start content -->
<header id="header" class="font-white">
  <div class="container">
    <div class="row">
      <div class="col col12">
        <nav id="header-drawer-toggle" class="u-inline-block u-pointer js-toggle-drawer"><span class="genericon genericon-menu"></span></nav>
        <ul id="header-top-menu" class="u-inline-block u-inline-list">
          <li><a href="http://novaramedia.com/category/tv/">&#8605; TV</a></li>
          <li><a href="http://novaramedia.com/category/fm/">&#8605; FM</a></li>
          <li><a href="<?php echo home_url(); ?>">&#8605; Wire</a>
        </ul>
      </div>
      <div class="col col12 u-align-right">
        <a href="<?php echo home_url(); ?>">
          <svg id="logo-wire" xmlns="http://www.w3.org/2000/svg" width="2858.697" height="1209.221" viewBox="0 0 2858.697 1209.221"><path fill="#fff" d="M514.796.057h-176.109v285.642l-171.388-285.642h-167.299v582.533h176.117v-252.48l172.148 252.48h156.953l172.149-252.48v252.48h176.116v-582.533h-167.292l-171.395 285.641v-285.641m-379.321 198.297v343.593h-94.832v-501.248h103.649l235.037 391.732v-391.732h94.825v501.248h-104.404l-234.275-343.593zM677.145 626.221v418.09299999999996l-78.918-132.043-171.082-285.64v.018-.018l-171.583 285.64-79.417 132.043v-418.09299999999996h-176v583h245.623l172.377-252.741v-.259h17v.259l172.571 252.741h245.429v-583zM1029.598 1209.164v-1209.107h176.115v1209.107h-176.115zM2859.145 176.221v-176h-605v1209h605v-176h-429v-303h340v-176h-340v-378z"/><g fill="#fff"><path d="M1672.145 730.221"/><path d="M1672.145 730.221h-114v479h-176v-1209h470.348c204.777 0 255.683 192.302 255.683 326.653 0 297.412-80.829 379.188-230.173 398.001l.128.201 288.015 484.145h-209.219l-284.901-479m-113.881-176h236.369c80.868 0 138.253-51.65 138.253-192.637 0-134.351-56.085-185.363-138.253-185.363h-236.369v378z"/></g></svg>
        </a>
      </div>
    </div>
  </div>
</header>

<section id="drawer-main" class="drawer font-white background-black">
  <div class="container">
    <div class="row">
      <div class="col col8">
        <ul class="u-inline-list">
          <li><a href="http://novaramedia.com/about">About</a></li>
          <li><a href="http://support.novaramedia.com">Support Us</a></li>
          <li><a class="u-pointer js-toggle-tags">Tags</a></li>
        </ul>
      </div>
       <div class="col col8">
        <ul class="u-inline-list">
          <li><a href="https://twitter.com/novaramedia">Twitter</a></li>
          <li><a href="https://www.facebook.com/pages/NovaraMedia/404716342902872">Facebook</a></li>
          <li><a href="https://www.youtube.com/channel/UCOzMAa6IhV6uwYQATYG_2kg">YouTube</a></li>
          <li><a href="http://novaramedia.tumblr.com/">Tumblr</a></li>
        </ul>
      </div>
       <div class="col col8">
        <ul class="u-inline-list">
          <li><a href="http://podcast.novaramedia.com" target="_blank">Podcast</a></li>
          <li><a href="itpc://feeds.feedburner.com/NovaraMediaPodcast">Subscribe in iTunes</a></li>
          <li><a href="<?php bloginfo('rss2_url'); ?>">RSS</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section id="drawer-tags" class="drawer font-white background-gray">
  <div class="container">
    <div class="row">
      <div id="tags" class="col col24">
  		  <?php wp_tag_cloud('smallest=11&largest=14&orderby=count&order=RAND&number=0'); ?>
      </div>
    </div>
  </div>
</section>