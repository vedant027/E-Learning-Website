<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduElex</title>

    <!-- ICONSCOUT CDN-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- GOOGLE FONTS (MONTSERRAT)-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/contact.css">

   <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Z7ZWFYJLWL"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Z7ZWFYJLWL');
</script>

</head>
<body>
    <nav>
        <div class="container nav__container">
            <a href="index.php"><h3>EduElex</h3></a>
            <u1 class="nav__menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="subjects.php">Subjects</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Sign In</a></li>
            </u1>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <!--================================== END OF NAVBAR ==============================-->




  <section class="contact">
    <div class="container contact__container">
        <aside class="contact__aside">
            <div class="aside__image">
                <img src="Images/contactuspage_image.png">
            </div>
            <h2>Contact Us</h2>
            <p>
                If you want to leave any comments or share any suggestions with us,
                 we would love to hear from you. Feel free to reach out to us with your 
                 feedback.

            </p>
            <ul class="contact__details">
                <li>
                    <i class="uil uil-phone-times"></i>
                    <h5>+01 234 567 8910</h5>
                </li>
                <li>
                    <i class="uil uil-envelope"></i>
                    <h5>eduelex@gmail.com</h5>
                </li>
                <li>
                    <i class="uil uil-location-point"></i>
                    <h5>DMCE Airoli, Navi Mumbai</h5>
                </li>
            </ul>
            <ul class="contact__socials">
                <li> <a href="https://facebook.com"><i class="uil uil-facebook-f"></i></a></li>
                <li> <a href="https://instagram.com"><i class="uil uil-instagram"></i></a></li>
                <li> <a href="https://twitter.com"><i class="uil uil-twitter"></i></a></li>
                <li> <a href="https://linkedin.com"><i class="uil uil-linkedin-alt"></i></a></li>
            </ul>
        </aside>




        <form action="https://formspree.io/f/xkneokvw" method="POST" class="contact__form">
            <div class="form__name">
                <input type="text" name="First Name" placeholder="First Name" required>
                <input type="text" name="Last Name" placeholder="Last Name" required>           
             </div>
             <input type="email" name="Email Address" placeholder="Your Email Address" required>
             <textarea name="Message" rows="7" placeholder="Message" required></textarea>
             <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
  </section>





    <footer>
        <div class="container footer__container">
            <div class="footer__1">
                <a href="index.php" class="footer__logo"><h4>EduElex</h4></a>
                <p>
                    Learn Electronics Subjects at your Comfort.
                </p>
            </div>
    
            <div class="footer__2">
                <h4>Permalinks</h4>
                <ul class="permalinks">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="subjects.php">Subjects</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
    
            <div class="footer__3">
                <h4>Privacy</h4>
                <ul class="privacy">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                </ul>
                </div>
    
                <div class="footer__4">
                    <h4>Contact Us</h4>
                    <div>
                        <p>+01 234 567 8910</p>
                        <p>eduelex@gmail.com</p>
                    </div>
    
            <ul class="footer__socials">
                <li>
                    <a href="https://facebook.com"><i class="uil uil-facebook-f"></i></a>
                </li>
                <li>
                    <a href="https://instagram.com"><i class="uil uil-instagram-alt"></i></a>
                </li>
                <li>
                    <a href="https://twitter.com"><i class="uil uil-twitter"></i></a>
                </li>
                <li>
                    <a href="https://linkedin.com"><i class="uil uil-linkedin-alt"></i></a>
                </li>
            </ul>
            </div>    
        </div>
        <div class="footer__copyright">
        <small>Copyright &copy; EduElex</small>
        </div>
    </footer>
    
        <script src="JS/main.js"></script>
    
    
    </body>
    </html>