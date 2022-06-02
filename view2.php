<?php
//include connection
include 'conn/conn.php';

$newid = $_REQUEST['id_no'];
?>


<!DOCTYPE html>
<html>
<style>
table, th, td {
  border: 1px solid black;
}
th, td {
  padding: 5px;
}
</style>
<body>
<center>
<h1 style="text-align:center;"> WELCOME TO JABATAN TEKNOLOGI MAKLUMAT DAN KOMUNIKASI </h1>

<h2 style="text-align:center;">STUDENT REGISTRATION </h2>

<?php 
$query="Select * from student_info where id_no='$newid'";
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($result)){
    $id=$row["id_no"];
    $nama=$row["name"];
    $nomatrik=$row["matrix_no"];
    $nokp=$row["ic_no"];
    $politeknik=$row["politeknik"];
    $jabatan=$row["department"];
    $kelas=$row["class"];
?>


<table style="width:20%">
  <tr>
    <th align="left">NAME:</th>
    <td  align="center"><?php echo $id ?> </td>
  </tr>
  <tr>
    <th align="left">NO MATRIC:</th>
    <td  align="center"><?php echo $nama ?> </td>
  </tr>
  <tr>
    <th align="left">IC NO:</th>
    <td  align="center"><?php echo $nomatrik ?> </td>
  </tr>
    <tr>
    <th align="left">POLYTECHNIC:</th>
    <td  align="center"><?php echo $politeknik ?> </td>
  </tr>
  <tr>
    <th align="left">DEPARTMENT:</th>
    <td  align="center"><?php echo $jabatan ?> </td>
  </tr>
  <tr>
    <th align="left">CLASS:</th>
    <td  align="center"><?php echo $kelas ?> </td>
  </tr>
</table><br>
<?php 
}
?>

<form action="view.php" method="post">
<input type="submit" name="submit" value="Back">
</form>



</center>
</body>
</html>