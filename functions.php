function add_password_protection_script() {
  if (post_password_required()) {
      ?>
      <script>
      document.addEventListener('DOMContentLoaded', function() {
          var mainArea = document.getElementById('main-content');
          if (mainArea) {
              // Clear the existing content
              mainArea.innerHTML = '';

              // Create the password form HTML
              var formHtml = `<?php echo  get_the_password_form(); ?>
              `;

              // Add the form HTML to the main content area
              mainArea.innerHTML = formHtml;
          }
      });
      </script>
      <?php
  }
}
add_action('wp_footer', 'add_password_protection_script');