<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">
    <script src="js/script.js"></script>
    <title>page produits</title>
</head>
<body>
    <div class="background">
        <section class="container-menu">
            <div class="titre-principal">
                <h1> Arts de la Terre </h1>
            </div>
                <div class="menu" id="menu">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Collection</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Panier</a>
                        </li>
                    </ul>
                </div>
            <!-- section -->
            <section class="container-page">
                <div class="row no-gutters mx-auto">
                <!---- container ---->
                    <div class="container-fluid vignette mx-auto m-3 px-auto p-3" style="max-width: 900px">
                        <div class="row no-gutters">
                            <div class="col-md-8 col-sm-12 image-centrale">
                                <img src="sources/images/mug-02.jpg" alt="mug-02.jpg" class="img-fluid vignetteB">
                                <div class="col-8 monproduit">
                                    <button class="btn-ouvrir" onclick="ouvrirProduitA()">Description</button>
                                    <div class="mon_produit" id="monProduitA">
                                        <form action="" class="form-container col">
                                            <div class="row no-gutters">
                                                <div class="col-4">
                                                    <h2>Collection mug Grey</h2>
                                                </div>
                                                <div class="col-6">
                                                    <img src="sources/images/mug-grey.webp" alt="mug-grey.webp" class="img-fluid">
                                                </div>
                                            </div>
                                            <p>La collection mug Grey est en Terre cuite, 
                                                façonner par nos soins dans nos atelier, celle-ci comprend un assortiment de 50 pièces.</p>
                                            <button type="submit" class="btn-panier">Ajouter au panier</button>
                                            <button type="button" class="btn-fermer" onclick="fermerProduitA()">Fermer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex align-content-start col-md-4 d-md-block">
                                <div>
                                    <img src="sources/images/mug-small-01.jpg" alt="mug-small-01.jpg" class="img-fluid vignette " >
                                </div>
                                <div>
                                    <img src="sources/images/mug-small-02.jpg" alt="mug-small-02.jpg" class="img-fluid vignette " >
                                </div>
                                <div>
                                    <img src="sources/images/mug-small-03.jpg" alt="mug-small-03.jpg" class="img-fluid vignette " >
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="carte-prix">
                                    <h5 class="card-title"> Collection mug - <span class="font-image">Arts de la Terre -</span></h5>
                                    <p class="card-text">Prix : 615€</p>
                                    <button type="submit" class="btn-Panier">Ajouter au panier</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---------->
                    <div class="container-fluid vignette mx-auto m-3 px-auto p-3" style="max-width: 900px">
                        <div class="row no-gutters">
                            <div class="col d-flex align-content-start col-md-4 d-md-block">
                                <div>
                                    <img src="sources/images/ceramic-mug.webp" alt="ceramic-mug.webp" class="img-fluid vignette " >
                                </div>
                                <div>
                                    <img src="sources/images/ceramic.webp" alt="ceramic.webp" class="img-fluid vignette" >
                                </div>
                                <div>
                                    <img src="sources/images/transylvania.webp" alt="transylvania.webp" class="img-fluid vignette " >
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12 image-centrale">
                                <img src="sources/images/ceramic.webp" alt="ceramic.webp" class="img-fluid vignetteB">
                                    <div class="col-8 monproduit">
                                        <button class="btn-ouvrir" 
                                        onclick="ouvrirProduitB()">Description</button>
                                        <div class="mon_produit" id="monProduitB">
                                            <form action="" class="form-container col-8">
                                            <div class="row no-gutters">
                                                    <div class="col-4">
                                                        <h2>Collection Ceramic</h2>
                                                    </div>
                                                    <div class="col-6">
                                                        <img src="sources/images/ceramic.jpg" alt="ceramic.jpg" class="img-fluid">
                                                    </div>
                                                </div>
                                                <p>Ceramic est une collection faience, produite dans nos atelier. Cette collection comprend un assortiment de 25 pièces.</p>
                                                <button type="submit" class="btn-panier">Ajouter au panier</button>
                                                <button class="btn-fermer" onclick="fermerProduitB()">Fermer</button>
                                            </form>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-12">
                                <div class="carte-prix">
                                    <h5 class="card-title"> Collection Ceramic - <span class="font-image">Arts de la Terre -</span></h5>
                                    <p class="card-text">Prix : 979€</p>
                                    <button type="submit" class="btn-Panier">Ajouter au panier</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----------------------->
                    <div class="container-fluid vignette mx-auto m-3 px-auto p-3" style="max-width: 900px">
                        <div class="row no-gutters">
                            <div class="col-md-8 col-sm-12 image-centrale">
                                <img src="sources/images/plate.jpg" alt="plate.jpg" class="img-fluid vignetteB">
                                    <div class="col-8 monproduit">
                                        <button type="submit" class="btn-ouvrir" onclick="ouvrirProduitC()">Description</button>
                                        <div class="mon_produit" id="monProduitC">
                                            <form action="" class="form-container col-8">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <h2>Collection Art de la Table</h2>
                                                    </div>
                                                    <div class="col-6">
                                                        <img src="sources/images/plate.jpg" alt="plate.jpg" class="img-fluid">
                                                    </div>
                                                </div>
                                                <p>Art de la Table est un produit de la gamme faience et Terre cuite, 
                                                    un travail de groupe de nos artisans. 
                                                    Cette collection comprend 40 pièces.</p>
                                                <button type="submit" class="btn-panier">Ajouter au panier</button>
                                                <button type="button" class="btn-fermer" onclick="fermerProduitC()">Fermer</button>
                                            </form>
                                        </div>
                                    </div>
                            </div>
                            <div class="col d-flex align-content-start col-md-4 d-md-block image-vignette">
                                <div>
                                    <img src="sources/images/ceramic-deco.webp" alt="ceramic-deco.webp" class="img-fluid vignette " >
                                </div>
                                <div>
                                    <img src="sources/images/plate.webp" alt="plate.webp" class="img-fluid vignette " >
                                </div>
                                <div>
                                    <img src="sources/images/teapot.webp" alt="teapot.webp" class="img-fluid vignette " >
                                </div>
                                </div>
                                <div class="col-12">
                                    <div class="carte-prix">
                                        <h5 class="card-title"> Collection Art de la Table - <span class="font-image">Arts de la Terre -</span></h5>
                                        <p class="card-text">Prix : 827€</p>
                                    <button type="submit" class="btn-Panier">Ajouter au panier</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!------------------------>
                </div>
                <!--------------------------->
                <div class="fonds-ecranA " >
                    <p>
                        - Produits du Monde - Argile - Terre cuite - Grés - Arts de la Terre - 
                        Terre cuite - Grés - Arts de la Terre - Argile - Produits du Monde -

                        Produits du Monde - Argile - Terre cuite - Grés - Arts de la Terre - 
                        Terre cuite - Grés - Arts de la Terre - Argile - Produits du Monde -

                        Produits du Monde - Argile - Terre cuite - Grés - Arts de la Terre - 
                        Terre cuite - Grés - Arts de la Terre - Argile - Produits du Monde -

                        - Products of the World - Clay - Terracotta - Ice - Earth Arts - 
                        Terracotta - Sandstone - Earth Arts - Clay - World Products -

                        Products of the World - Clay - Terracotta - Sandstone - Earth Arts - 
                        Terracotta - Sandstone - Earth Arts - Clay - World Products -

                        Products of the World - Clay - Terracotta - Sandstone - Earth Arts - 
                        Terracotta - Sandstone - Earth Arts - Clay - World Products -

                        - Produits du Monde - Argile - Terre cuite - Grés - Arts de la Terre - 
                        Terre cuite - Grés - Arts de la Terre - Argile - Produits du Monde -

                        Produits du Monde - Argile - Terre cuite - Grés - Arts de la Terre - 
                        Terre cuite - Grés - Arts de la Terre - Argile - Produits du Monde -

                        Produits du Monde - Argile - Terre cuite - Grés - Arts de la Terre - 
                        Terre cuite - Grés - Arts de la Terre - Argile - Produits du Monde -

                        - Products of the World - Clay - Terracotta - Ice - Earth Arts - 
                        Terracotta - Sandstone - Earth Arts - Clay - World Products -

                        Products of the World - Clay - Terracotta - Sandstone - Earth Arts - 
                        Terracotta - Sandstone - Earth Arts - Clay - World Products -

                        Products of the World - Clay - Terracotta - Sandstone - Earth Arts - 
                        Terracotta - Sandstone - Earth Arts - Clay - World Products -
                    </p>
                </div>
            </section>
        </section>
    </div>

    <script src="script.js"></script>

    <footer>
        <div class="footer">
            <p>
            Les Arts de la Terre - Atelier de fabrication de poterie et de faïence - Ventes et Expos - 
            </p>
        </div>
    </footer>
</body>
</html>