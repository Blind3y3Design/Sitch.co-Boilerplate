<?php
//CONNECTION VARIABLES
$server_location = "localhost";
$database = "dearevan";
$username = "maximus";
$password = "ltiS950+";

$first_name = $last_name = $email = $state = $zip = '';
$errors = array();
if ($_POST) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $signup = $_POST['opt_in'];

    if ($first_name == '') {$errors['first_name'] = "Please enter your first name";}
    if ($last_name == '') {$errors['last_name'] = "Please enter your last name";}
    if ($email == '') {$errors['email'] = "Please enter your email";}
    if ($state == '') {$errors['state'] = "Select state";}
    if ($zip == '') {$errors['zip'] = "Please enter your zip";}

    if (count($errors) == 0) {

        $db = mysql_connect($server_location,$username,$password);
        mysql_select_db($database,$db);
        $query = "INSERT INTO signups (first_name,last_name,email,state,zip,email_signup,created)
           VALUES ('".mysql_real_escape_string($first_name)."','".mysql_real_escape_string($last_name)."',
              '".mysql_real_escape_string($email)."','".mysql_real_escape_string($state)."','".mysql_real_escape_string($zip)."',
              '".mysql_real_escape_string($signup)."','".date("Y-m-d H:i:s")."')";
        $result = mysql_query($query);

        header("Location: _subscription-form.php");exit;
    }
}
?>