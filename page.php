<?php get_header(); ?>

<main class="py-24 bg-white">
    <div class="max-w-4xl mx-auto px-6">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <h1 class="text-4xl md:text-5xl font-bold text-[#2C3E50] mb-8 leading-tight">
                <?php the_title(); ?>
            </h1>

            <?php if (has_post_thumbnail()) : ?>
                <div class="mb-8 rounded-3xl overflow-hidden">
                    <?php the_post_thumbnail('full', ['class' => 'w-full h-auto']); ?>
                </div>
            <?php endif; ?>

            <div class="prose prose-lg text-[#4A5568] leading-relaxed">
                <?php the_content(); ?>
            </div>

        <?php endwhile; endif; ?>
    </div>
</main>

<?php get_footer(); ?>