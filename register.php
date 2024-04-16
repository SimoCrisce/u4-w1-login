<?php
include __DIR__ . "/includes/start.php";

$username = $_POST["username"] ?? "";
$email = $_POST["email"] ?? "";
$password = $_POST["password"] ?? "";

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $stmt = $pdo->prepare("INSERT INTO utente (username, email, password) VALUES ( :username, :email, :password)");
    $stmt->execute([
        "username" => $username,
        "email" => $email,
        "password" => password_hash($password, PASSWORD_DEFAULT)
    ]);
    header("Location: /u3-w1-php/u4-w1/login.php");
    exit;
};


?>

<div class="row justify-content-center">
    <div class="col-4 bg-dark text-white text-center mt-5 rounded-3">
        
        <div class="my-4 px-4">
            <form action="" method="POST" novalidate>
                <h2 class="my-4">Registrati</h2>
                <div class="input-group mb-3">
                    <input class="form-control" type="text" placeholder="Username" name="username">
                    <span class="input-group-text"> <i class="bi bi-person-fill"></i></i></span>
                </div>
                <div class="input-group mb-3">
                    <input class="form-control" type="email" placeholder="Email" name="email">
                    <span class="input-group-text"> <i class="bi bi-envelope-fill text-warning"></i></span>
                </div>
                <div class="input-group mb-3">
                    <input class="form-control" type="password" placeholder="Password" name="password">
                    <span class="input-group-text"> <i class="bi bi-lock-fill"></i></span>
                </div>
                <button type="submit" class="btn btn-outline-light">Registrati</button>
            </form>
        </div>
    </div>
</div>

<?php
include __DIR__ . "/includes/end.php";