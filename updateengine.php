<?php
include 'conn/conn.php'; //include connection

//panggil value
$id=$_REQUEST['idno'];
$nama=$_REQUEST['name'];
$nomatrik=$_REQUEST['nomatrik'];
$nokp=$_REQUEST['icno'];
$politeknik=$_REQUEST['poly'];
$jabatan=$_REQUEST['depart'];
$kelas=$_REQUEST['class'];

//sql coding
// (name)='$nama'  (name)---> sama dengan database
$sql = "UPDATE student_info SET name='$nama',matrix_no='$nomatrik',ic_no='$nokp',politeknik='$politeknik',department='$jabatan',class='$kelas' WHERE id_no='$id'";

if ($conn->query($sql) === TRUE) {
//echo "Tahniah!! Anda berjaya ke Pengkalan Data";
?>

<script>alert('Tahniah!! Maklumat anda telah masuk ke pengkalan data')
 window.location='view.php'</script>

<?php
//header('Location: insert.php');
} else {
    echo "Error:" .$sql . "<br>" .$conn->error;
}
$conn->close();

?> 
