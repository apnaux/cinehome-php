<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/eva-icons"></script>
    <link href="/assets/index.css" rel="stylesheet">
    <link href="/assets/fonts.css" rel="stylesheet">
    <title>cinehome: Your Profile</title>
</head>

<?php
require($_SERVER["DOCUMENT_ROOT"] . "/connection.php");

session_start();

if ($_SESSION['account_id'] == '') {
    header('Location: /?nologin=true');
}

$name = '';
$address = '';
$email = '';
$row;

$select = "SELECT * FROM account WHERE id =" . $_SESSION['account_id'];
$result = mysqli_query($conn, $select);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    $email = $row['email'];
    $image = $row['profile_image'];
    $name = $row['full_name'];
    $address = $row['full_address'];
    $joined = date_format(date_create($row['created_at']), 'F d, Y');
}

if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();

    header('Location: /');
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $err = 0;

    if (md5($_POST['curpassword']) == $row['password'] || md5($_POST['password']) == $row['password']) {
        if ($_POST["submitForm"] == 'cred') {
            if ($_POST["email"] != '') {
                $select = "SELECT * FROM account where email='". $_POST["email"] ."'";
                $result = mysqli_query($conn, $select);

                if(mysqli_num_rows($result) > 0){
                    $err = 1;
                } else {
                    $email = $_POST["email"];
                }
            }

            if ($_POST["full_name"] != '') {
                $name = $_POST["full_name"];
            }

            if ($_POST["address"] != '') {
                $address = $_POST["address"];
            }

            if($err == 0){
                $select = "update account set email='" . $email . "', full_name='" . $name . "', full_address='" . $address . "', updated_at=CURRENT_TIMESTAMP() where id=" . $_SESSION['account_id'];
                $result = mysqli_query($conn, $select);
                $_SESSION['message'] = 'Successfully changed your credentials';
            } else {
                $_SESSION['message'] = 'E-mail already exists';
            }
        } elseif ($_POST["submitForm"] == 'pass') {
            if($_POST["confnewpass"] == $_POST['newpassword']){
                $select = "update account set password='" . md5($_POST['newpassword']) . "', updated_at=CURRENT_TIMESTAMP() where id=" . $_SESSION['account_id'];
                $result = mysqli_query($conn, $select);
                $_SESSION['message'] = 'Successfully changed your password';
            } else {
                $_SESSION['message'] = 'The passwords don\'t match.';
            }
        }
    } else {
        $_SESSION['message'] = 'Your password is incorrect';
    }

    header('Location: /web/user/profile.php');
}

mysqli_close($conn);

?>

<body
    class="flex flex-col bg-gradient-to-r from-blue-300 via-violet-400 to-red-300 select-none text-white font-instrument">
    
    <dialog class="changeImage backdrop:backdrop-blur-sm rounded-2xl border-none bg-transparent text-white backdrop-contrast-0">
        <form action="scripts/upload.php" method="post" enctype="multipart/form-data" class="flex flex-col gap-y-6 items-start h-full w-full p-4">
            <h1 class="font-bold text-2xl">Change your Profile Image</h1>
            <input type="file" name="image" id="image">
            <div class="flex flex-row gap-x-4">
                <button value="cancel" formmethod="dialog" class="py-2 px-3 backdrop-blur-2xl rounded-lg border font-medium transition hover:scale-110 active:scale-95">Cancel</button>
                <button type="submit" name="submit" value="submit" class="py-2 px-3 backdrop-blur-2xl rounded-lg border font-medium transition hover:scale-110 active:scale-95">Submit</button>
            </div>
        </form>
    </dialog>

    <img src="/assets/images/mock/profile_header.jpg" alt="bg-image" class="object-cover z-0 fixed">
    <nav class="fixed flex flex-row justify-between items-center px-24 py-12 h-20 w-full z-50 backdrop-blur-sm">
        <a href="#" class="text-5xl font-bold font-solitus active:text-current">
            cinehome.
        </a>
        <div class="flex flex-row space-x-12">
            <a href="/web/watch/home.php">Home</a>
            <a href="/web/watch/watch-history.php">Watch History</a>
            <p class="font-bold">Your Profile</p>
            <a href="/web/user/customer-service.html?accessedfrom=profile">Contact us</a>
            <a href="?logout=true">Log out</a>
        </div>
    </nav>
    <div class="h-20 py-12 backdrop-contrast-150"></div>
    <div
        class="w-screen flex flex-col justify-center items-center py-12 px-72 bg-gradient-to-b from-transparent to-black backdrop-contrast-150 gap-y-8 z-10">
        <div
            class="backdrop-blur-2xl backdrop-contrast-50 rounded-3xl w-full h-[348px] flex flex-row justify-start items-center gap-x-12 overflow-hidden relative">
            <button type="button" onclick="togglePopup()" class="absolute bottom-0 right-0 z-10 m-12 py-2 px-3 backdrop-blur-2xl rounded-lg border font-medium transition hover:scale-110 active:scale-95">Change Profile Image</button>
            <img src="<?php echo $image ?>" alt="a person" class="object-cover h-full contrast-125">
            <div class="flex flex-col items-start justify-between h-full py-12">
                <div class="flex flex-col gap-y-2">
                    <h1 class="font-bold text-4xl">
                        <?php echo $name ?>
                    </h1>
                    <p>
                        <?php echo $address ?>
                    </p>
                </div>

                <div class="flex flex-col">
                    <p>
                        Date Joined
                    </p>
                    <h1 class="font-bold text-2xl">
                        <?php echo $joined ?>
                    </h1>
                </div>
            </div>
        </div>

        <?php if ($_SESSION['message'] != '') { ?>
            <div class="backdrop-blur-2xl backdrop-contrast-50 w-full rounded-3xl py-4 px-12 flex flex-row justify-start items-center">
                <p><?php echo $_SESSION['message']?></p>
            </div>

        <?php } ?>

        <div class="w-full flex flex-col justify-start items-start gap-y-4">
            <h1 class="font-bold text-2xl">
                Modify your credentials:
            </h1>

            <div class="w-full h-[1px] bg-white"></div>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"
                class="flex flex-col justify-start items-start gap-y-4">
                <label for="email"
                    class="flex flex-row backdrop-blur-2xl backdrop-contrast-50 rounded-xl h-12 w-96 overflow-hidden">
                    <div class="px-4 flex flex-col items-center justify-center">
                        <i data-eva="email-outline" class="w-8"></i>
                    </div>

                    <input type="text" name="email" id="email" placeholder="Edit e-mail"
                        class="bg-transparent h-full focus:outline-none flex-grow">
                </label>

                <label for="full_name"
                    class="flex flex-row backdrop-blur-2xl backdrop-contrast-50 rounded-xl h-12 w-96 overflow-hidden">
                    <div class="px-4 flex flex-col items-center justify-center">
                        <i data-eva="person-outline" class="w-8"></i>
                    </div>

                    <input type="text" name="full_name" id="full_name" placeholder="Edit name"
                        class="bg-transparent h-full focus:outline-none flex-grow">
                </label>

                <label for="address"
                    class="flex flex-row backdrop-blur-2xl backdrop-contrast-50 rounded-xl h-12 w-96 overflow-hidden">
                    <div class="px-4 flex flex-col items-center justify-center">
                        <i data-eva="home-outline" class="w-8"></i>
                    </div>

                    <input type="text" name="address" id="address" placeholder="Edit address"
                        class="bg-transparent h-full focus:outline-none flex-grow">
                </label>

                <label for="password"
                    class="flex flex-row backdrop-blur-2xl backdrop-contrast-50 rounded-xl h-12 w-96 overflow-hidden">
                    <div class="px-4 flex flex-col items-center justify-center">
                        <i data-eva="unlock-outline" class="w-8"></i>
                    </div>

                    <input type="password" name="password" id="password" placeholder="Current Password" required
                        class="bg-transparent h-full focus:outline-none flex-grow">
                </label>

                <button type="submit" value="cred" name="submitForm"
                    class="py-2 px-3 backdrop-blur-2xl backdrop-contrast-50 rounded-lg border font-medium transition hover:scale-110 active:scale-95 active:backdrop-contrast-0">
                    Change your credentials
                </button>
            </form>

            <h1 class="font-bold text-2xl">
                Change your password:
            </h1>

            <div class="w-full h-[1px] bg-white"></div>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"
                class="flex flex-col justify-start items-start gap-y-4">
                <label for="curpassword"
                    class="flex flex-row backdrop-blur-2xl backdrop-contrast-50 rounded-xl h-12 w-96 overflow-hidden">
                    <div class="px-4 flex flex-col items-center justify-center">
                        <i data-eva="unlock-outline" class="w-8"></i>
                    </div>

                    <input type="password" name="curpassword" id="curpassword" placeholder="Old Password" required
                        class="bg-transparent h-full focus:outline-none flex-grow">
                </label>

                <label for="newpassword"
                    class="flex flex-row backdrop-blur-2xl backdrop-contrast-50 rounded-xl h-12 w-96 overflow-hidden">
                    <div class="px-4 flex flex-col items-center justify-center">
                        <i data-eva="lock-outline" class="w-8"></i>
                    </div>

                    <input type="password" name="newpassword" id="newpassword" placeholder="New Password" required
                        class="bg-transparent h-full focus:outline-none flex-grow">
                </label>

                <label for="confnewpass"
                    class="flex flex-row backdrop-blur-2xl backdrop-contrast-50 rounded-xl h-12 w-96 overflow-hidden">
                    <div class="px-4 flex flex-col items-center justify-center">
                        <i data-eva="lock-outline" class="w-8"></i>
                    </div>

                    <input type="password" name="confnewpass" id="confnewpass" placeholder="Confirm New Password" required
                        class="bg-transparent h-full focus:outline-none flex-grow">
                </label>

                <button type="submit" value="pass" name="submitForm"
                    class="py-2 px-3 backdrop-blur-2xl backdrop-contrast-50 rounded-lg border font-medium transition hover:scale-110 active:scale-95 active:backdrop-contrast-0">
                    Change your password
                </button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer
        class="flex flex-row px-28 py-12 w-full justify-between items-center font-instrument bg-gradient-to-b from-black from-90% to-transparent z-10">
        <div class="flex flex-col justify-between items-start h-full gap-y-12">
            <div class="flex flex-col justify-start items-start text-white leading-tight">
                <h1 class="font-solitus text-7xl">cinehome</h1>
                <p>the home theatre experience.</p>
            </div>

            <div class="flex flex-row items-start gap-x-4">
                <i data-eva="facebook"></i>
                <i data-eva="twitter"></i>
            </div>

            <div class="flex flex-col justify-start items-start gap-y-2 text-white font-instrument leading-tight">
                <div class="flex flex-row gap-x-2">
                    <i data-eva="phone-call"></i>
                    <p>099 9998 999</p>
                </div>

                <div class="flex flex-row gap-x-2">
                    <i data-eva="email"></i>
                    <p>hello@cinehome.com</p>
                </div>
            </div>
        </div>

        <div class="flex flex-col justify-between items-end h-full">
            <!-- Payment Methods -->
        </div>
    </footer>

    <script>
        function togglePopup(){
            const modal = document.querySelector(".changeImage");
            modal.showModal();
        }

        eva.replace({
            fill: '#FFFFFF',
        });
    </script>
</body>

</html>