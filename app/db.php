<?php
$host     = getenv('DB_HOST');
$dbname   = getenv('DB_NAME');
$user     = getenv('DB_USER');
$password = getenv('DB_PASSWORD');

if (!$host || !$dbname || !$user || !$password) {
    die("Erro: credenciais de banco de dados não configuradas nas variáveis de ambiente.");
}

try {
    $dsn = sprintf('pgsql:host=%s;dbname=%s', $host, $dbname);
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar ao banco: " . $e->getMessage());
}
?>
