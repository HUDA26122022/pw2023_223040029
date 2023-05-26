<?php

use LDAP\Result;

    function register_user($nama, $pass, $copass){
        global $link;

        //MANJAGA SQL INJECTION
        $nama   = mysqli_real_escape_string($link,$nama);
        $pass   = mysqli_real_escape_string($link,$pass);
        $copass = mysqli_real_escape_string($link,$copass);

            $pass   = password_hash($pass, PASSWORD_DEFAULT);  //BIAR PASSNYA RANDOM KETIKA DI SQL
            $copass = password_hash($copass, PASSWORD_DEFAULT);
            $query  = "INSERT INTO users (email,password,konfirmasi_password) VALUES ('$nama', '$pass', '$copass')";

                if (mysqli_query($link, $query)){
                    return true;
                }else{
                    return false;
                }
        }


        //menguji nama kembar

        function register_cek_nama($nama){

            global $link;

            $nama   = mysqli_real_escape_string($link,$nama);
        
            $query = "SELECT * FROM users WHERE email = '$nama'";
            
            if ($result = mysqli_query($link, $query)){
                if (mysqli_num_rows($result) == 0) return true;
                else return false;
            }
        }



//menguji nama data base

function login_cek_nama($nama){

    global $link;

    $nama   = mysqli_real_escape_string($link,$nama); //untuk membungkus stringnya

    $query = "SELECT * FROM users WHERE email = '$nama'"; //untuk menentukan namanya ada atau tidak ada
    
    if ($result = mysqli_query($link, $query)){
        if (mysqli_num_rows($result) != 0) return true; //jika namanya tidak ada di data base maka else tidak bisa login
        else return false;
    }
}


//untuk login
function cek_data($nama, $pass ){
    global $link;

    //mencegah sql injection
    $nama   = mysqli_real_escape_string($link, $nama);
    $pass   = mysqli_real_escape_string($link, $pass);
   


    $query = "SELECT users.password FROM users WHERE email= '$nama'";
    $result = mysqli_query($link,$query);
    $hash = mysqli_fetch_assoc($result)['password'];
   

   if (password_verify($pass, $hash)){
    return true;
   } else {
    return false;
   }

}
?>