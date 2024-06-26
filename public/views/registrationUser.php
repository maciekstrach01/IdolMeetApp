<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Find the band you want">
        <meta name="keywords" content="band">
        <title>USER-REGISTRATION PAGE</title>
        <link rel="stylesheet"  type="text/css" href="public/css/styleRegistration.css">
        <script type="text/javascript" src="public/js/validationUser.js" defer></script>
        <script type="text/javascript" src="public/js/togglePassword.js" defer></script>
    </head>
    <body>
            <div id="Page_topbar">
                <img class="Logo-small" src="public/img/logo.svg">
            </div>
            <!-- <div class="Page-Title-Bar">
                <span>Registration form </span>
            </div> -->
            <div id="container">
                    <div id="root">
                        <div class="PageContainer">
                            <section class="Registration-section">
                                <section class="ContainerBox">
                                    <h1 class="SignUp-Title">Sign Up User</h1>
                                    <form class="SignUp-form" action="registrationUser" method="POST">
                                        <div class="messages">
                                            <?php
                                            if(isset($messages)){
                                                foreach ($messages as $message){
                                                    echo $message;
                                                }
                                            }
                                            ?>
                                        </div>
                                        <div class="Input-container">
                                            <input class="Input_input" type="text"  name="username" placeholder="Username" required>
                                        </div>
                                        <div class="Input-container">
                                            <input class="Input_input" type="text" name="email" placeholder="Email" required>
                                        </div>
                                        <div class="Input-container">
                                            <input class="Input_input Input_input_password" type="password"  name="password" placeholder="Password"  required>
                                        </div>
                                        <div class="Input-container">
                                            <input class="Input_input Input_input_password" type="password" name="password2" placeholder=" Repeat password" required>
                                        </div>
                                        <!-- <label class="SignUp-checkBox">
                                            <input type="checkbox" onchange="toogleInput(this)">
                                            <em>Show password?</em>
                                        </label> -->
                                        <label class="SignUp-checkBox">
                                        <input type="checkbox" onchange="toogleInput(this)">
                                        <em style="font-size: 1.5em;">Show password?</em>
                                    </label>
                                        <div class="SignUp-formOptions">
                                            <button class="ButtonSignUp" type="submit">
                                                SIGN UP
                                            </button>
                                            <!-- <div class="SignUp-optionlink">
                                                <a href="login">Log in</a>
                                            </div> -->
                                            <div class="SignUp-optionlink">
                                            <a class="ButtonSignUp" href="login">Log in</a> <!-- Apply ButtonSignUp class to Log in link -->

</div>
                                        </div>
                                    </form>
                                </section>
                                    <img class="Login-logo" src="public/img/wh.jpg">
                            </section>
                        </div>
                    </div>
            </div>
    </body>
</html>