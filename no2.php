<?php
    // Membuat variabel
    $nama="";
    $username="";
    $pass = "";
    $namaErr = "";
    $usernameErr = "";
    $passErr = "";
    $username_valid = true;
    $username_valid_msg = "";
    $valid_panjang_pass = true;
    $valid_panjang_user = true;
    $valid_pass_konfirm = true;
    $valid_panjang_pass_msg = "";
    $valid_panjang_user_msg = "";
    $valid_pass_konfirm_msg = "";
    
 

    // Cek form sudah di klik submit/belum
 
function validasi()
{

        $username = "Bigbosss*&";
        $pass = "qazW_123";
        echo "Username : ".$username."<br>";
        echo "Password : ".$pass."<br><br>";
        
        if(!preg_match("/^[a-zA-Z]*$/",$username)){
            $username_valid = false;
            $username_valid_msg = "Hanya huruf kecil yang diijinkan, dan tidak boleh menggunakan karakter spesial.<br>";
            echo $username_valid_msg;
        }
    
        
        if(strlen($pass) < 8 ){
            $valid_panjang_pass = false;
            $valid_panjang_pass_msg = "Password minimal 8 digit.<br>";
            echo $valid_panjang_pass_msg;
        }else{
            echo "password sudah memenuhi syarat<br>";
        }

        if(strlen($username) < 8 ){
            $valid_panjang_user = false;
            $valid_panjang_user_msg = "Username minimal 8 digit.<br>";
            echo $valid_panjang_user_msg;
        }else{
            echo "username sudah memenuhi syarat";
        }
        
        if( !empty($nama) and !empty($username) and !empty($pass) and $username_valid and $name_valid and $valid_panjang_pass and $valid_pass_konfirm){
            echo "Selamat semua input sudah diisi dengan benar.<br>";
        }
        

}
validasi();

?>
 
