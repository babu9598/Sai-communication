<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/login style.css">
    <title> Login & Registration</title>
</head>
<style>
    #sri {
        background-image: url(assets/images/img3.jpg);
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }

    #register {
        padding-bottom: -100px;
    }
</style>
<script>
    function sri(){

    
    let name=document.getElementById("email").value;
    let password=document.getElementById("password").value;
  
    if(name=="sriannamalai2003@gmail.com" && password==123){
        alert("valid");
    }
    else{
        alert("invalid");
    }
}
</script>

<body>
    <div id="sri">
        <div class="wrapper">
            <nav class="nav">

                <div class="nav-button">
                    <button class="btn white-btn" id="loginBtn" onclick="login()">Sign In</button>
                    <button class="btn" id="registerBtn" onclick="register()">Sign Up</button>
                </div>
                <div class="nav-menu-btn">
                    <i class="bx bx-menu" onclick="myMenuFunction()"></i>
                </div>
            </nav>

            <!----------------------------- Form box ----------------------------------->

            <div class="form-box">

                <!------------------- login form -------------------------->


                <div class="login-container" id="login">
                    <div class="top">
                        <span>Don't have an account? <a href="#" onclick="register()">Sign Up</a></span>
                       
                        <span>Login</span>
                    </div>
                    <div class="input-box">
                        <input id="email" type="text" class="input-field" placeholder="Username or Email" required>
                        <i class="bx bx-user"></i>
                    </div>
                    <div class="input-box">
                        <input id="password" type="password" class="input-field" placeholder="Password " required>
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    <div class="input-box">
                        <input type="submit" onclick="sri()" class="submit" value="Sign In" required>
                    </div>
                    <div class="two-col">
                        <div class="one">
                            <input type="checkbox" id="login-check">
                            <label for="login-check"> Remember Me</label>
                        </div>
                        <div class="two">
                            <label><a href="forget.php">Forgot password?</a></label>
                        </div>
                    </div>
                </div>

                <!------------------- registration form -------------------------->

                <div class="register-container" id="register">
                    <div class="top">
                        <span>Have an account? <a href="#" onclick="login()">Login</a></span>
                        <span>Signup</span>
                    </div>
<form action="sailogin.php" method="post">
                    <div class="two-forms">

                        <div class="input-box">
                            <input type="text" class="input-field" name="firstname" placeholder="Firstname" required>
                            <i class="bx bx-user"></i>
                        </div>
                        <div class="input-box">
                            <input type="text" class="input-field" name="lastname" placeholder="Lastname" required>
                            <i class="bx bx-user"></i>
                        </div>
                    </div>
                    <div class="input-box">
                        <input type="text" class="input-field" name="email" placeholder="Email" required>
                        <i class="bx bx-envelope"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" class="input-field" name="password" placeholder="Password" required>
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    <div class="input-box">
                        <input type="submit" class="submit" value="Register">
                    </div>


                    <div class="two-col">
                        <div class="one">
                            <input type="checkbox" id="register-check">
                            <label for="register-check"> Remember Me</label>
                        </div>
                        <div class="two">
                            <label><a href="#">Terms & conditions</a></label>
                        </div>
                    </div>


                </div>
            </form>
            </div>
        </div>
    </div>

    <?php include 'footer.php' ;?>


    <script>

        function myMenuFunction() {
            var i = document.getElementById("navMenu");

            if (i.className === "nav-menu") {
                i.className += " responsive";
            } else {
                i.className = "nav-menu";
            }
        }

    </script>

    <script>

        var a = document.getElementById("loginBtn");
        var b = document.getElementById("registerBtn");
        var x = document.getElementById("login");
        var y = document.getElementById("register");

        function login() {
            x.style.left = "4px";
            y.style.right = "-520px";
            a.className += " white-btn";
            b.className = "btn";
            x.style.opacity = 1;
            y.style.opacity = 0;
        }

        function register() {
            x.style.left = "-510px";
            y.style.right = "5px";
            a.className = "btn";
            b.className += " white-btn";
            x.style.opacity = 0;
            y.style.opacity = 1;
        }

    </script>

</body>

    </html>