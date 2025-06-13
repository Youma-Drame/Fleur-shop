<?php

include 'config.php'; // Assurez-vous que ce fichier contient la connexion à la base de données



//take produit from database
$listPorduits = $pdo->query("SELECT * FROM produit")->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="En">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fleur'shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <link  href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
 <?php
 include 'header.php';
 ?>
<?php session_start();  
 require 'config.php'; // Assurez-vous que ce fichier contient la connexion à la base de données
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     $email = $_POST['email'];
     $password = $_POST['password'];

     // Requête pour vérifier les identifiants
     $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
     $stmt->execute(['email' => $email, 'password' => $password]);
     $user = $stmt->fetch();

     if ($user) {
         // Authentification réussie
         $_SESSION['user_id'] = $user['id'];
         header('Location: index.php'); // Rediriger vers la page d'accueil
         exit();
     } else {
         // Authentification échouée
         echo "<div class='alert alert-danger'>Identifiants incorrects.</div>";
     }
  }
  ?>
  <div class="carousel-inner">
    <div class="carousel-item active">

      <img src="https://m.media-amazon.com/images/S/aplus-media-library-service-media/6da6769e-6fe0-406f-b5d7-bfc1de8b4f69.__CR0,0,1200,1200_PT0_SX300_V1___.jpg" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block">
      <h1 class= 'text-center'>Fleur'shop</h1>
      <h4 class='text-center'>Votre boutique de fleurs en ligne</h4>
      <h1>Offrez une émotion, une fleur,un souvenir</h1>
      <p class="intro-btn"><a href="catalogue.php" class="btn">Découvrir notre collection</a></p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<section class="bouquets">
  <h1 class='text-center'>Nos bouquets du moment</h1>
  <p>Découvrez notre sélection de bouquets de fleurs, conçus avec soin pour chaque occasion. Que ce soit pour un anniversaire, un mariage ou simplement pour faire plaisir, nous avons le bouquet parfait pour vous.</p>
  <?php foreach ($listPorduits as $produit) : ?>
<div class="product">
  <img src="<?= $produit['image'] ?>" alt="bouquet de roses">
  <p><?= $produit['description'] ?></p>
  <strong><?= $produit['prix'] ?>€</strong>
 <p><a href="Panier.php?id=<?= $produit['id'] ?>" class="btn">Ajouter au panier</a></p>
</div>
<?php endforeach; ?>
  <div class="products">
    <div class ="product">
    <img src="https://medias.interflora.fr/fstrz/r/s/c/medias.interflora.fr/medias/6DC-GALLERY-0-1.jpg?context=bWFzdGVyfGltYWdlc3w0NzIzODV8aW1hZ2UvanBlZ3xpbWFnZXMvaDBiL2gxOC85NjA3MDA0MDI4OTU4LmpwZ3w5MzExOGI0MzU4M2U0NDUxZTU1M2YwZjJkOGU3YTE3NTI3MzVhODBiMWQ4M2EwNGE2Yzk1ZmQ3ZTgyZWM0NTJi&frz-width=542" alt="Bouquet de saison">
    <p>les grands classiques des bouquets romantiques que sont les roses et les lys.</p>
    <strong>79,95€</strong>
 <p><a href="Panier.php?id=<?= $produit['id'] ?>" class="btn">Ajouter au panier</a></p>
</div>

<div class="product">
  <img src="https://www.la-vie-en-fleur.fr/wp-content/uploads/2023/01/coussin-deuil.jpg" alt="Coussin deuil">
  <p>Coussin deuil avec fleurs de saison.</p>
  <strong>77.00€</strong>
<p><a href="Panier.php?id=<?= $produit['id'] ?>" class="btn">Ajouter au panier</a></p>
</div>
<div class="product">
  <img src="https://medias.interflora.fr/fstrz/r/s/c/medias.interflora.fr/medias/W2BOROMO-GALLERY-0-1.jpg?context=bWFzdGVyfGltYWdlc3w1MzU3NjB8aW1hZ2UvanBlZ3xpbWFnZXMvaGM2L2hhNy85NjEzMzYxMjgzMTAyLmpwZ3xkOTYxNTdkNjcyYjA1ZmU5OWU2MmVhOTc1YjdjYmM4ZWMxZmNmZGUxOGY3YjIwNjY4ZDFjZTYwNzYyNDE0NGQ2&frz-width=542" alt="rose">
  <p>Bois de rose et son vase offert</p>
  <strong>44,95€</strong>
 <p><a href="Panier.php?id=<?= $produit['id'] ?>" class="btn">Ajouter au panier</a></p>
</div>
<div class="product">
<img src="https://medias.interflora.fr/fstrz/r/s/c/medias.interflora.fr/medias/1SEN-THUMBMAY-PRIMARY-0-1.jpg?context=bWFzdGVyfGltYWdlc3wxNDY4MTR8aW1hZ2UvanBlZ3xpbWFnZXMvaGEyL2gzMy85Njk0NzEyNzkxMDcwLmpwZ3w3MzEyYmRlODUyMmYyYTVkOTQyMDIzY2E2M2QzZWY2NGM4MGMwYmEzYWM3NTlmZTRkYmMwNDk4ZjU0OTNlYTQ2&frz-width=320" alt="">
<p>Joyeux anniversaire.</p>
<strong>56,95€</strong>
<p><a href="Panier.php?id=<?= $produit['id'] ?>" class="btn">Ajouter au panier</a></p>
</div>
<div class="product">
<img src="https://medias.interflora.fr/fstrz/r/s/c/medias.interflora.fr/medias/1PEPL-THUMBMAY-PRIMARY-0-1.jpg?context=bWFzdGVyfGltYWdlc3wxMDIxNjV8aW1hZ2UvanBlZ3xpbWFnZXMvaGUyL2hiMS85NjE1Njk1MTgzOTAyLmpwZ3xhMGNhNWY5MGNiYTY3Y2NkOWE5ZGRmODc5MTcyZGRmMjU3Y2Y1YjU4NmViZTRjMmYzMjlhNWY2ZjdmOGU4MjM2&frz-width=320" alt="">
<p>petit plaisiir</p>
<strong>49,95€</strong>
<p><a href="Panier.php?id=<?= $produit['id'] ?>" class="btn">Ajouter au panier</a></p>
</div>
<div class="product"> 
  <img src="https://medias.interflora.fr/fstrz/r/s/c/medias.interflora.fr/medias/2PER-THUMBMAY-PRIMARY-0-1.jpg?context=bWFzdGVyfGltYWdlc3wxNjY1MDF8aW1hZ2UvanBlZ3xpbWFnZXMvaDMyL2g4MC85NjEyMDM1MzU4NzUwLmpwZ3xjMjc4YTY3NmJiOTk2Y2U1ZmZmOTVlZmM4OWY1ZGZmYmIzNDQ5YTE4MDI4ZTkzZDFjMzI5N2NiYTljOTFiMGFl&frz-width=320" alt="">
  <p>Perlita</p>
  <strong>59,95€</strong>
  <p><a href="Panier.php?id=<?= $produit['id'] ?>" class="btn">Ajouter au panier</a></p>
</div>
  <div class="product"> 
    <img src="https://medias.interflora.fr/fstrz/r/s/c/medias.interflora.fr/medias/1MGAM-PRIMARY-0-1.jpg?context=bWFzdGVyfGltYWdlc3wxMDcyNzB8aW1hZ2UvanBlZ3xpbWFnZXMvaDE5L2g0YS85NjM2NjY2MTQ2ODQ2LmpwZ3xjNzZmZmRmYWU2NjUwZWYwNGQxMzI3NDA0OTA4ZGYwYjI4Mjk3Y2YwZWY1ZGY4MGU5NzNjZTZiODQ3NWU0ZmVl&frz-width=440&frz-height=440&frz-gravity=center&frz-enlarge=true" alt="">
    <p>Mon grand amour</p>
    <strong>39,95€</strong>
    <p><a href="Panier.php?id=<?= $produit['id'] ?>" class="btn">Ajouter au panier</a></p>
    </div>
    <div class="product"> 
      <img src="https://medias.interflora.fr/fstrz/r/s/c/medias.interflora.fr/medias/2LY-THUMBMAY-PRIMARY-0-1.jpg?context=bWFzdGVyfGltYWdlc3wxNzcyOTV8aW1hZ2UvanBlZ3xpbWFnZXMvaDVhL2hmOC85NzIzODk5NDc4MDQ2LmpwZ3wyOGJlZDhjNTgwNjIzNzY4MzE1Nzc2ZDc4NGQxMDI5Zjg3MGQ5MDAwZDZjMWMxMmI0NDhmYzFmMmY2NDhmNTZm&frz-width=320" alt="">
      <p>Nos magnifique lys</p>
      <strong>42,95€</strong>
      <p><a href="Panier.php?id=<?= $produit['id'] ?>" class="btn">Ajouter au panier</a></p>
      </div>
</div>
</section>

<section class="why-us">
  <h1 class='text-center'>Pourquoi nous choisir</h1>
  <ul>
    <img src="https://thumbs.dreamstime.com/z/symbole-vert-de-vecteur-d-ic-ne-coutil-trait-rep-re-isolement-sur-le-fond-blanc-v-rifi-e-ou-signe-coche-checkbox-bien-choisi-147508521.jpg" alt="icône" width="20" style="vertical-align: middle;">
    <p>Fleurs fraîche du jour</p>
    <p> Directement sélectionnées chez nos producteurs partenaires </p>
    <img src="https://www.bing.com/images/search?view=detailV2&ccid=%2bNZ%2bLgth&id=A07633E8F303F838259574371CBF9D73F1AF7DAE&thid=OIP.-NZ-LgthXQbTurt-PQmlVQHaHa&mediaurl=https%3a%2f%2fimg.freepik.com%2fvecteurs-premium%2ficone-palette-peinture-peintre-outil-illustration-symbole-passe-temps-vecteur_744955-689.jpg%3fw%3d1800&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.f8d67e2e0b615d06d3babb7e3d09a555%3frik%3drn2v8XOdvxw3dA%26pid%3dImgRaw%26r%3d0&exph=1800&expw=1800&q=Symbole+Peinture&simid=608039740967632162&FORM=IRPRST&ck=C70E0F6661029208755B4EEFFB8FDDB4&selectedIndex=0&itb=0" alt="icône" width="20" style="vertical-align: middle;">
    <p>Bouquets sur mesure</p>
    <p>Personnalisez votre,
commande selon vos envies 
et occasions.</p>
<img src="https://static.vecteezy.com/ti/vecteur-libre/p3/23795004-icone-de-livraison-de-voiture-isole-sur-fond-blanc-vectoriel.jpg" alt="icône" width="20" style="vertical-align: middle;">
    <p>En 24h partout en france,
à la date de votre choix.</p>
</ul>
</section>
<section class="newsletter">
  <p>Ne manquez aucune
création florale !</p>
  <p>Inscrivez-vous à notre newsletter et recevez -10%</p>
  <form>
    <input type="email" placeholder="Adresse e-mail" required>
    <button class="btn" type="submit">S'inscrire</button>
</form>
</section>
<footer>
  <p> 07 59 65 58 33 | fleur'shop@gmail.com</p>
  <p>Suivez-nous:
    <a href="#">Instagram</a> |
    <a href="#">Facebook</a>
</p>
</footer>
</div>
</body>
</html>

    



</body>
</html>