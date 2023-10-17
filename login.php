<?php
// Conecte-se ao banco de dados (substitua as informações de conexão pelo seu próprio banco de dados)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "donnamay";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifique a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Receba os dados do formulário
$username = $_POST['username'];
$password = $_POST['password'];

// Consulta SQL para verificar as credenciais
$sql = "SELECT * FROM tabela_usuarios WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

// Verifique se o usuário foi autenticado com sucesso
if ($result->num_rows > 0) {
    // O usuário foi autenticado com sucesso
    // Você pode redirecionar o usuário para a página de contato ou executar outras ações aqui
    echo "Login bem-sucedido!";
} else {
    // As credenciais são inválidas
    // Exiba uma mensagem de erro ou redirecione para uma página de erro
    echo "Credenciais inválidas. Tente novamente.";
}

// Feche a conexão com o banco de dados
$conn->close();
?>
