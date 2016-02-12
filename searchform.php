<div class="widget search">
    <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
        <input type="text" name="s" id="s" class="form-control search_box" autocomplete="off" placeholder="Search Here"
               value="<?php echo get_search_query(); ?>">
    </form>
</div><!--/.search-->
