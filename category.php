<?php get_header(); ?>
    <!-- About -->
    <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-xs-12 col-md-12 ">
                    <div class="archive-content">
                        <div class="about-h2-work">
                            <h2><?php the_archive_title()?></h2>
                        </div>
                        <div class="row wrap-archive">
                            <?php if (have_posts()) : ?>
                                <?php while (have_posts()) : the_post(); ?>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <?php get_template_part('itemPost')?>
                                </div><!-- /.col -->
                                <?php endwhile; else : ?>
                                <p></p>
                            <?php endif; ?>
                        </div>

                        <div class="row">
                        <div class="portfolio-pagi text-center"><!-- pagination -->

                            <?php if(paginate_links()!='') {?>
                                <ul class="list-unstyled list-inline">
                                    <?php
                                    global $wp_query;
                                    $big = 999999999;
                                    echo paginate_links( array(
                                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                        'format' => '?paged=%#%',
                                        'prev_text'    => __('<i class="fa fa-angle-left"></i>'),
                                        'next_text'    => __('<i class="fa fa-angle-right"></i>'),
                                        'current' => max( 1, get_query_var('paged') ),
                                        'total' => $wp_query->max_num_pages
                                        ) );
                                    ?>
                                </ul>
                            <?php } ?>

                        </div><!-- /.pagination -->
                    </div><!-- /.col -->
                        
                    </div>
                </div><!-- /.col -->
            </div>
        </div><!-- /.container -->
    </section>
    <!-- End About -->
<?php get_footer() ?>