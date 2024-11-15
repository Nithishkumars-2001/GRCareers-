<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sign In </title>

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
</head>

<body>

    <!-- Sign in -->

    <section class="sign-in">
        <div class="container-fluid">
            <div class="row">
                <div class="company-brand col-12 col-md-6">
                    <img src="image/company-logo.png" alt="company logo" class="mx-auto d-block">
                    <h1 class="text-center pt-3"> Gowthamraj Network </h1>
                </div>

                <div class="sign-in-container col-12 col-md-6 p-5">
                    <h1 class="text-center mb-4"> Welcome! </h1>

                    <!-- Sign In Form -->
                    <form action="dbConnect.php" method="post">

                        <div class="sign-form-input row">
                            <!-- Email Field -->
                            <div class="mb-3 col-12 px-0 px-md-5">
                                <label for="email" class="form-label"> </label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email or Username" required>
                            </div>

                            <!-- Password Field -->
                            <div class="mb-3 col-12 px-0 px-md-5">
                                <label for="password" class="form-label"> </label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            </div>

                            <div class="check-frogot px-1 px-md-5 pt-4">
                                <!-- Remember Me Checkbox -->
                                <div class="mb-3 check-box col pt-3">
                                    <input type="checkbox" class="form-check-input" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">Remember me</label>
                                </div>

                                <!-- Forgot Password -->
                                <div class="text-center mt-3">
                                    <a href="#">Forgot password?</a>
                                </div>
                            </div>

                            <!-- Sign In Button -->
                            <div class="sign-btn py-4">
                                <button type="submit" value="Sign In" name="signIn"> Login In </button>
                            </div>

                            <div class="sign-google-facebook row ms-2 mt-2">
                                <button type="button" class="col-12 col-md-5 me-0 me-md-5"> <a href="#"> <i class="fa-brands fa-google text-warning pe-2"></i> Sign in with Google </a> </button>
                                <button type="button" class="col-12 col-md-5 ms-0 ms-md-5 mt-3 mt-md-0"> <a href="#"> <i class="fa-brands fa-facebook-f text-info pe-2"></i> Sign in with Facebook </a> </button>
                            </div>

                        </div>
                    </form>

                    <div class="clik-register pt-4 ps-2">
                        <h6>Don't have an account? <a href="register.php"> Register </a></h6>
                    </div>
                </div>

            </div>
        </div>
    </section>






    <script src="script.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"> </script>
</body>

</html>