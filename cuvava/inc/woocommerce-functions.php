<?php 
/**
 * WooCommerce Support
 */

if ( in_array ('woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ))) {

  function cuvava_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
  }
  add_action( 'after_setup_theme', 'cuvava_add_woocommerce_support' );

// Turning off breadcrumbs on Shop

  add_action('template_redirect', 'remove_shop_breadcrumbs' );
  function remove_shop_breadcrumbs(){

  if (is_shop())
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20, 0);
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30, 0);
    remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10, 0);

}

  remove_action( 'woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title', 10 );
  add_action('woocommerce_shop_loop_item_title', 'soChangeProductsTitle', 10 );
  function soChangeProductsTitle() {
    echo '<h3 class="card__name ' . esc_attr( apply_filters( 'woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title' ) ) . '">' . get_the_title() . '</h3>';
  }
  add_action('woocommerce_after_shop_loop_item_title', 'beforePriceText', 9);
  function beforePriceText() {
    echo '<span class="card__text" onclick="return false">Starting at</span>';
  }
  add_action('woocommerce_shop_loop_item_title', 'beforeShopLoopItemTitle', 9);
  function beforeShopLoopItemTitle($term_object) {
    global $post;
    $terms = get_the_terms( $post->ID, 'product_cat' );
    $nterms = get_the_terms( $post->ID, 'product_tag'  );
    foreach ($terms  as $term  ) {
        $product_cat_id = $term->term_id;
        $product_cat_name = $term->name;
        break;
    }
    echo '<span class="card__type" onclick="return false">' . $product_cat_name . '</span>';
  }

  add_action( 'pre_get_posts', 'cuvava_remove_products_from_shop_page' );
  function cuvava_remove_products_from_shop_page( $q ) {
    if ( ! $q->is_main_query() ) return;
    if ( ! $q->is_post_type_archive() ) return;
    if ( ! is_admin() && is_shop() ) {
        $q->set( 'post__in', array(0) );
    }
    remove_action( 'pre_get_posts', 'cuvava_remove_products_from_shop_page' );
  }

  remove_action( 'woocommerce_no_products_found', 'wc_no_products_found' );

  add_action( 'woocommerce_no_products_found', 'cuvava_show_4_products_per_category' );

  function cuvava_show_4_products_per_category() {
    $args = array(
        'parent' => 0,
        'hide_empty' => true,
        'taxonomy' => 'product_cat',
        'fields' => 'slugs',
    );
    $categories = get_categories( $args );
    foreach ( $categories as $category_slug ) {
        $term_object = get_term_by( 'slug', $category_slug , 'product_cat' );
        echo '<h2 class="products__title">' . $term_object->name . '</h2>';
        echo do_shortcode( '[products limit="4" columns="4" category="' . $category_slug . '"]' );
        // echo '<p><a href="' . get_term_link( $category_slug, 'product_cat' ) . '">View all ' . $term_object->name . ' products &rarr;</a>';
    }
  }

  remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5, 0);
  add_action( 'woocommerce_after_shop_loop_item_title', 'custom_stars', 5 );
function custom_stars() {
    global $product;
    if ( get_option( 'woocommerce_enable_review_rating' ) === 'no' || $product->post->comment_status === 'closed' ) {
        return;
    }
    else {
        $rating_count = $product->get_rating_count();
        $review_count = $product->get_review_count();
        $average      = 4.8;

        if ( $rating_count === 0 || $rating_count ) : ?>
            <div class="woocommerce-product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                <span class="num-rating"><? echo $average;?></span>
                <div class="star-rating" title="<?php printf( __( 'Rated %s out of 5', 'woocommerce' ), $average ); ?>">
                    <span style="width:<?php echo ( ( $average / 5 ) * 100 ); ?>%">
                        <strong itemprop="ratingValue" class="rating"><?php echo esc_html( $average ); ?></strong> <?php printf( __( 'out of %s5%s', 'woocommerce' ), '<span itemprop="bestRating">', '</span>' ); ?>
                        <?php printf( _n( 'based on %s customer rating', 'based on %s customer ratings', $rating_count, 'woocommerce' ), '<span itemprop="ratingCount" class="rating">' . $rating_count . '</span>' ); ?>
                    </span>
                </div>
            </div>
        <?php endif;
    }
}
	
	remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
	function custom_woocommerce_template_loop_product_link_open() {
	  ob_start();
		woocommerce_template_loop_add_to_cart();
	  $custom_woocommerce_template_loop_product_link_open = ob_get_clean();

	  preg_match('/<a.*?>/', $custom_woocommerce_template_loop_product_link_open, $link_open_arr);

	  if($link_open_arr && $link_open_arr[0]) {
		$custom_woocommerce_template_loop_product_link_open = str_replace('class="', 'class="woocommerce-LoopProduct-link woocommerce-loop-product__link', $link_open_arr[0]);
		echo $custom_woocommerce_template_loop_product_link_open;
	  }
	}
	add_action('woocommerce_before_shop_loop_item', 'custom_woocommerce_template_loop_product_link_open', 10);
}