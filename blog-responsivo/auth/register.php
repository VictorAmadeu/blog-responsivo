<?php
require_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Verificar se o usuário já existe
    $checkUserQuery = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($checkUserQuery);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $error = "Usuário com este e-mail já existe.";
    } else {
        // Inserir novo usuário
        $insertQuery = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($insertQuery);
        $stmt->bind_param('sss', $username, $email, $password);

        if ($stmt->execute()) {
            header('Location: login.php');
            exit;
        } else {
            $error = "Erro ao registrar. Tente novamente.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Registrar</h2>
        <?php if (isset($error)) echo "<p class='text-danger text-center'>$error</p>"; ?>
        <form action="" method="post" class="mt-4">
            <div class="mb-3">
                <label for="username" class="form-label">Nome de Usuário:</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Registrar</button>
        </form>
        <p class="text-center mt-3">Já tem uma conta? <a href="login.php">Faça login</a>.</p>
    </div>
</body>
</html>
