<?php
$page = explode("/", $_SERVER['REQUEST_URI'])[2];
var_dump($page)
?>
<nav class="navbar navbar-expand-lg " style="background:#AA7788">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Fleur'shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="catalogue.php">Catalogue</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="produit.php">produit</a>
        </li>
           <li class="nav-item">
          <a class="nav-link" href="panier.php">panier</a>
        </li>
           <li class="nav-item">
          <a class="nav-link" href="login.php">connexion</a>
        </li>
           <li class="nav-item">
          <a class="nav-link" href="admin.php">admin</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>