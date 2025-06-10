<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fleur'shop</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <link  href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
  <?php
  include 'header.php';
  ?>
  <div class="container">
      <h1 class="mt-5">Panier</h1>
      <p>Votre panier est vide.</p>
      <p>Ajoutez des articles à votre panier pour commencer vos achats.</p>
      
      <div class="row mt-4">
          <div class="col-md-4">
              <div class="card">
                  <img src="https://example.com/image1.jpg" class="card-img-top" alt="Fleur 1">
                  <div class="card-body">
                      <h5 class="card-title">Fleur 1</h5>
                      <p class="card-text">Description de la fleur 1.</p>
                      <a href="#" class="btn btn-primary">Ajouter au panier</a>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card">
                  <img src="https://example.com/image2.jpg" class="card-img-top" alt="Fleur 2">
                  <div class="card-body">
                      <h5 class="card-title">Fleur 2</h5>
                      <p class="card-text">Description de la fleur 2.</p>
                      <a href="#" class="btn btn-primary">Ajouter au panier</a>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card">
                  <img src="https://example.com/image3.jpg" class="card-img-top" alt="Fleur 3">
                  <div class="card-body">
                      <h5 class="card-title ">Fleur 3</h5>
                      <p class="card-text">Description de la fleur 3.</p>
                      <a href="#" class="btn btn-primary">Ajouter au panier</a>
                  </div>
              </div>
          </div>
      </div>
      <div class="mt-5">
          <h2>Contactez-nous</h2>
          <p>Pour toute question ou assistance, n'hésitez pas à nous contacter.</p>
          <form>
              <div class="mb-3">
                  <label for="name" class="form-label">Nom</label>
                  <input type="text" class="form-control" id="name" required>
              </div>
              <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" required>
              </div>
              <button type="submit" class="btn btn-primary">Envoyer</button>
          </form>
      </div>
  </div>
  <div class="footer mt-5">
      <p>&copy; 2023 Fleur'shop. Tous droits réservés.</p>
  </div>
</div>
</div>
</div>  
</body>
</html>