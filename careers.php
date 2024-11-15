<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Careers </title>

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

    <!-- Apply opening -->

    <section class="apply-opening">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-lg-7 text-center">
                    <h1> Join the crew. </h1>
                    <h3 class="py-3 text-white"> Be part of our mission to make life easier for everyone. </h3>
                    <a href="Application.php" style="text-decoration: none;"> <button class="apply-btn"> Apply for an opening </button> </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Recruitment process -->

    <section class="recruitment p-4">
        <div class="container-fluid">

            <h2 class="text-center"> Learn Our Recruitment <span class="text-warning">Process</span></h2>

            <div class="recruitment-boxs row pt-3">
                <div class="recruitment-box col-12 col-md-3 p-3">
                    <i class="fa-solid fa-address-card"></i>
                    <h3 class="pt-2">CV Submission</h3>
                    <p> Please submit your updated CV for consideration. We look forward to reviewing your qualifications and exploring potential opportunities. </p>
                </div>

                <div class="recruitment-box col-12 col-md-3 p-3">
                    <i class="fa-solid fa-phone"></i>
                    <h3 class="pt-2"> Phone Screening </h3>
                    <p>Thank you for applying. We’d like to schedule a phone screening to discuss your qualifications. We’ll reach out soon to set a time</p>
                </div>

                <div class="recruitment-box col-12 col-md-3 p-3">
                    <i class="fa-sharp fa-solid fa-chalkboard-user"></i>
                    <h3 class="pt-2"> Skill Assessment </h3>
                    <p>As part of our hiring process, we'll conduct a skill assessment to better understand your expertise. Details will be shared soon</p>
                </div>

                <div class="recruitment-box col-12 col-md-3 p-3">
                    <i class="fa-solid fa-check-to-slot"></i>
                    <h3 class="pt-2"> Final interview </h3>
                    <p>Congratulations on reaching the final interview! We’ll share the details and schedule soon.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Join our community -->

    <section class="join-community-box p-5">
        <div class="container-fluid">
            <div class="join-community-text text-center p-5">
                <h2> Join our talent community </h2>
                <p class="pt-3"> Haven’t found the right opportunity yet? Receive the latest updates on job opportunities, recruitment events and company news tailored just for you. </p>
                <a href="signin.php"> <button type="button" class="join-community-btn mt-3"> sign up </button> </a>
            </div>
        </div>
    </section>

    <!-- Current opening -->

    <section class="current-opening">
        <div class="container-fluid">
            <h3 class="text-warning text-center pt-3"> Current Openings </h3>
            <h2 class="text-dark text-center pt-3"> Want to join Team GOWTHAMRAJ NETWORK </h2>
            <p class="text-muted text-center pt-3">Check out our open form below and fill the application form by clicking on it</p>

            <div class="row px-3 px-md-5">
                <div class="opening-list d-flex justify-content-between align-items-center rounded mb-4 py-3 px-2 px-md-5">
                    <h5 class="text-white"> UI/UX Designer</h5>
                    <h6><a href="Application.php" style="color: gray; text-decoration: none"> View position <i class="fa-solid fa-angles-right ps-1 text-dark"></i> </a></h6>
                </div>

                <div class="opening-list d-flex justify-content-between align-items-center rounded mb-4 py-3 px-2 px-md-5">
                    <h5 class="text-white"> Data Science</h5>
                    <h6><a href="Application.php" style="color: gray; text-decoration: none"> View position <i class="fa-solid fa-angles-right ps-1 text-dark"></i> </a></h6>
                </div>

                <div class="opening-list d-flex justify-content-between align-items-center rounded mb-4 py-3 px-2 px-md-5">
                    <h5 class="text-white"> Data Analytics</h5>
                    <h6><a href="Application.php" style="color: gray; text-decoration: none"> View position <i class="fa-solid fa-angles-right ps-1 text-dark"></i> </a></h6>
                </div>

                <div class="opening-list d-flex justify-content-between align-items-center rounded mb-4 py-3 px-2 px-md-5">
                    <h5 class="text-white"> Web Developer</h5>
                    <h6><a href="Application.php" style="color: gray; text-decoration: none"> View position <i class="fa-solid fa-angles-right ps-1 text-dark"></i> </a></h6>
                </div>

                <div class="opening-list d-flex justify-content-between align-items-center rounded mb-4 py-3 px-2 px-md-5">
                    <h5 class="text-white"> DBMS Devloper </h5>
                    <h6><a href="Application.php" style="color: gray; text-decoration: none"> View position <i class="fa-solid fa-angles-right ps-1 text-dark"></i> </a></h6>
                </div>

                <div class="opening-list d-flex justify-content-between align-items-center rounded mb-4 py-3 px-2 px-md-5">
                    <h5 class="text-white"> Product Designer </h5>
                    <h6><a href="Application.php" style="color: gray; text-decoration: none"> View position <i class="fa-solid fa-angles-right ps-1 text-dark"></i> </a></h6>
                </div>

                <div class="opening-list d-flex justify-content-between align-items-center rounded mb-4 py-3 px-2 px-md-5">
                    <h5 class="text-white"> Technical Support </h5>
                    <h6><a href="Application.php" style="color: gray; text-decoration: none"> View position <i class="fa-solid fa-angles-right ps-1 text-dark"></i> </a></h6>
                </div>
            </div>
        </div>

    </section>

    <!-- View courses -->

    <section class="view-courses ps-3 ps-md-5 py-4" style="background-color: rgb(217, 232, 246);">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-5">
                    <h1> Ready to get started? </h1>
                    <p> Sign up for our WordPress Course today! </p>
                </div>

                <div class=" col-12 col-md-3 m-3">
                    <button class="watch-tutorials-btn"> Watch Tutorials <i class="fa-solid fa-caret-right"></i> </button>
                </div>
                <div class="col-12 col-md-3 m-3">
                    <button class="view-courses-btn"> View Courses <i class="fa-solid fa-caret-right"></i></button>
                </div>

            </div>
        </div>
    </section>

    <!-- email sent  -->

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