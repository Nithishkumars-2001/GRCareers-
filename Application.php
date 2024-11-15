<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Application </title>

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

    <!--Responsibility-->

    <section class="responsibility py-5" style="background-color: aliceblue;">
        <div class="container">
            <h3 class="py-3"> Responsibility </h3>
            <p>✦ A Developer is responsible for designing, coding, and testing software applications to meet both functional and technical requirements. </p>
            <p>✦ They collaborate with cross-functional teams, including product managers and designers, to ensure the software aligns with user needs and business goals.</p>
            <p>✦ Developers are tasked with debugging, troubleshooting, and maintaining code to ensure optimal performance and reliability. </p>
            <p>✦ They also write and execute tests to ensure software quality, addressing bugs and performance bottlenecks. </p>
            <p>✦ Finally, they stay updated with the latest technologies and best practices to continuously improve code efficiency, scalability, and security. </p>
        </div>
    </section>

    <!-- Application Process -->

    <section class="application">
        <div class="container">

            <h2 class="text-center py-4"> Application Process </h2>

            <form action="" method="">
                <!-- Name -->
                <div class="mb-3">
                    <label for="Name" class="form-label">Name<span class="text-danger ps-1">*</span></label>
                    <input type="text" class="form-control" id="Name" name="Name" required>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email<span class="text-danger ps-1">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <!-- Phone -->
                <div class="mb-3">
                    <label for="Phone" class="form-label">Phone<span class="text-danger ps-1">*</span></label>
                    <input type="number" class="form-control" id="phone" name="phone" required>
                </div>

                <!-- DOB -->
                <div class="mb-3">
                    <label for="dob" class="form-label">DOB<span class="text-danger ps-1">*</span></label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
                </div>

                <!-- Gender -->
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender<span class="text-danger ps-1">*</span></label>
                    <input type="text" class="form-control" id="gender" name="gender" required>
                </div>

                <!-- Designation -->
                <div class="mb-3">
                    <label for="designation" class="form-label"> Designation <span class="text-danger ps-1">*</span></label>
                    <input type="text" class="form-control" id="designation" name="designation" required>
                </div>

                <!-- Country -->
                <div class="mb-3">
                    <label for="country" class="form-label">Country<span class="text-danger ps-1">*</span></label>
                    <input type="text" class="form-control" id="country" name="country" required>
                </div>

                <!-- Current City -->
                <div class="mb-3">
                    <label for="city" class="form-label">Current City<span class="text-danger ps-1">*</span></label>
                    <input type="text" class="form-control" id="city" name="city" required>
                </div>

                <!-- Resume -->
                <div class="mb-3">
                    <label for="country" class="form-label">Resume<span class="text-danger ps-1">*</span></label>
                    <input type="file" class="form-control" id="Resume" name="Resume" required>
                </div>

                <!-- Social Link -->
                <div class="mb-3">
                    <label for="sociallink" class="form-label">Social link<span class="text-danger ps-1">*</span></label>
                    <input type="text" class="form-control" id="sociallink" name="sociallink" required>
                </div>

                <!-- Current Employment Status -->
                <div class="mb-3">
                    <label for="employmentstatus" class="form-label">Current Employment Status<span class="text-danger ps-1">*</span></label>
                    <input type="text" class="form-control" id="employmentstatus" name="employmentstatus" required>
                </div>

                <!-- Work Sample Links -->
                <div class="mb-3">
                    <label for="worksamplelinks" class="form-label">Work Sample Links<span class="text-danger ps-1">*</span></label>
                    <input type="text" class="form-control" id="worksamplelinks" name="worksamplelinks" required>
                </div>


                <!-- Register Button -->
                <button type="submit" class="btn btn-primary w-100 my-4" value="apply" name="apply"> Apply </button>
            </form>
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