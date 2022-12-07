<?php
if($_POST["submit"]=="query") 
{
    $recipient="lavania987@gmail.com";
    $subject="Query from Forever Books";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];
    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";
    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $resSub = "Confirmation of receiving your query";
    $resBody= "Dear ". $sender ."\n\nThanks for reaching us.\nThis is to inform you that we have received your query. We will get back to you asap.";
    $note="\n\nNote : This is an auto-generated mail do not reply to this.\nFrom: http://localhost/Projects/OnlineBookStore/index.php?Message=Please%20login%20To%20continue!";
    $resBody=$resBody . $note;
    mail($senderEmail , $resSub , $resBody);   
    header("location: index.php?response="."Your Message has been successfully sent! Our customer executive will respond shortly."); 
}
?>	