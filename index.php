<?php
//koneksi database 
include_once('config.php');

//Nge get data dari table users
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
    <head>
        <title>Home Page</title>
    </head>
    <body>
        <a href="add.php">Add New User</a>
        <table width= '100%'>
            <tr>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Update</th>
            </tr>

            <?php
                while ($user_data = mysqli_fetch_array($result)) {
                    # code...
                    // echo "<tr>";
                    echo "<td>".$user_data['name']."</td>";
                    echo "<td>".$user_data['mobile']."</td>";
                    echo "<td>".$user_data['email']."</td>";
                    echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";   
                }
            ?>
        </table>
    </body>
</html>