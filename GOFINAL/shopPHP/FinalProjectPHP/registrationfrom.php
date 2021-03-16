<?php
session_start();
require 'db.php';
require_once 'headerr.php';
?>
</section>
<?php require 'login.php';
if (!isset($_SESSION['logged_user'])):?>
    <form action="registrationfrom.php" method="POST">
        <div class="regis">
            <div><label for="email">Email</label></div>
            <input type="email" name="email" id="email" style="width: 40%;" value="<?php echo @$data['email'] ?>">
            <br><br>
            <div><label for="password">Password</label></div>
            <input type="password" name="password" id="password" style="width: 40%;" value="<?php echo @$data['password'] ?>">
            <div><a href="#">Forgot your password ?</a></div>
            <br>
            <button style="width: 40%;" name="do_login" id="btn-submit">Sign in</button>
        </div>
    </form>
    </div>
    </div>
    </section>

    <br>
    <br>
    <section class="my-4">
        <div class="container">
            <div class="row">
                <div class="container-fluid text-center">
                    <h1>CREATE ACCOUNT</h1>
                    <hr>
                </div>
            </div>
        </div>
    </section>
    <?php require 'signup.php' ?>

    <form class="regis" action="registrationfrom.php" method="POST">
        <div><label for="fname">First name</label></div>
        <input type="text" name="fname" id="fname" style="width: 40%;">
        <br><br>
        <div><label for="lname">Last name</label></div>
        <input type="text" name="lname" id="lname" style="width: 40%;">
        <br><br>
        <div><label for="email">Email</label></div>
        <input type="email" name="email" style="width: 40%; " value="<?php echo @$data['email'] ?>" required>
        <br><br>
        <div><label for=" password">Password</label></div>
        <input type="password" name="password" id="password" style="width: 40%;"
               value="<?php echo @$data['password'] ?>" required>
        <br><br>
        <div><label for=" password">Repeat your password</label></div>
        <input type="password" name="password_2" id="password" style="width: 40%;" required
               value="<?php echo @$data['password_2'] ?>">
        <br><br>
        <button style="width: 40%;" name="do_signup" type="submit">Sign up</button>

    </form>
    </div>
    </div>
    </section>

<?php
else:?>
    <div class="container-fluid"><h5>Hi, <?php echo $_SESSION['fname'];
            require 'logout.php'; ?></h5></div>
<?php endif;
require 'footer.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {

        $(".do_login").click(function(event) {
            event.preventDefault();
            $.ajax('authorization.php', {
                type: 'POST', // http method
                data: {
                    email: $(".email").val(),
                    password: $(".password").val()
                }, // data to submit
                accepts: 'application/json; charset=utf-8',
                success: function(data) {
                    if (data.message == 'successs') {
                        window.location.href = "index.php";
                    }
                },
                error: function(errorData) {

                    var msg = (errorData.responseJSON != null) ? errorData.responseJSON.errorMessage : '';
                    $("#errormsg").text('Error: ' + msg + ', ' + errorData.status);

                    $("#errormsg").show();
                }
            });


        });
</script>
