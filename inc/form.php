<?php

$firstName =  $_POST['firstName'];
$lastName =   $_POST['lastName'];
$email =      $_POST['email'];

$errors = [
    'firstNameError' => '',
    'lastNameError' => '',
    'emailError' => '',
];


if(isset($_POST['submit'])){



    if(empty($firstName)){
        $errors['firstNameError'] = 'يرجي إدخال الاسم الأول';
    }


    if(empty($lastName)){
        $errors['lastNameError'] = 'يرجي إدخال الاسم الأخير';
    }
    
    
    if(empty($email)){
        $errors['emailError'] = 'يرجي إدخال اسم الإيميل';
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['emailError'] = 'يرجي إدخال اسم إيميل صحيح';
    }
    
    if(!array_filter($errors)){
        $firstName =   mysqli_real_escape_string($conn, $_POST['firstName']);
        $lastName =    mysqli_real_escape_string($conn, $_POST['lastName']);
        $email =       mysqli_real_escape_string($conn, $_POST['email']);

        $sql = "INSERT INTO users(firstName, lastName, email) VALUES ('$firstName', '$lastName', '$email')";

        if(mysqli_query($conn, $sql)) {
            header('Location: index.php');
        }else {
        echo 'Error' . mysqli_connect_error($conn);
        }
    }



}




