<?php
require_once "core/init.php";
require_once "views/header.php";

$error = '';

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (!empty(trim($username)) && !empty(trim($password))){
        if (login($username, $password)){
            header('Location: index.php');
        } else {
            $error = "tidak dapat login";
        }
    } else {
        $error = "harap isi semua";
    }
}
?>

<form action="" method="post">
    <label for="username">Username</label> <br>
    <input type="text" name="username"> <br><br>

    <label for="password">Password</label> <br>
    <input type="password" name="password"> <br><br>

    <div><?php echo $error; ?></div> <br>

    <input type="submit" value="Submit" name="submit">
</form>

<?php
require_once 'views/footer.php';
?>