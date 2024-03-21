<?php
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
if($_POST["submit"])
{
    $to = "psaivarun@gmail.com";
        $subject = "$subject";
        $message = "
        <p>Name: $name.</p>
        <p>Email: $email.</p>
        <p>Message:</p>
        <p><strong>$message</strong></p>"; 
        $headers = "Content-type: text/html";
        if(mail($to, $subject, $message, $headers)){
           $resultMessage = '<div class="alert alert-success">Thanks for your message. We will get back to you as soon as possible!</div>';  
            //header("Location: 20.thanksforyourmessage.php");
        }
    else{
            $resultMessage = '<div class="alert alert-warning">Unable to send Email. Please try again later!</div>';  
        }
    }
?>
