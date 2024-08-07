<?php
  // LOGO
  $custom_logo_id = get_theme_mod('custom_logo');
  $image = wp_get_attachment_image_src($custom_logo_id, 'full');
?>

<nav class="bg-red-600 p-4">
  <div class="container mx-auto flex items-center justify-between">
    <a class="text-white font-bold text-xl" href="/">
      <?php if ($image) : ?>
      <img src="<?php echo $image[0]; ?>" alt="logo" class="h-20 w-auto">
      <?php else : ?>
      <span>Logo</span>
      <?php endif; ?>
    </a>
    <button class="text-white focus:outline-none" aria-controls="navbar-top" aria-expanded="false"
      aria-label="Toggle navigation" id="navbar-toggler">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
      </svg>
    </button>

  </div>

</nav>
<div class="hidden w-full md:flex md:items-center md:w-auto" id="navbar-top">
  <?php get_template_part('inc/template-parts/content', 'menuPrimary'); ?>
</div>
<script>
document.getElementById('navbar-toggler').addEventListener('click', function() {
  var nav = document.getElementById('navbar-top');
  if (nav.classList.contains('hidden')) {
    nav.classList.remove('hidden');
  } else {
    nav.classList.add('hidden');
  }
});
</script>
