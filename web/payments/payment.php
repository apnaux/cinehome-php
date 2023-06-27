<!DOCTYPE html>
<html>

<head>
    <title>Payment Succsss</title>
    <!-- Include Bootstrap CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-image: url("https://www.astound.com/wp-content/uploads/2022/11/netflix-hero-200x600-darker-1.webp");
            background-color: black;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;

        }


        .verify {
            width: 360px;
            height: min-content;
            padding: 20px;
            border-radius: 12px;
            background-color: #fff;

        }

        .verify h1 {
            font-size: 36px;
            margin-bottom: 25px;
        }

        .verify form {
            font-size: 20px;

        }

        .verify form .form-group {
            margin-bottom: 12px;
        }

        .login form input [type="submit"] {
            font-size: 20px;
            margin-top: 15px;
        }

        .Popup {
            width: 400px;
            background-color: #fff;
            border-radius: 6px;
            position: absolute;
            top: 0;
            left: 50%;
            transform: translate(-50%, -50%) scale(0.1);
            text-align: center;
            padding: 0 30px 30px;
            color: #333;
            visibility: hidden;
            transition: transform 0.4s, top 0.4s;
        }

        .open-popup {
            visibility: visible;
            top: 50%;
            transform: translate(-50%, -50%) scale(1);
        }

        .Popup h2 {
            font-size: 38px;
            font-weight: 500;
            margin: 30px 0 10px;
        }

        .Popup button {
            width: 100%;
            margin-top: 50px;
            padding: 10px 0;
            color: #fff;
            font-size: 18px;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<?php
require($_SERVER["DOCUMENT_ROOT"] . "/connection.php");
session_start();

$isCorrect = false;

$select = "SELECT * FROM account WHERE id=" . $_SESSION['account_id'];
$result = mysqli_query($conn, $select);

$value = mysqli_fetch_array($result);



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['password'])) {
        $isCorrect = $value['password'] == md5($_POST['password']);
    }

    if ($isCorrect) {
        // insert to payment
        $insert = "INSERT INTO payment(account_id, movie_id, method) VALUES(".$_SESSION['account_id'].", ".$_POST['movieid'].", '".$_POST['options']."')";
        $result = mysqli_query($conn, $insert);

        // get payment_id
        $select = "SELECT * FROM payment WHERE account_id=". $_SESSION['account_id'] ." and movie_id=". $_POST['movieid'];
        $result = mysqli_query($conn, $select);
        $value = mysqli_fetch_array($result);

        // insert to watch_history
        $insert = "INSERT INTO watch_history(movie_id, account_id, payment_id) VALUES(".$_POST['movieid'].", ".$_SESSION['account_id'].", ".$value['payment_id'].")";
        $result = mysqli_query($conn, $insert);
    } else {
        $password_err = "Your password is incorrect";
    }
}
?>

<body>
    <div class="verify">

        <h1 class="text-center">Password Verification:
        </h1>

        <form class="validate was-validated" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
            method="post">
            <input type="hidden" name="movieid" value="<?php if (isset($_GET['movieid'])) {
                echo $_GET['movieid'];
            } else {
                echo $_POST['movieid'];
            } ?>">
            <input type="hidden" name="options" value="<?php if (isset($_GET['options'])) {
                echo $_GET['options'];
            } else {
                echo $_POST['options'];
            } ?>">
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required
                    class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback">
                    <?php echo $password_err; ?>
                </span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success btn-block" value="Confirm">
                <?php if ($isCorrect) { ?>
                    <div class="Popup open-popup" id="popupID">
                        <h2>Payment Successful</h2>
                        <p>Your movie has been successfully purchased.</p>
                        <button type="button" class="btn btn-success btn-block" onclick="closePopup(); window.location.href = '/web/watch/details.php?movieid=<?php if (isset($_GET['movieid'])) {
                            echo $_GET['movieid'];
                        } else {
                            echo $_POST['movieid'];
                        } ?>'">Confirm</button>
                    </div>
                <?php } ?>
            </div>
        </form>

    </div>
    <script>
        let popup = document.getElementById("popupID");
        function closePopup() {
            popup.classList.remove("open-popup");
        }
    </script>
</body>

</html>