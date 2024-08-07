<?php
/**
 * Template Name: Page Add Property.
 */
defined('ABSPATH') || exit;
acf_form_head();
get_header();
?>


<div id="primary" class="content-area">
  <div id="content" class="site-content" role="main">
    <?php while (have_posts()) : the_post(); ?>

    <!--  1 check if I get today post or if I checked get other dates -->
    <!--  2 Check if I got that date in the db -->
    <!--  3  fetch data and save it temporal hacer split de la data en post si vehiculos o propiedades -->
    <?php endwhile; ?>
  </div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>



<script>
document.addEventListener('DOMContentLoaded', function() {
  const button = document.getElementById('fetchButton');
  const result = document.getElementById('result');

  button.addEventListener('click', () => startFetchbyDate(button));

  function startFetchbyDate(button) {
    button.disabled = true; // Disable the button while fetching

    fetch('<?php echo admin_url('admin-ajax.php'); ?>?action=my_custom_fetch')
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          result.innerHTML = `<pre>${data.data}</pre>`;
        } else {
          result.innerHTML = 'An error occurred: ' + data.data;
        }
        button.disabled = false; // Re-enable the button after fetching
      })
      .catch(error => {
        console.error('Error:', error);
        result.innerHTML = 'An error occurred while fetching data.';
        button.disabled = false; // Re-enable the button in case of error
      });
  }
});
</script>
