<?php
require_once __DIR__ . '/../utils/session.php';

class AuthController {
    public function login($username, $password) {
        // Lógica de autenticación
        if ($username === 'admin' && $password === 'password') {
            loginUser($username);
            header("Location: ../public/index.php");
        } else {
            echo "Usuario o contraseña incorrectos";
        }
    }

    public function logout() {
        logoutUser();
        header("Location: ../public/auth/login.php");
    }
}
