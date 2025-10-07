
<?php
//não é necessário alterar isso no pc da escola, pois é o padrão do XAMPP (!)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "evento_escolar";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Falha na conexão: " . $conn->connect_error);
}

//echo "Conexão OK!" // -> teste para ver se a conexão está funcionando
?>