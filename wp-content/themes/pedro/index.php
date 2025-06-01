<?php get_header(); ?>

<main id="content">
    <?php if (have_posts()) : ?>
        <header>
            <h1><?php single_post_title(); ?></h1>
        </header>

        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class(); ?>>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="discription">
                    <?php the_excerpt(); ?>
                </div>
            </article>
        <?php endwhile; ?>

        <div class="pagination">
            <?php the_posts_navigation(); ?>
        </div>

    <?php else : ?>
        <h2><?php echo esc_html__('No posts found.', 'pedro') ?></h2>
    <?php endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>


<div class="discription"><?php the_content(); ?></div>