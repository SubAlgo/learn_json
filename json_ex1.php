<?php
/*
    สร้างข้อมูลประเภท json
*/


/*สร้าง Object ที่มี name, age, faculty พร้อมกำหนดค่าให้
------------------------------------------------*/
$myObj->name = "Chompoo";
$myObj->age = 22;
$myObj->faculty = 'MBS';

/*เอา $myObj มา encode เป็นข้อมูลประเภท json แล้วเก็บไว้ในตัวแปร $myJson
---------------------------------------------------------------*/
$myJson = json_encode($myObj);

/*แสดงข้อมูลในตัวแปร $myJson
------------------------*/
echo($myJson);


echo('<br>');

?>
