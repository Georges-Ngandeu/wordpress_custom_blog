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
                  <a href="#">Fall In Love With Cat</a>
                </span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lobortis commodo ullamcorper.</p>
                <span class="featured-image__content-link">
                  <a href="#">Read More</a>
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
                  <a href="#">All You Need To Know About Forest</a>
                </span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lobortis commodo ullamcorper.</p>
                <span class="featured-image__content-link">
                  <a href="#">Read More</a>
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
                  <a href="#">Skills That You Can Learn From Book</a>
                </span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lobortis commodo ullamcorper.</p>
                <span class="featured-image__content-link">
                  <a href="#">Read More</a>
                </span>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </section>
    <main>
    <div class="container">
        <div class="col-md-9  container--list">

            <?php
                $args = array(
                    'post_type' => 'post', 
                    'posts_per_page' => 4 
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
                  <span><a href="#"><?php echo get_the_category_list(', '); ?></a></span>
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

            wp_reset_postdata();
            
          ?>
        </div>
        <div class="col-md-3  sidebar  sidebar--right">
          <div class="sidebar-widget">
            <h3>About Me</h3>
            <div class="sidebar-widget__about-me">
              <div class="sidebar-widget__about-me-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-me.jpg" alt="About Me">
              </div>
              <p>Duis pretium convallis odio non varius. Nulla quis lorem metus.</p>
              <span class="sidebar-widget__about-me-link">
                <a href="#">Read More</a>
              </span>
            </div>
          </div>
          <div class="sidebar-widget">
            <h3>Follow Me</h3>
            <div class="sidebar-widget__follow-me">
              <div class="sidebar-widget__follow-me-icons">
                <a href="#">
                  <svg>
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-facebook"></use>
                  </svg>
                </a>
                <a href="#">
                  <svg>
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-twitter"></use>
                  </svg>
                </a>
                <a href="#">
                  <svg>
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-google"></use>
                  </svg>
                </a>
                <a href="#">
                  <svg>
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-pinterest"></use>
                  </svg>
                </a>
                <a href="#">
                  <svg>
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-instagram"></use>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="sidebar-widget">
            <div class="sidebar-widget__banner">
              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner.jpg" alt="Banner"></a>
            </div>
          </div>
          <!-- <div class="sidebar-widget">
            <h3>Popular Posts</h3>
            <div class="sidebar-widget__popular">
              <div class="sidebar-widget__popular-item">
                <div class="sidebar-widget__popular-item-image">
                  <a href="single-post.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sidebar1.jpg" alt="7 Quick Tips For Coffee"></a>
                </div>
                <div class="sidebar-widget__popular-item-info">
                  <div class="sidebar-widget__popular-item-date">
                    <span>November 15, 2018</span>
                  </div>
                  <div class="sidebar-widget__popular-item-content">
                    <a href="single-post.html">7 Quick Tips For Coffee</a>
                  </div>
                </div>
              </div>
              <div class="sidebar-widget__popular-item">
                <div class="sidebar-widget__popular-item-image">
                  <a href="single-post.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sidebar2.jpg" alt="The Shocking Revelation of Books"></a>
                </div>
                <div class="sidebar-widget__popular-item-info">
                  <div class="sidebar-widget__popular-item-date">
                    <span>November 11, 2018</span>
                  </div>
                  <div class="sidebar-widget__popular-item-content">
                    <a href="single-post.html">The Shocking Revelation of Books</a>
                  </div>
                </div>
              </div>
              <div class="sidebar-widget__popular-item">
                <div class="sidebar-widget__popular-item-image">
                  <a href="single-post.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sidebar3.jpg" alt="How Pen Can Ease Your Pain"></a>
                </div>
                <div class="sidebar-widget__popular-item-info">
                  <div class="sidebar-widget__popular-item-date">
                    <span>October 27, 2018</span>
                  </div>
                  <div class="sidebar-widget__popular-item-content">
                    <a href="single-post.html">How Pen Can Ease Your Pain</a>
                  </div>
                </div>
              </div>
              <div class="sidebar-widget__popular-item">
                <div class="sidebar-widget__popular-item-image">
                  <a href="single-post.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sidebar4.jpg" alt="Why Is Guitar So Famous?"></a>
                </div>
                <div class="sidebar-widget__popular-item-info">
                  <div class="sidebar-widget__popular-item-date">
                    <span>October 15, 2018</span>
                  </div>
                  <div class="sidebar-widget__popular-item-content">
                    <a href="single-post.html">Why Is Guitar So Famous?</a>
                  </div>
                </div>
              </div>
              <div class="sidebar-widget__popular-item">
                <div class="sidebar-widget__popular-item-image">
                  <a href="single-post.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sidebar5.jpg" alt="How To Get People To Like Cafe"></a>
                </div>
                <div class="sidebar-widget__popular-item-info">
                  <div class="sidebar-widget__popular-item-date">
                    <span>October 9, 2018</span>
                  </div>
                  <div class="sidebar-widget__popular-item-content">
                    <a href="single-post.html">How To Get People To Like Cafe</a>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- <div class="sidebar-widget">
            <h3>Tag Cloud</h3>
            <div class="sidebar-widget__tag-cloud">
              <a href="#">Travel</a>
              <a href="#">Music</a>
              <a href="#">Arts</a>
              <a href="#">Creative</a>
              <a href="#">Fashion</a>
            </div>
          </div> -->
          <!-- <div class="sidebar-widget">
            <h3>Instagram</h3>
            <div class="sidebar-widget__instagram">
              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram1.jpg" alt="Instagram"></a>
              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram2.jpg" alt="Instagram"></a>
              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram3.jpg" alt="Instagram"></a>
              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram4.jpg" alt="Instagram"></a>
            </div>
          </div> -->
          <div class="sidebar-widget">
            <h3>Subscribe</h3>
            <div class="sidebar-widget__subscribe">
              <p>Follow my latest news</p>
              <form action="#">
                <input type="text" placeholder="Your email">
                <input class="sidebar-widget__subscribe-submit" type="submit" value="Submit">
              </form>
            </div>
          </div>
          <!-- <div class="sidebar-widget">
            <div class="sidebar-slider">
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
                    <span class="featured-image__content-link">
                      <a href="single-post.html">Read More</a>
                    </span>
                  </div>
                  <a class="featured-image__overlay-link" href="single-post.html"></a>
                </div>
              </div>
              <div>
                <div class="featured-image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/img0.jpg);">
                  <div class="featured-image__bg"></div>
                  <div class="featured-image__content">
                    <span class="featured-image__content-category">
                      <a href="#">Inspiration</a>
                    </span>
                    <span class="featured-image__content-title">
                      <a href="single-post.html">Why Glass Had Been So Popular Till Now?</a>
                    </span>
                    <span class="featured-image__content-link">
                      <a href="single-post.html">Read More</a>
                    </span>
                  </div>
                  <a class="featured-image__overlay-link" href="single-post.html"></a>
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
                    <span class="featured-image__content-link">
                      <a href="single-post.html">Read More</a>
                    </span>
                  </div>
                  <a class="featured-image__overlay-link" href="single-post.html"></a>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </main>
    
    <?php get_footer(); ?>