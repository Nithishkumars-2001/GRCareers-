<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

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

    <!-- Blog option -->

    <section class="blog-option">
        <div class="card" style="background-color: rgb(217, 232, 246);">
            <div class="card-body">
                <div class="container-fluid row px-0 px-sm-3 px-md-5">
                    <h6 class="col-6 col-sm-4 col-md-2"> <a href="#" class="text-denger">Recent</a> </h6>
                    <h6 class="col-6 col-sm-4 col-md-2"> <a href="#">Comparisons</a> </h6>
                    <h6 class="col-6 col-sm-4 col-md-2"> <a href="#">Guides</a> </h6>
                    <h6 class="col-6 col-sm-4 col-md-2"> <a href="#">Reviews</a> </h6>
                    <h6 class="col-6 col-sm-4 col-md-2"> <a href="#">Resources</a> </h6>
                    <h6 class="col-6 col-sm-4 col-md-2"> <a href="#">Development</a> </h6>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent blogs -->

    <section class="recent-blog row p-5">

        <div class="post col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card">
                <img class="img-fluid rounded" src="image/post 1" alt="">
                <div class="card-body py-4">
                    <h6> Guides</h6>
                    <p> November 19, 2024 </p>
                    <h5> How to Create a Website Using HTML and CSS </h5>
                </div>
            </div>
        </div>

        <div class="post col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card">
                <img class="img-fluid rounded" src="image/post 4.webp" alt="">
                <div class="card-body py-4">
                    <h6> Comparisons </h6>
                    <p> October 18, 2024 </p>
                    <h5> How much does eCommerce Website Developme... </h5>
                </div>
            </div>
        </div>

        <div class="post col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card">
                <img class="img-fluid rounded" src="image/post 2.jpg" alt="">
                <div class="card-body py-4">
                    <h6> Guides</h6>
                    <p> October 18, 2024 </p>
                    <h5> 5 Best AI Content Generators for 2024 </h5>
                </div>
            </div>
        </div>

        <div class="post col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card">
                <img class="img-fluid rounded" src="image/post 3.jpg" alt="">
                <div class="card-body py-4">
                    <h6> Guides</h6>
                    <p> October 18, 2024 </p>
                    <h5> 5 Best AI Tools For Marketing To Grow You </h5>
                </div>
            </div>
        </div>

        <div class="post col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card">
                <img class="img-fluid rounded" src="image/post 1" alt="">
                <div class="card-body py-4">
                    <h6>Comparisons</h6>
                    <p> November 19, 2024 </p>
                    <h5> How AI YouTube Description Generator Can </h5>
                </div>
            </div>
        </div>

        <div class="post col-12 col-sm-6 col-md-3">
            <div class="card">
                <img class="img-fluid rounded" src="image/post 4.webp" alt="">
                <div class="card-body py-4">
                    <h6> Guides</h6>
                    <p> November 19, 2024 </p>
                    <h5> How To Create An eBook For Free In Simple </h5>
                </div>
            </div>
        </div>

        <div class="post col-12 col-sm-6 col-md-3">
            <div class="card">
                <img class="img-fluid rounded" src="image/post 5.jpg" alt="">
                <div class="card-body py-4">
                    <h6> Resources </h6>
                    <p> November 21, 2024 </p>
                    <h5> 5 Best Web Hosting for eCommerce Website </h5>
                </div>
            </div>
        </div>

        <div class="post col-12 col-sm-6 col-md-3">
            <div class="card">
                <img class="img-fluid rounded" src="image/post 2.jpg" alt="">
                <div class="card-body py-4">
                    <h6> Guides</h6>
                    <p> November 21, 2024 </p>
                    <h5> How to Create a Photography Website </h5>
                </div>
            </div>
        </div>

        <div class="post col-12 col-sm-6 col-md-3">
            <div class="card">
                <img class="img-fluid rounded" src="image/post 7.jpg" alt="">
                <div class="card-body py-4">
                    <h6> Resources</h6>
                    <p> May 4, 2024 </p>
                    <h5> Different Types of Web Hosting </h5>
                </div>
            </div>
        </div>

        <div class="post col-12 col-sm-6 col-md-3">
            <div class="card">
                <img class="img-fluid rounded" src="image/post 8.avif" alt="">
                <div class="card-body py-4">
                    <h6> Guides</h6>
                    <p> May 4, 2024 </p>
                    <h5> Why Blogging is Important for Your Business </h5>
                </div>
            </div>
        </div>

        <div class="post col-12 col-sm-6 col-md-3">
            <div class="card">
                <img class="img-fluid rounded" src="image/post 1" alt="">
                <div class="card-body py-4">
                    <h6> Development </h6>
                    <p> May 4, 2024 </p>
                    <h5> Make A Free Transparent Logo For Business </h5>
                </div>
            </div>
        </div>

        <div class="post col-12 col-sm-6 col-md-3">
            <div class="card">
                <img class="img-fluid rounded" src="image/post 7.jpg" alt="">
                <div class="card-body py-4">
                    <h6> Guides</h6>
                    <p> June 12, 2024 </p>
                    <h5> How to Increase Traffic to Your Blog </h5>
                </div>
            </div>
        </div>

        <div class="post col-12 col-sm-6 col-md-3">
            <div class="card">
                <img class="img-fluid rounded" src="image/post 2.jpg" alt="">
                <div class="card-body py-4">
                    <h6> Guides</h6>
                    <p> June 12, 2024 </p>
                    <h5> How To Create A Free Business Email </h5>
                </div>
            </div>
        </div>

        <div class="post col-12 col-sm-6 col-md-3">
            <div class="card">
                <img class="img-fluid rounded" src="image/post 1" alt="">
                <div class="card-body py-4">
                    <h6> Development</h6>
                    <p> August 16, 2024 </p>
                    <h5> Make A Free Transparent Logo For Business </h5>
                </div>
            </div>
        </div>

        <div class="post col-12 col-sm-6 col-md-3">
            <div class="card">
                <img class="img-fluid rounded" src="image/post 4.webp" alt="">
                <div class="card-body py-4">
                    <h6> Guides</h6>
                    <p> August 16, 2024 </p>
                    <h5> 10 Reasons Why Creating A "Free Website" </h5>
                </div>
            </div>
        </div>

        <div class="post col-12 col-sm-6 col-md-3">
            <div class="card">
                <img class="img-fluid rounded" src="image/post 5.jpg" alt="">
                <div class="card-body py-4">
                    <h6> Development</h6>
                    <p> September 20, 2024 </p>
                    <h5> Why SEO is Important for Your Business </h5>
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