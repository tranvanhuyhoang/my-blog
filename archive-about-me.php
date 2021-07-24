<?php get_header(); ?>
    <!-- About -->
    <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-xs-12">
                    <div class="about-content">
                        <div class="about-h2-work">
                            <h2>Giới thiệu</h2>
                        </div>
                        <h4><?php the_title(); ?></h4>
                        <?php if (have_posts()) : ?>
                              <?php while (have_posts()) : the_post(); ?>
                              <?php setpostview(get_the_id()); ?>
                                <p><?php the_content() ?></p>
                            <?php endwhile; else : ?>
                            <?php endif; ?>
                        <!-- <a data-scroll href="#skills"><i class="fa fa-eye" aria-hidden="true"></i>View My Works</a> -->
                        <ul class="list-unstyled list-inline">
                            <li><a href="https://www.facebook.com/hoangvanhuytran/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <!-- <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa fa-dribbble" aria-hidden="true"></i></a></li> -->
                        </ul>
                    </div>
                </div><!-- /.col -->
                <div class="col-sm-5 col-xs-12">
                    <div class="about-img">
                        <?php echo get_the_post_thumbnail( get_the_id(), 'full', array( 'class' =>'img-responsive') ); ?>
                        <!-- <img src="<?php bloginfo('template_directory') ?>/images/about-2.jpg" class="img-responsive" alt=""> -->
                    </div>
                </div><!-- /.col -->
            </div>
        </div><!-- /.container -->
    </section>
    <!-- End About -->
<?php get_footer() ?>