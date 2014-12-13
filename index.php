<?php
  get_header();
  $novaraPosts = json_decode(file_get_contents('http://novaramedia.com/api/all/'));
?>

	<!-- main content -->

  <section id="main-content" class="container">

    <!-- main posts loop -->
    <section id="posts" class="row masonry">

    <?php
      $i=0;
      if ( have_posts() ) : while ( have_posts() ) : the_post();
        $meta = get_post_meta($post->ID);
    ?>

      <article <?php post_class('col col12 underline'); ?> id="post-<?php the_ID(); ?>">

        <a href="<?php the_permalink() ?>">
          <header class="post-header font-white">
            <?php the_post_thumbnail('col12-index'); ?>

            <div class="post-title-index">

              <h2><?php the_title(); ?></h2>

              <h3 class="post-author">by
              <?php if (!empty($meta['_cmb_author'][0])) {
                echo $meta['_cmb_author'][0];
      				} else {
                echo 'Novara Reporters';
      				} ?></h3>

            </div>
          </header>
        </a>

        <?php
          if (!empty($meta['_cmb_short_desc'][0])) {
  				  echo $meta['_cmb_short_desc'][0];
  		    }
		    ?>

      </article>

      <?php
        if ($i === 3 && is_home() && !empty($novaraPosts)) { ?>

        </section>
  </section>

  <section class="home-novaramedia font-white background-black">
    <div class="container">
      <div class="row">
        <div class="col col24">
          <h2 class="novara-posts-title"><a href="http://novaramedia.com/">latest on novaramedia.com</a></h2>
        </div>
      </div>
      <div class="row">
        <?php
          for ($p = 0; $p <4; $p++) { ?>

          <div class="col col6 home-novaramedia-post">
            <a href="<?php echo $novaraPosts->posts[$p]->permalink; ?>">
              <img src="<?php echo $novaraPosts->posts[$p]->thumb_medium; ?>" />
              <h3 class="novara-post-title"><span class="font-uppercase"><?php echo $novaraPosts->posts[$p]->channel; ?>:</span> <?php echo $novaraPosts->posts[$p]->title; ?></h3>
            </a>
          </div>

        <?php
          }
        ?>
      </div>
    </div>
  </section>

  <section class="container">
    <section class="row masonry home-posts">

    <?php
      } else if ($i === 7 && is_home() && !empty($novaraPosts)) { ?>

        </section>
  </section>

  <section class="home-novaramedia font-white background-black">
    <div class="container">
      <div class="row">
        <div class="col col24">
          <h2 class="novara-posts-title"><a href="http://novaramedia.com/">latest on novaramedia.com</a></h2>
        </div>
      </div>
      <div class="row">
        <?php
          for ($p = 4; $p <8; $p++) { ?>

          <div class="col col6 home-novaramedia-post">
            <a href="<?php echo $novaraPosts->posts[$p]->permalink; ?>">
              <img src="<?php echo $novaraPosts->posts[$p]->thumb_medium; ?>" />
              <h3 class="novara-post-title"><span class="font-uppercase"><?php echo $novaraPosts->posts[$p]->channel; ?>:</span> <?php echo $novaraPosts->posts[$p]->title; ?></h3>
            </a>
          </div>

        <?php
          }
        ?>
      </div>
    </div>
  </section>

  <section class="container">
    <section class="row masonry home-posts">

    <?php
      }
      $i++;
      endwhile; else: ?>
      <p><?php _e('Sorry, no posts matched your criteria :{'); ?></p>
    <?php endif; ?>

    <!-- end posts -->
    </section>

    <?php if (get_next_posts_link() || get_previous_posts_link()) { ?>
    <!-- post pagination -->
    <nav id="pagination" class="row">
      <div class="col col24 u-align-center">
        <h3><?php
              $previous = get_previous_posts_link('Newer');
              $next = get_next_posts_link('Older');
              if ($previous) {
                echo '<span class="pagination-button">' . $previous . '</span>';
              }
              if ($previous && $next) {
                echo ' &mdash; ';
              }
              if ($next) {
                echo '<span class="pagination-button">' . $next . '</span>';
              }
        ?></h3>
      </div>
    </nav>
    <?php } ?>

  <!-- end main-content -->

  </section>

<?php get_footer(); ?>