<?php
    include_once('dbConnect.php');
    
    $weight1 = $_POST['weight1'];
    $fat1 = $_POST['fat1'];
    $nick1 = $_POST['nick1'];
    $shoulders1 = $_POST['shoulders1']; 
    $chest1 = $_POST['chest1'];
    $waist1 = $_POST['waist1'];
    $upAbs1 = $_POST['upAbs1'];
    $lowAbs1 = $_POST['lowAbs1'];
    $upthighs1 = $_POST['upthighs1'];
    $lowthighs1 = $_POST['lowthighs1'];
    $calf1 = $_POST['calf1'];

if($weight1 != null && $fat1 != null && $nick1 != null && $shoulders1 != null && $chest1 != null && $waist1 != null && $upAbs1 != null && $lowAbs1 != null && $upthighs1 != null && $lowthighs1 != null && $calf1 != null && $receptionistID != null){
        $sql = "INSERT INTO measurements (weight, body_fat, nick, shoulders, chest, waist, upper_abs, lower_abs, upper_thighs, lower_thighs, calf, recepionist_id)
            VALUES ('$weight1', '$fat1', '$nick1', '$shoulders1', '$chest1', '$waist1', '$upAbs1', '$lowAbs1', '$upthighs1', '$lowthighs1', '$calf1', '$receptionistID');";
    }
?>