<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

    <title>thibault | green energizing</title>
  </head>
  <body>
    <header>
      <?php include_once "templates/header.php" ?>
    </header>

    <main>
    
      <div class="div-wallpeper">

        <div id="carouselExampleCaptions" class=" carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active ">
              <img src="img/barley-malt.jpg" class="img-carou d_block w-100" alt="barley">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="h5-slide"> La santée par les plantes pour retrouver nos racines</h5>
                <p class="p-slide"> Dans chaque plante se trouve une ressource d'énergie caché</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/hop.jpg" class="img-carou d-block w-100" alt="hop">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="h5-slide"> La santée par les plantes pour retrouver nos racines</h5>
                <p class="p-slide"> chacun de ces êtres ont une utilitée</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/lemone.jpg" class="img-carou  d-block w-100" alt="lemon">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="h5-slide"> La santée par les plantes pour retrouver nos racines</h5>
                <p class="p-slide"> Jusqu'où les plante sont bénéfique pour l'Homme</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div> 
  
  
        <div class="div-wallpeper">
          <img src="img/wallpeper.jpg" alt="wallpeper" class="wallpeper" >
          <h3 class="title">Que peuvent nous apporter les plantes ?</h3>
          <div class="home-description flex wrap ">
            <div class="description">
              <h4 class="litle-title">VITAMINE C:</h4>
              <div class="flex">
                <p> <span class="text-red">La vitamine C est un antioxydant :</span>  elle est capable de combattre l’action néfaste des oxydants tels que les radicaux libres. Elle va contrer l’effet du vieillissement et les risques de mutations.<br>C’est aussi un stimulant immunitaire. Elle aide l’organisme à se défendre face aux attaques des micro-organismes types bactéries, virus, levures.<br>Elle protège également la paroi des vaisseaux sanguins, facilite l’assimilation du fer et la cicatrisation.<br>L’Apport Journalier Recommandé (AJR) par l’Europe est de 75 mg par jour pour les femmes et 90 mg pour les hommes ; en France, 110 mg / jour, pour un adulte de 20 à 60 ans.</p>
                <img src="img/vitamineC.png" alt="huile" class="img-home">
              </div>

            </div>
            <div class="description">
              <h4 class="litle-title">LES PROTEINE & ACIDES AMINES :</h4>
              <div class="flex">
                <p> <span class="text-red">Les protéines </span> sont la structure de la matière.<br> <span class="text-red">Une 20aine d’acide aminé</span>  constituent les protéines. Ce serait comme une 20aine de Lego différents disponibles pour construire les cellules du corps. Parmi ceux-ci 8 sont dit essentiels car ils ne peuvent pas être élaborés par le corps. Donc pour qu’une protéine soit assimilable, il est nécessaire de se nourrir d’une quantité équilibrée de ces 8 acides aminés essentiels. <br>Or fait quasi méconnu, les protéines des feuilles sont des protéines équilibrées. Il n’y a pas besoin de manger autre chose que les feuilles pour assimiler les protéines qui les composent.</p>
                <img src="img/proteines.jpg" alt="huile" class="img-home">
              </div>

            </div>

            <div class="description">
              <h4 class="litle-title">Lipides & acides gras :</h4>
              <div class="flex">
                <p> <span class="text-red">Les huiles </span> ont très mauvaises réputations car elles sont consommées en excès et de mauvaise qualité dans notre société. Les huiles ou graisses ne sont pas identiques. Les huiles végétales sont plus intéressantes car insaturées alors que les graisses animales (sauf pour les animaux sauvages**) sont saturés. Une graisse saturé encrasse le corps & peut provoquer à long terme des problèmes de santé. <br>Les acides gras sont les molécules de base pour la « construction » des lipides, comme les acides aminés pour les protéines. Il existe aussi des Acides Gras  Essentiels (AGE), car le corps ne peut pas les fabriquer de lui-même. Ce sont les Oméga 3 & les Oméga 6. Dans le règne végétal ce sont respectivement les acides alpha-linoléniques (ALA) & les acides linoléiques (AL).</P>
                <img src="img/huile.jpg" alt="huile" class="img-home">
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer>
      <?php include_once "templates/footer.php" ?>

    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>