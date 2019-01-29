<?php 
$ukuran=8;

if ($ukuran%2 == 0) {
    echo "ukuran harus ganjil";
} else {
    # code...


for($a=1; $a<=$ukuran; $a++){
    for($b=1; $b<=$ukuran; $b++){
        if(($ukuran+1)/2 == $b || ($ukuran+1)/2 == $a ){
            echo "*";
        }elseif($b == $ukuran || $a == $ukuran){
            echo "*";
        }elseif($b == 1 || $a == 1){
            echo "*";
        }else{
            echo "&nbsp&nbsp";
        }
    } 
    echo "<br/>";
}
}

?>