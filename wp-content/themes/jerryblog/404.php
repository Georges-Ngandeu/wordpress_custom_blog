<?php get_header(); ?>

<main>
      <div class="container">
        <div class="col-md-12  col-lg-12">
          <div class="blog-post  blog-post--fullwidth  blog-post--page">
            <div class="blog-post-wrapper  blog-post-wrapper--404">
              <div class="blog-post__title">
                <h1>404 Page Not Found</h1>
              </div>
              <div class="blog-post__content  blog-post__content--404">
                <p>The requested page could not be found or it is currently unavailable. Please <a href="<?php echo site_url(''); ?>">click here</a> to go back to our home page or use the search form below.</p>
                <form action="index.html">
                  <input type="text" placeholder="Type search text here...">
                  <input class="sidebar-widget__subscribe-submit" type="submit" value="Search">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

<?php get_footer(); ?>