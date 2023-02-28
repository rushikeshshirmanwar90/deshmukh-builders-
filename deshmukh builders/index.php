<?php
include 'components/connect.php';

if (isset($_POST['review'])) {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $msg = $_POST['msg'];

  $sql = "INSERT INTO `review`(`name`, `des`, `phone`) VALUES ('$name','$msg','$phone');";
  $upload = mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Deshmukh builders</title>

  <!-- online style link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  <!-- custom css file link  -->
  <link rel="stylesheet" href="css/main_style.css" />
  <link rel="stylesheet" href="css/reviewForm.css" />
  <link rel="stylesheet" href="css/project.css" />
  <link rel="stylesheet" href="css/new_navbar.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="../../css/project.css">

</head>

<body>
  <!-- header section starts  -->
  <header class="header">
    <a href="#" class="logo"><img src="images/Deshmukha Builders logo-1.png" alt=""></a>

    <nav class="navbar">
      <a href="#">home</a>
      <a href="#about">about</a>
      <a href="#contact">contact</a>
      <a href="#reviews">reviews</a>
      <a href="components/projects/onGoingProject.php">On-Going Project</a>
      <a href="components/projects/complitedProject.php">Completed Project</a>
    </nav>

    <div class="icons">
      <div id="menu-btn" class="fas fa-bars"></div>
      <div style="display: none" id="info-btn" class="fas fa-info-circle"></div>
      <div style="display: none" id="search-btn" class="fas fa-search"></div>
      <div style="display: none" id="login-btn" class="fas fa-user"></div>
    </div>
  </header>


  <div style="display: none" class="contact-info">
    <div id="close-contact-info" class="fas fa-times"></div>

    <div class="info">
      <i class="fas fa-phone"></i>
      <h3>phone number</h3>
      <p>+123-456-7890</p>
      <p>+111-222-3333</p>
    </div>

    <div class="info">
      <i class="fas fa-envelope"></i>
      <h3>email address</h3>
      <p>shaikhanas@gmail.com</p>
      <p>anasbhai@gmail.com</p>
    </div>

    <div class="info">
      <i class="fas fa-map-marker-alt"></i>
      <h3>office address</h3>
      <p>mumbai, india - 400104</p>
    </div>

    <div class="share">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
    </div>
  </div>

  <!-- header section ends -->

  <!-- home section starts  -->

  <section class="home" id="home">
    <div class="swiper home-slider">
      <div class="swiper-wrapper">
        <section class="swiper-slide slide" style="background: url(images/bg-1.jpg) no-repeat">
          <div class="content">
            <h3>we provide best service</h3>
          </div>
        </section>

        <section class="swiper-slide slide" style="background: url(images/bg-2.jpg) no-repeat">
          <div class="content">
            <h3>making dream come to life</h3>
          </div>
        </section>

        <section class="swiper-slide slide" style="background: url(images/bg-3.jpg) no-repeat">
          <div class="content">
            <h3>from concept to creation</h3>
          </div>
        </section>
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </section>

  <!-- home section ends -->

  <!-- about section starts  -->

  <section class="about" id="about">
    <h1 class="heading">about us</h1>

    <div class="row">
      <div class="video">
        <video src="images/about-vid.mp4" loop muted autoplay></video>
      </div>

      <di class="content">
        <h3>We will provide you the best work which you dreamt for!</h3>
        <p>
          Welcome to our construction website! We are a dedicated team of professionals with years of experience in the construction industry. Our mission is to provide high-quality construction services to our clients, while ensuring their satisfaction and meeting their needs. We pride ourselves on our attention to detail, our commitment to safety, and our ability to complete projects on time and within budget. Our team consists of skilled and knowledgeable architects, engineers, project managers
        </p>
      </di>
    </div>
  </section>

  <!-- about us section end -->


  <!-- contact us section start -->

  <section class="contact" id="contact">
    <h1 class="heading">contact us</h1>

    <div class="row">
      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235.5233203434022!2d77.30622360084982!3d19.178898635073207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd1d68c7d525875%3A0x79b572ef6d3296f5!2sAbhyudaya%20Co-Op.%20Bank%20Ltd.!5e0!3m2!1sen!2sin!4v1676740980537!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>

      <form method="post" action="https://formspree.io/f/mlekjkwp">
        <h3>get in touch</h3>
        <input type="text" name="name" placeholder="name" class="box" />
        <input type="email" name="email" placeholder="email" class="box" />
        <input type="number" name="phone" placeholder="phone" class="box" />
        <textarea name="message" placeholder="message" class="box" id="" cols="30" rows="10"></textarea>
        </a> <input type="submit" value="send message" class="btn" />
        <a href="https://wa.me/919823078702"><input class="btn" type="button" value="Contact us on WhatsApp"></a>
      </form>
    </div>
  </section>

  <!-- contact section ends -->

  <!-- review us section start -->

  <section id="reviews" class="reviews">
    <div style="display: flex; margin: 6rem 0; flex-direction: column">
      <h1 class="heading"></h1>
      <p style="
            font-size: 1.9rem;
            padding-top: 1rem;
            display: inline-block;
            margin-top: 1rem;
            padding: 1rem 3rem;
            background: var(--black);
            color: var(--white);
            font-size: 1.7rem;
            text-transform: capitalize;
            -webkit-transition: 0.2s linear;
            transition: 0.2s linear;
          " class="btn-text">
        Reviews us Now
      </p>
    </div>

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
      <div class="container" style="margin-bottom: 3rem;">
        <div class="content">
          <div class="right-side">
            <div class="topic-text">Review us now</div>
            <form action="#">
              <div class="input-box">
                <input type="text" required placeholder="Enter your name" name="name" />
              </div>
              <div class="input-box">
                <input type="number" required placeholder="Enter your phone number" name="phone" />
              </div>
              <textarea name="msg" required id="" cols="30" rows="10" style="
                    width: 605 px;
                    height: 244px;
                    background-color: #f0f1f8;
                    font-size: 1.7rem;
                  " class="box" placeholder="Enter Your Review..."></textarea>
              <div class="">
                <input type="submit" name="review" class="btn" value="Send Now" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </form>

    <h1 class="heading">clients reviews</h1>

    <div class="swiper reviews-slider">
      <div class="swiper-wrapper">
        <?php
        $select = "SELECT * FROM review ORDER BY id desc";
        $display = mysqli_query($conn, $select);
        while ($row = mysqli_fetch_assoc($display)) {
        ?>
          <div class="swiper-slide slide">
            <p>
              <?php
              echo $row['des'];
              ?>
            </p>
            <div class="user">
              <div class="info">
                <h3><?php echo $row['name'] ?></h3>
              </div>
            </div>
          </div>
        <?php }; ?>
      </div>
    </div>
  </section>

  <!-- review us section ends -->


  <!-- footer section starts  -->
  <footer class="footer">
    <div class="container1">
      <div class="row">
        <div class="footer-col">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="../../index.php">home</a></li>
            <li><a href="../../index.php">About us</a></li>
            <li><a href="../../index.php">Review us</a></li>
            <li><a href="../../index.php">contact us</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Our Project</h4>
          <ul>
            <li><a href="#">Complited project</a></li>
            <li><a href="onGoingProject.php">onGoing project</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>contact us</h4>
          <ul>
            <li>
              <a href="https://www.google.com/maps/place/Bhagya+nagar,+Irrigation+Colony,+Peer+Burhan+Nagar,+Nanded,+Maharashtra+431602/@19.1782164,77.3062902,17z/data=!3m1!4b1!4m6!3m5!1s0x3bd1d68b58a20959:0xce198fce0d6a8004!8m2!3d19.1782861!4d77.3084353!16s%2Fg%2F1tgm19lc?coh=164777&entry=tt" target="_blank">
                <i class="bx bxs-map"><span> Bhagya nager Nanded</span></i></a>
            </li>
            <li>
              <a href="https://wa.me/917743969694">
                <i class="bx bxs-phone"><span> +91 7743969694</span></i></a>
            </li>
            <li>
              <a href="mailto:rushikeshshrimanwar@gmail.com">
                <i class="bx bxs-envelope"><span>rushikeshshrimanwar@gmail.com</span></i></a>
            </li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
      </div>
    </div>

  </footer>
  <div class="credit">
    <p>
      <big>Copyright © 2023 Deshmukh builders</big>
      <br />
      <small style="font-size: 10px">
        Created By The
        <a href="https://www.instagram.com/wddesigners/" target="_blank"><span class="wow">WOW Designers</span></a>
      </small>
    </p>
  </div>


  <!-- footer section ends -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

  <!-- custom js file link  -->
  <script src="js/script.js"></script>

  <script>
    lightGallery(document.querySelector(".projects .box-container"));
  </script>
</body>

</html>