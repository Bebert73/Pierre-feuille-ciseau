<?php 
if(empty($_POST['choix'])){
    header('Location: game.php');
}

if(isset($_POST['lock']) && !empty($_POST['choix'])){
    $select = array($pierre = "Pierre", $ciseau = "Ciseau", $feuille = "Feuille");
    $rand_keys = array_rand($select);


        
    if($_POST['choix'] === "Feuille" && $select[$rand_keys] === $ciseau){
        echo '<br> <h1 style="text-align:center; color:red"> Vous Avez Perdu ! </h1> ';
    } 

            
    if($_POST['choix'] === "Feuille" && $select[$rand_keys] === $pierre){
        echo '<br> <h1 style="text-align:center; color:yellow"> Vous Avez Gagner! </h1> ';
    } 

    if($_POST['choix'] === "Pierre" && $select[$rand_keys] === $feuille){
        echo '<br> <h1 style="text-align:center; color:red"> Vous Avez Perdu ! </h1> ';
    } 

    if($_POST['choix'] === "Pierre" && $select[$rand_keys] === $ciseau){
        echo '<br> <h1 style="text-align:center; color:yellow"> Vous Avez Gagner! </h1> ';
    } 

    
    if($_POST['choix'] === "Ciseau" && $select[$rand_keys] === $pierre){
        echo '<br> <h1 style="text-align:center; color:red"> Vous Avez Perdu ! </h1> ';
    } 

    if($_POST['choix'] === "Ciseau" && $select[$rand_keys] === $feuille){
        echo '<br> <h1 style="text-align:center; color:yellow"> Vous Avez Gagner! </h1> ';
    } 

    if($select[$rand_keys] === $_POST['choix']){
        echo '<br> <h1 style="text-align:center; color:orange"> Egalité </h1> ';
    } 

    if($select[$rand_keys] === $pierre){
        echo '<br> <div class="wrapper">  <img style="height: 15%; width: 13%;" src="pic/pierre.png" alt=""> </div>';
    } 

    if($select[$rand_keys] === $ciseau){
        echo '<br> <div class="wrapper"><img style="height: 15%; width: 10%;" src="pic/ciseau.png" alt=""> </div>';
    } 

    if($select[$rand_keys] === $feuille){
        echo '<br><div class="wrapper"> <img style="height: 15%; width: 13%;" src="pic/feuille.png" alt=""> </div>';
    } 

    // you
    
    if($_POST['choix'] === "Pierre"){
        echo '<br><h1 style="text-align:center; color:purple"> VS  </h1> <div class="wrapper"> <img style="height: 15%; width: 13%;" src="pic/pierre.png" alt=""> </div>';
    } 

    if($_POST['choix'] === "Feuille"){
        echo '<br><h1 style="text-align:center; color:purple"> VS </h1> <div class="wrapper"> <img style="height: 15%; width: 13%;" src="pic/feuille.png" alt=""> </div>';
    } 
        

    if($_POST['choix'] === "Ciseau"){
        echo '<br><h1 style="text-align:center; color:purple"> VS </h1> <div class="wrapper"> <img style="height: 15%; width: 13%;" src="pic/ciseau.png" alt=""> </div>';
    } 

}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styles.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="game.php">
    <div class="wrapper">
<button> Ressayer </button>
</form>
</div>
</body>
</html>
