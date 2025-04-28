<?php get_header(); ?>

<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
<<<<<<< HEAD
                    <?php the_archive_title('<h1 class="archive-title">', '</h1>');?>
                    <?php the_archive_description('<div class="archive-description">', '</div>')?>
=======
                    <?php  the_archive_title('<h1> class="archive-title">',' </h1>')  ?>
                    <?php  the_archive_description('<div> class="archive_description">', '</div>')     ?>
>>>>>>> 7a26ce4b71e1b33cbd32958dc50a54b5563f8a6e
                    <div class="container">
                        <div class="blog-items">
                            <?php 
                                if( have_posts() ):
                                    while( have_posts() ) : the_post();
                                    ?>
                                        <article>
                                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array( 275, 275 ) ); ?></a>
                                            <div class="meta-info">
                                                <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                                                <p>Categories: <?php the_category( ' ' ); ?></p>
                                                <p>Tags: <?php the_tags( '', ', '); ?></p>
                                            </div>
                                            <?php the_excerpt(); ?>
                                        </article>
                                    <?php
<<<<<<< HEAD
                                    endwhile;?>
                                    <div class="wpdevs-pagination">
                                        <div class="pages new">
                                            <?php previous_posts_link("<< Newer posts");?>
                                        </div>
                                        <div class="pages old">
                                            <?php next_posts_link("Older posts >>"); ?>
                                        </div>
                                    </div>
                                    <?php
=======
                                    endwhile;
>>>>>>> 7a26ce4b71e1b33cbd32958dc50a54b5563f8a6e
                                else: ?>
                                    <p>Nothing yet to be displayed!</p>
                            <?php endif; ?>                                
                        </div>
                        <?php get_sidebar(); ?>
                    </div>
                </main>
            </div>
        </div>
<<<<<<< HEAD
<?php get_footer(); ?>
=======
<?php get_footer(); ?>0
>>>>>>> 7a26ce4b71e1b33cbd32958dc50a54b5563f8a6e
