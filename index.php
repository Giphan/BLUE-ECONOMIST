<?php
/**
 * The Blue Reviewer - Main Index Template
 */

get_header(); 
?>

<div class="content-wrap">

    <main class="main-content">

        <?php if ( have_posts() ) : ?>

            <div class="posts-grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
                        
                        <div class="post-thumbnail">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'medium_large' ); ?>
                                </a>
                            <?php else : ?>
                                <div class="no-thumb">No Image Available</div>
                            <?php endif; ?>
                        </div>

                        <div class="post-content">
                            <h2 class="post-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>

                            <div class="post-excerpt">
                                <?php echo wp_trim_words( get_the_excerpt(), 25 ); ?>
                            </div>

                            <a class="read-more-btn" href="<?php the_permalink(); ?>">Read Full Review</a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <nav class="pagination-wrap">
                <?php
                echo paginate_links( array(
                    'prev_text' => '&laquo; Prev',
                    'next_text' => 'Next &raquo;',
                ) );
                ?>
            </nav>

        <?php else : ?>
            <div class="no-posts">
                <h2>No Reviews Yet</h2>
                <p>Check back soon for our latest product recommendations.</p>
            </div>
        <?php endif; ?>

    </main>

    <aside class="sidebar">
        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        <?php else : ?>
            <section class="widget">
                <h3 class="widget-title">Search Reviews</h3>
                <?php get_search_form(); ?>
            </section>
        <?php endif; ?>
    </aside>

</div> <?php get_footer(); ?>
