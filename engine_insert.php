<?php

//connection to DB
include 'conn/conn.php';


//return value
echo "Name : ";
echo $name = $_REQUEST['name'];
echo '<br>';

echo "Matrix Number : ";
echo $matrix_no = $_REQUEST['matrix'];
echo '<br>';

echo "Ic Number : ";
echo $ic_no = $_REQUEST['ic'];
echo '<br>';

echo "Polytechnic : ";
echo $politeknik = $_REQUEST['poli'];
echo '<br>';

echo "Department : ";
echo $department = $_REQUEST['depart'];
echo '<br>';

echo "Class : ";
echo $class = $_REQUEST['class'];
echo '<br>';

//keep in DB
$sql = "INSERT INTO student_info
(name, matrix_no, ic_no, politeknik, department, class) 
VALUES 
('$name', '$matrix_no', '$ic_no', '$politeknik', '$department', '$class')";



if ($conn->query($sql)===TRUE){
    //echo "Tahniah Berjaya Simpan Ke Pangkalan Data";
?>


<script>alert ('TAHNIAH. Data berjaya dismpan di dalam Database')
window.location='view.php'</script>


<?php
}else{
    echo "Error : " . $sql . "<br>" .$conn->error;
}
$conn->close();
?>