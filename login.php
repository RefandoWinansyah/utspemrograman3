<?php
    session_start();
    include "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Login</title>
</head>
<body>
<form action="" method="post" align="center">
         
        <label> Username </label>
            <input type="text" name="userlog"><br><br>        
        <label> Password </label>
            <input type="password" name="passlog"><br><br>
            <label>Status:</label>
            <select name="level">
                <option value="manager">Manager</option>
				<option value="supervisor">Supervisor</option>
				<option value="leader">Leader</option>
				<option value="staff">Staff</option>
				<option value="admin">Admin</option>
            </select>
            <br><br>
            <input type="submit" name="login" value="login"/><br>
     </form>

     <?php
        if (isset($_POST['login'])){
            $username=$_POST['userlog'];
            $password=$_POST['passlog'];
            $qry = mysqli_query ($koneksi,"SELECT * FROM datalogin WHERE username='$username' AND password=md5('$password')");
            $cek = mysqli_fetch_array($qry);
            $username=$cek['username'];
            $password=$cek['password'];
            $level=$cek['level'];
        
                            
            if ($username==$username && $password=$password){
                $_SESSION['level']=$level;
                header ("location:halaman.php");
                exit;
            }
            else{
                echo "Username or Password is wrong";
            }
        }
     ?>
</body>
</html>