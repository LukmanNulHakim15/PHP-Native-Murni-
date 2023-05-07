<html>
    <head>
        <title>Add User</title>
    </head>
    <body>
        <a href = "index.php">Go to home</a>
        <br>
        <br>

        <form action="add.php" method="post" name="form1">
            <table width="50%" border="0">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td><input type="text" name="mobile"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="add"></td>
                </tr>
            </table>
        </form>
    </body>
</html>

<?php
//Check if from submitted, insert form data into user table
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];


    //include database connection file
    include_once('config.php');

    //insert user data into table
    $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");

    //show massege when user add
    echo "User added successfully.<a href='index.php'>View Users</a>";
}


?>