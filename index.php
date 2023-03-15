<?php

$conn = mysqli_connect("sql300.epizy.com","epiz_33678702","NhW0VP5BD40","epiz_33678702_testping");
// $conn = mysqli_connect("localhost","root","","cobaping");


mysqli_query($conn,"TRUNCATE data");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Ping</title>
</head>
<body>
    <br>
    <br>
    <input type="text" name="inputBox" id="inputBox">
    <button onclick=kirimdata()>Kirim Data</button>

    <div class="tampildata">
        Tampilan Data :
        <br>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./script.js"></script>
</body>
</html>