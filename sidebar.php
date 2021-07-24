<div class="col-md-3 col-sm-4 col-xs-12">
    <!-- <div class="search-widget">
        <h4>SEARCH BLOG</h4>
        <form action="#">
            <input placeholder="Search Here" type="text">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div> -->
    <div class="post-widget">
        <h4>BÀI VIẾT MỚI NHẤT</h4>
        <ul class="list-unstyled">
           <!-- Get post News Query -->
           <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=5&post_type=post'); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <li>
                    <a href="<?php the_permalink();?>"><?php the_title()?></a>
                </li>
            <?php endwhile; wp_reset_postdata(); ?>
            <!-- Get post News Query -->
        </ul>
    </div>
    <div class="cat-widget">
        <h4>DANH MỤC</h4>
        <ul class="list-unstyled">
          <?php
          $args = array(
              'child_of'  => 0,
              'orderby'    => 'id',
          );
          $categories = get_categories( $args );
          foreach ( $categories as $category ) { ?>
          <li>
            <a href="<?php echo get_term_link($category->slug, 'category');?>">
                <?php echo $category->name ; ?>
                <span><?php echo $category->count; ?></span>
              </a>
          </li>
          <?php } ?>
        </ul>
    </div>
    <div class="tag-widget">
        <h4>TAGS</h4>
        <ul class="list-unstyled list-inline">
            <?php echo get_the_tag_list('<li>', '</li><li>', '</li>'); ?>
            <!-- <li><a href="">HTML</a></li>
            <li><a href="">CSS</a></li>
            <li><a href="">JQuery</a></li>
            <li><a href="">Photoshop</a></li>
            <li><a href="">PHP</a></li>
            <li><a href="">Wordpress</a></li>
            <li><a href="">Bootstrap</a></li>
            <li><a href="">Design</a></li>
            <li><a href="">Development</a></li> -->
        </ul>
        
    </div>
</div><!-- /.col -->