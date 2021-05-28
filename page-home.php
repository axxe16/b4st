<?php /* Template Name: Homepage */ ?>
<?php
  get_header(); 
  b4st_main_before();
?>

<main id="site-main" class="mt-5">

  <?php get_template_part('loops/page-content'); ?>

</main>

<?php 
  b4st_main_after();

  get_footer(); 
?>
