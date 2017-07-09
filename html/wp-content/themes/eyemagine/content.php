<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Eyemagine
 * @since Twenty Eyemagine 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><!-- beginning article -->
  <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-post">
		  <?php _e( 'Featured post', 'eyemagine' ); ?>
		</div>
  <?php endif; ?>
  <header>
      <div class="title">

        <?php if ( is_single() ) : ?>
          <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php else : ?>
          <h1 class="entry-title">
            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
          </h1>
        <?php endif; // is_single() ?>

      </div>
       <div class="author">
        <?php if ( function_exists('get_wp_user_avatar')): ?>
          <a class="author-avatar" title="<?php echo get_the_author() ?>" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
            <?php echo get_wp_user_avatar(get_the_author_meta('ID'), 68); ?>
          </a>
        <?php endif; ?>
        <?php eyemagine_entry_meta(); ?>

      </div>
  </header>
  <section class="article-body">
    <?php if ( has_post_thumbnail() ) : // The post doesnt requited a password, and the attachement is not being displayed. ?>
    <div class="media">
      <ul class="count-0"><!-- no count for single media -->
        <li class="photo"><!-- just use photo for single media -->
          <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail(); ?>
            </a>
          <?php endif; ?>
        </li>
      </ul>
    </div>
    <?php endif; ?>

    <div class="description">

      <?php if ( is_search() ) : // Only display Excerpts for Search ?>
  		<div class="entry-summary">
  			<?php the_excerpt(); ?>
  		</div><!-- .entry-summary -->
  		<?php else : ?>
  		<div class="entry-content">
  			<?php the_content( __( 'Read More <i class="fa fa-arrow-circle-right"></i>', 'eyemagine' ) ); ?>
  			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'eyemagine' ), 'after' => '</div>' ) ); ?>
  		</div><!-- .entry-content -->
  		<?php endif; ?>

    </div>
    <div class="share">
        <!-- <div class="addthis_sharing_toolbox"></div> -->
        <!-- <div class="addthis_native_toolbox"></div> -->
        <!-- Buttons start here. Copy this ul to your document. -->
        <h4>Share this article:</h4>
        <ul class="rrssb-buttons clearfix">
            <li class="facebook">
                <a href="//facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="popup">
                    <span class="icon">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve">
                            <path d="M27.825,4.783c0-2.427-2.182-4.608-4.608-4.608H4.783c-2.422,0-4.608,2.182-4.608,4.608v18.434
                                c0,2.427,2.181,4.608,4.608,4.608H14V17.379h-3.379v-4.608H14v-1.795c0-3.089,2.335-5.885,5.192-5.885h3.718v4.608h-3.726
                                c-0.408,0-0.884,0.492-0.884,1.236v1.836h4.609v4.608h-4.609v10.446h4.916c2.422,0,4.608-2.188,4.608-4.608V4.783z"/>
                        </svg>
                    </span>
                    <span class="text">facebook</span>
                </a>
            </li>
            <li class="twitter">
                <a href="//twitter.com/share?text=<?php echo urlencode(the_title()); ?>&url=<?php echo urlencode(the_permalink()); ?>&via=goRendia" class="popup">
                    <span class="icon">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve">
                        <path d="M24.253,8.756C24.689,17.08,18.297,24.182,9.97,24.62c-3.122,0.162-6.219-0.646-8.861-2.32
                            c2.703,0.179,5.376-0.648,7.508-2.321c-2.072-0.247-3.818-1.661-4.489-3.638c0.801,0.128,1.62,0.076,2.399-0.155
                            C4.045,15.72,2.215,13.6,2.115,11.077c0.688,0.275,1.426,0.407,2.168,0.386c-2.135-1.65-2.729-4.621-1.394-6.965
                            C5.575,7.816,9.54,9.84,13.803,10.071c-0.842-2.739,0.694-5.64,3.434-6.482c2.018-0.623,4.212,0.044,5.546,1.683
                            c1.186-0.213,2.318-0.662,3.329-1.317c-0.385,1.256-1.247,2.312-2.399,2.942c1.048-0.106,2.069-0.394,3.019-0.851
                            C26.275,7.229,25.39,8.196,24.253,8.756z"/>
                        </svg>
                    </span>
                    <span class="text">twitter</span>
                </a>
            </li>
            <li class="linkedin">
              <!-- Replace href with your meta and URL information -->
              <a href="//linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>&amp;title=<?php esc_attr_e(the_title()) ?>&amp;summary=<?php echo get_post_meta($post->ID, '_yoast_wpseo_metadesc', true); ?>" class="popup">
                  <span class="icon">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve">
                          <path d="M25.424,15.887v8.447h-4.896v-7.882c0-1.979-0.709-3.331-2.48-3.331c-1.354,0-2.158,0.911-2.514,1.803
                              c-0.129,0.315-0.162,0.753-0.162,1.194v8.216h-4.899c0,0,0.066-13.349,0-14.731h4.899v2.088c-0.01,0.016-0.023,0.032-0.033,0.048
                              h0.033V11.69c0.65-1.002,1.812-2.435,4.414-2.435C23.008,9.254,25.424,11.361,25.424,15.887z M5.348,2.501
                              c-1.676,0-2.772,1.092-2.772,2.539c0,1.421,1.066,2.538,2.717,2.546h0.032c1.709,0,2.771-1.132,2.771-2.546
                              C8.054,3.593,7.019,2.501,5.343,2.501H5.348z M2.867,24.334h4.897V9.603H2.867V24.334z"/>
                      </svg>
                  </span>
                  <span class="text">linkedin</span>
              </a>
            </li>
            <li class="googleplus">
              <!-- Replace href with your meta and URL information.  -->
              <a href="//plus.google.com/share?url=<?php esc_attr_e(the_title()) ?>%20<?php the_permalink(); ?>" class="popup">
                  <span class="icon">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                      <g>
                        <path d="M21,8.291h-1.949v2.6h-2.6v1.819h2.6v2.599H21V12.71h2.6v-1.885H21V8.291z"/>
                        <path d="M7.614,10.306v2.925h3.899c-0.26,1.689-1.754,2.924-3.899,2.924c-2.34,0-4.29-2.016-4.29-4.354s1.885-4.354,4.29-4.354
                          c1.104,0,2.014,0.326,2.794,1.105l2.08-2.079c-1.3-1.17-2.924-1.884-4.874-1.884C3.649,4.587,0.4,7.836,0.4,11.8
                          s3.249,7.212,7.214,7.212c4.224,0,6.953-2.988,6.953-7.082c0-0.52-0.065-1.104-0.13-1.624H7.614z"/>
                      </g>
                      </svg>
                  </span>
                  <span class="text">google+</span>
              </a>
            </li>
            <li class="email">
                <a href="mailto:?subject=<?php esc_attr_e(the_title()) ?>&amp;body=<?php esc_attr_e(the_permalink()) ?>">
                    <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve"><g><path d="M20.111 26.147c-2.336 1.051-4.361 1.401-7.125 1.401c-6.462 0-12.146-4.633-12.146-12.265 c0-7.94 5.762-14.833 14.561-14.833c6.853 0 11.8 4.7 11.8 11.252c0 5.684-3.194 9.265-7.399 9.3 c-1.829 0-3.153-0.934-3.347-2.997h-0.077c-1.208 1.986-2.96 2.997-5.023 2.997c-2.532 0-4.361-1.868-4.361-5.062 c0-4.749 3.504-9.071 9.111-9.071c1.713 0 3.7 0.4 4.6 0.973l-1.169 7.203c-0.388 2.298-0.116 3.3 1 3.4 c1.673 0 3.773-2.102 3.773-6.58c0-5.061-3.27-8.994-9.303-8.994c-5.957 0-11.175 4.673-11.175 12.1 c0 6.5 4.2 10.2 10 10.201c1.986 0 4.089-0.43 5.646-1.245L20.111 26.147z M16.646 10.1 c-0.311-0.078-0.701-0.155-1.207-0.155c-2.571 0-4.595 2.53-4.595 5.529c0 1.5 0.7 2.4 1.9 2.4 c1.441 0 2.959-1.828 3.311-4.087L16.646 10.068z"/></g></svg>
                    </span>
                    <span class="text">email</span>
                </a>
            </li>
        </ul>
        <!-- Buttons end here -->
    </div>
  </section>

</article><!-- end article -->

<div class="large-12 columns comments">
  <?php comments_template(); ?>
</div>
