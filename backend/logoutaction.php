<?php
//function start lagi
session_start();

//cek apakah session terdaftar
if(($_SESSION["email"])){

//session terdaftar, saatnya logout
session_unset();
session_destroy();
header( "Location:../frontend/login.html" );

}
else{

//variabel session salah, user tidak seharusnya ada dihalaman ini. Kembalikan ke login
header( "Location:../frontend/login.html" );
}
?>