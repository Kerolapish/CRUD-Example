<?php
include 'conn/conn.php';
$search=$_REQUEST['search']
?>

<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>
<center>
<h1 style="text-align:center;"> WELCOME TO JABATAN TEKNOLOGI MAKLUMAT DAN KOMUNIKASI </h1>

<h2>STUDENT REGISTRATION LIST</h2>

<form action="search.php" method="get">
<div class="search">
<p><strong>Search</strong> : 
<input type="text" name="search" id="search"></p>
</div>
</form>

<table style="width:100%">
  <tr>
    <th>NO </th>
    <th>NAME</th>
    <th>MATRIX NO.</th>
    <th>I/C NO. </th>
    <th>POLYTECHNIC</th>
    <th>VIEW</th>
    <th>UPDATE </th>
    <th>DELETE</th>
  </tr>



<?php
//start looping
$bilangan=1;
$query="Select * from student_info WHERE name LIKE'$search%'";
$result = mysqli_query($conn,$query);
$notempty = mysqli_num_rows($result);
while($row = mysqli_fetch_assoc($result)){
    $id=$row["id_no"];
    $nama=$row["name"];
    $nomatrik=$row["matrix_no"];
    $nokp=$row["ic_no"];
    $politeknik=$row["politeknik"];
    $jabatan=$row["department"];
    $kelas=$row["class"];
?>

  <tr>
    <td><?php echo $bilangan;?></td>
    <td><?php echo $nama;?></td>
    <td><?php echo $nomatrik;?></td>
    <td><?php echo $nokp;?></td>
    <td><?php echo $politeknik;?></td>
    <td align="center"><a href="view2.php?id_no=<?php echo $id;?>">View</td>
    <td align="center"><a href="update.php?idno=<?php echo $id;?>"><u>Update</u></td>
    <td align="center"><a href="delete.php?idno=<?php echo $id;?>"><u>Delete</u></td>
  </tr>


<?php
//end looping
$bilangan ++;
}



if($notempty==0){
?>

  <tr> 
      <td colspan="8" align="center">No data in database </td></tr>


<?php
}
?>
</table><br>

<form action="view.php" method="post">
<input type="submit" name="submit" value="Back">
</form>



</center>
</body>
</html>