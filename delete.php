<?php
include 'conn/conn.php'; //include connection

//panggil value
$id=$_REQUEST['idno'];

$sql = "DELETE FROM student_info WHERE id_no='$id'";

if ($conn->query($sql) === TRUE) {
//echo "Tahniah!! Anda berjaya ke Pengkalan Data";
?>

<script>alert('Data berjaya dipadamkan')
 window.location='view.php'</script>

<?php
//header('Location: insert.php');
} else {
    echo "Error:" .$sql . "<br>" .$conn->error;
}
$conn->close();


?>