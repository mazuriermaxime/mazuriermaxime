<html>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="jarditou.css">
    <link rel="stylsheet" media="screen and (max-widht: 576px)" href="jarditou.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>jarditou</title>
</head>

<body>
    <div class="container-fluide">

        <div id="header">
            <img src="Jarditou_photos/jarditou_logo.jpg" id="logo" height="80" width="200" alt="Logo jarditou">
            <div class="float-right">
                <h1>La qualit&eacute; depuis 70 ans</h1>
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

        <img src="Jarditou_photos/promotion.jpg" height="auto" width="100%" alt="Promotion">

        <p>* Ces zones sont obligatoires</p>

        <form action="http://bienvu.net/script.php" method="GET" id="incription">
            <fieldset>
                <legend>
                    <h1>Vos coordon&eacute;es</h1>
                </legend>



                <div class="form-group">
                    <label for="Veuillez saisir votre nom">Nom*</label>
                    <input type="text" class="form-control" id="Veuillez saisir votre nom" placeholder="Veuillez saisir votre nom">
                </div>
                <div class="form-group">
                    <label for="Veuillez saisir votre pr&eacutenom">Pr&eacute;nom*</label>
                    <input type="text" class="form-control" id="Veuillez saisir votre pr&eacute;nom" placeholder="Veuillez saisir votre pr&eacute;nom">
                </div>
                <br>
                <div class="form-check">
                    <label for="Sexe">Sexe*</label><br>
                    <input type="radio" name="sexe*" value="Neutre" required size="sexe">Masculin
                    <input type="radio" name="sexe*" value="Neutre" required size="sexe">F&eacute;minin
                    <input type="radio" name="sexe*" value="Neutre" required size="sexe">Neutre<br>
                </div>
                <div class="form-group"><br>
                    <label for="Date">Date de naissance*</label>
                    <input type="date" class="form-control" name="ddn" id="Date">
                </div>
                <div class="form-group">
                    <label for="text">Code postal*:</label><br>
                    <input type="text" class="form-control" id="text" maxlength="10">
                </div>

                <div class="form-group">
                    <label for="text">Adresse</label>
                    <input type="text" class="form-control" name="nom" id="nom" maxlength="30">
                </div>
                <div class="form-group">
                    <label for="text">Ville :</label>
                    <input type="text" class="form-control" name="nom" id="nom" maxlength="30">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email*</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="dave.joper@afpa.fr">
                </div>
                <form action="upload.php" method="post" enctype="multipart/form-data">
        <h2>Upload Fichier</h2>
        <label for="fileUpload">Fichier:</label>
        <input type="file" name="photo" id="fileUpload">
        <input type="submit" name="submit" value="Upload">
        <p><strong>Note:</strong> Seuls les formats .jpg, .jpeg, .jpeg, .gif, .png sont autorisés jusqu'à une taille maximale de 5 Mo.</p>
            </fieldset>

            <fieldset>
                <legend>
                    <h1>Votre demande</h1>
                </legend>

                <div class="form-group">
                    <label for="examplesujet">Veuillez s&eacute;lectionner un sujet</label>
                    <select class="form-control" id="examplesujet">
                      <option>Mes commandes</option>
                      <option>Question sur un produit</option>
                      <option>R&eacute;clamation</option>
                      <option>Autres</option>
                      
                    </select>
                </div>

                <div class="form-group">
                    <label for="examplequestion">Votre question*:</label>
                    <textarea class="form-control" id="examplequestion" rows="2"></textarea>
                </div>
            </fieldset>

            <input type="checkbox" name="j'accepte" value="j'accepte" checked required> * J'accepte le traitement informatique de ce formulaire<br>

            <button type="submit" class="btn btn-dark" id="submitbtn">Envoyer</button>
            <button type="reset" class="btn btn-dark">Annuler</button>

        </form>
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


        <script src="form.js"></script>
</body>




</html>
<input type="number" name="nom" id="number" maxlength="10" required size="code">