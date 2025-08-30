<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
  header('location:login.php');
}
;

if (isset($_GET['logout'])) {
  unset($user_id);
  session_destroy();
  header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FitHub</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/profile.css">


</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <ion-icon name="barbell-sharp" aria-hidden="true"></ion-icon>

        <span class="span">FitHub</span>
      </a>

      <nav class="navbar" data-navbar>

        <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-sharp" aria-hidden="true"></ion-icon>
        </button>

        <ul class="navbar-list">

          <li>
            <a href="#home" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li>
            <a href="#about" class="navbar-link" data-nav-link>About Us</a>
          </li>

          <li>
            <a href="#class" class="navbar-link" data-nav-link>Classes</a>
          </li>

          <li>
            <a href="#contact" class="navbar-link" data-nav-link>Contact</a>
          </li>
          <li>
            <a href="home.php" class="navbar-link" data-nav-link>
              <div class="profile1">

                <div class="profile">
                  <?php
                  $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
                  if (mysqli_num_rows($select) > 0) {
                    $fetch = mysqli_fetch_assoc($select);
                  }
                  if ($fetch['image'] == '') {
                    echo '<img src="images/default-avatar.png">';
                  } else {
                    echo '<img src="uploaded_img/' . $fetch['image'] . '">';
                  }
                  ?>
            </a>
          </li>

        </ul>

      </nav>
    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero bg-dark has-after has-bg-image" id="home" aria-label="hero" data-section
        style="background-image: url('./assets/images/hero-bg.png')">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">
              <strong class="strong">The Best</strong>Fitness Club
            </p>

            <h1 class="h1 hero-title">Work Hard To Get Better Life</h1>

            <p class="section-text">
              The hard days are the best because that’s when champions are made, so if you push through, you can push
              through anything.
            </p>

            <a href="#class" class="btn btn-primary">Get Started</a>

          </div>

          <div class="hero-banner">

            <img src="./assets/images/home-img.png" width="660" height="753" alt="hero banner" class="w-100">

            <img src="./assets/images/hero-circle-one.png" width="666" height="666" aria-hidden="true" alt=""
              class="circle circle-1">
            <img src="./assets/images/hero-circle-two.png" width="666" height="666" aria-hidden="true" alt=""
              class="circle circle-2">

            <img src="./assets/images/heart-rate.svg" width="255" height="270" alt="heart rate"
              class="abs-img abs-img-1">
            <img src="./assets/images/calories.svg" width="348" height="224" alt="calories" class="abs-img abs-img-2">

          </div>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about" aria-label="about">
        <div class="container">

          <div class="about-banner has-after">
            <img src="./assets/images/hero-banner.png" width="660" height="648" loading="lazy" alt="about banner"
              class="w-100">

            <img src="./assets/images/about-circle-one.png" width="660" height="534" loading="lazy" aria-hidden="true"
              alt="" class="circle circle-1">
            <img src="./assets/images/about-circle-two.png" width="660" height="534" loading="lazy" aria-hidden="true"
              alt="" class="circle circle-2">

            <img src="./assets/images/fitness.png" width="650" height="154" loading="lazy" alt="fitness"
              class="abs-img w-100">
          </div>

          <div class="about-content">

            <p class="section-subtitle">About Us</p>

            <h2 class="h2 section-title">Welcome To Our Fitness Club</h2>

            <p class="section-text">
              Welcome to Home workout, your ultimate destination for transforming your fitness journey from the comfort
              of your home! We understand that busy schedules, limited access to gyms, or simply the desire for a more
              private workout environment can make it difficult to stay fit. That’s why we’ve created a platform that
              brings the gym experience right to your living room.
            </p>

            <p class="section-text">
              We believe fitness should be accessible, convenient, and fun. That’s why our workouts can be done anytime,
              anywhere, and at your own pace. With easy-to-follow video tutorials, progress tracking, and a supportive
              community, we’re here to help you stay motivated and reach your goals.
            </p>

            <div class="wrapper">

              <div class="about-coach">

                <figure class="coach-avatar">
                  <img src="./assets/images/about-coach.jpg" width="65" height="65" loading="lazy" alt="Trainer">
                </figure>

                <div>
                  <h3 class="h3 coach-name">Denis Robinson</h3>

                  <p class="coach-title">Our Coach</p>
                </div>

              </div>

              <a href="#" class="btn btn-primary">Explore More</a>

            </div>

          </div>

        </div>
      </section>





      <!-- 
        - #CLASS
      -->

      <section class="section class bg-dark has-bg-image" id="class" aria-label="class"
        style="background-image: url('./assets/images/classes-bg.png')">
        <div class="container">

          <p class="section-subtitle">Our Classes</p>

          <h2 class="h2 section-title text-center">Fitness Classes For Every Goal</h2>

          <ul class="class-list has-scrollbar">

            <li class="scrollbar-item">
              <div class="class-card">

                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                  <img src="./assets/images/class-1.jpg" width="416" height="240" loading="lazy" alt="Weight Lifting"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="title-wrapper">
                    <img src="./assets/images/class-icon-1.png" width="52" height="52" aria-hidden="true" alt=""
                      class="title-icon">

                    <h3 class="h3">
                      <a href="exercise.html" class="card-title">Home Workout</a>
                    </h3>
                  </div>

                  <p class="card-text">
                    Suspendisse nisi libero, cursus ac magna sit amet, fermentum imperdiet nisi.
                  </p>


                </div>

              </div>
            </li>



            <li class="scrollbar-item">
              <div class="class-card">

                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                  <img src="./assets/images/class-3.jpg" width="416" height="240" loading="lazy" alt="Power Yoga"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="title-wrapper">
                    <img src="./assets/images/class-icon-3.png" width="52" height="52" aria-hidden="true" alt=""
                      class="title-icon">

                    <h3 class="h3">
                      <a href="yogaex.html" class="card-title">Power Yoga</a>
                    </h3>
                  </div>

                  <p class="card-text">
                    Suspendisse nisi libero, cursus ac magna sit amet, fermentum imperdiet nisi.
                  </p>
                </div>



              </div>
            </li>

            <li class="scrollbar-item">
              <div class="class-card">

                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                  <img src="./assets/images/class-4.jpg" width="416" height="240" loading="lazy" alt="The Fitness Pack"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="title-wrapper">
                    <img src="./assets/images/class-icon-4.png" width="52" height="52" aria-hidden="true" alt=""
                      class="title-icon">

                    <h3 class="h3">
                      <a href="diet.html" class="card-title">Diet and Nutrition</a>
                    </h3>
                  </div>

                  <p class="card-text">
                    Suspendisse nisi libero, cursus ac magna sit amet, fermentum imperdiet nisi.
                  </p>


                </div>

              </div>
        </div>
        </li>

        </ul>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->



    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer" id="contact">

    <div class="section footer-top bg-dark has-bg-image" style="background-image: url('./assets/images/footer-bg.png')">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <ion-icon name="barbell-sharp" aria-hidden="true"></ion-icon>

            <span class="span">Fitlife</span>
          </a>

          <p class="footer-brand-text">
            At our fitness club, we believe in providing you with the flexibility to work out on your terms. That's why
            we're open 24/7, giving you unlimited access to our state-of-the-art facilities whenever it fits into your
            schedule. Whether you're an early riser or prefer late-night sessions, we're here for you around the clock,
            every day of the week. Your fitness goals never have to wait!</p>

          <div class="wrapper">

            <img src="./assets/images/footer-clock.png" width="34" height="34" loading="lazy" alt="Clock">

          </div>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title has-before">Our Links</p>
          </li>

          <li>
            <a href="code/video.html" class="footer-link">Instagram</a>
          </li>

          <li>
            <a href="code/video.html" class="footer-link">Facebook</a>
          </li>

          <li>
            <a href="code/video.html" class="footer-link">Twitter</a>
          </li>

          <li>
            <a href="code/video.html" class="footer-link">YouTube</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title has-before">Contact Us</p>
          </li>

          <li class="footer-list-item">
            <div class="icon">
              <ion-icon name="location" aria-hidden="true"></ion-icon>
            </div>

            <address class="address footer-link">
              Plot No.24,Sinner Road,Nashik-422010,Maharshtra,India
            </address>
          </li>

          <li class="footer-list-item">
            <div class="icon">
              <ion-icon name="call" aria-hidden="true"></ion-icon>
            </div>

            <div>
              <a href="video.html" class="footer-link">+91 9999999999</a>

              <a href="video.html" class="footer-link">+91 8888888888</a>
            </div>
          </li>

          <li class="footer-list-item">
            <div class="icon">
              <ion-icon name="mail" aria-hidden="true"></ion-icon>
            </div>

            <div>
              <a href="video.html" class="footer-link">fithub@gmail.com</a>

              <a href="video.html" class="footer-link">fithub@gmail.com</a>
            </div>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title has-before">Our Newsletter</p>
          </li>

          <li>
            <form action="" class="footer-form">
              <input type="email" name="email_address" aria-label="email" placeholder="Email Address" required
                class="input-field">

              <button type="submit" class="btn btn-primary" aria-label="Submit">
                <ion-icon name="chevron-forward-sharp" aria-hidden="true">Submit</ion-icon>
              </button>
            </form>
          </li>

        </ul>

      </div>
    </div>



  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="caret-up-sharp" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="js/main.js" defer></script>

</body>

</html>
