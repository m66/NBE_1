<?php
//form send post
if(!isset($_POST["submit"])) {
    header('location:index.html');
    die();
}
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$htmlMessage = "
<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
        </tr>
        <tr>
            <td>$name</td>
            <td>$email</td>
            <td>$subject</td>
        </tr>
        <tr>
            <td colspan=\"3\">
                $message
            </td>
        </tr>
    </table>
</body>
</html>";

$to      = 'kar.manasyan98@gmail.com';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: $email\r\n" .
    "Reply-To: $email\r\n" .
    'X-Mailer: PHP/' . phpversion();

echo($htmlMessage);
die;
mail($to, $subject, $htmlMessage, $headers);
header('Location: index.html');