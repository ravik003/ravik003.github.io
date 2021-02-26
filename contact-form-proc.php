<?php

if(empty($_POST['Send']))
{
    echo "Form is not Submitted";
    exit;
}
if(empty($_POST["Your Name"])|| empty($_POST["Your Email"])
{
    echo "Please fill the form info";
    exit;
}
$name = $_POST["Your Name"];
$name = $_POST["Your Name"];

mail ( 'ravikadela1111@gmail.com' , 'New form submission', "New form submission: Name: $name, Email:$Email") ;

header('Location: Thanks.html')


?>