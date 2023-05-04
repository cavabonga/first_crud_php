<?php include('dbconnection.php');?>

<?php

    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $query = "delete from `users` where `id` = '$id'";

        $result = mysqli_query($connection, $query);

        if(!$result){
            die("Query failed".mysqli_error());
        } else {
            header('location:index.php?delete_msg=You have succesfully deleted the record');
        }

    }

       


?>




