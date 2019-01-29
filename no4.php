<?php 
/**
* 
*/
class no4 
{
    
    public function ganti_kata($kata, $o, $a)
    {
        $kata_jumlah = strlen($kata);
        $kata_lama =str_split($kata);

        $kata_baru = "";

        for($i=0; $i < $kata_jumlah; $i++) {

            if ($kata_lama[$i] == $o) {
                $kata_baru .= $a;
            } else {
                $kata_baru .= $kata_lama[$i];
            }
            
        }

        return $kata_baru;
    }
}


$no4 = new no4();
echo "Sebelum : kelompok<br>";
echo "Sesudah : ".$no4->ganti_kata("kelompok", "o", "a");

 ?>