<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    
    <title>Fleur'shop</title>
</head>
<body>
<?php
include 'header.php';
?>


<?php

include('config.php');
Session_start();
$pdo = new PDO("mysql:host=localhost;dbname=fleurshop", "root", ""); // Adjust the connection parameters as needed
 
$stmt =$pdo->prepare("insert into users (nom, prénom, email, mot de passe) values (?, ?, ?, ?)");
 
echo "Utilisateur ajouté avec succès !";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $password = $_POST['password'];
    $email = $_POST['email'];
  
   
    $req = "INSERT INTO users (nom, prenom, email, password,) VALUES ('$nom', '$prenom', '$email', '$password', )";
     
    $stmt = $pdo->prepare($req);


    if (empty($nom) || empty($prenom) || empty($password) || empty($email) || empty($role)) {
        echo "<div class='alert alert-danger'>All fields are required.</div>";
        exit;
    }

    if( strlen($password) < 8) {
        echo "<div class='alert alert-danger'>Password must be at least 12 characters long.</div>";
        exit;
    }

    if ($password != $password) {
        echo "<div class='alert alert-danger'>Passwords do not match.</div>";
        exit;
    }

   

    // Check if the email already exists
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->fetchColumn() > 0) {
        echo "<div class='alert alert-danger'>Email already exists.</div>";
        exit;
    }
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare and execute the SQL statement
        $stmt = $pdo->prepare("INSERT INTO users (nom, prenom, mail, phone, mdp, sexe, access) VALUES (?, ?, ?, ?, ?, ?, ?)");
        if ($stmt->execute([$nom,$prenom, $email,  $hashed_password, $role,])) {
            header("Location: index.php");
            exit;
        } else {
            echo "<div class='alert alert-danger'>Registration failed. Please try again.</div>";
        }

      
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>



<body class="bg-secondary">
    <form  class="mt-3 p-3 rounded bg-white container" action="" method="post">
        <h1 class="text-center">Inscription  </h1>

        <input class="form-control" type="text" name="nom" placeholder="Username" required>
        <input class="mt-3 form-control" type="text" name="prenom" placeholder="First Name" required>
        <input class="mt-3 form-control" type="password" name="password" placeholder="Password" required>
        <input class="mt-3 form-control" type="password" name="confirm_password" placeholder="Confirm Password" required>
        <input class="mt-3 form-control" type="email" name="email" placeholder="Email" required>
        <input class="mt-3 form-control" type="text" name="phone" placeholder="Phone Number" required>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="sexe" value="femme" id="sexe">
            <label class="form-check-label" for="sexe">
              Femme
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="sexe" value="homme" id="sexe"  checked>
            <label class="form-check-label" for="sexe">
              Homme
            </label>
          </div>    

        <input class="mt-3 btn btn-outline-primary" type="submit" value="S'inscrire">
    </form>
</body>
</html>
</div>
 
    
</body>
</html>