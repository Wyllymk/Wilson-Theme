<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 *
 * @version 5.3.0
 */

?>

<!--==================== FOOTER ====================-->
<footer class="footer">
    <div class="footer__container container grid">
        <ul class="footer__links">
            <li>
                <a href="#about" class="footer__link">About Me</a>
            </li>

            <li>
                <a href="#services" class="footer__link">Services</a>
            </li>

            <li>
                <a href="#projects" class="footer__link">Projects</a>
            </li>
        </ul>

        <span class="footer__copy">
            &#169; 2024 All Rights Reserved By <a href="">Wilson.</a>
        </span>
    </div>
</footer>

<!--========== SCROLL UP ==========-->
<a href="#" class="scrollup" id="scroll-up">
    <i class="fa-solid fa-angle-up"></i>
</a>

<?php wp_footer(); ?>

</body>

</html>