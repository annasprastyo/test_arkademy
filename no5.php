<?php

$n = 6;
$r = 2;

$n_fak = faktorial($n);
$r_fak = faktorial($r);

$d = $n - $r;
$d_fak = faktorial($d);
$hasil = hasil($n_fak, $r_fak, $d_fak);
echo "hasil : $hasil";



function faktorial($f)
{
            $hasil=1;

            for($i=1; $i<=$f; $i++)
                        $hasil = $hasil*$i;
            return $hasil;
}
function hasil($fakn, $fakr, $fakd)
{
            return $fakn / ($fakr*$fakd);
}



?>