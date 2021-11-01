<footer class="page-footer">
      <!-- <div class="container  page-footer__top">
        <div class="col-sm-5  col-md-5">
          <div class="page-footer__top-about">
            <h4>BiitLab</h4>
            <p>Suspendisse lobortis commodo ullamcorper. Duis pretium convallis odio non varius.</p>
            <p>Phone: +123.456.789</p>
            <p>Email: <a href="mailto:mail@danielanri.com">mail@westa.com</a></p>
          </div>
        </div>
        <div class="col-sm-3  col-md-3">
          <h4>Categories</h4>
          <nav class="page-footer__nav">
            <ul class="page-footer__nav-items">
              <li class="page-footer__nav-item">
                <a href="category.html">Lifestyle</a>
              </li>
              <li class="page-footer__nav-item">
                <a href="category.html">Journey</a>
              </li>
              <li class="page-footer__nav-item">
                <a href="category.html">Inspiration</a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="col-sm-4  col-md-4">
          <h4>Recent Posts</h4>
          <div class="page-footer__recent-post">
            <div class="page-footer__recent-post-info">
              <div class="page-footer__recent-post-content">
                <a href="single-post.html">Why Glass Had Been So Popular Till Now?</a>
              </div>
              <div class="page-footer__recent-post-date">
                <span>November 16, 2018</span>
              </div>
            </div>
          </div>
          <div class="page-footer__recent-post">
            <div class="page-footer__recent-post-info">
              <div class="page-footer__recent-post-content">
                <a href="single-post.html">Fall In Love With Cat</a>
              </div>
              <div class="page-footer__recent-post-date">
                <span>November 14, 2018</span>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <div class="container  page-footer__bottom">
        <div class="col-sm-8  col-md-8  page-footer__bottom-copyright">
          <p>2021 © BiitLab Engineering</p>
        </div>
        <div class="col-sm-4  col-md-4  page-footer__bottom-social">
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
          <a href="#">
            <svg>
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-flickr"></use>
            </svg>
          </a>
          <a href="#">
            <svg>
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-youtube"></use>
            </svg>
          </a>
        </div>
      </div>
    </footer>
    <div class="search-popup">
      <svg class="search-popup__close">
        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-close"></use>
      </svg>
      <div class="search-popup__container  container">
        <?php get_search_form(); ?> 
      </div>
	</div>
    <div class="content-overlay"></div>

           
    <?php
        wp_footer();
    ?> 
  </body>
</html>