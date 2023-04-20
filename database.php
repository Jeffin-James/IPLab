<?php
error_reporting(1);
$name=$_POST['n'];
$rno=$_POST['r'];
$con=new mysqli('localhost','root','','CSEC');
if(isset($_POST['add']))
{
$sql="INSERT INTO CSECDB(name,rollno) value ('$name','$rno')";
$con->query($sql);
echo "inserted";
}
else if(isset($_POST['del']))
{
$sql="DELETE FROM CSECDB WHERE rollno='$rno' && name='$name' ";
$con->query($sql);
echo "Deleted";
}
else if(isset($_POST['up']))
{
$sql="UPDATE CSECDB SET name = '$name' WHERE rollno = '$rno' ";
$con->query($sql);
echo "Updated";
}
else if(isset($_POST['v']))
{
$sql = "SELECT * FROM CSECDB";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Register number: " . $row["rollno"]."<br>  Name: " . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}
}
?>
