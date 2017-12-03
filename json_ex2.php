<?php

//สร้าง Data เป็นชนิด Array
$myArray = [
            ["name" => "Natjanan", "age" => 22, "faculty" => "MBS"],
            ["name" => "Chompoo", "age" => 21, "faculty" => "MBS"],
            ["name" => "Oak", "age" => 32, "faculty" => "Engineering"]
           ];

//โชว์ข้อมูลที่ Array ที่เราสร้างขึ้น
echo('หน้าตาของ Array : <br>');           
print_r($myArray);

echo('<br><br>');

//เอา Array ที่สร้างมาแปลง (encode) เป็น json
$json_array = json_encode($myArray);

//โชว์ข้อมูลที่ json ที่เราสร้างขึ้น
echo('หน้าตาของ json ที่ถูกแปลงมาจาก Array : <br>'); 
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
echo('<br><br>');

//ตัวอย่างการแสดงค่าด้วย foreach
foreach($myData as $data) {
    echo("ชื่อ : $data->name   |  อายุ : $data->age   |   คณะ : $data->faculty  <br>");
}



?>