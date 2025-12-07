<?php
// This is the main fallback template file required by WordPress.
get_header(); 
?>

<div class="container mx-auto px-4 py-12">
    <h1 class="text-3xl font-bold mb-6"><?php the_title(); ?></h1>
    <div class="prose max-w-none">
        <?php
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        else :
            echo '<p>No content found.</p>';
        endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>