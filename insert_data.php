<?php
include('dbconnection.php');

if(isset($_POST['add_student'])){
    
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $age = $_POST['age'];

    if($f_name == "" || empty($f_name)){
        header('location:index.php?message=You need to enter your first name');
    } elseif($l_name == "" || empty($l_name)){
        header('location:index.php?message=You need to enter your last name');
    } elseif($age == "" || empty($age)){
        header('location:index.php?message=You need to enter your age');
    } else{
        $query = "insert into `users` (`first_name`, `last_name`, `age`) values ('$f_name', '$l_name', '$age')";
        $result = mysqli_query($connection, $query);

        if(!$result){
            die("Query has failed".mysqli_error());
        } else{
            header("location:index.php?insert_msg=Your data has been successfully added");
        }

    }

}


?>