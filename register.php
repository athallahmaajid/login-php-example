<?php
require_once "core/init.php";
require_once "views/header.php";

$error = '';


if (isset($_POST['submit'])){
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if (!empty(trim($username)) && !empty(trim($email)) && !empty(trim($password))){
        if (register($username, $email, $password)){
            header('Location: index.php');
        } else {
            $error = mysqli_error($link);
        }
    } else {
        $error = "harap isi semua";
    }
}
?>

<form action="" method="post">
    <label for="username">Username</label> <br>
    <input type="text" name="username"> <br><br>

    <label for="email">Email</label> <br>
    <input type="text" name="email"> <br><br>

    <label for="password">Password</label> <br>
    <input type="password" name="password"> <br><br>

    <div id="error"><?php echo $error; ?></div> <br>

    <input type="submit" value="Submit" name="submit">
</form>

<?php
require_once 'views/footer.php';
?>