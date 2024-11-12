<?php
require_once __DIR__ . '/../src/config/app.php';
require_once __DIR__ . '/../src/utils/session.php';

// Verificar sesión o redirigir a login
if (!isLoggedIn()) {
    header('Location: auth/login.php');
    exit();
}

// Redirigir a la vista principal
header('Location: creature/index.php');
exit();
