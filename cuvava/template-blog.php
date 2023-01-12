<?php
/**
 *  Template name: Blog
 */

  get_header(); ?>

  <section style="max-width: 1170px;">

        <?php 
        $args = array(
          'post_type' => 'post',
          'post_per_page' => '2'
        );
        
        $blog_posts = new WP_Query($args);
          while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
          <div class="blog__content">
            <div class="blog__text">
                <span class="item">
                    “
                </span>
                <h3 class="blog__text-title">
                    <? the_title(); ?>
                </h3>
                <p class="blog__text-subtitle">
                    <? the_excerpt(); ?>
                </p>
                <a href="<? the_permalink() ?>" style="text-decoration: none;">
                    <div class="blog__button">
                        read more now
                    </div>
                </a>
            </div>
            <div class="blog__img-column">
            <?php $attr = array('class' => 'blog__img'); echo get_the_post_thumbnail(get_the_ID(), 'post-thumbnail', $attr); ?>
                <div class="img__title">
                    Blog Name
                </div>
                <div class="img__subtitle">
                    Subtitle blog
                </div>
            </div>
          </div>
        <?php endwhile;

        wp_reset_postdata();
        ?>

    </section>