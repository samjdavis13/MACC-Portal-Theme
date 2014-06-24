 <footer id='footer-container'>
      <div class='row'>
        <div class='large-12 column'>

          <div class='large-4 large-offset-2 columns hide-for-medium hide-for-small'>
            <img src="<?php bloginfo('template_directory'); ?>/img/logo-reverse.png">
          </div>

          <div class='large-4 columns end'>
            <ul class='symbol'>
              <li><a href="https://www.facebook.com/pages/Mount-Annan-Christian-College/89294472495?ref=br_tf" target="_blank">circlefacebook</a></li>
              <li><a href="https://twitter.com/search?q=%23maccchat&src=typd" target="_blank">circletwitterbird</a></li>
              <li><a href="mailto:admin@macc.nsw.edu.au" target="_blank">circleemail</a></li>
            </ul>
          </div>

        </div>
      </div>
    </footer>
    
    <footer id='very-footer'>
      <div class='row'>
        <div class='large-12 column'>
          <p>&copy; <?php echo date("Y"); ?> Mount Annan Christian College. All Rights Reserved.</p>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>

    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
