<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = $_POST['recipient'];
if($recipient == 'Marc'){
    $recipient= "evan.white@western.edu";
} else if($_POST['recipient'] == 'Doug'){
    $recipient = "cody.conner@western.edu";
} else if($_POST['recipient'] == 'Both'){
    $recipient = "evan.white@western.edu,cody.conner@western.edu";
}
$subject = $_POST['Subject'];
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error");
echo "Thank You!";
