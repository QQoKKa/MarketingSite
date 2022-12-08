<?php 
require(" index.php ");

$to = "service@growitupmarketing.com";
$subject = "New message from GrowItUp";
$message = "Name: " . $_POST['name'] . "\nEmail: " . $_POST['email'] . "\nMessage: " . $_POST['message'];
$headers = "From: " . $_POST['email'];
if (mail($to,$subject,$message,$headers)) {
    header("Location: ../index.php");
} else {
    echo "ERROR: Mail not sent";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button>Come Back</button>
    <script>
        document.querySelector("button").addEventListener("click", () => {
            window.location.href = "../index.php";
        })
    </script>
</body>
</html>