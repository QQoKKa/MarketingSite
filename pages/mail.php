<?php 
    //take form from index.html



$to = "TestMail";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "Test";
$headers = "From:" . $from;

if (mail($to,$subject,$message,$headers)) {
    header("Location: ../index.html");
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
            window.location.href = "../index.html";
        })
    </script>
</body>
</html>