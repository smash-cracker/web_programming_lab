<html>
<head>
<title>
</title>
</head>
<body>
<form action="" method="POST">
<fieldset><legend><h1>Add Book</h1></legend>
<table>
<tr>
<td>Book_No</td><td><input type= "number" name="bkno" required></td><br><br>
</tr>
<tr>
<td>Book_Name</td><td><input type="text" name="bkname" required>
</tr>
<td>Publisher</td> <td><input type="text" name="publisher" required></td>
</tr>
<tr>
<td>Author</td><td><input type="text" name="author" required></td>
</tr>
<tr>
<td>Price</td><td><input type="text" name="price" required></td>
</tr>
</fieldset>

<tr>
<td><input type="submit" value="ADD"></td>
</tr>
</table>
</form>

</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){
include "connection.php";

$bookno = $_POST["bkno"];
$bookname = $_POST["bkname"];
$publisher = $_POST["publisher"];
$author = $_POST["author"];
$price = $_POST["price"];
 
$sql = "insert into books values('$bookno','$bookname',
        '$publisher','$author',$price)";

if(mysqli_query($conn,$sql)){

    echo "<br>Book is inserted";

}


}

?>
