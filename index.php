<?php
session_start();

//include("authentication.php");
include("functions.php");

$user_data = check_login($auth);
?>


<?php   
include_once('lib/header.php');
?>

        <h1>Welcome to Zuri Dance School</h1>  <hr/>
        <p>Please sign up or log in for our dance classes!  \(^_^)/  </p>

<?php
include_once('lib/footer.php');
?>