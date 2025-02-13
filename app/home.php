<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container">
    <h2 class="mt-5">Bem-vindo, <?php echo $_SESSION["user_name"]; ?>!</h2>
    <a href="logout.php" class="btn btn-danger">Logout</a>
</body>
</html>
