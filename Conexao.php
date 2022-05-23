<?php  

define('DB_SERVER', 'localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','Usuario');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(mysqli_connect_errno()){
    $Resposta = array();
    $Resposta["erro"] = "Falha na conecxao com o MySQL".mysqli_connect_error();
    $Resposta["resultado"] = " ";
    echo json_encode($Resposta);

    mysqli_close($conn);
    exit();
}

?>