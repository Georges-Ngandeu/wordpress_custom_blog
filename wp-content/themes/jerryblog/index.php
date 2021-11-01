<?php get_header(); ?>
    
    <section class="container  top-slider">
      <div class="col-md-12">
        <div class="bxslider">
          <div>
            <div class="featured-image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/img1.jpg);">
              <div class="featured-image__bg"></div>
              <div class="featured-image__content">
                <span class="featured-image__content-category">
                  <a href="#">Lifestyle</a>
                </span>
                <span class="featured-image__content-title">
                  <a href="single-post.html">Fall In Love With Cat</a>
                </span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lobortis commodo ullamcorper.</p>
                <span class="featured-image__content-link">
                  <a href="single-post.html">Read More</a>
                </span>
              </div>  
            </div>
          </div>
          <div>
            <div class="featured-image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/img2.jpg);">
              <div class="featured-image__bg"></div>
              <div class="featured-image__content">
                <span class="featured-image__content-category">
                  <a href="#">Journey</a>
                </span>
                <span class="featured-image__content-title">
                  <a href="single-post.html">All You Need To Know About Forest</a>
                </span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lobortis commodo ullamcorper.</p>
                <span class="featured-image__content-link">
                  <a href="single-post.html">Read More</a>
                </span>
              </div> 
            </div>
          </div>
          <div>
            <div class="featured-image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/img3.jpg);">
              <div class="featured-image__bg"></div>
              <div class="featured-image__content">
                <span class="featured-image__content-category">
                  <a href="#">Lifestyle</a>
                </span>
                <span class="featured-image__content-title">
                  <a href="single-post.html">Skills That You Can Learn From Book</a>
                </span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lobortis commodo ullamcorper.</p>
                <span class="featured-image__content-link">
                  <a href="single-post.html">Read More</a>
                </span>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </section>
    <main>
    <div class="container">
        <div class="col-md-12  container--list">

            <?php
                $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
                $args = array(
                    'post_type' => 'post', 
                    'posts_per_page' => 4,
                    'paged' => $paged
                );
                
                $blogposts = new WP_Query($args);

                if($blogposts->have_posts()){
                    while($blogposts->have_posts()){
                        $blogposts->the_post();
            ?>

          <div class="blog-post  blog-post--list">
            <div class="row">
              <div class="col-sm-6  col-md-6  blog-post__image">
                <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Why Glass Had Been So Popular Till Now?"></a>
              </div>
              <div class="col-sm-6  col-md-6  post__list-content">
                <div class="blog-post__info  blog-post__info--date">
                  <span><?php echo get_the_date(); ?></span>
                  <span><a href="#">Inspiration</a></span>
                  <span><a href="#">
                  <?php
                    $comments_number = get_comments_number();
                    if($comments_number != 0){
                      echo $comments_number.' Comments';
                    } else {
                      echo '0 Comment';
                    }
                  ?>
                  </a></span>
                </div>
                <div class="blog-post__title">
                  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>
                <div class="blog-post__content">
                  <p><?php echo wp_trim_words(get_the_excerpt(), 30 ); ?></p>
                </div>
                <div class="blog-post__footer">
                  <a class="blog-post__footer-link" href="<?php the_permalink(); ?>">Read more</a>
                </div>
              </div>
            </div>
          </div>

          <?php

                }
            }

            $big = 999999999;
          
            echo '
            <nav class="blog-pagination">
              <ul class="blog-pagination__items">
                <li class="blog-pagination__item">'.
                  paginate_links( array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format' => '?paged=%#%',
                    'current' => max( 1, get_query_var('paged') ),
                    'total' => $blogposts->max_num_pages
                  ) );
                '</li>
              </ul>
          </nav>';

          wp_reset_postdata();
            
          ?>
         
        </div>
      </div>
    </main>
    
    <?php get_footer(); ?>