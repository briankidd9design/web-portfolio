<?php


if(isset($_POST['SubmitButton']))
{	
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $formcontent="From: $name \n Email: $email \n Message: $message";
    $recipient = "brian.kidd.one@gmail.com";
    $subject = "Brian Kidd Contact Form Submission";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die ("Error!");
    $result = array("status" => "1","msg" => "Thanks for reaching out! I will get back to you as soon as possible.");
    echo json_encode($result);
  
}else{

    $result = array("status" => "0","msg" => "Somthing went wrong.Please try later.");
    echo json_encode($result);
  
  }

?>
