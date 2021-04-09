<!DOCTYPE html>

<html lang=fr>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="jarditou.css">
    <link rel="stylsheet" media="screen and (max-widht: 576px)" href="jarditou.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>jarditou</title>
</head>

<body>
    <div class="container-fluid">
        <div id="header">
            <img src="Jarditou_photos/jarditou_logo.jpg" id="logo" height="80" width="200" alt="Logo jarditou">
            <div class="float-right">
                <h1>Tout le jardin</h1>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Jarditou.com</a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="Index.html">Accueil <span class="sr-only">(current)</span></a>
                        <li class="nav-item">
                            <a class="nav-link" href="tableau.html">Tableau</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html" tabindex="-1" aria-disabled="true">Contact</a>
                        </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="Votre promotion" placeholder="Votre promotion" aria-label="Votre promotion">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
                </form>
            </div>
        </nav>

        <img src="Jarditou_photos/promotion.jpg" class="img-fluid" height="auto" width="1900" alt="Promotion">

        <div class="table-responsive-sm">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Photo</th>
                        <th>ID</th>
                        <th>Cat&eacute;gorie</th>
                        <th>Libell&eacute;</th>
                        <th>Prix</th>
                        <th>Couleur</th>
                    </tr>
                </thead>


                <tbody>
                    <tr class="table-warning">
                        <td><img src="jarditou_photos/7.jpg" alt="photo barbecues" height="100" width="auto"></td>
                        <td>7</td>
                        <td>Barbecues</td>
                        <td>Aramis</td>
                        <td>110.00&#8364;</td>
                        <td>Brun</td>
                    </tr>
                </tbody>

                <tbody>
                    <tr>
                        <td><img src="jarditou_photos/8.jpg" height="100" width="auto"></td>
                        <td>8</td>
                        <td>Barbecues</td>
                        <td>Athos</td>
                        <td>249.99&#8364;</td>
                        <td>Noir</td>
                    </tr>
                </tbody>

                <tbody>
                    <tr class="table-warning">
                        <td><img src="jarditou_photos/11.jpg" height="100" width="auto"></td>
                        <td>11</td>
                        <td>Barbecues</td>
                        <td>Clatronic</td>
                        <td>135.90&#8364;</td>
                        <td>Chrome</td>
                    </tr>
                </tbody>

                <tbody>
                    <tr>
                        <td><img src="jarditou_photos/12.jpg" height="100" width="auto"></td>
                        <td>12</td>
                        <td>Barbecues</td>
                        <td>Camping</td>
                        <td>88.00&#8364;</td>
                        <td>Noir</td>
                    </tr>
                </tbody>

                <tbody>
                    <tr class="table-warning">
                        <td><img src="jarditou_photos/13.jpg" height="100" width="auto"></td>
                        <td>13</td>
                        <td>Brouette</td>
                        <td>Green</td>
                        <td>49.00&#8364;</td>
                        <td>Verte</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <nav class=" navbar navbar-expand-sm bg-dark navbar-dark ">
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler " type="button " data-toggle="collapse " data-target="#collapsibleNavbar ">
                    <span class="navbar-toggler-icon "></span>
            </button>
        <div class="collapse navbar-collapse " id="collapsibleNavbar ">
            <ul class="navbar-nav ">
                <li class="nav-item ">
                    <a class="nav-link " href="Index.html">Mention légales</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="Index.html">Horaires</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="Index.html">Plan du site</a>
                </li>
            </ul>
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>


</html>
