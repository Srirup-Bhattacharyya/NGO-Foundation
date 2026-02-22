<?php include './components/header.php'; ?>
</head>
<body>
  <div class="wrapper about-section">

    <?php include './components/nav.php'; ?>

    <section id="about --bs-tertiary-bg" class="nav-gap">
      <div class="about-us-image w-100 h-5 position-relative">
        <img src="assets\pictures\AboutUsBanner.png" alt="">
        <div class="position-absolute gradientbox d-flex justify-content-between align-items-center">
          <div class="parentpath text-light"><a class="text-decoration-none text-reset" href="index.php">Home</a></div>
          <i class="bi bi-chevron-right text-warning"></i>
          <div class="currentpath text-warning">About Us</div>
        </div>
      </div>
      <div class="container">
        <section class="mission-section">
          <div class="mission-container">
            <i class="bi bi-quote"></i>
            <blockquote>
              The mission lies not only in granting the wishes of children suffering 
              from critical illnesses, but Make-A-Wish® UAE also aims to strengthen 
              these children’s faith, along with their families and loved ones, when 
              they all witness the children’s wishes being granted. This will bring 
              Hope, Strength, and Joy to their young lives.
            </blockquote>
          </div>
        </section>     
      </div>
    </section>
    <div class="container about-single-text">
      <div class="row align-items-start g-4 pb-3">

        <div class="col-lg-6">
          <div class="ratio ratio-16x9 shadow">
            <iframe 
              src="https://www.youtube.com/embed/YOUR_VIDEO_ID" 
              title="Make A Wish UAE"
              allowfullscreen>
            </iframe>
          </div>
        </div>

        <div class="col-lg-6">
          <p>
            In 2010, Make-A-Wish® UAE was established under the kind patronage of Her Highness 
            Sheikha Bint Mohamed Bin Saif Al Nahyan, as a fully licensed establishment from the 
            Ministry of Social Affairs of the United Arab Emirates, only to become one of the most 
            successful organizations to date.
          </p>

          <p>
            Since 2021, Make-A-Wish® UAE has granted more than 7000 wishes for children with a 
            critical illness, with this amazing feat, it has brought happiness and joy to those 
            most vulnerable children and their families and loved ones.
          </p>

          <p>
            In order for Make-A-Wish® UAE to grant these wishes, it counts on the generous 
            donations and participation of companies, establishments, and generous individuals 
            who are kind enough to lend their support and sponsorship.
          </p>

        </div>

      </div>
      <p>
        The volunteers participate in many tasks from granting the wishes to the organization 
        and administrative requirements of running this humanitarian ship.
      </p>

      <p>
        Make-A-Wish® UAE plans to extend its area of operations to include the GCC and the 
        entire Arab world.
      </p>

      <p>
        Make-A-Wish® has become an internationally recognized organization, with new chapters opening all around the world, and the future is bright as more and more generous contributors join hand to make an innocent child’s wish come true we would like to invite you to become one of those who grant a child’s wish, those who make an innocent dream come true. To embrace the spirit of Make-A-Wish®.
      </p>
    </div>
    
    <div class="newsletter-section">
      <div class="newsletter-card">

        <h4 class="newsletter-title">Stay Updated !</h4>

        <p class="newsletter-text">
          Subscribe to receive news and announcements directly in your inbox.
        </p>

        <div class="newsletter-form">
          <input type="email" placeholder="Enter your email address">
          <button>Subscribe</button>
        </div>

        <p class="newsletter-note">
          We respect your privacy. Unsubscribe at any time.
        </p>

      </div>
    </div>
    <?php include './components/footer.php'; ?>

  </div>
</body>
</html>