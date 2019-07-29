<?php
if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $to = 'kt54321111@gmail.com';
    $subject = "New Message on KristjanMark.com";
    $body = '<html>
                <body>
                    <h2>Title</h2>
                    <br>
                    <p>Name:<br>'.$name.'</p>
                    <p>Email:<br>'.$email.'</p>

                </body>
            </html>';

//headers
$headers = "From: ".$name." <".$email.">\r\n";
$headers = "Reply-To: ".$email."\r\n";
$headers = "MIME-Version: 1.0\r\n";
$headers = "Content-type: text/html; charset-utf-8";

//send
$send = mail($to, $subject, $body, $headers);
if ($send) {
    echo '<br>';
    echo "Success. Thanks for Your Message.";
} else {
    echo 'Error.';
}
}
?>

<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="name" placeholder="Your Name"><br>
            <input type="text" name="email" placeholder="Your Email"><br>
            <button type="submit">Subscribe</button>
        </form>
    </body>
</html>