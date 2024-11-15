<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contact </title>

    <!--My Css-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="image/company-logo.png">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--cdnjs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>

</head>

<body>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg sticky-top bg-white py-3">
        <div class="container-fluid px-3 px-md-5">

            <h4 class="company-name fs-3">Gowthamraj Network</h4>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarScroll">
                <ul class="navbar-nav m-auto my-2 my-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="About.php"> About </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php"> Blog </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="careers.php"> Careers </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php"> Contact </a>
                    </li>
                </ul>

                <div class="login-btn">
                    <button type="button"> <a href="signin.php" class="text-dark text-decoration-none"> <i class="fa-solid fa-user"></i> Login </a> </button>
                </div>
            </div>
        </div>
    </nav>

    <section class="contact-us p-3 p-md-5">
        <div class="container-fluid pt-5">
            <h1> Contact us</h1>
            <h6 class="pt-2 pb-4"> How can we help you? </h6>
            <hr>
        </div>
    </section>

    <!--  Select service -->

    <section class="select-service-box pb-4">
        <div class="container">
            <form action="" method="">

                <legend> Please choose the service you're reaching out about. </legend>

                <!-- Checkbox Option 1 -->
                <div class="form-check px-5 py-3 mb-2 rounded" style="background-color: rgb(157, 204, 245);">
                    <input class="form-check-input" type="checkbox" id="checkbox1" onclick="selectOne(this)">
                    <label class="form-check-label ps-2" for="checkbox1"> I'm interested in having Gowthamraj Network develop a website or app for my project. </label>
                </div>

                <!-- Checkbox Option 2 -->
                <div class="form-check px-5 py-3 mb-2 rounded" style="background-color: rgb(157, 204, 245);">
                    <input class="form-check-input" type="checkbox" id="checkbox2" onclick="selectOne(this)">
                    <label class="form-check-label ps-2" for="checkbox2"> Let’s collaborate on this project. </label>
                </div>

                <!-- Checkbox Option 3 -->
                <div class="form-check px-5 py-3 mb-2 rounded" style="background-color: rgb(157, 204, 245);">
                    <input class="form-check-input" type="checkbox" id="checkbox3" onclick="selectOne(this)">
                    <label class="form-check-label ps-2" for="checkbox3"> I'm experiencing difficulties in building my site. </label>
                </div>

                <!-- Checkbox Option 4 -->
                <div class="form-check px-5 py-3 mb-2 rounded" style="background-color: rgb(157, 204, 245);">
                    <input class="form-check-input" type="checkbox" id="checkbox4" onclick="selectOne(this)">
                    <label class="form-check-label ps-2" for="checkbox4">I have a question related to the courses.</label>
                </div>

                <!-- Checkbox Option 5 -->
                <div class="form-check px-5 py-3 mb-2 rounded" style="background-color: rgb(157, 204, 245);">
                    <input class="form-check-input" type="checkbox" id="checkbox5" onclick="selectOne(this)">
                    <label class="form-check-label ps-2" for="checkbox5">I’m interested in partnering with you</label>
                </div>

                <!-- Checkbox Option 6 -->
                <div class="form-check px-5 py-3 mb-2 rounded" style="background-color: rgb(157, 204, 245);">
                    <input class="form-check-input" type="checkbox" id="checkbox5" onclick="selectOne(this)">
                    <label class="form-check-label ps-2" for="checkbox6"> Information Request </label>
                </div>
            </form>
        </div>

        <button type="button" class="btn-submit my-3 ms-3"> Sumbit </button>
    </section>


    <!-- company address -->

    <div class="company-address px-3 px-md-5 py-5">
        <div class="container-fluid row">
            <div class="col-12 col-md-6 ps-3 ps-md-5">
                <h4> Address </h4>
                <p> abcd Towers; <br>
                    xyz road, Chennai; <br>
                    Tamil Nadu - 600017
                </p>
            </div>

            <div class="col-12 col-md-6">
                <h4> Email</h4>
                <h6> <a href="#">info@gowthamrajnetwork.com </a> </h6>
                <h4> Phone</h4>
                <h6> <a href="#" class="pe-3"> +91 1234567890</a> (9am to 6pm on weekdays) </h6>
            </div>
        </div>
    </div>

    <!-- company details -->

    <footer class="company-details">
        <div class="container-fluid">
            <div class="company-details">
                <div class="row">
                    <h3 class="text-center col-12"> Let's be a Part of Us </h3>
                    <p class="text-center col-12 col-md-8 pt-3">Being an immigrants and minorities doesn't prevent you for having a good future. We're here to help to help you to know skills,get connection, and a great Career.</p>

                    <div class="email-box col-11 col-md-6 d-flex justify-content-between p-2 mt-3">
                        <input type="email" placeholder="Enter E-mail address">
                        <button type="button"> Join Us </button>
                    </div>
                </div>

                <div class="details row pt-5 px-4 px-md-5">

                    <div class="company-text col-12 col-md-2">
                        <h4>GowthamRaj Network</h4>
                        <h5> Support minorities to get the brighter future </h5>
                    </div>

                    <div class="details-box col-12 col-md-2 pt-3 pt-md-0">
                        <h4> Student </h4>
                        <h5> What You Can Learn</h5>
                        <h5> Become a Student </h5>
                        <h5> Refer Student </h5>
                    </div>

                    <div class="details-box col-12 col-md-2 pt-3 pt-md-0">
                        <h4> Partners </h4>
                        <h5> Partnership </h5>
                        <h5> Become a Partner </h5>
                    </div>

                    <div class="details-box col-12 col-md-2 pt-3 pt-md-0">
                        <h4> About </h4>
                        <h5> Leadership </h5>
                        <h5> Research </h5>
                        <h5> Work </h5>
                        <h5> Stories </h5>
                    </div>

                    <div class="details-box col-12 col-md-2 pt-3 pt-md-0">
                        <h4> Legel </h4>
                        <h5> Term of use </h5>
                        <h5> Term of subscription </h5>
                        <h5> Privacy policy </h5>
                        <h5> Report a violation</h5>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- social icon -->

    <section>
        <div class="container-fluid">
            <div class="social-icons d-inline d-md-flex justify-content-md-between px-md-5">
                <h5 class="pt-2"> Copyright <i class="fa-sharp fa-regular fa-copyright"></i> 2024 GowthamRaj Network </h5>
                <div class="social-icon pt-2">
                    <a href="https://www.youtube.com/@GOWTHAMRAJNETWORK" style="text-decoration: none;"> <i class="fa-brands fa-youtube pe-3"></i> </a>
                    <a href="https://www.facebook.com/gowthamrajnetwork" style="text-decoration: none;"> <i class="fa-brands fa-facebook pe-3"></i> </a>
                    <a href="https://www.instagram.com/gowthamraj_network/" style="text-decoration: none;"> <i class="fa-brands fa-instagram pe-3"></i> </a>
                    <a href="https://www.linkedin.com/company/gowthamrajnetwork/posts/?feedView=all" style="text-decoration: none;"> <i class="fa-brands fa-linkedin-in pe-3"></i> </a>
                </div>
            </div>
        </div>
    </section>


    <script src="script.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"> </script>
</body>

</html>