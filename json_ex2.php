<?php

//สร้าง Data เป็นชนิด Array
$myArray = [
            ["name" => "Natjanan", "age" => 22, "faculty" => "MBS"]
            ,
            ["name" => "Chompoo", "age" => 21, "faculty" => "MBS"]
           ];

//เอา Array ที่สร้างมาแปลง (encode) เป็น json           
$json_array = json_encode($myArray);

//โชว์ข้อมูลที่ json ที่เราสร้างขึ้น
echo("json_array = <br> " . $json_array);

echo('<br>');
echo('<br>');

/* ดึงข้อมูล age มาแสดง 
--------------------*/

//1. Decode json
$myData = json_decode($json_array);

//2. Show data
echo("อายุของ Natjanan = " . $myData[0]->age);
echo('<br>');
echo("อายุของ Chompoo = " . $myData[1]->age);



?>