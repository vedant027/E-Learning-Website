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
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Sacramento&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="CSS/style.css">

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
                <li><a href="index.php">Sign In</a></li>
            </u1>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <!--================================== END OF NAVBAR ==============================-->



    <section class="sem6subjects_page">
        <h2 class="sem6_subjectspage_heading">Sem VI Subjects</h2>
        <div class="container sem6subjects__container">

            <article class="sem6subjects">
                <div class="sem6subjects__image">
                   <img class="sem6subjects_image" src="Images/bvlsi_image.png">  
                </div>
               <div class="sem6subjects__Info">
                <h4>BVLSI</h4>
                <p>
                    Develop your fundamental understanding of Very-large-scale integration (VLSI).
                </p>
                <a href="bvlsi.php" class="btn btn-primary">Start Learning</a>
               </div>
            </article>

            <article class="sem6subjects">
                <div class="sem6subjects__image">
                    <img class="sem6subjects_image" src="Images/ee_image.png">    
                </div>
                <div class="sem6subjects__Info">
                    <h4>EE</h4>
                <p>
                    Unveil advances in Electromagnetics and applications.
                </p>
                <a href="ee.php" class="btn btn-primary">Start Learning</a>
                </div>
            </article>

            <article class="sem6subjects">
                <div class="sem6subjects__image">
                    <img class="sem6subjects_image" src="Images/ccn_image.png">       
                </div>
                <div class="sem6subjects__Info">
                    <h4>CCN</h4>
                <p>
                    Learn fundamental principles of computer communication network.
                </p>
                <a href="ccn.php" class="btn btn-primary">Start Learning</a>
                </div>
            </article>

            <article class="sem6subjects">
                <div class="sem6subjects__image">
                    <img class="sem6subjects_image" src="Images/esrtos_image.png">       
                </div>
                <div class="sem6subjects__Info">
                    <h4>ESRTOS</h4>
                <p>
                    Learn the typical subsystems of a real time embedded system.
                </p>
                <a href="esrtos.php" class="btn btn-primary">Start Learning</a>
                </div>
            </article>

            <article class="sem6subjects">
                <div class="sem6subjects__image">
                    <img class="sem6subjects_image" src="Images/ml_image.png">       
                </div>
                <div class="sem6subjects__Info">
                    <h4>ML</h4>
                <p>
                    Learn the fundamentals of Machine learning.
                </p>
                <a href="ml.php" class="btn btn-primary">Start Learning</a>
                </div>
            </article>

        </div>
    </section>
  <!--================================== END OF SUBJECTS ==============================-->



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

<!--================================== END OF FOOTER ==============================-->
    
        <script src="JS/main.js"></script>
    
    
    </body>
    </html>