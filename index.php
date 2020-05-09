<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cuda - An awesome single page portfolio html template</title>
  <link rel="shortcut icon" href="resources/img/favicon.png">
  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600;700&display=swap" rel="stylesheet">
  <!-- FONT AWESOME -->
  <script src="https://kit.fontawesome.com/b154b1f296.js" crossorigin="anonymous"></script>
  <!-- VANDORS FILES -->
  <link rel="stylesheet" href="vandors/css/normalize.css">
  <link rel="stylesheet" href="vandors/css/grid.css">
  <!-- RESOURCES FILES -->
  <link rel="stylesheet" href="resources/css/style.css">
  <link rel="stylesheet" href="resources/css/responsive.css">
</head>
<body>

  <!-- START HEADER SECTION -->
  <header id="home">
    <nav>
      <div class="row">
        <a href="#">
          <img src="resources/img/logo.png" alt="Cuda" class="logo">
        </a>
        <ul class="main-nav">
          <li><a class="active" href="#home">Home</a></li>
          <li><a href="#service">Service</a></li>
          <li><a href="#team">team</a></li>
          <li><a href="#skill">skill</a></li>
          <li><a href="#portfolio">portfolio</a></li>
          <li><a href="#testimonial">testimonial</a></li>
          <li><a href="#contact">contact</a></li>
        </ul>
        <div class="mobile-menu">
          <span style="color: #fff;" onclick="openNav()">&#9776;</span>
          <div class="overlay" id="myNav">
          <a href="javaascript:void(0)" onclick="closeNav()" class="closebtn">&times;</a>
            <div class="overlay-content">
              <a onclick="closeNav()" href="#home">Home</a>
              <a onclick="closeNav()" href="#service">Service</a>
              <a onclick="closeNav()" href="#team">team</a>
              <a onclick="closeNav()" href="#skill">skill</a>
              <a onclick="closeNav()" href="#portfolio">portfolio</a>
              <a onclick="closeNav()" href="#testimonial">testimonial</a>
              <a onclick="closeNav()" href="#contact">contact</a>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <div class="row">
      <div class="hero-text-box">
        <h1>
          Hi there! We are the new kids on the block
          and we build awesome websites and mobile apps.
        </h1>
        <a href="#contact" class="btn btn-hero">work with us</a>
      </div>
    </div>
  </header>

  <!-- END HEADER SECTION -->

  <!-- START SERVICES SECTION -->

  <section class="services-section js--services-section" id="service">
    <div class="row">
      <h2>SERVICES WE PROVID</h2>
      <p class="little-description">We are working with both individuals and businesses from all over the globe
      to create awesome websites and applications.
      </p>
    </div>
    <div class="row">
      <div class="col span_1_of_4 box">
        <img src="resources/img/flag.png" alt="Flag" class="services-icon">
        <h3>Branding</h3>
        <p>Lorem ipsum dolor sit amet,
        consectetuer adipiscing elit, sed diam nonummy nibh.
        </p>
      </div>

      <div class="col span_1_of_4 box">
        <img src="resources/img/crayon.png" alt="Crayon" class="services-icon">
        <h3>Design</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem lorem ipsum</p>
      </div>

      <div class="col span_1_of_4 box">
        <img src="resources/img/gears.png" alt="Gears" class="services-icon">
        <h3>Development</h3>
        <p>At vero eos et accusamus et iusto odio dignissimos qui blanditiis praesentium.</p>
      </div>

      <div class="col span_1_of_4 box">
        <img src="resources/img/rocket.png" alt="rocket" class="services-icon">
        <h3>ROCKET SCIENCE</h3>
        <p>Et harum quidem rerum est et expedita distinctio. Nam libero tempore.</p>
      </div>
    </div>

  </section>

  <!-- END SERVICES SECTION -->

<!-- START TEAM SECTION -->

<section class="team-section" id="team">
  <div class="row">
    <h2>Meet Our Beautiful Team</h2>
    <p class="little-description">We are a small team of designers and developers, who help brands with big ideas.</p>
  </div>
  <div class="row">
    <div class="col span_1_of_4 box">
      <img src="resources/img/1.jpg" alt="ANNE HATHAWAY" class="team-member">
      <h3>ANNE HATHAWAY</h3>
      <span class="role">CEO / Marketing Guru</span>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna</p>
      <div class="social-link">
        <ul>
          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
          <li><a href="#"><i class="fas fa-envelope"></i></a></li>
        </ul>
      </div>
    </div>

    <div class="col span_1_of_4 box">
      <img src="resources/img/2.jpg" alt="ANNE HATHAWAY" class="team-member">
      <h3>Kate Upton</h3>
      <span class="role">Creative Director</span>
      <p>Duis aute irure dolor in in voluptate velit esse cillum dolore fugiat nulla pariatur. Excepteur sint occaecat non diam proident.</p>
      <div class="social-link">
        <ul>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
          <li><a href="#"><i class="fas fa-envelope"></i></a></li>
        </ul>
      </div>
    </div>

    <div class="col span_1_of_4 box">
      <img src="resources/img/3.jpg" alt="ANNE HATHAWAY" class="team-member">
      <h3>Olivia Wild</h3>
      <span class="role">Lead Designer</span>
      <p>Nemo enim ipsam voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem .</p>
      <div class="social-link">
        <ul>
          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
          <li><a href="#"><i class="fas fa-envelope"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="col span_1_of_4 box">
      <img src="resources/img/4.jpg" alt="ANNE HATHAWAY" class="team-member">
      <h3>Ashley Greene</h3>
      <span class="role">SEO / Developer</span>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
      <div class="social-link">
        <ul>
          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fas fa-envelope"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- END TEAM SECTION -->

<!-- START SKILLS SECTION -->

<section class="skill-section" id="skill">
  <div class="row">
    <h2>We got skills</h2>
    <p class="little-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed do eiuamod tempor incididunt ut labore et dolore magna aliqua</p>
  </div>
  <div class="row">
    <div class="col span_1_of_4 box">
      <svg class="radial-progress web-design" data-percentage="90" viewBox="0 0 80 80">
          <circle class="incomplete" cx="40" cy="40" r="35"></circle>
          <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
          <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">90%</text>
      </svg>
      <h3>web design</h3>
    </div>

    <div class="col span_1_of_4 box">
      <svg class="radial-progress html-css" data-percentage="75" viewBox="0 0 80 80">
          <circle class="incomplete" cx="40" cy="40" r="35"></circle>
          <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
          <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">75%</text>
      </svg>
      <h3>html / css</h3>
    </div>

    <div class="col span_1_of_4 box">
      <svg class="radial-progress graphic-design" data-percentage="70" viewBox="0 0 80 80">
          <circle class="incomplete" cx="40" cy="40" r="35"></circle>
          <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
          <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">70%</text>
      </svg>
      <h3>graphic design</h3>
    </div>

    <div class="col span_1_of_4 box">
      <svg class="radial-progress ui-ux" data-percentage="85" viewBox="0 0 80 80">
          <circle class="incomplete" cx="40" cy="40" r="35"></circle>
          <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
          <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">85%</text>
      </svg>
      <h3>ui / ux</h3>
    </div>
  </div>

</section>

<!-- END SKILLS SECTION -->

<!-- START PORTFOLIO SECTION -->

<section class="portfolio-section" id="portfolio">
<div class="row">
  <h2>our portfolio</h2>
  <p class="little-description">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet
 consectetur, adipisci velit, sed quia non numquam </p>
</div>
<div class="row">
  <div class="portfolio-filter">
    <button type="button" data-filter="all" >all</button>
    <button type="button" data-filter=".web" >web</button>
    <button type="button" data-filter=".apps" >apps</button>
    <button type="button" data-filter=".icons" >icons</button>
  </div>
</div>
<div class="row container">
  <div class="col span_1_of_2 mix apps box">
    <img src="resources/img/portfolio1.png" alt="Isometric Perspective Mock-Up" class="portfolio-image">
    <h4>Isometric Perspective Mock-Up</h4>
  </div>
  <div class="col span_1_of_2 mix apps web box">
    <img src="resources/img/portfolio2.png" alt="Isometric Perspective Mock-Up" class="portfolio-image">
    <h4>Time Zone App U</h4>
  </div>
  <div class="col span_1_of_2 mix icons box">
    <img src="resources/img/portfolio3.png" alt="Isometric Perspective Mock-Up" class="portfolio-image">
    <h4>Viro Media Players U</h4>
  </div>
  <div class="col span_1_of_2 mix icons web apps box">
    <img src="resources/img/portfolio4.png" alt="Isometric Perspective Mock-Up" class="portfolio-image">
    <h4>Blog / Magazine Flat UI  </h4>
  </div>
  <!-- HIDDEN LOAD MORE BUTTON
  <div class="row">
    <a href="#" class="btn btn-load-more">load more project</a>
  </div>-->
</div>
</section>
<!-- END PORTFOLIO SECTION -->

<!-- START TESTIMONIAL SECTION -->
<section class="testimonial" id="testimonial">
  <div class="row">
    <h2>WHAT POEPLE SAY ABOUT US</h2>
    <p class="little-description">
       Our clients love us!
    </p>
  </div>
  <div class="row">
    <div class="col span_1_of_2 box">
      <div class="client-photo">
        <img src="resources/img/1.jpg" alt="Chanel Iman">
      </div>
      <div class="client-review">
         <p class="little-description">"Nullam dapibus blandit orci, viverra gravida dui lobortis eget. Maecenas fringilla urna eu nisl scelerisque.”</p>
         <h3>Chanel Iman</h3>
         <span class="role">CEO of Pinterest</span>
      </div>
    </div>
    <div class="col span_1_of_2 box">
      <div class="client-photo">
        <img src="resources/img/2.jpg" alt="Chanel Iman">
      </div>
      <div class="client-review">
         <p class="little-description">"Nullam dapibus blandit orci, viverra gravida dui lobortis eget. Maecenas fringilla urna eu nisl scelerisque.”</p>
         <h3>Chanel Iman</h3>
         <span class="role">CEO of Pinterest</span>
      </div>
    </div>
    <div class="col span_1_of_2 box">
      <div class="client-photo">
        <img src="resources/img/3.jpg" alt="Chanel Iman">
      </div>
      <div class="client-review">
         <p class="little-description">"Nullam dapibus blandit orci, viverra gravida dui lobortis eget. Maecenas fringilla urna eu nisl scelerisque.”</p>
         <h3>Chanel Iman</h3>
         <span class="role">CEO of Pinterest</span>
      </div>
    </div>
    <div class="col span_1_of_2 box">
      <div class="client-photo">
        <img src="resources/img/4.jpg" alt="Chanel Iman">
      </div>
      <div class="client-review">
         <p class="little-description">"Nullam dapibus blandit orci, viverra gravida dui lobortis eget. Maecenas fringilla urna eu nisl scelerisque.”</p>
         <h3>Chanel Iman</h3>
         <span class="role">CEO of Pinterest</span>
      </div>
    </div>
  </div>
</section>
<!-- END TESTIMONIAL SECTION -->

<!-- START CONTACT SECTION -->
<section class="contact-section" id="contact">
  <div class="row">
    <h2>get in touch</h2>
    <p class="little-description">1600 Pennsylvania Ave NW, Washington, DC 200500, United States of America. Tel: (202) 456- 1111</p>
  </div>
  <div class="row">
    <form action="https://formspree.io/mijanur034@gmail.com" method="post">
      <div class="row">
        <div class="col span_1_of_2">
          <input type="text" name="Name" value="" placeholder="Your Name *" required>
        </div>
        <div class="col span_1_of_2">
          <input type="text" name="Email" value="" placeholder="Your Email *" required>
        </div>
      </div>
      <div class="row">
        <textarea name="Message" rows="8" cols="80" placeholder="Your Message *" required ></textarea>
      </div>
      <div class="row">
        <input type="Submit" value="SEND MESSAGE" class="btn btn-submit">
      </div>
    </form>
  </div>
</section>
<!-- END CONTACT SECTION -->
<!-- START FOOTER SECTION -->
<footer class="footer-section">
  <div class="row">
    <ul>
      <li><a href="#">Facebook</a></li>
      <li><a href="#">twitter</a></li>
      <li><a href="#">Google+</a></li>
      <li><a href="#">LinkedIn</a></li>
      <li><a href="#">Behance</a></li>
      <li><a href="#">Dribble</a></li>
      <li><a href="#">GitHub</a></li>
    </ul>
  </div>
</footer>
<!-- END FOOTER SECTION -->

<!-- JS SCRIPTS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="vandors/js/html5shiv.min.js"></script>
<script src="vandors/js/respond.min.js"></script>
<script src="vandors/js/selectivizr-min.js"></script>
<script src="vandors/js/jquery.waypoints.min.js"></script>
<script src="vandors/js/mixitup.min.js"></script>
<script src="resources/js/main.js"></script>
</body>
</html>
