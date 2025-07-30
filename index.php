
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>MUTEVU KALUMA | Election 2027</title>

  <!-- Styles -->
   
  <link rel="stylesheet" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap-utilities.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh">

  <!-- AOS Animation CSS -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet"/>
  <style>
   
  </style>
</head>
<body>

<!-- Header & Navigation -->
<header data-aos="fade-down">
  <div class="logo">
    <img src="/images/party-logo.png" alt="Party Logo" />
    <h1> ENG <span>MUTEVU</span></h1>
  </div>
  <nav>
    <ul>
      <li><a href="#home"><i class="fas fa-home"></i> Home</a></li>
      <li><a href="#about"><i class="fas fa-user"></i> About</a></li>
      <li><a href="#vision"><i class="fas fa-lightbulb"></i> Vision</a></li>
      <li><a href="#achievements"><i class="fas fa-trophy"></i> Achievements</a></li>
      <li><a href="#contact"><i class="fas fa-envelope"></i> Contact</a></li>
      <li><a href="#events" class="join-movement">upcoming events <i class="fas fa-arrow-right"></i></a></li>
    </ul>
    <div class="social-top">
      <a href="#" class="social-icon" data-tooltip="Facebook"><i class="fab fa-facebook-f"></i></a>
      <a href="#" class="social-icon" data-tooltip="Twitter"><i class="fab fa-twitter"></i></a>
      <a href="#" class="social-icon" data-tooltip="Instagram"><i class="fab fa-instagram"></i></a>
      <a href="#" class="social-icon" data-tooltip="WhatsApp"><i class="fab fa-whatsapp"></i></a>
    </div>
    <button class="menu-toggle" id="menuToggle">☰</button>
  </nav>
</header>

<!-- Hero Section -->
<section class="hero" id="home">
  <div class="slideshow-container" data-aos="zoom-in">
    <!-- Slide 1 -->
    <div class="slide active">
      <img src="images/Egnmutevu.jpg" alt="Eng Mutevu with Youth"/>
      <div class="slide-content">
        <h1>Building a Better Future for <span>Our Nation</span></h1>
        <p>Together, we can bring progress, unity, and real change in 2027.</p>
        <a href="#contact" class="btn">Join the Movement <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
    <!-- Slide 2 -->
    <div class="slide">
      <img src="images/mutevu2.jpg" alt="Eng Mutevu with Youth"/>
      <div class="slide-content">
        <h1>Empowering <span>Local Communities</span></h1>
        <p>Education, healthcare, and infrastructure for all Kenyans.</p>
        <a href="#contact" class="btn">Join the Movement <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
    <!-- Slide 3 -->
    <div class="slide">
      <img src="images/mutevu4.jpg" alt="Eng Mutevu with Youth"/>
      <div class="slide-content">
        <h1>Investing in <span>Youth & Innovation</span></h1>
        <p>Creating jobs and opportunities for the next generation.</p>
        <a href="#contact" class="btn">Join the Movement <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>

    <!-- Navigation Arrows -->
    <a class="prev" onclick="moveSlide(-1)">❮</a>
    <a class="next" onclick="moveSlide(1)">❯</a>

    <!-- Dots -->
    <div class="dots-container">
      <span class="dot active" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="about" id="about" data-aos="fade-up">
  <h2 data-aos="fade-down">About <span>ENG MUTEVU</span></h2>

  <div class="about-content">
    <div class="about-image" data-aos="fade-right">
      <img src="images/Egnmutevu.jpg" alt="Hon.mutevu"/>
    </div>
    <div class="about-text" data-aos="fade-left">
      <h3>Who I Am</h3>
      <p>
        Born in a family of 9, I'm the 8th born of the Mutevu's. My interest in Kilome leadership dates back in the year 2000 when I was the top KCPE student in Kilome Constituency. Despite my excellent performance, I was unable to join the school I had been called to, thus re-sitting my KCPE in 2001, and consequently joining Starehe Boys' Centre. From this experience, I vowed never to see a student drop out of school, and to ensure that some day I take up the leadership of our nation. The starting point is Kilome.
My desire is to tranform Kilome to a Model Constutuency where everyone thrives.
      </p>

      <h3>Development Record</h3>
      <div class="achievement-grid">
        <div class="achievement-item" data-aos="zoom-in">
          <i class="fas fa-school"></i>
          <p>Built 12 new ECDE centers</p>
        </div>
        <div class="achievement-item" data-aos="zoom-in" data-aos-delay="100">
          <i class="fas fa-clinic-medical"></i>
          <p>Upgraded 3 health centers to 24-hour facilities</p>
        </div>
        <div class="achievement-item" data-aos="zoom-in" data-aos-delay="200">
          <i class="fas fa-wifi"></i>
          <p>Installed free WiFi in 5 markets</p>
        </div>
        <div class="achievement-item" data-aos="zoom-in" data-aos-delay="300">
          <i class="fas fa-road"></i>
          <p>Tarmacked 8km of access roads</p>
        </div>
      </div>
    </div>
  </div>

 
<section class="education-section">
    <h2 class="section-title">🎓 Education - Makes the Difference</h2>
<div class="timeline">

      <div class="timeline-block" data-level="master">
        <div class="timeline-left">
          <h3 class="degree-title">🎓 Master Degree</h3>
          <span class="duration">2017 – 2021</span>
        </div>
        <div class="timeline-icon">
          <i class="fa fa-briefcase"></i>
        </div>
        <div class="timeline-right">
          <h4 class="institution">Kenyatta University</h4>
          <p>MBA Project Management. Focused on community-driven project design and sustainable implementation.</p>
        </div>
      </div>

      <div class="timeline-block" data-level="bachelor">
        <div class="timeline-left">
          <h3 class="degree-title">🎓 Bachelor Degree</h3>
          <span class="duration">2007 – 2011</span>
        </div>
        <div class="timeline-icon">
          <i class="fa fa-briefcase"></i>
        </div>
        <div class="timeline-right">
          <h4 class="institution">BSc. Electrical & Electronics Engineering</h4>
          <p>Focused on green energy innovations to empower community infrastructure and growth.</p>
        </div>
      </div>

      <div class="timeline-block" data-level="secondary">
        <div class="timeline-left">
          <h3 class="degree-title">🎓 Secondary Education & Diploma in IT</h3>
          <span class="duration">2002 – 2005; 2007</span>
        </div>
        <div class="timeline-icon">
          <i class="fa fa-briefcase"></i>
        </div>
        <div class="timeline-right">
          <h4 class="institution">Starehe Boys' Centre; CTTI</h4>
          <p>Strong academic foundation and social values that shaped my vision and discipline.</p>
        </div>
      </div>

    </div>
  </section>

  <section class="timeline-section">
  <h2>The Past, a Sneak Preview to the Future</h2>

  <div class="timeline">

    <!-- Education Entry 1 -->
    <div class="timeline-item" data-aos="fade-right">
      <div class="timeline-left">
        <h3>Head of State Commendation Nominee</h3>
        <span>2018, 2019</span>
      </div>
      <div class="timeline-icon"><i class="fas fa-graduation-cap"></i></div>
      <div class="timeline-right">
        <h4>Kilome Constituency</h4>
        <p>Working with the community and serving under the sitting MP... 100% transition of pupils to secondary schools...</p>
      </div>
    </div>

    <!-- Education Entry 2 -->
    <div class="timeline-item" data-aos="fade-right">
      <div class="timeline-left">
        <h3>Youth President</h3>
        <span>2017 – 2022</span>
      </div>
      <div class="timeline-icon"><i class="fas fa-graduation-cap"></i></div>
      <div class="timeline-right">
        <h4>Makueni Youth Bunge</h4>
        <p>The youth are a major resource... served as the President for 5 years... represented Makueni in many youth forums...</p>
      </div>
    </div>

    <!-- Education Entry 3 -->
    <div class="timeline-item" data-aos="fade-right">
      <div class="timeline-left">
        <h3>Chairman</h3>
        <span>2019 – 2022</span>
      </div>
      <div class="timeline-icon"><i class="fas fa-graduation-cap"></i></div>
      <div class="timeline-right">
        <h4>African Youth Konnect, Kenya</h4>
        <p>I head the Kenyan Chapter of the Pan-African youth movement... opening their thinking to align with the rest of the globe.</p>
      </div>
    </div>

  </div>
</section>

<!-- New Section: Leadership Timeline -->
<section class="timeline-section">
  <h2>Leadership Journey & Roles</h2>

  <div class="timeline">

    <!-- Leadership Entry 1 -->
    <div class="timeline-item" data-aos="fade-up">
      <div class="timeline-left">
        <h3>Student Leader</h3>
        <span>2015 – 2016</span>
      </div>
      <div class="timeline-icon"><i class="fas fa-user-tie"></i></div>
      <div class="timeline-right">
        <h4>SEKU University</h4>
        <p>Served as a vocal voice for ICT students and led digital inclusion campaigns in the university community.</p>
      </div>
    </div>

    <!-- Leadership Entry 2 -->
    <div class="timeline-item" data-aos="fade-up">
      <div class="timeline-left">
        <h3>Youth Ambassador</h3>
        <span>2016 – 2017</span>
      </div>
      <div class="timeline-icon"><i class="fas fa-globe-africa"></i></div>
      <div class="timeline-right">
        <h4>Youth Agenda Africa</h4>
        <p>Worked with county and regional youth councils to organize policy forums and civic education campaigns.</p>
      </div>
    </div>

  </div>
</section>

<!-- Vision Section -->
 

  <section class="agenda-section"id="vision" data-aos="fade-up"> 
  <div class="container">
    <h2 class="text-center text-white mb-5 text-uppercase">My Development Agenda</h2>


    <div class="agenda-container">
      <!-- Slide wrapper -->
      <div class="agenda-slide-wrapper" id="slider">
        <!-- Slide 1 -->
        <div class="agenda-slide">
          <div class="card">
            <div class="icon"><i class="fas fa-graduation-cap"></i></div>
            <h3>Education</h3>
            <p>Enhance access to quality education with modern facilities and trained educators.</p>
          </div>
          <div class="card">
            <div class="icon"><i class="fas fa-briefcase"></i></div>
            <h3>Jobs for Youth</h3>
            <p>Create job opportunities through ICT hubs, technical training, and entrepreneurship programs.</p>
          </div>
          <div class="card">
            <div class="icon"><i class="fas fa-chart-line"></i></div>
            <h3>Economic Empowerment</h3>
            <p>Support SMEs and community-driven businesses for sustainable economic growth.</p>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="agenda-slide">
          <div class="card">
            <div class="icon"><i class="fas fa-tint"></i></div>
            <h3>Water Access</h3>
            <p>Ensure clean water is accessible to all households through boreholes and water pipelines.</p>
          </div>
          <div class="card">
            <div class="icon"><i class="fas fa-road"></i></div>
            <h3>Infrastructure</h3>
            <p>Improve roads and transport networks to connect rural and urban areas efficiently.</p>
          </div>
          <div class="card">
            <div class="icon"><i class="fas fa-clinic-medical"></i></div>
            <h3>Healthcare</h3>
            <p>Upgrade local clinics, ensure consistent medical supplies, and hire qualified professionals.</p>
          </div>
        </div>
      </div>

      <!-- Arrows -->
      <button class="arrow-btn arrow-left" onclick="prevSlide()"><i class="fas fa-arrow-left"></i></button>
      <button class="arrow-btn arrow-right" onclick="nextSlide()"><i class="fas fa-arrow-right"></i></button>
    </div>
  </div>
</section>
 
<!-- events Section -->
 <section class="about" id="events" data-aos="fade-up">

  <?php include 'admin/events.php'; ?>
  </section>

<!-- Achievements Section -->
<section class="achievements-section" id="achievements" data-aos="fade-up">
  <h2>Key <span>Achievements</span></h2>
  <div class="achievements-container">
    <div class="achievement-card" data-aos="fade-up">
      <div class="achievement-icon"><i class="fas fa-school"></i></div>
      <h4>12 ECDE Centers</h4>
      <p>Built 12 modern Early Childhood Development centers.</p>
    </div>
    <div class="achievement-card" data-aos="fade-up" data-aos-delay="100">
      <div class="achievement-icon"><i class="fas fa-clinic-medical"></i></div>
      <h4>24-Hour Clinics</h4>
      <p>Upgraded 3 health centers to 24-hour operational status.</p>
    </div>
    <div class="achievement-card" data-aos="fade-up" data-aos-delay="200">
      <div class="achievement-icon"><i class="fas fa-wifi"></i></div>
      <h4>Free Market WiFi</h4>
      <p>Installed public WiFi in 5 major local markets.</p>
    </div>
    <div class="achievement-card" data-aos="fade-up" data-aos-delay="300">
      <div class="achievement-icon"><i class="fas fa-road"></i></div>
      <h4>8km Roads</h4>
      <p>Tarmacked 8 kilometers of feeder roads in the constituency.</p>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section class="contact" id="contact" data-aos="fade-up">
  <h2>Join the <span>Movement</span></h2>
  <div class="contact-content">
    <div class="contact-form" data-aos="fade-right">
      <form action="joinprocess.php" method="POST">
        <input type="text" name="name" placeholder="Your Name" required />
        <input type="email" name="email"placeholder="Your Email" required />
        <input type="tel" name="phone"placeholder="Your phone number" required />
        <input type="text" name="county" placeholder="County" required />
        <input type="text" name="constituency" placeholder="Constituency" required />
        <input type="text" name="location" placeholder="Location" required />
        <textarea name="message" placeholder="Your Message"></textarea>
        <button type="submit" class="btn">Send Message</button>
      </form>
    </div>
    <div class="contact-info" data-aos="fade-left">
      <h3>Connect With Us</h3>
      <p><i class="fas fa-phone"></i> +257 04 304 222</p>
      <p><i class="fas fa-envelope"></i> justusmwendwa022@gmail.com</p>
      <div class="social-links">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<!-- Footer -->
<!-- Footer -->
<!-- Footer -->
<footer class="custom-footer">
  <div class="custom-footer-content">
    <div class="custom-footer-left">
      <h4>Location</h4>
      <p><i class="fas fa-map-marker-alt"></i> Nunguni,
         Kilome Constituency, 
         Makueni County</p>
    </div>

    <div class="custom-footer-center">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#agenda">Agenda</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>

    <div class="custom-footer-right">
      <h4>Follow Us</h4>
      <div class="custom-social-icons">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </div>

  <div class="custom-footer-bottom">
    <p>&copy; 2025 ENG MUTEVU Campaign. All Rights Reserved.</p>
  </div>
</footer>

<!-- Scroll to Top Button -->
<button onclick="scrollToTop()" id="scrollTopBtn" title="Go to top">
  <i class="fas fa-chevron-up"></i>
</button>

<script>
  // Show/hide scroll to top button
  window.onscroll = function () {
    const btn = document.getElementById("scrollTopBtn");
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
      btn.style.display = "block";
    } else {
      btn.style.display = "none";
    }
  };

  // Smooth scroll to top
  function scrollToTop() {
    window.scrollTo({ top: 0, behavior: "smooth" });
  }
  
</script>


<!-- Scripts -->
<script src="script.js"></script>

<!-- AOS Script -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1200,
    once: true
  });
</script>
</body>
</html>
