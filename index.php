<?php include('header.php'); ?>
<?php include('dbconnection.php'); ?>

<h2>All Students</h2>
     <table class="table table-hover table-bordered table-striped">
        <thead></thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
            </tr>
        <tbody>

            <?php 
                $query = "select * from `users`";

                $result = mysqli_query($connection, $query);

                if(!$result){
                    die('query failed'.mysqli_error());
                } else{
                    print_r($result);
                }
            ?>

            <tr>
                <th>3</th>
                <th>Adrian</th>
                <th>Siara</th>
                <th>31</th>
            </tr>
            <tr>
                <th>5</th>
                <th>James</th>
                <th>Tarkowski</th>
                <th>37</th>
            </tr>
        </tbody>
    </table>

<?php include('footer.php'); ?>