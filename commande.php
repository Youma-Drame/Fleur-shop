<?php
session_start();
require 'config.php';
$produit = $_SESSION['produit_choisi'] ?? null;
if (!$produit) {
    echo "Aucun produit sélectionné.";
    exit();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $produitId = $produit['id'];
    $nom = $_POST['nom'] ?? '';
    $email = $_POST['email'] ?? '';
    $adresse = $_POST['adresse'] ?? '';
    $quantite =  (int) ($_POST['quantite'] ?? 1);
    $total = $produit['prix'] * $quantite;
    //verifie si l'utilisateur existe déjà
    $stmt = $pdo->prepare("SELECT id_user FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();
    if (!$user) {
        // Nouvel utilisateur, on l'inscrit
        $stmt = $pdo->prepare("INSERT INTO users (nom, email, adresse) VALUES (?, ?, ?)");
        $stmt->execute([$nom, $email, $adresse]);
        $userId = $pdo->lastInsertId();
    } else {
        // Utilisateur existant, on récupère son ID
        $userId = $user['id_user'];
    }
     // Enregistrer la commande dans la base de données
    $stmt = $pdo->prepare("INSERT INTO commande (nom, email, adresse,  Total) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$nom, $email, $adresse, $produit['id'], $quantite, $prix]);
    $commande_id = $pdo->lastInsertId();
    // Enregistrer le produit de la commande
    $stmt2 = $pdo->prepare("INSERT INTO commande_produit (commande_id, produit_nom, quantite, prix_unitaire) VALUES (?, ?, ?,?)");
    $stmt2->execute([$commandeId, $produit['nom'],$quantite, $produit['prix']]);
    // Vider la session temporaire
    unset($_SESSION['produit_choisi']);
    echo "<h2> Merci pour votre commande ! </h2>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Commande - <?= htmlspecialchars($produit['nom']) ?></title>
</head>
<body>
    <h1>🛍 Commander : <?= htmlspecialchars($produit['nom']) ?></h1>
    <img src="<?= htmlspecialchars($produit['image']) ?>" width="150"><br>
    <p>Prix : <strong><?= number_format($produit['prix'], 2) ?> €</strong></p>

    <form method="post">
        <label>Nom :<br>
            <input type="text" name="nom" required>
        </label><br><br>

        <label>Email :<br>
            <input type="email" name="email" required>
        </label><br><br>

        <label>Adresse :<br>
            <textarea name="adresse" required></textarea>
        </label><br><br>

        <label>Quantité :<br>
            <input type="number" name="quantite" min="1" value="1" required>
        </label><br><br>

        <button type="submit">✅ Valider la commande</button>
    </form>

    <p><a href="index.php">⬅ Retour à la boutique</a></p>
    
</body>
</html>