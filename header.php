<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="header-main-row">
        <div class="brand-section">
            <div class="logo-placeholder">
                <?php 
                if ( has_custom_logo() ) {
                    the_custom_logo();
                } else { ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" 
                             alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" 
                             style="height:50px; display:block;">
                    </a>
                <?php } ?>
            </div>

            <?php 
            // SEO: Use H1 on homepage, P on internal pages to prioritize review titles
            $brand_tag = ( is_front_page() || is_home() ) ? 'h1' : 'p'; 
            ?>
            <<?php echo $brand_tag; ?> class="brand-name">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <?php bloginfo( 'name' ); ?>
                </a>
            </<?php echo $brand_tag; ?>>
        </div>

        <nav class="nav-bar" role="navigation" aria-label="Primary Menu">
            <?php 
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'fallback_cb'    => false,
            ) ); 
            ?>
        </nav>
    </div>

    <div class="action-bar">
        <div class="search-wrap">
            <?php get_search_form(); ?>
        </div>
        
        <div class="subscribe-wrap">
            <form action="#" method="post" class="subscribe-form">
                <input type="email" name="subscriber_email" placeholder="Get reviews via email" required>
                <button type="submit" class="btn-subscribe">Subscribe</button>
            </form>
        </div>
    </div>
</header>

<div class="ticker-wrap">
    <div class="ticker-move">
        <?php 
        $ticker_text = "The truth behind every product..."; 
        // Repeat the text 4 times for a continuous scrolling effect
        echo str_repeat( esc_html( $ticker_text ) . ' &nbsp;&nbsp;&nbsp;&nbsp; ', 4 ); 
        ?>
    </div>
</div>
