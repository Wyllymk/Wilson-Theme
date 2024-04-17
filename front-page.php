<?php



/**

 * The front-page template file

 *

 * This is the most generic template file in a WordPress theme

 * and one of the two required files for a theme (the other being style.css).

 * It is used to display a page when nothing more specific matches a query.

 * E.g., it puts together the home page when no home.php file exists.

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/

 *

 * @package Bootscore

 */



get_header();

?>





<!--==================== MAIN ====================-->

<main class="main">

    <!--==================== HOME ====================-->

    <section class="home section" id="home">

        <div id="snow" data-count="200"></div>

        <div class="home__container container grid">

            <h1 class="home__name">

                Wilson Mbuthia

            </h1>



            <div class="home__perfil">

                <div class="home__image">

                    <img src="<?php echo get_template_directory_uri(  );?>/img/Developer.webp" class="home__img" alt="">

                    <div class="home__shadow"></div>

                    <img src="<?php echo get_template_directory_uri(  );?>/img/spiral-arrow.jpg" alt=""
                        class="home__arrow">

                    <img src="<?php echo get_template_directory_uri(  );?>/img/Black-Star-PNG.png" alt=""
                        class="home__line">



                    <div class="geometric-box"></div>

                </div>

                <div class="home__social">



                    <a href="https://github.com/Wyllymk" target="_blank" class="home__social-link">

                        <i class="fa-brands fa-github"></i>

                    </a>



                    <a href="https://www.linkedin.com/in/wilson-mbuthia-k/" target="_blank" class="home__social-link">

                        <i class="fa-brands fa-linkedin"></i>

                    </a>



                    <a href="https://twitter.com/WilsonMbuthiaK" target="_blank" class="home__social-link">

                        <i class="fa-brands fa-x-twitter"></i>

                    </a>

                </div>

            </div>



            <div class="home__info">

                <p class="home__description">

                    <b>WordPress Developer</b>, with a keen eye for design, I excel at crafting engaging and

                    user-friendly web interfaces.

                    I bring a commitment to delivering top-notch work, complemented by a solid understanding

                    of backend development.

                    Eager to contribute my skills to your team and create impactful digital experiences

                </p>



                <a href="#about" class="home__scroll">

                    <div class="home__scroll-box">

                        <i class="fa-solid fa-chevron-down"></i>

                    </div>

                    <span class="home__scroll-text">Scroll Down</span>

                </a>

            </div>

        </div>



    </section>



    <!--==================== ABOUT ====================-->

    <section class="about section" id="about">

        <canvas id="canvas"></canvas>

        <div class="about__container container grid">

            <h2 class="section__title-1">

                <span> About Me.</span>

            </h2>



            <div class="about__perfil">

                <div class="about__image">

                    <img src="<?php echo get_template_directory_uri(  );?>/img/Dev.webp" alt="" class="about__img">

                    <div class="about-shadow"></div>



                    <div class="geometric-box"></div>

                    <img src="<?php echo get_template_directory_uri(  );?>/img/spiral arrow.jpg" alt=""
                        class="about__line">

                    <div class="about__box"></div>

                </div>

            </div>



            <div class="about__info">

                <p class="about__description">

                    Experienced Software Developer proficient in coding and debugging, consistently delivering project
                    objectives through the creation of refined, scalable, and production-ready code. Adept at
                    collaborating within Agile and Scrum frameworks to achieve team goals effectively.



                </p>



                <ul class="about__list">

                    <li class="about__item">

                        <b>Skills:</b> HTML, CSS, Javascript, React, Git & Github, Scss, Strapi, WordPress,

                        NodeJs

                    </li>

                </ul>

                <div class="about__buttons">

                    <a href="#contact" class="button">

                        <i class="ri-send-plane-line"></i> Contact Me.

                    </a>



                    <a href="https://www.linkedin.com/in/wilson-mbuthia-k/" target="_blank" class="button__ghost">

                        <i class="fa-brands fa-linkedin"></i>

                    </a>

                </div>

            </div>

        </div>



    </section>



    <!--==================== SERVICES ====================-->

    <section class="services section">

        <h2 class="section__title-2">

            <span>Services.</span>

        </h2>



        <div class="services__container container grid">

            <article class="services__card">

                <div class="services__border"></div>



                <div class="services__content">

                    <div class="services__icon">

                        <div class="services__box"></div>

                        <i class="fa-solid fa-swatchbook"></i>

                    </div>



                    <h2 class="services__title">Web Design</h2>

                    <p class="services__description">

                        Delivering visually striking web designs that

                        harmonize aesthetics with functionality.

                        Prioritizing intuitive,

                        efficient, and enjoyable

                        user interfaces to elevate the overall digital experience

                    </p>

                </div>

            </article>



            <article class="services__card">

                <div class="services__border"></div>



                <div class="services__content">

                    <div class="services__icon">

                        <div class="services__box"></div>

                        <i class="fa-solid fa-code"></i>

                    </div>



                    <h2 class="services__title">Theme Development</h2>

                    <p class="services__description">

                        I excel in crafting and customizing themes for clients, proficient in languages such as HTML,
                        Bootstrap, and Laravel seamlessly integrated into Wordpress.

                    </p>

                </div>

            </article>



            <article class="services__card">

                <div class="services__border"></div>



                <div class="services__content">

                    <div class="services__icon">

                        <div class="services__box"></div>

                        <i class="fa-solid fa-display"></i>

                    </div>



                    <h2 class="services__title">Landing Pages</h2>

                    <p class="services__description">

                        Specializing in the creation of custom landing pages

                        meticulously crafted to align seamlessly with your unique specifications,

                        ensuring a tailored and compelling

                        digital presence for your brand or product

                    </p>

                </div>

            </article>

        </div>

        <div class="container d-flex justify-content-between align-items-center">
            <img alt="HTML" loading="lazy" decoding="async" data-img="fill" height="50" width="50"
                src="<?php echo get_template_directory_uri(  );?>/img/html-5.008cf296.svg">
            <img alt="SCSS" loading="lazy" decoding="async" data-img="fill" height="50" width="50"
                src="<?php echo get_template_directory_uri(  );?>/img/scss.98aab7f4.svg">
            <img alt="Tailwind" loading="lazy" decoding="async" data-img="fill" height="50" width="50"
                src="<?php echo get_template_directory_uri(  );?>/img/tailwind-css.41e68952.svg">
            <img alt="JavaScript" loading="lazy" decoding="async" data-img="fill" height="50" width="50"
                src="<?php echo get_template_directory_uri(  );?>/img/javascript.bf9de660.svg">
            <img alt="PHP" loading="lazy" decoding="async" data-img="fill" height="50" width="50"
                src="<?php echo get_template_directory_uri(  );?>/img/php.a1592ac5.svg">
            <img alt="MySQL" loading="lazy" decoding="async" data-img="fill" height="50" width="50"
                src="<?php echo get_template_directory_uri(  );?>/img/mysql.c01bedfc.svg">
            <img alt="Github" loading="lazy" decoding="async" data-img="fill" height="50" width="50"
                src="<?php echo get_template_directory_uri(  );?>/img/github.93f8e2ad.svg">
            <img alt="AWS" loading="lazy" decoding="async" data-img="fill" height="50" width="50"
                src="<?php echo get_template_directory_uri(  );?>/img/aws.a08e83b4.svg">
            <img alt="WordPress" loading="lazy" decoding="async" data-img="fill" style="height:40px;"
                src="<?php echo get_template_directory_uri(  );?>/img/icons8-wordpress-94.png">
        </div>

    </section>



    <!--==================== PROJECTS ====================-->

    <section class="projects section" id="projects">

        <h2 class="section__title-1">

            <span>Projects.</span>

        </h2>



        <div class="projects__container container grid">

            <article class="projects__card">

                <div class="projects__image">

                    <img src="01.png" alt="" class="project__img">



                    <a href="https://dejavutechkenya.com" target="_blank" class="projects__button button">

                        <i class="fa-solid fa-up-right-from-square"></i>

                    </a>

                </div>



                <div class="projects__content">

                    <h3 class="projects__subtitle">Company Website</h3>

                    <h2 class="projects__title">Dejavu Technologies</h2>



                    <p class="projects__description">

                        Dejavu Technologies' website redesign leverages Wordpress and Elementor to deliver a dynamic
                        design. Notably, the custom shop page, ingeniously crafted with API integration, ensures
                        seamless user interaction. This amalgamation of technologies reflects our commitment to
                        innovation and functionality in web development.

                    </p>

                </div>



                <div class="projects__buttons">


                    <a href="https://dejavutechkenya.com" target="_blank" class="projects__link">

                        <i class="fa-solid fa-globe"></i>View

                    </a>

                </div>

            </article>



            <article class="projects__card">

                <div class="projects__image">

                    <img src="02.png" alt="" class="project__img">



                    <a href="https://faceshop254.com" target="_blank" class="projects__button button">

                        <i class="fa-solid fa-up-right-from-square"></i>

                    </a>

                </div>



                <div class="projects__content">

                    <h3 class="projects__subtitle">WooCommerce Store</h3>

                    <h2 class="projects__title">FaceShop 254</h2>



                    <p class="projects__description">


                        The overhaul of FaceShop 254, an e-commerce platform powered by WooCommerce, tackled plugin
                        update challenges while boosting speed and optimizing SEO. Our meticulous enhancements not only
                        resolved technical issues but also positioned the store for heightened performance and improved
                        online visibility.

                    </p>

                </div>



                <div class="projects__buttons">


                    <a href="https://faceshop254.com" target="_blank" class="projects__link">

                        <i class="fa-solid fa-globe"></i>View

                    </a>

                </div>

            </article>



            <article class="projects__card">

                <div class="projects__image">

                    <img src="03.png" alt="" class="project__img">



                    <a href="https://gathathiiniboyshighschool.sc.ke" target="_blank" class="projects__button button">

                        <i class="fa-solid fa-up-right-from-square"></i>

                    </a>

                </div>



                <div class="projects__content">

                    <h3 class="projects__subtitle">School Website</h3>

                    <h2 class="projects__title">Gathathi-ini Boys</h2>



                    <p class="projects__description">

                        The design and development of Gathathi-ini Boys High School's website were executed as part of a
                        CSR initiative. Built on a custom WordPress theme, the website embodies the school's ethos while
                        providing an intuitive platform for communication and information sharing, enhancing the
                        school's online presence and engagement with stakeholders.

                    </p>

                </div>



                <div class="projects__buttons">

                    <a href="https://github.com/Wyllymk/Gathathi-ini" target="_blank" class="projects__link">

                        <i class="fa-brands fa-github"></i>View

                    </a>



                    <a href="https://gathathiiniboyshighschool.sc.ke" target="_blank" class="projects__link">

                        <i class="fa-solid fa-globe"></i>View

                    </a>

                </div>

            </article>



            <article class="projects__card">

                <div class="projects__image">

                    <img src="04.png" alt="" class="project__img">



                    <a href="https://nyericlub.co.ke" target="_blank" class="projects__button button">

                        <i class="fa-solid fa-up-right-from-square"></i>

                    </a>

                </div>



                <div class="projects__content">

                    <h3 class="projects__subtitle">Club Website</h3>

                    <h2 class="projects__title">Nyeri Club</h2>



                    <p class="projects__description">

                        The design of Nyeri Club's golf website seamlessly combines Wordpress and Elementor to capture
                        the essence of the prestigious club. With elegant layouts and intuitive navigation, the website
                        reflects the club's charm and offers a dynamic platform for members and enthusiasts to connect,
                        engage, and explore golfing opportunities.

                    </p>

                </div>



                <div class="projects__buttons">

                    <a href="https://github.com/Wyllymk/nyeri_bootscore" target="_blank" class="projects__link">

                        <i class="fa-brands fa-github"></i>View

                    </a>



                    <a href="https://nyericlub.co.ke" class="projects__link">

                        <i class="fa-solid fa-globe"></i>View

                    </a>

                </div>

            </article>

            <article class="projects__card">

                <div class="projects__image">

                    <img src="06.png" alt="" class="project__img">



                    <a href="https://aegeusinspections.com" target="_blank" class="projects__button button">

                        <i class="fa-solid fa-up-right-from-square"></i>

                    </a>

                </div>



                <div class="projects__content">

                    <h3 class="projects__subtitle">Company Website</h3>

                    <h2 class="projects__title">Aegeus Inspections</h2>



                    <p class="projects__description">

                        The comprehensive website developed for Aegeus Inspections, utilizing WordPress and Elementor,
                        showcases their services across more than 40 meticulously crafted pages. With seamless
                        integration and deployment facilitated by Super DevOps, the launch heralded a new era of online
                        presence, enabling Aegeus to reach and engage a broader audience effectively.

                    </p>

                </div>



                <div class="projects__buttons">

                    <a href="https://aegeusinspections.com" target="_blank" class="projects__link">

                        <i class="fa-solid fa-globe"></i>View

                    </a>

                </div>

            </article>



            <article class="projects__card">

                <div class="projects__image">

                    <img src="05.png" alt="" class="project__img">



                    <a href="https://aegeusgroup.com" target="_blank" class="projects__button button">

                        <i class="fa-solid fa-up-right-from-square"></i>

                    </a>

                </div>



                <div class="projects__content">

                    <h3 class="projects__subtitle">Landing Page</h3>

                    <h2 class="projects__title">Aegeus Group</h2>



                    <p class="projects__description">

                        The development of a captivating landing page for Aegeus Group epitomizes excellence in design
                        and functionality within the WordPress and Elementor ecosystem. Meticulously crafted, it
                        seamlessly combines aesthetics and user experience, serving as a powerful gateway to showcase
                        the company's offerings and captivate its audience effectively.

                    </p>

                </div>



                <div class="projects__buttons">


                    <a href="https://aegeusgroup.com" target="_blank" class="projects__link">

                        <i class="fa-solid fa-globe"></i>View

                    </a>

                </div>

            </article>

        </div>

    </section>



    <!--==================== CONTACT ====================-->

    <section class="contact section" id="contact">

        <div class="contact__container grid">

            <div class="contact__data">



                <h2 class="section__title-2"><span>Contact Me.</span></h2>



                <p class="contact__decription-1">

                    I will read all emails. Send me any message you want and i'll get back to you.

                </p>



                <p class="contact__description-2">

                    I need your <b>Name</b> and <b>Email Address</b>, I'll reply as quickly as possible

                </p>



                <div class="geometric-box"></div>

            </div>

            <div class="contact__mail">

                <h2 class="contact__title">

                    Send Me A Message.

                </h2>

                <div>
                    <?php echo do_shortcode( '[forminator_form id="8"]' ); ?>
                </div>


            </div>



            <div class="contact__social">

                <img src="<?php echo get_template_directory_uri(  );?>/img/spiral-arrow.jpg" alt=""
                    class="contact__social-arrow">



                <div class="contact__social-data">

                    <div>

                        <p class="contact__social-description-1">

                            Don't want to send Mails

                        </p>



                        <p class="contact__social-description-1">

                            Write me on social media

                        </p>

                    </div>

                    <div class="contact__social-links">

                        <a href="https://twitter.com/WilsonMbuthiaK" class="contact__social-link" target="_blank">

                            <i class="fa-brands fa-x-twitter"></i>

                        </a>



                        <a href="https://www.linkedin.com/in/wilson-mbuthia-k/" class="contact__social-link"
                            target="_blank">

                            <i class="fa-brands fa-linkedin"></i>

                        </a>



                        <a href="https://github.com/Wyllymk" class="contact__social-link" target="_blank">

                            <i class="fa-brands fa-github"></i>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>



</main><!-- #main -->





<?php

get_footer();