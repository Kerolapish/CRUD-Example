<?php
//include connection
include 'conn/conn.php';

$newid = $_REQUEST['idno'];
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

<form name="page update" action="updateengine.php" method="get">
<table style="width:20%">
  <tr>
    <th align="left">ID NO :</th>
    <td> <input type="text" name="idno" value="<?php echo $id;?>" readonly="readonly"></td>
  </tr>
  <tr>
    <th align="left">NAME  :</th>
    <td> <input type="text" name="name" value="<?php echo $nama;?>"></td>
  </tr>
  <tr>
    <th align="left">NO MATRIK :</th>
    <td> <input type="text" name="nomatrik" value="<?php echo $nomatrik;?>"></td>
  </tr>
  <tr>
    <th align="left">IC NO :</th>
    <td> <input type="text" name="icno" value="<?php echo $nokp;?>"></td>
  </tr>
    <tr>
    <th align="left">POLYTEHCNIC :</th>
    <td> <input type="text" name="poly" value="<?php echo $politeknik;?>"></td>
  </tr>
  <tr>
    <th align="left">DEPARTMENT :</th>
    <td> <input type="text" name="depart" value="<?php echo $jabatan;?>"></td>
  </tr>
  <tr>
    <th align="left">CLASS :</th>
    <td> <input type="text" name="class" value="<?php echo $kelas;?>"></td>
  </tr>
</table><br>
<input type="submit" value="Update Data"></form>

<?php 
}
?>

<form action="view.php" method="post">
<input type="submit" name="submit" value="Back">
</form>



</center>
</body>
</html>