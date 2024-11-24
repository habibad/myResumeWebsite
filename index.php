<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Header</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
    <!-- Navigation Bar -->
    <header class="navbar">
        <div class="icon-box">
            <img src="images/coding (1).png" alt="Professional Icon">
        </div>
        <nav>
            <ul>
                <li ><a href="#home" >Home</a></li>
                <li><a href="#status">Status</a></li>
                <li><a href="#about-section" >About</a></li>
                <li><a href="#services" >Services</a></li>
                <li><a href="#portfolio" >Portfolio</a></li>
                <li><a href="#contact" >Contact</a></li>
            </ul>
        </nav>
    </header>
    <script src="hoverScript.js"></script>
    <!-- Header Section -->
    <section class="hero" id="home">
    <script src="hoverScript.js"></script>
        <div class="hero-content">
            <p class="intro">HELLO! MYSELF is Anik</p>
            <h1>Creative <span class="highlight">UI/UX</span> Designer & Developer</h1>
            <div class="buttons">
                <a href="#hire" class="btn hire">Hire me</a>
                <a href="#download" class="btn download">Download CV</a>
            </div>
        </div>
    </section>


    <script src="Script.js"></script>

    <section class="stats-section" id="status">
    
    <div class="stat">
      <div class="icon">
        <img src="images/verification (1).png" alt="Projects Icon">
      </div>
      <h2>20</h2>
      <p>PROJECT COMPLETE</p>
    </div>
    <div class="stat">
      <div class="icon">
        <img src="images/achievements.png" alt="Clients Icon">
      </div>
      <h2>10</h2>
      <p>HAPPY CLIENTS</p>
    </div>
    <div class="stat">
      <div class="icon">
        <img src="images/verified.png" alt="Coffee Icon">
      </div>
      <h2>15</h2>
      <p>CUPS OF COFFEE</p>
    </div>
    <div class="stat">
      <div class="icon">
        <img src="images/project.png" alt="Experience Icon">
      </div>
      <h2>780</h2>
      <p>YEARS EXPERIENCED</p>
    </div>
  </section>

  <!-- about section -->
  <section class="about-section" id="about-section">
  <script src="hoverScript.js"></script>
    <div class="about-container">
      <div class="about-image">
        <img src="images/about-1.jpg" alt="Profile Picture">
      </div>
      <div class="about-content">
        <h4>MY INTRO</h4>
        <h2>About Me</h2>
        <p>Hiiii! I am Md Anikur Rahaman, is a Computer Science and Engineering graduate with expertise 
          in software development, machine learning, and research. Proficient in Python, Java, and Flask, I
           deployed advanced ML models and contributed to internationally recognized research. With strong 
          adaptability and teamwork, I excels in delivering innovative solutions.</p>
        <table class="personal-info">
          <tr>
            <td><strong>Name:</strong></td>
            <td style="color: #a5a5a5">Md Anikur Rahaman</td>
          </tr>
          <tr>
            <td><strong>Date of birth:</strong></td>
            <td style="color: #a5a5a5">September 06, 2000</td>
          </tr>
          <tr>
            <td ><strong>Address:</strong></td>
            <td style="color: #a5a5a5">Banasree, B block 3 NO Road, Dhaka</td>
          </tr>
          <tr>
            <td><strong>Zip code:</strong></td>
            <td style="color: #a5a5a5">1212</td>
          </tr>
          <tr>
            <td><strong>Email:</strong></td>
            <td style="color: #a5a5a5">ha4168108@gmail.com</td>
          </tr>
          <tr>
            <td><strong>Phone:</strong></td>
            <td style="color: #a5a5a5">+880 1774-225956</td>
          </tr>
        </table>
        <div class="hobbies">
          <span class="hobby">🎶 Music</span>
          <span class="hobby">🌍 Travel</span>
          <span class="hobby">🎬 Movie</span>
          <span class="hobby">⚽ Sports</span>
        </div>
      </div>
    </div>
  </section>

  <section class="skills" id="skills">
  <script src="hoverScript.js"></script>
    <div class="skills-container">
      <div class="text-contains">
      <h4>skill</h4>
      <h2>My Skills</h2>
      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
      </div>
      <!-- <h4>skill</h4>
      <h2>My Skills</h2>
      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> -->
      <div class="skills-grid">
        <!-- Skill card -->
        <div class="skill-card">
          <div class="progress-circle" data-percentage="88">
            <span>88%</span>
          </div>
          <h3>CSS</h3>
          <table style="width: 100%; text-transform: capitalize; font-size: 14px">
            <tr >
              <td Style="width: 50%; text-align: left;">last 3 YEARS 60% </td>
              <td style="width: 50%; text-align: right; border-style: solid; border-width: 0px 0px 0px 5px;border-color: #ffc107">28% last week</td>
            </tr>
          </table>
        </div>
        <div class="skill-card">
          <div class="progress-circle" data-percentage="90">
            <span>90%</span>
          </div>
          <h3>HTML</h3>
          <table style="width: 100%; text-transform: capitalize; font-size:12px">
            <tr >
              <td Style="width: 50%; text-align: left;">last 4 YEARS 68% </td>
              <td style="width: 50%; text-align: right; border-style: solid; border-width: 0px 0px 0px 5px;border-color: #ffc107">22% last Month</td>
            </tr>
          </table>
        </div>
        <div class="skill-card">
          <div class="progress-circle" data-percentage="50">
            <span>50%</span>
          </div>
          <h3>jQuery</h3>
          <table style="width: 100%; text-transform: capitalize; font-size:12px">
            <tr >
              <td Style="width: 50%; text-align: left;">last 2 YEARS 40% </td>
              <td style="width: 50%; text-align: right; border-style: solid; border-width: 0px 0px 0px 5px;border-color: #ffc107">10% last Month</td>
            </tr>
          </table>
        </div>
        <div class="skill-card">
          <div class="progress-circle" data-percentage="90">
            <span>90%</span>
          </div>
          <h3>JavaScript</h3>
          <!-- <p> <strong style = "font-size: 25px">70%</strong> Last week &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong style = "font-size: 25px">28%</strong> Last month</p> -->
          <!-- <p>60% Last month</p> -->
          <table style="width: 100%; text-transform: capitalize; font-size:12px">
            <tr >
              <td Style="width: 50%; text-align: left;">last 2 YEARS 68% </td>
              <td style="width: 50%; text-align: right; border-style: solid; border-width: 0px 0px 0px 5px;border-color: #ffc107">12% last Month</td>
            </tr>
          </table>
        </div>
        <div class="skill-card">
          <div class="progress-circle" data-percentage="87">
            <span>87%</span>
          </div>
          <h3>PHP</h3>
          <table style="width: 100%; text-transform: capitalize; font-size:12px">
            <tr >
              <td Style="width: 50%; text-align: left;">last 4 years 68% </td>
              <td style="width: 50%; text-align: right; border-style: solid; border-width: 0px 0px 0px 5px;border-color: #ffc107">19% last Month</td>
            </tr>
          </table>
        </div>
        <div class="skill-card">
          <div class="progress-circle" data-percentage="60">
            <span>60%</span>
          </div>
          <h3>Java</h3>
          <table style="width: 100%; text-transform: capitalize; font-size:12px">
            <tr >
              <td Style="width: 50%; text-align: left;">last 3 years 40% </td>
              <td style="width: 50%; text-align: right; border-style: solid; border-width: 0px 0px 0px 5px;border-color: #ffc107">20% last Month</td>
            </tr>
          </table>
        </div>
      </div>


      

      
    </div>
  </section>
  <script src="Script.js"></script>



  <section class="services-section">
  <script src="hoverScript.js"></script>
        <div class="services-container">
          <div class="service-text-contains">
            <p class="intro-text">I AM GREAT AT</p>
            <h2 class="section-title">We do awesome services for our clients</h2>
            <p class="section-subtitle">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>

          </div>
            <div class="services-grid">
                <div class="service-box">
                    <div class="icon">🌐</div>
                    <h3>Ui/ux Designer</h3>
                    <p>UI/UX design combines visual aesthetics and user-centered functionality to create intuitive and seamless digital experiences.</p>
                </div>
                <div class="service-box">
                    <div class="icon">💻</div>
                    <h3>Android App</h3>
                    <p>Android app development involves designing and coding applications for Android devices, ensuring functionality, performance, and user engagement.</p>
                </div>
                <div class="service-box">
                    <div class="icon">🔧</div>
                    <h3>Web Development</h3>
                    <p>Web development integrates design and coding to build functional, responsive, and visually engaging websites or applications.</p>
                </div>
                <div class="service-box">
                    <div class="icon">🎨</div>
                    <h3>ML Model Deployment</h3>
                    <p>ML model deployment transforms trained models into scalable, production-ready solutions for real-world applications.</p>
                </div>
                <div class="service-box">
                    <div class="icon">🏷️</div>
                    <h3>Branding</h3>
                    <p>A small river named Duden flows by their place and supplies.</p>
                </div>
                <div class="service-box">
                    <div class="icon">🔖</div>
                    <h3>Icon Design</h3>
                    <p>A small river named Duden flows by their place and supplies.</p>
                </div>
                <div class="service-box">
                    <div class="icon">🖌️</div>
                    <h3>Graphic Design</h3>
                    <p>A small river named Duden flows by their place and supplies.</p>
                </div>
                <div class="service-box">
                    <div class="icon">📈</div>
                    <h3>SEO</h3>
                    <p>A small river named Duden flows by their place and supplies.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-section" id = "blog">
    <h4>blog</h4>
    <h1 id="blog-title">Our Blog</h1>
    <p id="blog-description">
        Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.
    </p>
    <div class="blogs-grid">
        <div class="blog-container" id="blog-container">
            //Blog cards will be dynamically inserted here
        </div>
    </div>
</section>

<script src="Script.js"></script>


    <script src="Scripts.js"></script>

    <section id="contact" class="contact-section">
    <script src="hoverScript.js"></script>
        <h2 class="contact-title">Have a Project?</h2>
        <p class="contact-subtitle">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
        <div class="contact-container">
            <form class="contact-form" action="application.php" method="POST" id="contact-form">
                <div class="form-row">
                    <input class="form-input" type="text" name="name" placeholder="Your Name" required>
                    <input class="form-input" type="email" name="email" placeholder="Your Email" required>
                </div>
                <input class="form-input" type="text" name="subject" placeholder="Subject" required>
                <textarea class="form-textarea" name="message" placeholder="Message" rows="5" required></textarea>
                <button class="form-button" type="submit">Send Message</button>
            </form>
            <div class="contact-info" id="myInfo">
                <!-- <div class="info-item">
                    <strong>Address:</strong> Banasree, B block 3 No Road, Dhaka-1212
                </div>
                <div class="info-item">
                    <strong>Phone:</strong> +880 1774-225956
                </div>
                <div class="info-item">
                    <strong>Email:</strong> ha4168108@gmail.com
                </div>
                <div class="info-item">
                    <strong>Website:</strong> localhost::/portfolio/index.php
                </div>
                try to dynamically allocate the data -->
            </div>
            <script src="my-info.js"></script>
        </div>
    </section>

    <section class="footer">
      <div class="container">
      </div>
    </section>
    

    <footer class="footer">
    <script src="hoverScript.js"></script>
        <div class="footer-container">
            <div class="footer-column">
                <h3>Lets talk about</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <a href="#" class="btn">Learn more</a>
            </div>
            <div class="footer-column">
                <h3>Links</h3>
                <ul>
                    <li><a href="#"> > Home</a></li>
                    <li><a href="#"> > About</a></li>
                    <li><a href="#"> > Services</a></li>
                    <li><a href="#"> > Projects</a></li>
                    <li><a href="#"> > Contact</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Services</h3>
                <ul>
                    <li><a href="#"> > Web Design</a></li>
                    <li><a href="#"> > Web Development</a></li>
                    <li><a href="#"> > Business Strategy</a></li>
                    <li><a href="#"> > Data Analysis</a></li>
                    <li><a href="#"> > Graphic Design</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Have a Questions?</h3>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Banasree, B block 3 no Road, Dhaka-1212</li>
                    <li><i class="fas fa-phone"></i> +880 1774-225956</li>
                    <li><i class="fas fa-envelope"></i> ha4168108@gmail.com</li>
                </ul>
                <div class="social-links">
                    <a href="https://www.facebook.com/anik.abir.35/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.linkedin.com/in/habib-adnan-1627331ba/"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/habibad"><i class="fab fa-github"></i></a>
                    <a href="https://www.hackerrank.com/profile/ha4168108"><i class="fab fa-hackerrank"></i></a>
                    <a href="https://codeforces.com/profile/Md_Anikur_Rahaman"><i class="fas fa-code"></i> </a>
                    <a href="https://leetcode.com/u/anikur_rahaman/"><i class="fas fa-brain"></i> </a>
                    <a href="https://judge.beecrowd.com/en/profile/401274"><i class="fas fa-clipboard-list"></i> </a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Copyright ©2024 All rights reserved | This Portfolio is made by ❤️ by Anik</p>
        </div>
    </footer>

</body>
</html>
