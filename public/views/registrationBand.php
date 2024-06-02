<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Find the band you want">
        <meta name="keywords" content="band">
        <title>ARTIST-REGISTRATION PAGE</title>
        <link rel="stylesheet"  type="text/css" href="public/css/styleRegistrationBand.css">
        <script type="text/javascript" src="public/js/validationBand.js" defer></script>
        <script type="text/javascript" src="public/js/togglePassword.js" defer></script>
    </head>
    <body>
            <div id="Page_topbar">
                <img class="Logo-small" src="public/img/logo.svg">
            </div>
            <div id="container">
                    <div id="root">
                        <div class="PageContainer">
                            <section class="Registration-section">
                                <section class="ContainerBox">
                                    <h1 class="SignUp-Title">Sign Up Artist</h1>
                                    <form class="SignUp-form" action="registrationBand" method="POST">
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
                                            <input class="Input_input" type="text" name="username" placeholder="Artist's nickname or pseudonym" required >
                                        </div>
                                        <div class="Input-container">
                                            <input class="Input_input" type="text" name="email" placeholder="Address email"  required>
                                        </div>
                                        <div class="Input-container">
                                            <input class="Input_input Input_input_password" type="password" name="password" placeholder="Password" required >
                                        </div>
                                        <div class="Input-container">
                                            <input class="Input_input Input_input_password" type="password" name="password2" placeholder="Repeat your password" required>
                                        </div>
                                        <div class="Input-container">
                                            <input class="Input_input" type="url" name="schedule" placeholder="Link to your schedule" required>
                                        </div>
                                        <div class="Input-container">
                                            <input class="Input_input" type="url" name="yt" placeholder=" Link to example song" required>
                                        </div>
                                        <div class="Input-container">
                                            <input class="Input_input" type="url" name="fb" placeholder=" Link facebook fanpage" required>
                                        </div>
                                        <div class="Input-container">
                                            <textarea class="comment-box" cols="22" rows="12" name="description" placeholder="Type your comment" required></textarea>
                                        </div>
                                        <label class="SignUp-checkBox">
                                            <input type="checkbox" onchange="toogleInput(this)">
                                            <em>Show password?</em>


</label>
                                        <div class="SignUp-formOptions">
                                        <button class="ButtonSignUp" type="submit">
                                            SIGN UP
                                        </button>
                                        <div class="SignUp-optionlink">
                                            <a class="ButtonSignUp" href="login">Log in</a> 
                                        </div>
                                    </div>
                                    </form>
                                </section>
                                    <img class="Login-logo" src="public/img/kc.jpg">
                            </section>
                        </div>
                    </div>
            </div>
    </body>
</html>