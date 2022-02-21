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
if (empty($name)) {
    $errors[] = 'Name is empty';
}

if (empty($email)) {
    $errors[] = 'Email is empty';
}

if (empty($message)) {
    $errors[] = 'Message is empty';
}
$subject = $_POST['Subject'];
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error");
echo "Thank You!";
