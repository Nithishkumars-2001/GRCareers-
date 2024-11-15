<?php

session_start();
include("config.php")

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> About </title>

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

    <!--Join Careers-->

    <section class="careers-join">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-lg-7 text-center">
                    <h1> Careers </h1>
                    <h3 class="py-3"> Our greatest asset is our people, and we celebrate talent and creativity. Join us to work on exciting projects and make a real impact!</h3>
                    <a href="signin.php" style="text-decoration: none;"> <button class="join-btn"> Join us </button> </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits -->

    <section class="benefits">
        <div class="container">
            <div class="row">
                <h5 class="text-center"> BENEFITS</h5>
                <h4 class="text-center"> Why Join Us </h4>

                <div class="text-box col-12 col-sm-6 col-md-4">
                    <h5> Fast growing company <i class="fa-solid fa-check"></i></h5>
                    <p> we are at an inflection point to achieve accelerated </p>
                </div>

                <div class="text-box col-12 col-sm-6 col-md-4">
                    <h5> Great company <i class="fa-solid fa-check"></i></h5>
                    <p> Closely tied and supportive team </p>
                </div>

                <div class="text-box col-12 col-sm-6 col-md-4">
                    <h5> Take Charge <i class="fa-solid fa-check"></i></h5>
                    <p> as much as you are willing to take and show excellence</p>
                </div>

                <div class="text-box col-12 col-sm-6 col-md-4">
                    <h5> Don't stop learning <i class="fa-solid fa-check"></i></h5>
                    <p> An atmosphere where learning is always on the to do list</p>
                </div>

                <div class="text-box col-12 col-sm-6 col-md-4">
                    <h5> Latest Technology stack <i class="fa-solid fa-check"></i></h5>
                    <p> Working experience of cutting edge technology </p>
                </div>

                <div class="text-box col-12 col-sm-6 col-md-4">
                    <h5> Cross domain exposure <i class="fa-solid fa-check"></i></h5>
                    <p> Highly passionate and cohesive team of technology and business people </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Growth -->

    <section class="growth">
        <div class="container-fluid">
            <p class="line"> </p>
            <div class="growth-text">
                <h4> From our humble beginnings in YouTube video creation, we have
                    grown to offer our own learning platform that has made a positive
                    impact on 🥰 people worldwide.</h4>
            </div>
            <p class="line"> </p>
        </div>
    </section>

    <!-- our product -->

    <section class="our-product">
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-6 col-md-3 gr-box">
                    <img src="image/company-logo.png" alt="">
                    <p class="line"> </p>
                    <h6 class="text-center"> Start Your Career Growth with <span> GOWTHAMRAJ NETWORK </h6>
                    <a href="https://www.gowthamrajnetwork.com/" style="text-decoration: none;"> <button class="view-btn" type="button"> view <i class="fa-solid fa-angles-right"></i></button> </a>
                </div>

                <div class="col-6 col-sm-6 col-md-3 youtube-box">
                    <img src="image/youtube-logo.png" alt="">
                    <p class="line"> </p>
                    <h6 class="text-center pb-4 pb-5 pb-md-4"> Explore Our Youtube Channel </h6>
                    <a href="https://www.youtube.com/@GOWTHAMRAJNETWORK" style="text-decoration: none;"> <button class="view-btn" type="button"> view <i class="fa-solid fa-angles-right"></i></button> </a>
                </div>

                <div class="col-6 col-sm-6 col-md-3 courses-box">
                    <img src="image/courses-logo.png" alt="">
                    <p class="line"> </p>
                    <h6 class="text-center pb-4"> Career-Boosting Courses </h6>
                    <a href="#" style="text-decoration: none;"> <button class="view-btn" type="button"> view <i class="fa-solid fa-angles-right"></i></button> </a>
                </div>

                <div class="col-6 col-sm-6 col-md-3 linkedin-box">
                    <img src="image/linkedin-logo.png" alt="">
                    <p class="line"> </p>
                    <h6 class="text-center"> Discover Opportunities on LinkedIn </h6>
                    <a href="https://www.linkedin.com/company/gowthamrajnetwork/posts/?feedView=all" style="text-decoration: none;"> <button class="view-btn" type="button"> view <i class="fa-solid fa-angles-right"></i></button> </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Life at GRnetwork -->

    <section class="life-at-GR p-3 p-md-5 mt-5">
        <div class="container-fluid">
            <div class="row m-0 m-md-3">
                <div class="col-12 col-md-7">
                    <div class="life-text-boxs row pt-5 pt-md-0">
                        <div class="life-text-box col-12 col-md-5">
                            <i class="fa-regular fa-building"></i>
                            <h3> Large Beautiful Office </h3>
                            <p> Enjoy a comfortable office environment with the most mordern and stylish furnishing. </p>
                        </div>

                        <div class="life-text-box col-12 col-md-5">
                            <i class="fa-sharp fa-solid fa-people-group"></i>
                            <h3> Great Co-Workers </h3>
                            <p> Work with some of the best talent in the industry abd build strong networks with them.</p>
                        </div>

                        <div class="life-text-box col-12 col-md-5">
                            <i class="fa-solid fa-location-dot"></i>
                            <h3> Easy Location </h3>
                            <p> Commute easily to work at your convenience and enjoy compensatio for transport costs.</p>
                        </div>

                        <div class="life-text-box col-12 col-md-5">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <h3> Education Opportunity </h3>
                            <p> Get resource for developing your skills and knowledge to kickstart your career.</p>
                        </div>
                    </div>
                </div>

                <div class="life-title-box col-12 col-md-5 pt-5 pt-md-0">
                    <h2> Your Life At <span> GOWTHAMRAJ NETWORK </span></h2>
                    <p>Your Life at GOWTHAMRAJ NETWORK is all about growth, collaboration, and innovation. We foster a dynamic work environment where creativity thrives, and every team member is empowered to contribute their unique ideas. Our open culture promotes teamwork, allowing individuals to work seamlessly across departments while also encouraging personal development through training, workshops, and career advancement opportunities. </p>
                    <p> At GOWTHAMRAJ NETWORK, you will be part of a supportive community that celebrates diversity and inclusivity, where every voice is heard, and every contribution makes an impact. Join us, and experience a place where your career and well-being are prioritized, and where you can grow, learn, and build your future. </p>
                    <a href="https://www.ambitionbox.com/overview/gowthamraj-network-overview" style="text-decoration: none;"> <button type="button"> Learn More </button> </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Learner count -->

    <section class="counter-up m-3 m-md-5">
        <div class="container-fluid">
            <div class="title">
                <h3 class="ps-5 pb-3"> We take great pride in... </h3>
            </div>

            <div class="row">
                <div class="counter col-12 col-sm-6 col-md-2 mb-3 mb-md-0 me-0 me-md-5">
                    <i class="fa-solid fa-book"></i>
                    <h3> 3500 </h3>
                    <h5> Learners </h5>
                </div>

                <div class="counter col-12 col-sm-6 col-md-2 mb-3 mb-md-0 me-0 me-md-5">
                    <i class="fa-solid fa-handshake"></i>
                    <h3> 50 </h3>
                    <h5> Mentors </h5>
                </div>

                <div class="counter col-12 col-sm-6 col-md-4 mb-3 mb-md-0 me-0 me-md-5">
                    <i class="fa-solid fa-code"></i>
                    <h3> 27588125</h3>
                    <h5> Lines of Code Submission </h5>
                </div>

                <div class="counter col-12 col-sm-6 col-md-2 mb-3 mb-md-0 me-0 me-md-5">
                    <i class="fa-solid fa-play"></i>
                    <h3> 750 </h3>
                    <h5> Videos </h5>
                </div>
            </div>
        </div>
    </section>

    <!-- Subscribe -->

    <section class="subscribe">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-8 p-4 p-md-5">
                    <h4> For additional job search information or to receive our latest news and insights, let’s connect. </h4>
                </div>

                <div class="col-12 col-md-3 ps-3 ps-md-5 pt-0 pt-md-4">
                    <div class="row m-3">
                        <a href="contact.php"> <button class="con-btn"> Contact us <i class="fa-solid fa-right-long"></i> </button> </a>
                    </div>
                    <div class="row m-3">
                        <a href="https://gowthamrajnetwork.com/subscription/plans/"> <button class="sub-btn"> Subscribe <i class="fa-solid fa-right-long"></i> </button> </a>
                    </div>
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