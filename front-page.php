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
        <canvas id="canvas"></canvas>
        <div class="home__container container grid">
            <h1 class="home__name">
                Wilson Mbuthia
            </h1>

            <div class="home__perfil">
                <div class="home__image">
                    <img src="https://image.lexica.art/md2/38d323ce-e7d2-4b02-8387-36e54636421c" class="home__img"
                        alt="">
                    <div class="home__shadow"></div>
                    <img src="https://i.pinimg.com/736x/6c/c6/5f/6cc65f591cbe9b6e13c466ca83d18f1f.jpg" alt=""
                        class="home__arrow">
                    <img src="https://www.pngall.com/wp-content/uploads/13/Black-Star-PNG.png" alt=""
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
                    <b>Frontend Developer</b>, with a keen eye for design, I excel at crafting engaging and
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
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRO7psKVw-vrAZcVDhGnRstszcZXXxqe1Q6SQ&usqp=CAU"
                        alt="" class="about__img">
                    <div class="about-shadow"></div>

                    <div class="geometric-box"></div>
                    <img src="https://i.pinimg.com/736x/6c/c6/5f/6cc65f591cbe9b6e13c466ca83d18f1f.jpg" alt=""
                        class="about__line">
                    <div class="about__box"></div>
                </div>
            </div>

            <div class="about__info">
                <p class="about__description">
                    Dedicated to the art of crafting
                    exceptional web pages with captivating
                    <b> UX/UI interfaces</b>, seamlessly
                    integrating <b>headless
                        CMS</b> for superior user experiences
                    and digital excellence
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

                    <a href="https://www.linkedin.com/in/wilson-mbuthia-k/" class="button__ghost">
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

                    <h2 class="services__title">Development</h2>
                    <p class="services__description">
                        Crafting bespoke web solutions designed
                        to meet your unique requirements
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

                    <a href="https://nightburnn.github.io/Coffee-website/" class="projects__button button">
                        <i class="fa-solid fa-up-right-from-square"></i>
                    </a>
                </div>

                <div class="projects__content">
                    <h3 class="projects__subtitle">Coffee Website</h3>
                    <h2 class="projects__title">Coffee shop</h2>

                    <p class="projects__description">
                        Embarking on a journey through the rich and aromatic world of coffee, I recently
                        developed a
                        dynamic and inviting website called "Brewing" This project is a celebration of the
                        culture,
                        diversity, and pure enjoyment that coffee brings to people around the globe.
                    </p>
                </div>

                <div class="projects__buttons">
                    <a href="https://github.com/Nightburnn/Coffee-website" class="projects__link">
                        <i class="fa-brands fa-github"></i></i>View
                    </a>

                    <a href="https://nightburnn.github.io/Coffee-website/" class="projects__link">
                        <i class="fa-solid fa-globe"></i>View
                    </a>
                </div>
            </article>

            <article class="projects__card">
                <div class="projects__image">
                    <img src="02.png" alt="" class="project__img">

                    <a href="https://codepen.io/nightburnn/full/JjmPxjb" class="projects__button button">
                        <i class="fa-solid fa-up-right-from-square"></i>
                    </a>
                </div>

                <div class="projects__content">
                    <h3 class="projects__subtitle">Landing Page</h3>
                    <h2 class="projects__title">Archi Lab</h2>

                    <p class="projects__description">
                        I had the pleasure of crafting a captivating landing page called "Archi Lab," a space
                        where
                        creativity meets functionality. Archi Lab serves as a showcase for architects and design
                        enthusiasts, providing an immersive experience that seamlessly combines aesthetic appeal
                        with
                        user-friendly navigation.
                    </p>
                </div>

                <div class="projects__buttons">
                    <a href="https://github.com/Nightburnn/html-and-css" class="projects__link">
                        <i class="fa-brands fa-github"></i>View
                    </a>

                    <a href="https://codepen.io/nightburnn/full/JjmPxjb" class="projects__link">
                        <i class="fa-solid fa-globe"></i>View
                    </a>
                </div>
            </article>

            <article class="projects__card">
                <div class="projects__image">
                    <img src="03.png" alt="" class="project__img">

                    <a href="https://codepen.io/nightburnn/full/rNZmEmR" class="projects__button button">
                        <i class="fa-solid fa-up-right-from-square"></i>
                    </a>
                </div>

                <div class="projects__content">
                    <h3 class="projects__subtitle">Tribute Page</h3>
                    <h2 class="projects__title">Madara Uchiha</h2>

                    <p class="projects__description">
                        I had the exhilarating opportunity to create a tribute page dedicated to one of the most
                        iconic
                        and formidable characters in the Naruto universe—Uchiha Madara. The "Uchiha Madara
                        Tribute Page"
                        is a homage to the legendary shinobi, showcasing his rich history, unparalleled skills,
                        and
                        impactful legacy within the Naruto series.
                    </p>
                </div>

                <div class="projects__buttons">
                    <a href="" class="projects__link">
                        <i class="fa-brands fa-github"></i>View
                    </a>

                    <a href="https://codepen.io/nightburnn/full/rNZmEmR" class="projects__link">
                        <i class="fa-solid fa-globe"></i>View
                    </a>
                </div>
            </article>

            <article class="projects__card">
                <div class="projects__image">
                    <img src="04.png" alt="" class="project__img">

                    <a href="https://nightburnn.github.io/E-commerce-website/" class="projects__button button">
                        <i class="fa-solid fa-up-right-from-square"></i>
                    </a>
                </div>

                <div class="projects__content">
                    <h3 class="projects__subtitle">E-commerce web design</h3>
                    <h2 class="projects__title">Sales Page</h2>

                    <p class="projects__description">
                        E-commerce website designed to revolutionize your online shopping experience. In this
                        project,
                        I've meticulously crafted a platform that seamlessly blends aesthetic appeal with
                        user-friendly
                        functionality, offering visitors a digital shopping haven that caters to their every
                        need.
                    </p>
                </div>

                <div class="projects__buttons">
                    <a href="https://github.com/Nightburnn/E-commerce-website" class="projects__link">
                        <i class="fa-brands fa-github"></i>View
                    </a>

                    <a href="https://nightburnn.github.io/E-commerce-website/" class="projects__link">
                        <i class="fa-solid fa-globe"></i>View
                    </a>
                </div>
            </article>
            <article class="projects__card">
                <div class="projects__image">
                    <img src="06.png" alt="" class="project__img">

                    <a href="https://nightburnn.github.io/Night-Linktree/" class="projects__button button">
                        <i class="fa-solid fa-up-right-from-square"></i>
                    </a>
                </div>

                <div class="projects__content">
                    <h3 class="projects__subtitle">Linktree Clone</h3>
                    <h2 class="projects__title">Night Version</h2>

                    <p class="projects__description">

                        Linktree replica designed to elevate your online presence. I've created a streamlined
                        platform
                        for easy navigation through a curated set of links, serving as a centralized hub for
                        visitors to
                        explore and connect with your online identity and content.
                    </p>
                </div>

                <div class="projects__buttons">
                    <a href="https://github.com/Nightburnn/Night-Linktree" class="projects__link">
                        <i class="fa-brands fa-github"></i>View
                    </a>

                    <a href="https://nightburnn.github.io/Night-Linktree/" class="projects__link">
                        <i class="fa-solid fa-globe"></i>View
                    </a>
                </div>
            </article>

            <article class="projects__card">
                <div class="projects__image">
                    <img src="05.png" alt="" class="project__img">

                    <a href="https://nightburnn.github.io/portfolio/" class="projects__button button">
                        <i class="fa-solid fa-up-right-from-square"></i>
                    </a>
                </div>

                <div class="projects__content">
                    <h3 class="projects__subtitle">portfolio</h3>
                    <h2 class="projects__title">Night portfolio</h2>

                    <p class="projects__description">
                        Portfolio page meticulously designed to showcase a diverse range of projects and skills.
                        In this
                        endeavor, I've carefully curated a platform that harmoniously combines visual appeal
                        with
                        intuitive navigation, providing visitors with a digital portfolio haven that highlights
                        my
                        capabilities and achievements.
                    </p>
                </div>

                <div class="projects__buttons">
                    <a href="https://github.com/Wyllymk/portfolio" class="projects__link">
                        <i class="fa-brands fa-github"></i>View
                    </a>

                    <a href="https://nightburnn.github.io/portfolio/" class="projects__link">
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

                <form action="" class="contact__form" id="contact-form">
                    <div class="contact__group">
                        <div class="contact__box">
                            <input type="text" name="user_name" class="contact__input" id="name" required
                                placeholder="First Name">
                            <label for="name" class="contact__label">First Name</label>
                        </div>

                        <div class="contact__box">
                            <input type="email" name="user_email" class="contact__input" id="email" required
                                placeholder="Email Address">
                            <label for="email" class="contact__label">Email Address</label>
                        </div>
                    </div>

                    <div class="contact__box">
                        <input type="text" name="user_subject" class="contact__input" id="subject" required
                            placeholder="Subjects">
                        <label for="subject" class="contact__label">Subjects</label>
                    </div>

                    <div class="contact__box">
                        <textarea name="user_messages" id="message" class="contact__input" required
                            placeholder="Message"></textarea>
                        <label for="message" class="contact__label">Message</label>
                    </div>

                    <p class="contact__message" id="contact-message"></p>

                    <button type="submit" class="contact__button button">
                        <i class="ri-send-plane-line"></i> Send Message
                    </button>
                </form>
            </div>

            <div class="contact__social">
                <img src="https://i.pinimg.com/736x/6c/c6/5f/6cc65f591cbe9b6e13c466ca83d18f1f.jpg" alt=""
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

                        <a href="https://github.com/Wyllymk" class="contact__social-link" target="blank">
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