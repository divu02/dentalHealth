<?php

$conn = mysqli_connect('localhost','root','','mywebsite') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact-info`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}

?>



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Font -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


  <title>MyProject</title>
  <!-- Bootstrap icon-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>


  <header class="header fixed-top">
    <div class="container ">



      <div class="row align-items-center justify-content-between">
        <a href="#" class="logo navbar-brand ">Ortho<span class="logo1">Care.</span></a>

        <nav class="nav navbar-expand-lg">

          <li class="nav-item">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#reviews">Reviews</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>



        </nav>
        <a href="#contact" class="btn">Make Appointment</a>
        <div id="menu-btn" class="fas fa-bars"></div>

      </div>
    </div>
  </header>
  <!-- header section ends -->

  <!-- home section starts -->
  <section class="home" id="home">
    <div class="container">
      <div class="row  min-vh-100  align-items-center">
        <div class="content  text-center text-md-left ">
          <h3>Healthcare for your family.</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium itaque, quasi aliquam alias tempora
            voluptatibus.</p>
          <a href="#contact" class="btn">Make Appointment</a>
        </div>
      </div>
    </div>
  </section>
  <!-- home section endss -->



  <!-- About section starts -->
  <section class="about" id="about">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 image">
          <img src="images/about-img.jpg" class="w-100 mb-5 mb-md-0 " alt="">
        </div>
        <div class="col-md-6 content">
          <span>About us</span>
          <h3>True Healthcare For Your Family</h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit harum iusto velit id numquam provident,
            cumque voluptates voluptatem nam maiores cupiditate! Repellendus sapiente aliquam soluta adipisci culpa
            dolorem ullam omnis, quia sapiente.</p>
          <a href="#contact" class="btn">Make Appointment</a>
        </div>
      </div>
    </div>
  </section>

  <!-- About section Ends -->

  <!-- Services section starts -->
  <section class="services" id="services">
    <h1 class="heading">Our Services</h1>
    <div class="box-container container">
      <div class="box">
        <img src="images/icon-1.svg" alt="">
        <h3>Alignment specialist</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
      </div>
      <div class="box">
        <img src="images/icon-2.svg" alt="">
        <h3>Cosmetic dentistry</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
      </div>
      <div class="box">
        <img src="images/icon-3.svg" alt="">
        <h3>Oral hygiene experts</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
      </div>
      <div class="box">
        <img src="images/icon-4.svg" alt="">
        <h3>Root canal specialist</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
      </div>
      <div class="box">
        <img src="images/icon-5.svg" alt="">
        <h3>Live dental advisory</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
      </div>
      <div class="box">
        <img src="images/icon-6.svg" alt="">
        <h3>Cavity inspection</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
      </div>
    </div>
  </section>

  <!-- Services section ends -->

  <!-- process section starts -->

  <section class="process">
    <h1 class="heading">Work Process</h1>
    <div class="box-container container">
      <div class="box">
        <img src="images/process-1.png" alt="">
        <h3>Cosmetic Dentistry</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
      </div>
      <div class="box">
        <img src="images/process-2.png" alt="">
        <h3>Pediatric Dentistry</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
      </div>
      <div class="box">
        <img src="images/process-3.png" alt="">
        <h3>Dental Implants</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
      </div>
    </div>
  </section>
  <!-- process section endss -->

  <!-- Reviews section starts -->

  <section class="reviews" id="reviews">
    <h1 class="heading">Satisfied Clients</h1>
    <div class="box-container container">
      <div class="box">
        <img src="images/pic-1.png" alt="">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id,
          laboriosam asperiores iure omnis alias?</p>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>john deo</h3>
        <span>satisfied client</span>
      </div>
      <div class="box">
        <img src="images/pic-2.png" alt="">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id,
          laboriosam asperiores iure omnis alias?</p>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>john deo</h3>
        <span>satisfied client</span>
      </div>
      <div class="box">
        <img src="images/pic-3.png" alt="">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id,
          laboriosam asperiores iure omnis alias?</p>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>john deo</h3>
        <span>satisfied client</span>
      </div>

    </div>
  </section>
  <!-- Reviews section ends -->

  <!-- Contact section starts -->

  <section class="contact" id="contact">
    <h1 class="heading">Make Appointment</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>
      <span>Your name :</span>
      <input type="text" name="name" placeholder="Enter your name" class="box" required>
      <span>E-mail :</span>
      <input type="email" name="email" placeholder="Enter your email" class="box" required>
      <span>Mobile Number :</span>
      <input type="number" name="number" placeholder="Enter your number" class="box" required>
      <span>Appointment Date :</span>
      <input type="datetime-local" name="date" class="box" required>
      <input type="submit" value="Make appointment" name="submit" id="" class="btn">


    </form>
  </section>
  <!-- Contact section endss -->

  <!-- Footer section starts -->
  <section class="footer">
    <div class="box-container container">
      <div class="box">
        <i class="fas fa-phone"></i>
        <h3>phone number</h3>
        <p>+123-456-7890</p>
        <p>+111-222-3333</p>
      </div>
      <div class="box">
        <i class="fas fa-map-marker-alt"></i>
        <h3>our address</h3>
        <p>mumbai, india - 400104</p>
      </div>
      <div class="box">
        <i class="fas fa-clock"></i>
        <h3>opening hours</h3>
        <p>00:07am to 10:00pm</p>
      </div>
      <div class="box">
        <i class="fas fa-envelope"></i>
        <h3>email address</h3>
        <p>shaikhanas@gmail.com</p>
        <p>anasbhai@gmail.com</p>
      </div>
    </div>
    <div class="credit"> &copy; copyright @
      <?php echo date('Y'); ?> by <span>mr. web designer</span>
    </div>
  </section>
  <!-- Footer section endss -->

  <!-- custom js file link  -->
  <script src="js/script.js"></script>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>