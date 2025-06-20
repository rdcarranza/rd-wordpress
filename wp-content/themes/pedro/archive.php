<?php
/*
Template Name: Archives
*/
get_header(); ?>

<main id="content">
<div class="container">
    <div class="row">
        <!-- Main Content - 8 Columns -->
        <div class="col-md-8">
            <div id="content" role="main">

                <?php the_post(); ?>
                <h1 class="entry-title"><?php the_title(); ?></h1>

                <?php get_search_form(); ?>

                <h2>Archives by Month:</h2>
                <ul>
                    <?php wp_get_archives('type=monthly'); ?>
                </ul>

                <h2>Archives by Subject:</h2>
                <ul>
                    <?php wp_list_categories(); ?>
                </ul>

            </div><!-- #content -->
        </div>

        <!-- Sidebar - 4 Columns -->
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
</main>
<?php get_footer(); ?>
