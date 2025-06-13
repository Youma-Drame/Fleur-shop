
  <?php
  include('config.php');
session_start();
if (!isset($_SESSION['id_users'])) {
    $id_users = $_SESSION['id_users'];
    $quantite =1; // Par défaut, on ajoute une seule unité du produit
} else {
    die("Vous devez être connecté pour ajouter un produit au panier.");
    exit();
}
require 'config.php';
$id = (int)($_GET['id'] ?? 0);
$stmt = $pdo->prepare("SELECT * FROM produit WHERE id = ?");
$stmt->execute([$id]);
$produit = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$produit) {
    die("Produit non trouvé.");
}

//insert panier from database

     // Enregistrer la commande dans la base de données
    $stmt = $pdo->prepare("INSERT INTO panier (id, id_users, id_product, quantite) VALUES (?, ?, ?)");
    $stmt->execute([$id,$id_users,,$quantite]);

$_SESSION['produit_choisi'] = $produit;
header("Location: commande.php");
exit();
?>