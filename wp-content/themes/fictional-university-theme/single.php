<?php

// Header content
get_header();

while (have_posts()) {
    the_post(); ?>

    <h2><?php the_title(); ?> </h2>
    <?php the_content();  ?>



<?php }

// Footer content
get_footer();
?>