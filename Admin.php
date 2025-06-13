<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fleur'shop</title>
    <link rel="stylesheet" href="styles.css">
    <link  href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
 <?php
 include 'header.php';
 ?>   
 <?php
// Connexion à la base de données
$conn = new mysqli("localhost", "root", "", "fleurshop");

if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];
    $stock = $_POST['stock'];
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];

    // Déplace l’image dans le dossier /images/
    move_uploaded_file($tmp_name, "images/" . $image);

    $stmt = $conn->prepare("INSERT INTO produit (nom, description, prix, image, stock) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdsi", $nom, $description, $prix, $image, $stock);

    if ($stmt->execute()) {
        $message = "✅ Fleur ajoutée avec succès !";
    } else {
        $message = "❌ Erreur : " . $stmt->error;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin - Ajouter une fleur</title>
</head>
<body>
    <h2>Ajouter une nouvelle fleur</h2>

    <?php if ($message) echo "<p>$message</p>"; ?>

    <form method="POST" enctype="multipart/form-data">
        Nom : <input type="text" name="nom" required><br><br>
        Description : <textarea name="description" required></textarea><br><br>
        Prix : <input type="number" name="prix" step="0.01" required><br><br>
        Stock : <input type="number" name="stock" required><br><br>
        Image : <input type="file" name="image" accept="image/*" required><br><br>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>

    <h2>Liste des fleurs</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Image</th>
            <th>Stock</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM produit");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nom'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "<td>" . $row['prix'] . "€</td>";
            echo "<td><img src='images/" . $row['image'] . "' alt='" . $row['nom'] . "' width='100'></td>";
            echo "<td>" . $row['stock'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <?php
    $conn->close();
    ?>
</body>
</html>