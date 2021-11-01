<?php get_header(); ?>

<main>
      <div class="container">
        <div class="col-md-12">
          <div class="blog-post  blog-post--fullwidth  blog-post--page">
            <div class="blog-post__image">
              <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="About Me">
            </div>
            <div class="blog-post-wrapper">
              <div class="blog-post__title">
                <h1>About Me</h1>
              </div>

              <?php
                $page = get_page_by_title( 'about' );
                $content = apply_filters('the_content', $page->post_content); 
                echo $content;
              ?>

              <div class="blog-post__footer">
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
            </div>
          </div>
        </div>
      </div>
    </main>

<?php get_footer(); ?>