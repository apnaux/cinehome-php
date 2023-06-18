<?php

require($_SERVER["DOCUMENT_ROOT"] . "/connection.php");

session_start();

if ($_SESSION['user_name'] != '') {
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
    $user_type = $_POST['user_type'];

    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_array($result);

        if ($row['user_type'] == 'user') {

            $_SESSION['user_name'] = $row['name'];

            if($_GET['movieid']){
                header('Location: ' . $_SERVER["DOCUMENT_ROOT"] . '/web/watch/home.php' . '/?movieid='. $_GET['movieid']);
                die();
            }

            header('location: /web/watch/home.php');

        }

    } else {
        $error[] = 'incorrect email or password!';
    }

};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cinehome: Log-in</title>
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
            <input type="email" name="email" required placeholder="email">
            <input type="password" name="password" required placeholder="password">
            <input type="submit" name="submit" value="login here" class="form-btn">
            <p>have no account yet? <a href="/web/user/signup.php/<?php if($_GET['movieid']){ echo '?movieid=' . $_GET['movieid']; } ?>">register here</a></p>
            <a href="/">go back</a>
        </form>

    </div>

</body>

</html>