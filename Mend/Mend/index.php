<?php

session_start();
$local = "localhost";
$user = "root";
$data = "menddatabase";
$con = mysqli_connect($local, $user);
mysqli_select_db($con, $data);

$sql_get = mysqli_query($con, "SELECT * FROM announce WHERE admin_id = 1");
$count = mysqli_num_rows($sql_get);
$_SESSION['index']="login";
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Mend Brokerage:Homepage</title>
    <!-- Inline style for  notification -->
    <style>
      .notify {
         background-color: white;
         color: white;
         text-decoration: none;
         padding: 15px 26px;
         position: relative;
         display: inline-block;
         border-radius: 2px;
      }

      .notify .badge {
         position: absolute;
         top: -10px;
         right: -10px;
         padding: 5px 10px;
         border-radius: 50%;
         font-size: 15px;
         background-color: red;
         color: white;
      }

      table {
         border-collapse: collapse;
         width: 100%;
      }

      th,
      td {
         text-align: left;
         padding: 16px;
         border-bottom: 1px solid #ddd;
      }
   </style>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/styler.css">
   <link rel="stylesheet" href="css/newStyle.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
   <link rel="stylesheet" href="css/utilities.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="css/stylex.css">
   <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Muli'>
   
 
</head>

<body>

   <!-- header section starts  -->

   <header class="header">

      <div class="contact-info">
         <p> <i class="fas fa-map"></i> Ethiopia, Addis Ababa - 400</p>
         <p> <i class="fas fa-envelope"></i> mend@gmail.com </p>
         <p> <i class="fas fa-phone"></i> +251-456-7890 </p>
      </div>

      <nav class="navbar">
         <div>

            <img src="Model/image/logo.png" alt="logo" width="50" height="50" /> </a>
         </div>
         <div class="links">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#reviews">reviews</a>
            <a href="#announce" class="notify">
               <i class="fas fa-envelope"></i>
               <span class="badge"><?php echo $count; ?></span>
            </a>
            <?php

?>
         </div>

         <div id="menu-btn" class="fa fa-bars"></div>

      </nav>

   </header>

   <!-- header section ends -->

   <!-- home section starts  -->

   <!-- Showcase -->
   <!-- home section starts  -->

   <section class="home" id="home">

      <div class="content">
         <h3 x>Why fix it yourself? Leave it to the professionals.</h3>
         <p >If you have a broken pieces at home Don't worry! MEND is at your home Are you finding a job? Are you a technician? what is your skill? We are available at any time you just Book Now</p>
         <a href="#about" class="btn">get started</a>
      </div>
      
     
<div class="wrapper">
   <div>
   <?php
include ('config/indexAlert.php');
?>
   </div>
<div class="title">
    <h2 >Login</h2>
</div>
  <div class="inner-warpper text-center">
    
    <form method="post" action="Control/login.php" id="formvalidate" >
      <div class="input-group">
        <label class="palceholder" for="userName">Email</label>
        <input class="form-control" name="email" id="userName" type="text" placeholder="" />
        <span class="lighting"></span>
      </div>
      <div class="input-group">
        <label class="palceholder" for="userPassword">Password</label>
        <input class="form-control" name="password" id="userPassword" type="password" placeholder="" />
        <span class="lighting"></span>
      </div>
      <div class="input-group">
      <button type="submit" id="login" name="login">Login</button>
      </div>
     
    </form>
  </div>
  <div class="signup-wrapper text-center">
  You don't have an accout? <a href="View/signupCus.php">Signup as Customer<span class="text-primary"></span></a>
  <a href="View/signupWor.php">Signup as Worker<span class="text-primary"></span></a>
  </div>
</div>

         </section>
                  
   <!-- home section ends -->

   <!-- fun fact section starts  -->

   <section class="fun-fact">

      <div class="box">
         <img src="Model/image/fun-fact-icon-1.svg" alt="">
         <div class="info">
            <h3>2890</h3>
            <p>repairs done</p>
         </div>
      </div>

      <div class="box">
         <img src="Model/image/fun-fact-icon-2.svg" alt="">
         <div class="info">
            <h3>25</h3>
            <p>awards won</p>
         </div>
      </div>

      <div class="box">
         <img src="Model/image/fun-fact-icon-3.svg" alt="">
         <div class="info">
            <h3>3585</h3>
            <p>happy clients</p>
         </div>
      </div>

      <div class="box">
         <img src="Model/image/fun-fact-icon-4.svg" alt="">
         <div class="info">
            <h3>45</h3>
            <p>active workers</p>
         </div>
      </div>

   </section>

   <!-- fun fact section ends -->

   <!-- about section starts  -->

   <section class="about" id="about">
      <div class="content">

         <h1 class="md">Let Our Professionals Work for Your Comfort!</h1>
         <p>
            Our appliance repair technicians are clean and professional and provide repair services you
            can
            rely
            on.
            We service all major household appliances including washing machines, clothes dryers,
            refrigerators,
            freezers, ice makers, ice machines, dishwashers, cooktops, ovens, ranges, stoves,
            microwaves,
            vent
            hoods, trash c
            ompactors, and garbage disposals. Some locations also provide repair service for commercial
            equipment, reconditioned appliances, and parts.
         </p>
         
         <a href="#services" class="btn">read more</a>
      </div>
     
      <div class="image">
         <img src="Model/image/prof.jpg" alt="">
      </div>

   </section>

   <!-- about section ends -->

   <!-- services section starts  -->

   <section class="services" id="services">

      <h1 class="heading"> our services </h1>

      <div class="box-container">

         <div class="box">
            <img src="Model/image/dish.jpg" class="requirment">

            <p class="text-dark">Does your satelite dish need fixing? Call mend today for repair services in professonal
               manner.</p>
         </div>
         <div class="box">
            <img src="Model/image/plumb.jpg" class="requirment">

            <p class="text-dark"> Does your plumb need fixing? Call mend today for repair services in professonal
               manner..</p>
         </div>

         <div class="box">
            <img src="Model/image/electric.jpg" class="requirment">
            <p class="text-dark">Does your electronic appliances need fixing? Call mend today for repair services in
               professonal
               manner.</p>
         </div>

      </div>

   </section>

   <!-- services section ends -->

   <!-- facilities section starts  -->

   <section class="facilities">

      <h1 class="heading"> why choose us? </h1>

      <div class="box-container">

         <div class="box">
            <img src="Model/image/why-choose-icon-1.svg" alt="">
            <h3>24/7 support</h3>
            <p> Worry-Free Experience:
               We accept requests and phone calls 24/7 so you could resolve any problem whenever you need.
               Our emergency team will be at your place</p>
         </div>

         <div class="box">
            <img src="Model/image/why-choose-icon-2.svg" alt="">
            <h3>quality service</h3>
            <p> Qualified Agents:
               Quality of work and speed of fulfilment. We always stand for doing our job fast and at the
               highest level as understand people value their time and money.</p>
         </div>

         <div class="box">
            <img src="Model/image/why-choose-icon-3.svg" alt="">
            <h3>quick repair</h3>
            <p>National Standards,Local Owners: Qualified Agents All our team members are
               high-qualified,educated
               and skilled agents.
               All of them are being trained according to the latest technologies.</p>
         </div>
         <div class="box">
            <img src="Model/image/bestoffer.png" width="30" height="100" alt="">
            <h3>Best Offers</h3>
            <p>
               Help with any domestic problem. You can choose the service from our list, or if you need any
               other maintenance help, we will gladly do even non-standard work!</p>
         </div>
         <div class="box">
            <img src="Model/image/mendpro.png" alt="" width="30" height="50">
            <h3> Professional Approach</h3>
            <p>
               Best Offers We provide discounts on the most popular services and on the season services, so
               you could definitely receive any help without delay.</p>
         </div>
         <div class="box">
            <img src="Model/image/fair.png" alt="" width="30" height="50">
            <h3> Fair prices</h3>
            <p>
               Our prices are both fair and affordable for all people. We offer flexible discount system so
               you could use any service you need.</p>
         </div>
      </div>

   </section>

   <!-- facilities section ends -->
   <!-- reviews section starts  -->

   <section class="reviews" id="reviews">

      <h1 class="heading"> clients reviews </h1>

      <div class="box-container">

         <div class="box">
            <div class="star">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <div class="text">
               <i class="fas fa-quote-right"></i>
               <p>Mend provides the best sevices that i have ever seen,they truly are life saver when you
                  need them for emergency they will arrive in aminute.</p>
            </div>
            <div class="user">
               <img src="Model/image/pic-1.png" alt="">
               <h3>Alex</h3>
            </div>
         </div>

         <div class="box">
            <div class="star">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <div class="text">
               <i class="fas fa-quote-right"></i>
               <p>Mend is my first choice because the workers are proffessional and skilled and their cost is
                  reasonable.</p>
            </div>
            <div class="user">
               <img src="Model/image/pic-2.png" alt="">
               <h3>Sara</h3>
            </div>
         </div>

         <div class="box">
            <div class="star">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <div class="text">
               <i class="fas fa-quote-right"></i>
               <p>Mend has made our life easier,we don't any more waste our time looking for a technician and
                  repairer.</p>
            </div>
            <div class="user">
               <img src="Model/image/pic-3.png" alt="">
               <h3>John</h3>
            </div>
         </div>

      </div>

   </section>

   <!-- reviews section ends -->
   
    <!-- Announcement section starts -->
    <section class="announce" id="announce">
      <h1 class="heading"> Announcements </h1>
      <div class="boz-container">
         <div class="box">
            <h1>
               <table>
                  <thead>
                     <tr>
                        <th>NO.</th>
                        <th>Announcement</th>
                        <th>Date & Time</th>
                        <th>Status</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     $get = mysqli_query($con, "SELECT * FROM announce WHERE admin_id =1");
                     if (mysqli_num_rows($get) > 0) {
                        $c = 0;
                        while ($result = mysqli_fetch_assoc($get)) : $c += 1; ?>
                           <tr>
                              <td><?php echo $c ?></td>
                              <td style="text-align:left;"><?php echo $result['announce_descip'] ?></td>
                              <td style="text-align:left;"><?php echo $result['announce_dateTime'] ?></td>
                              <td style="text-align:left;"><?php echo $result['announce_type'] ?></td>
                           </tr>

                     <?php endwhile;
                     } else {
                        echo '<p align = "center" class = "No-announce" >NO ANNOUNCEMENT YET!</p>';
                     }
                     ?>
                  </tbody>
               </table>
            </h1>
         </div>
      </div>
   </section>
   <!-- Announcement section ends -->
   <!-- footer section starts  -->

   <section class="footer">

      <div class="box-container">

         <div class="box">
            <h3>quick links</h3>
            <a class="link" href="#home"> <i class="fas fa-angle-right"></i> home</a>
            <a class="link" href="#about"> <i class="fas fa-angle-right"></i> about</a>
            <a class="link" href="#services"> <i class="fas fa-angle-right"></i> services</a>
            <a class="link" href="#reviews"> <i class="fas fa-angle-right"></i> reviews</a>
         </div>

         <div class="box">
            <h3>opening hours</h3>
            <p> <span>monday :</span> 10:00am to 00:09pm </p>
            <p> <span>tuesday :</span> 10:00am to 00:09pm </p>
            <p> <span>wednesday :</span> 10:00am to 00:09pm </p>
            <p> <span>thursday :</span> 10:00am to 00:09pm </p>
            <p> <span>friday :</span> 10:00am to 00:09pm </p>
            <p> <span>saturday :</span> 10:00am to 00:09pm </p>
            <p> <span>sunday :</span> closed </p>
         </div>

         <div class="box">
            <h3>contact info</h3>
            <a href="#" class="link"> <i class="fas fa-phone"></i> +251-456-7890 </a>
            <a href="#" class="link"> <i class="fas fa-phone"></i> +251-222-3333 </a>
            <a href="#" class="link"> <i class="fas fa-envelope"></i> mend@gmail.com </a>
            <a href="#" class="link"> <i class="fas fa-map"></i> Etthiopia, Addis Ababa - 400 </a>
         </div>

      </div>

      </div>

      <div class="credit"> MEND repair company &copy; 2022 | all rights reserved! <a href="privacy.html">privacy</a></div>
      <div class="output"></div>
   </section>


   <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script><script  src="js/script.js"></script>

   <!-- footer section ends -->
   
 
  
</body>

</html>
