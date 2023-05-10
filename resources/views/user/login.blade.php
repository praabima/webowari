<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="frontend/css/styles.css">
    <title>signin-signup</title>
</head>

<body>
    <div class="container">
        <div class="signin-signup">
            <form action="" class="sign-in-form">
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password">
                </div>
                <input type="submit" value="Login" class="btn">

                <p class="account-text">Don't have an account? <a href="#" id="sign-up-btn2">Sign up</a></p>
            </form>
            <form action="" class="sign-up-form">
                <h2 class="title">Sign up</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username">
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password">
                </div>
                <div class="input-field">
                    <i class="fa fa-phone"></i>
                    <input type="No.Telp" placeholder="No.Telp">
                </div>
                <div class="input-field">
                    <i class="fa fa-address-book"></i>
                    <input type="Alamat" placeholder="Alamat">
                </div>
                <input type="submit" value="Sign up" class="btn">

                <p class="account-text">Already have an account? <a href="#" id="sign-in-btn2">Sign in</a></p>
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Member of Brand?</h3>
                    <p>Come, sign in now</p>
                    <button class="btn" id="sign-in-btn">Sign in</button>
                </div>
                <img src="frontend/img/logobr.png" alt="" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Newcomer?</h3>
                    <p>Let's push this button</p>
                    <button class="btn" id="sign-up-btn">Sign up</button>
                </div>
                <img src="frontend/img/logobr.png" alt="" class="image">
            </div>
        </div>
    </div>
    <script src="frontend/js/app.js"></script>
</body>

</html>
