<?php get_header() ?>

<main id="content">
    <section class="blog-section py-5" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12">
                    <div class="row latest-post-row">
                        <?php
                        $paged = get_query_var('paged', 1);
                        // Define the query arguments
                        $args = array(
                            'post_type' => 'post', // Fetch blog posts
                            'paged'          => $paged, // Enable pagination
                        );

                        // Create a new WP_Query
                        $query = new WP_Query($args);

                        // Loop through the posts
                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post(); ?>
                                <div class="col-md-12 mb-3">
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
                                                    <em><a href="#"><?php the_author(); ?></a></em> <?php echo esc_html__('at', 'pedro') ?> <?php echo get_the_date(); ?>
                                                </div>
                                                <div class="text">
                                                    <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                                                </div>

                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <!--/.col-md-6-->
                            <?php endwhile;
                            wp_reset_postdata(); // Reset post data
                            ?>
                            <div class="pagination mt-3">
                                <?php
                                the_posts_pagination(array(
                                    'mid_size'  => 2,
                                    'prev_text' => __('« Previous', 'pedro'),
                                    'next_text' => __('Next »', 'pedro'),
                                ));
                                ?>
                            </div>

                        <?php else : ?>
                            <p>
                                <?php echo esc_html__('No posts found.', 'pedro') ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <?php get_sidebar() ?>
                </div>
            </div>
        </div>
        <!--/.container-->
    </section>

</main>

<?php get_footer() ?>