<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sird </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style type="text/css">
        #alert,
        #register-box,
        #forgot-box{
            display: none;
        }
    </style>
  
</head>


<body class="bg-dark">
    <div class="container mt-4">
        

        <!-- login form -->
        <div class="row">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="login-box">
                <h2 class="text-center mt-2">Login</h2>
                <form action="" method="post" role="form" class="p-2" id="login-frm">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="ren" class="custom-control-input" id="customCheck">
                            <label for="customCheck" class="custom-control-label">Remember Me</label>
                            <a href="#" id="forgot-btn" class="float-right">Forgot Password?</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login" id="login" value="Login" class="btn btn-primary btn-block">
                    </div>
                    <div class="form-group">
                        <p class="text-center">New User? <a href="#" id="register-btn">Register Here</p>
                    </div>
                </form>
            </div>
        </div>

        <!-- registeration form -->
        <div class="row">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="register-box">
                <h2 class="text-center mt-2">Register</h2>
                <form action="" method="post" role="form" class="p-2" id="register-frm">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="uname" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="cpass" class="form-control" placeholder="Confirm Password" required>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="ren" class="custom-control-input" id="customCheck2">
                        <label for="customCheck2" class="custom-control-label">I agree to the <a href="#"> terms & conditions.</a></label>
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" name="register" id="register" value="Register" class="btn btn-primary btn-block">
                    </div>
                    <div class="form-group">
                        <p class="text-center">Already Registered ? <a href="#" id="login-btn">Login Here</a></p>
                    </div>
                </form>
            </div>
        </div>

        <!-- forget password -->
        <div class="row">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="forgot-box">
                <h2 class="text-center mt-2">Forgot Password</h2>
                <form action="" method="post" role="form" class="p-2" id="forgot-frm">
                    <div class="form-group">
                        <small class="text-muted">
                            To reset your password , enter the email address and we will send reset password instructions on your email.
                        </small>
                    </div>
                    <div class="form-group">
                        <input type="email" name="femail" class="form-control" placeholder="E-Mail" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="forgot" id="forgot" value="Reset" class="btn btn-primary btn-block">
                    </div>
                    <div class="form-group text-center">
                        <a href="#" id="back-btn">Back</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $("#register-btn").click(function(){
            $("#register-box").show();
            $("#login-box").hide();
        });
        $("#login-btn").click(function(){
            $("#register-box").hide();
            $("#login-box").show();
            });
        $("#forgot-btn").click(function(){
            $("#login-box").hide();
            $("#forgot-box").show();
        });
        $("#back-btn").click(function(){
            $("#forgot-box").hide();
            $("#login-box").show();
        });
    });
</script>

</body>

</html>