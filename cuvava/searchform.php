<form method="get" action="<?php echo home_url("/"); ?>" class="search_form">
    <input type="search" placeholder="Dispensaties, doctors, products..." name="s" value="<?php the_search_query(); ?>" />
    <input type="hidden" value="post" name="post_type" />
</form>