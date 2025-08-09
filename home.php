<?php

   include 'components/connect.php' ;

   if (isset($_COOKIE['user_id'])) {
       $user_id = $_COOKIE['user_id'];
   }else{
       $user_id='';
   }

?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- box icon cdn link -->
     <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

     <!------------------------bootstrap icon link------------------------>
     <link rel="styelesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
     <!------------------------bootstrap css link------------------------>
     <!------------------------slick slider link------------------------>
     <link rel="stylesheet" type="text/css" href="slick.css" />
     <link rel="stylesheet" type="text/css" href="css/user_style.css?v=<?php echo time(); ?>">
     <title>Sandu Fashion Website</title>
</head>
<body>

    <?php include 'components/user_header.php'; ?>

    <div class="container-fluid">
        <div class="hero-slider">
            <div class="slider-item">
                <img src="image/home-slide.jpg">
                <div class="slider-caption">
                    <h1>Street style has its <br> own rules</h1>
                    <P>Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit, sed do
                    eiusmod laborum.Lorem ipsum dolor sit amet,<br> consectetur adipisicing
                elit, sed do eiusmod laborum</P>
                    <a href="shop.php" class="btn">shop now</a>
                </div>
            </div>
            <div class="slider-item">
                <img src="image/home-slide0.jpg">
                <div class="slider-caption">
                    <h1>Brand and Designer <br> Features</h1>
                    <P>Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit, sed do
                    eiusmod laborum.Lorem ipsum dolor sit amet,<br> consectetur adipisicing
                elit, sed do eiusmod laborum</P>
                    <a href="shop.php" class="btn">shop now</a>
                </div>
            </div>
            <div class="slider-item">
                <img src="image/home-slide1.jpg">
                <div class="slider-caption">
                    <h1>Street style has its <br> own rules</h1>
                    <P>Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit, sed do
                    eiusmod laborum.Lorem ipsum dolor sit amet,<br> consectetur adipisicing
                elit, sed do eiusmod laborum</P>
                    <a href="shop.php" class="btn">shop now</a>
                </div>
            </div>
            <div class="slider-item">
                <img src="image/home-slide2.jpg">
                <div class="slider-caption">
                    <h1>Final Clearance <br> sale</h1>
                    <P>Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit, sed do
                    eiusmod laborum.Lorem ipsum dolor sit amet,<br> consectetur adipisicing
                elit, sed do eiusmod laborum</P>
                    <a href="shop.php" class="btn">shop now</a>
                </div>
            </div>
        </div>
        <div class="controls">
            <i class="bx bx-left-arrow-alt prev"></i>
            <i class="bx bx-right-arrow-alt next"></i>
        </div>
    </div>

   <div class="services">
       <div class="box-container">
           <div class="box">
               <div class="icon">
                   <img src="image/service.png" width="50px">
               </div>
               <div class="detail">
                   <h4>online shopping</h4>
                   <span>100% secure</span>
               </div>
           </div>
            <div class="box">
               <div class="icon">
                   <img src="image/services2.png" width="50px">
               </div>
               <div class="detail">
                   <h4>quality products</h4>
                   <span>100% secure</span>
               </div>
           </div>
            <div class="box">
               <div class="icon">
                   <img src="image/services.png" width="50px">
               </div>
               <div class="detail">
                   <h4>delivery</h4>
                   <span>24 * 7 hours</span>
               </div>
           </div>
            <div class="box">
               <div class="icon">
                   <img src="image/services0.png" width="50px">
               </div>
               <div class="detail">
                   <h4>customer services</h4>
                   <span>support gift services</span>
               </div>
           </div>
            <div class="box">
               <div class="icon">
                   <img src="image/service.png" width="50px">
               </div>
               <div class="detail">
                   <h4>well organized</h4>
                   <span>24 * 7 free returns</span>
               </div>
           </div>
            <div class="box">
               <div class="icon">
                   <img src="image/services1.png" width="50px">
               </div>
               <div class="detail">
                   <h4>much more</h4>
                   <span>100% secure</span>
               </div>
           </div>
       </div>
   </div>
   <img src="image/-sub-banner.jpg" class="sub-banner">

   <div class="frame-container">
       <div class="box-container">
           <div class="frame">
               <div class="detail">
                   <span>shop seasonal</span>
                   <h2>50% off</h2>
                   <h1>all seasonal fashion</h1>
                   <a href="shop.php" class="btn">shop now</a>
               </div>
           </div>
           <div class="box">
               <div class="box-detail">
                   <img src="image/lookbook4.jpg" class="img">
                   <div class="img-detail">
                       <span>wide range</span>
                       <h1>fresh letest collections</h1>
                       <a href="shop.php" class="btn">shop now</a>
                   </div>
               </div>
               <div class="box-detail">
                   <img src="image/lookbook5.jpg" class="img">
                   <div class="img-detail">
                       <span>wide range</span>
                       <h1>fresh letest collections</h1>
                       <a href="shop.php" class="btn">shop now</a>
                   </div>
               </div>
           </div>
       </div>
   </div>

  <div class="about-us">
      <div class="box-container">
          <div class="img-box"></div>
          <div class="box">
              <div class="heading">
                  <span>why choose us</span>
                  <h1>why Bedsek london fashion website</h1>
                  <img src="image/separator.png">
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, fuga?
            Maiores, sapiente odit! Corporis necessitatibus earum perspiciatis ab
            laudantium quisquam fuga sequi sit iure minus, eaque eos. Corrupti, veritatis
            culpa. Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta saepe
            ipsam illo. Mollitia quisquam nam magnam sint reiciendis harum id saepe,
            expedita ipsa assumenda, aperiam reprehenderit odio tempora possimus molestias</p>
            <a href="about.php" class="btn">know more</a>
            <a href="contact.php" class="btn">contact us</a>
          </div>
      </div>
  </div>

  <div class="sub-banner">
      <div class="box-container">
          <img src="image/sub-banner1.jpg" height="85%">
          <img src="image/sub-banner.jpg" height="85%">
      </div>
  </div>

  <div class="categories">
      <div class="heading">
          <h1>shop by categorise</h1>
      </div>
      <div class="box-container">
          <div class="box">
              <img src="image/cat.webp">
          </div>
           <div class="box">
              <img src="image/cat0.webp">
          </div>
           <div class="box">
              <img src="image/cat1.png">
          </div>
           <div class="box">
              <img src="image/cat2.webp">
          </div>
           <div class="box">
              <img src="image/cat3.webp">
          </div>
           <div class="box">
              <img src="image/cat4.webp">
          </div>
           <div class="box">
              <img src="image/cat5.webp">
          </div>
           <div class="box">
              <img src="image/cat6.webp">
          </div>
           <div class="box">
              <img src="image/cat7.webp">
          </div>
           <div class="box">
              <img src="image/cat8.avif">
          </div>
      </div>
  </div>

  <div class="sub-banner">
          <img src="image/sub-banner2.jpg">
          <img src="image/sub-banner3.jpg" style="margin-top: -.4rem;">
      </div>
  </div>

  <div class="frame-container-2">
      <div class="frame">
          <div class="detail">
              <span>shop seasonal</span>
              <h2>50% off</h2>
              <h1>all seasonal fashion</h1>
              <a href="shop.php>" class="btn">shop now</a>
          </div>
      </div>
      <div class="box">
          <img src="image/sub-banner4.jpg">
      </div>
  </div>

  <div class="sub-banner">
      <img src="image/sub-banner5.jpg">
  </div>

<div class="offer-1">
  <div class="detail">
    <h1>Special discount for all <br> latest fashion products</h1>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquio ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>

    <div class="container">
      <div id="countdown" style="color: #000;">
        <ul>
          <li><span id="days">0</span> DAYS</li>
          <li><span id="hours">0</span> HOURS</li>
          <li><span id="minutes">0</span> MINUTES</li>
          <li><span id="seconds">0</span> SECONDS</li>
        </ul>
      </div>
    </div>

    <a href="shop.php" class="btn">Shop Now</a>
  </div>
</div>
<div class="products">
    <div class="heading">
        <h1>our latest collection</h1>
    </div>
</div>

<div class="offer-2">
    <div class="detail">
        <h1>We Pride Ourselves On <br> Exceptional fashion design.</h1>
        <p>Lorem ipsum dolor sit amet, Consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <a href="shop.php" class="btn">Shop Now</a>
    </div>
</div>


     <?php include 'components/user_footer.php'; ?>

     <!-- sweetalert cnd link -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
     <!-- custom js link -->
     <script src="jquary.js"></script>
     <script src="slick.js"></script>

     <script type="text/javascript">
          <?php include 'script.js' ?>
     </script>
     <!-- alert -->
     <?php include 'components/alert.php'; ?>



    <script>
    const sliderItems = document.querySelectorAll('.slider-item');
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');
    let currentIndex = 0;

    function showSlide(index) {
        sliderItems.forEach((item, i) => {
            item.style.display = i === index ? 'block' : 'none';
        });
    }

    prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + sliderItems.length) % sliderItems.length;
        showSlide(currentIndex);
    });

    nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % sliderItems.length;
        showSlide(currentIndex);
    });

    // Initial call
    showSlide(currentIndex);
</script>




<script>
(function () {
  const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

  // ✅ Set to a future date!
  const targetDate = new Date("2025-09-30T00:00:00").getTime();

  const countdown = setInterval(() => {
    const now = new Date().getTime();
    const distance = targetDate - now;

    if (distance < 0) {
      clearInterval(countdown);
      document.getElementById("countdown").innerHTML = "OFFER EXPIRED!";
      return;
    }

    document.getElementById("days").innerText = Math.floor(distance / day);
    document.getElementById("hours").innerText = Math.floor((distance % day) / hour);
    document.getElementById("minutes").innerText = Math.floor((distance % hour) / minute);
    document.getElementById("seconds").innerText = Math.floor((distance % minute) / second);

    if (distance < 0) {
        clearInterval(x);
    }
  }, 1000);
})();
</script>


</body>
</html>