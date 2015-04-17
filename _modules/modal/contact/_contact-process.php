<?php
//CONNECTION VARIABLES
$server_location = "localhost";
$database = "dbname";
$username = "maximus";
$password = "ltiS950+";

$first_name = $last_name = $email = $message = $zip = '';
$errors = array();
if ($_POST) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if ($first_name == '') {$errors['first_name'] = "Please enter your first name";}
    if ($last_name == '') {$errors['last_name'] = "Please enter your last name";}
    if ($email == '') {$errors['email'] = "Please enter your email";}
    if ($message == '') {$errors['message'] = "Please enter your message";}

    if (count($errors) == 0) {

        $db = mysql_connect($server_location,$username,$password);
        mysql_select_db($database,$db);
        $query = "INSERT INTO signup_form (first_name,last_name,email,message,created)
           VALUES ('".mysql_real_escape_string($first_name)."','".mysql_real_escape_string($last_name)."',
              '".mysql_real_escape_string($email)."','".mysql_real_escape_string($message)."','".date("Y-m-d H:i:s")."')";
        $result = mysql_query($query);

        header("Location: _contact-form.php");exit;
    }
}
?>