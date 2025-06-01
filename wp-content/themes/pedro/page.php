<?php get_header(); ?>

<main id="content">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-12">
                <?php
                // Check if there are posts to display
                if (have_posts()) {
                    while (have_posts()) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header class="entry-header">
                                <h1 class="entry-title"><?php the_title(); ?></h1>
                            </header>
                            <div class="entry-content">
                                <div class="description"><?php the_content(); ?></div>
                                <?php wp_link_pages(); // Displays pagination for multi-page posts 
                                ?>
                            </div>
                        </article>
                <?php endwhile;
                } ?>

                <?php
                // Display comments section if comments are open or there are comments
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
                ?>

            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
    </div>
</main>