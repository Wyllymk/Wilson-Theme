/*--------------------------------------------------------------

Theme JS

--------------------------------------------------------------*/

jQuery(function ($) {
  // Close offcanvas on click a, keep .dropdown-menu open (see https://github.com/bootscore/bootscore/discussions/347)

  $(".offcanvas a:not(.dropdown-toggle, .remove_from_cart_button)").on("click", function () {
    $(".offcanvas").offcanvas("hide");
  });

  // Search collapse button hide if empty

  // Deprecated v5.2.3.4, done by php if (is_active_sidebar('top-nav-search')) in header.php

  // Remove in v6

  if ($("#collapse-search").children().length == 0) {
    $(".top-nav-search-md, .top-nav-search-lg").remove();
  }

  // Searchform focus

  $("#collapse-search").on("shown.bs.collapse", function () {
    $(".top-nav-search input:first-of-type").trigger("focus");
  });

  // Close collapse if click outside searchform

  $(document).on("click", function (event) {
    if ($(event.target).closest("#collapse-search").length === 0) {
      $("#collapse-search").collapse("hide");
    }
  });

  // Scroll to top Button

  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 500) {
      $(".top-button").addClass("visible");
    } else {
      $(".top-button").removeClass("visible");
    }
  });

  // div height, add class to your content

  $(".height-50").css("height", 0.5 * $(window).height());

  $(".height-75").css("height", 0.75 * $(window).height());

  $(".height-85").css("height", 0.85 * $(window).height());

  $(".height-100").css("height", 1.0 * $(window).height());
}); // jQuery End

/*=============== SHOW MENU ===============*/

const navMenu = document.getElementById("nav-menu"),
  navToggle = document.getElementById("nav-toggle"),
  navClose = document.getElementById("nav-close");

/*=============== MENU SHOW  ===============*/

if (navToggle) {
  navToggle.addEventListener("click", () => {
    navMenu.classList.add("show-menu");
  });
}

/*=============== MENU HIDDEN  ===============*/

if (navClose) {
  navClose.addEventListener("click", () => {
    navMenu.classList.remove("show-menu");
  });
}

/*=============== REMOVE MENU MOBILE ===============*/

const navLink = document.querySelectorAll(".nav__link");

const linkAction = () => {
  // click on nav menu to remove menu class

  navMenu.classList.remove("show-menu");
};

navLink.forEach((n) => n.addEventListener("click", linkAction));

/*=============== SHADOW HEADER ===============*/

const scrollHeader = () => {
  const header = document.getElementById("header");

  this.scrollY >= 50 ? header.classList.add("shadow-header") : header.classList.remove("shadow-header");
};

window.addEventListener("scroll", scrollHeader);

/*=============== EMAIL JS ===============*/

const contactForm = document.getElementById("contact-form"),
  contactMessage = document.getElementById("contact-message");

const sendEmail = (e) => {
  e.preventDefault();

  emailjs.sendForm("service_tvvulfc", "template_b0gi1kf", "#contact-form", "Kl_bohtXa0D9WQl-x").then(
    () => {
      contactMessage.textContent = "Message Sent Successfully ✅";

      setTimeout(() => {
        contactMessage.textContent = "";
      }, 5000);

      contactForm.reset();
    },

    () => {
      contactMessage.textContent = "Message Not Sent (Service Error) ❌";
    }
  );
};

contactForm.addEventListener("submit", sendEmail);

/*=============== SHOW SCROLL UP ===============*/

const scrollUp = () => {
  const scrollUp = document.getElementById("scroll-up");

  this.scrollY >= 350 ? scrollUp.classList.add("show-scroll") : scrollUp.classList.remove("show-scroll");
};

window.addEventListener("scroll", scrollUp);

/*=============== SCROLL SECTIONS ACTIVE LINK ===============*/

const sections = document.querySelectorAll("section[id]");

const scrollAction = () => {
  const scrollDown = window.scrollY;

  sections.forEach((current) => {
    const sectionHeight = current.offsetHeight,
      sectionTop = current.offsetTop - 58,
      sectionId = current.getAttribute("id"),
      sectionsClass = document.querySelector(".nav__menu a[href*=" + sectionId + "]");

    if (scrollDown > sectionTop && scrollDown <= sectionTop + sectionHeight) {
      sectionsClass.classList.add("active-link");
    } else {
      sectionsClass.classList.remove("active-link");
    }
  });
};

window.addEventListener("scroll", scrollAction);

/*=============== SCROLL REVEAL ANIMATION ===============*/

const sr = ScrollReveal({
  origin: "top",

  distance: "60px",

  duration: 2500,

  delay: 400,

  // reset: true
});

// Reveal elements

sr.reveal(`.home__perfil, .about__image, .contact__mail`, { origin: "right" });

sr.reveal(
  `.home__name, .home__info,

            .about__container .section__title-1, .about__info, .contact__social, .contact__data`,

  { origin: "left" }
);

sr.reveal(`.services__card, .projects__card`, { interval: 100 });

/*=============== SNOW JS LIBRARY ===============*/

let snowflakesCount = 200; // Snowflake count, can be overwritten by attrs
let baseCSS = `#home {
  background: radial-gradient(ellipse at bottom, #5d6e81 0%, #ffffff 100%);
  overflow-x: hidden;
  min-height: 100vh; 
  /* If you want to change the site height you can remove overflow-y */
  /* pure-snow will automatically detect height of body tag */
  overflow-y: hidden;
  color: white;
}

.snowflake {
  position: absolute;
  width: 10px;
  height: 10px;
  background: white;
  border-radius: 50%;
  filter: drop-shadow(0 0 10px white);
}`;

// set global attributes
if (typeof SNOWFLAKES_COUNT !== "undefined") {
  snowflakesCount = SNOWFLAKES_COUNT;
}
if (typeof BASE_CSS !== "undefined") {
  baseCSS = BASE_CSS;
}

let bodyHeightPx = null;
let pageHeightVh = null;

function setHeightVariables() {
  bodyHeightPx = document.body.offsetHeight;
  pageHeightVh = (100 * bodyHeightPx) / window.innerHeight;
}

// get params set in snow div
function getSnowAttributes() {
  const snowWrapper = document.getElementById("snow");
  snowflakesCount = Number(snowWrapper?.dataset?.count || snowflakesCount);
}

// This function allows you to turn on and off the snow
function showSnow(value) {
  if (value) {
    document.getElementById("snow").style.display = "block";
  } else {
    document.getElementById("snow").style.display = "none";
  }
}

// Creating snowflakes
function generateSnow(snowDensity = 200) {
  snowDensity -= 1;
  const snowWrapper = document.getElementById("snow");
  snowWrapper.innerHTML = "";
  for (let i = 0; i < snowDensity; i++) {
    let board = document.createElement("div");
    board.className = "snowflake";
    snowWrapper.appendChild(board);
  }
}

function getOrCreateCSSElement() {
  let cssElement = document.getElementById("psjs-css");
  if (cssElement) return cssElement;

  cssElement = document.createElement("style");
  cssElement.id = "psjs-css";
  document.head.appendChild(cssElement);
  return cssElement;
}

// Append style for each snowflake to the head
function addCSS(rule) {
  const cssElement = getOrCreateCSSElement();
  cssElement.innerHTML = rule; // safe to use innerHTML
  document.head.appendChild(cssElement);
}

// Math
function randomInt(value = 100) {
  return Math.floor(Math.random() * value) + 1;
}

function randomIntRange(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

function getRandomArbitrary(min, max) {
  return Math.random() * (max - min) + min;
}

// Create style for snowflake
function generateSnowCSS(snowDensity = 200) {
  let snowflakeName = "snowflake";
  let rule = baseCSS;

  for (let i = 1; i < snowDensity; i++) {
    let randomX = Math.random() * 100; // vw
    let randomOffset = Math.random() * 10; // vw;
    let randomXEnd = randomX + randomOffset;
    let randomXEndYoyo = randomX + randomOffset / 2;
    let randomYoyoTime = getRandomArbitrary(0.3, 0.8);
    let randomYoyoY = randomYoyoTime * pageHeightVh; // vh
    let randomScale = Math.random();
    let fallDuration = randomIntRange(10, (pageHeightVh / 10) * 3); // s
    let fallDelay = randomInt((pageHeightVh / 10) * 3) * -1; // s
    let opacity = Math.random();

    rule += `
      .${snowflakeName}:nth-child(${i}) {
        opacity: ${opacity};
        transform: translate(${randomX}vw, -10px) scale(${randomScale});
        animation: fall-${i} ${fallDuration}s ${fallDelay}s linear infinite;
      }
      @keyframes fall-${i} {
        ${randomYoyoTime * 100}% {
          transform: translate(${randomXEnd}vw, ${randomYoyoY}vh) scale(${randomScale});
        }
        to {
          transform: translate(${randomXEndYoyo}vw, ${pageHeightVh}vh) scale(${randomScale});
        }
      }
    `;
  }
  addCSS(rule);
}

// Load the rules and execute after the DOM loads
function createSnow() {
  setHeightVariables();
  getSnowAttributes();
  generateSnowCSS(snowflakesCount);
  generateSnow(snowflakesCount);
}

window.addEventListener("resize", createSnow);

// export createSnow function if using node or CommonJS environment
if (typeof module !== "undefined") {
  module.exports = {
    createSnow,
    showSnow,
  };
} else {
  window.onload = createSnow;
}
