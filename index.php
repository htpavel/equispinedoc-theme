<?php get_header(); ?>

<main class="container mx-auto px-4">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1 class="text-4xl font-bold my-6"><?php the_title(); ?></h1>
        <div class="prose">
            <?php the_content(); ?>
        </div>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>