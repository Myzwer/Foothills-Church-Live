<?php
/**
 * The template for displaying the navbar on the site.
 * It does not use tailwind, it's SCSS file can be found at ./assets/src/sass/components/navbar.scss.
 * The Navbar generated by PHP can be configured in functions.php.
 *
 * This is the template that displays all of the <head> section and everything up until the main body.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage fc_live
 * @since 1.0.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <!--Meta Info-->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!--Font Awesome Loadin-->
    <script src="https://kit.fontawesome.com/e9f0a6af17.js" crossorigin="anonymous"></script>

    <!--Wordpress Required Stuff-->
    <?php wp_head(); ?>
</head>

<!--Open Body, Apply any Tailwind classes that are global here, Leave WP stuff alone. -->
<body class="leading-normal tracking-normal"
      style="font-family: 'Source Sans Pro', sans-serif;" <?php body_class(); ?>>
<?php wp_body_open(); ?>


<!--Start Navbar-->
<section class="navigation">
    <div class="nav-container">
        <div class="brand">
            <a href="/frontpage">
                <!--Company Logo / Branding. Template supports both Text and Logo-->
                <img src="https://images.squarespace-cdn.com/content/v1/575a6067b654f9b902f452f4/1552683653140-0UUVQSSUEWVC73AWAEQG/300Logo.png"
                     alt="Company Logo">
            </a>
        </div>

        <nav>
            <div class="nav-mobile">
                <a id="nav-toggle" href="#!"><span></span></a>
            </div>

            <!-- Start Wordpress-->
            <?php
            wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'menu_class'     => 'primary-menu', // pass whatever classes to be added to top level here
                'walker' => new PreLaunch_Walker(),
                'items_wrap' => '<ul class="nav-list">%3$s</ul>'
            ));
            ?>
            <!-- End Wordress -->
        </nav>
    </div>
</section>
<!--Start Body-->







