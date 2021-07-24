
  <a href="<?php the_permalink(); ?>">
    <div class="blog-content">
      <a href="<?php the_permalink()?>">
        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full');?>" alt="<?php the_permalink()?>" class="img-responsive">
      </a>
      <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
      <?php the_excerpt() ?>
      <ul class="list-unstyled list-inline">
          <li><i class="fa fa-calendar"></i><?php the_date() ?></li>
          <li class="pull-right"><i class="fa fa-eye"></i>
              Lượt xem: <?php echo getpostviews(get_the_id()); ?>
          </li>
      </ul>
      <div class="blog-readmore text-center">
          <a href="<?php the_permalink()?>">Xem bài viết</a>
      </div>
    </div>
  </a>
