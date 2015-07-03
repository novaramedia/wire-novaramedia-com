<?php get_header(); ?>

  <!-- main content -->

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
      $meta = get_post_meta($post->ID);
      $backgroundThumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-background');
      $permalink = get_permalink();
  ?>

  <article <?php post_class(); ?>id="post-<?php the_ID(); ?>">

    <header id="single-post-header" class="u-align-center font-white" style="background-image: url(<?php echo $backgroundThumb[0]; ?>)">
      <div class="holder">
         <div id="single-post-header-inner" class="held">
          <div class="container">
            <div class="row">
              <div class="col col4 u-force-width"></div>
              <div class="col col16">
                <h1><?php the_title(); ?></h1>

                <h3 class="post-author">by
<?php
if (!empty($meta['_cmb_author'][0]) && !empty($meta['_cmb_author_twitter'][0])) {
  echo '<a target="_blank" href="https://www.twitter.com/';
  echo $meta['_cmb_author_twitter'][0];
  echo '">';
  echo $meta['_cmb_author'][0];
  echo '</a>';
 } else if (!empty($meta['_cmb_author'][0])) {
  echo $meta['_cmb_author'][0];
} else {
  echo 'Novara Reporters';
}
?></h3>
              </div>
            </div>
            <div id="single-post-social" class="row">
              <div class="col col2 single-post-social u-force-width"></div>
              <div class="col col4 single-post-social">
                <a href="http://www.reddit.com/submit?url=<?php the_permalink() ?>"><img src="http://www.reddit.com/static/spreddit7.gif" alt="submit to reddit" border="0" /></a>
              </div>
              <div class="col col4 single-post-social single-post-social-mobile">
                <fb:like href="<?php the_permalink() ?>" send="true" layout="button_count" width="450" show_faces="false"></fb:like>
              </div>
              <div class="col col4 single-post-social single-post-social-mobile">
                <a href="https://twitter.com/share" data-url="<?php the_permalink() ?>" data-via="novaramedia" data-related="novaramedia" class="twitter-share-button" data-dnt="true" data-count="horizontal">Tweet</a>
              </div>
              <div class="col col4 single-post-social">
                <a href="https://getpocket.com/save" class="pocket-btn" data-lang="en" data-save-url="<?php the_permalink() ?>" data-pocket-count="none" data-pocket-align="left" >Pocket</a>
              </div>
              <div class="col col4 single-post-social">
                <iframe border="0" scrolling="no" width="78" height="17" allowtransparency="true" frameborder="0" style="margin-bottom: -3px; z-index: 1338; border: 0px; background-color: transparent; overflow: hidden;" src="http://www.instapaper.com/e2?url=<?php the_permalink() ?>&amp;title=<?php the_title(); ?>"></iframe>
              </div>
            </div>
          </div>
         </div>
      </div>
    </header>

    <div class="container">
      <div class="row">
        <div class="col col4 recent-posts">
          <ul class="list-posts">
            <li><a href="<?php echo home_url(); ?>"><h4 class="underline">Latest on Novara Wire</h4></a></li>
            <?php
            $latests = get_posts('posts_per_page=6');
            foreach ($latests as $post) {
            ?>
              <li>
                <a href="<?php the_permalink() ?>">
                  <?php the_post_thumbnail('col4-169'); ?>
                </a>
                <a href="<?php the_permalink() ?>">
                  <h4>&#8605; <?php the_title(); ?></h4>
                </a>
              </li>
            <?php
            }
            ?>
          </ul>
        </div>
        <div class="col col2 u-force-width"></div>
        <div class="col col12">
          <div id="single-post-copy" class="font-serif font-readable js-post">
            <?php the_content(); ?>
          </div>
          <footer id="single-post-footer" class="u-cf">
            <div class="single-post-footer-social">
              <fb:like href="<?php echo $permalink; ?>" send="true" layout="button_count" width="450" show_faces="false"></fb:like>
            </div>
            <div class="single-post-footer-social">
              <a href="https://twitter.com/share" data-url="<?php echo $permalink; ?>" data-via="novaramedia" data-related="novaramedia" class="twitter-share-button" data-dnt="true" data-count="horizontal">Tweet</a>
            </div>

            <div class="single-post-footer-meta post-date font-smaller font-mono">
              <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-sa/4.0/80x15.png" /></a>
              <br/>This <span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/Text" rel="dct:type">work</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://wire.novaramedia.com" property="cc:attributionName" rel="cc:attributionURL">Novara Wire</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0 International License</a>.
              <br/>
              Published <?php the_time('jS F Y'); ?>
            </div>
            <div class="single-post-footer-meta post-follow">
<?php
if (!empty($meta['_cmb_author_twitter'][0])) {
?>
                <a href="https://twitter.com/<?php echo $meta['_cmb_author_twitter'][0]; ?>" class="twitter-follow-button" data-show-count="false" data-size="large" data-dnt="true">Follow @<?php echo $meta['_cmb_author_twitter'][0]; ?></a>
<?php
} else {
?>
                <a href="https://twitter.com/novaramedia" class="twitter-follow-button" data-show-count="false" data-size="large" data-dnt="true">Follow @novaramedia</a>
<?php
}
?>
            </div>
          </footer>
        </div>
        <div class="col col2 u-force-width"></div>
        <div class="col col4 js-post-related related-posts">
<?php
if (!empty($meta['_cmb_novara_related_1'][0])) {
  echo '<ul class="list-posts">';
  echo '<li class="title"><h4 class="underline"><a href="http://novaramedia.com">Related on Novara Media</a></h4></li>';
  $novara1 = json_decode(file_get_contents('http://novaramedia.com/api/single/?permalink=' . $meta['_cmb_novara_related_1'][0]));
  echo '<li>';
  echo '  <a href="' . $novara1->permalink . '">';
  echo '    <img src="' . $novara1->thumb_medium . '">';
  echo '  </a>';
  echo '  <a href="' . $novara1->permalink . '">';
  echo '    <h4>&#8605; ' . $novara1->title . '</h4>';
  echo '  </a>';
  echo '</li>';

  if (!empty($meta['_cmb_novara_related_2'][0])) {
    $novara2 = json_decode(file_get_contents('http://novaramedia.com/api/single/?permalink=' . $meta['_cmb_novara_related_2'][0]));
    echo '<li>';
    echo '  <a href="' . $novara2->permalink . '">';
    echo '    <img src="' . $novara2->thumb_medium . '">';
    echo '  </a>';
    echo '  <a href="' . $novara2->permalink . '">';
    echo '    <h4>&#8605; ' . $novara2->title . '</h4>';
    echo '  </a>';
    echo '</li>';
  }

  if (!empty($meta['_cmb_novara_related_3'][0])) {
    $novara3 = json_decode(file_get_contents('http://novaramedia.com/api/single/?permalink=' . $meta['_cmb_novara_related_3'][0]));
    echo '<li>';
    echo '  <a href="' . $novara3->permalink . '">';
    echo '    <img src="' . $novara3->thumb_medium . '">';
    echo '  </a>';
    echo '  <a href="' . $novara3->permalink . '">';
    echo '    <h4>&#8605; ' . $novara3->title . '</h4>';
    echo '  </a>';
    echo '</li>';
  }

echo '</ul>';
}

$orig_post = $post;
global $post;
$tags = wp_get_post_tags($post->ID);
if ($tags) {
$tag_ids = array();
foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
$args=array(
  'tag__in' => $tag_ids,
  'post__not_in' => array($post->ID),
  'posts_per_page'=>5
);
$my_query = new wp_query( $args );
if( $my_query->have_posts() ) {
  echo '<ul class="list-posts">';
  echo '<li class="title"><h4 class="underline"><a href="' . home_url() . '">Related on Novara Wire</a></h4></li>';
  while( $my_query->have_posts() ) {
    $my_query->the_post();
    $meta = get_post_meta($post->ID);
?>
    <li id="related-post-<?php the_ID(); ?>">
        <a href="<?php the_permalink() ?>">
          <?php the_post_thumbnail('col4-169'); ?>
        </a>
        <a href="<?php the_permalink() ?>">
          <h4>&#8605; <?php echo $post->post_title; ?></h4>
        </a>
    </li>
<?php
    }
    echo '</ul>';
  }
}
$post = $orig_post;
wp_reset_query();
?>
        </div>
      </div>
    </div>

  </article>

  <?php endwhile; else: ?>
    <div class="container">
      <div class="row">
        <div class="col col6">
          Latest
        </div>
        <div class="col col12">
          <?php _e('Sorry, no posts matched your criteria :{'); ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <!-- end main-content -->

<?php get_footer(); ?>