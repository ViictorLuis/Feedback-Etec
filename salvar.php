<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registro!</title>
</head>
<body>
    <?php
    //conecta o salvar.php com o conexao.php
    include 'conexao.php';

    //essas são as informações serão pegas
    $nome = trim($_POST["nome"]);
    $telefone = trim($_POST["telefone"]);
    $curso = $_POST["curso"];
    $tipo = $_POST["tipo"];
    $feedback = $_POST["feedback"];

    //verifica se há dados repetidos
    $dado = "SELECT * FROM usuarios WHERE nome=? OR telefone=?";
    $checkDado = $conn->prepare($dado);
    $checkDado->bind_param("ss", $nome, $telefone);
    $checkDado->execute();
    $resultado = $checkDado->get_result();

    if($resultado->num_rows > 0){
        echo "<h2>Erro: Nome ou telefone já utilizado!</h2>";
    } else {
        // inserir dados
        $sql_insert = "INSERT INTO usuarios (nome, telefone, curso, tipo, feedback) VALUES (?, ?, ?, ?, ?)";
        $stmt_insert = $conn->prepare($sql_insert);
        $stmt_insert->bind_param("sssss", $nome, $telefone, $curso, $tipo, $feedback);

        if($stmt_insert->execute()){
            echo "<h2>Avaliação registrada com sucesso!</h2>";
        } else {
            echo "Erro ao registrar: " . $stmt_insert->error;
        }
    };

    $conn->close();
    ?>
    <div class="container">
        <a href="index.html" class="btn-voltar">⬅ Voltar para a Página Inicial</a>
    </div>
</body>
</html>