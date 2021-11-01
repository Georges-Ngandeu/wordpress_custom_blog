<?php 

get_header();
if(have_posts()){
  while(have_posts()){
    the_post();
  }

?>

<div class="container">
        <div class="col-md-9">
          <div class="blog-post">
            <div class="blog-post-wrapper">
              <div class="blog-post__info  blog-post__info--top">
                <span><a href="#"><?php echo get_the_category_list(', '); ?></a></span>
              </div>
              <div class="blog-post__title">
                <h1><a href="#"><?php the_title(); ?></a></h1>
              </div>
              <div class="blog-post__info">
                <span>By <a href="#"><?php the_author(); ?></a></span>
                <span><?php echo get_the_date(); ?></span>
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
            </div>
            <div class="blog-post__image">
              <a href="#">
                <img src=<?php the_post_thumbnail(array(980, 550)); ?>
              </a>
            </div>
            <div class="blog-post-wrapper">
              <div class="blog-post__content">
                <?php the_content(); ?>
              </div>
              <div class="blog-post__footer">
                <div class="blog-post__footer-tags">
                  <h3>Tags:</h3>
                  <div class="blog-post__footer-tags-list">
                    <a href="#">Arts</a>
                    <a href="#">Creative</a>
                  </div>
                </div>
                <div class="blog-post__footer-social">
                  <span>Share:</span>
                  <div class="blog-post__footer-social-icons">
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
                  </div>
                </div>
              </div>
              <div class="blog-post__author">
                <div class="blog-post__author-avatar">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/author.jpg" alt="Author">
                </div>
                <div class="blog-post__author-info">
                  <h5>Written by <?php the_author(); ?></h5>
                  <p>Massa est vehicula mauris dignissim vulputate turpis massa, eget sociis nonummy tristique at suscipit quis natoque dolor penatibus praesent odio nisi erat. Consequat eget cubilia. Mi elementum augue. Nisi sociis.</p>
                  <div class="blog-post__author-info-social">
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
              <!-- <div class="blog-post__nav">
                <a class="blog-post__nav-previous" href="#">
                  <span class="blog-post__nav-previous-link">Previous Post</span>
                  <span>Why Glass Had Been So Popular Till Now?</span>
                </a>
                <a class="blog-post__nav-next" href="#">
                  <span class="blog-post__nav-next-link">Next Post</span>
                  <span>All You Need To Know About Forest</span>
                </a>
              </div> -->
              <!-- <div class="blog-post__related">
                <div class="blog-post__related-item">
                  <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img0.jpg" alt="Why Glass Had Been So Popular Till Now?">
                    <h6>Why Glass Had Been So Popular Till Now?</h6>
                  </a>
                  <span>November 16, 2018</span>
                </div>
                <div class="blog-post__related-item">
                  <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img2.jpg" alt="All You Need To Know About Forest">
                    <h6>All You Need To Know About Forest</h6>
                  </a>
                  <span>November 10, 2018</span>
                </div>
                <div class="blog-post__related-item">
                  <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img3.jpg" alt="Skills That You Can Learn From Book">
                    <h6>Skills That You Can Learn From Book</h6>
                  </a>
                  <span>November 7, 2018</span>
                </div>
              </div> -->
              <div class="blog-post__comments">
                <h5>
                  <?php
                    $comments_number = get_comments_number();
                    if($comments_number != 0){
                      echo $comments_number.' Comments';
                    } else {
                      echo '0 Comments';
                    }
                  ?>
                </h5>
                <ul class="blog-post__comments-list">
                      <?php
                        $comments = get_comments(
                          array(
                            'post_id' => $post->ID,
                            'status' => 'approved'
                          )
                        );
                        
                        wp_list_comments(
                          array(
                            'per_page' => 5,
                          ), $comment
                        );
                      ?>
                    <!-- <div class="blog-post__comments-item-body">
                      <div class="blog-post__comments-item-avatar">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/comment1.jpg" alt="Comment Author">
                      </div>
                      <div class="blog-post__comments-item-right">
                        <div class="blog-post__comments-item-reply">
                          <a href="#">Reply</a>
                        </div>
                        <div class="blog-post__comments-item-info">
                          <div class="blog-post__comments-item-info-author">
                            <span>
                              <a href="#">Matt Kian</a>
                            </span>
                          </div>
                          <div class="blog-post__comments-item-info-date">
                            <span>
                              <a href="#">November 25, 2018 at 2:24 pm</a>
                            </span>
                          </div>
                        </div>
                        <div class="blog-post__comments-item-post">
                          <p>Dignissim pharetra consequat condimentum scelerisque. Vestibulum sagittis scelerisque montes enim Cursus dui lectus cras mattis Laoreet aliquam varius ut adipiscing interdum lacus risus mattis urna semper cras hendrerit, morbi nonummy.</p>
                        </div>
                      </div>
                    </div> -->
                </ul>
                <div class="blog-post__comments-respond">
                  <?php
                    $fields = array(
                      'author' => sprintf(
                          '<p class="blog-post__comments-respond-author">%s %s</p>',
                          sprintf(
                              '<label for="author">%s%s</label>',
                              __( 'Name' ),
                              ' <span class="required">*</span>'
                          ),
                          sprintf(
                              '<input id="author" name="author" type="text" value="%s" size="30" maxlength="245"%s required/>',
                              esc_attr( $commenter['comment_author'] ),
                              $html_req
                          )
                      ),
                      'email'  => sprintf(
                          '<p class="blog-post__comments-respond-email">%s %s</p>',
                          sprintf(
                              '<label for="email-form">%s%s</label>',
                              __( 'Email' ),
                              ' <span class="required">*</span>'
                          ),
                          sprintf(
                              '<input id="email" name="email" %s value="%s" size="30" maxlength="100" aria-describedby="email-notes"%s required/>',
                              ( $html5 ? 'type="email"' : 'type="text"' ),
                              esc_attr( $commenter['comment_author_email'] ),
                              $html_req
                          )
                      ),
                      'url'    => sprintf(
                          '<p class="blog-post__comments-respond-url">%s %s</p>',
                          sprintf(
                              '<label for="url">%s</label>',
                              __( 'Website' )
                          ),
                          sprintf(
                              '<input id="url" name="url" %s value="%s" size="30" maxlength="200" required/>',
                              ( $html5 ? 'type="url"' : 'type="text"' ),
                              esc_attr( $commenter['comment_author_url'] )
                          )
                      ),
                  );

                  $args = array(
                    'title_reply' => __( 'Share your tougths' ),
                    'fields' => $fields,
                    'comment_field' => sprintf(
                      '<p class="comment-form-comment">%s %s</p>',
                      sprintf(
                          '<label for="comment">%s</label>',
                          _x( 'Comment', 'noun' )
                      ),
                      '<textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea>'
                    )
                  );

                  comment_form($args);

                  ?>
                </div>
              </div>    
            </div>
          </div>
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
                <a href="about.html">Read More</a>
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
              <form action="index.html">
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

<?php
  } 
?>

<?php get_footer(); ?>