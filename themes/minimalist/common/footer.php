        </article>

        <footer role="contentinfo">

            <nav id="bottom-nav">
                <?php echo public_nav_main(); ?>
            </nav>

            <div id="footer-text">
                <?php echo get_theme_option('Footer Text'); ?>
                <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
                    <p><?php echo $copyright; ?></p>
                <?php endif; ?>
                <p><?php echo __('Proudly powered by <a href="http://omeka.org">Omeka</a>.'); ?></p>
            </div>

            <?php fire_plugin_hook('public_footer', array('view'=>$this)); ?>

        </footer>

    </div><!-- end wrap -->

    <script>
    
    jQuery(document).ready(function() {
        
        Omeka.showAdvancedForm();
        Omeka.skipNav();
        Omeka.megaMenu('#top-nav');
    });
    </script>

    <!-- Google Analytics -->
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-99861125-1', 'auto');
	  ga('send', 'pageview');
    </script>

</body>
</html>
