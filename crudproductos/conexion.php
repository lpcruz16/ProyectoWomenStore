<?php
function conectar(){
    $host="localhost";
    $user="u991668360_women";
    $pass="u991668360_womenstore";

    $bd="womenstore";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
