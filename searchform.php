<form role="search" id="searchform" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <div>
        <label class="screen-reader-text" for="s">search for:</label>
        <input type="text" value="<?php echo get_search_query();?>" name="s" id="s" >
            <input type="submit" value="Search" id="searchsubmit" >



</div>
</form>