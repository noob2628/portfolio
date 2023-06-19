<?php
require "php/session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" type="image/png" href="./images/favicon.png" />

  <!-- Put your site title here -->
  <title>
    Harold Lachica | A Web Developer based in Manila, Philippines.
  </title>

  <meta name="description" content="Add small description of yourslef.">
  <!-- Add some coding keywords below, Ex: (React, CSS etc) -->
  <meta name="keywords" content="Put your name, skills and some coding keywords" />
  <link rel="stylesheet" href="css/index.css" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
  <script type="text/javascript">(function(){emailjs.init("6fmv2rmmfccI3W3Mp"); })();</script>
</head>

<body>

  <!-- ***** Header ***** -->

  <header class="header" role="banner" id="top">
    <div class="row">
      <nav class="nav" role="navigation">
        <ul class="nav__items">
          <li class="nav__item"><a href="#work" class="nav__link">Work</a></li>
          <li class="nav__item"><a href="#clients" class="nav__link">Clients</a></li>
          <li class="nav__item">
            <a href="#about" class="nav__link">About</a>
          </li>
          <li class="nav__item">
            <a href="contact.php" class="nav__link">Contact</a>
          </li>
          <li class="nav__item"><a href="?logout" class="nav__link" id="logoutBtn">Logout</a></li>
          
        </ul>
      </nav>
    </div>
    <div class="header__text-box row">
      <div class="header__text">
        <h1 class="heading-primary">
          <!-- Replace the following name with your name -->
          <span>Harold Lachica</span>
        </h1>
        <!-- Put a small paragraph about yourself -->
        <p>A Web Developer based in Manila, Philippines.</p>
        <a href="contact.php" class="btn btn--pink">Hire me?</a>
      </div>
    </div>
  </header>

  <main role="main">

    <!-- ***** Work ***** -->

    <section class="work" id="work">
      <div class="row">
        <h2>My Work</h2>
        <div class="work__boxes">

          <!-- Each div with the work__box class is a project. -->

          <div class="work__box">
            <div class="work__text">
              <h3>Portfolio Template</h3>
              <p>
                A free Open Source Portfolio for anyone to use for free.
              </p>
              <ul class="work__list">
                <li>HTML</li>
                <li>SCSS</li>
                <li>JavaScript</li>
                <li>Parcel</li>
              </ul>

              <div class="work__links">
                <a href="" target="_blank" class="link__text">
                  Visit Site <span>&rarr;</span>
                </a>
                <a href="https://github.com/noob2628/portfolio" title="View Source Code" target="_blank">
                  <img src="./images/github.svg" class="work__code" alt="GitHub">
                </a>
              </div>
            </div>
            <div class="work__image-box">
              <img src="./images/project-1.png" class="work__image" alt="Project 1" />
            </div>
          </div>
          <!--
          add another work here
          -->
        </div>
      </div>
    </section>

    <!-- ***** Clients ***** -->

    <section class="client" id="clients">
      <div class="row">
        <h2>Clients</h2>
        <div class="client__logos">
          <!-- Add logos of the clients or companies you'have worked with. -->
          <img src="./images/ronjones.png" class="client__logo" alt="Company 2" />
          <img src="./images/goldengrid.png" class="client__logo" alt="Company 3" />
          <img src="./images/bullseye.png" class="client__logo" alt="Company 1" />
          <img src="./images/mighty-furnitures.png" class="client__logo" alt="Company 1" />
          <img src="./images/fastlane.png" class="client__logo" alt="Company 3" />
          <img src="./images/chippy.png" class="client__logo" alt="Company 1" />
        </div>
      </div>
    </section>

    <!-- ***** About ***** -->

    <section class="about" id="about">
      <div class="row">
        <h2>About Me</h2>
        <div class="about__content">
          <div class="about__text">
            <!-- Replace the below paragraph with info about yourself -->
            <p>
            As a self-taught web developer, 
            I embrace the challenge of learning through hands-on experience and self-guided study. 
            I am constantly exploring new technologies, 
            frameworks, and programming languages to stay up-to-date with the latest industry trends. 
            Through online resources, tutorials, and engaging in practical projects, 
            I am building a solid foundation in HTML, CSS, JavaScript, 
            and other essential web development tools. 
            My self-motivation and resourcefulness enable me to tackle complex coding problems with perseverance and creativity. 
            I am adept at breaking down tasks, troubleshooting issues, and finding efficient solutions. 
            I am continuously seeking opportunities to enhance my coding abilities, 
            improve my understanding of web development principles, and refine my skills in front-end and back-end development.
            </p>
            <!-- Provide a link to your resume -->
            <a href="#" class="btn">My Resume</a>
          </div>

          <div class="about__photo-container">
            <!-- Add a nice photo of yourself -->
            <img class="about__photo" src="./images/x.jpg" alt="" />
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- ***** Contact ***** -->

 

  <!-- ***** Footer ***** -->

  <footer role="contentinfo" class="footer">
    <div class="row">
      <!-- Update the links to point to your accounts -->
      <ul class="footer__social-links">
        <!--
        <li class="footer__social-link-item">
          <a href="https://twitter.com/nisarhassan12/" title="Link to Twitter Profile">
            <img src="./images/twitter.svg" class="footer__social-image" alt="Twitter">
          </a>
        </li>
        -->
        <li class="footer__social-link-item">
          <a href="https://github.com/noob2628" title="Link to Github Profile">
            <img src="./images/github.svg" class="footer__social-image" alt="Github">
          </a>
        </li>
        <!--
        <li class="footer__social-link-item">
          <a href="https://codepen.io/nisar_hassan" title="Link to Codepen Profile">
            <img src="./images/codepen.svg" class="footer__social-image" alt="Codepen">
          </a>
        </li>
        -->
        <li class="footer__social-link-item">
          <a href="https://www.linkedin.com/in/harold-lachica-73418b19a/">
            <img src="./images/linkedin.svg" title="Link to Linkedin Profile" class="footer__social-image" alt="Linkedin">
          </a>
        </li>
      </ul>

      <!-- If you give me some credit by keeping the below paragraph, will be huge for me 😊 Thanks. -->
      <p>
        &copy; 2023 - Template designed & developed by <a href="https://www.linkedin.com/in/harold-lachica-73418b19a" class="link">Harold</a>.
      </p>
      <div class="footer__github-buttons">
        <iframe
          src="https://ghbtns.com/github-btn.html?user=noob2628&repo=portfolio&type=watch&count=true"
          frameborder="0" scrolling="0" width="170" height="20" title="Watch Portfolio Template on GitHub">
        </iframe>
      </div>
    </div>
  </footer>

  <a href="#top" class="back-to-top" title="Back to Top">
    <img src="./images/arrow-up.svg" alt="Back to Top" class="back-to-top__image"/>
  </a>
  <script src="js/index.js"></script>
  <script src="js/logout.js"></script>
</body>

</html>