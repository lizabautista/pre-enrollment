
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Sign In and Sign Up</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="css/Sign_in_up_style.css" type="text/css" media="all">
    <!-- onlinefonts -->
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
    <!-- //Custom-Stylesheet-Links -->
</head>

<body>
    <header>
        <h1 class="title-agile text-center">Signin & Signup form</h1>
    </header>
    <!-- //header -->
   <section class="login-wrap">
        <div class="main_w3agile">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
            <label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up">
            <label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form">
                <!-- signin form -->
                <div class="signin_wthree">
                    <form method="post" action="homepage.html">
                        <div class="group">
                            <label for="user" class="label">Username / ID Number:</label>
                            <input id="un" name='un' type="text" class="input" required>
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password: </label>
                            <input id="pw" name='pw' type="password" class="input" data-type="password" required>
                        </div>
                        <div class="group">
                            <input id="check" type="checkbox" class="check" checked>
                            <label for="check">
                                <span class="icon"></span> Keep me Signed in</label>
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="Sign In" name='sub' id='sub'>
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">
                            <h2><a href="#">Forgot Password?</a></h2>
                        </div>
                    </form>
                </div>
                <!-- signup form -->
                <div class="signup_wthree">
                    <form method="post" action="studcreate.php">
                        
						 <div class="group">
                            <label for="FName" class="label">First Name:</label>
                            <input id="fn" name="fn" type="text" class="input" required>
                        </div>
						 
						 <div class="group">
                            <label for="LName" class="label">Last Name:</label>
                            <input id="ln" name='ln' type="text" class="input" required>
                        </div>
                        <div class="group">
                            <label for="user1" class="label">Username / ID Number:</label>
                            <input id="un" name='un' type="text" class="input" required>
                        </div>
                        <div class="group">
                            <label for="password1" class="label">Password:</label>
                            <input id="pw" name="pw" type="password" class="input" data-type="password" required>
                        </div>
                         
	
                       
                        <div class="group">
                            <input type="submit" name='sub' id='sub' class="button" value="Sign Up">
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">
                            <label for="tab-1">Already Member? </label>
                        </div>
                    </form>
                </div>
                <!-- //signup form -->
            </div>
        </div>
    </section>

    <!-- //footer -->
    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
</body>
<!-- //Body -->

</html>