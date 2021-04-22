<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>TechWithNkululeko - Home</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="shortcut icon" href="./img/admin/Favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   
    <?php
        wp_head();
    ?>
</head>

<body>

    <!-- ================ Header ======================= -->
    <header>
        <nav id="navbar">
            <div class="nav-wrapper">
                <!-- Navbar Logo -->
                <div class="logo">
                    <img src="./img/admin/logo-SVG.svg" alt="logo" height="35px" width="auto">
                </div>

                <!-- Navbar Links -->
                <ul id="menu">
                    <li>
                        <p style="color:#57cc99; cursor: default" href="#">Home</p>
                    </li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </nav>


        <!-- Menu Icon -->
        <div class="menuIcon">
            <span class="icon icon-bars"></span>
            <span class="icon icon-bars overlay"></span>
        </div>


        <div class="overlay-menu">
            <ul id="menu">
                <li>
                    <p id="active-link" style="color:#57cc99; cursor: default" href="#">Home</p>
                </li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>

        <!-- ==================== HEROBAR ================ -->

        <div id="herobar">
            <img class="herobar_img" src="./img/website_BackgroundPic.jpg" alt="HeaderImage">
            <h1>Welcome To My <br> <span>Website</span></h1>
            <p>Hey, Feel free to navigate my site anyway you want. I produce content related to technology
                from programming and gaming, I also have interest in photography and graphic design.
            </p>
        </div>
    </header>

    <section class="body">




    </section>



    <footer id="footer">
        <h5>Follow Me</h5>
        <div class="social-icons">
            <a href="http://www.instgram.com/iamnkululekombhele" target="_blank"><i class="fa fa-instagram"
                    aria-hidden="true"></i></a>
            <a href="http://www.facebook.com/iamnkululekombhele" target="_blank"><i class="fa fa-facebook"
                    aria-hidden="true"></i></a>
            <a href="http://www.twitter.com/itnkululeko" target="_blank"><i class="fa fa-twitter"
                    aria-hidden="true"></i></a>
            <a href="http://www.youtube.com/channel/UCJ8-9ak06iRLeuSHQ_kSf3g?view_as=subscriber" target="_blank"><i
                    class="fa fa-youtube" aria-hidden="true"></i></a>
            <a href="http://www.pinterest.com/techwithnkululeko" target="_blank"><i class="fa fa-pinterest"
                    aria-hidden="true"></i></a>
            <a href="http://www.linkedin.com/in/nkululeko-mbhele-2901a415b/" target="_blank"><i class="fa fa-linkedin"
                    aria-hidden="true"></i></a>
        </div>
        <p id="copyright"></p>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script src="./js/script.js"></script>
</body>

</html>