<?php

$conn = mysqli_connect("sql300.epizy.com","epiz_33678702","NhW0VP5BD40","epiz_33678702_testping");
// $conn = mysqli_connect("localhost","root","","cobaping");

if (isset($_GET["data"])){
    $dataInput = $_GET["data"];
    if($dataInput !== ""){
        mysqli_query($conn,"INSERT INTO data VALUES('','$dataInput')");
    }
}


$query = mysqli_query($conn,"SELECT datasss FROM data");

$datas = [];
while($data = mysqli_fetch_assoc($query)){
    $datas[] = $data;
}

?>

Tampilan Data :
<br>
<?php
foreach ($datas as $data){
    echo $data["datasss"];
    echo "<br>";
}
?>
