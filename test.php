<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>

<div class="navCustom">
<nav class="navbar navbar-expand-lg navbar-light navbarCustom">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link fw-bold" aria-current="page" href="index.php">Acceuil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="authors.php">Créateurs</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
<br>

<?php
session_start();
if(isset($_GET['question'])) {
    $q = $_GET['question'];
    if(isset($_GET['update'])) {
         $_SESSION['p'] = $_SESSION['p'] + intval($_GET['update']);
        if($_GET['update'] === "reset") {
            $_SESSION['p'] = 0;
        }
    }
    echo $_SESSION['p'];
    if(isset($_GET['satan'])) {
            $_SESSION['SATAN'] = true;
    }
    if(isset($_GET['nc'])) {
        ?>
              <div class="fixed-bottom p-3">
                <div id="inner-message" class="alert alert-danger alert-dismissible fade show " role="alert">
                <strong>Look ></strong> Pour la question précédente : <a class="text-decoration-none" href="http://www.senat.fr/rap/l20-271/l20-2711.html#:~:text=Cette%20nouvelle%20infraction%20coexisterait%20avec,de%20quinze%20ans3(*)."> N'hésite pas à regarder par ici.</a>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            </div>
        <?php
    }
    
    if($q === "pseudo") {
        ?>
        <html>
            <div class="input-group input-group-sm mb-3 bodyC p-5">
                <span class="input-group-text" id="inputGroup-sizing-sm navbarCustom">Pseudo :</span>
                <input type="text" class="form-control navbarCustom" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                <br><br>
                <button type="button" class="btn btn-outline-success">Commencer</button>
                

            </div>
        
        <?php
        $_SESSION['p'] = 0;
    } elseif ($q === "1") {
        ?>
        <html>
        <div class="text-center">
            <h1>Avez-vous déjà ris du malheur des autres ?</h1>
            <br>
            <button type="button" class="btn btn-outline-success"><a href="test.php?question=2&update=1">Oui</a></button>
            <button type="button" class="btn btn-outline-danger"><a href="test.php?question=2&update=0">Non</a></button>
        </div>
        <?php
    } elseif ($q === "2") {
        ?>
        <html>
        <div class="text-center">
            <h1>Avez vous déjà ri d’une personne mentalement ou physiquement handicapée ?</h1>
            <br>
            <button type="button" class="btn btn-outline-success"><a href="test.php?question=3&update=1">Oui</a></button>
            <button type="button" class="btn btn-outline-danger"><a href="test.php?question=3">Non</a></button>
        </div>
        </html>
        <?php
    } elseif ($q === "3") {
        ?>
        <html>
        <div class="text-center">
            <h1>Avez-vous déjà embrassé quelqu'un ?</h1>
            <br>
            <button type="button" class="btn btn-outline-success"><a href="test.php?question=4&update=1">Oui</a></button>
            <button type="button" class="btn btn-outline-danger"><a href="test.php?question=4">Non</a></button>
        </div>
        </html>
        <?php
    } elseif ($q === "4") {
        ?>
        <html>
        <div class="text-center">
            <h1>Vous-êtes vous déjà masturbé ? <span class="red"> (Femme ou homme ça compte ! Je vous vois 👀)</span></h1>
            <br>
            <button type="button" class="btn btn-outline-info"><a href="test.php?question=5&update=2">De temps en temps</a></button>
            <button type="button" class="btn btn-outline-warning"><a href="test.php?question=5&update=3">Souvent</a></button>
            <button type="button" class="btn btn-outline-success"><a href="test.php?question=5&update=1">Oui, une fois.</a></button>
            <button type="button" class="btn btn-outline-danger"><a href="test.php?question=5">Jamais</a></button>
        </div>
        </html>
        <?php
    } elseif ($q === "5") {
        ?>
        <html>
        <div class="text-center">
            <h1>Jusqu’à l’orgasme ?</h1>
            <br>
            <button type="button" class="btn btn-outline-success"><a href="test.php?question=6&update=1">Oui</a></button>
            <button type="button" class="btn btn-outline-danger"><a href="test.php?question=6">Non</a></button>
        </div>
        </html>
        <?php
    } elseif ($q === "6") {
        ?>
        <html>
        <div class="text-center">
            <h1>Quelle est votre consomation de site pornographique ?</h1>
            <br>
            <button type="button" class="btn btn-outline-info"><a href="test.php?question=7&update=2">De temps en temps</a></button>
            <button type="button" class="btn btn-outline-warning"><a href="test.php?question=7&update=3">Souvent</a></button>
            <button type="button" class="btn btn-outline-success"><a href="test.php?question=7&update=1">une fois.</a></button>
            <button type="button" class="btn btn-outline-danger"><a href="test.php?question=7">Jamais</a></button>
        </div>
        </html>
        <?php
    } elseif ($q === "7") {
        ?>
        <html>
        <div class="text-center">
            <h1>Avez-vous déjà bu de l’alcool ?</h1>
            <br>
            <button type="button" class="btn btn-outline-success"><a href="test.php?question=8&update=1">Oui</a></button>
            <button type="button" class="btn btn-outline-danger"><a href="test.php?question=8">Non</a></button>
        </div>
        </html>
        <?php
    } elseif ($q === "8") {
        ?>
        <html>
        <div class="text-center">
            <h1>Avez-vous déjà drogué vos parents ?</h1>
            <br>
            <button type="button" class="btn btn-outline-success"><a href="test.php?question=9&update=5">Oui</a></button>
            <button type="button" class="btn btn-outline-danger"><a href="test.php?question=9">Non</a></button>
        </div>
        </html>
        <?php
    } elseif ($q === "9") {
        ?>
        <html>
        <div class="text-center">
            <h1>Avez-vous déjà drogué vos parents ?</h1>
            <br>
            <button type="button" class="btn btn-outline-success"><a href="test.php?question=10&update=5">Oui</a></button>
            <button type="button" class="btn btn-outline-danger"><a href="test.php?question=10">Non</a></button>
        </div>
        </html>
        <?php
    } elseif ($q === "10") {
        ?>
        <html>
        <div class="text-center">
            <h1>Avez-vous déjà parlé de vos pratiques sexuelles à l'école ou dans un lieu public ?</h1>
            <br>
            <button type="button" class="btn btn-outline-success"><a href="test.php?question=11&update=1">Oui</a></button>
            <button type="button" class="btn btn-outline-danger"><a href="test.php?question=11">Non</a></button>
        </div>
        </html>
        <?php
    } elseif ($q === "11") {
        ?>
        <html>
        <div class="text-center">
            <h1>Quelle est votre consomation de cigarette ?</h1>
            <br>
            <button type="button" class="btn btn-outline-info"><a href="test.php?question=7&update=2">De temps en temps</a></button>
            <button type="button" class="btn btn-outline-warning"><a href="test.php?question=7&update=3">Souvent</a></button>
            <button type="button" class="btn btn-outline-success"><a href="test.php?question=7&update=1">Une fois.</a></button>
            <button type="button" class="btn btn-outline-danger"><a href="test.php?question=7">Jamais</a></button>
        </div>
        </html>
        <?php
    } elseif ($q === "12") {
        ?>
        <html>
        <div class="text-center">
            <h1>Avez-vous déjà eu une relation sexuelle ?</h1>
            <br>
            <button type="button" class="btn btn-outline-success"><a href="test.php?question=13&update=1">Oui</a></button>
            <button type="button" class="btn btn-outline-danger"><a href="test.php?question=13">Non</a></button>
        </div>
        </html>
        <?php
    } elseif ($q === "13") {
        ?>
        <html>
            <div class="text-center">
            <h1>Consentie ?</h1>
            <br>
                <button type="button" class="btn btn-outline-success"><a href="test.php?question=14">Oui</a></button>
                <button type="button" class="btn btn-outline-danger"><a href="test.php?question=14&update=-1&nc=true">Non</a></button>
            </div>
        </html>
        <?php
    } elseif ($q === "14") {
        ?>
        <html>
            <div class="text-center">
            <h1>Avez-vous déjà fait un rêve hérotique ?</h1>
            <br>
                <button type="button" class="btn btn-outline-success"><a href="test.php?question=15&update=1">Oui</a></button>
                <button type="button" class="btn btn-outline-danger"><a href="test.php?question=15">Non</a></button>
            </div>
        </html>
        <?php
    } elseif ($q === "14") {
        ?>
        <html>
            <div class="text-center">
            <h1>Avez-vous déjà participer à un render-vous amoureux ?</h1>
            <br>
                <button type="button" class="btn btn-outline-success"><a href="test.php?question=15&update=1">Oui</a></button>
                <button type="button" class="btn btn-outline-danger"><a href="test.php?question=15">Non</a></button>
            </div>
        </html>
        <?php
    } elseif ($q === "15") {
        ?>
        <html>
            <div class="text-center">
            <h1>Avez-vous déjà été infidèle ?</h1>
            <br>
                <button type="button" class="btn btn-outline-success"><a href="test.php?question=16&update=1">Oui</a></button>
                <button type="button" class="btn btn-outline-danger"><a href="test.php?question=16">Non</a></button>
            </div>
        </html>
        <?php
    } elseif ($q === "16") {
        ?>
        <html>
            <div class="text-center">
            <h1>Avez-vous déjà été infidèle ?</h1>
            <br>
                <button type="button" class="btn btn-outline-success"><a href="test.php?question=16&update=1">Oui</a></button>
                <button type="button" class="btn btn-outline-danger"><a href="test.php?question=16">Non</a></button>
            </div>
        </html>
        <?php
    } elseif ($q === "17") {
        ?>
        <html>
            <div class="text-center">
            <h1>Que seriez-vous capable de faire pour de l'argent</h1>
            <br>
                <button type="button" class="btn btn-outline-light"><a href="test.php?question=18&update=2">Tourner un film pornographique.</a></button>
                <button type="button" class="btn btn-outline-info"><a href="test.php?question=18&update=3">Vendre ton âme.</a></button>
                <button type="button" class="btn btn-outline-success"><a href="test.php?question=18&update=3">Quitter ton ou ta meuf ou mec <span class="red">Si t'en a un(e) </span></a></button>
                <button type="button" class="btn btn-outline-warning"><a href="test.php?question=18&update=1">Passer une journée sans ton téléphone / pc / console.</a></button>
                <button type="button" class="btn btn-outline-danger"><a href="test.php?question=18&satan=true">Rien</a></button>
            </div>
        </html>
        <?php
    } elseif ($q === "18") {
        ?>
        <html>
            <div class="text-center">
            <h1>Avez-vous déjà fuguer des cours ?</h1>
            <br>
                <button type="button" class="btn btn-outline-success"><a href="test.php?question=19&update=1">Oui</a></button>
                <button type="button" class="btn btn-outline-danger"><a href="test.php?question=19">Non</a></button>
            </div>
        </html>
        <?php
    } elseif ($q === "19") {
        ?>
        <html>
            <div class="text-center">
            <h1>Pensez-vous avoir répondu honnêtement ?</h1>
            <br>
                <button type="button" class="btn btn-outline-success"><a href="test.php?question=20">Oui</a></button>
                <button type="button" class="btn btn-outline-danger"><a href="test.php?question=20&update=1">Non</a></button>
            </div>
        </html>
        <?php
    } elseif ($q === "20") {
        ?>
        <html>
            <div class="text-center">
            <h1>Avez-vous déjà ragé façe un jeu ?</h1>
            <br>
                <button type="button" class="btn btn-outline-success"><a href="test.php?question=21&update=1">Oui</a></button>
                <button type="button" class="btn btn-outline-success"><a href="test.php?question=21&update=2">Rage-quit</a></button>
                <button type="button" class="btn btn-outline-danger"><a href="test.php?question=21">Non</a></button>
            </div>
        </html>
        <?php
    } elseif ($q === "21") {
        ?>
        <html>
            <div class="text-center p-2">
            <h2>As-tu déjà pris un bain avec un membre du sexe opposé <span class="red fst-italic">Ta soeur ou ton frère à tes 2 ans ça compte pas 👀 !</span></h1>
            <br>
                <button type="button" class="btn btn-outline-success"><a href="test.php?question=end&update=1">Oui</a></button>
                <button type="button" class="btn btn-outline-danger"><a href="test.php?question=end">Non</a></button>
            </div>
        </html>
        <?php
    } elseif ($q === "end") {
        ?>
        <html>
            <div class="text-center p-2">
            <h1>Pffiou c'est fini enfin !</span></h1>
            <p>J'espère que tu as bien été gêné en tout cas !</p>
            <br>
            <h2>Bon voici des résultats : </h2>
            <h2>Tu as : <?= $_SESSION['p'] ?> points</h2>
            <?php
            if(isset($_SESSION['SATAN'])) {
                ?>
                <html>
                <br>
                <h2>Par contre tu es un ange, tu ne serais capable de rien pour de l'argent... Regarde ce billet s'envoler : 💸</h2>
                </html>
                <?php
            }
            ?>
            </div>
        </html>
        <?php
    }
    
}
?>
<style>
body {
    background-color: #CDCFFF;
}

.bodyC {
    background-color: #CDCFFF;
}

.navbarCustom {
    background-color: #E2E3FF;
}

.red {
    color: red;
}

</style>