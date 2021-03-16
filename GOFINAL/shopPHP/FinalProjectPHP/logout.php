<?php
require "login.php";
?>

<form action="registrationfrom.php" method="post">
<button type="submit" name="log_out">Log out</button>
</form>
<?php
if(isset($_POST['log_out'])) {
    unset($_SESSION['logged_user']);
    header('Location:registrationfrom.php');
}
?>