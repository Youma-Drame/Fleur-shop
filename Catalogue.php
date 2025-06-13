<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="styles.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <title>Tous nos bouquets</title>
</head>
<body>
     <?php
 include 'header.php';
 ?>
 <div class="">

    <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
        <form class="d-flex" role="search">
          <a class="btn ms-3 btn-outline-success" href="Login.php">Connecter <i class="fa-solid fa-user"></i></a>

          <a href="register.php" class="btn ms-3 btn-outline-success" >S'inscrire</a>
        </form>
      </div>
    </div>
  </nav>
  
 <header>
    <h1>Tous nos bouquets</h1>
    <p>Découvrez notre sélection de fleurs et de bouquets, parfaits pour chaque occasions.</p>
    <nav class="Categories">
       <a href="Anniversaire.php" class="btn ">Anniversaire</a>
       <a href="Mariage.php" class="btn ">Mariage</a>  
         <a href="Amour.php" class="btn ">Amour</a>
         <a href="Deuil.php" class="btn ">Deuil</a>
            <a href="Naissance.php" class="btn ">Naissance</a>
           
            <a href="Plaisir.php" class="btn ">Plaisir</a>
            <p></p>
    </nav>
</header>
   <section class="bouquets">
 
  <div class="products">
    <div class ="product">
    <img  src="https://medias.interflora.fr/fstrz/r/s/c/medias.interflora.fr/medias/6DC-GALLERY-0-1.jpg?context=bWFzdGVyfGltYWdlc3w0NzIzODV8aW1hZ2UvanBlZ3xpbWFnZXMvaDBiL2gxOC85NjA3MDA0MDI4OTU4LmpwZ3w5MzExOGI0MzU4M2U0NDUxZTU1M2YwZjJkOGU3YTE3NTI3MzVhODBiMWQ4M2EwNGE2Yzk1ZmQ3ZTgyZWM0NTJi&frz-width=542" alt="Bouquet de saison">
    <p>les grands classiques des bouquets romantiques que sont les roses et les lys.</p>
    <strong>79,95€</strong>
 
</div>
<div class="product">
  <img src="https://medias.florajet.com/_w_/produits/600/50292.jpg" alt="bouquet de roses">
  <p>Troublant et opulent bouquet de roses écarlates à chaque fleur parle d'amour et d'éternité.</p>
  <strong>52,90€</strong>

</div>
<div class="product">
  <img src="https://www.la-vie-en-fleur.fr/wp-content/uploads/2023/01/coussin-deuil.jpg" alt="Coussin deuil">
  <p>Coussin deuil avec fleurs de saison.</p>
  <strong>77.00€</strong>

</div>
<div class="product">
  <img src="https://medias.interflora.fr/fstrz/r/s/c/medias.interflora.fr/medias/W2BOROMO-GALLERY-0-1.jpg?context=bWFzdGVyfGltYWdlc3w1MzU3NjB8aW1hZ2UvanBlZ3xpbWFnZXMvaGM2L2hhNy85NjEzMzYxMjgzMTAyLmpwZ3xkOTYxNTdkNjcyYjA1ZmU5OWU2MmVhOTc1YjdjYmM4ZWMxZmNmZGUxOGY3YjIwNjY4ZDFjZTYwNzYyNDE0NGQ2&frz-width=542" alt="rose">
  <p>Bois de rose et son vase offert</p>
  <strong>44,95€</strong>

</div>
<div class="product">
<img src="https://medias.interflora.fr/fstrz/r/s/c/medias.interflora.fr/medias/1SEN-THUMBMAY-PRIMARY-0-1.jpg?context=bWFzdGVyfGltYWdlc3wxNDY4MTR8aW1hZ2UvanBlZ3xpbWFnZXMvaGEyL2gzMy85Njk0NzEyNzkxMDcwLmpwZ3w3MzEyYmRlODUyMmYyYTVkOTQyMDIzY2E2M2QzZWY2NGM4MGMwYmEzYWM3NTlmZTRkYmMwNDk4ZjU0OTNlYTQ2&frz-width=320" alt="">
<p>Joyeux anniversaire.</p>
<strong>56,95€</strong>
 
</div>
<div class="product">
<img src="https://medias.interflora.fr/fstrz/r/s/c/medias.interflora.fr/medias/1PEPL-THUMBMAY-PRIMARY-0-1.jpg?context=bWFzdGVyfGltYWdlc3wxMDIxNjV8aW1hZ2UvanBlZ3xpbWFnZXMvaGUyL2hiMS85NjE1Njk1MTgzOTAyLmpwZ3xhMGNhNWY5MGNiYTY3Y2NkOWE5ZGRmODc5MTcyZGRmMjU3Y2Y1YjU4NmViZTRjMmYzMjlhNWY2ZjdmOGU4MjM2&frz-width=320" alt="">
<p>petit plaisiir</p>
<strong>49,95€</strong>

</div>
<div class="product"> 
  <img src="https://medias.interflora.fr/fstrz/r/s/c/medias.interflora.fr/medias/2PER-THUMBMAY-PRIMARY-0-1.jpg?context=bWFzdGVyfGltYWdlc3wxNjY1MDF8aW1hZ2UvanBlZ3xpbWFnZXMvaDMyL2g4MC85NjEyMDM1MzU4NzUwLmpwZ3xjMjc4YTY3NmJiOTk2Y2U1ZmZmOTVlZmM4OWY1ZGZmYmIzNDQ5YTE4MDI4ZTkzZDFjMzI5N2NiYTljOTFiMGFl&frz-width=320" alt="">
  <p>Perlita</p>
  <strong>59,95€</strong>

</div>
  <div class="product"> 
    <img src="https://medias.interflora.fr/fstrz/r/s/c/medias.interflora.fr/medias/1MGAM-PRIMARY-0-1.jpg?context=bWFzdGVyfGltYWdlc3wxMDcyNzB8aW1hZ2UvanBlZ3xpbWFnZXMvaDE5L2g0YS85NjM2NjY2MTQ2ODQ2LmpwZ3xjNzZmZmRmYWU2NjUwZWYwNGQxMzI3NDA0OTA4ZGYwYjI4Mjk3Y2YwZWY1ZGY4MGU5NzNjZTZiODQ3NWU0ZmVl&frz-width=440&frz-height=440&frz-gravity=center&frz-enlarge=true" alt="">
    <p>Mon grand amour</p>
    <strong>39,95€</strong>
   
    </div>
    <div class="product"> 
      <img src="https://medias.interflora.fr/fstrz/r/s/c/medias.interflora.fr/medias/2LY-THUMBMAY-PRIMARY-0-1.jpg?context=bWFzdGVyfGltYWdlc3wxNzcyOTV8aW1hZ2UvanBlZ3xpbWFnZXMvaDVhL2hmOC85NzIzODk5NDc4MDQ2LmpwZ3wyOGJlZDhjNTgwNjIzNzY4MzE1Nzc2ZDc4NGQxMDI5Zjg3MGQ5MDAwZDZjMWMxMmI0NDhmYzFmMmY2NDhmNTZm&frz-width=320" alt="">
      <p>Nos magnifique lys</p>
      <strong>42,95€</strong>
  
      </div>
      <div class="product">
        <img src="https://medias.interflora.fr/fstrz/r/s/c/medias.interflora.fr/medias/1VECO-GALLERY-0-1.jpg?context=bWFzdGVyfGltYWdlc3wxNDc4ODV8aW1hZ2UvanBlZ3xpbWFnZXMvaGM0L2hhYy85NTE2NTIwNDA3MDcwLmpwZ3xhMGJkNjM4ZGZmMDdlM2JkMGQzMTliZjcwNTY5YTAyMThhYmFmYThmZmNlMDY5ZmE3MGIzZGUzZDY1ZTFhMTBl&frz-width=542" alt="">
        <p>La rose blanche se met au service de vos plus belles occasions avec notre bouquet Vert coton.</p>
        <strong>74,95€</strong>
        </div>
        <div class="product">
          <img src="https://medias.interflora.fr/fstrz/r/s/c/medias.interflora.fr/medias/2VELH-THUMBMAY-PRIMARY-0-1.jpg?context=bWFzdGVyfGltYWdlc3wxOTIxMDZ8aW1hZ2UvanBlZ3xpbWFnZXMvaGQ5L2hhMC85NjYzNjY2NzQ5NDcwLmpwZ3xjZjg2NTk3ZjlmNmI2YmIxZGZlYjk0MmExZDFlMjVkZGJkMGZhZGZlYTBmYmY1NWRmNDY3NTkxMmQxZDMyZGE5&frz-width=320" alt="">
          <p>Velours et son ourson Harry.</p>
          <strong>71,95€</strong>
          </div>
          <div class="product">
            <img src="https://medias.interflora.fr/fstrz/r/s/c/medias.interflora.fr/medias/B2BDL-THUMBMAY-PRIMARY-0-1.jpg?context=bWFzdGVyfGltYWdlc3wxMzY4NjJ8aW1hZ2UvanBlZ3xpbWFnZXMvaDg5L2hlYS85NDc2NDU4MDIwODk0LmpwZ3xmNGJiYmZhZTlmODcxNWI4MzY1ODY5NTY4NWZmOTRkZDQxYzM4YzdkZDJlYjIxZDc5ODBiNGFhZDg1NDBkZGJi&frz-width=320" alt="">
            <p>Bouquet de lisianthus.</p>
            <strong>39,95€</strong>
            </div>
            <div class="product">
              <img src="https://medias.interflora.fr/fstrz/r/s/c/medias.interflora.fr/medias/2LIB-THUMBMAY-PRIMARY-0-1.jpg?context=bWFzdGVyfGltYWdlc3wxMzM2NjZ8aW1hZ2UvanBlZ3xpbWFnZXMvaDUzL2hkMC85NTMwNjExMDA3NTE4LmpwZ3wzMzAxNTU3MTQ5M2Y1Y2UxMTNjN2EzY2U4NDQ4YWQ2NDlmNjQ2MzA4NDM2NzE2NzVmYTEyOTc5NmMzNDJjZWYw&frz-width=320" alt="">
              <p>Bouquet Gémeaux.</p>
              <strong>67,95€</strong>
              </div>
              <div class="product">
                <img src="https://medias.interflora.fr/fstrz/r/s/c/medias.interflora.fr/medias/3COC-GALLERY-0-1.png?context=bWFzdGVyfGltYWdlc3w0MzU3MTl8aW1hZ2UvcG5nfGltYWdlcy9oYmIvaDIyLzk0NDE4MjY3MzQxMTAucG5nfDEyNjQzZWJkYzhlNDQ1N2QyODRmNDE1MTdiZGE4NWU2MmM0NDY0ODA4NDYwZjU3ZDRhMDdhYTY3MTJkNWM0MTg&frz-width=542" alt="">
                <p>Cocon.</p>
                <strong>59,95€</strong>
                </div>
                <div class="product">
                  <img src="https://medias.interflora.fr/fstrz/r/s/c/medias.interflora.fr/medias/1VAFR-THUMBMAY-PRIMARY-0-1.jpg?context=bWFzdGVyfGltYWdlc3w5OTI4NnxpbWFnZS9qcGVnfGltYWdlcy9oMDkvaDg5Lzk2OTQ3MTAxNjk2MzAuanBnfDFjODQ1ZjdlNzllMzgyZmM1YzNhMmFkZjI0MDgwYjdmMjg2ZjUzZjliMGRlNjY5NTYyMTNlMDI5MmUzZGNjODE&frz-width=320" alt="">
                  <p>Vanille fraise.</p>
                  <strong>49,95€</strong>
                  </div>
                  <div class="product">
                    <img src="https://medias.interflora.fr/fstrz/r/s/c/medias.interflora.fr/medias/2RB-THUMBMAY-PRIMARY-0-1.jpg?context=bWFzdGVyfGltYWdlc3wzNDY4MzZ8aW1hZ2UvanBlZ3xpbWFnZXMvaDgwL2hiOC85NzE2MTY1NTA5MTUwLmpwZ3xhNGYzN2Q2Njc3ODU4NTNlYmEyYjkwZjIwOWZiYzRmMTA5ODVjZTcxNmZlMzBjZDlhYzEzYjJlNDJiOGVjMWJm&frz-width=320" alt="">
                    <p>Rosa bella.</p>
                    <strong>49,95€</strong>
                    </div>
                    <div class="product">
                      <img src="https://medias.interflora.fr/fstrz/r/s/c/medias.interflora.fr/medias/3ZETE-THUMBMAY-PRIMARY-0-1.jpg?context=bWFzdGVyfGltYWdlc3wyNzc3MjV8aW1hZ2UvanBlZ3xpbWFnZXMvaDM1L2gzOS85NzI3MjA4MTYxMzEwLmpwZ3wzMTQzMDEyYTdmYjNmZjdjOTczZWQ3NzAwNTAyMDQ4NDRiMDQzZWI3Y2JmMzU2NDAxMjA4ZDcyMjljYzYzMDQ5&frz-width=320" alt="">
                      <p>Zeste tendre.</p>
                      <strong>50€</strong>
                      </div>
                      <div class="product">
                        <img src="https://medias.interflora.fr/fstrz/r/s/c/medias.interflora.fr/medias/2PAR-THUMBMAY-PRIMARY-0-1.png?context=bWFzdGVyfGltYWdlc3wzMTAyNjZ8aW1hZ2UvcG5nfGltYWdlcy9oNzkvaDdjLzk2MjAyMzg0MDE1NjYucG5nfDgxOWQ4ZDg3N2E2ODNiZmQ2Mzk1YjcyOWUxZDI1Njk3Zjg5NTIyNmZhY2Q1ZTU3NTcwMDYzN2YxZGNmZDMwMWQ&frz-width=320" alt="">
                        <p>Paradilys.</p>
                        <strong>84,95€</strong>
                        </div>
                        <div class="product">
                          <img src="https://medias.interflora.fr/fstrz/r/s/c/medias.interflora.fr/medias/W2JAMO-THUMBMAY-PRIMARY-0-1.jpg?context=bWFzdGVyfGltYWdlc3wxMjgzMTZ8aW1hZ2UvanBlZ3xpbWFnZXMvaGE4L2g0ZS85NTg5MjE4NTQxNTk4LmpwZ3wxNmQ3ZGJjNDJhOGUxYzQwNjEwNDYwZmNlODA3MTY0M2U1NzRlOTYxZmNiZTY0MWYwZmYxOWM3ZDhjODkxMzU4&frz-width=320" alt="">
                          <p>Eden et son vase offert.</p>
                          <strong>44,95€</strong>
                          </div>
                          <div class="product">
                            <img src="https://medias.interflora.fr/fstrz/r/s/c/medias.interflora.fr/medias/FDMB3-THUMBMAY-PRIMARY-0-1.jpg?context=bWFzdGVyfGltYWdlc3wyNjg2MTR8aW1hZ2UvanBlZ3xpbWFnZXMvaDg1L2hiMi85NzI5OTc0MjM5MjYyLmpwZ3wyYTM5YjdmZDlkMmE3ZGM2Y2I3NTJkZWZkZDAxNDc3OGExMDJiYjVmYmRkMzM1MzMxZTM0MzRhNTlmODdiMDZm&frz-width=320" alt="">
                            <p>Nuage de tendresse.</p>
                            <strong>36,95€</strong>
                            </div>
                            <div class="product">
                              <img src="https://medias.interflora.fr/fstrz/r/s/c/medias.interflora.fr/medias/2VELC-THUMBMAY-PRIMARY-0-1.jpg?context=bWFzdGVyfGltYWdlc3wxNTc5OTd8aW1hZ2UvanBlZ3xpbWFnZXMvaDMyL2gwNC85NTE2NTI5NDUxMDM4LmpwZ3wwZjZmYjdjZjJhOTdmZjI1NzQyYjVlNWVhZWRmMWI1NDgyZWFlYzM3YmI5NGY3NjAzNDZhNDhiMDBiZWNhN2Q4&frz-width=320" alt="">
                              <p>velours et son champagne Devaux.</p>
                              <strong>79,95€</strong>
                              </div>
                              <div class="product">
                                <img src="https://medias.interflora.fr/fstrz/r/s/c/medias.interflora.fr/medias/3ER-THUMBMAY-PRIMARY-0-1.jpg?context=bWFzdGVyfGltYWdlc3wyODE4MzZ8aW1hZ2UvanBlZ3xpbWFnZXMvaDRjL2hmMi85NzA3MzAyNjE3MTE4LmpwZ3wwNDIxZWI0M2UzMWM5NDMwYjcyZGZjNzVmYWY5NzUxMTcwNDY1OWFlYzNkMmVmYzRlMmVhY2U3NGFmYzdkZmI2&frz-width=320" alt="">
                                <p>Ecrin de roses.</p>
                                <strong>42,95€</strong>
                                </div>
                                <div class="product">
                                  <img src="https://medias.interflora.fr/fstrz/r/s/c/medias.interflora.fr/medias/5COPA-THUMBMAY-PRIMARY-0-1.png?context=bWFzdGVyfGltYWdlc3w0NzU0NDh8aW1hZ2UvcG5nfGltYWdlcy9oNjUvaGYzLzk0NDE4NDYwOTk5OTgucG5nfDVjZWRjYmQxMTZkMmIyNGZlMTJhMWFiZDgyNmY1YWRlM2EzMmRlZGQ4MzFjNDc2YjkzMmUyM2Y4ZDg1OWY1NzM&frz-width=320" alt="">
                                  <p>Coin de paradis.</p>
                                  <strong>39,95€</strong>
                                  </div>
                                  <div class="product">
                                    <img src="https://i.aquarelle.com/01/images/produits/bouquet-hommage-en-blanc-%E2%80%93-123fleurs-%E2%80%93-livraison-aujourd%E2%80%99hui-350x350-57449.jpg" alt="">
                                    <p>Vanille fraise.</p>
                                    <strong>36,00€</strong>
                                    </div>
                                    <div class="product">
                                      <img src="https://i.aquarelle.com/01/images/produits/coussin-pyramide-fleurie%E2%80%93-fleurs-funeraires-livrees-avec-123fleurs-350x350-57461.jpg" alt="">
                                      <p>Pyramide fleurie.</p>
                                      <strong>139,00€</strong>
                                      </div>
                                      <div class="product">
                                        <img src="https://i.aquarelle.com/01/images/produits/couronne-de-fleurs-sinceres-amities-350x350-55656.jpg" alt="">
                                        <p>Amitié sincère.</p>
                                        <strong>235,00€</strong>
                                        </div>
                                        <div class="product">
                                          <img src="https://i.aquarelle.com/01/images/produits/grand-bouquet-430x430-56567.jpg" alt="">
                                          <p>Bouquet prestige.</p>
                                          <strong>69,00€</strong>
                                          </div>
                                          <div class="product">
                                            <img src="https://i.aquarelle.com/01/images/produits/passionnement-430x430-49604.jpg" alt="">
                                            <p>Bonheur XXL.</p>
                                            <strong>100,00€</strong>
                                            </div>
                                            <div class="product">
                                              <img src="https://medias.interflora.fr/fstrz/r/s/c/medias.interflora.fr/medias/2TUFR-THUMBMAY-PRIMARY-0-1.jpg?context=bWFzdGVyfGltYWdlc3wzMDQ1NjN8aW1hZ2UvanBlZ3xpbWFnZXMvaDUzL2hjMi85NzExMzQ2MjUzODU0LmpwZ3wzMDNkZTZjMDVlMmM4N2FlNjkzNWFlNjU3YWUxMjVlMDFkNGU1NzA4ZjVhZTZiZmQwNzhhNzg0NWJjZGExNTNh&frz-width=320" alt="">
                                              <p>Tutti frutti.</p>
                                              <strong>46,95€</strong>
                                              </div>
                                              <div class="product">
                                                <img src="https://medias.interflora.fr/fstrz/r/s/c/medias.interflora.fr/medias/B2LY-THUMBMAY-PRIMARY-0-1.jpg?context=bWFzdGVyfGltYWdlc3wyNjg5NDh8aW1hZ2UvanBlZ3xpbWFnZXMvaDllL2gzNC85Njk5MDg5MDIzMDA2LmpwZ3w4OTdhNGQxZjYwMjZkMjI2ZDdkYmM0MzQ4OWY3MThlOGYzZDdjOGY2M2IwYWMyZDlhZmRlYWI2YmNjYWY4NWQ0&frz-width=320" alt="">
                                                <p>Brassée de lys</p>
                                                <strong>33,95€</strong>
                                                </div>
                                                <div class="product">
                                                  <img src="https://medias.interflora.fr/fstrz/r/s/c/medias.interflora.fr/medias/2DH-THUMBMAY-PRIMARY-0-1.jpg?context=bWFzdGVyfGltYWdlc3wxMTg5NzJ8aW1hZ2UvanBlZ3xpbWFnZXMvaDZhL2g1Zi85NzIxNjM2MTI2NzUwLmpwZ3w5YTcyNTdhOWNmYTYwZWMwYTkxNzllNzcwYTk5YmJmM2NmNWU5ZjBmM2UxYWFkY2E0ZjAxZTY1NzY5MWI3NjBi&frz-width=320" alt="">
                                                  <p>Douceur printanière.</p>
                                                  <strong>31,95€</strong>
                                                  </div>
</div>

</section>
</div>
<div class="mt-5">
        <h2>Contactez-nous</h2>
        <p>Pour toute question ou demande spéciale, n'hésitez pas à nous contacter.</p>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
</div>
</div>
</div>
<div class="footer mt-5">
    <p>&copy; 2023 Fleur'shop. Tous droits réservés.</p>
</div>
</div>
</div>
</div>
<footer class="footer">
    <div class="container">
        <p>&copy; 2025 Tous droits réservés.</p>
        <p>Contact:
          
            <a href="mailto:
           

