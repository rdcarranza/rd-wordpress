<?php
get_header();
?>

<main id="content">
    <section class="blog-section category-page" id="blog">
        <div class="container">
            <div class="section-title wow fadeInDown">
                <h2>
                    <?php
                    // Display the current category name dynamically
                    if (is_category()) {
                        single_cat_title(); // Outputs the name of the current category
                    }
                    ?>
                </h2>
            </div><!-- /.section-title -->

            <div class="row latest-post-row">
                <?php
                // Get the current category slug dynamically
                $current_category = get_queried_object();

                // Define the query arguments
                $args = array(
                    'post_type' => 'post', // Fetch blog posts
                    'posts_per_page' => 2, // Number of posts to display
                    'category_name' => $current_category->slug, // Use the current category slug
                );

                // Create a new WP_Query
                $query = new WP_Query($args);

                // Loop through the posts
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post(); ?>
                        <div class="col-md-6">
                            <article class="single-post-item">
                                <figure class="image">
                                    <?php if (has_post_thumbnail()) { ?>
                                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>" />
                                    <?php } ?>
                                </figure>
                                <div class="content-box">
                                    <div class="text-content">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <div class="info">
                                            <?php echo esc_html__('By', 'pedro') ?>
                                            <em><a href="#"><?php the_author(); ?></a></em>
                                            <?php echo esc_html__('at', 'pedro') ?>
                                            <?php echo get_the_date(); ?>
                                        </div>
                                        <div class="text">
                                            <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                                        </div>
                                        <div class="link-btn">
                                            <a href="<?php the_permalink(); ?>" class="primary-btn hvr-bounce-to-left">
                                                <span class="btn-text">
                                                    <?php echo esc_html__('MORE', 'pedro') ?>
                                                </span>
                                                <span class="icon">
                                                    <i class="f-icon fa fa-long-arrow-right fa-lg"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div><!-- /.col-md-6 -->
                    <?php endwhile;
                    wp_reset_postdata(); // Reset post data
                else : ?>
                    <p><?php echo esc_html__('No posts found in this category.', 'pedro') ?></p>
                <?php endif; ?>
            </div><!-- /.latest-post-row -->
        </div><!-- /.container -->
    </section>
    <main>
        <?php get_footer(); ?>