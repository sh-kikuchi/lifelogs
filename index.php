<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_header() ?>

<body>
  <!-- Navigation -->
  <?php get_template_part('includes/header'); ?>

  <!-- Page Header -->
  <header class="masthead">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1><?php bloginfo('name') ?></h1>
            <span class="subheading"><?php bloginfo('description') ?></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php $img = get_eyeCatch_with_default(); ?>
            <div class="post-preview">
              <a href="<?php the_permalink(); ?>">
                <h2 class="post-title">
                  <?php the_title(); ?>

                </h2>
                <h5 class="post-subtitle">
                  <?php the_excerpt() ?>
                </h5>
              </a>
              <p class="post-meta">Posted by
                <?php the_author() ?> /
                <?php the_time(get_option('date_format')) ?>
              </p>
            </div>
            <hr>
          <?php endwhile; ?>
        <?php else : ?>
          <p>記事が見つかりませんでした</p>
        <?php endif; ?>
        <!-- Pager -->
        <div class="clearfix">
          <?php
          $link = get_previous_posts_link('&larr;新しい記事');
          if ($link) {
            $link = str_replace('<a', '<a class="btn btn-primary float-left"', $link);
            echo $link;
          }
          ?>
          <?php
          $link = get_next_posts_link('古い記事 &rarr;');
          if ($link) {
            $link = str_replace('<a', '<a class="btn btn-primary float-right"', $link);
            echo $link;
          }
          ?>
        </div>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>

  <hr>

  <?php get_template_part('includes/footer'); ?>
  <?php get_footer(); ?>
</body>

</html>
