<?php
//koneksi dengan database
include_once('config.php');

//Periksa apakah formulir dikirimkan untuk pembaruan pengguna, lalu alihkan ke beranda setelah pembaruan
if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    //Update data
     $result = mysqli_query($mysqli, "UPDATE users SET name='$name',email='$email',mobile='$mobile' WHERE id=$id");


    //Redirect ke beranda untuk menampilkan pengguna yang diperbarui dalam daftar
    header("Location: index.php");

}
?>

<?php
$id = $_GET['id'];

//Ambil data pengguna berdasarkan id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while ($user_data = mysqli_fetch_array($result)) {
    # code...
    $name = $user_data['name'];
    $email = $user_data['email'];
    $mobile = $user_data['mobile'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Data</title>
</head>
<body>
    <a href='index.php' >Home</a>
    <br>
    <br>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name; ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email ;?>"></td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td><input type="text" name="mobile" value="<?php echo $mobile; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"></td>
                <td><input type="submit" name="update" value="update"></td>
            </tr>
        </table>
    </form>
</body>
</html>