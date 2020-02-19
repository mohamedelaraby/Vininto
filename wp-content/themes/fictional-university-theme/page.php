<?php

// Header content 
get_header();

//  Display all posts
while (have_posts()) {
    the_post(); ?>

    <!--  -->
    <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg'); ?>);"></div>
        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title"><?php the_title(); ?> </h1>
            <div class="page-banner__intro">
                <p>DON`T FORGET TO REPLACE ME LATER</p>
            </div>
        </div>
    </div>

    <div class="container container--narrow page-section">

        <?php

        // parent`s id
        $the_parent = wp_get_post_parent_id(get_the_ID());
        // If page has parent then show the title bar else hide it
        if ($the_parent) {
        ?>
            <div class="metabox metabox--position-up metabox--with-home-link">
                <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($the_parent); ?> "><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($the_parent); ?></a>
                    <span class="metabox__main"><?php echo the_title(); ?> </span></p>
            </div>
        <?php  }

        ?>


        <!-- Display side bar menu if the page is parent or child or child has child pages -->
        <?php
        // $hasChild :- Get any pages of this id
        $hasChild = get_pages(array(
            'child_of' => get_the_ID(),
        ));

        if ($the_parent || $hasChild) { ?>

            <!-- links side panels -->
            <div class="page-links">
                <h2 class="page-links__title"><a href="<?php echo get_permalink($the_parent); ?>"><?php echo get_the_title($the_parent); ?></a></h2>
                <ul class="min-list">
                    <!-- Show every avaiable page -->
                    <?php

                    // IF page is parent page, then parent`s id, else get the child page id
                    if ($the_parent) {
                        $findChildOf = $the_parent;
                    } else {
                        $findChildOf = get_the_ID();
                    }

                    wp_list_pages(array(
                        'title_li' => NULL,
                        'child_of' => $findChildOf,
                        'sort_column' => 'menu_order',
                    )); ?>
                </ul>
            </div>

            <!-- [ Page content ] -->
            <div class="generic-content">
                <?php the_content(); ?>
            </div>

    </div>
<?php } ?>


<?php }

// Footer content
get_footer();
?>