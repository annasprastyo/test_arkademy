<?php

function Biodata()
{

$name = "Annas Prastyo";
$address = "Jl Sukoarjo Gg II Sisir Kota Batu";
$hobies = array("memancing", "bermain game", "lihat film");
$is_maried = false;
$school = array('highSchool' => 'SMK PGRI 3 MALANG',
    'university' => 'SMK PGRI 3 MALANG');

$skill = array(" Bisa Bahasa Pemrograman :");
$php = "PHP";
$java = "JAVA";
$ci = "Codeigniter";
$laravel = "Laravel";
array_push($skill, ["php" => $php, "java" => $java]);
// ----- json_decode($json)["ip"] should be "192.168.0.1" ----
// echo $json;

$myJSON_name = json_encode($name);
$myJSON_address = json_encode($address);
$myJSON_hobies = json_encode($hobies);
$myJSON_is_married = json_encode($is_maried);
$myJSON_school = json_encode($school);
$myJSON_skill = json_encode($skill, JSON_PRETTY_PRINT);

echo "<h4>BIODATA</h4>";
echo    "Nama :". $myJSON_name;  
echo    "<br>address :". $myJSON_address;
echo    "<br>hobies :". $myJSON_hobies;
echo    "<br>is_maried :". $myJSON_is_married;
echo    "<br>school :". $myJSON_school;
echo    "<br>skill :". $myJSON_skill;

}

Biodata();

?>