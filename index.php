<?php get_header()?>
        <!-- Section Heading-->
        <section class="section-heading">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <p>BLOG</p>
                    </div>
                    <div class="col-xs-6 text-right">
                        <ul class="list-unstyled list-inline">
                            <li><a href="">Home</a></li>
                            <li>/Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section Heading -->

        <!-- Blog -->
        <section class="blog">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="blog-top text-center">
                            <h2>BÀI VIẾT MỚI NHẤT</h2>
                        </div>
                    </div><!-- /.col -->


	                  <?php if (have_posts()) : ?>
                      <?php while (have_posts()) : the_post(); ?>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <?php get_template_part('itemPost')?>
                      </div><!-- /.col -->
                    <?php endwhile; else : ?>
                      <p></p>
                    <?php endif; ?>

                   
                    <div class="col-xs-12">
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
            </div>
        </section>
        <!-- End Blog -->
<?php get_footer(); ?>