<php
fuction conectar(){
    $host="localhost";
    $user="root";
    $pass="";

    $bd="alumno";

    $con=mysqli_connect($host,$user,$pass);

    msqli_select_bd($con,$bd);

    return $con;
}
<?