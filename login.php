<?php
// Conectar ao banco de dados (login_db)
$conn = new mysqli("localhost", "root", "", "login_db");

// Verifica se deu erro na conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Pega os dados do formulário
$username = $_POST['username'];
$password = $_POST['password'];

// Consulta ao banco
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "✅ Login bem-sucedido!";
} else {
    echo "❌ Usuário ou senha inválidos.";
}

$conn->close();
?>
