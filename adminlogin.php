<html>
<head>
<title>
</title>
</head>
<body>
    <h1>ADMIN LOGIN</h1>
<form action="" method="POST">
<table>    
<tr>    
<td><input type= "text" name="admin" placeholder="Username" required></td><br><br>
</tr>
<tr>
<td><input type="password" name = "pass" placeholder="Password" required>
</tr>
<tr>
<td><input type="submit" value="Login"></td>
</tr>
<tr><td><a href="">Forgot password ?</a></td></tr>

</table>
</form>

</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $user = $_POST["admin"];
    $pass = $_POST["pass"];

    include "connection.php";

    $sql = "select Name from admins 
            where Email = '$user' and Password = '$pass' ";

    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result)>0){

        while($row = mysqli_fetch_assoc($result)){

            echo "Login  successfull ".$row["Name"];
        }
        header("Location:adminprofile.php");

    }
    else{
        echo "<br>Login failed. Check your password and login again";
    }
}

?>
