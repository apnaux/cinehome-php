<?php

require($_SERVER["DOCUMENT_ROOT"] . "/connection.php");

session_start();

if ($_SESSION['user_name']) {
    if($_GET['movieid']){
        header('Location: /web/watch/movie-details.php' . '/?movieid='. $_GET['movieid']);
        die();
    }
    header('Location: /web/watch/home.php');
}

if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);

    $select = " SELECT * FROM account WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {

        $error[] = 'user already exists!';

    } else {

        if ($pass != $cpass) {
            $error[] = 'password not matched!';
        } else {
            $insert = "INSERT INTO account(email, password, full_name, full_address) VALUES('$email','$pass','$name','NU Laguna')";
            mysqli_query($conn, $insert);

            if($_GET['movieid'] != ''){
                header('Location: login.php' . '/?movieid='. $_GET['movieid']);
                die();
            }

            header('location: login.php');
        }
    }

};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cinehome: Sign-up</title>
    <link href="/assets/index.css" rel="stylesheet">
    <link href="/assets/fonts.css" rel="stylesheet">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="/web/user/user.style.css">

</head>

<body class="bg-cover bg-fixed font-instrument" style="background-image: url('/assets/images/mock/film.jpg');">

    <div class="form-container">

        <form action="" method="post">
            <h3 class="font-solitus text-red-900">cinehome.</h3>
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="error-msg">' . $error . '</span>';
                };
            };
            ?>
            <input type="text" name="name" required placeholder="name">
            <input type="email" name="email" required placeholder="email">
            <input type="password" name="password" required placeholder="password">
            <input type="password" name="cpassword" required placeholder="confirm password">
            <input type="submit" name="submit" value="sign up here!" class="form-btn">
            <p>already have an account? <a href="/web/user/login.php/<?php if($_GET['movieid']){ echo '?movieid=' . $_GET['movieid']; } ?>">log in here!</a></p>
            <a href="/">go back</a>
        </form>

    </div>

</body>

</html>