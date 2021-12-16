<?php

if(!empty($_POST)){
    $name = trim($_POST['name']);
    $surname = trim($_POST['surname']);
    $phone_number = trim($_POST['phone']);
    $car_id = $_POST['car'];
    $termin = $_POST['date'];
    $days = $_POST['days'];
    $hours = $_POST['hours'];

    foreach($_POST as $p) {
        if($p == '') {
            die('Uzupełnij pole!');
        }
    }

    $today = date('Y-m-d');
    $end_date = date('Y-m-d', strtotime($today.'+ 13 days'));
    if($termin < $today || $termin > $end_date ){
        die('Niepoprawna data!');
    }
    if($days <1 || $days > 13) {
        die('Niepoprawna liczba dni!');
    }
    if($hours < 0 || $hours > 23){
        die('niepoprawna liczba godzin!');
    }

    require('functions.php');
    reserve($name,$surname,$phone_number,$car_id,$termin,$days,$hours);
    
}
