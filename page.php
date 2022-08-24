<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<!--head-->
<?php get_header(); ?>

<body <?php body_class(); ?>>
  <!-- Navigation -->
  <?php get_template_part('includes/header'); ?>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <!--eyeCatch -->
      <?php $img = get_eyeCatch_with_default(); ?>
      <!-- Page Header -->
      <header class="masthead" style="background-image: url(<?php echo $img[0]; ?>">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <div class="page-heading">
                <h1><?php the_title(); ?></h1>
                <span class="subheading">This is what I do.</span>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- Main Content -->
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <h1><?php the_content(); ?></h1>
          </div>
        </div>
      </div>

      <hr>

    <?php endwhile; ?>
  <?php endif; ?>

  <!--footer-->
  <?php get_template_part('includes/footer'); ?>
  <?php get_footer(); ?>

</body>

</html>
