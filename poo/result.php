<?php 
/** Bonton Appuyez + choix remplie = new objet -> fonction random  */
if(isset($_POST['lock']) && !empty($_POST['choix'])){
$obj = new pfc($_POST['choix']);
$obj->random();
$obj->winornot();
$obj->display();
}

/** Si le choix est vide alors il reste sur la page de base */
if(empty($_POST['choix'])){
    header('Location: game.php');
}

class pfc {

    private $choix; 
    
    function __construct($choix){
        $this->choix = $choix;
    }

/* method qui choisi aléatoirement une élément */
    public function random(){
        $select = array($pierre = "Pierre", $ciseau = "Ciseau", $feuille = "Feuille");
        $rand_keys = array_rand($select);
        $this->res = $select[$rand_keys];
    }
    
/** method qui affiche le resultat du bot et du joueur */
    public function display(){
        echo '<div class="center"> <img style="height: 15%; width: 13%;"src="pic/' . $this->res . '.png" alt=""> <br> <h1> VS </h1> <img style="height: 15%; width: 13%;"src="pic/' . $this->choix . '.png" alt=""> </div>';
    }

    /** method qui trouve si le joueur a gagner ou pas */
    public function winornot(){
        $tb = ["Pierre", "Feuille", "Ciseau"];
        $win = "<h1 id='win' class='resultat'> VOUS AVEZ WIN ! </h1>";
        $loose = "<h1 id='loose' class='resultat'> VOUS AVEZ PERDU ! </h1>";

       if($this->choix === $this->res){
            echo "<h1 id='eg' class='resultat'> EGALITE !</h1>";
            } else if($this->choix === $tb[1] && $this->res === $tb[0]){
            echo $win;
            } else if($this->choix === $tb[1] && $this->res === $tb[2]){
            echo $loose ;
            }else if($this->choix === $tb[0] && $this->res === $tb[2]){
            echo $win;
            } else if($this->choix === $tb[0] && $this->res === $tb[1]){
            echo $loose ;
            }else if($this->choix === $tb[2] && $this->res === $tb[1]){
            echo $win;;
            } else if($this->choix === $tb[2] && $this->res === $tb[0]){
            echo $loose ;
    }
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
