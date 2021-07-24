<?php get_header(); ?>
<!-- Section Heading-->
        <section class="section-heading">
            <div class="container">
                <div class="row wrap-breadcrumb">
                    <div class="col-xs-6 wrap-breadcrumb-child">
                        <p>BLOG DETAILS</p>
                    </div>
                    <div class="col-xs-6 text-right wrap-breadcrumb-child">
                        <ul class="list-unstyled list-inline">
                            <li><a href="">Home</a></li>
                            <li>/Blog Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section Heading -->

        <!-- Blog Details -->
        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <div class="details-content">


                        	<div class="content-top">
                            <?php if (have_posts()) : ?>
                              <?php while (have_posts()) : the_post(); ?>
                              <?php setpostview(get_the_id()); ?>
                              <a href="<?php the_permalink()?>">
                                <?php echo get_the_post_thumbnail( get_the_id(), 'full', array( 'class' =>'img-responsive') ); ?>
                              </a>
                                <!-- <img src="<?php bloginfo('template_directory') ?>/images/blog-details.jpg" alt="" class="img-responsive"> -->
                                <h4><?php the_title()?></h4>
                                <ul class="list-unstyled list-inline">
                                  <li><i class="fa fa-user"></i><a href=""><?php the_author_posts_link() ?></a></li>
                                  <li><i class="fa fa-calendar"></i><?php the_date() ?></li>
                                  <li><i class="fa fa-eye"></i>Lượt xem: <?php echo getpostviews(get_the_id()); ?></li>
                                </ul>
                                <p><?php the_content() ?></p>
                            <?php endwhile; else : ?>
                            <p></p>
                            <?php endif; ?>
                            
                          </div>
                          





                          
                        	<div class="blog-share">
                        		<ul class="list-unstyled list-inline">
															<div class="fb-share-button" data-href="https://tranvanhuyhoang.com/" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ftranvanhuyhoang.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                        		</ul>
                          </div>
                          
                        	<div class="comment-sec">
                        		<h4>Góp ý của bạn</h4>
                        	
                        	</div>


													<div class="fb-comments" data-href="https://tranvanhuyhoang.com/" data-width="" data-numposts="" width="100%"></div>

                        </div>
                    </div><!-- /.col -->
                    <?php get_sidebar(); ?>
                  </div>
            </div>
        </section>
        <!-- End Blog Details -->
<?php get_footer() ?>