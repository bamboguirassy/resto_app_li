<!doctype html>
<html lang="en">

<head>
    <title>Ajout d'un produit</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row gy-2">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-sm navbar-light bg-light">
                    <div class="container">
                        <a class="navbar-brand" href="#">Resto APP</a>
                        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="collapsibleNavId">
                            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home <span
                                            class="visually-hidden">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Produit</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                                        <a class="dropdown-item" href="#">Action 1</a>
                                        <a class="dropdown-item" href="#">Action 2</a>
                                    </div>
                                </li>
                            </ul>
                            <form class="d-flex my-2 my-lg-0">
                                <input class="form-control me-sm-2" type="text" placeholder="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>

            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Formulaire d'ajout de produit</h4>
                        <form id="contactForm">
                            <div class="mb-3">
                                <label class="form-label" for="nom">Nom</label>
                                <input class="form-control" id="nom" type="text" placeholder="Nom"
                                    data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="nom:required">Nom is required.</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="code">Code</label>
                                <input class="form-control" id="code" type="text" placeholder="Code"
                                    data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="code:required">Code is required.</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="categorie">Catégorie</label>
                                <select class="form-select" id="categorie" aria-label="Catégorie">
                                    <option value="Selectionner la catégorie">Selectionner la catégorie</option>
                                    <option value="Plat">Plat</option>
                                    <option value="Boisson">Boisson</option>
                                    <option value="Glace">Glace</option>
                                    <option value="Fast FOOD">Fast FOOD</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="prixUnitaire">Prix Unitaire</label>
                                <input class="form-control" id="prixUnitaire" type="number" min="5" placeholder="Prix Unitaire"
                                    data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="prixUnitaire:required">Prix Unitaire is
                                    required.</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="quantite">Quantité</label>
                                <input class="form-control" id="quantite" type="number" placeholder="Quantité"
                                    data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="quantite:required">Quantité is
                                    required.</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="photo">Photo</label>
                                <input class="form-control" id="photo" type="file" accept="images/*" placeholder="Photo"
                                    data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="photo:required">Photo is required.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="description">Description</label>
                                <textarea class="form-control" id="description" type="text" placeholder="Description" style="height: 10rem;"
                                    data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="description:required">Description is
                                    required.</div>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg disabled" id="submitButton"
                                    type="submit">Enregistrer</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
</body>

</html>
