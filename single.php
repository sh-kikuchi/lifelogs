<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<!--head-->
<?php get_header(); ?>

<body <?php body_class(); ?>>
  <!-- Navigation -->
  <?php get_template_part('includes/header'); ?>

  <!-- content -->
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <!--eyeCatch -->
      <?php $img = get_eyeCatch_with_default(); ?>

      <!-- content Header -->
      <header class="masthead" style="background-image: url(<?php echo $img[0]; ?>">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <div class="post-heading">
                <h1><?php the_title(); ?></h1>
                <span class="meta">Posted by
                  <a href="#"><?php the_author(); ?></a>
                  <?php the_date(); ?></span>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- content Body -->
      <article>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <?php the_post_thumbnail(array(300, 300)); ?>
              <?php the_content() ?>
            </div>
          </div>
        </div>
      </article>
      <hr>
    <?php endwhile; ?>
  <?php endif; ?>

  <!--footer-->
  <?php get_template_part('includes/footer'); ?>
  <?php get_footer(); ?>

</body>

</html>
