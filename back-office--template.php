<?php

  date_default_timezone_set("Europe/Paris"); // fuseau horaire
  setlocale(LC_TIME, "fr_FR.utf8","fra"); // jours et mois en français
  $dateDuJour = strftime("%A %d %B %Y");

  $fichier = "conf/products.json";
  $contenu = file_get_contents($fichier);
  $tableau = json_decode($contenu, JSON_OBJECT_AS_ARRAY);
  

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>wax-addict — boutique officielle</title>
  <meta name="description" content="Bienvenue dans la boutique privée “Wax-Addict”. Retrouvez notre toute dernière sélection de tissus africains hauts de gamme.">
  <link rel="stylesheet" href="assets/style.css">
</head>

<body class="back-office">
  <header><h2>wax-addict</h2></header>
  <main>
    <h2>Bienvenue dans votre espace privé</h2>
    <p>Voici les produits disponibles en ce <?php echo $dateDuJour; ?> :</p>

    <?php 

    foreach($tableau as $key => $contenu){
    echo 'nom du produit : ' .$contenu ['nom'] . '<br>'
    . 'longueur : ' .$contenu ['longueur'] . '<br>'
    . 'prix : ' .$contenu ['prix'] . '<br>'
    . 'nom alternatif : ' .$contenu ['nom alternatif'] . '<br>'
    . 'image : ' .'<img src= " '.$contenu ['image']. ' "width=180px>' . '<br>' ;

   
 }
?>
  </main>

  
  <footer><a href="logout.php">déconnexion</a></footer>
</body>

</html>