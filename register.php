<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sasol E-commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="./images/logo3.jpg">
</head>
<body>

<!--NavBar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light py-3 fixed-top">
    <!--<img src= "./images/logo2.jpg"/> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="shop.php">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
            <li class="nav-item">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <i class="fa fa-user" aria-hidden="true"></i>
            </li>
        </ul>
    </div>
</nav>

<!--Register-->
<section class="my-5 py-5">
    <div class="container text-center mt-3 pt-5">
        <h2 class="form-weight-bold">Register</h2>
        <hr class="mx-auto">
    </div>
    <div class="mx-auto container">
        <form id="register-form" onsubmit="return validateForm()">

            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" id="register-name" name="name" placeholder="Name" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" id="register-email" name="email" placeholder="Email" required>
                <span id="email-error" class="text-danger"></span>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" id="register-password" name="password" placeholder="Password" required>
            </div>

            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" id="register-confirm-password" name="confirmpassword" placeholder="Confirm Password" required>
                <span id="password-error" class="text-danger"></span>
            </div>

            <div class="form-group">
                <input type="submit" class="btn" id="register-btn" value="Register"/>
            </div>

            <div class="form-group">
                <a id="login-url" class="btn" href="login.php">Do you have an account? Login Here</a>
            </div>

        </form>
        <div id="success-message" class="text-success mt-3" style="display: none;"></div>
    </div>
</section>

<!--footer-->
<footer class="mt-5 py-5">
    <div class="row container mx-auto pt-5">
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <img src="./images/logo3.jpg"/>
            <p class="pt-3"><br>We provide the very best high-end products for our clients</p>
        </div>

        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <h5 class="pb-2">Featured</h5>
            <ul class="text-uppercase">
                <li><a href="#">new arrivals</a></li>
            </ul>
        </div>
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <h5 class="pb-2">Contact Us</h5>
            <div>
                <h6 class="text-uppercase">Address</h6>
                <p>1234 Street, Sandton</p>
            </div>

            <div>
                <h6 class="text-uppercase">Phone</h6>
                <p>087 257 3367</p>
            </div>

            <div>
                <h6 class="text-uppercase">Email</h6>
                <p>sasol@gmail.com</p>
            </div>
        </div>

        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
            <h5 class="pb-2"></h5>
        </div>
    </div>

    <div class="copyright mt-5">
        <div class="row container mx-auto">
            <div class="col-lg-3 col-md-5 col-sm-12 mb-4 text-nowrap mb-2">
                <p>eCommerce @ 2024 All Right Reserved</p>
            </div>
            <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                <a href="https://www.facebook.com/SasolLTD/"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/sasolsa/"><i class="fab fa-instagram"></i></a>
                <a href="https://x.com/sasolsa?lang=en"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
function validateForm() {
    let email = document.getElementById("register-email").value;
    let password = document.getElementById("register-password").value;
    let confirmPassword = document.getElementById("register-confirm-password").value;

    let emailError = document.getElementById("email-error");
    let passwordError = document.getElementById("password-error");

    let valid = true;

   
    if (email.indexOf("@") === -1) {
        emailError.textContent = "Email must contain '@'.";
        valid = false;
    } else {
        emailError.textContent = "";
    }

    
    if (password !== confirmPassword) {
        passwordError.textContent = "Passwords do not match.";
        valid = false;
    } else {
        passwordError.textContent = "";
    }

    if (valid) {
        
        const successMessage = document.getElementById("success-message");
        successMessage.textContent = "New user has been added successfully!";
        successMessage.style.display = "block";

        
        document.getElementById("register-form").reset();
    }

    return valid;
}
</script>
</body>
</html>
