<form method="get" action="<?php echo home_url(); ?>">
    <label for="search">Search in <?php echo home_url( '/' ); ?></label>
    <input type="text" size="32" placeholder="Search" name="s" value="<?php echo get_search_query(); ?>">
</form>