<?php
include __DIR__ . "/includes/start.php";

$username = $_POST["username"] ?? "";

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $stmt = $pdo->prepare("SELECT * FROM utente WHERE username = :username");
    $stmt->execute([
        "username" => $username,
    ]);
};


?>

<div class="row justify-content-center">
    <div class="col-4 bg-dark text-white text-center mt-5 rounded-3">
        
        <div class="my-4 px-4">
            <form action="" method="POST">
                <h2 class="my-4">Accedi</h2>
                <div class="input-group mb-3">
                    <input class="form-control" type="text" placeholder="Username" name="username" >
                    <span class="input-group-text"> <i class="bi bi-envelope-fill text-warning"></i></span>
                </div>
                <div class="input-group mb-3">
                    <input class="form-control" type="password" placeholder="Password" name="password">
                    <span class="input-group-text"> <i class="bi bi-lock-fill"></i></span>
                </div>
                <button type="submit" class="btn btn-outline-light">Accedi</button>
            </form>
        </div>
    </div>
</div>

<?php
include __DIR__ . "/includes/end.php";