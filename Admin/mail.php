
<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
        ini_set('SMTP','gmail');
        ini_set('smtp_port',25);
         $to = "kt54321111@gmail.com";
         $subject = "Support for your query";
         
         $message = "Hi There, I am happy to help you.";
         $message .= "<h1>For support contact:8756991762 </h1>";
         
         $header = "From:kt54321111@gmail.com \r\n";
         
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
      
      
   </body>
</html>
        