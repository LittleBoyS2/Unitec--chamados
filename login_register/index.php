<?php

// session_start();

$errors = [
    'login' => $_SESSION['login_error'] ?? '',
    'register' => $_SESSION['register_error'] ?? '',
];

$active_form = $_SESSION['active_form'] ?? 'login';

session_unset();

function showError($error) {
    return !empty($error) ? "<p class='error-message'>{$error}</p>" : '';
}

function isActiveForm($formName, $activeForm) {
    return $formName === $activeForm ? 'active' : '';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unitec</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="conteiner">
        <div class="form-box <?= isActiveForm('login', $activeForm); ?>" id="login-form">
            <form action="login_register.php" method="post">
                <h2>Login</h2>
                <?= showError($errors['login']) ?>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Senha" required>
                <button type="submit" name="login">Entrar</button>
                <p>Não tem uma conta? <a href="#" onclick="showForm('register-form')" >Registre-se</a></p>
            </form>    
        </div>


        <div class="form-box active" id="register-form">
            <form action="login_register.php" method="post">
                <h2>Registre-se</h2>
                <?= showError($errors['register']) ?>
                <input type="text" name="name" placeholder="Nome" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Senha" required>
                <select name="role" required>
                    <option value="" >---Selecione seu papel---</option>
                    <option value="empresa">Empresa</option>
                    <option value="pessoa">Pessoa Fisica</option>
                </select>
                <button type="submit" name="register">Registrar</button>
                <p>Ja tem uma conta? <a href="#" onclick="showForm('login-form')">Entrar</a></p>
            </form>    
        </div>
    </div>


    <script src="script.js"></script>
</body>

</html>