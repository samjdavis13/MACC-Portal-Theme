 <footer id='footer-container'>
      <div class='row'>
        <div class='large-12 column'>

          <div class='large-4 column hide-for-medium hide-for-small'>
            <img src="<?php bloginfo('template_directory'); ?>/img/logo-reverse.png">
          </div>

          <div class='large-4 column'>
            <ul class='symbol'>
              <li><a href="#">circlefacebook</a></li>
              <li><a href="#">circletwitterbird</a></li>
              <li><a href="#">circleemail</a></li>
            </ul>
          </div>

          <div class='large-4 column hide-for-medium hide-for-small'>
            <form method="get" action="http://www.google.com/search">
              <input type='search' name="q" size="25" style="color:#808080;"
maxlength="255" placeholder="Google Search">
              <input type="submit" value="Go!" />
            </form>
          </div>

        </div>
      </div>
    </footer>
    
    <footer id='very-footer'>
      <div class='row'>
        <div class='large-12 column'>
          <p>&copy; 2014 Mount Annan Christian College. All Rights Reserved.</p>
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
