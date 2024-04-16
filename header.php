<?php



/**

 * The header for our theme

 *

 * This is the template that displays all of the <head> section and everything up until <div id="content">

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package Bootscore

 *

 * @version 5.3.0

 */



?>

<!doctype html>

<html <?php language_attributes(); ?>>



<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Favicons -->

    <link rel="apple-touch-icon" sizes="180x180"
        href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/apple-touch-icon.png">

    <link rel="icon" type="image/png" sizes="32x32"
        href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/favicon-32x32.png">

    <link rel="icon" type="image/png" sizes="16x16"
        href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/favicon-16x16.png">

    <link rel="manifest" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/site.webmanifest">

    <meta name="msapplication-TileColor" content="#ffffff">

    <meta name="theme-color" content="#ffffff">

    <?php wp_head(); ?>

</head>



<body <?php body_class(); ?>>



    <?php wp_body_open(); ?>



    <!--==================== HEADER ====================-->

    <header class="header" id="header">

        <nav class="nav container">

            <a href="#" class="nav__logo">

                <span class="nav__logo-circle">W</span>

                <span class="nav__logo-name">Wilson</span>

            </a>



            <div class="nav__menu" id="nav-menu">

                <span class="nav__title">Menu</span>



                <h3 class="nav__name">Wilson</h3>



                <ul class="nav__list ">

                    <li class="nav__item">

                        <a href="#home" class="nav__link active-link">Home</a>

                    </li>

                    <li class="nav__item">

                        <a href="#about" class="nav__link">About Me</a>

                    </li>

                    <li class="nav__item">

                        <a href="#projects" class="nav__link">Projects</a>

                    </li>

                    <li class="nav__item">

                        <a href="<?php echo get_template_directory_uri(  );?>/img/Wilson Resume.pdf"
                            class="nav__link nav__link-button">Resume</a>

                    </li>

                </ul>



                <div class="nav__close" id="nav-close">

                    <i class="fa-solid fa-xmark"></i>

                </div>

            </div>



            <div class="nav__buttons">



                <div class="nav__toggle" id="nav-toggle">

                    <i class="fa-solid fa-bars"></i>

                </div>

            </div>

        </nav>

    </header>