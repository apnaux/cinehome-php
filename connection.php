<?php
$servername = "100.103.182.42";
$username = "apexnauticus";
$password = "7B#KS6Ewi5Q@Cc";

// Create connection
$conn = new mysqli($servername, $username, $password);
?>

<?php if ($conn->connect_error) { ?>
    <a href="#" class="text-5xl font-bold font-solitus active:text-current">
        conn failed.
    </a>
<?php } else { ?>
    <a href="#" class="text-5xl font-bold font-solitus active:text-current">
        cinehome.
    </a>
<?php } ?>