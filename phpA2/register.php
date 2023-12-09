<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title of the web page -->
    <title>SignUp Form</title>
    <!-- Define the viewport for responsive design -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Define character set -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Link to the CSS file -->
    <link href="./css/style.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
    <!-- Container for the main content -->
    <div class="main-w3layouts wrapper">
        <!-- Heading of the form -->
        <h1>Creative SignUp Form</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <!-- Form for user signup, action to 'signup.php' using POST method -->
                <form action="signup.php" method="post">
                    <!-- Input field for username -->
                    <input class="text" type="text" name="username" placeholder="Username" required="">
                    <!-- Input field for email -->
                    <input class="text email" type="email" name="email" placeholder="Email" required="">
                    <!-- Input field for password -->
                    <input class="text" type="password" name="password" placeholder="Password" required="">
                    <!-- Input field to confirm password -->
                    <input class="text w3lpass" type="password" name="confirm_password" placeholder="Confirm Password" required="">
                    <!-- Checkbox for agreeing to terms and conditions -->
                    <div class="wthree-text">
                        <label class="anim">
                            <input type="checkbox" class="checkbox" required="">
                            <span>I Agree To The Terms & Conditions</span>
                        </label>
                        <div class="clear"> </div>
                    </div>
                    <!-- Submit button for signup -->
                    <input type="submit" value="SIGNUP" name="signup">
                </form>
                <!-- Link to login page -->
                <p>Have an Account? <a href="./login.html"> Login Now!</a></p>
            </div>
        </div>
        <!-- Copyright information -->
        <div class="colorlibcopy-agile">
            <p>© 2018 Colorlib Signup Form. All rights reserved </p>
        </div>
        <!-- Animated bubbles in the background -->
        <ul class="colorlib-bubbles">
            <li></li>
            <li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
            <!-- Several list items for the bubbles -->
        </ul>
    </div>
</body>
</html>
