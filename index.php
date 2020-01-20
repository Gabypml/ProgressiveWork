<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Lien pr Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="styles.css" />

    <title>Portfolio de Gaby</title>
</head>
<body>
    <!--Navbar-->
    <nav
      class="navbar navbar-expand-md navbar-light bg-warning sticky-top border-bottom border-secondary text-white"
    >
    <div class="container">
    
        <button
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarCollapse"
          aria-label="Navigation Bar Toggler"
        >
          <span class="navbar-toggler-icon"></span>
        </button> <!--Changer les liens sinon ça n'ira jamais-->
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item" id="yellow">
              <a href="index.html" class="nav-link px-4">Accueil</a>
            </li>
            <li class="nav-item" id="yellow">
              <a href="carte.html" class="nav-link px-4">Présentation</a>
            </li>
            <li class="nav-item" id="yellow">
              <a href="photos.html" class="nav-link px-4">My Work</a>
            </li>
            <li class="nav-item active" id="yellow">
              <a href="restaurants.html" class="nav-link px-4">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--Jumbotron-->

    <div class="jumbotron jumbotron-fluid p-0 m-0">
        <div class="container-fluid p-0 m-0">
    
              <div class="image"> 
                  <div class="text-white text-center rgba-stylish-strong py-5 px-4">
                    <div class="py-5">
          
                      <div class="nom">
                        <h1 class="card-title h2 mt-5 mb-0">Gaby Pombo </h1>
                        <p class="mb-5 pb-3 px-md-5 mx-md-5 mt-0">Dévelopeur web</p>
                      </div>
              
                    </div>
                  </div>
              </div>
        
        </div>
      </div>

    <!--Présentation card-->

    <section class="container-fluid">
        <div class="carte card pt-0 mt-5 mb-5 border border-warning">
            <div class="row">
              <div class="col-md-6">
                <img src="Gabycopie.png" class="card-img" alt="Portrait">
              </div>
              <div class="col-md-4 text-justify">
                <div class="card-body">
                  <h4 class="card-title text-dark mt-5">Qui suis-je?</h4>
                  <p class="card-text text-dark">Bonjour à tous! Fraîchement formée chez Becode Charleroi je suis activement à la recherche d'un stage en tant que developpeuse front-end. Blablabla 
                  </p>
                </div>
              </div>
            </div>
          </div>
    </section>

    <!--Infos git, ajout du JS plus tard-->
    <section class="container-fluid">
        <div class="infosGit row">
            <h2>Informations:</h2>
        </div>
    </section>

<!--Formulaire-->
    <section class="container-fluid">
        <div class="Formulaire">
            <form action="index.php" method="POST"> 
            <h2 class="infoForm">Contactez-moi</h2>
                <label for="email">Adresse mail:</label>
                <input type="email" class="form-control" id="email" placeholder="Entrer votre mail">
                <label for="name">Nom:</label>
                <input type="text" class="form-control" id="name" placeholder="Entrer votre nom">
                <label for="surname">Prénom:</label>
                <input type="text" class="form-control" id="surname" placeholder="Entrer vore prénom">
                <div class="d-flex flex-row-reverse bd-highlight">
                    <!--<button type="button" class="btn btn-outline-dark p-2 bd-highlight" id="btn">Envoyer</button>-->
                    <input type = "submit" class="btn btn-outline-warning mt-3 mb-3 p-2 bd-highlight" id="btn" value = "Envoyer"/> 
                </div>
            </form>
        </div>
    </section>
</body>
</html>