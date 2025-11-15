<?php get_headers(); ?>

    <article class="content px- py-5 p-md-5">
        <?php 
        if ( have_posts()){
            while( have_posts()){
            the_post();
            get_template_part('template-part/content','archive');
        }
    }
    ?>
    </article>

<?php get_footer(); ?>