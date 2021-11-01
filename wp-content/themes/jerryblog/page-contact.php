<?php get_header(); ?>

<main>
      <div class="container">
        <div class="col-md-12  col-lg-12">
          <div class="blog-post  blog-post--fullwidth  blog-post--page">
            <div class="blog-post__image">
              <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="Contact">
            </div>
            <div class="blog-post-wrapper">
              <div class="blog-post__title">
                  <h1>Contact</h1>
              </div>
              <div class="blog-post__content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#">Suspendisse lobortis</a> commodo ullamcorper. Duis pretium convallis odio non varius. Nulla quis lorem metus. Fusce velit magna, ultricies quis elit sit amet, lacinia porttitor magna. Nulla scelerisque, ex quis imperdiet finibus, elit massa dictum arcu, et fermentum orci felis in ipsum. Suspendisse rutrum nec ipsum id feugiat. Nunc eu lacinia turpis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam dapibus cursus justo.</p>
              </div>
              <div class="blog-post__contact">
                <?php
                  $page = get_page_by_title( 'contact' );
                  $content = apply_filters('the_content', $page->post_content); 
                  echo $content;
                ?>
              </div>
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