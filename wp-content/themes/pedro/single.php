<?php get_header(); ?>

<main id="content">
  <section class="blog-banner text-center">
    <div class="container">
      <div class="col-xs-12">
        <div class="breadcrumb-content">
          <div class="breadcrumb-text-wrapper">
            <h2 class="page-name">
              <?php echo esc_html__('Blog', 'pedro') ?>
            </h2>
            <ul class="breadcrumb-list">
              <li>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php echo esc_html__('Home', 'pedro'); ?>
                </a>
              </li>
              <li>
                <?php echo esc_html__('Blog Details', 'pedro'); ?>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============== Details ======================= -->
  <div class="blog-details">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-8 col-sm-12">
          <!-- Start Single Post article -->
          <article class="single-post single-blog-post">
            <div class="single-post-images">
              <img class="img-fluid" src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>">
            </div>
            <div class="single-post-content">
              <div class="single-post-header">
                <h2 class="blog-post-title"><?php the_title(); ?></h2>
                <ul class="meta-info">
                  <li><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                      <?php echo esc_html__('Admin', 'pedro') ?>
                    </a></li>
                  <li><a href="#"><?php echo get_the_date('M d, Y'); ?></a></li>
                  <li><a href="#"><?php the_category(', '); ?></a></li>
                </ul>
              </div>

              <div class="discription"><?php the_content(); ?></div>


              <!-- ✅ Post Tags Section -->
              <footer class="post-footer">
                <?php the_tags('<p class="post-tags">Tags: ', ', ', '</p>'); ?>
              </footer>

            </div>
          </article>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
          <?php get_sidebar() ?>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>