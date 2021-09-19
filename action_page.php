<?php
$name=$_POST['name'];
$visitor_email = $_POST['email'];
$visitor_country = $_POST['country'];
$category=$_POST['category'];
$book=$_POST['book_title'];

$email_from= 'info@mywebsite.com';
$email_subject = "New form submission @ knowledgestoremlh";
$email_body = "Username: $name.\n". 
                "Useremail: $visitor_email.\n". 
                "User_country: $visitor_country.\n". 
                "Category:$category.\n."
                "Book-required:$book.\n.";
$to = "shrutipal700@gmail.com";
$headers= "From: $email_from \r\n";
$headers .="Reply-to:$visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: success.html");               



?>