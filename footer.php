<footer id="footer" class="font-white background-black">
  <div class="container">
    <div class="row">
      <div class="col col18">
        <ul class="u-inline-list font-smaller">
          <li><a href="http://novaramedia.com/category/tv/">Novara TV</a></li>
          <li><a href="http://novaramedia.com/category/fm/">Novara FM</a></li>
          <li><a href="<?php echo home_url(); ?>">Novara Wire</a></li>
          <li><a href="https://twitter.com/novaramedia">Twitter</a></li>
          <li><a href="https://www.facebook.com/pages/NovaraMedia/404716342902872">Facebook</a></li>
          <li><a href="https://www.youtube.com/channel/UCOzMAa6IhV6uwYQATYG_2kg">YouTube</a></li>
          <li><a href="http://novaramedia.tumblr.com/">Tumblr</a></li>
          <li><a href="http://podcast.novaramedia.com">Podcast</a></li>
          <li><a href="itpc://feeds.feedburner.com/NovaraMediaPodcast">Subscribe in iTunes</a></li>
          <li><a href="http://fm.novaramedia.com">ArchiveFM</a></li>
          <li><a href="<?php bloginfo('rss2_url'); ?>">RSS</a></li>
       </ul>
      </div>
    </div>
  </div>
</footer>

<section id="scripts">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-2.1.1.min.js"><\/script>')</script>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-37044100-6', 'auto');
    ga('send', 'pageview');
  </script>

<?php
if (is_single()) {
?>
  <div id="fb-root"></div>
	<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=305272962896290";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

	<script type="text/javascript">!function(d,i){if(!d.getElementById(i)){var j=d.createElement("script");j.id=i;j.src="https://widgets.getpocket.com/v1/j/btn.js?v=1";var w=d.getElementById(i);d.body.appendChild(j);}}(document,"pocket-btn-js");</script>
<?php
}

wp_footer();
?>
</section>
</body>
</html>
